<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Exception;

class AdminController extends Controller
{
    protected function resolveModelClass(string $modelParam): string
    {
        $className = Str::studly(Str::singular($modelParam));
        return "App\\Models\\{$className}";
    }

    function dashboard() {
        return view("admin.admin");
    }

    function handleRoute(string $model , ?string $action = null, ?int $target = null) {

        $modelClass = $this->resolveModelClass($model);

        if (! class_exists($modelClass)) {
            abort(404, "Modelo '{$model}' no encontrado.");
        }

        $action = $action ?: 'index'; // valores de $action son [index , create , edit]
        $viewName = "admin.{$model}.{$action}";

        if (! view()->exists($viewName)) {
            abort(404, "Vista '{$viewName}' no encontrada.");
        }
      
        if ($action === 'edit' && $target === null) {

            return redirect()->route('admin.handle.view', ['model' => $model])->with('error', 'ID no especificado para editar.');

        }

        try {

            $records = $modelClass::all();
            $record = $target ? $modelClass::findOrFail($target) : null;

            return response()->view($viewName, compact('model', 'action', 'records', 'record'), 200);

        } catch (Exception $err) {

            return redirect()->route('admin.resume')->with('error','Error interno al redireccionar a la ruta');

        }
    }

    function create(string $model , Request $request) {

        $modelClass = $this->resolveModelClass($model);

        if (! class_exists($modelClass)) {
            abort(404, "Modelo '{$model}' no encontrado.");
        }

        try {

            if (property_exists($modelClass, 'rules')) {

                $data = $request->validate($modelClass::$rules);

            } else {

                $data = $request->all();

            }

            foreach ($request->files as $key => $file) {

                if ($request->hasFile($key) && $file->isValid()) {

                    $originalName = $file->getClientOriginalName();
                    $filename = time() . '_' . $originalName;
                    $destinationPath = public_path("image/uploads/{$model}");
                    $file->move($destinationPath, $filename);
                    $data[$key] = "image/uploads/{$model}/{$filename}";

                }
            }

            $modelClass::create($data);
            return redirect()->route('admin.handle.view', ['model' => $model])->with('success','Registro creado correctamente');

        } catch (Exception $err) {

            return redirect()->route('admin.handle.view', ['model' => $model])->with('error', 'Error interno al crear el registro.');

        }
    }

    function update(string $model , Request $request, int $target){

        $modelClass = $this->resolveModelClass($model);

        if (! class_exists($modelClass)) {
            abort(404, "Modelo '{$model}' no encontrado.");
        }

        try {
            $record = $modelClass::findOrFail($target);

            if (property_exists($modelClass, 'rules')) {

                $data = $request->validate($modelClass::$rules);

            } else {

                $data = $request->all();

            }

            foreach ($request->files as $key => $file) {

                if ($request->hasFile($key) && $file->isValid()) {

                    $originalName = $file->getClientOriginalName();
                    $filename = time() . '_' . $originalName;
                    $destinationPath = public_path("image/uploads/{$model}");
                    $file->move($destinationPath, $filename);
                    $data[$key] = "image/uploads/{$model}/{$filename}";

                } else {

                    $data[$key] = $record->$key;

                }
            }

            $record->update($data);
            return redirect()->route('admin.handle.view', ['model' => $model])->with('success','Registro actualizado correctamente');

        } catch (Exception $err) {

            return redirect()->route('admin.handle.view', ['model' => $model])->with('error','Error interno al actualizar el registro');

        }

    }

    function delete(string $model, int $target) {

        $modelClass = $this->resolveModelClass($model);

        if (! class_exists($modelClass)) {
            abort(404, "Modelo '{$model}' no encontrado.");
        }

        try {

            $modelClass::findOrFail($target)->delete();
            return redirect()->route('admin.handle.view', ['model' => $model])->with('success','Registro eliminado correctamente');

        } catch (Exception $err) {

            return redirect()->route('admin.handle.view', ['model' => $model])->with('error','Error interno al eliminar el registro');

        }

    }
}

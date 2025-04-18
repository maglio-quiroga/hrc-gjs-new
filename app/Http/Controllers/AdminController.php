<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

    function handleRoute(string $model , ?string $action = null) {

        $modelClass = $this->resolveModelClass($model);

        if (! class_exists($modelClass)) {
            abort(404, "Modelo '{$model}' no encontrado.");
        }

        $action = $action ?: 'index';
        $viewName = "admin.{$model}.{$action}";

        if (! view()->exists($viewName)) {
            abort(404, "Vista '{$viewName}' no encontrada.");
        }

        $records = $modelClass::orderBy('created_at', 'desc')->paginate(10);
        return view($viewName, compact('model', 'action', 'records'));

    }

    function create(string $model , Request $request) {

        $modelClass = $this->resolveModelClass($model);
        if (! class_exists($modelClass)) {
            abort(404, "Modelo '{$model}' no encontrado.");
        }

        if (property_exists($modelClass, 'rules')) {
            $data = $request->validate($modelClass::$rules); //por si agregan en los modelos validaciones estrictas.
        } else {
            $data = $request->all();
        }

        foreach ($request->files as $key => $file) {
            if ($request->hasFile($key) && $request->file($key)->isValid()) {
    
                $originalName = $file->getClientOriginalName();
                $filename = time() . '_' . $originalName;
    
                $destinationPath = public_path("image/uploads/{$model}");
                $file->move($destinationPath, $filename);
    
                $data[$key] = "image/uploads/{$model}/{$filename}";
            }
        }

        $modelClass::create($data);
        return redirect()->route('admin.handle.view', ['model' => $model]);
    }

    function update(string $model , Request $request, int $target){

        $modelClass = $this->resolveModelClass($model);

        if (! class_exists($modelClass)) {
            abort(404, "Modelo '{$model}' no encontrado.");
        }

        $record = $modelClass::find($target);

        if (! $record) {
            abort(404, "Registro con ID '{$target}' no encontrado.");
        }

        if (property_exists($modelClass, 'rules')) {
            $data = $request->validate($modelClass::$rules); //por si agregan en los modelos validaciones estrictas.
        } else {
            $data = $request->all();
        }

        foreach ($request->files as $key => $file) {
            if ($request->hasFile($key) && $request->file($key)->isValid()) {
    
                $originalName = $request->file($key)->getClientOriginalName();
                $filename = time() . '_' . $originalName;
    
                $destinationPath = public_path("image/uploads/{$model}");
                $request->file($key)->move($destinationPath, $filename);
    
                $data[$key] = "image/uploads/{$model}/{$filename}";
    
            } else {
                $data[$key] = $record->$key;
            }
        }

        $record->update($data);
        return redirect()->route('admin.handle.view', ['model' => $model]);

    }

    function delete(string $model, int $target) {

        $modelClass = $this->resolveModelClass($model);

        if (! class_exists($modelClass)) {
            abort(404, "Modelo '{$model}' no encontrado.");
        }

        $record = $modelClass::find($target);

        if (! $record) {
            abort(404, "Registro con ID '{$target}' no encontrado.");
        }

        $modelClass::destroy($target);
        return redirect()->route('admin.handle.view', ['model' => $model]);

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Exception;
use App\Models\Category;
use App\Models\Post;
use App\Models\Service;
use App\Models\Team;
use App\Models\User; 
use App\Models\PostImage;
use Illuminate\Support\Facades\Schema;

class AdminController extends Controller
{
    protected function resolveModelClass(string $modelParam): string
    {
        $className = Str::studly(Str::singular($modelParam));
        return "App\\Models\\{$className}";
    }

    function dashboard() {
        $categories = Category::orderByDesc('updated_at')->take(5)->get();
        $posts      = Post::orderByDesc('updated_at')->take(5)->get();
        $services   = Service::orderByDesc('updated_at')->take(5)->get();
        $teams      = Team::orderByDesc('updated_at')->take(5)->get();
        $users      = User::orderByDesc('updated_at')->take(5)->get();
        $post_images = PostImage::orderByDesc('updated_at')->take(5)->get();

        return view("admin.admin", compact('categories','posts','services','teams','users','post_images'));
    }

    function handleRoute(Request $request, string $model, ?string $action = null, ?int $target = null) {

        $modelClass = $this->resolveModelClass($model);

        if (! class_exists($modelClass)) {
            return redirect()->route('admin.resume')->with('error', 'El modelo no esta registrado.'.$modelClass);
        }

        $queryBuilder = $modelClass::query();
        $action = $action ?: 'index'; // valores de $action son [index , create , edit]
        $viewName = "admin.{$model}.{$action}";

        foreach ($request->query() as $field => $value) {
        if (in_array($field, ['page'])) {
            continue;
        }
        if (strlen(trim($value)) === 0) {
            continue;
        }
    
        if (Schema::hasColumn($modelClass::getModel()->getTable(), $field)) {
            $queryBuilder->where($field, 'like', "%{$value}%"); 
        }
    }

        if (! view()->exists($viewName)) {
            return redirect()->route('admin.resume')->with('error', 'No se ha podido encontrar la ruta.');
        }
      
        if ($action === 'edit' && $target === null) {

            return redirect()->route('admin.handle.view', ['model' => $model])->with('error', 'ID no especificado para editar.');

        }

        try {

            $records = $queryBuilder->orderByDesc('updated_at')->paginate(5)->appends($request->query());
            $record = $target ? $modelClass::findOrFail($target) : null;

            if ($request->ajax()) {

                return view($viewName, compact('model','action','records','record'))->render();

            }

            return response()->view($viewName, compact('model', 'action', 'records', 'record'), 200);

        } catch (Exception $err) {

            return redirect()->route('admin.resume')->with('error','Error interno al redireccionar a la ruta');

        }
    }

    function create(string $model , Request $request) {

        $modelClass = $this->resolveModelClass($model);

        if (! class_exists($modelClass)) {
            return redirect()->route('admin.resume')->with('error', 'El modelo no esta registrado.');
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
                    if ($model === 'post_images') {
                        $data['image'] = "image/uploads/{$model}/{$filename}";
                    } else {
                        $data[$key] = "image/uploads/{$model}/{$filename}";
                    }

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
            return redirect()->route('admin.resume')->with('error', 'El modelo no esta registrado.');
        }

        try {
            $record = $modelClass::findOrFail($target);

            if (method_exists($modelClass, 'updateRules')) {
                $data = $request->validate($modelClass::updateRules());
            } elseif (property_exists($modelClass, 'rules')) {
                $data = $request->validate($modelClass::$rules);
            } else {
                $data = $request->all();
            }

            //NO sobreescribe la contra si esta vacia :3
            if (empty($data['password'])) {
                unset($data['password']);
            }
        

            foreach ($request->files as $key => $file) {

                if ($request->hasFile($key) && $file->isValid()) {

                    $originalName = $file->getClientOriginalName();
                    $filename = time() . '_' . $originalName;
                    $destinationPath = public_path("image/uploads/{$model}");
                    $file->move($destinationPath, $filename);

                    if ($model === 'post_images') {
                        $data['image'] = "image/uploads/{$model}/{$filename}";
                    } else {
                        $data[$key] = "image/uploads/{$model}/{$filename}";
                    }
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
            return redirect()->route('admin.resume')->with('error', 'El modelo no esta registrado.');
        }

        try {

            $modelClass::findOrFail($target)->delete();
            return redirect()->route('admin.handle.view', ['model' => $model])->with('success','Registro eliminado correctamente');

        } catch (Exception $err) {

            return redirect()->route('admin.handle.view', ['model' => $model])->with('error','Error interno al eliminar el registro');

        }

    }
}

<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Service\PutRequest;
use App\Http\Requests\Service\StoreRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('dashboard.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        if (isset($data["image"])) {
            $data["image"] = $filename = time().".".$data["image"]->extension();
            $request->image->move(public_path("image/uploads/service"),$filename);
        }
        Service::create($data);
        return to_route("service.index")->with('status','Servicio agregado');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $service = Service::findOrFail($id);
        return view('dashboard.service.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = Service::findOrFail($id);
        return view('dashboard.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, string $id)
    {
        $data = $request->validated();
        if (isset($data["image"])) {
            $data["image"] = $filename = time().".".$data["image"]->extension();
            $request->image->move(public_path("image/uploads/service"),$filename);
        }
        $service = Service::findOrFail($id);

        $service->update($data);
        return to_route("service.index")->with('status','Servicio actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
        return to_route("service.index")->with('status','Servicio eliminado');
    }
}

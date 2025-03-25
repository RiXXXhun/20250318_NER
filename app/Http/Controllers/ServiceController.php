<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function apiGet()
    {
        $services = Service::query()->with(["cars", "mechanics"])->get();

        return response()->json($services);
    }

    public function apiCreate(Request $request)
    {
        $service = Service::create($request->all());

        return response()->json($service, 201);
    }

    public function apiUpdate(Service $service, Request $request)
    {
        $service->update($request->all());
        $service->save();

        return response()->json($service);
    }


    // ----------------------------------------------


    public function apiDelete(Service $service)
    {
        $service->delete();

        return response()->json("", 204);
    }

    public function list()
    {
        $services = Service::query()->with(["cars", "mechanics"])->get();

        return view("services.list", ["services" => $services]);
    }

    public function createForm()
    {
        return view("services.create");
    }

    public function updateForm(Service $service)
    {
        return view("services.update", ["service" => $service]);

    }   

    // -----------------------------------------------

    public function create(Request $request)
    {
        $service = Service::create($request->except("_token"));

        return redirect()->route("services.list");
    }

    public function update(Service $service, Request $request)
    {
        $service->update($request->except("_token"));
        $service->save();

        return redirect()->route("services.list");
    }

    public function delete(Service $service)
    {
        $service->delete();

        return redirect()->route("services.list")
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class CarController extends Controller
{

    public function apiGet()
    {
        $cars = Car::query()->with(["service"])->get();

        return response()->json($cars);
    }

    public function apiCreate(Request $request)
    {
        $car = Car::create($request->all());

        return response()->json($car, 201);
    }

    public function apiUpdate(Car $car, Request $request)
    {
        $car->update($request->all());
        $car->save();

        return response()->json($car);
    }


    // ----------------------------------------------


    public function apiDelete(Car $car)
    {
        $car->delete();

        return response()->json("", 204);
    }

    public function list()
    {
        $cars = Car::query()->with(["service"])->get();

        return view("cars.list", [
            "cars" => $cars
        ]); 
    }

    public function createForm()
    {
        return view("cars.create");
    }

    public function updateForm(Car $car)
    {
        return view("cars.update", [
            "car" => $car
        ]);
    }

    // -----------------------------------------------

    public function create(Request $request)
    {
        $car = Car::create($request->except(["_token"]));

        return redirect()->route("cars.list");
    }

    public function update(Car $car, Request $request)
    {
        $car->update($request->except(["_token"]));

        return redirect()->route("cars.list");
    }

    public function delete(Car $car)
    {
        $car->delete();

        return redirect()->route("cars.list");
    }


}

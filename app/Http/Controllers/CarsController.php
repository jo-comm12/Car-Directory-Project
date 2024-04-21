<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CarsFormRequest;
use App\Models\Cars;
use Illuminate\Support\Facades\Validator;

class CarsController extends Controller
{
    public function create()
    {
        return view ('frontend.cars-create');
    }

    public function store(Request $request)

    {
        $request->validate([
            'name' => 'required|min:3|max:255|string',
            'description' => 'required|max:255|string',
            'plate' => 'required|max:255|string'
        ]);

        $cars = new Cars();
        $cars->name = $request->name;
        $cars->description = $request->description;
        $cars->plate = $request->plate;
        $cars->save();

        return redirect('/cars/create')->with('status','Car Added');

    }
}

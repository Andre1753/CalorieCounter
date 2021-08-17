<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Meal;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MealController extends Controller
{
    private $validations;

    public function __construct()
    {
        $this->validations = [
            'name' => 'required',
            'amount' => 'required' ,
            'carbohydrate' => 'required',
            'protein' => 'required',
            'fat' => 'required',
        ];
    }

    public function index(Request $request)
    {
        return Inertia::render('Meals/Index', [
            'meals' => Meal::all(),
        ]);
    }

    public function create()
    {
        return Inertia::render('Meals/Create', [
            'foods' => Food::all(),
        ]);
    }

    public function store(Request $request)
    {
        dd($request);
        Food::create($this->validate($request, $this->validations));

        return redirect()->route('food.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function show(Meal $meal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function edit(Meal $meal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meal $meal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meal $meal)
    {
        //
    }
}

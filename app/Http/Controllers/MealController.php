<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Meal;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Validator;
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

    public function calendar()
    {
        return Inertia::render('Meals/Calendar', [
            'month_names' => ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
            'day_names' => ['Dom','Seg','Ter','Qua','Qui','Sex','Sab'],
        ]);
    }

    public function index()
    {
        return Inertia::render('Meals/Index', [
            'meals' => Meal::all(),
        ]);
    }

    public function create($date)
    {
        return Inertia::render('Meals/Create', [
            'foods' => Food::all(),
            'date' => $date
        ]);
    }

    public function store(Request $request) 
    {
        foreach($request->all() as $req)
        {
            $validator = Validator::make($req,[
                'amount' => 'required',
                'food_id' => 'required',
                'created_at' => 'required'
            ]);

            if ($validator->fails())
            {
                return redirect()->route('meal.create')->withErrors($validator);
            }
            else
            {
                Meal::create($req);
            }
        }

        return redirect()->route('meal.index');
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
        $meal->delete();
        return redirect()->route('meal.index');

    }
}

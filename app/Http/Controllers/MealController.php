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
            'foods' => Food::all()
        ]);
    }

    public function teste()
    {
        return Inertia::render('Meals/teste', []);
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

    public function createModal()
    {
        return Inertia::render('Meals/create-modal', []);
    }

    public function store(Request $request, $date) 
    {
        $requests = $request->all();

        $hour = $requests[0];
        $data = $requests[1];

        $fullDate = $date .' '. $hour;
        $finalDate = Carbon::createFromFormat('dmY H:i', $fullDate);
        
        foreach($data as $req)
        {
            $req['created_at'] = $finalDate;
            $validator = Validator::make($req,[
                'amount' => 'required',
                'food_id' => 'required',
                'created_at' => 'required'
            ]);

            if ($validator->fails())
            {
                return redirect()->route('meal.createModal')->withErrors($validator);
            }
            Meal::create($req);
        }

        return redirect()->route('meal.calendar');
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

<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Inertia\Inertia;

class FoodController extends Controller
{
    public function index(Request $request)
    {
        return Inertia::render('Foods/Index', [
            'foods' => Food::all(),
        ]);
    }

    public function create()
    {
        return Inertia::render('Foods/Create', []);
    }

    public function store(Request $request)
    {
        Food::create(
            $request->validate([
                'name' => 'required',
                'amount' => 'required' ,
                'carbohydrate' => 'required',
                'protein' => 'required',
                'fat' => 'required',
            ])
        );

        return redirect()->route('food.index');
    }

    public function destroy(Food $food)
    {
       $food->delete();
        return redirect()->route('food.index');
    }

    // public function update(Request $request)
    // {
    //     $rules = $this->validations;
    //     $rules['id'] = 'required|exists:leads';

    //     $postData = $this->validate($request, $rules);
    //     $postData['age'] = Carbon::parse($postData['dob'])->age;

    //     $lead = Lead::where('id', $postData['id'])
    //         ->update($postData);

    //     return redirect()
    //         ->route('lead.view', ['lead' => $postData['id']])
    //         ->with('success', 'Your chages are saved now.');
    // }
}

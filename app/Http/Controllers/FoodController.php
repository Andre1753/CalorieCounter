<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Inertia\Inertia;

class FoodController extends Controller
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
        Food::create($this->validate($request, $this->validations));

        return redirect()->route('food.index');
    }

    public function destroy(Food $food)
    {
       $food->delete();
        return redirect()->route('food.index');
    }

    public function edit(Food $food)
    {
        return Inertia::render('Foods/Create', []);
    }

    public function update(Request $request)
    {
        $rules = $this->validations;
        $rules['id'] = 'required|exists:food';

        $postData = $this->validate($request, $rules);

        Food::FindOrFail($postData['id'])->update($postData);

        return redirect()->route('food.index');
    }
}

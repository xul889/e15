<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index()
    {
        return view('hw',['drink'=>session('drink'),'ingredient'=>session('ingredient'),'spicy'=>session('spicy'),'food'=>session('food')]);
    }
    public function process(Request $request)
    {
        $request->validate([
            'drink' => 'required',
            'ingredient' => 'required',
            'spicy' => 'required',
        ]);
        // dump($request->all());
        $ingredient = $request->input('ingredient',null);
        $spicy = $request->input('spicy',null);
        $drink = $request->input('drink',null);
        $foodData = file_get_contents(database_path('food.json'));
        $food = json_decode($foodData,true);
        //dd($food);
        //Choose the food
        $foodResult = [];
        foreach ($food as $key => $value) {
            if(strtolower($value['ingredient']) == strtolower($ingredient)){
                $foodResult[] = $value;
            }
        }
        //dd($foodResult);
        return redirect('/')->with([
            'drink' => $drink,
            'ingredient' => $request->ingredient,
            'spicy' => $spicy,
            'food' => $foodResult,
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class MenuController extends Controller
{
    public function index(){
        $food = Food::all();
        return view('food.index', ['menu' => $food]);
    }
    public function show($id){
        $food = Food::findOrFail($id);
        return view('food.show', ['menu' => $food]);
    }

    public function create() {
        return view('food.create');
    }

    public function store(){
       $food = new Food();
       $food->name = request('name');
       $food->type = request('type');
       $food->dish = request('dish');
       $food->beverages = request('beverages');



       $food->save();

    //    return (request('beverages'));

        return redirect('/')->with('msg','Thank you for ordering!');
    }
    
    public function destroy($id){
        $food = Food::findOrFail($id);
        $food->delete();

        return redirect('/menu');

    }
}

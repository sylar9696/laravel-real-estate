<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\House;

class HouseController extends Controller
{
    //Rotta localhost/houses
    //Dove mostreremo tutti i dati del DB
    public function index(){

        //Ottenere i dati dal DB
        $houses = House::all();

        return view('pages.houses.index', compact('houses') );
    }

    //Rotta show localhost/houses/id
    public function show($id){

        $house = House::findOrFail($id);

        return view( 'pages.houses.show', compact('house') );
    }
}

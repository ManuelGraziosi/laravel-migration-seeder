<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //recupero dati dal DB
    public function index()
    {
        $trains = Train::all();

        return view("home", compact("trains"));
    }

    public function filtered()
    {

        $trains = Train::whereDate('departure_time', today())->get();
        return view("home", compact("trains"));
    }
}

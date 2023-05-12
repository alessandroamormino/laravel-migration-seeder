<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        // richiamo i dati dalla tabella trains creata 
        // $currentDate = date('Y-m-d');
        // $trains = Train::where('data_partenza', $currentDate)->get()->toArray();

        // richiamo tutti i dati 
        $trains = Train::all();

        return view('page/home', compact('trains'));
    }
}

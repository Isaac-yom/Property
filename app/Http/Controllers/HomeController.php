<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PropertyController;
use App\Models\Property; // Importation du modèle


class HomeController extends Controller
{
    public function index () {
        $properties = Property::orderBy('created_at', 'desc')->limit(4)->get(); 
        return view('home', ['properties' => $properties ]);
    }
}

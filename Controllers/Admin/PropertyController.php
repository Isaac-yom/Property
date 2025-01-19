<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property; // Importation du modèle
use App\Http\Requests\Admin\PropertyFormRequest;





class PropertyController extends Controller
{
    
    public function index()
    {
        return view('admin.properties.index',[
            'properties' => Property::orderBy('created_at', 'desc')->paginate(25) 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $property = new Property(); 

        $property->fill([
            'surface' => 40,
            'rooms' => 3,
            'bedrooms' => 1,
            'floor' => 0,
            'city' => 'Montpellier',
            'postal_code' => 34000,
            'sold' => 'false',
        ]);

        return view('admin.properties.form',[
            'property' =>  $property  
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PropertyFormRequest $request)
    {
        $property = Property::create($request -> validated());
        return to_route('admin.property.index')->with('success', 'Le bien a été bien crée');
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Property $property)
    {
        return view('admi.property.form', [
            'property' => $property
        ]);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(PropertyFormRequest $request, Property $property)
    {
        $propert ->update($request ->validatd());
        return to_route('admin.property.index')->with('success', 'Le bien a été bien crée');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Property $property)
    {
        return to_route('admin.property.index')->with('success', 'Le bien a été bien supprimer');
        
    }
}

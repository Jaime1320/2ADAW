<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $platos = [
            ["Tortilla de patatas",4.95,"Racion"],
            ["Chuletillas de cordero",9.95,"Racion"],
            ["Ensaladilla rusa",3.5,"Tapa"]
        ];


        $bebidas = [
            ["Cola",1.3,"Refresco"],
            ["Fanta de naranja",1.30,"Refresco"],
            ["Cerveza",1,"Alcohol"],
            ["Ron Barcelo",4,"Alcohol"]
        ];

        return view('/carta',
            ['bebidas' => $bebidas, 'platos' => $platos]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

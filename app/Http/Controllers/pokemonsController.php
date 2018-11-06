<?php

namespace App\Http\Controllers;
use App\Pokemon;
use Illuminate\Http\Request;

class pokemonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pokemon = new Pokemon;

        return view('pokemons.list',compact('pokemon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pokemons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pokemon = new Pokemon;
            // Guardando archivo imagen en 'storage/app/images'
            // $request->file('image')->public('images');

        if($request->hasFile('image')){

            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $path = public_path() .'\pokemon';        
            $file->move($path,$name);
            
            $pokemon->name = $request->name;
            $pokemon->skill = $request->skill;
            $pokemon->image = $name;
            $pokemon->save();
        } 

        return back();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('pokemons.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

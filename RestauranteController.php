<?php

namespace App\Http\Controllers;

use App\Restaurante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RestauranteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurantes = DB::table('restaurantes')->paginate(2);
        return view('restaurantes.index', compact('restaurantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('restaurantes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Restaurante::create($request->all());
        return redirect()->route('restaurantes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Restaurante  $restaurante
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurante $restaurante)
    {
        return view('restaurantes.show', compact('restaurante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Restaurante  $restaurante
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurante $restaurante)
    {
        return view('restaurantes.edit', compact('restaurante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Restaurante  $restaurante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurante $restaurante)
    {
        $request->validate(
            [
            'nombre' => 'required',
            'tmesa' => 'required',
            'nmesa' => 'required',
            'precio'=> 'required',
            'platillo'=> 'required',
            'fecha'=> 'required',
            'hora'=> 'required',
            'tiempo'=> 'required',
            'telefono' =>'required'
        ]
    );
        $restaurantes->update($request->all());

        return redirect()->route('restaurantes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Restaurante  $restaurante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurante $restaurante)
    {
        $restaurante->delete();
        return redirect()->route('restaurantes .index');
    }
}

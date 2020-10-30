<?php

namespace App\Http\Controllers;

use App\Turista;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TuristaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turistas = DB::table('turistas')->paginate(2);
        return view('turistas.index', compact('turistas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('turistas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Turista::create($request->all());
        return redirect()->route('turistas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Turista  $turista
     * @return \Illuminate\Http\Response
     */
    public function show(Turista $turista)
    {
        return view('turistas.show', compact('turista'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Turista  $turista
     * @return \Illuminate\Http\Response
     */
    public function edit(Turista $turista)
    {
        return view('turistas.edit', compact('turista'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Turista  $turista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Turista $turista)
    {
        $request->validate(
            [
            'nombre' => 'required',
            'apellidop' => 'required',
            'apellidom' => 'required',
            'estado'=> 'required',
            'municipio'=> 'required',
            'edad'=> 'required',
            'telefono'=> 'required',
            'correo' =>'required'
        ]
    );
        $turista->update($request->all());

        return redirect()->route('turistas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Turista  $turista
     * @return \Illuminate\Http\Response
     */
    public function destroy(Turista $turista)
    {
        $turista->delete();
        return redirect()->route('turistas.index');
    }
}

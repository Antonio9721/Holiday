<?php

namespace App\Http\Controllers;

use App\Destino;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DestinoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinos = DB::table('destinos')->paginate(4);
        return view('destinos.index', compact('destinos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('destinos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Destino::create($request->all());
        return redirect()->route('destinos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Destino  $destino
     * @return \Illuminate\Http\Response
     */
    public function show(Destino $destino)
    {
        return view('destinos.show', compact('destino'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Destino  $destino
     * @return \Illuminate\Http\Response
     */
    public function edit(Destino $destino)
    {
        return view('destinos.edit', compact('destino'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Destino  $destino
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Destino $destino)
    {
        $request->validate(
            [
            'nombre' => 'required',
            'comunidad' => 'required',
            'actividad' => 'required',
            'visitantes'=> 'required',
            'fecha'=> 'required',
            'tiempo' =>'required'
        ]
    );
        $destino->update($request->all());

        return redirect()->route('destinos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Destino  $destino
     * @return \Illuminate\Http\Response
     */
    public function destroy(Destino $destino)
    {
        $destino->delete();
        return redirect()->route('destinos.index');
    }
}

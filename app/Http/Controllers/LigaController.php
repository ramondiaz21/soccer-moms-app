<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Liga;


class LigaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ligas = Liga::all();
        return view('ligas.index', compact('ligas'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ligas.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'estado' => 'required',
            'ciudad' => 'required',
            'encargado' => 'required',
            'telefono' => 'required',
        ]);

        Liga::create($request->all());

        return redirect()->route('ligas.index')
            ->with('success', 'Liga creada exitosamente.');
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
        $liga = Liga::findOrFail($id);
        return view('ligas.edit', compact('liga'));
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
        $request->validate([
            'nombre' => 'required',
            'estado' => 'required',
            'ciudad' => 'required',
            'encargado' => 'required',
            'telefono' => 'required',
        ]);

        $liga = Liga::findOrFail($id);
        $liga->update($request->all());

        return redirect()->route('ligas.index')
            ->with('success', 'Liga actualizada exitosamente.');
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

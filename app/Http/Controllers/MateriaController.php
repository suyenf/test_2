<?php

namespace App\Http\Controllers;

use App\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Materia[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Materia::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return void
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Materia::create($request->only(['nombre', 'docente', 'tipo_materia']));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Materia $materia
     * @return \Illuminate\Http\Response
     */
    public function show(Materia $materia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Materia $materia
     * @return \Illuminate\Http\Response
     */
    public function edit(Materia $materia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Materia $materia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $materia)
    {
        $materia = Materia::find($materia);
        return $materia->update($request->only(['nombre', 'docente', 'tipo_materia']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Materia $materia
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $materia)
    {
        $materia = Materia::find($materia);
        return $materia->delete();
    }
}

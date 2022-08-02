<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storetipo_productoRequest;
use App\Http\Requests\Updatetipo_productoRequest;
use App\Models\tipo_producto;

class TipoProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storetipo_productoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storetipo_productoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tipo_producto  $tipo_producto
     * @return \Illuminate\Http\Response
     */
    public function show(tipo_producto $tipo_producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tipo_producto  $tipo_producto
     * @return \Illuminate\Http\Response
     */
    public function edit(tipo_producto $tipo_producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatetipo_productoRequest  $request
     * @param  \App\Models\tipo_producto  $tipo_producto
     * @return \Illuminate\Http\Response
     */
    public function update(Updatetipo_productoRequest $request, tipo_producto $tipo_producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tipo_producto  $tipo_producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(tipo_producto $tipo_producto)
    {
        //
    }
}

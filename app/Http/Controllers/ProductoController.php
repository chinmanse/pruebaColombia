<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreproductoRequest;
use App\Http\Requests\UpdateproductoRequest;
use Illuminate\Support\Facades\View;
use App\Models\producto;
use App\Models\tipo_producto;


class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->getProducts();
        return View::make('crud.list', compact(array('products')));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoProductos = $this->getTipoProducts();
        return View::make('crud.create', compact(array('tipoProductos')));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreproductoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreproductoRequest $request)
    {
        $data = $request->all();
        //dd($data);
        $product = new producto();
        
        $product->nombre = $data["nombre"];
        $product->descripcion = $data["descripcion"];
        $product->abreviacion = $data["abreviacion"];
        $product->costo = $data["costo"];
        $product->tipo_producto_id = $data["tipo_producto_id"];
        
        $product->save();
        
        return redirect("/");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($idProducto)
    {
        $tipoProductos = $this->getTipoProducts();
        $producto = producto::find($idProducto);
        return View::make('crud.update', compact(array('tipoProductos', 'producto')));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateproductoRequest  $request
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateproductoRequest $request, $idProducto)
    {
        $data = $request->all();
        //dd($data);
        $product = producto::find($idProducto);
        
        $product->nombre = $data["nombre"];
        $product->descripcion = $data["descripcion"];
        $product->abreviacion = $data["abreviacion"];
        $product->costo = $data["costo"];
        $product->tipo_producto_id = $data["tipo_producto_id"];
        
        $product->save();
        
        return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($idProducto)
    {
        $product = producto::find($idProducto);
        $product->estado = 0;
        $product->save();
        return redirect("/");
    }

    private function getProducts(){
        $products = producto::where('estado', 1)->get();
        return $products;
    }

    private function getTipoProducts(){
        $tipoproducts = tipo_producto::select('id', 'nombre')->get()->pluck('nombre', 'id');
        return $tipoproducts;
    }
}

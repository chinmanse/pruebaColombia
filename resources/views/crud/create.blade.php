@extends('layout')
<div class="titulo">
  <h1> Creacion de Producto</h1>
</div>
{{ Form::open(array('url' => '/store', 'method'=> 'post')) }}
<div class="opciones">
  <button type="submit"  class="btn btn-primary">Guardar</button>
</div>
<div class="contenido">
  
  
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Nombre:</label>
      <input type="text" name="nombre" class="form-control" id="exampleFormControlInput1" placeholder="Nombre del Producto">
    </div>

    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Descripcion:</label>
      <input type="text" name="descripcion" class="form-control" id="exampleFormControlInput1" placeholder="Descripcion del Producto">
    </div>

    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Abreviacion:</label>
      <input type="text" name="abreviacion" class="form-control" id="exampleFormControlInput1" placeholder="Descripcion del Producto">
    </div>

    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Costo:</label>
      <input type="number" name="costo" class="form-control" id="exampleFormControlInput1" placeholder="0">
    </div>

    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Tipo Producto:</label>
      {{ Form::select('tipo_producto_id', $tipoProductos, null, ["class" => "form-select"]) }}
    </div>
</div>
{{ Form::close() }}
@extends('layout')
<div class="titulo">
  <h1> Creacion de Producto</h1>
</div>
{{ Form::model($producto, array('url' => '/update/' .$producto->id, 'method'=> 'put')) }}
<div class="opciones">
  <button type="submit"  class="btn btn-primary">Editar</button>
</div>
<div class="contenido">
  
  
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Nombre:</label>
      <input type="text" name="nombre" value="{{$producto->nombre}}" class="form-control" id="exampleFormControlInput1" placeholder="Nombre del Producto">
    </div>

    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Descripcion:</label>
      <input type="text" name="descripcion" value="{{$producto->descripcion}}" class="form-control" id="exampleFormControlInput1" placeholder="Descripcion del Producto">
    </div>

    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Abreviacion:</label>
      <input type="text" name="abreviacion" value="{{$producto->abreviacion}}" class="form-control" id="exampleFormControlInput1" placeholder="Descripcion del Producto">
    </div>

    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Costo:</label>
      <input type="number" name="costo" value="{{$producto->costo}}" class="form-control" id="exampleFormControlInput1" placeholder="0">
    </div>

    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Tipo Producto:</label>
      {{ Form::select('tipo_producto_id', $tipoProductos, $producto->tipo_producto_id, ["class" => "form-select"]) }}
    </div>
</div>
{{ Form::close() }}
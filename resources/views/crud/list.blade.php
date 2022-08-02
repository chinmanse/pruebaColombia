@extends('layout')
<div class="titulo">
  <h1> Listado de Productos</h1>
</div>
<div class="opciones">
  <a href="/create" class="btn btn-primary">Nuevo</a>
</div>
<div class="contenido">
  <table class="table">
    <thead>
      <th>
        Producto
      </th>
      <th>
        Descripcion
      </th>
      <th>
        Costo
      </th>
      <th>
        Opciones
      </th>
    </thead>
    <tbody>
      @if(count($products) > 0)
        @foreach($products as $product)
          <tr>
            <td>
              {{ $product->nombre }}
            </td>
            <td>
              {{ $product->descripcion }}
            </td>
            <td>
              {{ $product->costo }}
            </td>
            <td>
              <a href="/edit/{{$product->id}}" class="btn btn-dark" >Editar</a>
              {{ Form::open(array('url' => '/delete/' . $product->id, 'method'=> 'delete')) }}
              <button type="submit" class="btn btn-danger">Eliminar</button>
              {{ Form::close() }}
            </td>
          </tr>
        @endforeach
      @else
        <tr>
          <td colspan="4">
            No se encontraron datos para mostrar
          </td>
        <tr>
      @endif
    </tbody>
  </table>
</div>
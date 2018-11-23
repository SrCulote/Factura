@extends('admin.index')
@section('title','Tags')
    

@section('contenido')

    <form action="{{url('/admin/producto')}}" method="post">

        @csrf

        <input type="text" value="idProducto" name="idProducto" placeholder="ID Producto">
        <input type="text" value="Nombre" name="nombre" placeholder="Nombre">
        <input type="text" value="cantidad" name="cantidad" placeholder="Cantidad">
        
        

        <input type="submit" value="Enviar">

    </form>

@endsection
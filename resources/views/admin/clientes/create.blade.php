@extends('admin.index')
@section('title','Clientes')
    

@section('contenido')

    <form action="{{url('/admin/clientes')}}" method="post">

        @csrf

        <input type="text" value="idCliente" name="idCliente" placeholder="ID Cliente">
        <input type="text" value="RFC" name="RFC" placeholder="RFC">
        <input type="text" value="Nombre" name="nombre" placeholder="Nombre">
        <input type="text" value="fecha" name="fecha" placeholder="Fecha">
        <input type="text" value="localidad" name="localidad" placeholder="Localidad">
        <input type="text" value="direccion" name="direccion" placeholder="Direccion">
        <input type="text" value="telefono" name="telefono" placeholder="Telefono">
        <input type="text" value="email" name="email" placeholder="Email">

        <input type="submit" value="Enviar">

    </form>

@endsection
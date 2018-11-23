@extends('admin.index')
@section('title','Tags')
    

@section('contenido')

    <form action="{{url('/admin/tags')}}" method="post">

        @csrf

        <input type="text" value="idfactura" name="idfactura" placeholder="ID Factura">
        <input type="text" value="iva" name="iva" placeholder="Iva">
        <input type="text" value="fechaFactura" name="fechaFactura" placeholder="Fecha de   Factura">
        <input type="text" value="idCliente" name="idCliente" placeholder="ID Cliente">
        <input type="text" value="idVendedor" name="idVendedor" placeholder="ID Vendedor">

        <input type="submit" value="Enviar">

    </form>

@endsection
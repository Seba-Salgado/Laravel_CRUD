@extends('../layouts.plantilla')


@section('cabecera')
Leer Registros.
@endsection

@section('contenido')
<h1>{{$producto->NombreArticulo}}</h1>
<h2>[{{$producto->Seccion}}]</h2>


@endsection

@section('pie')

@endsection
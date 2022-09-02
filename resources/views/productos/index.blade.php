@extends('../layouts.plantilla')


@section('cabecera')
Leer Registros.
@endsection

@section('contenido')
<ul>
@foreach($productos as $producto)
<li>
<a href="{{route('productos.edit',$producto->id)}}">{{$producto->NombreArticulo}}</a> <!-- hacemos loop con espacios (&nbsp)-->
{{$producto->Seccion}}&nbsp; 
{{$producto->Precio}}&nbsp;
{{$producto->Fecha}}&nbsp;
{{$producto->PaisOrigen}}

</li>
@endforeach
</ul>

@endsection

@section('pie')

@endsection
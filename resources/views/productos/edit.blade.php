@extends('../layouts.plantilla')


@section('cabecera')
Editar Registro.
@endsection

@section('contenido')

    {!! Form::model($producto,['route'=>['productos.update',$producto->id]]) !!}
    <!-- <form method='post' action='/productos/{{$producto->id}}'> -->
    @csrf
    <!-- Este input hidden ya lo necesitamos con collective -->
    <!-- <input type='hidden' name='_method' value='PUT'> -->
    <table>
        <tr>
            <td>
                Nombre
            </td>
            <td>
                <input type='text' name='NombreArticulo' value='{{$producto->NombreArticulo}}'>
               
            </td>
        </tr>

        <tr>
            <td>
                Seccion
            </td>
            <td>
                <input type='text' name='Seccion' value='{{$producto->Seccion}}'>
                
            </td>
        </tr>

        <tr>
            <td>
                Precio
            </td>
            <td>
                <input type='text' name='Precio' value='{{$producto->Precio}}'>
                
            </td>
        </tr>

        <tr>
            <td>
                Fecha
            </td>
            <td>
                <input type='text' name='Fecha' value='{{$producto->Fecha}}'>
                
            </td>
        </tr>

        <tr>
            <td>
                Pais Origen
            </td>
            <td>
                <input type='text' name='PaisOrigen' value='{{$producto->PaisOrigen}}'>
                
            </td>
        </tr>

        


        <tr>
            <td>
                <input type='submit' name='enviar' value='Enviar'>
            </td>

            <td>
                <input type='reset' name='limpiar' value='Limpiar Formulario'>
            </td>
        </tr>
    </table>
    {!! Form::close() !!}

    {!! Form::open(['route'=>['productos.destroy',$producto->id]]) !!}
<!-- <form method='post' action='/productos/{{$producto->id}}'> -->
    @csrf
    <!-- Estos inputs hidden, utilizando collective no los necesitamos! -->
    <!-- <input type='hidden' name='_method' value='DELETE'> -->

    <input type='submit' name='delete' value='Borrar'>
    {!! Form::close() !!}
<!-- </form> -->


@endsection

@section('pie')

@endsection
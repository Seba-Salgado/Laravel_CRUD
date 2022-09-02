@extends('../layouts.plantilla')


@section('cabecera')

@endsection

@section('contenido')

    <form method='post'>
        <input type='text' name='NombreArticulo'>

        <input type='submit' name='enviar' value='Enviar'>
</form>

@endsection

@section('pie')

@endsection
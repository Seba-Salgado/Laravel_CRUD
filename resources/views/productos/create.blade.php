@extends('../layouts.plantilla')


@section('cabecera')
Insertar nuevo Registro.
@endsection

@section('contenido')

    <!-- <form method='post' action='/productos'> -->
    {!! Form::open(['url' => '/productos', 'method' => 'post','files'=>true]) !!}
    @csrf
    <table>
        <tr>
            <td>
              {!! Form::label('NombreArticulo', 'Nombre') !!}
            </td>
            <td>
                <!-- <input type='text' name='NombreArticulo'> -->
               {!! Form::text('NombreArticulo')  !!}
               
            </td>
        </tr>

        <tr>
            <td>
             {!! Form::label('Seccion', 'Sección') !!}
            </td>
            <td>
                <!-- <input type='text' name='Seccion'> -->
                {!! Form::text('Seccion')  !!}
                
            </td>
        </tr>

        <tr>
            <td>
            {!! Form::label('Precio', 'Precio') !!}
            </td>
            <td>
            {!! Form::number('Precio', 'value')  !!}
                
            </td>
        </tr>

        <tr>
            <td>
            {!! Form::label('Fecha', 'Fecha') !!}
            </td>
            <td>
            {!! Form::date('Fecha', \Carbon\Carbon::now()) !!}
                
            </td>
        </tr>

        <tr>
            <td>
            {!! Form::label('PaisOrigen', 'PaisOrigen') !!}
            </td>
            <td>
            {!! Form::text('PaisOrigen')  !!}
                
            </td>
        </tr>

        <tr>
            <td>
                Subir imagen
            </td>
            <td>
                {!! Form::file('file') !!}
            </td>
        </tr>
        


        <tr>
            <td>
            {!! Form::submit('Enviar') !!}
            </td>

            <td>
            {!! Form::reset('Limpiar Form') !!}
            </td>
        </tr>
    </table>
    {!! Form::close() !!}

<!-- mensaje de error invocando a la variable $error de laravel-->

@if(count($errors)>0)
    <ul>
    @foreach($errors->all() as $error)
       <li> {{$error}}</li>
    @endforeach
</ul>
@endif



@endsection

@section('pie')

@endsection
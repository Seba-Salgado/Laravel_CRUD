@extends('../layouts.plantilla')


@section('cabecera')
Insertar nuevo Registro.
@endsection

@section('contenido')

    <form method='post' action='/productos'>
    @csrf
    <table>
        <tr>
            <td>
                Nombre
            </td>
            <td>
                <input type='text' name='NombreArticulo'>
               
            </td>
        </tr>

        <tr>
            <td>
                Seccion
            </td>
            <td>
                <input type='text' name='Seccion'>
                
            </td>
        </tr>

        <tr>
            <td>
                Precio
            </td>
            <td>
                <input type='text' name='Precio'>
                
            </td>
        </tr>

        <tr>
            <td>
                Fecha
            </td>
            <td>
                <input type='text' name='Fecha'>
                
            </td>
        </tr>

        <tr>
            <td>
                Pais Origen
            </td>
            <td>
                <input type='text' name='PaisOrigen'>
                
            </td>
        </tr>

        


        <tr>
            <td>
                <input type='submit' name='enviar' value='Enviar'>
            </td>

            <td>
                <input type='reset' name='Borrar' value='Borrar'>
            </td>
        </tr>
    </table>
</form>

@endsection

@section('pie')

@endsection
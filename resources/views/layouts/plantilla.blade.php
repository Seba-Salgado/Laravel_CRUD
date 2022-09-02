<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  

  <!-- CSS --> 

  <style>

    .imagenCabecera{
      height:100px;
    }

    .cabecera{
      text-align:center;
      font-size:x-large;
      font-family:Tahoma, Geneva, sans-serif;
      margin-top:50px;
      margin-bottom:50px;
      
    }

    .contenido form {
      width:300px;
      margin:0 auto;
    }

    .pie{
      position:fixed;
      bottom:0px;
      width:100%;
      font-size:0.7em;
      margin-bottom:15px;
    }

  </style>

  
  
  
  </head>
  <body>

  <div class='container'>

    @include('layouts.navbar')

<img src='/images/Logo_vector.png' class="imagenCabecera rounded float-end" />
  
<div class='cabecera'>
    @yield('cabecera')
    
</div>


<div class='contenido'>
    @yield('contenido')
</div>


<div class='pie'>
    @yield('pie')
    Laravel CRUD - 2022
</div>




</div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
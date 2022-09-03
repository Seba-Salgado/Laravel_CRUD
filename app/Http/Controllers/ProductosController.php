<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Producto;

use App\Http\Requests\createProductosRequest;  // para encontrar createProductosRequest para validacion

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //mostrar todo lo que hay en la tabla productos.
        //compact devuelve todo en index.blade.php
        $productos=Producto::all();
        return view('productos.index',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
       
    public function store(createProductosRequest $request)  // la validacion viene de createProductosRequest
    {
        // validacion 
        /* comentamos la validacion para usar el metodo request desde createProductosRequest
        $this->validate($request,[  'NombreArticulo'=>'required',
                                    'Seccion'=>'required',
                                    'Precio'=>'required',
                                    'Fecha'=>'required',
                                    'PaisOrigen'=>'required']);  */

        $producto=new Producto;
        
        $producto->NombreArticulo=$request->NombreArticulo;
        $producto->Seccion=$request->Seccion;
        $producto->Precio=$request->Precio;
        $producto->Fecha=$request->Fecha;
        $producto->PaisOrigen=$request->PaisOrigen;

        $producto->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $producto=Producto::findOrFail($id);

        return view('productos.show',compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //como es muy similar a show, copio inicialmente ese metodo
        $producto=Producto::findOrFail($id);

        return view('productos.edit',compact('producto'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $producto=Producto::findOrFail($id);      //definimos id a buscar
        $producto->update($request->all()); //hacemos update segun el request recibido

        return redirect('/productos');  //redirije al index
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $producto=Producto::findOrFail($id);      //definimos id a buscar
        $producto->delete(); // borramos

        return redirect('/productos');  //redirije al index
    }
}

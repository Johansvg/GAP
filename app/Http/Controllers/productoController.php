<?php

namespace App\Http\Controllers;
use App\Models\producto;

use Illuminate\Http\Request;

class productoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $producto = producto::all();
        return $producto;
        // return view('index')->with('productos', $producto);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return view('crear_producto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $producto = new producto();
        $producto->nombre_producto = $request->nombre_producto;
        $producto->descripcion_producto = $request->descripcion_producto;
        $producto->precio_producto = $request->precio_producto;
        $producto->save();

        $producto = producto::all();
        return $producto;
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
        $producto = producto::find($id);
        return $producto;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        // return view('editar_producto');
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
        $producto = producto::find($id);
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->save();
        $producto = producto::all();
        return $producto;
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
        $producto = producto::find($id);
        $producto->delete();
        $producto = producto::all();
        return $producto;
    }
}

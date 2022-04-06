<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        return view('admin.producto.index',[
            'productos' => $productos
        ]);
    }

    public function listado()
    {
        $productos = Producto::all();
        return view('admin.producto.listado',[
            'productos' => $productos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.producto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nombre' => 'required|string',
            'descripcion' => 'required|string',
        ],[
            'required' => 'El campo :attribute es obligatorio',
            'string' => 'El campo :attribute debe ser un texto',
        ],[
            'nombre' => 'Nombre'
        ]);

        if($validator->fails()){
            return redirect()->route('producto.listado')->withErrors($validator)->withInput();
        }

        try{
            $producto = new Producto();
            $producto->nombre = $request->nombre;
            $producto->descripcion = $request->descripcion;
            $producto->save();
            return redirect()->route('producto.listado')->with('success','Producto creado correctamente');
        }
        catch(\Exception $e){
            return redirect()->route('producto.listado')->withErrors('Error al crear el producto');
        }
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::find($id);
        return view('admin.producto.edit',[
            'producto' => $producto
        ]);
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
        $validator = Validator::make($request->all(),[
            'nombre' => 'required|string',
        ],[
            'required' => 'El campo :attribute es obligatorio',
            'string' => 'El campo :attribute debe ser un texto',
        ],[
            'nombre' => 'Nombre'
        ]);

        if($validator->fails()){

            return redirect()->route('producto.listado')->withErrors($validator)->withInput();
        }

        try{
            $producto = Producto::find($id);
            $producto->nombre = $request->nombre;
            $producto->save();
            return redirect()->route('producto.listado')->with('success','Producto actualizado correctamente');
        }
        catch(\Exception $e){
            return redirect()->route('producto.listado')->withErrors('Error al actualizar el producto');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            Producto::destroy($id);
            return redirect()->route('producto.listado')->with('success','Producto eliminado correctamente');
        }
        catch(\Exception $e){
            return redirect()->route('producto.listado')->withErrors('Error al eliminar el producto');
        }
    }
}

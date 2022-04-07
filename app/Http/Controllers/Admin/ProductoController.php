<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Imagen;
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
        $categorias = Categoria::all();
        return view('admin.producto.create', [
            'categorias' => $categorias
        ]);
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
            'imagenes.*' => 'image|mimes:jpeg,png,jpg|max:2048',
        ],[
            'required' => 'El campo :attribute es obligatorio',
            'string' => 'El campo :attribute debe ser un texto',
            'image' => 'El campo :attribute debe ser una imagen',
            'mimes' => 'El campo :attribute debe ser una imagen con formato jpeg,png,jpg',
            'max' => 'El campo :attribute debe ser una imagen con un tamaño menor a 2048MB',
        ],[
            'nombre' => 'Nombre'
        ]);

        if($validator->fails()){
            return redirect()->route('producto.listado')->withErrors($validator)->withInput();
        }

        try{

            $urlimagenes = [];
            if($request->hasFile('imagenes')){
                foreach($request->file('imagenes') as $imagen){
                    $nombre = time().'_'.$imagen->getClientOriginalName();
                    $imagen->move(public_path('images/productos'), $nombre);
                    $urlimagenes[] = $nombre;
                }
            }

            $producto = new Producto();
            $producto->nombre = $request->nombre;
            $producto->descripcion = $request->descripcion;
            $producto->save();
            if($request->categorias){
                $producto->categorias()->sync($request->categorias);
            }
            if($urlimagenes){
                foreach($urlimagenes as $urlimagen){
                    $imagen = new Imagen();
                    $imagen->url = $urlimagen;
                    $imagen->producto_id = $producto->id;
                    $imagen->save();
                }
            }
            return redirect()->route('producto.listado')->with('success','Producto creado correctamente');
        }
        catch(\Exception $e){
            return redirect()->route('producto.listado')->withErrors('Error al crear el producto');
            // return redirect()->route('producto.listado')->withErrors($e->getMessage());
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

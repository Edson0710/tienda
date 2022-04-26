<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Imagen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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
        // dd($request->all());
        $validator = Validator::make($request->all(),[
            'nombre' => 'required|string',
            'descripcion' => 'required|string',
            'menudeo' => 'required',
            'mayoreo' => 'required',
            'cantidad_mayoreo' => 'required',
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
            $producto = new Producto();
            $producto->nombre = $request->nombre;
            $producto->descripcion = $request->descripcion;
            $producto->menudeo = $request->menudeo;
            $producto->mayoreo = $request->mayoreo;
            $producto->cantidad_mayoreo = $request->cantidad_mayoreo;
            $producto->save();
            if($request->categorias){
                $producto->categorias()->sync($request->categorias);
            }

            $urlimagenes = [];
            if($request->hasFile('imagenes')){
                foreach($request->file('imagenes') as $imagen){
                    $nombre = time().'_'.$imagen->getClientOriginalName();
                    $imagen->move(public_path('images/productos/'.$producto->id), $nombre);
                    $urlimagenes[] = $nombre;
                }
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
            // return redirect()->route('producto.listado')->withErrors('Error al crear el producto');
            return redirect()->route('producto.listado')->withErrors($e->getMessage());
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
        $categorias = Categoria::all();
        return view('admin.producto.edit',[
            'producto' => $producto,
            'categorias' => $categorias
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
            'descripcion' => 'required|string',
            'menudeo' => 'required',
            'mayoreo' => 'required',
            'cantidad_mayoreo' => 'required',
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
            $producto->descripcion = $request->descripcion;
            $producto->menudeo = $request->menudeo;
            $producto->mayoreo = $request->mayoreo;
            $producto->cantidad_mayoreo = $request->cantidad_mayoreo;
            $producto->save();
            $producto->categorias()->sync($request->categorias);
            // Eliminar imagenes
            if($request->delete_imagenes){
                foreach($request->delete_imagenes as $imagen_eliminar){
                    $imagen = Imagen::find($imagen_eliminar);
                    File::delete(public_path('images/productos/'.$producto->id.'/'.$imagen->url));
                    $imagen->delete();
                }
            }
            $urlimagenes = [];
            if($request->hasFile('imagenes')){
                foreach($request->file('imagenes') as $imagen){
                    $nombre = time().'_'.$imagen->getClientOriginalName();
                    $imagen->move(public_path('images/productos/'.$producto->id), $nombre);
                    $urlimagenes[] = $nombre;
                }
            }
            if($urlimagenes){
                foreach($urlimagenes as $urlimagen){
                    $imagen = new Imagen();
                    $imagen->url = $urlimagen;
                    $imagen->producto_id = $producto->id;
                    $imagen->save();
                }
            }
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
            $imagenes = Imagen::where('producto_id',$id)->get();
            foreach($imagenes as $imagen){
                // Eliminar imagen de la carpeta
                File::delete(public_path('images/productos/'.$imagen->producto_id.'/'.$imagen->url));
            }
            // Borrar carpeta
            File::deleteDirectory(public_path('images/productos/'.$id));
            Producto::destroy($id);
            return redirect()->route('producto.listado')->with('success','Producto eliminado correctamente');
        }
        catch(\Exception $e){
            return redirect()->route('producto.listado')->withErrors('Error al eliminar el producto');
        }
    }
}

<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::all();
        return view('admin.categoria.index',[
            'categorias' => $categorias
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categoria.create');
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
            'nombre' => 'required|string|unique:categorias,nombre',
        ],[
            'required' => 'El campo :attribute es obligatorio',
            'string' => 'El campo :attribute debe ser un texto',
            'unique' => 'El campo :attribute ya existe'
        ],[
            'nombre' => 'Nombre'
        ]);

        if($validator->fails()){
            return redirect()->route('admin.categoria.index')->withErrors($validator)->withInput();
        }

        try{
            $categoria = new Categoria();
            $categoria->nombre = $request->nombre;
            $categoria->save();
            return redirect()->route('admin.categoria.index')->with('success','Categoria creada correctamente');
        }
        catch(\Exception $e){
            return redirect()->route('admin.categoria.index')->withErrors('Error al crear la categoria');
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
        $categoria = Categoria::find($id);
        return view('admin.categoria.edit',[
            'categoria' => $categoria
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
            'nombre' => 'required|string|unique:categorias,nombre,'.$id,
        ],[
            'required' => 'El campo :attribute es obligatorio',
            'string' => 'El campo :attribute debe ser un texto',
            'unique' => 'El campo :attribute ya existe'
        ],[
            'nombre' => 'Nombre'
        ]);

        if($validator->fails()){
            return redirect()->route('admin.categoria.index')->withErrors($validator)->withInput();
        }

        try{
            $categoria = Categoria::find($id);
            $categoria->nombre = $request->nombre;
            $categoria->save();
            return redirect()->route('admin.categoria.index')->with('success','Categoria actualizada correctamente');
        }
        catch(\Exception $e){
            return redirect()->route('admin.categoria.index')->withErrors('Error al actualizar la categoria');
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
        Categoria::destroy($id);
        return redirect()->route('admin.categoria.index')->with('success','Categoria eliminada correctamente');
    }
}

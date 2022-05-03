<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pedido;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = Pedido::all();
        return view('admin.pedido.index',[
            'pedidos' => $pedidos
        ]);
    }

    public function listado()
    {
        $pedidos = Pedido::all();
        return view('admin.pedido.listado',[
            'pedidos' => $pedidos
        ]);
    }

    public function carrito()
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
        $productos = Producto::all();
        return view('admin.pedido.create', [
            'productos' => $productos
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
            'precio_total' => 'required',
            'nombre' => 'required|string',
            'direccion' => 'required|string',
            'telefono' => 'required|integer',
            'email' => 'required|email',
        ],[
            'precio_total.required' => 'No se agregaron productos a este pedido',
            'required' => 'El campo :attribute es obligatorio',
            'email' => 'El campo :attribute debe ser un email válido',
            'integer' => 'El campo :attribute debe ser un número',
            'string' => 'El campo :attribute debe ser un texto',
        ],[
            'precio_total' => 'Precio total',
            'nombre' => 'Nombre',
            'direccion' => 'Direccion',
            'telefono' => 'Telefono',
            'email' => 'Email',
        ]);

        if ($validator->fails()) {
            return redirect()->route('pedido.listado')
                ->withErrors($validator)
                ->withInput();
        }

        try{
            // Generar codigo de compra
            $codigo = 'PED-'.date('YmdHis');
            $pedido = new Pedido();
            $pedido->codigo = $codigo;
            $pedido->nombre = $request->nombre;
            $pedido->direccion = $request->direccionn;
            $pedido->telefono = $request->telefono;
            $pedido->email = $request->email;
            $pedido->estado_id = 1;
            $pedido->precio_total = $request->precio_total;
            $pedido->fecha_compra = date('Y-m-d');
            $pedido->save();
            dd('Pedido registrado');
            return redirect()->route('pedido.listado')->with('success','Pedido creado correctamente');
        }catch(\Exception $e){
            return redirect()->route('pedido.listado')->with('error', 'Error al crear el pedido');
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
        //
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
    }
}

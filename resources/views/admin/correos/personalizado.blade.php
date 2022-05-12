<html lang="es">

    <head>
            <meta charset="UTF-8">
            <meta content="width=device-width, initial-scale=1" name="viewport">
            <meta name="x-apple-disable-message-reformatting">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta content="telephone=no" name="format-detection">
            <title>s</title>
    </head>
    @include('admin.correos.css')
    <body>
        <div>
            <div class="contenedor">
                <div class="encabezado pl-3 py-2">
                    <img  src="{{asset('images/logos/logo-gris.png')}}" alt="Petshop logo" title="Petshop logo" width="90">
                    <span class="ml-5 my-auto titulo">Arte y Diseño Santa Anita</span></div>
                <div class=" resumen mt-5">
                    <h2 class="text-center">{{$asunto}}</h2>
                        <p style="color: #333333;" class="mt-5 px-3">
                            Hola, <b>{{$pedido->nombre}}:</b>
                        </p>
                        <p style="color: #333333;" class="px-3 text-justify">
                            {{$mensaje}}
                        </p>
                        <div class="mt-5 px-3 py-2 table-back">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="2" style="width: 50%;">
                                            <h4>Resumen:</h4>
                                        </th>
                                        <th style="width: 50%;">
                                            <h4>Dirección:</h4>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Pedido #:</td>
                                        <td>{{$pedido->codigo}}</td>
                                        <td rowspan="3">{{$pedido->direccion}}</td>
                                    </tr>
                                    <tr>
                                        <td>Fecha:</td>
                                        <td>{{$pedido->fecha_compra}}</td>
                                    </tr>
                                    <tr>
                                        <td>Total:</td>
                                        <td>${{$pedido->precio_total}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                </div>
                <div class="articulos">
                    <div class="mt-5 px-3 py-2 table-back">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 30%;">
                                        <h4>Artículos</h4>
                                    </th>
                                    <th style="width: 35%;">
                                        <h6>Nombre</h6>
                                    </th>
                                    <th class="text-center" style="width: 15%;">
                                        <h6>Cant.</h6>
                                    </th>
                                    <th class="text-center" style="width: 20%;">
                                        <h6>Precio</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pedido->productos as $producto)
                                <tr>
                                    <td><img src="{{asset('images/productos/'.$producto->id.'/'.$producto->imagenes->first()->url)}}"
                                            width="100px" alt="..."></td>
                                    <td>{{$producto->nombre}}</td>
                                    <td class="text-center">{{$producto->pivot->cantidad}}</td>
                                    <td class="text-center">${{$producto->pivot->precio}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="contacto text-center pt-3"><a href target="_blank"><img
                            src="{{asset('images/logos/logo-gris.png')}}"
                            alt="Petshop logo" title="Petshop logo" width="108"></a>
                    <p class="mt-3"><span>Calle falsa 123,
                            Col. falsa,
                            CDMX</span><br><span>Teléfono: 1234567890</span><br><span>Email: <a href=""
                                target="_blank">correo@mail.com</a></span></p>
                </div>
            </div>
        </div>
    </body>

    </html>

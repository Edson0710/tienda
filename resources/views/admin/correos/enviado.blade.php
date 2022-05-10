<html lang="es">

    <head>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
                integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
                crossorigin="anonymous">
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
                <div class="encabezado pl-3 py-2"><img
                        src="https://tlr.stripocdn.email/content/guids/CABINET_5ebd51945adb862745b1a105fbb2c4f4/images/431502878865957.png"
                        alt="Petshop logo" title="Petshop logo" width="118"><span class="ml-5 my-auto">Nombre de
                        empresa</span></div>
                <div class=" resumen mt-5 text-center">
                    <h1>Gracias por tu compra</h2>
                        <p style="color: #333333;">En breve te enviaremos un correo con los detalles de tu compra. </p>
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
                                        <td>PED-12345677657</td>
                                        <td rowspan="3">Calle falsa 123,
                                            Col. falsa,
                                            CDMX</td>
                                    </tr>
                                    <tr>
                                        <td>Fecha:</td>
                                        <td>12/12/2019</td>
                                    </tr>
                                    <tr>
                                        <td>Total:</td>
                                        <td>$1,
                                            000.00</td>
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
                                <tr>
                                    <td><img src="https://assets.tramontina.com.br/upload/tramon/imagens/BEL/10835076PNM001G.png"
                                            width="100px" alt="..."></td>
                                    <td>Mesa para el jardín</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">$1,000.00</td>
                                </tr>
                                <tr>
                                    <td><img src="https://assets.tramontina.com.br/upload/tramon/imagens/BEL/10835076PNM001G.png"
                                            width="100px" alt="..."></td>
                                    <td>Mesa para el jardín</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">$100,000.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="total" align="right">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="pr-5">Subtotal:</td>
                                <td class="pl-5 text-right">$1,000.00</td>
                            </tr>
                            <tr>
                                <td class="pr-5">Envío:</td>
                                <td class="pl-5 text-right" style="color: #d48344;"><b>Gratis</b></td>
                            </tr>
                            <tr>
                                <td class="pr-5">Descuento:</td>
                                <td class="pl-5 text-right">$0.00</td>
                            </tr>
                            <tr>
                                <td class="pr-5"><b>Total:</b></td>
                                <td class="pl-5 text-right" style="color: #d48344;"><b>$100,000.00</b></td>
                            </tr>
                    </table>
                </div>
                <div class="contacto text-center pt-3"><a href target="_blank"><img
                            src="https://tlr.stripocdn.email/content/guids/CABINET_5ebd51945adb862745b1a105fbb2c4f4/images/431502878865957.png"
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

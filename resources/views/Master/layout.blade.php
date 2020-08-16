<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="estilos/layout.css">
    <link rel="stylesheet" href="estilos/estructura.css">
    <link rel="stylesheet" href="estilos/general.css">
    <link rel="stylesheet" href="estilos/productos.css">
    <link rel="stylesheet" href="estilos/tablero.css">  
    <link rel="stylesheet" href="estilos/ventanas.css">      
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="crossorigin="anonymous"></script>
    <script src="js/Animaciones.js"></script>    
    <script src="js/datos.js"></script>
    <title>Tablero</title>
</head>
<body>
    <div class="container">  
        @include('../ventanas.crudproducto')    
        <div class="header">
            <div class="fecha"><p>lunes 15 de marzo</p></div>
            <div class="pventa">
              <a href="/postventa">
                <div><img src='img/icon-caja.png' alt="icon"></div>
                <div><p>post</p></div>
              </a>
            </div>
            <div class="admin">
                <a href="/tablero">
                    <div><img src="img/icon-admin.png" alt="icon"></div>
                    <div><p>admin</p></div>
                </a>
            </div>
            <div class="salir">
                <a href="/"><div><img src="img/salir.png" alt="icon"></div></a>
            </div>
        </div>
        <div class="usuario">
            <img src="img/contacto.png" alt="">            
            <div>
                <p>gaspar</p>
                <div class="circule"><div></div><p>admin</p></div>
            </div>
        </div>
        <div class="barra-izquierda">           
            <div class="menu">
                <ul>
                    <li><div class="agrupar"><img src="img/tablero.png" alt=""><a href="/tablero">TABLERO</a></div></li>                    
                    <li><div class="agrupar"><img src="img/producto.png" alt=""><a href="/productos">PRODUCTO</a></div></li>
                    <li><div class="agrupar"><img src="img/proveedores.png" alt=""><a href="/proveedores">PROVEEDORES</a></div></li>
                    <li><div class="agrupar"><img src="img/inventario.png" alt=""><a href="/inventario">INVENTARIO</a></div></li>
                    <li id="list">
                        <div class="agrupar"><img src="img/reporte.png" alt="">REPORTES</div>
                        <ul id="hide">
                            <li> <a href="/ticket">TICKETS</a></li>
                            <li> <a href="/ventas">VENTAS</a></li>
                            <li> <a href="/perdidas">PERDIDAS</a></li>
                            <li> <a href="/estadisticas">ESTADISTICAS</a></li>
                            <li> <a href="/mercancia">MOVIMIENTOS</a></li>
                        </ul>
                    </li>
                    <li><div class="agrupar"><img src="img/empleado.png" alt=""> <a href="/empleados">EMPLEADOS</a></div></li>
                    <li><div class="agrupar"><img src="img/corte.png" alt=""><a href="/cortes">CORTES</a></div></li>
                </ul>
            </div>
        </div>
        <div class="seccion">
                @yield('contenido')
        </div>
    </div>
</body>
</html>
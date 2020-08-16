@extends('Master.layout')


@section('contenido')
<div class="grid">
    <div class="menu-superior">
        <div class="caja-menu">
            <img src="img/cajero.png" alt="caja">
            <p>Ingresar</p>
        </div>
       
        <div class="caja-menu">
            <img src="img/recibo.png" alt="caja">
            <p>Factura</p>
        </div>

        <div class="caja-menu">
            <img src="img/devoluciones.png" alt="caja">
            <p>Devolucion</p>
        </div>

        <div class="caja-menu">
            <img src="img/icon-corte.png" alt="caja">
            <p>Corte</p>
        </div>
        
    </div>
    <div class="caja-info">
        <div class="info">
            <div class="group-buscador">        
                <input type="search" placeholder="Producto">
                <div class="boton-buscador"><img src="img/buscar.png" alt=""></div>
            </div>  
            <span>
                <input type="number">
                <button>Agregar</button>
            </span>        
        </div>
        <hr>         
            <div class="tabla">
                <table>
                    <tr>
                        <th>numero lote</th>
                        <th>Nombre</th>
                        <th>precio</th>
                        <th>cantidad</th>
                        <th>importe</th>
                    </tr>     
                    <tr>
                        <td>14444</td>
                        <td>zaptos</td>
                    </tr>                                                                                          
                </table>
           </div>          
    </div>
</div>
@endsection
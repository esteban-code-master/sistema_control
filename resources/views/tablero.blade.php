@extends('Master.layout')

@section('contenido')
<div class="grid">
    <div class="menu-superior">
        <div class="caja caja1">
            <div class="contenido">
              <div class="text-float">
                <p>venta hoy</p>
                <p>$ 4050</p>
              </div>
              <img class="uno"src="img/ventas.png" alt="icon-venta">
            </div>
            <div class="detalle">
                <a href="/ventas">ver detalle</a>
            </div>
        </div>
    
        <div class="caja caja2">
            <div class="contenido">
              <div class="text-float">
                <p>Devoluciones hoy</p>
                <p>$ 4050</p>
              </div>
              <img src="img/regreso.png" alt="icon-venta">
            </div>
            <div class="detalle">
                <a href="">ver detalle</a>
            </div>
        </div>
        
        <div class="caja caja3">
            <div class="contenido">
              <div class="text-float">
                <p>Cortes Pendistes</p>
                <p>$ 4050</p>
              </div>
              <img src="img/cortes.png" alt="icon-venta">
            </div>
            <div class="detalle">
                <a href="">ver detalle</a>
            </div>
        </div>       
    </div>

    <div class="caja-info">
        <div class="info">
            <p>Productos por Agotarse</p>
            <p>2222222221</p>
        </div>
        <hr>
        <div class="tabla">
            <table>
                <tr>
                    <th> numer lote </th>
                    <th>Nombre</th>
                    <th>stock</th>
                </tr>
                <tr>
                    <td>14444</td>
                    <td>zaptos</td>
                    <td>8</td>
                </tr>                
            </table>
        </div>
    </div>
</div>

@endsection
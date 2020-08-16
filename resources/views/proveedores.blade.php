@extends('Master.layout')


@section('contenido')
<div class="grid">
    <div class="menu-superior">
        <div class="caja-menu">
            <img src="img/caja.png" alt="caja">
            <p>Agregar</p>
        </div>

        <div class="caja-menu">
            <img src="img/modificar.png" alt="caja">
            <p>Modificar</p>
        </div>
               
    </div>
    <div class="caja-info">
        <div class="info">
            <div class="group-buscador">        
                <input type="search" placeholder="Producto">
                <div class="boton-buscador"><img src="img/buscar.png" alt=""></div>
            </div>        
        </div>
        <hr>         
            <div class="tabla" id="info-productos">
                <table>
                    <tr>
                        <th> id provedor</th>
                        <th>Nombre</th>
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
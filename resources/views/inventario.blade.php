@extends('Master.layout')


@section('contenido')
<div class="grid">
    <div class="caja-info">
        <div class="info">
            <div class="group-buscador">        
                <input type="search" placeholder="Producto">
                <div class="boton-buscador"><img src="img/buscar.png" alt=""></div>
            </div>  
            <span>
                <button>Imprimir</button>
                <button>Registrar</button>   
            </span>                   
        </div>
        <hr>         
            <div class="tabla">
                <table>
                    <tr>
                        <th>numero lote</th>
                        <th>nombre</th>
                        <th>piezas</th>
                    </tr>     
                    <tr>
                        <td>14444</td>
                        <td>zaptos</td>
                        <td><input type="text"></td>
                    </tr>                                                                                          
                </table>
           </div>          
    </div>
</div>
@endsection
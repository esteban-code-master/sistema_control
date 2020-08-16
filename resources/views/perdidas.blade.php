@extends('Master.layout')


@section('contenido')
<div class="grid">
    <div class="caja-info">
        <div class="info">
            <div>        
                <input type="date">
                <input type="date">
                <img src="img/buscar.png" alt="">
            </div>                          
        </div>
        <hr>         
            <div class="tabla">
                <table>
                    <tr>
                        <th>fecha inventario</th>
                        <th>numero lote</th>
                        <th>nombre</th>
                        <th>stock real</th>
                        <th>stock sistem</th>
                        <th>diferencia</th>
                        <th>pesos</th>
                        <th>realizo</th>
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
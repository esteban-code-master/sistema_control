@extends('Master.layout')
@section('contenido')
<div class="grid">    
    <div class="caja-info">
        <div class="info">
            <div>        
                <img src="img/buscar.png" alt="">
                <input type="datetime-local">
            </div> 
             <span>
                <button>Imprimir</button>
             </span>                 
        </div>
        <hr>
        <div class="grupo">
           <div class="scroll">
            <div class="tabla">
                <table>
                    <tr>
                        <th> folio venta</th>
                        <th> fecha</th>
                        <th> cajero</th>
                        <th> total</th>

                    </tr>     
                    <tr>
                        <td>14444</td>
                        <td>zaptos</td>
                        <td>8</td>
                        <td>$333</td>
                    </tr>                                                                                          
                </table>
            </div>
           </div>
            <div class="producto">                   
               
            </div>
        </div>
    </div>
</div>
@endsection
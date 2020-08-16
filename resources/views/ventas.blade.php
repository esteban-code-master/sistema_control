@extends('Master.layout')

@section('contenido')
    <div class="grid">    
        <div class="caja-info">
            <div class="info">
                <div>        
                    <input type="date" placeholder="fecha1">
                    <input type="date" placeholder="fecha2">
                </div>            
                <button>IMPRIMIR
                </button>
            </div>
            <hr>
            <div class="grupo">
               <div class="scroll">
                <div class="tabla">
                    <table>
                        <tr>
                            <th> fecha</th>
                            <th>cajero</th>
                            <th>total-cajero</th>
                        </tr>     
                        <tr>
                            <td>14444</td>
                            <td>zaptos</td>
                            <td>8</td>                                                                        
                    </table>
                </div>
               </div>
                <div class="producto">                   
                  
                </div>
            </div>
        </div>
    </div>
@endsection
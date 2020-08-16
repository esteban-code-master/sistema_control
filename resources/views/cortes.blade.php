@extends('Master.layout')


@section('contenido')
<div class="grid">    
    <div class="caja-info">
        <div class="info">
            <p>Cortes pendientes</p>          
        </div>
        <hr>         
            <div class="tabla">
                <table>
                    <tr>
                        <th> clave</th>
                        <th>Nombre</th>
                        <th>fecha</th>
                    </tr>     
                    <tr>
                        <td>14444</td>
                        <td>zaptos</td>
                    </tr>                                                                                          
                </table>
           </div>          
    </div>

    <!-- otro cyuadro dividido -->
    <div class="caja-info">
        <div class="info">               
            <p>Realizar corte</p>
        </div>
        <hr>
        <div class="grupo">
           <div class="scroll">
            <div class="tabla">
                <table>
                    <tr>
                        <th> denominacion </th>
                        <th>ingresar</th>            
                    </tr>     
                    <tr>
                        <td>$ 500</td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td>$ 200</td>
                        <td><input type="text"></td>
                    </tr>                              
                    <tr>
                        <td>$ 100</td>
                        <td><input type="text"></td>
                    </tr>                              
                    <tr>
                        <td>$ 50</td>
                        <td><input type="text"></td>
                    </tr>                                                                                                                        
                    <tr>
                        <td>$ 20</td>
                        <td><input type="text"></td>
                    </tr>                              
                    <tr>
                        <td>$ 10</td>
                        <td><input type="text"></td>
                    </tr>                              
                    <tr>
                        <td>$ 5</td>
                        <td><input type="text"></td>
                    </tr>                              
                    <tr>
                        <td>$ 2</td>
                        <td><input type="text"></td>
                    </tr>                              
                    <tr>
                        <td>$ 1</td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td>$ 0.50</td>
                        <td><input type="text"></td>
                    </tr>                                                            
                </table>
            </div>
           </div>
           <div>
               <button>Ingresar</button>
           </div>
            <div class="producto">                   
               
            </div>
        </div>
    </div>

</div>
@endsection
@extends('Master.layout')


@section('contenido')
<div class="grid">
    <div class="menu-superior">
        <div class="caja-menu">
            <img src="img/icon-usuario.png" alt="caja">
            <p>Empleado</p>
        </div>

        <div class="caja-menu">
            <img src="img/icon-agregar.png" alt="caja">
            <p>Agregar</p>
        </div>
         
        <div class="caja-menu">
            <img src="img/modificar.png" alt="caja">
            <p>Modificar</p>
        </div>

        <div class="caja-menu">
            <img src="img/responsabilidad.png" alt="caja">
            <p>Adeudo</p>
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
            <div class="tabla">
                <table>
                    <tr>
                        <th>clave</th>
                        <th>Nombre</th>
                        <th>usuario</th>
                        <th>contraseña</th>
                        <th>Telefono</th>
                        <th>Privilegios</th>
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
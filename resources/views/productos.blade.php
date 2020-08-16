@extends('Master.layout')

@section('contenido') 
    <div class="grid">
        <div class="menu-superior">
            <div class="caja-menu" id="producto">
                <img src="img/caja.png" alt="caja">
                <p>Agregar</p>
            </div>
            {{$categoria ?? ''}}
            <div class="caja-menu" id="entrada">
                <img src="img/entrada.png" alt="caja">
                <p>Entrada</p>
            </div>

            <div class="caja-menu" id="salida">
                <img src="img/salida.png" alt="caja">
                <p>Salida</p>
            </div>

            <div class="caja-menu" id="categoria">
                <img src="img/categoria.png" alt="caja">
                <p>Categoria</p>
            </div>

        </div>
        <div class="caja-info">
            <div class="info">
                <div class="group-buscador">        
                    <input type="search" placeholder="Producto">
                    <div class="boton-buscador"><img src="img/buscar.png" alt=""></div>
                </div>            
                <p>Descripcion</p>
            </div>
            <hr>
            <div class="grupo">
               <div class="scroll">
                <div class="tabla">
                    <table id="productos-tabla">
                        <tr>
                            <th> numer lote </th>
                            <th>Nombre</th>
                            <th>categoria</th>
                            <th>proveedor</th>
                            <th>descripcion</th>
                            <th>precio</th>
                            <th>existencia</th>
                        </tr>                                                                                                         
                    </table>
                </div>
               </div>
                <div class="producto">                   
                   <div class="imagen">
                       <img  class="icon-producto" src="img/uno.jpg" alt="">
                       <div class="btn-sig"><img src="img/boton.png" ></div>
                       <div class="btn-atr"><img src="img/flecha.png" ></div>
                    </div>
                   <div class="info-prod">
                        <p>
                        fi Extensor de Cobertura Inalámbrico Universal, 300Mbps, Enchufe de Pared, Tipo Plug and Play, Puerto Ethernet, Luz Indicadora de Señal Inteligente
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
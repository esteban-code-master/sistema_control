<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{    
    function Index(){           
        return \view("productos");
    }
    
    function InsertProducto(Request $request){
        $codigo = $request->clave;
        $nombre = $request->nombre;
        $id_categoria = $request->id_categoria;
        $id_provedor = $request->id_proveedor;
        $descripcion = $request ->descripcion;
        $precio = $request->precio;                
        \DB::insert("insert into productos(codigo,nombre,id_categoria,id_proveedor,descripcion,precio,existencia,estatus) values(?,?,?,?,?,?,?,?)",[$codigo,$nombre,$id_categoria,$id_provedor,$descripcion,$precio,0,0]);    
    }

    function InsertEntrada(Request $request){
        $id_prod = $request->clave;
        $cantidad = $request ->cantidad;
        $id_sesion = 1; 
        \DB::insert("insert into entradas(id_producto,cantidad,id_sesion) values(?,?,?)",[$id_prod,$cantidad,$id_sesion]);
    }

    function InsertSalida(Request $request){
        $id_prod = $request->clave;
        $cantidad = $request ->cantidad;
        $id_sesion = 1; 
        \DB::insert("insert into salidas(id_producto,cantidad,id_sesion) values(?,?,?)",[$id_prod,$cantidad,$id_sesion]);
    }

    function InsertCategoria(Request $request){         
        $agregar = $request->categoria;  
        \DB::insert("insert into categorias(nombre) values(?)",[$agregar]); 
    }

    function BuscarProducto(Request $request)
    {        
         $producto = \DB::select('select codigo,p.nombre as nombre,c.nombre as categoria,prov.nombre as proveedor,descripcion,precio,existencia from  productos p inner join proveedores prov on p.id_proveedor = prov.id inner join categorias c on p.id_categoria = c.id', [1]);        
         return $producto ;
    }
}

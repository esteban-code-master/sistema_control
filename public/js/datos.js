$(document).ready(function () {

    // metodos ajax para enviar datos al servidor

   // buscar producto
   var buscar  = "clave";
    
        $.ajax({        
            type: "POST",
            url: "productos/buscar",
            data: {buscar:buscar},
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {                
                    MostrarProductos(response);                    
            },
            error:function(){
                alert("error");
            }
        });      
    function MostrarProductos(productos){
         productos.map((productos)=>{
                console.log(productos.codigo);
                var filas = `
                <tr>
                    <td>${productos.codigo}</td>
                    <td>${productos.nombre}</td>
                    <td>${productos.categoria}</td>
                    <td>${productos.proveedor}</td>
                    <td>${productos.descripcion}</td>
                    <td>${productos.precio}</td>
                    <td>${productos.existencia}</td>
                </tr>
                `;
                $('#productos-tabla').append(filas);
         })
        }
});
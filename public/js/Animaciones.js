$(document).ready(function () {
     
    $('#list').click(function (e) {  // metodo para abir el submenu de la barra ziquierda
        $('#hide').toggle(1000);
    });

    // los metodos siguientes tienen las funciones de agregar formularios dinamicos
    // junto con su respectivo ajax
    // y de destruir cada vez que se cierra la ventana

    //cerrar y destruir la ventana modal

    $('#cerrar').click(function (e) { 
        $("#generar").empty();
        $('#modal').hide();
    });
    
    //agregar producto
    const componenteProducto =   `
            <h1>Productos</h1><input id='Buscador'type='search'  placeholder='Buscar producto'>
            <label>Clave : <input id='clave' type='number' placeholder='Ingresa clave'></label>
            <label>Nombre : <input id='nombre' type='text'  placeholder='Ingresa clave'></label>
            <label>Precio : <input id='precio' type='text'  placeholder='Ingresa clave'></label>
            <label>Seleccione categoria
            <select id='categoria'>
                <option value=''>seleccione una categoria</option>
                <option value='1'>Dulces</option>
            </select>
            </label>
            <label>Seleccione proveedor
            <select name='' id='proveedor'>
                <option value=''>seleccione una proveedor</option>
                <option value='1'>gamesa</option>
            </select>
            </label>
            <label> Detalle de producto :     
            <textarea id='descripcion'></textarea>
            </label>
            <button id='btnProducto'>Guardar</button>
            <button>Eliminar</button>
    `;
    
    $('#producto').click(function (e) {              
        $("#generar").prepend(componenteProducto);
        $('#modal').show();   

        //metodo ajax 
        $("#btnProducto").click(function (e) { 
            e.preventDefault();
            var clave = $('#clave').val();
            var nombre = $('#nombre').val();
            var precio = $('#precio').val();
            var categoria = $('#categoria').val();
            var proveedor = $('#proveedor').val();
            var descripcion = $('#descripcion').val();
            $.ajax({
                type: "POST",
                url: "productos/producto",
                data: {clave:clave,nombre:nombre,precio:precio,id_categoria:categoria,id_proveedor:proveedor,descripcion:descripcion},
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {                      
                    alert("Agregado correctamente");    
                                     
                },
                error: function(response){ 
                    alert("algo a salido mal")
                }
            });
            return false;
        });      
    });


   // agregar entrada
    const movimiento = `<label>Clave : <input id ='clave' type='number' placeholder='Ingresa numero lote'></label><label>Cantidad : <input id='cantidad' type='number' placeholder='Ingrea cantidad'></label>`

    $('#entrada').click(function (e) { 
        $("#generar").prepend(`<h1>Entrada</h1>${movimiento}<button id='btnEntrada'>Guardar</button><button>Eliminar</button>`);
        $('#modal').show();
        //metodo ajax
        $("#btnEntrada").click(function (e) { 
            e.preventDefault();
            var clave = $('#clave').val();  // clave del producto que se registrara como una salida
            var cantidad = $('#cantidad').val(); // cantidad a registrar
            $.ajax({
                type: "POST",
                url: "productos/entrada",
                data: {clave:clave,cantidad:cantidad},            
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    alert("entrada realizada");
                },
                error: function(response){ 
                    alert("algo a salido mal")
                }
            });
            return false;
        });
    });

    // agregar salida

    $('#salida').click(function (e) { 
        $("#generar").prepend(`<h1>Salidas</h1>${movimiento}<button id='btnSalida'>Guardar</button><button>Eliminar</button>`);
        $('#modal').show();
        //metodo ajax
        $("#btnSalida").click(function (e) { 
            e.preventDefault();
            var clave = $('#clave').val();  // clave del producto que se registrara como una salida
            var cantidad = $('#cantidad').val(); // cantidad a registrar
            $.ajax({
                type: "POST",
                url: "productos/salida",
                data: {clave:clave,cantidad:cantidad},            
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    alert("salida realizada");
                },
                error: function(response){ 
                    alert("algo a salido mal")
                }
            });
            return false;
        });
    });

    //agregar categoria

    $('#categoria').click(function (e) {     
        $("#generar").prepend("<h1>Salidas</h1><label>Categoria : <input id ='categoria' type='text' placeholder='Ingresa nueva categoria'></label><button id='btnCategoria'>Guardar</button><button>Eliminar</button>");
        $('#modal').show();     
        //metodo ajax
        $("#btnCategoria").click(function (e) { 
            e.preventDefault();        
                var categoria = $('#categoria').val();                
                $.ajax({
                    type: "POST",
                    url: "productos/categoria",
                    data: {categoria:categoria},            
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        alert("nueva categoria agregada");                        
                    },
                    error: function(response){ 
                        alert("algo a salido mal")
                    }
                });        
            return false;
        });  
    });
});
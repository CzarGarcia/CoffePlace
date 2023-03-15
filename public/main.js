$(document).ready(function(){
   
$("#btnNuevo").click(function(){
    $("#formPersonas").trigger("reset");
    $(".modal-header").css("background-color", "#1cc88a");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nueva Persona");            
    $("#modalCRUD").modal("show");        
    id=null;
    opcion = 1; //alta
});    
    




var fila; //capturar la fila para editar o borrar el registro


    









// //botón EDITAR    
// $(document).on("click", ".btnEditar", function(){
//     fila = $(this).closest("tr");
//     id = parseInt(fila.find('td:eq(0)').text());
//     nombre = fila.find('td:eq(1)').text();
//     descripcion = fila.find('td:eq(2)').text();
//     precio = parseFloat(fila.find('td:eq(3)').text());
//     categoria = fila.find('td:eq(4)').text();
//     imagen = fila.find('td:eq(5)').text();
//     $(".modal-header").css("background-color", "#4e73df");
//     $(".modal-header").css("color", "white");
//     $(".modal-title").text("Editar Producto");            
//     $("#modalCRUD").modal("show");  
    
//     $("#nombre").val(nombre);
//     $("#descripcion").val(descripcion);
//     $("#precio").val(precio);
//     $("#categoria").val(categoria);
//     $("#imagen").val(imagen);
    

    
// });

// //botón BORRAR
});
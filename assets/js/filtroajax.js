$(document).ready(function(){

    $('#btnProFiltro').keyup(function(){
      
        $.ajax({
            url:'index.php',
            type:'post',
            dataType:'json',
            data:{c:'Productos',a:'filtrarProductos',valor:$(this).val()},
            success:function(res){
                $(this).val('');
                $('#tbodyPro').empty();
                var cont=0;
                
                for (var i =0; i<res.length ;  i++) {
                    cont++;
                    
                    var estado=null;
                    if (res[i].estado=='0') {
                        estado='<i style="color:red" class="bi bi-x-square-fill"></i>';
                    }else{
                        estado='<i style="color:green" class="bi bi-check-square-fill"></i>';
                    }
                    $('#tbodyPro').append(
                        '<tr>'+
                        '<th><a href="?c=Productos&a=mostrarActividad&id='+res[i].idproductos+'" data-toggle="tooltip" data-placement="bottom" title="Editar"><i style="color: blue;" class="bi bi-pencil-square"></i></a>'+
                        ' <a href="?c=Productos&a=eliminar&id='+res[i].idproductos+'"  onclick="javascript:return  confirm("Seguro de eliminar");"" data-toggle=" tooltip" data-placement="bottom" title="Eliminar"><i style="color: red;" class="bi bi-trash-fill"></i></a></th>'+
                        '<th scope="row">'+cont+'</th>'+
                        '<td><img src="'+res[i].foto+'" alt="" style="height: 50px;width:50px;"></td>'+
                        '<td>'+res[i].nombre+'</td>'+
                        '<td>'+String(res[i].precios)+'</td>'+
                        '<td>'+res[i].descripcion+'</td>'+
                        '<td>'+res[i].idsubcategorias+'</td>'+
                        '<td class="text-center">'+estado+'</td>'+
    
                    '</tr>'
                        );	
                }
    
            },
            error:function(xhr,status){
                
            },
            complete:function(xhar,status){
                
            }
        });
    });
});
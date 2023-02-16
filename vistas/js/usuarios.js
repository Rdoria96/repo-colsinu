/*=============================================
EDITAR USUARIO
=============================================*/
$(".btnEditarUsuario").click(function(){
    var idUsuario = $(this).attr("idUsuario");

    var datos = new FormData();
	datos.append("idUsuario", idUsuario);
    console.log(datos);

   

});
$(document).ready(function(){
	var tablaDatos = $("#table1");
	var route = "http://sisec.app/enterprices/";

	$("#table1").empty();
	$.get(route, function(res){
		$(res).each(function(key,value){
			tablaDatos.append("<tr><td>"+value.rfc+"</td><td>"+value.name+"</td><td>"+value.legalagent+"</td><td>"+value.phone+"</td><td>"+value.email+"</td><td>"+value.address+"</td><td><button class='btn btn-primary'>Editar</button><button class='btn btn-danger'>Eliminar</button></td></tr>");
		});
	});
});
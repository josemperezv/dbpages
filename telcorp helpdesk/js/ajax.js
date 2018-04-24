// JavaScript Document
 
// Función para recoger los datos de PHP según el navegador, se usa siempre.
function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
 
	try {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	} catch (E) {
		xmlhttp = false;
	}
}
 
if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
	  xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}
 
//Función para recoger los datos del formulario y enviarlos por post  
function SendData(){
 
  //div donde se mostrará lo resultados
  divResultado = document.getElementById('resultado');
  //recogemos los valores de los inputs
  nom=document.ticket_record.InputClient.value;
  ape=document.ticket_record.InputComment.value;
  tec=document.ticket_record.InputTech.value;
  pri=document.ticket_record.InputPrio.value;
  cat=document.ticket_record.InputCat.value;

  //instanciamos el objetoAjax
  ajax=objetoAjax();
 
  //uso del medotod POST
  //archivo que realizará la operacion
  //registro.php
  ajax.open("POST", "registro.php",true);
  //cuando el objeto XMLHttpRequest cambia de estado, la función se inicia
  ajax.onreadystatechange=function() {
	  //la función responseText tiene todos los datos pedidos al servidor
  	if (ajax.readyState==4) {
  		//mostrar resultados en esta capa
		divResultado.innerHTML = ajax.responseText
  		//llamar a funcion para limpiar los inputs
		LimpiarCampos();
	}
 }
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	//enviando los valores a registro.php para que inserte los datos
	ajax.send("InputClient="+nom+"&InputComment="+ape+"&InputTech="+tec+"&InputPrio="+pri+"&InputCat="+cat)
}
 
//función para limpiar los campos
function LimpiarCampos(){
  document.ticket_record.InputClient.value="";
  document.ticket_record.InputComment.value="";
  document.ticket_record.InputTech.value="";
  document.ticket_record.InputPrio.value="";
  document.ticket_record.InputCat.value="";
  document.ticket_record.InputClient.focus();
  $('#myModalNorm').modal('hide')
}
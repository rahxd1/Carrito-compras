function reg(){

var nom=document.getElementById('nombre').value;
var us=document.getElementById('alias').value;
var pa=document.getElementById('pass').value;
var con=document.getElementById('contra').value;


if(nom==""||us==""||pa==""||con==""||pa!=con){
 var divTag = document.createElement("div");
        divTag.id = "div1";
        //divTag.setAttribute("align","center");
        divTag.style.margin = "5px auto";
        divTag.className ="dDiv ";
        divTag.innerHTML = "Faltan datos por escrivir";
        document.body.appendChild(divTag); 
        if(pa!=con){alert("contraseñas diferentes")}
 /*alert("malo");
    window.location.href="pagina.php?valores"
	document.getElementById("mensaje")
	var mensaje="error faltan datos";
	document.innerHTML="error faltan datos";
	//seTimeout("document.getElementById('mensaje'),innerHTML=''","3000")
	*/}else{
		alert("Ya puede iniciar Seccion");
	document.form1.method='';
	document.form1.action='salvar.php';
	document.form1.submit();
	}
}

function actu(){
 
var nom=document.getElementById('anombre').value;
//var us=document.getElementById('aalias').value;
var pa=document.getElementById('apass').value;
//var con=document.getElementById('aacontra').value;
      // alert("vacio");

if(nom==""||pa==""){
 var divTag = document.createElement("div");
        divTag.id = "div1";
        divTag.style.margin = "5px auto";
        divTag.className ="dDiv ";
        divTag.innerHTML = "Faltan datos por escribir";
        document.body.appendChild(divTag);
		//alert("vacio");
}else{
	document.form3.method='GET';
	document.form3.action='uppdate.php';
	document.form3.submit();
	//alert("lleno");
	}



}
function busca(){

var nom=document.getElementById('bnombre').value;

if(nom==""){
 var divTag = document.createElement("div");
        divTag.id = "div1";
        divTag.style.margin = "5px auto";
        divTag.className ="dDiv ";
        divTag.innerHTML = "Faltan datos por escribir";
        document.body.appendChild(divTag);
		//alert("vacio");
}else{
	document.form4.method='GET';
	document.form4.action='consulta.php';
	document.form4.submit();
	//alert("lleno");
	}




}
/*
function borrAjax(id){

//var answer = confirm("desea borrar??")
if(!answer){return false}
else{
	ajax = nuevoAjax();
	ajax.open("GET",'actualiza.php?id=5',true);
	ajax.onreadystatechange=function() {
		if (ajax.readyState==1) {
		document.getElementById('mensaje').innetHTML='Enviando informacion...';
		//'borrando<img src="imagen.jif">';
		}
		if (ajax.readyState==4) {
		//document.getElementById('fila'+id).style.display='none'
		//var res=ajax-responseText
		//alert(res);
		//
			document.getElementById('mensaje').innetHTML='Script ejecutado con exito';
			}
		}
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		ajax.send(null);}

}*/



function accion(){
var nom=document.getElementById('vali00').value;
var pa=document.getElementById('vali01').value;


if(nom==""||pa==""){
 var divTag = document.createElement("div");
        divTag.id = "div1";
        divTag.style.margin = "5px auto";
        divTag.className ="dDiv ";
        divTag.innerHTML = "Faltan datos por escrivir";
        document.body.appendChild(divTag); 
                  }else{
                 // 	document.getElementById('logo').innerHTML="Bienvenido";
                 document.for00.method='GET';
                  document.for00.action='valida.php';
                  document.for00.submit();
                  }

}

function accion2(){
var nom=document.getElementById('admi1').value;
var pa=document.getElementById('admi2').value;


if(nom==""||pa==""){
 var divTag = document.createElement("div");
        divTag.id = "div1";
        divTag.style.margin = "5px auto";
        divTag.className ="dDiv ";
        divTag.innerHTML = "Faltan datos por escrivir";
        document.body.appendChild(divTag); 
                  }else{
                  
                  document.for11.method='GET';
                  document.for11.action='valida2.php';
                  document.for11.submit();
                  } 
                //  alert("entra");



}



function pro(){


var nom=document.getElementById('nombrep').value;
var pre=document.getElementById('presio').value;
var imag=document.getElementById('imag').value;
var text=document.getElementById('txt').value;


if(nom==""||pre==""||imag==""||text==""){
 var divTag = document.createElement("div");
        divTag.id = "div1";
        //divTag.setAttribute("align","center");
        divTag.style.margin = "5px auto";
        divTag.className ="dDiv ";
        divTag.innerHTML = "Faltan datos por escrivir";
        document.body.appendChild(divTag); 
     }else{
     	// alert("GUARDADO");
	document.formp.method='POST';
	document.formp.enctype='multipart/form-data';
	document.formp.action='psalvar.php';
	document.formp.submit();
	
  
}
}

function salva(){
 //alert("entra a salva");
var nom=document.getElementById('nombrep').value;
var pre=document.getElementById('presio').value;
var txt=document.getElementById('txt').value;
var imag=document.getElementById('imag').value;
      // alert("vacio");

if(nom==""||pre==""||txt==""){
 var divTag = document.createElement("div");
        divTag.id = "div1";
        divTag.style.margin = "5px auto";
        divTag.className ="dDiv ";
        divTag.innerHTML = "Faltan datos por escribir";
        document.body.appendChild(divTag);
		//alert("vacio");
}else{
	//alert("lleno1");/*
	document.form4.method='POST';
	document.form4.enctype='multipart/form-data';
	document.form4.action='puppdate.php';
	document.form4.submit();
	//alert("lleno");*/
	}



}

function carga(tipo){

	ajax=nuevoAjax();
	ajax.open("GET",'getCategoria.php?tipo='+tipo,true)
	ajax.onreadystatechange=function(){
		if(ajax.readyState==4){
			var cad=ajax.responseText;

			document.getElementById('contenedor').innerHTML=cad;

		}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-unrenconded");
	ajax.send(null);
}


function pre(tipo,tie){
  
	
	ajax=nuevoAjax();
	ajax.open("GET",'getImg.php?tipo='+tipo,true)
	ajax.onreadystatechange=function(){
		if(ajax.readyState==4){
			var res=ajax.responseText;
			var arreglo=res.split("@@");
			var nom=arreglo[1];
			var img=arreglo[0];
			var cost=arreglo[2];
			
			//document.getElementById('contenedor').innerHTML=cad;
			document.getElementById('contenedor').innerHTML='<img  src="imagenes/'+img+'"/ width=325 height=325 id="xs">';
			document.getElementById('contenedor2').innerHTML=nom;
			document.getElementById('carro').innerHTML='<p><hgroup><h2>Comprar</h2></hgroup><input type="hidden" id="nom" value="'+nom+'"><input type="hidden" id="cost" name="cost" value="'+cost+'">  <img src="imagenes/carr.png" width="100" height="100" ></br><input type="number" min="1" max="50" placeholder="numero" id="num" value="0"></p> </br></br><a href="#" onClick="carrito('+tie+');">Agregar al carrito</a>';

		}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-unrenconded");
	ajax.send(null);
}

function visual(tipo){
  
	
	ajax=nuevoAjax();
	ajax.open("GET",'getImg.php?tipo='+tipo,true)
	ajax.onreadystatechange=function(){
		if(ajax.readyState==4){
			var res=ajax.responseText;
			var arreglo=res.split("@@");
			var nom=arreglo[1];
			var img=arreglo[0];
			
			//document.getElementById('contenedor').innerHTML=cad;
			document.getElementById('contenedor').innerHTML='<img  src="imagenes/'+img+'"/ width=325 height=325 id="xs">';
			document.getElementById('contenedor2').innerHTML=nom;
			
		}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-unrenconded");
	ajax.send(null);
}

function nuevoAjax() {

    var xmlhttp=false;
     try  {
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

function carrito(tie){

	var producto=document.getElementById('nom').value;
	var cantidad=parseInt(document.getElementById('num').value);
	var usuario=document.getElementById('mede').value;
	var pre=parseInt(document.getElementById('cost').value);
    
    pre=pre*cantidad;
 
    mpo=tie;
	if(cantidad==0){
		alert("no puedes agregar 0 productos");
	}else{
		
	ajax=nuevoAjax();
	ajax.open("GET",'getpro.php?pro='+producto+'&&can='+cantidad+'&&user='+usuario+'&&tiem='+mpo+'&&pre='+pre,true)
	ajax.onreadystatechange=function(){
		if(ajax.readyState==4){
			var cad=ajax.responseText;
				alert(cad);
		//	document.getElementById('contenedor').innerHTML=cad;

		}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-unrenconded");
	ajax.send(null);

			
	}
	
}

function admin()
{

document.getElementById('lista').innerHTML='Login: <form id="for11" name="for11"><input type="text" name="admi1" id="admi1" placeholder="Manuel" required>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="password" name="admi2" id="admi2" placeholder="Contraseña" required></form><a href="#" onClick="return accion2();"> ENVIAR </a>';

}


function paga(){
	/*var answer = confirm("Comprara todos los articulos y se borraran los productos mostrados anteriormente \n ---Esta deacuerdo--- ")
if(!answer){return false}
else{*/
    window.location.href="pagall.php"
    //}


}

function salir(){
	var answer = confirm("Si tienes cosas en el carrito se agregara a copra \n ---Esta deacuerdo--- ")
if(!answer){return false}
else{
    window.location.href="salir.php?"
    }

}
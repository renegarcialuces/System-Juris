var fjuris= new Date();
addEventListener('load', cargarEventos, false);

function cargarEventos() {
  var btn = document.getElementById('btn1');
  btn.addEventListener('click',agregarInfo,false);
  var btn = document.getElementById('btn2');
  btn.addEventListener('click',limpiarInfo,false);
}


function cargarInfo() {
  var infoAgregar="";
  var tpderecho = document.getElementById('tpderecho').value;
  var tjuris = document.getElementById('tjuris').value;
  var njuris = document.getElementById('njuris').value;
  var fjuris = document.getElementById('fjuris').value;
  var cjuris = document.getElementById('cjuris').value;
  //infoAgregar = 'tpderecho='+encodeURIComponent(tpderecho)+'&tjuris='+encodeURIComponent(tjuris)+'&njuris='+encodeURIComponent(njuris)+'&fjuris='+encodeURIComponent(fjuris)+'&cjuris='+encodeURIComponent(cjuris);
  infoAgregar = 'tpderecho='+tpderecho+'&tjuris='+tjuris+'&njuris='+njuris+'&fjuris='+fjuris+'&cjuris='+cjuris;
  return infoAgregar;
}

var conex1;
function agregarInfo() {

  conex1 = new XMLHttpRequest();
  conex1.onreadystatechange = comprobarEnlace
  conex1.open('POST','php/agregar.php',true);
  //conex1.setRequestHeader("Content‐Type","application/x‐www‐form‐urlencoded");
  conex1.send(console.log(cargarInfo()));
}

function comprobarEnlace() {
  if (conex1.readyState == 4) {
      alert('Se agregó la información' + conex1.responseText);
  } else {
      alert('Conextando...' + conex1.readyState);
  }

}

function limpiarInfo() {
  alert('Limpiar información');
}

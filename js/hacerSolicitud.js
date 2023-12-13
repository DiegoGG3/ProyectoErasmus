window.addEventListener("load",function(){
  
  document.getElementById("botonSolicitar").addEventListener("click",function(ev){
    ev.preventDefault();
    var formulario=new FormData();
    formulario.append("curso", document.getElementById("curso").value);
    formulario.append("telefonoCandidato", document.getElementById("telefonoCandidato").value);
    formulario.append("correoCandidato", document.getElementById("correoCandidato").value);
    formulario.append("domicilioCandidato", document.getElementById("domicilioCandidato").value);
    formulario.append("convocatoriaId", document.getElementById("convocatoriaId").value);
    formulario.append("foto", document.getElementById("blob").value);



    var div=document.getElementById("divFiles");
    for(var i=1;i<div.childNodes.length;i++){
      
      if(div.childNodes[i].type=="file"){
        var file=(div.childNodes[i].files[0]);
        formulario.append(div.childNodes[i].id,file);
      }
    }
    fetch('./api/procesarSolicitud.php', {
      method: 'POST',
      body: formulario
    })
    .then(response => response.text())
    .then(data => {
      // location.reload();
      console.log(data);
    });  
  })



});
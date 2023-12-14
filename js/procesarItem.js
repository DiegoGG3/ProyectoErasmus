window.addEventListener("load",function(){
  
    document.getElementById("baremar").addEventListener("click",function(ev){
      ev.preventDefault();
      var formulario=new FormData();
      formulario.append("idSolicitud", document.getElementById("idSolicitud").value);

      var tabla=document.getElementById("tabla");
      for(var i=1;i<tabla.childNodes.length*3;i++){
        if (i==1||i==3||i==5||i==7) {

            console.log(tabla.childNodes[1].childNodes[i+1].childNodes[19].childNodes[0].value);            
            console.log(tabla.childNodes[1].childNodes[i+1].childNodes[3]);            
            console.log(tabla.childNodes[1].childNodes[i+1].childNodes[5]);            

        }
      }
      fetch('./api/procesarItem.php', {
        method: 'POST',
        body: formulario
      })
      .then(response => response.text())
      .then(data => {
        // location.reload();
        // console.log(data);
      });  
    })
  
  
  
  });
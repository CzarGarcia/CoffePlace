let btnChapu = document.getElementById("btnChapu");
let btnForum = document.getElementById("btnForum");
let btnMidtown = document.getElementById("btnMidtown");
let btnTerraza = document.getElementById("btnTerraza");
let btnCentro = document.getElementById("btnCentro");
let btnGran = document.getElementById("btnGran");
let lat = 0, lng = 0;

 function initMap() {
     const mapa = { lat: 20.6818674, lng: -103.3457676 };
   //Se centra el mapa
     const map = new google.maps.Map(document.getElementById("map"), {
       zoom: 15,
       center: mapa,
       title: "Inicio",
     });
     // El marcador se posiciona con el uluru
    
   }


//Creaciion del mapa
function mapa(){
  const mapa = { lat: lat, lng: lng };
  //Se centra el mapa
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 15,
    center: mapa,
  });

  // El marcador se posiciona con el uluru
  const marker = new google.maps.Marker({
    position: mapa,
    map: map,
    icon: "../imagenes/marker.png",
  });
  
}

// ! Funciones que cargan el mapa, con el boton provocan que el mapa cargue con la ubicacion guardada en el

btnForum.onclick = function(){
  lat = 20.6472558;
  lng = -103.322793;
  mapa();
}
btnChapu.onclick = function(){
  lat = 20.6742353;
  lng = -103.4105891;
  mapa();
}
btnMidtown.onclick = function(){
  lat = 20.694162;
  lng = -103.375735;
  mapa();
}
btnTerraza.onclick = function(){
  lat = 20.6878584;
  lng = -103.2980782;
  mapa();
}
btnCentro.onclick = function(){
  lat = 20.6870723;
  lng = -103.3549775;
  mapa();
}
btnGran.onclick = function(){
  lat = 20.673749;
  lng = -103.4057375;
  mapa();
}
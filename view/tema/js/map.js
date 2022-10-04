// FUNÇÃO PARA O MAPS

var map;

function initialize(){
    var mapPro = {
        center: new google.maps.LatLng(-3.119721, -59.983044),
        scrollWheel:false,
        zoom:20,
        mapTypeId:google.maps.MapTypeId.ROADMAP
    }

    map = new google.maps.Map(document.getElementById("map"),mapPro);
}	 

function addmarker(lat,lng,icon,content){
    var LatLng = {'lat':lat,'lng':lng}

    var marker = new google.maps.Marker({
        position:LatLng,
        map:map,
        icon:icon	
    });

     var infoWindow =new google.maps.InfoWindow({
         content:content,
         maxWidth:200,
         pixelOFFset: new google.maps.Size(0,20)
     });

     google.maps.event.addListener(marker,'click',function(){
         infoWindow.open(map,marker);
     });

 infoWindow.open(map,marker);

}

initialize();

var conteudo = '<p style="color:black;font-size:12px;padding:4px 0;">Meu endereço<p>'
addmarker(-3.119721,-59.983044,'',conteudo);

 map.panTo({'lat':-3.119028,'lng':-60.021732});

 setTimeout(function(){
     map.panTo({'lat':-3.109540, 'lng':-59.980500})
     map.setZoom(12)
 },3000)

var map;
var initialize;

initialize = function(){
    var latLng = new google.maps.LatLng(47.5837315,-2.8467996);
    var taille = 13.5;
    var myOptions = {
        scrollwheel: false,
        navigationControl: false,
        mapTypeControl: false,
        scaleControl: false,
		draggable: false,
        zoom      : 13, // Zoom par défaut
        center    : latLng, // Coordonnées de départ de la carte de type latLng
        mapTypeId : google.maps.MapTypeId.TERRAIN, // Type de carte, différentes valeurs possible HYBRID, ROADMAP, SATELLITE, TERRAIN
        maxZoom   : 20
    };

    map = new google.maps.Map(document.getElementById('map'), myOptions);

    var latLngpoi = new google.maps.LatLng(47.578375, -2.855092);
    var marker = new google.maps.Marker({
        position : latLngpoi,
        map      : map,
        title    : "Maison" 
    });

};

initialize();
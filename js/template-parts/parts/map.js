function initMap() {
    // The location of Uluru
    const uluru = {
        lat: 40.75755713966975,
        lng: -73.50042198650509
    };
    // The map, centered at Uluru
    const map = new google.maps.Map(document.getElementById("googlemaps"), {
        zoom: 17,
        center: uluru,
        draggable: false,
        mapTypeControl: false
    });

    const directionsRenderer = new google.maps.DirectionsRenderer({
        draggable: false,
    });
    // The marker, positioned at Uluru
    const marker = new google.maps.Marker({
        position: uluru,
        map: map,
        // icon: '/img/map_logo.svg'
    });
}
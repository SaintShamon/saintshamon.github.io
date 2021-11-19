// Initialize and add the map
function initMap() {
    // The location of Uluru
    const uluru = { lat: 49.97323333179539, lng: 36.2261189827207 };
    // The map, centered at Uluru
    const map = new google.maps.Map(document.getElementById("googlemaps"), {
        zoom: 18,
        center: uluru,
    });
    // The marker, positioned at Uluru
    const marker = new google.maps.Marker({
        position: uluru,
        map: map,
    });
}
function initMap() {
    var location = {lat: 47.8114215, lng: 22.8530763};
    var mapDiv = document.getElementById('map');
    var map = new google.maps.Map(mapDiv, {
        center: location,
        zoom: 16
    });
    var marker = new google.maps.Marker({
        position: location,
        map: map,
        title: 'S.C. Magnum S.R.L.'
    });
}

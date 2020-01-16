mapboxgl.accessToken = 'pk.eyJ1IjoianVhbmEyMDAxIiwiYSI6ImNrNGVjMXNqcTBjMG4zbG5veXYzbXBrYmcifQ.4leXzckxfjaUQKgFKuK-NQ';
var coordinates = document.getElementById('coordinates');
var map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/streets-v11',
center:[-58.43864955813255,-34.60821551026916],
zoom:14
});
 
var marker = new mapboxgl.Marker({
draggable: true
})
.setLngLat([-58.43864955813255,-34.60821551026916])
.addTo(map);
 
function onDragEnd() {
var lngLat = marker.getLngLat();
coordinates.style.display = 'block';
coordinates.innerHTML =
'Longitude: ' + lngLat.lng + '<br />Latitude: ' + lngLat.lat;
}
 
marker.on('dragend', onDragEnd);

function test() {
    console.log( "Ejecutando función test()" );
}

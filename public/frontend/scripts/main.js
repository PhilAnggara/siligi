var mymap = L.map('map').setView([-0.9999021774000512, 122.79749644623573], 9);
// Note that difference in the "lyrs" parameter in the URL:
// Hybrid: s,h;
// Satellite: s;
// Streets: m;
// Terrain: p;
googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}',{
  maxZoom: 20,
  subdomains:['mt0','mt1','mt2','mt3']
}).addTo(mymap);

$(document).ready(function() {
  $.getJSON('peta/json', function(data) {
    $.each(data, function (index) {

      var detail = '<h4 class="font-weight-bold">'+ data[index].nama_kecamatan + '</h4>';

      L.circle([data[index].lat, data[index].long], 2500, { 
        color: '#6DE459',
        fillColor: '#6DE459',
        fillOpacity: 0.7
      }).addTo(mymap).bindPopup(innerHTML = detail);

    });
  }); 
});

var popup = L.popup();
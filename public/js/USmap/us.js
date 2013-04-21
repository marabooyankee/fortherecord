var map = L.map('map').setView([37.8, -96], 4);
function getColor(d) {
    if(d==null){return '#00F'}//{return '#FAF5F7'}
    return d > 1000 ? '#800026' :
           d > 500  ? '#BD0026' :
           d > 200  ? '#E31A1C' :
           d > 100  ? '#FC4E2A' :
           d > 50   ? '#FD8D3C' :
           d > 20   ? '#FEB24C' :
           d > 10   ? '#FED976' :
                      '#FFEDA0';
            
}
function style(feature) {
    return {
        fillColor: getColor(feature.properties.density),
        weight: 2,
        opacity: 1,
        color: 'white',
        dashArray: '3',
        fillOpacity: 0.7
    };
}
L.tileLayer('http://{s}.tile.cloudmade.com/4a4e65d33c984c1291c5694df00a932e/997/256/{z}/{x}/{y}.png',
 {
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
    maxZoom: 18
}).addTo(map);
//L.geoJson(statesData, {style: style}).addTo(map);

//highlight
var geojson;
function highlightFeature(e) {
    var layer = e.target;
    //if(e.density!=null)
    //if(layer.feature.properties.density!=null)
      
      {
        layer.setStyle({
        weight: 5,
        color: '#666',
        dashArray: '',
        fillOpacity: 0.7

        });
      }
    

    if (!L.Browser.ie && !L.Browser.opera) {
        layer.bringToFront();
    }
    //hightlight 
    //if(layer.feature.properties.density!=null)
    { 
      info.update(layer.feature.properties);
      /*if(layer.feature.properties.name=='Ohio')
      { 
        var popup = L.popup()
          .setLatLng([41.4128, -81.8624])
          .setContent("I am a standalone popup.")
          .openOn(map);
      }
      if(layer.feature.properties.name=='Washington')
      {
        var popup = L.popup()
          .setLatLng([38.8830, -77.0163])
          .setContent("I am a standalone popup.")
          .openOn(map);
      }
      if(layer.feature.properties.name=='Texas')
      {
        var popup = L.popup()
          .setLatLng([29.551881, -95.098343])
          .setContent("I am a standalone popup.")
          .openOn(map);
      }*/
      
    }
    
}
function resetHighlight(e) {
    geojson.resetStyle(e.target);
    //hightlight
     info.update();
}
function zoomToFeature(e) {
    map.fitBounds(e.target.getBounds());
}
function onEachFeature(feature, layer) {
    layer.on({
        mouseover: highlightFeature,
        mouseout: resetHighlight,
        click: zoomToFeature
    });
}

//popup
geojson = L.geoJson(statesData, {
    style: style,
    onEachFeature: onEachFeature
}).addTo(map);

var info = L.control();

info.onAdd = function (map) {
    this._div = L.DomUtil.create('div', 'info'); // create a div with a class "info"
    this.update();
    return this._div;
};

// method that we will use to update the control based on feature properties passed
info.update = function (props) {
      this._div.innerHTML = '<h4>State Centers Reviews</h4>' +  (props ?
        '<b>' + props.name + '</b><br />' + props.density + ' Sentiments Level<sup>2</sup>'
        : 'Hover over a non-blue state');
};

info.addTo(map);

//legend
var legend = L.control({position: 'bottomright'});

legend.onAdd = function (map) {
    var div = L.DomUtil.create('div', 'info legend'),
        grades = [0, 10, 20, 50, 100, 200, 500, 1000],
        labels = ["Mad","Angry","Mourning","Sad","Tired","Missing","Loved"];

    // loop through our density intervals and generate a label with a colored square for each interval
    for (var i = 0; i < grades.length; i++) {
        div.innerHTML +=
            '<i style="background:' + getColor(grades[i] + 1) + '"></i> ' +
            grades[i] + (grades[i + 1] ? '&ndash;' + grades[i + 1] +" "+labels[i]+'<br>' : '+');
    }

    return div;
};

legend.addTo(map);

/*marker
var marker = L.marker([41.4128, -81.8624]).addTo(map);
marker.bindPopup("<b>Hello world!</b><br>I am a popup.").openPopup();
*/

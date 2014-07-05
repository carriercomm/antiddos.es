<script src="https://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="https://google-maps-utility-library-v3.googlecode.com/svn/trunk/markerclusterer/src/markerclusterer.js"></script>

<script>
var infoWindow = new google.maps.InfoWindow();
var markers = [];

function initialize() {

  if (typeof Lat==='undefined' || typeof Lng=='undefined'){
    Lat=30;//30.05;
    Lng= -25;//0.519;
  }

  var center = new google.maps.LatLng(Lat, Lng);

  if (typeof zoom=='undefined'){zoom=0.5;}
  if (typeof scrollwheel=='undefined'){scroll=false; }


  // Create an array of styles.
  var styles = [
    {
      "featureType": "administrative",
      "elementType": "geometry",
      "stylers": [
        { "visibility": "off" }
      ]
    },
    {
      "featureType": "water",
      "elementType": "geometry.stroke",
      "stylers": [
        { "visibility": "off" }
      ]
    },{
      "featureType": "water",
      "elementType": "labels.text.fill",
      "stylers": [
        { "visibility": "off" }
      ]
    },{
      "featureType": "water",
      "elementType": "labels.text.stroke",
      "stylers": [
        { "visibility": "off" }
      ]
    },{
      "featureType": "water",
      "elementType": "labels.icon",
      "stylers": [
        { "visibility": "off" }
      ]
    },{
      "featureType": "transit",
      "elementType": "geometry",
      "stylers": [
        { "visibility": "off" }
      ]
    },{
      "featureType": "transit",
      "elementType": "labels",
      "stylers": [
        { "visibility": "off" }
      ]
    },{
      "featureType": "road",
      "elementType": "geometry",
      "stylers": [
        { "visibility": "off" }
      ]
    },{
      "featureType": "road",
      "elementType": "labels",
      "stylers": [
        { "visibility": "off" }
      ]
    },{
      "featureType": "poi",
      "stylers": [
        { "visibility": "off" }
      ]
    },{
      "featureType": "landscape",
      "elementType": "labels",
      "stylers": [
        { "visibility": "off" }
      ]
    },{
      "featureType": "administrative.province",
      "stylers": [
        { "visibility": "off" }
      ]
    },{
      "featureType": "administrative.neighborhood",
      "stylers": [
        { "visibility": "off" }
      ]
    },{
      "featureType": "administrative.locality",
      "elementType": "geometry",
      "stylers": [
        { "visibility": "off" }
      ]
    },{
      "featureType": "administrative.locality",
      "elementType": "labels.text.stroke",
      "stylers": [
        { "color": "#ffffff" }
      ]
    },{
      "featureType": "administrative",
      "elementType": "geometry.stroke",
      "stylers": [
        { "color": "#d0e0ea" },
        { "weight": 1.2 }
      ]
    },{
      "featureType": "administrative.country",
      "elementType": "labels.text.fill",
      "stylers": [
        { "color": "#1f4d94" }
      ]
    },{
      "featureType": "administrative.country",
      "elementType": "labels.text.stroke",
      "stylers": [
        { "color": "#ffffff" },
        { "weight": 4.1 }
      ]
    },{
      "featureType": "administrative.land_parcel",
      "elementType": "labels.text.fill"  }
  ];
  var datax = { "pops": <?php echo html_entity_decode($edge_groups->items) ?>};



  // Create a new StyledMapType object, passing it the array of styles,
  // as well as the name to be displayed on the map type control.
  var styledMap = new google.maps.StyledMapType(styles,
    {
      name: "Styled Map"
    });

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: zoom,
    minZoom: 2,
    center: center,
    scrollwheel: scroll,
    mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
    }
  });

  map.mapTypes.set('map_style', styledMap);
  map.setMapTypeId('map_style');

  icon = new google.maps.MarkerImage('https://server-cloud.com/images/partner/cdn_location.png');

  for (var i = 0; i < datax.pops.length; i++) {
    var pop = datax.pops[i];
    var latLng = new google.maps.LatLng(pop.lat, pop.lng);
    if(typeof pop.pops !=='undefined') {
      country= "<br>Country: "+pop.pops;
    }else{
      country="";
    }


    //jine html pro pops-ip stranku
    str_html = '<h3 style="color:#00A2EA; padding: 0; margin: 0;">CDN PoP location</h3><p style="padding: 0; margin: 0;">' + pop.city + ', ' + pop.country + '</p>';

    var marker = new google.maps.Marker({
      position: latLng,
      icon: icon,
      html: str_html
    });

    markers.push(marker);
  }

  for (var j = 0; j < markers.length; j++) {
    google.maps.event.addListener(markers[j], 'click', function() {
      infoWindow.setContent(this.html);
      infoWindow.open(map, this);
    });
  }

  google.maps.event.addListener(map, 'click', function(){
    infoWindow.close();
  });

  var markerCluster = new MarkerClusterer(map, markers);
  //Sets size of cluster region, set to zero for no clustering
  markerCluster.setGridSize(0);
  //markerCluster.setMaxZoom(5);
}

$(document).ready(function() {

  if ($('#map').length != 0) google.maps.event.addDomListener(window, 'load', initialize);

});
</script>


                       
<div class="title map"><?php t('cdn_network')?></div>
<div class="content">

<table class="cdn_table_zone" cellspacing=0 width=100% border=0>
  <?php $cities = array(); ?>
  <?php $region = ''; ?>
  <?php foreach ($countries as $i=>$c): ?>
    <?php if ($c->region != $region):?>
      <tr>
        <th colspan="3"><?php t('cdn_region_'.$c->region)?></th>
      </tr>
      <?php $region = $c->region ?>
    <?php endif ?>
    <?php $cities[] = $c->city ?>
    <?php if (isset($countries[$i+1]) && $countries[$i+1]->country == $c->country) { continue; }?>
    <tr>
      <td width=20><img src="/images/partner/flags/<?php echo $c->country_code ?>.png"></td>
      <td width=200><?php echo $c->country ?></td>
      <td><?php echo implode(', ', $cities) ?></td>
    </tr>
    <?php $cities = array(); ?>
  <?php endforeach ?>
</table>




</div>

<div class="title map2"><?php t('DC location')?></div>
<div class="content">


<div id="map" style="height: 500px; width: 846px; position: relative; background-color: rgb(229, 227, 223); overflow: hidden;">


</div>

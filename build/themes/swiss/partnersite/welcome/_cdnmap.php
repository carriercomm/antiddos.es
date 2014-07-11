										<script src="https://maps.google.com/maps/api/js?sensor=false"></script>
										<script type="text/javascript" src="https://google-maps-utility-library-v3.googlecode.com/svn/trunk/markerclusterer/src/markerclusterer.js"></script>
										<div id="map" class="map-inner">
										
										<script>
										// CDN map generation and markers
										var infoWindow = new google.maps.InfoWindow();
										var markers = [];
										
										function initialize() {
										if (typeof Lat==='undefined' || typeof Lng=='undefined'){
										  Lat=30;
										  Lng= -25;
										}

										var center = new google.maps.LatLng(Lat, Lng);

										if (typeof zoom=='undefined'){zoom=0.5;}
										if (typeof scrollwheel=='undefined'){scroll=false; }

										// Styling map
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
  
										var datax = { "pops": [
										{"country":"Belgium","country_code":"BE","region":"europa","city":"Brussels","price":0.029,"lat":50.8333,"lng":4.33333},
										{"country":"Switzerland","country_code":"CH","region":"europa","city":"Zurich","price":0.05,"lat":47.3667,"lng":8.55},
										{"country":"Czech Republic","country_code":"CZ","region":"europa","city":"Prague","price":0.02,"lat":50.0833,"lng":14.4667},
										{"country":"Germany","country_code":"DE","region":"europa","city":"Berlin","price":0.04,"lat":52.5167,"lng":13.4},
										{"country":"Denmark","country_code":"DK","region":"europa","city":"Copenhagen","price":0.025,"lat":55.6667,"lng":12.5833},
										{"country":"Spain","country_code":"ES","region":"europa","city":"Barcelona","price":0.02,"lat":41.3833,"lng":2.18333},
										{"country":"Finland","country_code":"FI","region":"europa","city":"Helsinki","price":0.05,"lat":60.1756,"lng":24.9342},
										{"country":"France","country_code":"FR","region":"europa","city":"Villeurbanne","price":0.05,"lat":45.7667,"lng":4.88333},
										{"country":"Hungary","country_code":"HU","region":"europa","city":"Budapest","price":0.025,"lat":47.5,"lng":19.0833},
										{"country":"Ireland","country_code":"IE","region":"europa","city":"Dublin","price":0.025,"lat":53.3331,"lng":-6.24889},
										{"country":"Netherlands","country_code":"NL","region":"europa","city":"Amsterdam","price":0.01,"lat":52.35,"lng":4.91667},
										{"country":"Poland","country_code":"PL","region":"europa","city":"Gdansk","price":0.02,"lat":54.35,"lng":18.6667},
										{"country":"Poland","country_code":"PL","region":"europa","city":"Warsaw","price":0.02,"lat":52.25,"lng":21},
										{"country":"Portugal","country_code":"PT","region":"europa","city":"Lisbon","price":0.04,"lat":38.7167,"lng":-9.13333},
										{"country":"Russia","country_code":"RU","region":"europa","city":"Saint Petersburg","price":0.02,"lat":59.8944,"lng":30.2642},
										{"country":"Russia","country_code":"RU","region":"europa","city":"Moscow","price":0.01,"lat":55.7522,"lng":37.6156},
										{"country":"Sweden","country_code":"SE","region":"europa","city":"Goteborg","price":0.01,"lat":57.7167,"lng":11.9667},
										{"country":"Ukraine","country_code":"UA","region":"europa","city":"Kiev","price":0.01,"lat":50.4333,"lng":30.5167},
										{"country":"Australia","country_code":"AU","region":"asia","city":"Sydney","price":0.077,"lat":-33.8833,"lng":151.217},
										{"country":"China","country_code":"HK","region":"asia","city":"Hong Kong","price":0.09,"lat":22.2833,"lng":114.15},
										{"country":"Indonesia","country_code":"ID","region":"asia","city":"Bekasi","price":0.07,"lat":-6.23944,"lng":106.993},
										{"country":"India","country_code":"IN","region":"asia","city":"Pune","price":0.15,"lat":18.5333,"lng":73.8667},
										{"country":"Japan","country_code":"JP","region":"asia","city":"Tokyo","price":0.05,"lat":35.685,"lng":139.751},
										{"country":"Malaysia","country_code":"MY","region":"asia","city":"Cyberjaya","price":0.15,"lat":2.9295,"lng":101.658},
										{"country":"Singapore","country_code":"SG","region":"asia","city":"Singapore","price":0.05,"lat":1.29306,"lng":103.856},
										{"country":"Thailand","country_code":"TH","region":"asia","city":"Bangkok","price":0.08,"lat":13.75,"lng":100.517},
										{"country":"Canada","country_code":"CA","region":"n_america","city":"Montreal","price":0.04,"lat":45.5,"lng":-73.5833},
										{"country":"USA","country_code":"US","region":"n_america","city":"Chicago","price":0.03,"lat":41.85,"lng":-87.65},
										{"country":"USA","country_code":"US","region":"n_america","city":"Seattle","price":0.04,"lat":47.6064,"lng":-122.331},
										{"country":"USA","country_code":"US","region":"n_america","city":"Miami","price":0.02,"lat":25.7739,"lng":-80.1939},
										{"country":"USA","country_code":"US","region":"n_america","city":"Washington","price":0.025,"lat":38.895,"lng":-77.0367},
										{"country":"USA","country_code":"US","region":"n_america","city":"Los Angeles","price":0.025,"lat":34.0522,"lng":-118.243},
										{"country":"Brazil","country_code":"BR","region":"s_america","city":"Sao Paulo","price":0.05,"lat":-23.5333,"lng":-46.6167}]};

										// Create a new StyledMapType object, passing it the array of styles,
										// as well as the name to be displayed on the map type control.
										var styledMap = new google.maps.StyledMapType(styles,
										{
										  name: "CDN Network"
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

										icon = new google.maps.MarkerImage('http://atomdrive.net/images/partner/fresh2/cdn_flag.png');

										for (var i = 0; i < datax.pops.length; i++) {
											var pop = datax.pops[i];
											var latLng = new google.maps.LatLng(pop.lat, pop.lng);
											if(typeof pop.pops !=='undefined') {
												country= "<br>Country: "+pop.pops;
											} else {
												country="";
											}

										//Marker popup
										str_html = '<h2 style="color:#5d5d5d; padding: 0; margin: 0;">CDN PoP in ' + pop.city + ', ' + pop.country + '</h2><p style="padding: 0; margin: 0;">CDN PoP located in ' + pop.city + ' (' + pop.country + ')</p>';

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
										}

										$(document).ready(function() {
											if ($('#map').length != 0) google.maps.event.addDomListener(window, 'load', initialize);
										});
										</script>
										</div>
										<div class="map-descrition">
											<div class="map-marker-list">
												<table class="list-table first">
													<thead>
														<tr>
															<th><?php t('Country') ?></th>
															<th><?php t('Cities') ?></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td><?php t('Belgium') ?></td>
															<td><?php t('Brussels') ?></td>
														</tr>
														<tr>
															<td><?php t('Switzerland') ?></td>
															<td><?php t('Zurich') ?></td>
														</tr>
														<tr>
															<td><?php t('Czech Republic') ?></td>
															<td><?php t('Prague') ?></td>
														</tr>
														<tr>
															<td><?php t('Germany') ?></td>
															<td><?php t('Berlin') ?></td>
														</tr>
														<tr>
															<td><?php t('Denmark') ?></td>
															<td><?php t('Copenhagen') ?></td>
														</tr>
														<tr>
															<td><?php t('Spain') ?></td>
															<td><?php t('Madrid') ?></td>
														</tr>
														<tr>
															<td><?php t('Finland') ?></td>
															<td><?php t('Helsinki') ?></td>
														</tr>
														<tr>
															<td><?php t('France') ?></td>
															<td><?php t('Villeurbanne') ?></td>
														</tr>
														<tr>
															<td><?php t('United Kingdom') ?></td>
															<td><?php t('Maidenhead') ?></td>
														</tr>
														<tr>
															<td><?php t('Hungary') ?></td>
															<td><?php t('Budapest') ?></td>
														</tr>
														<tr>
															<td><?php t('Ireland') ?></td>
															<td><?php t('Dublin') ?></td>
														</tr>
														<tr>
															<td><?php t('Netherlands') ?></td>
															<td><?php t('Amsterdam') ?></td>
														</tr>
														<tr>
															<td><?php t('Poland') ?></td>
															<td><?php t('Gdansk, Warsaw') ?></td>
														</tr>
														<tr>
															<td><?php t('Portugal') ?></td>
															<td><?php t('Lisbon') ?></td>
														</tr>
														<tr>
															<td><?php t('Russia') ?></td>
															<td><?php t('Saint Petersburg, Moscow') ?></td>
														</tr>
													</tbody>
												</table>
												<table class="list-table last">
													<thead>
														<tr>
															<th><?php t('Country') ?></th>
															<th><?php t('Cities') ?></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td><?php t('Sweden') ?></td>
															<td><?php t('Goteborg') ?></td>
														</tr>
														<tr>
															<td><?php t('Ukraine') ?></td>
															<td><?php t('Kiev') ?></td>
														</tr>
														<tr>
															<td><?php t('Australia') ?></td>
															<td><?php t('Sydney') ?></td>
														</tr>
														<tr>
															<td><?php t('China') ?></td>
															<td><?php t('Hong Kong') ?></td>
														</tr>
														<tr>
															<td><?php t('Indonesia') ?></td>
															<td><?php t('Bekasi') ?></td>
														</tr>
														<tr>
															<td><?php t('India') ?></td>
															<td><?php t('Pune') ?></td>
														</tr>
														<tr>
															<td><?php t('Japan') ?></td>
															<td><?php t('Tokyo') ?></td>
														</tr>
														<tr>
															<td><?php t('Kazakhstan') ?></td>
															<td><?php t('Shakhtinsk') ?></td>
														</tr>
														<tr>
															<td><?php t('Malaysia') ?></td>
															<td><?php t('Cyberjaya') ?></td>
														</tr>
														<tr>
															<td><?php t('New Zealand') ?></td>
															<td><?php t('Palmerston North') ?></td>
														</tr>
														<tr>
															<td><?php t('Singapore') ?></td>
															<td><?php t('Singapore') ?></td>
														</tr>
														<tr>
															<td><?php t('Thailand') ?></td>
															<td><?php t('Bangkok') ?></td>
														</tr>
														<tr>
															<td><?php t('Canada') ?></td>
															<td><?php t('Montreal') ?></td>
														</tr>
														<tr>
															<td><?php t('USA') ?></td>
															<td><?php t('Chicago, Seattle, Miami, Washington, Los Angeles') ?></td>
														</tr>
														<tr>
															<td><?php t('Brazil') ?></td>
															<td><?php t('San Paulo') ?></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
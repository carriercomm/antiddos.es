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

  icon = new google.maps.MarkerImage('http://atomdrive.net/images/partner/fresh2/cdn_flag.png');

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


<?php slot('slotbody') ?>body_style_02<?php end_slot() ?>


<?php include_partial('welcome/slider06in') ?>


<div align=center class="pre_content" id="div_content" style="">
<div class="content" style="">




<h1><?php t('cdn_block_01_subj')?></h1>
<div class=""><?php t('cdn_block_01',array('%site%'=>$site->getName()))?></div>
<br>
<h3><?php t('cdn_block_02_subj')?></h3>
<div class=""><?php t('cdn_block_02',array('%site%'=>$site->getName()))?></div>
<br>

<a class="link" href="<?php echo url_for('@cdn_network') ?>"><?php t('CDN network')?></a>

</div>


</div>



         <br><br>



<div align=center>
<table width=100% class="cdneed" cellspacing=0 cellpadding=0><tr>
<td width=33% align=center>

<div class="ppc p1"><?php t('adv_01_subj')?></div>
<span><?php t('adv_01',array('%site%'=>$site->getName()))?></span><br>

</td><td width=10 class="clear">&nbsp;</td><td width=33% align=center>

<div class="ppc p1"><?php t('adv_02_subj')?></div>
<span><?php t('adv_02',array('%site%'=>$site->getName()))?></span><br>

</td><td width=10 class="clear">&nbsp;</td><td align=center>
               
<div class="ppc p1"><?php t('adv_03_subj')?></div>
<span><?php t('adv_03',array('%site%'=>$site->getName()))?></span><br>

</td></tr></table>
<br><br>
<table width=100% class="cdneed" cellspacing=0 cellpadding=0><tr>
<td width=50% align=center>

<div class="ppc p1"><?php t('adv_04_subj')?></div>
<span><?php t('adv_04',array('%site%'=>$site->getName()))?></span><br>

</td><td width=10 class="clear">&nbsp;</td><td align=center>

<div class="ppc p1"><?php t('adv_05_subj')?></div>
<span><?php t('adv_05',array('%site%'=>$site->getName()))?></span><br>

</td></tr></table>

</div>

<br><br>









<div style="height: 15px;"> </div>


<table width="100%" height="200" border="0" cellpadding="0" cellspacing="0" bgcolor= "#eeeeee" class="pro_bar pro_bar_cloud"  id="divgo">

	<tr>
		<td width="100%" class="barlist" align=center>


<div style="height: 15px;"> </div>


<br>
<h1><?php t('Price')?></h1>

<table width=1100 class="cdnprice" cellspacing=4>
  <?php foreach($configs as $config): ?>
    <?php if(!$config->available) continue; ?>
    <tr>
      <td width=25%>

        <h2 class="ppc p1"><?php t('cdn_region_europa')?></h2>
        <span class="chf"><?php echo $config->price_europa ?> CHF <?php t('per')?> 1Gb</span><br/>
        <span class="usd"><?php echo usd($config->price_europa)?> USD <?php t('per')?> 1Gb</span><br/>
        <span class="eur"><?php echo eur($config->price_europa)?> EUR <?php t('per')?> 1Gb</span><br/>

      </td><td width=25%>

        <h2 class="ppc p1"><?php t('cdn_region_n_america')?></h2>
        <span class="chf"><?php echo $config->price_n_america ?> CHF <?php t('per')?> 1Gb</span><br/>
        <span class="usd"><?php echo usd($config->price_n_america)?> USD <?php t('per')?> 1Gb</span><br/>
        <span class="eur"><?php echo eur($config->price_n_america)?> EUR <?php t('per')?> 1Gb</span><br/>

      </td><td width=25%>

        <h2 class="ppc p1"><?php t('cdn_region_asia')?></h2>
        <span class="chf"><?php echo $config->price_asia ?> CHF <?php t('per')?> 1Gb</span><br/>
        <span class="usd"><?php echo usd($config->price_asia)?> USD <?php t('per')?> 1Gb</span><br/>
        <span class="eur"><?php echo eur($config->price_asia)?> EUR <?php t('per')?> 1Gb</span><br/>

      </td><td>

        <h2 class="ppc p1"><?php t('cdn_region_s_america')?></h2>
        <span class="chf"><?php echo $config->price_s_america ?> CHF <?php t('per')?> 1Gb</span><br/>
        <span class="usd"><?php echo usd($config->price_s_america)?> USD <?php t('per')?> 1Gb</span><br/>
        <span class="eur"><?php echo eur($config->price_s_america)?> EUR <?php t('per')?> 1Gb</span><br/> 


      </td></tr>



  <?php endforeach ?>
      </table>



<div style="padding: 25px 0px 10px 0px;" align=center>
  <?php if ($config->allow_trial): ?>
    <a href="<?php echo url_for('@newcart_item_new_trial?product_id=' . $config->id) ?>" class="buynow" style="margin-right: 10px; width: 200px;"><?php t('Try 7 day Trial')?></a>
  <?php endif ?>
  <a href="<?php echo url_for('@newcart_item_new?product_id=' . $config->id) ?>" class="buynow" style="width: 200px;"><?php t('Buy CDN service')?></a>
</div>


<br>


</td></tr></table>

<br><br>


<div align=center class="pre_content" id="div_content">

<br>
<div class="" style="font-size: 19px; color: #111;"><?php t('cdn_block_map',array('%site%'=>$site->getName()))?></div>

<br>

<div align=center style="border: 1px solid #ccc; background-color: #eee;">


<br>                
<div class="" style="font-size: 21px; color: #222;"><?php t('cdn_block_map_title')?></div>
<br>

<div id="map" style="height: 400px; width:100%; position: relative; background-color: rgb(229, 227, 223); overflow: hidden;">

</div>
</div>
<br>




</div>


<Br>

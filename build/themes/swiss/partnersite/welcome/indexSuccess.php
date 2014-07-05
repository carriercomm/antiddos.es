<?php $sf_response->addMeta("title", __('meta_title_index', array('%site%'=>sfConfig::get('app_site_name')), 'partner_public')) ?>
<?php $sf_response->addMeta("keywords", __("meta_keyword_index", array(), 'partner_public')) ?>
<?php $sf_response->addMeta("description", __("meta_desc_index", array('%site%'=>sfConfig::get('app_site_name')), 'partner_public')) ?>

<style>
.slider_pre { margin-top: 11px; margin-right: 130px; }

</style>

<?php slot('slider_title') ?><font class="hh_02"><?php echo t('text_head_index_1') ?></font><?php end_slot() ?>
<?php slot('slider_text') ?><font class="hh_01"><?php echo t('text_head_index_2') ?></font><?php end_slot() ?>


	<link type="text/css" rel="stylesheet" href="/css/partner/swiss/style2.css" />
		
		<script type="text/javascript" src="/css/partner/swiss/js/jquery-1.7.1.js"></script>
		<script type="text/javascript" src="/css/partner/swiss/js/jquery.ui.core.js"></script>
    
		<script type="text/javascript" src="/css/partner/swiss/js/jscript.js"></script>


<div class="startcontent"></div>
<div class="bodycontent">

<table border=0 cellpadding="0" cellspacing="0" width=100%><tr><td valign=top>
<?php t('home_text', array('%site%'=>$site->getName()))?><br>
<br><p align="justify"><?php include_component('welcome', 'lastNews') ?>
</td><td width=40> </td><td width=260 valign=top>
<?php include_partial('welcome/block_adv') ?>
</td></tr></table><br>

<table border=0 cellpadding="0" cellspacing="0"><tr><td align=left>
<div style="height: 40px;">  
<a href="<?php echo url_for('@show_page?name=product-features') ?>" class="xbutton blue" style="margin-right: 8px;"><?php t('Product Features')?></a>
<a href="<?php echo url_for('@show_page?name=hardware-platform') ?>" class="xbutton blue" style="margin-right: 8px;"><?php t('Hardware Platform')?></a>
<a href="<?php echo url_for('@show_page?name=data-center-location') ?>" class="xbutton blue" style="margin-right: 8px;"><?php t('Data Center Location')?></a>
<a href="<?php echo url_for('@show_page?name=network-connectivity') ?>" class="xbutton blue" style="margin-right: 8px;"><?php t('Network Connectivity')?></a>
</div>
</td><td align=right>



</td></tr></table>


</div>

<div class="endcontent white"></div>
<div class="content2">

<table width=100% border=0 cellpadding="0" cellspacing="0"><tr><td width=280 valign=top>

<?php include_partial('welcome/adv') ?>

</td><td width=10> </td><td valign=top>

<table width=100% cellpadding="0" cellspacing="0"><tr><td width=50%>

  
      <div id="pro-boxes">
        <div class="boxes box-1">
          <div class="image"><img src="/css/partner/swiss/images/box-1.png"></div>
          <div class="block-title"><?php t('Dedicated Servers')?>
          </div>
          <div class="description">
            <div class="description-inner"></div>
            <h2><?php t('Dedicated Servers')?></h2>
            <p><?php t('High-perfomance')?><br>
<?php t('1 Gbit/s Connection')?><br>
<?php t('99.9% Uptime')?><br>
<?php t('15 Tb of bandwidth included')?></p>
            <a href="<?php echo url_for('@server_config_list') ?>"><?php t('Details')?></a>
          </div>
        </div>
        
         <div class="boxes box-2">
          <div class="image"><img src="/css/partner/swiss/images/box-2.png"></div>
          <div class="block-title"><?php t('Colocation')?></div>
          <div class="description">
            <div class="description-inner"></div>
            <h2><?php t('Colocation')?></h2>
            <p><?php t('Dual-power sourse')?><Br>
<?php t('Expedited setup')?><br>
<?php t('100% network power uptime')?><br>
<?php t('No physical presence required')?></p>
            <a href="<?php echo url_for('@colocation_config_list') ?>"><?php t('Details')?></a>
          </div>
        </div>
        <div class="boxes box-3">
          <div class="image"><img src="/css/partner/swiss/images/box-3.png"></div>
          <div class="block-title"><?php t('DDoS Protection')?></div>
          <div class="description">
            <div class="description-inner"></div>
            <h2><?php t('DDoS Protection')?></h2>
            <p><?php t('Instant setup')?><Br>
<?php t('All types of attacks')?><br>
<?php t('Stay with your ISP')?><br>
<?php t('Automatic attack detection')?></p>
            <a href="<?php echo url_for('@protection_config_list') ?>"><?php t('Details')?></a>
          </div>
        </div>
        <div class="boxes box-4">
          <div class="image"><img src="/css/partner/swiss/images/box-4.png"></div>
          <div class="block-title"><?php t('Cloud Solutions')?></div>
          <div class="description">
            <div class="description-inner"></div>
            <h2><?php t('Cloud Solutions')?></h2>
            <p><?php t('Full server control')?><br>
<?php t('64-bit architecture')?><br>
<?php t('Multiple OS supported')?><br>
<?php t('Mobile friendly')?></p>
            <a href="<?php echo url_for('@cloud_config_list') ?>"><?php t('Details')?></a>
          </div>
        </div>
        </div>
</td></tr></table>

<br>

<div align=center><div class="banner" onclick="location.href='<?php echo url_for('@show_page?name=free-ddos-protection') ?>';" style="cursor: pointer;"><table  width="100%" border=0 cellpadding="0" cellspacing="0" height=90><tr><td><?php t('banner_01')?></td></tr></table></div></div>


</td></tr></table>
<br>
</div>

<div class="content3">

<div align=center style="padding: 0px 20px;">
<table width="100%" border=0 cellpadding="10" cellspacing="0"><tr>

<td width=25% valign=top>

<div class="box_main" style="height:170px; ">
<font class="green_div"><b><?php t('Unbeatable Prices')?></b></font><br><br>
<div class="minitext" style="height: 110px;"><?php t('welcome_we_understand')?></div>

<hr class="hrline2">
<a class="minia" href="<?php echo url_for('@product_list') ?>"><?php t('Products and Services')?></a> 

</div>

</td><td width=25% valign=top>
<div class="box_main" style="height:170px; ">
<font class="green_div"><b><?php t('24/7 Support')?></b></font><br><br>
<div class="minitext" style="height: 110px;"><?php t('welcome_our_customer')?></div>
<hr class="hrline2">
<a class="minia" href="<?php echo url_for('@show_page?name=future-ready') ?>"><?php t('Future Ready')?></a> 
</div>
</td><td width=25% valign=top>
<div class="box_main" style="height:170px; ">
<font class="green_div"><b><?php t('99.9% Uptime')?></b></font><br><br>
<div class="minitext" style="height: 110px;"><?php t('welcome_we_own_manage')?></div>
<hr class="hrline2">
<a class="minia" href="<?php echo url_for('@show_page?name=network-connectivity') ?>"><?php t('Network Connectivity')?></a> 
</div>
</td><td width=25% valign=top>
<div class="box_main" style="height:170px; ">
<font class="green_div"><b><?php t('Highly Awarded')?> </b></font><br><br>
<div class="minitext" style="height: 110px;"><?php t('welcome_we_are_consistently')?></div>
<hr class="hrline2">
<a class="minia" href="<?php echo url_for('@show_page?name=business-safety-guarantee') ?>"><?php t('Business Safety Guarantee')?></a> 
</div>
</td>
	</tr>
</table>
</div>
</div>

<div class="endcontent white"></div>


<div class="logoscontent">
<table width="95%" border=0 cellpadding="0" cellspacing="0"><tr><td>
<div id="our-clients">
        <ul>
          <li>
            <div class="image">
              <img src="<?php echo solar_template_image_url('logo_cisco.png') ?>">
              <div class="description">
                <div class="title"><?php t('Cisco Systems')?></div>
                <div class="text">
                  Cisco Systems, Inc. is an American multinational corporation headquartered in San Jose,
                  California, United States, that designs, manufactures, and sells networking equipment.
                </div>
                <div class="border-item"></div>
              </div>
            </div>
          </li>
          <li>
            <div class="image">
              <img src="<?php echo solar_template_image_url('logo_supermicro.png') ?>">
              <div class="description">
                <div class="title"><?php t('SuperMicro Computers')?></div>
                <div class="text"> The company's offerings include rack-mount, tower and blade server systems, high-end workstations,
                  storage server systems, motherboards, chassis, and server components branded under the Server Building Block Solutions product line. 
                </div>
                <div class="border-item"></div>
              </div>
            </div>
          </li>
          <li>
            <div class="image">
              <img src="<?php echo solar_template_image_url('logo_a10.png') ?>">
              <div class="description">
                <div class="title"><?php t('A10 Networks')?></div>
                <div class="text">
                   A10 Networks is a privately held company specialising in the manufacture of application delivery controllers (software and hardware). 
                </div>
                <div class="border-item"></div>
              </div>
            </div>
          </li>
          <li>
            <div class="image">
              <img src="<?php echo solar_template_image_url('logo_intel.png') ?>">
              <div class="description">
                <div class="title"><?php t('Intel Corporation')?></div>
                <div class="text">
                   Intel is the worlds largest and highest valued semiconductor chip maker, based on revenue. It is the inventor of
                  the x86 series of microprocessors, the processors found in most personal computers.
                </div>
                <div class="border-item"></div>
              </div>
            </div>
          </li>
          <li>
            <div class="image">
              <img src="<?php echo solar_template_image_url('arista_logo.png') ?>">
              <div class="description">
                <div class="title"><?php t('Arista Networks')?></div>
                <div class="text">
                  The company designs and sells multilayer network switches to deliver software defined cloud networking solutions for large datacenter,
                  high-performance computing and high-frequency trading environments. 
                </div>
                <div class="border-item"></div>
              </div>
            </div>
          </li>
          <li>
            <div class="image">
              <img src="<?php echo solar_template_image_url('coraid_logo.png') ?>">
              <div class="description">
                <div class="title"><?php t('Coraid')?></div>
                <div class="text">
                   The company was founded by Brantley Coile, who previously created the Cisco PIX firewall and Cisco LocalDirector products. Coile began
                  the research and development phase of the company in 2000 after leaving Cisco, and developed the ATA over Ethernet (AoE) protocol, which enables storage
                  networking using raw Ethernet frames for transport. 
                </div>
                <div class="border-item"></div>
              </div>
            </div>
          </li>
        </ul>
      </div></td></tr></table></div>
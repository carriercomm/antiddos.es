
	<style type="text/css">
.url { padding: 3px 10px; border: 1px solid #555; background-color: #eee; margin-left: 10px; margin-right: 10px;  }
    code{
        background: url("/images/partner/bgbgbg.png") repeat scroll 0 0 transparent;
        border-radius: 5px 5px 5px 5px;
        color: #2F2F2F;
        font-size: 12px;
        margin-top: 5px;
        padding: 10px;
        display: block;
    }
.doc_doc div, .doc_doc p { margin-top: 10px; padding: 10px; border: 1px solid #ccc; border-radius: 5px 5px 5px 5px; }
</style>



<div class="title help"><?php t('Reseller API documentation')?></div>
<div style="padding: 0px 20px 0px 20px">
<h1 class="addontitle">General information of API</h1>
<div class="doc_doc">
<div>
    Reseller API provides information about our products, list of addons and basic order manipulation. 
<br>
<br>
Our Resellers API is located at <font class="url"><strong>https://solarcom.ch/api.php</strong></font>
<br>
<br>
    Pay attention to https protocol. Use of protected protocol is required because API sends and receives private information such as your login credentials.
</div>
<div>
    Our API uses HTTP Basic authorization method and XML content-type. For example see Curl auth request:

<br><br>
<b>Curl</b><br>
    <code>
        curl -u <strong>user</strong>:<strong>userpass</strong> -H 'Accept: application/xml' -H 'Content-type: application/xml' https://solarcom.ch/api.php/site.xml
    </code>
<br>
<b>Perl</b><br>
<code><pre>
#!/usr/bin/perl
print "Content-Type: text/html\n\n";                               

use CGI;                                                                   
use LWP::Simple;                                                               

$ua = LWP::UserAgent->new;                                                                         
$req = HTTP::Request->new('GET','https://solarcom.ch/api.php/product/list.xml');                       
$req->authorization_basic("login","password");                                                           
$res = $ua->request($req);                                                                                     
print $res->status_line;                                                                                           
print "\n";                                                                                                            
print $res->as_string;                                                                                                     

exit;</pre></code>

<br>
<b>PHP</b><br>
<code><pre>
$curlHandle = curl_init();
curl_setopt($curlHandle, CURLOPT_TIMEOUT, 60);
curl_setopt($curlHandle, CURLOPT_URL, 'https://api.solarcom.ch/api.php/product/list.xml');
curl_setopt($curlHandle, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curlHandle, CURLOPT_HTTPHEADER, array ('Accept: application/xml'));
curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curlHandle, CURLOPT_HTTPAUTH, CURLAUTH_BASIC & CURLAUTH_DIGEST);
curl_setopt($curlHandle, CURLOPT_USERPWD, 'login:password');
$response = curl_exec($curlHandle);

curl_close($curlHandle);
echo $response;
</pre></code>

<br>
<b>Ruby</b><br>
<code><pre>
require "net/http"
require "net/https"
require "uri"

uri = URI.parse('https://api.solarcom.ch/')

https = Net::HTTP.new(uri.host, uri.port)
https.use_ssl = true
https.verify_mode = OpenSSL::SSL::VERIFY_NONE

request = Net::HTTP::Get.new("/api.php/product/list.xml", initheader = {'Accept'=> 'application/xml'})
request.basic_auth 'login', 'password'

response = https.request(request)

puts response.body
</pre></code>

</div>

<h2 class="addontitle">Product list</h2>

<div>
    You can retrieve full products list or detailed information about each product by next requests:

    <ul>
      <li>/product/list.xml [GET]</li>
      <li>/product/:id.xml [GET]</li>
    </ul>


    The first will return a list of all available products in XML document, where you will see <strong>ID</strong> of each product. The first one you can pass to second url instead of :id and get detailed information about product.
</div>

<div>
    Let's have a look at Cloud-V0 product example (its id is 13):
    
    <code><pre>
        <strong>request:</strong>
        <i>/product/13.xml [GET]</i>

        <strong>response:</strong>
        &lt;product&gt;
          &lt;id&gt;13&lt;/id&gt;
          &lt;name&gt;Cloud-V0&lt;/name&gt; - <strong>Default product name</strong>
          &lt;price&gt;66&lt;/price&gt; - <strong>Price in CHF</strong>
          &lt;setup_fee&gt;0.00&lt;/setup_fee&gt;
          &lt;instock&gt;-1&lt;/instock&gt; - <strong>Number of products (-1 for unlimited)</strong>
          &lt;min_billing_cycle&gt;1&lt;/min_billing_cycle&gt; - <strong>Minimal billing cycle in months</strong>
          &lt;type&gt;cloud&lt;/type&gt; - <strong>Product type</strong>
          &lt;available&gt;1&lt;/available&gt;
          &lt;new/&gt; - <strong>New marker</strong>
          &lt;hot/&gt; - <strong>Hot marker</strong>
          &lt;top/&gt; - <strong>Top marker</strong>
          &lt;personal/&gt;
          &lt;discounts/&gt;
          &lt;addons&gt; - <strong>List of available addons</strong>
            &lt;item&gt;
              &lt;id&gt;13&lt;/id&gt;
              &lt;name&gt;CPU Cores&lt;/name&gt;
              &lt;slug&gt;cpu-cores&lt;/slug&gt; - <strong>name of parameter for request</strong>
              &lt;mandatory&gt;1&lt;/mandatory&gt; - <strong>(bool) required parameter</strong>
              &lt;enabled&gt;1&lt;/enabled&gt;
              &lt;system/&gt;
              &lt;type&gt;numeric&lt;/type&gt;
              &lt;widget&gt;slider&lt;/widget&gt;
              &lt;display&gt;1&lt;/display&gt;
              &lt;group&gt;Hardware &amp; Bandwidth &amp; IP&lt;/group&gt;
              &lt;units&gt;vCPU&lt;/units&gt;
              &lt;units_each&gt;per each CPU core&lt;/units_each&gt;
              &lt;price&gt;30&lt;/price&gt; - <strong>price per unit in CHF</strong>
              &lt;min&gt;1&lt;/min&gt; - <strong>Minimum value</strong>
              &lt;max&gt;48&lt;/max&gt; - <strong>Maximum value</strong>
              &lt;constraints&gt; - <strong>list of constraints value</strong>
                &lt;item&gt;
                  &lt;id&gt;1&lt;/id&gt;
                  &lt;target_addon_id&gt;14&lt;/target_addon_id&gt; - <strong>Limited value</strong>
                  &lt;type&gt;each&lt;/type&gt;
                  &lt;value/&gt;
                  &lt;offset&gt;2048&lt;/offset&gt;
                  &lt;range&gt;2048&lt;/range&gt;
                &lt;/item&gt;
              &lt;/constraints&gt;
              &lt;step&gt;1&lt;/step&gt;
            &lt;/item&gt;
            &lt;item&gt;
              &lt;id&gt;14&lt;/id&gt;
              &lt;name&gt;RAM&lt;/name&gt;
              &lt;slug&gt;ram&lt;/slug&gt;
              &lt;mandatory&gt;1&lt;/mandatory&gt;
              &lt;enabled&gt;1&lt;/enabled&gt;
              &lt;system/&gt;
              &lt;type&gt;numeric&lt;/type&gt;
              &lt;widget&gt;slider&lt;/widget&gt;
              &lt;display&gt;1&lt;/display&gt;
              &lt;group&gt;Hardware &amp; Bandwidth &amp; IP&lt;/group&gt;
              &lt;units&gt;MB&lt;/units&gt;
              &lt;units_each&gt;per each 256 MB&lt;/units_each&gt;
              &lt;price&gt;6&lt;/price&gt;
              &lt;min&gt;256&lt;/min&gt;
              &lt;max&gt;98304&lt;/max&gt;
              &lt;constraints/&gt;
              &lt;step&gt;256&lt;/step&gt;
            &lt;/item&gt;
            &lt;item&gt;
              &lt;id&gt;15&lt;/id&gt;
              &lt;name&gt;Disk Space&lt;/name&gt;
              &lt;slug&gt;disk-space&lt;/slug&gt;
              &lt;mandatory&gt;1&lt;/mandatory&gt;
              &lt;enabled&gt;1&lt;/enabled&gt;
              &lt;system/&gt;
              &lt;type&gt;numeric&lt;/type&gt;
              &lt;widget&gt;slider&lt;/widget&gt;
              &lt;display&gt;1&lt;/display&gt;
              &lt;group&gt;Hardware &amp; Bandwidth &amp; IP&lt;/group&gt;
              &lt;units&gt;GB&lt;/units&gt;
              &lt;units_each&gt;per each 10 GB&lt;/units_each&gt;
              &lt;price&gt;6&lt;/price&gt;
              &lt;min&gt;10&lt;/min&gt;
              &lt;max&gt;1000&lt;/max&gt;
              &lt;constraints/&gt;
              &lt;step&gt;10&lt;/step&gt;
            &lt;/item&gt;
            &lt;item&gt;
              &lt;id&gt;16&lt;/id&gt;
              &lt;name&gt;Bandwidth&lt;/name&gt;
              &lt;slug&gt;bandwidth&lt;/slug&gt;
              &lt;mandatory&gt;1&lt;/mandatory&gt;
              &lt;enabled&gt;1&lt;/enabled&gt;
              &lt;system/&gt;
              &lt;type&gt;numeric&lt;/type&gt;
              &lt;widget&gt;slider&lt;/widget&gt;
              &lt;display&gt;1&lt;/display&gt;
              &lt;group&gt;Hardware &amp; Bandwidth &amp; IP&lt;/group&gt;
              &lt;units&gt;GB&lt;/units&gt;
              &lt;units_each&gt;per each 500 GB&lt;/units_each&gt;
              &lt;price&gt;15&lt;/price&gt;
              &lt;min&gt;500&lt;/min&gt;
              &lt;max&gt;10000&lt;/max&gt;
              &lt;constraints/&gt;
              &lt;step&gt;500&lt;/step&gt;
            &lt;/item&gt;
            &lt;item&gt;
              &lt;id&gt;17&lt;/id&gt;
              &lt;name&gt;IPv4 Addresses&lt;/name&gt;
              &lt;slug&gt;ipv4-addresses&lt;/slug&gt;
              &lt;mandatory&gt;1&lt;/mandatory&gt;
              &lt;enabled&gt;1&lt;/enabled&gt;
              &lt;system/&gt;&lt;type&gt;numeric&lt;/type&gt;
              &lt;widget&gt;slider&lt;/widget&gt;
              &lt;display&gt;1&lt;/display&gt;
              &lt;group&gt;Hardware &amp; Bandwidth &amp; IP&lt;/group&gt;
              &lt;units&gt;IP&lt;/units&gt;
              &lt;units_each&gt;per each IP&lt;/units_each&gt;
              &lt;price&gt;3&lt;/price&gt;
              &lt;min&gt;1&lt;/min&gt;
              &lt;max&gt;10&lt;/max&gt;
              &lt;constraints/&gt;
              &lt;step&gt;1&lt;/step&gt;
            &lt;/item&gt;
          &lt;/addons&gt;
          &lt;cpu&gt;1.0 Ghz:Intel Xeon&lt;/cpu&gt;
          &lt;cores&gt;1&lt;/cores&gt;
          &lt;ram&gt;512&lt;/ram&gt;
          &lt;storage&gt;10&lt;/storage&gt;
          &lt;bandwidth&gt;500&lt;/bandwidth&gt;
        &lt;/product&gt;
    </pre></code>
    
</div>
<div>
    This is an example of description of Alpha dedicated server
    
    <code><pre>
        <strong>request:</strong>
        <i>/product/4.xml [GET]</i>

        <strong>response:</strong>
        &lt;product&gt;
          &lt;id&gt;4&lt;/id&gt;
          &lt;name&gt;Alpha&lt;/name&gt; - <strong>Server name</strong>
          &lt;price&gt;380&lt;/price&gt; - <strong>Base price without discounts and addons</strong>
          &lt;setup_fee&gt;0.00&lt;/setup_fee&gt;
          &lt;instock&gt;3&lt;/instock&gt; - <strong>In stock amount</strong>
          &lt;min_billing_cycle&gt;1&lt;/min_billing_cycle&gt;
          &lt;type&gt;server&lt;/type&gt;
          &lt;available&gt;1&lt;/available&gt; - <strong>bool. configuration available</strong>
          &lt;new/&gt; - <strong>bool. is new server</strong>
          &lt;hot/&gt;
          &lt;top/&gt;
          &lt;personal/&gt; - <strong>bool. Personal product</strong>
          &lt;allow_trial/&gt; - <strong>bool. Allow trial period (available only at CLOUD-V0)</strong>
          &lt;discounts&gt;&lt;/discounts&gt; - <strong>Deprecated</strong>
          &lt;addons&gt;&lt;/addons&gt; - <strong>List of order addons</strong>
          &lt;cpu&gt;E5645:Intel Xeon Six-Core:2.40 GHz&lt;/cpu&gt;
          &lt;cores&gt;6:12 HT&lt;/cores&gt;
          &lt;ram&gt;12 GB:DDR3-1333 ECC/REG&lt;/ram&gt;
          &lt;storage&gt;2 x 2 TB:SATA 2&lt;/storage&gt;
          &lt;raid&gt;Internal:Adaptec / Intel&lt;/raid&gt;
          &lt;kvm&gt;1&lt;/kvm&gt;
          &lt;ddos&gt;1&lt;/ddos&gt; - <strong>bool. Free DDoS protection incl.</strong>
          &lt;eco_price&gt;266&lt;/eco_price&gt; - <strong>Base price for economical plan without free DDoS protection</strong>
          &lt;only_eco/&gt; - <strong>bool. Is economical plan only</strong>
          &lt;group&gt;classic&lt;/group&gt; - <strong>Configuration group. light(only eco), classic, game, business.</strong>
          &lt;description/&gt; - <strong>Description text</strong>
        &lt;/product&gt;
    </pre></code>
    
</div>

<h2 class="addontitle">Order creating</h2>
<div>

To create a new order, you must send request to <font class="url"><strong>/reseller/order/list.xml</strong></font>

<br><br>
The request must contain a list of parameters specified for each product type.
</div>
<div>
    Each request must contain the required parameters:
    <ul>
      <li><strong>product_id</strong>  - Product ID from previous paragraph.</li>
      <li><strong>billing_cycle</strong> - Billing cycle for new order (min:1, max:12)</li>
      <li><strong>user_id</strong> - Unique user ID for your site. It must be a string or number. If an order has been created successfully, then it will be placed in new group named as 'user_id' parameter.</li>
    </ul>
</div>
<div>
    If an order has addons (addons field) then addons field is required for request creation. Example of cloud request order:
</div>
  <pre><code>
      <strong>request:</strong>
      <i>/reseller/order/list.xml [POST]</i>
      <strong>sent data: Array(
          'product_id' => 13,
          'addons[cpu-cores]'=>1,
          'addons[ram]'=>512,
          'addons[disk-space]'=>10,
          'addons[bandwidth]'=>500,
          'addons[ipv4-addresses]'=>1,
          'comment'=>'',
          'billing_cycle'=>'1',
          'user_id'=>'Client Name'
      )</strong>

      <strong>response:</strong>
      &lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
      &lt;order&gt;
        &lt;product_name&gt;Cloud-V0&lt;/product_name&gt;
        &lt;id&gt;87&lt;/id&gt;
        &lt;owner_id&gt;2&lt;/owner_id&gt;
        &lt;price&gt;66&lt;/price&gt;
        &lt;base_product_price&gt;0&lt;/base_product_price&gt;
        &lt;product_id&gt;13&lt;/product_id&gt;
        &lt;paid_until&gt;2013/02/21 17:08:47&lt;/paid_until&gt;
        &lt;billing_cycle&gt;1&lt;/billing_cycle&gt;
        &lt;days_left&gt;31&lt;/days_left&gt;
        &lt;status&gt;active&lt;/status&gt;
        &lt;type&gt;cloud&lt;/type&gt;
        &lt;comment&gt;&lt;/comment&gt;
        &lt;is_trial&gt;0&lt;/is_trial&gt;
        &lt;group_id&gt;3&lt;/group_id&gt;
        &lt;item_id&gt;36&lt;/item_id&gt;
        &lt;item&gt;
        &lt;id&gt;36&lt;/id&gt;
        &lt;product_id&gt;13&lt;/product_id&gt;
        &lt;name&gt;CLOUD-087&lt;/name&gt;
        &lt;type&gt;cloud&lt;/type&gt;
        &lt;status&gt;active&lt;/status&gt;
        &lt;price&gt;66&lt;/price&gt;
        &lt;main_ip&gt;&lt;/main_ip&gt;
        &lt;additional_ips&gt;&lt;/additional_ips&gt;
        &lt;/item&gt;

        &lt;addons&gt;
          &lt;cpu-cores&gt;1&lt;/cpu-cores&gt;
          &lt;ram&gt;512&lt;/ram&gt;
          &lt;disk-space&gt;10&lt;/disk-space&gt;
          &lt;bandwidth&gt;500&lt;/bandwidth&gt;
          &lt;ipv4-addresses&gt;1&lt;/ipv4-addresses&gt;
        &lt;/addons&gt;

      &lt;/order&gt;
  </code></pre>

<h2 class="addontitle">Orders list</h2>
<div>
List of all orders are available at url:<font class="url">/reseller/:group_id/list.xml</font> [GET]<br><br>
  This request may contain filter options like as: 'short_type' and 'page'.<br>
<br>
Example:  <font class="url"> <strong>/reseller/3/list.xml?group_id=3&short_type=cloud</strong> </font>- will return all cloud orders for in group with id=3
<br><br>
</div>

<h2 class="addontitle">Order manipulation</h2>
<div>
    <font class="url"><strong>/reseller/order/:id.xml</font> [GET]</strong> - will return information about order with requested id<br>
<br>
    <font class="url"><strong>/reseller/order/:id.xml</font> [POST]</strong> - this request contains sent data like request for creation. It updates order configuration.
</div>
</div>


</div>
<br>


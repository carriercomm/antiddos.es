<table width=100% cellpadding="10" cellspacing="2">
    <tr><td colspan=2 class="histitle" height=40>
        <b><?php t('BitTorrent SyncServer')?></b>
    </td></tr>

    <tr>
        <td width=160 class="his s1" align="left"><?php t('Storage')?></td>
        <td class="his s2" align="left">
          <?php echo $order->disk_space ?> GB<br>
        </td>
    </tr>
    <tr>
        <td width=160 class="his s1" align="left"><?php t('Sync Key')?></td>
        <td class="his s2" align="left">
            <?php echo $order->sync_key ?>
        </td>
    </tr>
    <tr>
        <td width=160 class="his s1" align="left"><?php t('Sync Key (Read only)')?></td>
        <td class="his s2" align="left">
            <?php echo $order->sync_key_ro ?>
        </td>
    </tr>
    <tr>
        <td width=160 class="his s1" align="left"><?php t('Change secret key')?></td>
        <td class="his s2" align="left">
            <form method="post" action="<?php echo url_for('@order_update_secret_key?order_id='.$order->getId()) ?>">
                <input type="text" size="40 " style="width: auto;" name="secret_key" class="inputt"> <input type="submit" class="zbutton blue" value="<?php t('Apply') ?>">
            </form>
        </td>
    </tr>
</table>
<br/>
<?php if ($order->statistics): ?>
  <table width=100% cellpadding="10" cellspacing="2">
      <tr><td colspan=2 class="histitle" height=40>
          <b><?php t('Disk usage statistics')?></b>
      </td></tr>
      <tr>
          <td class="his s1" align="left">
              <div id="storage-superbar">
                  <div id="storage-bar" style="height: 100%; width: <?php echo ($order->statistics['used'] / $order->statistics['total'])*100 ?>%"></div>
<span id="storage-used-sub">Used: <span id="storage-used"><?php echo $order->statistics['used'] ?></span> GB</span>
<span id="storage-total-sub">Total: <span id="storage-total"><?php echo $order->statistics['total'] ?></span> GB</span>
<span id="storage-free-sub">Free: <span id="storage-percent"><?php echo ($order->statistics['used'] / $order->statistics['total'])*100 ?>%</span> <span id="storage-free"><?php echo $order->statistics['free'] ?></span> GB</span>

              </div>
          </td>
      </tr>
  </table>
    <table width=100% cellpadding="10" cellspacing="2">
      <tr><td colspan=2 class="histitle" height=40>
          <b><?php t('Connected peers')?></b>
      </td></tr>
      <tbody id="peers-container">
        <?php foreach ($order->peers as $peer): ?>
            <tr>
                <td class="his s2"><?php echo $peer['name'] ?></td>
                <td class="his s2"><?php echo $peer['status'] == 0  ?></td>
            </tr>
        <?php endforeach ?>
      </tbody>
  </table>
<?php endif ?>

<br>
<?php if ($order->status == 'active'): ?>
<script>
    function updateStats() {
        $.get('<?php echo url_for('@order_statistics_ajax?id='.$order->id) ?>', function(data){
            $('#storage-percent').text(data.percent);
            $('#storage-bar').css('width',data.percent);
            $('#storage-total').text(data.total);
            $('#storage-used').text(data.used);
            $('#storage-free').text(data.free);
            var peers = $('#peers-container');
            peers.html('');
            for (var i=0; i < data.peers.length; i++){
                peers.append('<tr>' +
                    '<td class="his s2">'+data.peers[i].name+'</td>'+
                    '<td class="his s2">'+data.peers[i].status+'</td>'+
                    '</tr>');
            }
            setTimeout("updateStats()", 60000);
        })
    }
    $(document).ready(function(){
        updateStats();
    });
</script>
<?php endif ?>


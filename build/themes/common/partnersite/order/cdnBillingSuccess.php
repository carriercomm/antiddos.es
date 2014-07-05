<?php use_javascript('highcharts') ?>




<div class="title cdn"><?php t('CDN balance')?></div>
<div class="content">
  <div style="padding:10px 10px;">
    <table>
      <tr>
        <td colspan="2">
          <?php t('Your deposit')?>: <b><?php echo $customer->deposit ?></b> CHF 
<br><br>
<a class="zbutton blue" href="<?php echo url_for('@deposit_refill')?>"><?php t('Add CDN balance')?></a>
        </td>
      </tr>
    </table>
  </div>
</div>





<div class="title cdn"><?php t('CDN billing statistics')?></div>
<div class="content">
  <div style="padding:10px 10px;">
    <table>
      <tr>
        <td width=260 class="his s1" align=left>Today traffic</td>
        <td class="his s2" align=left><?php echo format_bytes($order->today_traffic,2,2) ?></td>
      </tr>
      <tr>
        <td  class="his s1" align=left>Monthly traffic</td>
        <td class="his s2" align=left><?php echo format_bytes($order->monthly_traffic,2,2) ?></td>
      </tr>
      <tr>
        <td  class="his s1" align=left>Daily cost (avg.)</td>
        <td class="his s2" align=left><?php echo $order->daily_avg_cost ?> CHF</td>
      </tr>
      <tr>
        <td  class="his s1" align=left>Days left with current balance</td>
        <td class="his s2" align=left><?php echo $order->cdn_days_left ?> day(s)</td>
      </tr>
    </table>
  </div>

</div>




<div class="title graph"><?php t('CDN graph')?></div>
<div class="content">


  <div style="padding: 10px;">


<div id="graph"></div>
  <script type="text/javascript">
    new Highcharts.Chart({
      xAxis: {
        type: 'datetime',
        labels: {
          formatter: function() {
            return Highcharts.dateFormat("%b, %e", this.value);
          }, step: 2}
      },
      title: {
        text: 'Bandwidth Statistics',
        x: -20
      },
      yAxis: [{ // Primary yAxis
        labels: {
          format: '{value}MB',
          style: {
            color: '#4572A7'
          }
        },
        title: {
          text: 'Bandtwidth',
          style: {
            color: '#4572A7'
          }
        }
      }, { // Secondary yAxis
        title: {
          text: 'Cost',
          style: {
            color: '#89A54E'
          }
        },
        labels: {
          format: '{value} CHF',
          style: {
            color: '#89A54E'
          }
        },
        opposite: true,
        min: 0
      }],
      chart: {
        height: 300,
        renderTo: 'graph',
        defaultSeriesType: 'column',
        zoomType: 'x',
        width: 700
      },
      plotOptions: {
        column: {
          stacking: 'normal',
          borderWidth: 0,
          shadow: true,
          pointWidth: 10,
          pointPadding: 0
        }
      },
      tooltip: {
        formatter: function() {
          return '<b>'+ Highcharts.dateFormat('%b, %e', this.x) +'</b><br/>'+
            this.series.name +': '+ this.y + ' ' + (this.series.name == 'Cost' ? 'CHF' : 'MB');
        }
      },
      series: [
        {
          type: 'column',
          data: <?php echo $stats->cached ?>,
          yAxis: 0,
          name: 'Cached'
        }, {
          type: 'column',
          data: <?php echo $stats->not_cached ?>,
          yAxis: 0,
          name: 'Non Cached'
        }, {
          type: 'line',
          yAxis: 1,
          data: <?php echo $stats->cost ?>,
          name: 'Cost'
        }
      ],
      credits: {enabled: false},
      lang: {
        resetZoomTitle: 'Reset zoom level 1:1',
        exportButtonTitle: 'Export to raster or vector image',
        downloadJPEG: 'Download JPEG image',
        resetZoom: 'Reset zoom',
        downloadPDF: 'Download PDF document',
        weekdays: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
        printButtonTitle: 'Print the chart',
        downloadSVG: 'Download SVG vector image',
        shortMonths: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        loading: 'Loading....',
        months: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        decimalPoint: '.',
        thousandsSep: 3,
        downloadPNG: 'Download PNG image'
      }
    });
  </script>

  </div>
</div>




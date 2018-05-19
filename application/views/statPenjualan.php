<!-- load library jquery dan highcharts -->
<script src="<?php echo base_url();?>assets/js/jquery.js"></script>
<script src="<?php echo base_url();?>assets/js/highcharts.js"></script>
<!-- end load library -->
<h1>Statistik Penjualan</h1>

<div class="col-md-12">
  <h2 align="center">Statistik Pembelian Produk</h2><br>
</div>



<?php
    /* Mengambil query report*/
    foreach($report as $result){
        $bulann = array(
                '1' => 'Marshmellow Ice Cream Classic Choco',
                '2' => 'Marshmellow Ice Cream Strawberry Delight',
                '3' => 'Soft Ice Cream Oreo',
                '4' => 'Soft Ice Cream Milo',
                '5' => 'Soft Ice Cream Strawberry',
                '6' => 'Soft Ice Cream Green Tea',

        );

		$bulan[] = $bulann[$result->bulan]; //ambil bulan
        $value[] = (float) $result->nilai; //ambil nilai
    }
    /* end mengambil query*/

?>

<!-- Load chart dengan menggunakan ID -->
<div id="report"></div>
<!-- END load chart -->

<!-- Script untuk memanggil library Highcharts -->
<script type="text/javascript">
$(function () {
    $('#report').highcharts({
        chart: {
            type: 'column',
            margin: 75,
            options3d: {
                enabled: false,
                alpha: 10,
                beta: 25,
                depth: 70
            }
        },
        title: {
            text: 'Statistik Jumlah Pembelian',
            style: {
                    fontSize: '18px',
                    fontFamily: 'Verdana, sans-serif'
            }
        },
        subtitle: {
           text: 'berdasar Menu',
           style: {
                    fontSize: '15px',
                    fontFamily: 'Verdana, sans-serif'
            }
        },
        plotOptions: {
            column: {
                depth: 25
            }
        },
        credits: {
            enabled: false
        },
        xAxis: {
            categories:  <?php echo json_encode($bulan);?>
        },
        exporting: {
            enabled: false
        },
        yAxis: {
            title: {
                text: 'Jumlah'
            },
        },
        tooltip: {
             formatter: function() {
                 return 'Pembelian menu <b>' + this.x + '</b> adalah <b>' + Highcharts.numberFormat(this.y,0) + '</b>, di '+ this.series.name;
             }
          },
        series: [{
            name: 'Statistik Data',
            data: <?php echo json_encode($value);?>,
            shadow : true,
            dataLabels: {
                enabled: true,
                color: '#045396',
                align: 'center',
                formatter: function() {
                     return Highcharts.numberFormat(this.y, 0);
                }, // one decimal
                y: 0, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
    });
});
        </script>

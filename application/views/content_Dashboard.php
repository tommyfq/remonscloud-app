<!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-home"></i> Dashboard</h3>
            <ol class="breadcrumb">
              <!-- <li><i class="fa fa-home"></i><a href="index.html">Home</a></li> -->
              <li><i class="fa fa-home"></i>Dashboard</li>
            </ol>
          </div>
        </div>

        <style type="text/css">
          .warning{
            background-color: red;
            color: white;
          } 
        </style>

        <div class="row">
          <div class="col-lg-12">
            <ol class="breadcrumb warning">
              <li><i class="fa fa-clock-o"></i> Log Data Terakhir : <?php echo $last_processed_log; ?></li>
            </ol>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">

            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-globe"></i><strong>Jumlah Site Terpasang</strong></h2>
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-sm-6">
                    <h2><?php echo number_format($jml_plts,0,'','.'); ?> Site</h2> 
                  </div>
                  <div class="col-sm-6">
                    <img src="<?php echo base_url(); ?>assets/images/site.png" align="right">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">

            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-globe"></i><strong>Total Kapasitas Terpasang</strong></h2>
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-sm-6">
                    <h2><?php echo number_format($total_kapasitas,0,'','.'); ?> kWp</h2 >
                  </div>
                  <div class="col-sm-6">
                    <img src="<?php echo base_url(); ?>assets/images/energy.png" align="right">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg ">
              <i class="fa fa-tree" aria-hidden="true"></i>
              <div class="count"><?php $vp=$summaryInverter*$variabel_pohon;echo number_format($vp,0,'','.'); ?> Pohon</div>
              <div class="title">Konversi Energi Pohon</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box blue-bg">
              <i class="fa fa-fire" aria-hidden="true"></i>
              <div class="count"><?php $vc=$summaryInverter*$variabel_co2;echo number_format($vc,0,'','.'); ?> kg</div>
              <div class="title">Konversi Energi CO2</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box purple-bg">
              <i class="fa fa-bolt" aria-hidden="true"></i>
              <div class="count"><?php echo number_format($summaryInverter,0,'','.'); ?> kWh</div>
              <div class="title">Total Inverter (AC Output)</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box orange-bg">
              <i class="fa fa-sun-o" aria-hidden="true"></i>
              <div class="count"><?php echo number_format($summaryCharger,0,'','.'); ?> kWh</div>
              <div class="title">Total Solar Charger</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

        </div>
        <!--/.row-->

        <div class="row">
          <div class="col-md-12">

            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-map-marker"></i><strong>Maps</strong></h2>
              </div>
              <div class="panel-body-map">
                <div id="googleMap" style="width:100%;height:500px;"></div>
              </div>

            </div>
          </div>
        </div>

      <?php require('subscribe-popup.php'); ?>

      </section>
      <div class="text-right">
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </section>
    <!--main content end-->

<script>
  function myMap() {
  var mapProp= {
      center:new google.maps.LatLng(-1,120),
      zoom:5,
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
	
	<?php 
		$marker = 1;
		$marker_imgfile = "map-marker-ok.png";
		foreach($data_plts as $row	) { 

		  
		if(!empty($row->latitude) && !empty($row->longitude)) { ?>
			var marker<?php echo $marker; ?> = new google.maps.MarkerImage('assets/images/marker/<?php echo $marker_imgfile; ?>',
			new google.maps.Size(26,45),
			new google.maps.Point(0,0),
			new google.maps.Point(13, 45)
			);
		
		//alert('assets/images/marker/');
		var marker<?php echo $marker; ?>Pos = new google.maps.LatLng(<?php echo $row->latitude; ?>, <?php echo $row->longitude; ?>);
		var marker<?php echo $marker; ?>Marker = new google.maps.Marker({
			position: marker<?php echo $marker; ?>Pos,
			map: map,
			icon: marker<?php echo $marker; ?>,
			optimized: false
		});
		
		var marker<?php echo $marker; ?>Content = '<div style="padding: 20px; width: 200px;">'+
			'<p style="margin: 0 0 5px;">PLTS <?php echo $row->kode; ?></p>'+
			'<h4 style="margin: 0 0 10px;">PLTS <?php echo $row->provinsi; ?></h4>'+
			'</div>';
			
		var marker<?php echo $marker; ?>Window = new google.maps.InfoWindow({
			content: marker<?php echo $marker; ?>Content
		});
		
		google.maps.event.addListener(marker<?php echo $marker; ?>Marker, 'mouseover', function() {
			marker<?php echo $marker; ?>Window.open(map, marker<?php echo $marker; ?>Marker);
		});
		google.maps.event.addListener(marker<?php echo $marker; ?>Marker, 'mouseout', function() {
			marker<?php echo $marker; ?>Window.close(map, marker<?php echo $marker; ?>Marker);
		});
		google.maps.event.addListener(marker<?php echo $marker; ?>Marker, 'click', function() {
			window.location.href = "report.php?id=<?php echo $row->id; ?>"
		});
		<?php $marker+=$marker;	}} ?>

  }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBmTC-oRwCAYk5DtgLDsR4xZpnQEHV0_I&callback=myMap"></script>



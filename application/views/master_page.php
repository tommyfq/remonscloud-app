<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="">

  <meta name="author" content="">

  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/remons-icon.png">



	<title><?php if(isset($title)){echo $title; } else {echo "REMONS"; }; ?></title>



	<!-- Bootstrap CSS -->

  <link href="<?php echo base_url(); ?>assets/NiceAdmin/css/bootstrap.min.css" rel="stylesheet">

  <!-- bootstrap theme -->

  <link href="<?php echo base_url(); ?>assets/NiceAdmin/css/bootstrap-theme.css" rel="stylesheet">

  <!--external css-->

  <!-- font icon -->

  <link href="<?php echo base_url(); ?>assets/NiceAdmin/css/line-icons.css">

  <link href="<?php echo base_url(); ?>assets/NiceAdmin/css/elegant-icons-style.css" rel="stylesheet" />

  <link href="<?php echo base_url(); ?>assets/NiceAdmin/css/font-awesome.min.css" rel="stylesheet" />

  <!-- full calendar css-->

  <link href="<?php echo base_url(); ?>assets/NiceAdmin/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />

  <link href="<?php echo base_url(); ?>assets/NiceAdmin/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />

  <!-- easy pie chart-->

  <!-- <link href="<?php echo base_url(); ?>assets/NiceAdmin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" /> -->

  <!-- owl carousel -->

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/NiceAdmin/css/owl.carousel.css" type="text/css">

  <link href="<?php echo base_url(); ?>assets/NiceAdmin/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">

  <!-- Custom styles -->

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/NiceAdmin/css/fullcalendar.css">

  <link href="<?php echo base_url(); ?>assets/NiceAdmin/css/widgets.css" rel="stylesheet">

  <link href="<?php echo base_url(); ?>assets/NiceAdmin/css/style.css" rel="stylesheet">

  <link href="<?php echo base_url(); ?>assets/NiceAdmin/css/style-responsive.css" rel="stylesheet" />

  <!-- <link href="<?php echo base_url(); ?>assets/NiceAdmin/css/xcharts.min.css" rel=" stylesheet"> -->

  <link href="<?php echo base_url('assets/chartjs/dist/Chart.min.css'); ?>" rel="stylesheet"/>

  <link href="<?php echo base_url(); ?>assets/NiceAdmin/css/jquery-ui-1.10.4.min.css" rel="stylesheet">



  



</head>



</head>

<body>

  <!-- container section start -->

  <section id="container" class="">



	<?php 

    if(isset($header))

    {

      if(isset($dt_header)){

        $this->load->view($header, $dt_header);

      }else{

        $this->load->view($header);

      } 

    }



    if(isset($sidebar))

    {

      if(isset($dt_sidebar)){

        $this->load->view($sidebar, $dt_sidebar);

      }else{

        $this->load->view($sidebar);

      } 

    }

	 

    if(isset($content))

    {

	    if(isset($dt_content)){

        $this->load->view($content, $dt_content);

	    }else{

        $this->load->view($content);

	    } 

    }

	?>



  </section>

  <!-- container section start -->



</body>



  <!-- javascripts -->

  <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>

  <!-- <script src="<?php echo base_url(); ?>assets/NiceAdmin/js/jquery.js"></script> -->

  <script src="<?php echo base_url(); ?>assets/NiceAdmin/js/jquery-ui-1.10.4.min.js"></script>

  <script src="<?php echo base_url(); ?>assets/NiceAdmin/js/jquery-1.8.3.min.js"></script>

  <script type="text/javascript" src="<?php echo base_url(); ?>assets/NiceAdmin/js/jquery-ui-1.9.2.custom.min.js"></script>

  <!-- bootstrap -->

  <script src="<?php echo base_url(); ?>assets/NiceAdmin/js/bootstrap.min.js"></script>

  <!-- nice scroll -->

  <script src="<?php echo base_url(); ?>assets/NiceAdmin/js/jquery.scrollTo.min.js"></script>

  <script src="<?php echo base_url(); ?>assets/NiceAdmin/js/jquery.nicescroll.js" type="text/javascript"></script>

  <!-- charts scripts -->

  <script type="text/javascript" src="<?php echo base_url('assets/chartjs/dist/Chart.min.js'); ?>"></script>

  <script src="<?php echo base_url(); ?>assets/NiceAdmin/assets/jquery-knob/js/jquery.knob.js"></script>

  <script src="<?php echo base_url(); ?>assets/NiceAdmin/js/jquery.sparkline.js" type="text/javascript"></script>

  <!-- <script src="<?php echo base_url(); ?>assets/NiceAdmin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script> -->

  <script src="<?php echo base_url(); ?>assets/NiceAdmin/js/owl.carousel.js"></script>

  <!-- jQuery full calendar -->

  <script src="<?php echo base_url(); ?>assets/NiceAdmin/js/fullcalendar.min.js"></script>

  <!-- Full Google Calendar - Calendar -->

  <script src="<?php echo base_url(); ?>assets/NiceAdmin/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>

  <!--script for this page only-->

  <script src="<?php echo base_url(); ?>assets/NiceAdmin/js/calendar-custom.js"></script>

  <script src="<?php echo base_url(); ?>assets/NiceAdmin/js/jquery.rateit.min.js"></script>

  <!-- custom select -->

  <script src="<?php echo base_url(); ?>assets/NiceAdmin/js/jquery.customSelect.min.js"></script>

  <!-- <script src="<?php echo base_url(); ?>assets/NiceAdmin/assets/chart-master/Chart.js"></script> -->



  <!--custome script for all page-->

  <script src="<?php echo base_url(); ?>assets/NiceAdmin/js/scripts.js"></script>

  <!-- custom script for this page-->

  <!-- <script src="<?php echo base_url(); ?>assets/NiceAdmin/js/sparkline-chart.js"></script> -->

  <!-- <script src="<?php echo base_url(); ?>assets/NiceAdmin/js/easy-pie-chart.js"></script> -->

  <script src="<?php echo base_url(); ?>assets/NiceAdmin/js/jquery-jvectormap-1.2.2.min.js"></script>

  <script src="<?php echo base_url(); ?>assets/NiceAdmin/js/jquery-jvectormap-world-mill-en.js"></script>

  <!-- <script src="<?php echo base_url(); ?>assets/NiceAdmin/js/xcharts.min.js"></script> -->

  <script src="<?php echo base_url(); ?>assets/NiceAdmin/js/jquery.autosize.min.js"></script>

  <script src="<?php echo base_url(); ?>assets/NiceAdmin/js/jquery.placeholder.min.js"></script>

  <script src="<?php echo base_url(); ?>assets/NiceAdmin/js/gdp-data.js"></script>

  <script src="<?php echo base_url(); ?>assets/NiceAdmin/js/morris.min.js"></script>

  <script src="<?php echo base_url(); ?>assets/NiceAdmin/js/sparklines.js"></script>

  <!--<script src="<?php echo base_url(); ?>assets/NiceAdmin/js/charts.js"></script>-->

  <script src="<?php echo base_url(); ?>assets/NiceAdmin/js/jquery.slimscroll.min.js"></script>

  <?php
     
    if(isset($footer)){
      $this->load->view($footer);
    }

  ?>

</html>
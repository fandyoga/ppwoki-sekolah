<!DOCTYPE html>
<html>
<head>
<title><?php echo $title ?></title>
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" />
  <link type="text/css" href="<?php echo base_url(); ?>assets/css/facybox/facybox.css" rel="stylesheet" />
  <link type="text/css" href="<?php echo base_url(); ?>assets/css/facybox/jquery.fancybox-1.3.4.css" rel="stylesheet" media="screen" />
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico" type="image/x-icon">
	
  <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
  <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>
  <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assets/js/addon.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/clock.js" type="text/javascript"></script>

  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.4.2.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/facybox.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/easySlider1.5.js"></script>

<script language="JavaScript">
  var txt="Welcome to SMA Prestasi Yogyakarta";
  var kecepatan=500;var segarkan=null;function bergerak() { document.title=txt;
  txt=txt.substring(1,txt.length)+txt.charAt(0);
  segarkan=setTimeout("bergerak()",kecepatan);}bergerak();
</script>

<script type="text/javascript">
	//facybox
	//facybox
jQuery(document).ready(function($) {
      $('a[rel*=facybox]').facybox({
        // noAutoload: true
      });
    });
	//end facy box
</script>


<script type="text/javascript">
	$(document).ready(function(){
 
    $("#to-top").hide();
 
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 200) {
                $('#to-top').fadeIn();
            } else {
                $('#to-top').fadeOut();
            }
        }); 
 
        $('#to-top a').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });
 
});

</script>

</head>

<body OnLoad="startclock()">
<div id="kotak">
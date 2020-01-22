<?php
$site = $this->konfigurasi_model->listing();
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $title ?></title>
<link href="<?php echo base_url('assets/upload/image/'.$site['icon']) ?>" rel="shortcut icon">
<link href="<?php echo base_url () ?>assets/front/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="<?php echo base_url () ?>assets/front/css/style.css" type="text/css" rel="stylesheet" media="all">
<link href="<?php echo base_url () ?>assets/front/css/changetheme.css" type="text/css" rel="stylesheet" media="all">
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo $keywords ?>" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<!-- js -->
<script src="<?php echo base_url () ?>assets/front/js/jquery-1.11.1.min.js"></script> 
<!-- //js -->	
<!-- start-smoth-scrolling-->
<script type="text/javascript" src="<?php echo base_url () ?>assets/front/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url () ?>assets/front/js/easing.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="<?php echo base_url () ?>assets/front/js/jquery-1.12.4.js"></script>
    <script src="<?php echo base_url () ?>assets/front/js/jquery-ui.js"></script>
    <script src="<?php echo base_url () ?>assets/front/js/jquery.cookie.js"></script>
    <script src="<?php echo base_url () ?>assets/front/js/directmanipulation.js"></script>
    
<!--//end-smoth-scrolling-->
  <script>
  $( function() {
    $( "#myModal" ).draggable();
    // $( "#sortable6" ).draggable();
  } );
  </script>
  <script>
    $(window).scroll(function(){
      var sticky = $('.scroll2'),
          scroll = $(window).scrollTop();

      if (scroll >= 200) sticky.addClass('fixed');
      else sticky.removeClass('fixed');
    });
  </script>
  <style>
      .modal-backdrop {
        display: none !important;
      }
      .modal-open .modal {
          width: 600px;
          margin: 0 auto;
      }
      .modal-open {overflow: auto !important;}

      .fixed {
          position: fixed;
          top:0; left:400px;
          width: 100%; }
  </style>
</head>
<body>

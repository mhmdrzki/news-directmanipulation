<?php
$site = $this->konfigurasi_model->listing();
?>
<!--header-->
<div class="logo">
  <div class="container" style="width: 100%">
	  <div class="logo-info col-md-4 col-md-offset-4 warnatitle">
		  <a href="<?php echo base_url() ?>">
			  <h1><?php echo $site['namaweb'] ?></h1>	
			  
		  </a>
	  </div>
      <div class="col-md-2 col-md-offset-2 scroll2" style="padding-top: 20px;">
	    <span  >Font Size: </span>
	    <br>
	    <a href="#" id="increaseFont" ><i class="glyphicon glyphicon-plus"></i></a>
	    <a href="#" id="decreaseFont" ><i class="glyphicon glyphicon-minus"></i></a>
	      <!-- <button class="btn btn-primary dropdown-toggle " type="button" data-toggle="dropdown" style="">Theme Color
	      <span class="caret"></span></button>
	      <ul class="dropdown-menu colchange">
	        <li class='green'><a href="#"></a></li>
	        <li class='red'><a href="#"></a></li>
	        <li class='yellow'><a href="#"></a></li>
	        <li class='blue'><a href="#"></a></li>
	        <li class='black'><a href="#"></a></li>
	      </ul> -->
	</div>
  </div>	
</div>
<!--//header-->		
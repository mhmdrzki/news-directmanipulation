<?php
$nav_berita	= $this->site_model->nav_berita();
?>
<!--navigation-->
<div class="top-nav navcolor">
<nav class="navbar navbar-default">
<div class="container">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu						
</button>
</div>
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav" id="sortable3">
  	<li <a class="hvr-bounce-to-bottom active"><a class="hvr-bounce-to-bottom" href="<?php echo base_url() ?>">Home</a></li>
 

  
      	<?php foreach($nav_berita as $nav_berita) { ?>
          <li><a class="hvr-bounce-to-bottom" href="<?php echo base_url('berita/kategori/'.$nav_berita->slug_kategori_berita) ?>"><?php echo $nav_berita->nama_kategori_berita ?></a></li>
        <?php } ?> 
  
  	<li><a  class="hvr-bounce-to-bottom" href="<?php echo base_url('contact') ?>">Contact Us</a></li>
	<li><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Theme Color<span class="caret"></span></a>
	  <ul class="dropdown-menu colchange">
	        <li class='green'><a href="#"></a></li>
	        <li class='pink'><a href="#"></a></li>
	        <li class='yellow'><a href="#"></a></li>
	        <li class='blue'><a href="#"></a></li>
	        <li class='black'><a href="#"></a></li>
	        <li class='red'><a href="#"></a></li>

	  </ul>
	</li>	
</ul>	
<div class="clearfix"> </div>
</div>	
</nav>		
</div>	
<!--//navigation-->

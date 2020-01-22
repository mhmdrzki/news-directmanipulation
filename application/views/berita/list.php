<!--gallery-->
<div class="gallery">		
<div class="container titlecolor">
<h3 class="title"><?php echo $title ?></h3>
<div class="gallery-grids">	
	
    <?php foreach($berita as $berita) { ?>			
    <div class="col-md-4 port-grids view view-fourth">
        <a href="<?php echo base_url('berita/read/'.$berita->slug_berita) ?>" data-title="<?php echo $berita->nama_berita ?>">
            <img src="<?php echo base_url('assets/upload/image/'.$berita->gambar) ?>" class="img-responsive" alt="<?php echo $berita->nama_berita ?>"/>
            <div class="mask">
                <p><?php echo $berita->nama_berita ?></p>
            </div>
        </a>
    </div>
    <?php } ?>
    <div class="clearfix"> </div>	
    <script src="<?php echo base_url() ?>assets/front/js/lightbox-plus-jquery.min.js"> </script>
</div>				
</div>
</div>	
<!--//gallery-->
<!-- start-smoth-scrolling-->
	<script type="text/javascript" src="<?php echo base_url() ?>assets/front/js/move-top.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/front/js/easing.js"></script>
    <script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	


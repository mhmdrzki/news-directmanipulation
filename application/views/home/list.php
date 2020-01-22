<?php
$site	= $this->konfigurasi_model->listing();
?>
<div class="container" id="sortable2">
<?php
include('produk.php');
include('berita.php');
?>
	
	<!--main-->
	<div class="main" style=" padding-top: 42px; ">
		<div class="container titlecolor" style="margin-bottom: 25px;cursor: move;">
			<h3 class="title"><a style="cursor: pointer; "  href="#">Our Video</a></h3>
		</div>
		<div class="main-grids">

			<?php foreach($video as $video) { ?>
			<div class="col-md-6 main-left btncolor" >
			    
			   <div class="embed-responsive embed-responsive-4by3">
			  <iframe src="https://www.youtube.com/embed/<?php echo $video->video ?>" frameborder="0" allowfullscreen></iframe>
			   </div>
			    
			    <h4 class="text-center"><?php echo $video->judul ?></h4>
			   
			    <p class="text-center ">
			    	<a href="<?php echo base_url('video') ?>" class="more btn btn-1 btn-1b"> More video...</a>
			    </p>
			    
			</div>
			<?php } ?>

			<div class="clearfix"> </div>
		</div>			
	</div>
	<?php
		include('olahraga.php');
		include('teknologi.php');
	 ?>

</div>

<div id="myModal" class="modal fade" role="dialog" data-keyboard="false" data-backdrop="static" style="top: unset; right: unset; width: 350px;" >
    <div class="modal-dialog" style="margin: 0px auto; width: 350px;">

        <!-- Modal content-->
        <div class="modal-content" >
            <div class="modal-body" style="width:350px; height:200px;background: url(<?php echo base_url('assets/front/images/iklan.png') ?>">
                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <!-- <img width="350px" height="200px" src="<?php echo base_url() ?>assets/front/images/iklan.png"> -->
            </div>

        </div>

    </div>
</div>

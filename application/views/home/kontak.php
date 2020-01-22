<!--baner-->
<!-- 	<div class="baner about-bnr">
		<div class="container">
			<div class="baner-grids">
				<div class="col-md-6 baner-top">
					<img src="<?php echo base_url() ?>assets/front/images/img16.jpg" alt=""/>
				</div>
				<div class="col-md-6 baner-top">
					<img src="<?php echo base_url() ?>assets/front/images/img17.jpg" alt=""/>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div> -->
	<!--//baner-->
	<!--map-->
	<div class="map">
		<?php echo $site['google_map'] ?>
	</div>
	<!--//map-->
	<!--contact-->
	<div class="contact">
		<div class="container titlecolor">
			<h3 class="title">Contact us</h3>
			<div class="contact-form">

<?php
echo validation_errors('<div class="alert alert-warning">','</div>');

// Notifikasi
if($this->session->flashdata('sukses')) {
	echo '<div class="alert alert-success">';
	echo $this->session->flashdata('sukses');
	echo '</div>';
}

?>

<form method="post" action="<?php echo base_url('contact') ?>">
    <input type="text" name="nama" value="<?php echo set_value('nama') ?>" placeholder="Nama" required>
    <div class="col-md-6 cnt-inpt">
        <input type="email" name="email" value="<?php echo set_value('email') ?>" placeholder="Email" required>
    </div>
    <div class="col-md-6 cnt-inpt">
        <input type="text" name="telepon" value="<?php echo set_value('telepon') ?>" placeholder="Telepon/HP" required>
    </div>
    <div class="clearfix"> </div>
    <textarea name="pesan" placeholder="Pesan" required><?php echo set_value('pesan') ?></textarea>
    <input type="submit" value="Submit">
</form>
			</div>			
		</div>
	</div>
	<!--//contact-->	

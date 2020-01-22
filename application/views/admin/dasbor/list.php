<div class="row">
<!-- Berita -->
<div class="col-md-4 col-sm-6 col-xs-6">           
<div class="panel panel-back noti-box">
<span class="icon-box bg-color-red set-icon">
    <i class="fa fa-newspaper-o"></i>
</span>
<div class="text-box" >
    <p class="main-text"><?php echo count($berita) ?></p>
    <p class="text-muted"><a href="<?php echo base_url('admin/berita') ?>">Berita</a></p>
</div>
</div>
</div>


<!-- Video -->
<div class="col-md-4 col-sm-6 col-xs-6">           
<div class="panel panel-back noti-box">
<span class="icon-box bg-color-red set-icon">
    <i class="fa fa-film"></i>
</span>
<div class="text-box" >
    <p class="main-text"><?php echo count($video) ?></p>
    <p class="text-muted"><a href="<?php echo base_url('admin/video') ?>">Video</a></p>
</div>
</div>
</div>

<!-- User -->
<div class="col-md-4 col-sm-6 col-xs-6">           
<div class="panel panel-back noti-box">
<span class="icon-box bg-color-red set-icon">
    <i class="fa fa-user"></i>
</span>
<div class="text-box" >
    <p class="main-text"><?php echo count($user) ?></p>
    <p class="text-muted"><a href="<?php echo base_url('admin/user') ?>">User</a></p>
</div>
</div>
</div>


<!-- Kategori Berita -->
<div class="col-md-4 col-sm-6 col-xs-6">           
<div class="panel panel-back noti-box">
<span class="icon-box bg-color-red set-icon">
    <i class="fa fa-tags"></i>
</span>
<div class="text-box" >
    <p class="main-text"><?php echo count($kategori_berita) ?></p>
    <p class="text-muted"><a href="<?php echo base_url('admin/kategori_berita') ?>">Kategori Berita</a></p>
</div>
</div>
</div>






</div>
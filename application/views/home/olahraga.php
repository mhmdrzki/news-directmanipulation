<!-- news -->
<div>
<div class="news-info" style="padding-top: 42px;cursor: move">
<div class="container titlecolor">      
    <h3 class="title"><a style="cursor: pointer;" href="<?php echo base_url('berita/kategori/olahraga')?>">Olahraga</a></h3>
</div>
</div>
<!-- container -->
<div class="container">             
<div class="news" style="background-color: transparent;">   
<div class="news-grids">
    <?php foreach($olahraga as $olahraga) { ?>
    <div class="col-md-4 news-grid">
    
        <a href="<?php echo base_url('berita/read/'.$olahraga->slug_berita) ?>">
        
        <div class="news-grid-left news-grid-left-img" style="background: url(<?php echo base_url('assets/upload/image/'.$olahraga->gambar) ?>) no-repeat 0px 0px; background-position: center center;">
            <h6><?php echo date('d M Y',strtotime($olahraga->tanggal)) ?></h6>
        </div>
        
        </a>
        
        <div class="news-grid-left-info">
            <h5><a style="color: black" href="<?php echo base_url('berita/read/'.$olahraga->slug_berita) ?>"><?php echo $olahraga->nama_berita ?></a></h5>
            <?php echo character_limiter($olahraga->keterangan,150) ?>
            <div class="clearfix"></div><hr>
        </div>
    </div>
    <?php } ?>
    <div class="clearfix"> </div>
</div>
</div><!-- //container -->  
</div>
</div>
<!-- //news -->
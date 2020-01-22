<!--baner-->
<div class="baner"  style="padding-bottom: 56px;">
<div class="container titlecolor" style="cursor: move">
    <h3 class="title"><a style="cursor: pointer;" href="#">Hot News</a></h3>
<div class="baner-grids" >
    
    <div class="baner-row" >
    <?php foreach($produk as $produk) { ?>
        <div class="col-md-4 baner-bottom">
        
        	<a href="<?php echo base_url('berita/read/'.$produk->slug_berita) ?>"">
           
            <figure class="effect-bubba">
                <img src="<?php echo base_url('assets/upload/image/'.$produk->gambar) ?>" alt="<?php echo $produk->nama_berita ?>"/>
                <figcaption>
                    <h4><?php echo $produk->nama_berita ?></h4>
                    <!-- <p><?php echo character_limiter($produk->keterangan,80) ?></p>	 -->
                </figcaption>			
            </figure>	
            
            </a>
            
        </div>
      <?php } ?> 
        <div class="clearfix"> </div>
    </div>				
</div>
</div>
</div>
<!--//baner-->
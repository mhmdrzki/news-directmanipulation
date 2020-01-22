<p>
<a href="<?php echo base_url('admin/berita/tambah') ?>" class="btn btn-primary">
<i class="fa fa-plus"></i> Tambah Berita</a>
</p>

<?php
// Notifikasi
if($this->session->flashdata('sukses')) {
	echo '<div class="alert alert-success">';
	echo $this->session->flashdata('sukses');
	echo '</div>';
}

// Error
echo validation_errors('<div class="alert alert-success">','</div>');
?>

<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
    <tr>
        <th>#</th>
        <th>Gambar</th>
        <th>Judul Berita</th>
        <th>Kategori</th>
        <th>Status - Jenis</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
<?php $i=1; foreach($berita as $berita) { ?>
    <tr class="odd gradeX">
        <td><?php echo $i ?></td>
        <td>
        <img src="<?php echo base_url('assets/upload/image/thumbs/'.$berita->gambar) ?>" class="img img-responsive" width="60">
        </td>
        <td><?php echo $berita->nama_berita ?></td>
        <td><?php echo $berita->nama_kategori_berita ?></td>
        <td><?php echo $berita->status_berita ?> - <?php echo $berita->jenis_berita ?></td>
        <td>
        <a href="<?php echo base_url('admin/berita/edit/'.$berita->id_berita) ?>"class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
        
        <?php include('delete.php') ?>
        
        </td>
    </tr>
<?php $i++; } ?>
</tbody>
</table>
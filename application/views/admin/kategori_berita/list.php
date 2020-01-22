<p>
<?php include ('tambah.php') ?>
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
        <th>Nama Kategori</th>
        <th>Keterangan</th>
        <th>Urutan</th>
        <th>Slug</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
<?php $i=1; foreach($kategori_berita as $kategori_berita) { ?>
    <tr class="odd gradeX">
        <td><?php echo $i ?></td>
        <td><?php echo $kategori_berita->nama_kategori_berita ?></td>
        <td><?php echo $kategori_berita->keterangan ?></td>
        <td><?php echo $kategori_berita->urutan ?></td>
        <td><?php echo $kategori_berita->slug_kategori_berita ?></td>
        <td>
        <a href="<?php echo base_url('admin/kategori_berita/edit/'.$kategori_berita->id_kategori_berita) ?>"class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
        
        <?php include('delete.php') ?>
        
        </td>
    </tr>
<?php $i++; } ?>
</tbody>
</table>
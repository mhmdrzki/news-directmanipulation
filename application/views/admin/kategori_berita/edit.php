<?php
// Validasi
echo validation_errors('<div class="alert alert-success">','</div>');

// Form
echo form_open(base_url('admin/kategori_berita/edit/'.$kategori_berita->id_kategori_berita));
?>

<div class="form-group">
<label>Nama kategori</label>
<input type="text" name="nama_kategori_berita" placeholder="Nama kategori berita" value="<?php echo $kategori_berita->nama_kategori_berita ?>" required class="form-control">
</div>

<div class="form-group">
<label>Keterangan</label>
<textarea name="keterangan" class="form-control" placeholder="Keterangan"><?php echo $kategori_berita->keterangan ?></textarea>
</div>

<div class="form-group">
<label>Urutan tampil</label>
<input type="number" name="urutan" placeholder="Urutan tampil" value="<?php echo $kategori_berita->urutan ?>" required class="form-control">
</div>

<div class="form-group">
<input type="submit" name="submit" value="Simpan Data" class="btn btn-primary btn-lg">
<input type="reset" name="reset" value="Reset" class="btn btn-default btn-lg">
</div>


<?php echo form_close() ?>
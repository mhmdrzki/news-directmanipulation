<?php 
// cetak error kalau ada salah input
echo validation_errors('<div class="alert alert-warning">','</div>');

echo form_open(base_url('admin/video/tambah'));
?>
<div class="col-md-6">

<div class="form-group">
<label>Judul</label>
<input type="text" name="judul" class="form-control" placeholder="Judul video" value="<?php echo set_value('judul') ?>">
</div>

<div class="form-group">
<label>Posisi</label>
<select name="posisi" class="form-control">
	<option value="Video">Halaman Video</option>
    <option value="Homepage">Halaman Utama</option>
</select>
</div> 

<div class="form-group">
<label>Urutan</label>
<input type="number" name="urutan" class="form-control" placeholder="Urutan video" value="<?php echo set_value('urutan') ?>">
</div>

</div>

<div class="col-md-6"> 

<div class="form-group">
 <label>Video code (from Youtube)</label>
 </div>
<div class="form-group input-group">
<span class="input-group-addon">https://www.youtube.com/watch?v=</span>
<input type="text" name="video" class="form-control" placeholder="Kode video Youtube" value="<?php echo set_value('video') ?>"/>
</div>

<div class="form-group">
<input type="submit" name="submit" class="btn btn-primary btn-lg" value="Simpan">
</div>

</div>

<?php echo form_close() ?>
<script src="<?php echo base_url() ?>assets/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    file_browser_callback: function(field, url, type, win) {
        tinyMCE.activeEditor.windowManager.open({
            file: '<?php echo base_url() ?>assets/kcfinder/browse.php?opener=tinymce4&field=' + field + '&type=' + type,
            title: 'KCFinder',
            width: 700,
            height: 500,
            inline: true,
            close_previous: false
        }, {
            window: win,
            input: field
        });
        return false;
    },
    selector: "#keterangan",
    height: 150,
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>

<?php
// Error
if(isset($error)) {
	echo '<div class="alert alert-warning">';
	echo $error;
	echo '</div>';
}

// Validasi
echo validation_errors('<div class="alert alert-success">','</div>');

// Form
echo form_open_multipart('admin/berita/tambah');
?>
<div class="col-md-8">
<div class="form-group form-group-lg">
<label>Nama berita</label>
<input type="text" name="nama_berita" placeholder="Nama berita" value="<?php echo set_value('nama_berita') ?>" required class="form-control">
</div>
</div>

<div class="col-md-4">
<div class="form-group form-group-lg">
<label>Status Berita</label>
<select name="status_berita" class="form-control">
    <option value="Publish">Publikasikan</option>
	<option value="Hot">Hot News</option>
    <option value="Draft">Simpan sebagai Draft</option>
</select>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<label>Kategori Berita</label>
<select name="id_kategori_berita" class="form-control">
	<?php foreach($kategori as $kategori) { ?>
	<option value="<?php echo $kategori->id_kategori_berita ?>">
	<?php echo $kategori->nama_kategori_berita ?></option>
    <?php } ?>
</select>
</div>
</div>


<div class="col-md-6">
<div class="form-group">
<label>Jenis Berita</label>
<select name="jenis_berita" class="form-control">
	<option value="Berita">Berita</option>
    <option value="Profil">Profil perusahaan</option>
</select>
</div>
</div>

<div class="col-md-12">

<div class="form-group">
<label>Upload gambar</label>
<input type="file" name="gambar" class="form-control">
</div>

<div class="form-group">
<label>Keterangan</label>
<textarea name="keterangan" class="form-control" placeholder="Keterangan" id="keterangan"><?php echo set_value('keterangan') ?></textarea>
</div>

<div class="form-group">
<input type="submit" name="submit" value="Simpan Data" class="btn btn-primary btn-lg">
<input type="reset" name="reset" value="Reset" class="btn btn-default btn-lg">
</div>

</div>


<?php echo form_close() ?>

 
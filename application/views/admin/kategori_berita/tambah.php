<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  <i class="fa fa-plus"></i> Tambah
</button>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Tambah Kategori Berita</h4>
            </div>
            <div class="modal-body">

<?php
// Validasi
echo validation_errors('<div class="alert alert-success">','</div>');

// Form
echo form_open('admin/kategori_berita');
?>

<div class="form-group">
<label>Nama kategori</label>
<input type="text" name="nama_kategori_berita" placeholder="Nama kategori berita" value="<?php echo set_value('nama_kategori_berita') ?>" required class="form-control">
</div>

<div class="form-group">
<label>Keterangan</label>
<textarea name="keterangan" class="form-control" placeholder="Keterangan"><?php echo set_value('keterangan') ?></textarea>
</div>

<div class="form-group">
<label>Urutan tampil</label>
<input type="number" name="urutan" placeholder="Urutan tampil" value="<?php echo set_value('urutan') ?>" required class="form-control">
</div>

<div class="form-group">
<input type="submit" name="submit" value="Simpan Data" class="btn btn-primary btn-lg">
<input type="reset" name="reset" value="Reset" class="btn btn-default btn-lg">
</div>


<?php echo form_close() ?>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

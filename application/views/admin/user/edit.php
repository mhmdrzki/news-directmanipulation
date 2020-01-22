<?php 
// cetak error kalau ada salah input
echo validation_errors('<div class="alert alert-warning">','</div>');

echo form_open(base_url('admin/user/edit/'.$user->id_user));
?>
<div class="form-group">
<label>Nama Lengkap</label>
<input type="text" name="nama" class="form-control" placeholder="Nama lengkap" value="<?php echo $user->nama ?>">
</div>

<div class="form-group">
<label>Email</label>
<input type="email" name="email" class="form-control" placeholder="email" value="<?php echo $user->email ?>">
</div>

<div class="form-group">
<label>Username</label>
<input type="text" name="username" class="form-control" placeholder="username" value="<?php echo $user->username ?>" readonly>
</div>

<div class="form-group">
<label>Password</label>
<input type="password" name="password" class="form-control" placeholder="password" value="<?php echo $user->password ?>">
</div>

<div class="form-group">
<label>Level Hak Akses</label>
<select name="akses_level" class="form-control">
	<option value="Admin">Admin</option>
    <option value="User">User</option>
</select>
</div>
    

<div class="form-group">
<input type="submit" name="submit" class="btn btn-primary btn-lg" value="Simpan">
</div>

<?php echo form_close() ?>
<p><a href="<?php echo base_url('admin/user/tambah') ?>" class="btn btn-success">
<i class="fa fa-plus"></i> Tambah</a></p>

<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
    <tr>
        <th>#</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Username</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
<?php $i=1; foreach($user as $user) { ?>
    <tr class="odd gradeX">
        <td><?php echo $i ?></td>
        <td><?php echo $user->nama ?></td>
        <td><?php echo $user->email ?></td>
        <td><?php echo $user->username ?></td>
        <td>
        <a href="<?php echo base_url('admin/user/edit/'.$user->id_user) ?>"class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
        
        <a href="<?php echo base_url('admin/user/delete/'.$user->id_user) ?>"class="btn btn-primary btn-sm" onClick="return confirm('Yakin ingin menghapus user ini?')"><i class="fa fa-trash-o"></i></a>
        
        </td>
    </tr>
<?php $i++; } ?>
</tbody>
</table>
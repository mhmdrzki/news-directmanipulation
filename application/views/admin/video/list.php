<p><a href="<?php echo base_url('admin/video/tambah') ?>" class="btn btn-success">
<i class="fa fa-plus"></i> Tambah</a></p>

<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
    <tr>
        <th>#</th>
        <th>Judul</th>
        <th>Posisi</th>
        <th>Video</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
<?php $i=1; foreach($video as $video) { ?>
    <tr class="odd gradeX">
        <td><?php echo $i ?></td>
        <td><?php echo $video->judul ?></td>
        <td><?php echo $video->posisi ?></td>
        <td>
       
        <style>
		iframe {
			max-width: 200px;
			height: auto;
		}
		</style>
        <iframe src="https://www.youtube.com/embed/<?php echo $video->video ?>" frameborder="0" allowfullscreen></iframe>
        
        </td>
        <td>
        <a href="<?php echo base_url('admin/video/edit/'.$video->id_video) ?>"class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
        
        <a href="<?php echo base_url('admin/video/delete/'.$video->id_video) ?>"class="btn btn-primary btn-sm" onClick="return confirm('Yakin ingin menghapus video ini?')"><i class="fa fa-trash-o"></i></a>
        
        </td>
    </tr>
<?php $i++; } ?>
</tbody>
</table>
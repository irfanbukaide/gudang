<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Reseller</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('reseller/add'); ?>" class="btn btn-success btn-sm">Tambah Data</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Nama</th>
						<th>Kontak</th>
						<th>Email</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($reseller as $r){ ?>
                    <tr>
						<td><?php echo $r['rsl_nama']; ?></td>
						<td><?php echo $r['rsl_kontak']; ?></td>
						<td><?php echo $r['rsl_email']; ?></td>
						<td>
                            <a href="<?php echo site_url('reseller/edit/'.$r['rsl_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('reseller/remove/'.$r['rsl_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

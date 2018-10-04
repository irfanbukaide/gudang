<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Barang Masuk Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('barang_masuk/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Msk Id</th>
						<th>Brg Id</th>
						<th>Msk Bahan</th>
						<th>Msk Olah Rusak</th>
						<th>Msk Jahit Rusak</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($barang_masuk as $b){ ?>
                    <tr>
						<td><?php echo $b['msk_id']; ?></td>
						<td><?php echo $b['brg_id']; ?></td>
						<td><?php echo $b['msk_bahan']; ?></td>
						<td><?php echo $b['msk_olah_rusak']; ?></td>
						<td><?php echo $b['msk_jahit_rusak']; ?></td>
						<td>
                            <a href="<?php echo site_url('barang_masuk/edit/'.$b['msk_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('barang_masuk/remove/'.$b['msk_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

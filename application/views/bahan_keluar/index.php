<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Bahan Keluar Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('bahan_keluar/add'); ?>" class="btn btn-success btn-sm">Add</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Klr Id</th>
						<th>Brg Id</th>
						<th>Rsl Id</th>
						<th>Klr Jmlah</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($barang_keluar as $b){ ?>
                    <tr>
						<td><?php echo $b['klr_id']; ?></td>
						<td><?php echo $b['brg_id']; ?></td>
						<td><?php echo $b['rsl_id']; ?></td>
						<td><?php echo $b['klr_jmlah']; ?></td>
						<td>
                            <a href="<?php echo site_url('bahan_keluar/edit/' . $b['klr_id']); ?>"
                               class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                            <a href="<?php echo site_url('bahan_keluar/remove/' . $b['klr_id']); ?>"
                               class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

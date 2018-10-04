<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Barang Retur Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('barang_retur/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Rtr Id</th>
						<th>Brg Id</th>
						<th>Rsl Id</th>
						<th>Rtr Jmlah</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($barang_retur as $b){ ?>
                    <tr>
						<td><?php echo $b['rtr_id']; ?></td>
						<td><?php echo $b['brg_id']; ?></td>
						<td><?php echo $b['rsl_id']; ?></td>
						<td><?php echo $b['rtr_jmlah']; ?></td>
						<td>
                            <a href="<?php echo site_url('barang_retur/edit/'.$b['rtr_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('barang_retur/remove/'.$b['rtr_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

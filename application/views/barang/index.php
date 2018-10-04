<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Barang</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('barang/add'); ?>" class="btn btn-success btn-sm">Tambah Data</a>

                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Kode Item</th>
						<th>Fast</th>
						<th>Paloma</th>
						<th>Harga Pokok</th>
						<th>Harga Jual</th>
                        <th>Status</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($barang as $b){ ?>
                    <tr>
						<td><?php echo $b['brg_kode']; ?></td>
						<td><?php echo ($b['brg_fast'] ? '<i class="fa fa-check"></i>' : '<i class="fa fa-times"></i>'); ?></td>
						<td><?php echo ($b['brg_paloma'] ? '<i class="fa fa-check"></i>' : '<i class="fa fa-times"></i>'); ?></td>
						<td><?php echo $b['brg_hrg_pokok']; ?></td>
						<td><?php echo $b['brg_hrg_jual']; ?></td>
                        <td><?php echo $b['brg_status']; ?></td>
						<td>
                            <a href="<?php echo site_url('barang/edit/'.$b['brg_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('barang/remove/'.$b['brg_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>

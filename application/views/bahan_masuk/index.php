<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Bahan Masuk</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('bahan_masuk/add'); ?>" class="btn btn-success btn-sm">Tambah Data</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>Tanggal</th>
                        <th>Kode Item</th>
                        <th>Jumlah Bahan</th>
                        <th>Jumlah Sablon/Bordir Rusak</th>
                        <th>Jumlah Jahitan Rusak</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach ($bahan_masuk as $b) { ?>
                    <tr>
                        <td><?php echo(date('d F Y', strtotime($b['created_at']))); ?></td>
						<td><?php echo $b['brg_id']; ?></td>
						<td><?php echo $b['msk_bahan']; ?></td>
						<td><?php echo $b['msk_olah_rusak']; ?></td>
						<td><?php echo $b['msk_jahit_rusak']; ?></td>
						<td>
                            <a href="<?php echo site_url('bahan_masuk/edit/' . $b['msk_id']); ?>"
                               class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                            <a href="<?php echo site_url('bahan_masuk/remove/' . $b['msk_id']); ?>"
                               class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

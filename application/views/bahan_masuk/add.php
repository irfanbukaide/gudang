<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Bahan Masuk - Tambah Data</h3>
            </div>
            <?php echo form_open('bahan_masuk/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
                    <div class="col-md-12">
                        <label for="brg_id" class="control-label">Bahan</label>
						<div class="form-group">
							<select name="brg_id" class="form-control">
                                <option value="">Pilih bahan</option>
								<?php
                                foreach ($all_bahan as $bahan)
								{
                                    $selected = ($bahan['brg_id'] == $this->input->post('brg_id')) ? ' selected="selected"' : "";

                                    echo '<option value="' . $bahan['brg_id'] . '" ' . $selected . '>' . $bahan['brg_kode'] . '</option>';
								} 
								?>
							</select>
						</div>
					</div>
                    <div class="col-md-4">
                        <label for="msk_bahan" class="control-label">Jumlah Bahan</label>
						<div class="form-group">
                            <input type="number" name="msk_bahan" placeholder="Jumlah Bahan"
                                   value="<?php echo $this->input->post('msk_bahan'); ?>" class="form-control"
                                   id="msk_bahan"/>
							<span class="text-danger"><?php echo form_error('msk_bahan');?></span>
						</div>
					</div>
                    <div class="col-md-4">
                        <label for="msk_olah_rusak" class="control-label">Jumlah Sablon/Bordir Rusak</label>
						<div class="form-group">
                            <input type="number" name="msk_olah_rusak" placeholder="Jumlah Bahan Rusak"
                                   value="<?php echo $this->input->post('msk_olah_rusak'); ?>" class="form-control"
                                   id="msk_olah_rusak"/>
							<span class="text-danger"><?php echo form_error('msk_olah_rusak');?></span>
						</div>
					</div>
                    <div class="col-md-4">
                        <label for="msk_jahit_rusak" class="control-label">Jumlah Jahitan Rusak</label>
						<div class="form-group">
                            <input type="number" name="msk_jahit_rusak" placeholder="Jumlah Jahitan Rusak"
                                   value="<?php echo $this->input->post('msk_jahit_rusak'); ?>" class="form-control"
                                   id="msk_jahit_rusak"/>
							<span class="text-danger"><?php echo form_error('msk_jahit_rusak');?></span>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
                <a href="<?php echo site_url('bahan_masuk/index'); ?>" class="btn btn-danger">
                    <i class="fa fa-times"></i> Cancel
                </a>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>
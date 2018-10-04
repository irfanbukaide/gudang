<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Barang Masuk - Tambah Data</h3>
            </div>
            <?php echo form_open('barang_masuk/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
                    <div class="col-md-12">
						<label for="brg_id" class="control-label">Barang</label>
						<div class="form-group">
							<select name="brg_id" class="form-control">
								<option value="">select barang</option>
								<?php 
								foreach($all_barang as $barang)
								{
									$selected = ($barang['brg_id'] == $this->input->post('brg_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$barang['brg_id'].'" '.$selected.'>'.$barang['brg_fast'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
                    <div class="col-md-4">
                        <label for="msk_bahan" class="control-label">Jmlah. Bahan</label>
						<div class="form-group">
                            <input type="number" name="msk_bahan" placeholder="Jumlah Bahan"
                                   value="<?php echo $this->input->post('msk_bahan'); ?>" class="form-control"
                                   id="msk_bahan"/>
							<span class="text-danger"><?php echo form_error('msk_bahan');?></span>
						</div>
					</div>
                    <div class="col-md-4">
                        <label for="msk_olah_rusak" class="control-label">Jmlah Bahan Rusak</label>
						<div class="form-group">
                            <input type="number" name="msk_olah_rusak" placeholder="Jumlah Bahan Rusak"
                                   value="<?php echo $this->input->post('msk_olah_rusak'); ?>" class="form-control"
                                   id="msk_olah_rusak"/>
							<span class="text-danger"><?php echo form_error('msk_olah_rusak');?></span>
						</div>
					</div>
                    <div class="col-md-4">
                        <label for="msk_jahit_rusak" class="control-label">Jmlah Jahitan Rusak</label>
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
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>
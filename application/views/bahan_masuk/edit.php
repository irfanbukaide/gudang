<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Bahan Masuk Edit</h3>
            </div>
            <?php echo form_open('bahan_masuk/edit/' . $bahan_masuk['msk_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
                        <label for="brg_id" class="control-label">Bahan</label>
						<div class="form-group">
							<select name="brg_id" class="form-control">
                                <option value="">select bahan</option>
								<?php
                                foreach ($all_bahan as $bahan)
								{
                                    $selected = ($bahan['brg_id'] == $bahan_masuk['brg_id']) ? ' selected="selected"' : "";

                                    echo '<option value="' . $bahan['brg_id'] . '" ' . $selected . '>' . $bahan['brg_fast'] . '</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="msk_bahan" class="control-label">Msk Bahan</label>
						<div class="form-group">
                            <input type="text" name="msk_bahan"
                                   value="<?php echo($this->input->post('msk_bahan') ? $this->input->post('msk_bahan') : $bahan_masuk['msk_bahan']); ?>"
                                   class="form-control" id="msk_bahan"/>
							<span class="text-danger"><?php echo form_error('msk_bahan');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="msk_olah_rusak" class="control-label">Msk Olah Rusak</label>
						<div class="form-group">
                            <input type="text" name="msk_olah_rusak"
                                   value="<?php echo($this->input->post('msk_olah_rusak') ? $this->input->post('msk_olah_rusak') : $bahan_masuk['msk_olah_rusak']); ?>"
                                   class="form-control" id="msk_olah_rusak"/>
							<span class="text-danger"><?php echo form_error('msk_olah_rusak');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="msk_jahit_rusak" class="control-label">Msk Jahit Rusak</label>
						<div class="form-group">
                            <input type="text" name="msk_jahit_rusak"
                                   value="<?php echo($this->input->post('msk_jahit_rusak') ? $this->input->post('msk_jahit_rusak') : $bahan_masuk['msk_jahit_rusak']); ?>"
                                   class="form-control" id="msk_jahit_rusak"/>
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
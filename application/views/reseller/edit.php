<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Reseller - Ubah Data</h3>
            </div>
			<?php echo form_open('reseller/edit/'.$reseller['rsl_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-12">
						<label for="rsl_nama" class="control-label"><span class="text-danger">*</span>Nama</label>
						<div class="form-group">
							<input type="text" name="rsl_nama" placeholder="Nama Reseller" value="<?php echo ($this->input->post('rsl_nama') ? $this->input->post('rsl_nama') : $reseller['rsl_nama']); ?>" class="form-control" id="rsl_nama" />
							<span class="text-danger"><?php echo form_error('rsl_nama');?></span>
						</div>
					</div>
					<div class="col-md-12">
						<label for="rsl_kontak" class="control-label">Kontak</label>
						<div class="form-group">
							<input type="text" name="rsl_kontak" placeholder="Kontak HP / Telp Reseller" value="<?php echo ($this->input->post('rsl_kontak') ? $this->input->post('rsl_kontak') : $reseller['rsl_kontak']); ?>" class="form-control" id="rsl_kontak" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="rsl_email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="rsl_email" placeholder="E-mail Reseller" value="<?php echo ($this->input->post('rsl_email') ? $this->input->post('rsl_email') : $reseller['rsl_email']); ?>" class="form-control" id="rsl_email" />
							<span class="text-danger"><?php echo form_error('rsl_email');?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
                <a href="<?php echo site_url('reseller/index');?>" class="btn btn-danger">
                    <i class="fa fa-times"></i> Cancel
                </a>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>
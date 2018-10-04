<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Barang Retur Add</h3>
            </div>
            <?php echo form_open('barang_retur/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
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
					<div class="col-md-6">
						<label for="rsl_id" class="control-label">Reseller</label>
						<div class="form-group">
							<select name="rsl_id" class="form-control">
								<option value="">select reseller</option>
								<?php 
								foreach($all_reseller as $reseller)
								{
									$selected = ($reseller['rsl_id'] == $this->input->post('rsl_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$reseller['rsl_id'].'" '.$selected.'>'.$reseller['rsl_nama'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="rtr_jmlah" class="control-label">Rtr Jmlah</label>
						<div class="form-group">
							<input type="text" name="rtr_jmlah" value="<?php echo $this->input->post('rtr_jmlah'); ?>" class="form-control" id="rtr_jmlah" />
							<span class="text-danger"><?php echo form_error('rtr_jmlah');?></span>
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
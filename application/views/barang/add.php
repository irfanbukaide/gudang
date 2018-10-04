<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h2 class="box-title"><span>Barang - Tambah Data</span></h2>
            </div>
            <?php echo form_open('barang/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
                    <div class="col-md-12">
                        <label for="brg_kode" class="control-label">Kode Item</label>
                        <div class="form-group">
                            <input type="text" name="brg_kode" placeholder="Kode Item" value="<?php echo $this->input->post('brg_kode'); ?>" class="form-control" id="brg_kode" />
                        </div>
                    </div>
					<div class="col-md-12">
                        <div class="checkbox">
                            <label><input type="checkbox" name="brg_fast" value="<?php echo $this->input->post('brg_fast'); ?>" id="brg_fast">Fast</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="brg_paloma" value="<?php echo $this->input->post('brg_paloma'); ?>" id="brg_paloma">Paloma</label>
                        </div>
					</div>
					<div class="col-md-12">
						<label for="brg_hrg_pokok" class="control-label">Harga Pokok</label>
						<div class="form-group">
                            <input type="number" name="brg_hrg_pokok" placeholder="Harga Pokok"
                                   value="<?php echo $this->input->post('brg_hrg_pokok'); ?>" class="form-control"
                                   id="brg_hrg_pokok"/>
						</div>
					</div>
					<div class="col-md-12">
						<label for="brg_hrg_jual" class="control-label">Harga Jual</label>
						<div class="form-group">
                            <input type="number" name="brg_hrg_jual" placeholder="Harga Jual"
                                   value="<?php echo $this->input->post('brg_hrg_jual'); ?>" class="form-control"
                                   id="brg_hrg_jual"/>
						</div>
					</div>
                    <div class="col-md-12">
                        <label for="brg_status" class="control-label">Status</label>
                        <div class="form-group">
                            <select name="brg_status" class="form-control">
                                <option value="">select</option>
                                <?php
                                $brg_status_values = array(
                                    'AVAILABLE'=>'AVAILABLE',
                                    'DISCONTINUE'=>'DISCONTINUE',
                                );

                                foreach($brg_status_values as $value => $display_text)
                                {
                                    $selected = ($value == $this->input->post('brg_status')) ? ' selected="selected"' : "";

                                    echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
                <a href="<?php echo site_url('barang/index');?>" class="btn btn-danger">
                    <i class="fa fa-times"></i> Cancel
                </a>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>
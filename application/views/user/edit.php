<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">User - Ubah Data</h3>
            </div>
			<?php echo form_open('user/edit/'.$user['usr_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
                    <div class="col-md-12">
                        <label for="usr_username" class="control-label"><span class="text-danger">*</span>Username</label>
                        <div class="form-group">
                            <input type="text" name="usr_username" placeholder="Username" value="<?php echo ($this->input->post('usr_username') ? $this->input->post('usr_username') : $user['usr_username']); ?>" class="form-control" id="usr_username" />
                            <span class="text-danger"><?php echo form_error('usr_username');?></span>
                        </div>
                    </div>
                    <div class="col-md-12">
						<label for="usr_password" class="control-label"><span class="text-danger">*</span>Password</label>
						<div class="form-group">
							<input type="password" name="usr_password" placeholder="Password" value="<?php echo ($this->input->post('usr_password') ? $this->input->post('usr_password') : $user['usr_password']); ?>" class="form-control" id="usr_password" />
							<span class="text-danger"><?php echo form_error('usr_password');?></span>
						</div>
					</div>
                    <div class="col-md-12">
                        <label for="usr_privileges" class="control-label">Privileges</label>
                        <div class="form-group">
                            <select name="usr_privileges" class="form-control">
                                <option value="">select</option>
                                <?php
                                $usr_privileges_values = array(
                                    'WRITE'=>'WRITE',
                                    'FULL'=>'FULL',
                                );

                                foreach($usr_privileges_values as $value => $display_text)
                                {
                                    $selected = ($value == $user['usr_privileges']) ? ' selected="selected"' : "";

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
                <a href="<?php echo site_url('user/index'); ?>" class="btn btn-danger">
                    <i class="fa fa-times"></i> Cancel
                </a>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>
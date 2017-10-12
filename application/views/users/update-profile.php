<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<h3><i class="fa fa-angle-right"></i>Profile Update</h3>
<?php echo validation_errors(); ?>
<!-- BASIC FORM ELELEMNTS -->
<div class="row mt">
  <div class="col-lg-12">
      <div class="form-panel">
          <h4 class="mb"><i class="fa fa-angle-right"></i>Profile Update</h4>
					<?php
								$attributes = array(
																		 'id'=> 'profile-update',
																		 'class' => 'form-horizontal style-form profile-update'
																	);
								echo form_open_multipart('profile-update/'.$id, $attributes);
						?>
							<div class="form-group">
									<?php echo form_label('Fullname','fullname', ['class' => 'col-sm-2 col-sm-2 control-label']); ?>
									<div class="col-sm-10">
											<?= form_input('username',$username, ['class' => 'form-control','id'=> 'fullname']); ?>
									</div>
							</div>
              <div class="form-group">
								<?php echo form_label('Picture','picturepic', array('class' => 'col-sm-2 col-sm-2 control-label')); ?>
                  <div class="col-sm-10">
										<?= form_upload('profile_pic', ['class' => 'form-control']); ?>
										<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                  </div>
              </div>
							<div class="form-group">
									<?php echo form_label('Address','address', array('class' => 'col-sm-2 col-sm-2 control-label')); ?>
                  <div class="col-sm-10">
										<?= form_textarea('address',$address, ['class' => 'form-control','id'=> 'address']); ?>
                  </div>
              </div>
							<div class="form-group">
								<?php echo form_label('Phone','phone', array('class' => 'col-sm-2 col-sm-2 control-label')); ?>
									<div class="col-sm-10">
										<?= form_input('phone', $phone, ['class' => 'form-control', 'id' => 'phone']); ?>
                  </div>
              </div>
							<div class="form-group">
								<?php echo form_label('Country','country', ['class' => 'col-sm-2 col-sm-2 control-label']); ?>
                  <div class="col-sm-10">
										<?php //form_select('country', $countrys, $country, ['class' => 'col-sm-2 col-sm-2 control-label']); ?>
                  </div>
              </div>
							<div class="form-group">
								<?php echo form_label('City','city', array('class' => 'col-sm-2 col-sm-2 control-label')); ?>
                  <div class="col-sm-10">
										<?php //form_select('city', $cities, $city, ['class' => 'form-control', 'id' => 'city']); ?>
                  </div>
              </div>
              <div class="form-group">
									<?php echo form_label('Email','email', array('class' => 'col-sm-2 col-sm-2 control-label')); ?>
                  <div class="col-sm-10">
										<?= form_input('email', $email, ['class' => 'form-control', 'id' => 'email']); ?>
                  </div>
              </div>
							<div class="form-group">
								<?php echo form_label('Password','password', array('class' => 'col-sm-2 col-sm-2 control-label')); ?>
									<div class="col-sm-10">
											<?= form_password('password', '', ['class' => 'form-control', 'placeholder' => 'Password']) ?>
									</div>
							</div>
							<div class="form-group">
									<label class="col-lg-2 col-sm-2 control-label"></label>
									<div class="col-lg-10">
											<p class="form-control-static"><input type="submit" value="Submit"></p>
									</div>
							</div>
      </div>
    </div>
</div>

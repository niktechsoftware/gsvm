<?php $uri=$this->uri->segment(3); ?>
<div class="main-content">
	<div class="section">
		<div class="section-body">
			<div class="row">
				<div class="col-xs-12 col-md-12 col-lg-12">
					<div class="card">
						<div class="card-header">
							<h4>Patient Smoking Status</h4>

						</div>
						<form method="post"	action="<?php echo base_url()?>index.php/patient/update_smokingstatus" enctype="multipart/Form-data" >
						   <input type="hidden" name="pid" value="<?php echo $uri; ?>">
							<div class="card-body">
								<div class="row" id="regForm">
									<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
											<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-2">
														
														
														<label>ARE YOU SMOKING.?<span title="Required"  style="color: red;">*</span></label>
													</div>
												
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																name="answer" value="yes" style="height:20px; width:20px;" required>
																
													
														</div>
													</div>
												
													<div class="col-md-2" id="many">
														<div class="form-group" id="yes1">
															How many ciggerate a day.?
														<input class="form-control" type="number" name="many" value="<?php echo $ss->row()->duration;?>"/>
													</div>
												</div>
										

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												$("#many").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="yes")
											{
											$("#many").show();
											//$("#left").show();
											}
											else
											{
											$("#many").hide(); 
											//$("#left").hide();
											}
											});
											});
											</script>

												<div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																name="answer" value="no" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>PAST-SMOKER</lebel>
															<input type="radio" class="form-control" 
																name="answer" value="other" style="height:20px; width:20px;">
																
											</div>
								 </div>
								 <div class="col-md-2">
									<div class="form-group">
										 <input style="display:none;" class="form-control"  type="text" name="duration" id="duration" value="<?php echo $ss->row()->number_of_cigaratte;?>"/>
										</div>
									</div>
									 <div class="col-md-2">
									<div class="form-group">
										 <input style="display:none;" class="form-control"  value="<?php echo $ss->row()->when_left;?>" type="text" name="left" id="left"/>
										</div>

                                     </div>


											</div>
										</div>

												
											<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
											<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-4">
														<label>DOES ANYONE IN YOUR HOUSE/FAMILY SMOKE.?<span title="Required" style="color: red;">*</span></label>
													</div>
												
													<div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																name="know" value="<?php echo $ss->row()->smokein_family_member; ?>" style="height:20px; width:20px;">
																
													
														</div>
													</div>
													
													<div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																name="know" value="<?php echo $ss->row()->smokein_family_member; ?>" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>DON'T KNOW</lebel>
															<input type="radio" class="form-control" 
																name="know" value="<?php echo $ss->row()->smokein_family_member; ?>" style="height:20px; width:20px;">
																
											</div>
								 </div>
							
									


											</div>
										</div>
												
												<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-3">
														<label>DO YOU HAVE CHEWING TOBACCO.?<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															PAAN WITH MASALA<input type="checkbox" class="form-control"
																value="<?php echo $ss->row()->paan_with_tabbacco; ?>" name="paan"
															 style="height:20px; width:20px;" >
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>TAMBAKOO</lebel>
															<input type="checkbox" class="form-control"
																value="<?php echo $ss->row()->tambakoo; ?>" name="tambacco"
														 style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															ZARDA/VIZAPATTA KHAINI<input type="checkbox" class="form-control"
																value="<?php echo $ss->row()->zarda_khaini; ?>" name="zarda"
														 style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                          <div class="col-md-2">
														<div class="form-group">
															OTHER<input type="checkbox" class="form-control"
																value="<?php echo $ss->row()->other; ?>" name="other"
													style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
										</div>
									</div>


	<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
											<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-4">
														
													</div>
													<div class="col-md-2">
														<div class="form-group">
															
														</div>
													</div>
												
                                       
												</div>


											</div>
											
										</div>
									</div>










<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="other")
											{
											$("#duration").show();
											$("#left").show();
											}
											else
											{
											$("#duration").hide(); 
											$("#left").hide();
											}
											});
											});
											</script>

<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
											<div class="col-xs-12 col-md-12 col-lg-12">
												<div class="form-group row">
													<div class="col-md-3"></div>
													<div class="col-md-9">
														<div class="form-group">
															<button type="submit" class="btn btn-primary"
																id="regisbtn" style="margin-left:70%;">
																<i class="far fa-edit">&nbsp;Submit</i>
															</button>
														</div>
													</div>
												</div>

											</div>
										</div>
									</div>

										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


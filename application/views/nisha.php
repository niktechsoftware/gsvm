<?php $uri=$this->uri->segment('3'); ?>
<div class="main-content">
	<div class="section">
		<div class="section-body">
			<div class="row">
				<div class="col-xs-12 col-md-12 col-lg-12">
					<div class="card">
						<div class="card-header">
							<h4>Add Patient Form</h4>

						</div>
						<form method="post"	action="<?php echo base_url()?>index.php/patient/addpatinfo" enctype="multipart/Form-data" >
							<input type="hidden" name="id" value="<?php echo $uri; ?>">
							<div class="card-body">
								<div class="row" id="regForm">
									<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
											<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-3">
														<label>FIRST NAME<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="fname"
																id="name" required="required">
														</div>
								
                                         </div>
												</div>


											</div>
												<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-3">
														<label>MIDDLE NAME<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="mname"
																id="name" required="required">
														</div>
								
                                         </div>
												</div>


											</div>

											<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
											<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-3">
														<label>LAST NAME<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="lname"
																id="name" required="required">
														</div>
								
                                         </div>
												</div>


											</div>
												<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-3">
														<label>FATHER NAME<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="father"
																id="name" required="required">
														</div>
								
                                         </div>
												</div>


											</div>
										</div>
									</div>

									<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
											<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-3">
														<label>MOTHER NAME<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="mother"
																id="name" required="required">
														</div>
								
                                         </div>
												</div>


											</div>
												<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-4">
														<label>GENDER<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															MALE<input type="radio" class="form-control"
																value="male" name="gender"
																id="name" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>FEMALE</lebel>
															<input type="radio" class="form-control"
																value="female" name="gender"
																id="name" required="required" style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-3">
														<div class="form-group">
															TRANSGENDER<input type="radio" class="form-control"
																value="transgender" name="gender"
																id="name" required="required" style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
										</div>
									</div>

<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
											<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-3">
														<label>ADDRESS<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="address"
																id="name" required="required">
														</div>
								
                                         </div>
												</div>


											</div>
											<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-3">
														<label>Post<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="post"
																id="name" required="required">
														</div>
								
                                         </div>
												</div>


											</div>
									</div>
								</div>
						
						<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
											<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-3">
														<label>Tehsil<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="tehsil"
																id="name" required="required">
														</div>
								
                                         </div>
												</div>


											</div>
												<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-3">
														<label>Block<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="block"
																id="name" required="required">
														</div>
								
                                         </div>
												</div>

										</div>
									</div>
								</div>
<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
										
												<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-3">
														<label>STATE<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															
												<select class="form-control" name="state" id="state" value ="">
					                                 <option>--Select State--</option>
					                                 <?php 
													 $this->db->distinct();
													$this->db->select("state");
													$dist=  $this->db->get("city_state");
													foreach($dist->result() as $row):?>
						<option value="<?php echo $row->state;?>"><?php echo $row->state;?></option>
					                                           <?php endforeach;?>
					                                 </select>     
					                                     
										                   
										                    <script>
														$("#state").change(function(){
															var state = $("#state").val();
															//alert(state);
															$.post("<?php echo base_url() ?>index.php/common/getCity",{state : state},function(data){
																$("#city").html(data);
															});
														});

														
														</script>

														</div>
								
                                         </div>
												</div>

										</div>
												<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-3">
														<label>CITY<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															
								<select id="city" name="city" class="form-control">
								                                 <option>--Select City--</option>
								                                 </select>     
								                                 
								                                    <script type="text/javascript">

																	$("#city").change(function(){
																		var state = $("#state").val();
																		var city = $("#city").val();
																		//alert(state);
																		$.post("<?php echo base_url() ?>index.php/common/getArea",{city : city,state : state},function(data){
																			$("#area").html(data);
																		});
																	});

																	</script>

 </div>																	</div>
																	</div>	

                                         </div>
									</div>
								</div>
								<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-3">
														<label>AREA<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
														
																 <select  class="form-control" id="area" name="area" >
                                 <option>--Select Area--</option>
                                 </select>     
														</div>
								
                                         </div>
												</div>


											</div>
											<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-3">
														<label>PIN<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="pincode"
																id="pincode" required="required">
										<script>
                                     $("#area").change(function(){
								var state = $("#state").val();
								var city = $("#city").val();
								var area = $("#area").val();
								//alert(state);
								$.post("<?php echo base_url() ?>index.php/common/getPin",{area : area,city : city,state : state},function(data){
									$("#pincode").val(data);
								});
							});
						</script>

														</div>
								
                                         </div>
												</div>


											</div>
											
										</div>
									</div>

<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
											<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-3">
														<label>ALTERNATE NUMBER<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="number"
																id="name" required="required">
														</div>
								
                                         </div>
												</div>


											</div>
												<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-3">
														<label>MOBILE NUMBER<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="mobile"
																id="name" required="required">
														</div>
								
                                         </div>
												</div>


											</div>
										</div>
									</div>
<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
											<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-3">
														<label>VOTER ID<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="voter"
																id="name" required="required">
														</div>
								
                                         </div>
												</div>


											</div>
												<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-3">
														<label>ADHAAR NUMBER<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="adhaar"
																id="name" required="required">
														</div>
								
                                         </div>
												</div>


											</div>
										</div>
									</div>
									<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
											<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-3">
														<label>PAN CARD <span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="pancard"
																id="name" required="required">
														</div>
								
                                         </div>
												</div>


											</div>
												<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-3">
														<label>DATE OF BIRTH<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<input type="date" class="form-control"
																value="" name="dob"
																id="name" required="required">
														</div>
								
                                         </div>
												</div>


											</div>
										</div>
									</div>
									<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
											
												<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-3">
														<label>EMAIL<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<input type="email" class="form-control"
																value="" name="email"
																id="name" required="required">
														</div>
								
                                         </div>
												</div>


											</div>
											<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-3">
														<label>PASSWORD<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<input type="password" class="form-control"
																value="" name="password"
																id="name" required="required">
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

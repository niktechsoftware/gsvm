<div class="main-content">
	<div class="section">
		<div class="section-body">
			<div class="row">
				<div class="col-xs-12 col-md-12 col-lg-12">
					<div class="card">
						<div class="card-header">
							<ul id="myTab" class="nav nav-tabs" >
								<li class="active"><a href="#myTab_example1" data-toggle="tab">
										<i class="green fa fa-home"></i>Registration Form&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								</a></li>
								<li><a href="#myTab_example2" data-toggle="tab"> <i
										class="green fa fa-home"></i>Patient Medical Histoty&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
									</a>
								</li>
								<li><a href="#myTab_example3" data-toggle="tab"> <i
										class="green fa fa-home"></i>Patient Diet&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
									</a>
								</li>
								<li><a href="#myTab_example4" data-toggle="tab"> <i
										class="green fa fa-home"></i>Family's Medical History&nbsp&nbsp&nbsp&nbsp
									</a>
								</li>
								<li><a href="#myTab_example5" data-toggle="tab"> <i
										class="green fa fa-home"></i>Patient Smoking Status&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
									</a>
								</li>
								<li><a href="#myTab_example6" data-toggle="tab"> <i
										class="green fa fa-home"></i>Patient Alcohol Status&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
									</a>
								</li>
								<li><a href="#myTab_example7" data-toggle="tab"> <i
										class="green fa fa-home"></i>Exercise Habit&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
									</a>
								</li>

							</ul>
						</div>
		</div>
	</div>
</div>	
							<div class="tab-content">
		<!--********************************************************************************************************	-->				
								<div class="tab-pane fade in active" id="myTab_example1">
									
	<div class="section">
		<div class="section-body">
			<div class="row">
				<div class="col-xs-12 col-md-12 col-lg-12">
					<div class="card">
						<div class="card-header">
							<h4>Add Patient Form</h4>

						</div>
						<form method="post"	action="<?php echo base_url()?>index.php/patient/addpatinfo" enctype="multipart/Form-data" >
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
																 required="required">
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
															required="required">
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
															 required="required">
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
																 required="required">
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
																required="required">
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
																 required="required" style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-3">
														<div class="form-group">
															TRANSGENDER<input type="radio" class="form-control"
																value="transgender" name="gender"
																required="required" style="height:20px; width:20px;">
																
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
																 required="required">
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
															required="required">
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
																 required="required">
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
															required="required">
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
																 required="required">
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
															 required="required">
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
															required="required">
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
															 required="required">
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
																 required="required">
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
																 required="required">
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
																required="required">
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
																required="required">
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


								</div>
			<!-- ********************************************************************************************************	-->				

								<div class="tab-pane fade" id="myTab_example2">
								
									<div class="row">
										<div class="col-sm-12">
											<div class="panel panel-calendar">
												
												<div class="panel-body">
dfdfdfd
fggfgf
													</div>
											</div>
										</div>
									
									</div>
								</div>
		<!--	********************************************************************************************************	-->				

								<div class="tab-pane fade in active" id="myTab_example3">
									<div class="col-sm-12">
											<div class="panel panel-calendar">
												<div class="panel-body">

dfdd
													</div>
											</div>
										</div>
								
								</div>

			<!--********************************************************************************************************-->
									<div class="tab-pane fade in active" id="myTab_example4">
									<div class="col-sm-12">
											<div class="panel panel-calendar">
												
												<div class="panel-body">
													dfdff
											
											</div>
										</div>
								
								</div>
					</div>
					<!--********************************************************************************************************	-->			

									<div class="tab-pane fade in active" id="myTab_example5">
									<div class="col-sm-12">
											<div class="panel panel-calendar">
												<div class="panel-body">
													dfdd
												</div>
												
											</div>
										</div>
								
								</div>
				<!--	********************************************************************************************************-->
									<div class="tab-pane fade in active" id="myTab_example6">
									<div class="col-sm-12">
											<div class="panel panel-calendar">
												
												<div class="panel-body">
													dfdfdfd
											</div>
										</div>
								
								</div>
							</div>
				<!--	********************************************************************************************************-->
									<div class="tab-pane fade in active" id="myTab_example7">
									<div class="col-sm-12">
											<div class="panel panel-calendar">
												
												<div class="panel-body">
												fddfdff
											</div>
										</div>
								
								</div>
							</div>
				<!--	********************************************************************************************************-->
						</div>
					</div>
				</div>
			</div>
			
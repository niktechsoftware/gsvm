<div class="main-content">
	<div class="section">
		<div class="section-body">
			<div class="row">
				<div class="col-xs-12 col-md-12 col-lg-12">
					<div class="card">
						<div class="card-header">
							<h4>Patient Diet Form</h4>

						</div>
						<form method="post"	action="<?php echo base_url()?>index.php/patient/patient_diet" enctype="multipart/Form-data" >
							<div class="card-body">
								<div class="row" id="regForm">

									<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-3">
														<label>DIETARY HABIT<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															VEG<input type="radio" class="form-control"
																value="veg" name="dietary_habit"
																  style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NON-VEG</lebel>
															<input type="radio" class="form-control"
																value="nonveg" name="dietary_habit"
																  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-3">
														<div class="form-group">
															OMNIVOROUS<input type="radio" class="form-control"
																value="omnivorous" name="dietary_habit"
																style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>
											</div>
										
											<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-4">
														<label>NUMBER OF MEALS YOU USUALLY EAT PER DAY:<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															BREAK-FAST<input type="checkbox" class="form-control"
																value="breakfast" name="breakfast"
																id="name" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>LUNCH</lebel>
															<input type="checkbox" class="form-control"
																value="lunch" name="lunch"
																id="name"  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															SNAKES<input type="checkbox" class="form-control"
																value="snakes" name="snake"
																id="name"  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                          <div class="col-md-2">
														<div class="form-group">
															DINNER<input type="checkbox" class="form-control"
																value="dinner" name="dinner"
																id="name"  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
										<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-12">
														<label>NUMBER OF TIMES PER WEEK YOU USUALLY EAT THE FOLLOWING:<span title="Required" style="color: red;">*</span></label>
													</div>
												</br>
												</br>
												</br>
													<div class="col-md-2">
														<div class="form-group">
															<lebel>1.RED MEAT</lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="red" name="meat"
																id="meat"  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="meat" name="meat"
																id="meat1"  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         		</div>
                                         		<div class="col-xs-6 col-md-6 col-lg-6">
                                         		<div id="eat">
                                         <div class="col-md-2">
									<div class="form-group">
										1.DAILY
										 <input style="height:20px; width:20px;" class="form-control" placeholder="Duration" type="radio" name="daily" id="daily"/>
										</div>
									</div>

									 <div class="col-md-2">
									<div class="form-group">
										2.WEEK
										 <input style="height:20px; width:20px;" class="form-control" placeholder="When Left" type="radio" name="week" id="week"/>
										</div>

                                     </div>
                                       <div class="col-md-2">
									<div class="form-group">
										3.MONTH
										 <input style="height:20px; width:20px;" class="form-control" placeholder="Duration" type="radio" name="month" id="month"/>
										</div>
									</div>
									  <div class="col-md-2">
									<div class="form-group">
										4.YEAR
										 <input style="height:20px; width:20px;" class="form-control" placeholder="Duration" type="radio" name="year" id="year"/>
										</div>
									</div>
										</div>
										</div>
									
									<div id="quan">
                                         <div class="col-md-2">
									<div class="form-group">
										 <input  class="form-control" placeholder="Duration" type="text" name="quant1" id="quant1"/>
										</div>
									</div>
									
									</div>

										<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													
												</br>
												</br>
												</br>
													<div class="col-md-2">
														<div class="form-group">
															<lebel>2.FISH</lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="meat" name="fish"
																id="meat" style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="meat1" name="fish"
																id="meat1" style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         		</div>
                                         	</div>
                                         	<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													
												</br>
												</br>
												</br>
													<div class="col-md-2">
														<div class="form-group">
															<lebel>3.DESSERTS</lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="meat" name="dessert"
																id="meat" style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="meat1" name="dessert"
																id="meat1"  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         		</div>
                                         	</div>
<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													
												</br>
												</br>
												</br>
													<div class="col-md-2">
														<div class="form-group">
															<lebel>4.PORK</lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1" name="pork"
																id="meat"  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="0" name="pork"
																id="meat1" style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         		</div>
                                         	</div>
                                         	<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													
												</br>
												</br>
												</br>
													<div class="col-md-2">
														<div class="form-group">
															<lebel>5.CHICKEN</lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1" name="checken"
																id="meat"  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="0" name="checken"
																id="meat1"  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         		</div>
                                         	</div>

                                         		<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													
												</br>
												</br>
												</br>
													<div class="col-md-2">
														<div class="form-group">
															<lebel>6.FRIED FOODS</lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1" name="friedfood"
																id="meat" style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="0" name="friedfood"
																id="meat1" style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         		</div>
                                         	</div>

<!--**********************************************************************************************************************-->

<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-12">
														<label>NUMBER OF SERVINGS(CUPS,GLASSES OR CONTAINERS)PER WEEK YOU USUALLY CONSUME OF:<span title="Required" style="color: red;">*</span></label>
													</div>
												</div>
													<div class="form-group row">
													<div class="col-md-4">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp1. &nbsp &nbsp &nbspMILK:<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="milk" name="milk"
																id="m1" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="milk1" name="milk"
																id="m2"  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                          <div class="col-md-2">
														
															<input type="text" class="form-control"
																placeholder="FREQUENCY/DAY" name="milk"
																id="milk" >
																
														</div>
                                      
												</div>
											</div>
										
											
                  <!--************************************************************************************-->

                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">
													<div class="form-group row">
													<div class="col-md-4">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp2. &nbsp &nbsp &nbspTEA:<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="tea" name="tea"
																id="t1"  style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="tea1" name="tea"
																id="t2"  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                          <div class="col-md-2">
														
															<input type="text" class="form-control"
																placeholder="FREQUENCY/DAY" name="tea"
																id="tea">
																
														</div>
                                      
												</div>
											</div>
                  <!--************************************************************************************-->
                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-4">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp3. &nbsp &nbsp &nbspCOFFEE:<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="coffee" name="coffee"
																id="co1" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="coffee1" name="coffee"
																id="co2"  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														
															<input type="text" class="form-control"
																placeholder="FREQUENCY/DAY" name="coffee"
																id="coffee" >
																
														</div>
								
                                         </div>
                                      
												</div>
											</div>
                  <!--************************************************************************************-->
                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-4">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp4. &nbsp &nbsp &nbspGLASSES OF WATER:<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="wate" name="water"
																id="wat1"  style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="wate1" name="water"
																id="wat2"  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                          <div class="col-md-2">
														
															<input type="text" class="form-control"
																placeholder="FREQUENCY/DAY" name="coffee"
																id="water">
																
														</div>
                                      
												</div>
											</div>
                  <!--************************************************************************************-->

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








	
	



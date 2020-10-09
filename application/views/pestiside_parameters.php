<?php $uri=$this->uri->segment('3'); ?>
<div class="main-content">
	<div class="section">
		<div class="section-body">
			<div class="row">
				<div class="col-xs-12 col-md-12 col-lg-12">
					<div class="card">
						<div class="card-header">
							<h4>Pestiside </h4>

						</div>
						<form method="post"	action="<?php echo base_url()?>index.php/patient/pesisideSubmit" enctype="multipart/Form-data" >
								<input type="hidden" name="id" value="<?php echo $uri; ?>">

							<div class="card-body">
								<div class="row" id="regForm">

									<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										    	<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-5">
														<label>KVK NAME<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-7">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="empname"
																id="name" required="required">
														</div>
								
                                         </div>
												</div>
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-3">
														<label>Do you have own farm<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"

																value="veg" name="dietary_habit"
																  style="height:20px; width:20px;">

																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="nonveg" name="dietary_habit"
																  style="height:20px; width:20px;">

																
														</div>
								
                                         </div>
                                        <div class="col-xs-6 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-6">
														<label>How many Acre do you cultivate <span title="Required" style="color: red;">*</span></label>
													</div>
												<div class="form-group">
															<input type="text" class="form-control"
																value="" name="empname"
																id="name" required="required">
														</div>

											</div>
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-3">
														<label>Do you us pestiside at <span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"

																value="veg" name="dietary_habit"
																  style="height:20px; width:20px;">

																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="nonveg" name="dietary_habit"
																  style="height:20px; width:20px;">

																
														</div>
								
												
											</div>
									 <div class="col-xs-6 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-6">
														<label>Which Type Of crop you are copping  <span title="Required" style="color: red;">*</span></label>
													</div>
												<div class="form-group">
															<input type="text" class="form-control"
																value="" name="empname"
																id="name" required="required">
														</div>

							
										 <div class="col-xs-6 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-6">
														<label>Name and class of pestiside  <span title="Required" style="color: red;">*</span></label>
													</div>
												<div class="form-group">
															<input type="text" class="form-control"
																value="" name="empname"
																id="name" required="required">
														</div>

                                         	</div>
                                         			<div class="form-group row">
													<div class="col-md-4">
														<label>Group of prestiside<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="milk" name="milk"
																id="m1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="milk1" name="milk"
																id="m2" required="required" style="height:20px; width:20px;">
																
														</div>
														</div>
								
									</div>
									</div>
								</div>
                                         		</div>

                                         	</div>



                                         	<div class="form-group row">
													<div class="col-md-4">
														<label>1.Organophosphate<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="milk" name="milk"
																id="m1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="milk1" name="milk"
																id="m2" required="required" style="height:20px; width:20px;">
																
														</div>
                                         </div>
                                         </div>
                                         </div>
                                        	<div class="form-group row">
													<div class="col-md-4">
														<label>2.Organoclorine <span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="milk" name="milk"
																id="m1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="milk1" name="milk"
																id="m2" required="required" style="height:20px; width:20px;">
																
														</div>
                                         </div>
                                         		</div>
                                                </div>
                                                </div>      
                                         			<div class="form-group row">
													<div class="col-md-4">
														<label>3.Carbonate  <span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="milk" name="milk"
																id="m1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="milk1" name="milk"
																id="m2" required="required" style="height:20px; width:20px;">
																
														</div>
									</div>
									
									</div>
									</div>
                                            	<div class="form-group row">
													<div class="col-md-4">
														<label>4.pyrethoid  <span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="milk" name="milk"
																id="m1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="milk1" name="milk"
																id="m2" required="required" style="height:20px; width:20px;">
																
														</div>
									</div>
									
									</div>
									</div>
									</div>
	                                            <div class="form-group row">
													<div class="col-md-4">
														<label>5.Bio pestiside   <span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="milk" name="milk"
																id="m1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="milk1" name="milk"
																id="m2" required="required" style="height:20px; width:20px;">
																
														</div>
									</div>
									
									</div>
									 <div class="col-xs-6 col-md-12 col-lg-12">
									    <?php $gname = $this->db->get("pestiside_group_name");
									    foreach($gname->result() as $groupInfo):
									        echo '<div class="alert alert-info">'.$groupInfo->g_name.'</div>';
									        ?>
									        <table>
									        <tr>    <td>Sno</td>
        									        <td>Group Of Pesicides</td>
        									        <td>Yes</td>
        									        <td>No</td>
        									        <td>Crop</td>
        									        <td>Frequency</td>
        									        <td>Area Covered</td>
        									        <td>Quantity</td>
        									         <td>Acrivity</td>
        									   </tr><?php
									            $this->db->where("group_name_id",$groupInfo->id);
									            $phndetails = $this->db->get("pestiside_head_name");
									            $j =1; foreach($phndetails->result() as $phnd):
									                ?>
									                        <tr>
									                            <td><?php echo $j;?></td>
    									                        <td><?php echo $phnd->name;?></td>
    									                        <td>	YES<input type="radio" class="form-control"	value="milk" name="milk" id="m1" required="required" style="height:20px; width:20px;">
																
																</td>
    									                        <td>	NO<input type="radio" class="form-control"	value="milk" name="milk"	id="m1" required="required" style="height:20px; width:20px;"></td>
    									                        <td>	<input type="text" class="form-control"	value="" name="empname"	id="name" required="required"></td>
    									                        <td><input type="text" class="form-control"	value="" name="empname"	id="name" required="required"></td>
    									                        
    									                         <td><input type="text" class="form-control"	value="" name="empname"	id="name" required="required"></td>
    									                          <td><input type="text" class="form-control"	value="" name="empname"	id="name" required="required"></td>
    									                        <td>save</td>
									                            
									                        </tr>
									                    
									                
									                
									               <?php $j++; endforeach;
									            ?> </table><?php    
									        endforeach;
									?>
									</div>
                                <br>
									  <div class="col-xs-6 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-6">
														<label>6.Name of cropend pert for which pestiside is used (Name of common crops and common pets)  <span title="Required" style="color: red;">*</span></label>
													</div>
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="empname"
																id="name" required="required">
														</div>
                                                </div>
										</div>
										
									
										<div class="col-xs-6 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-6">
														<label>7.Dose applied/hectare  <span title="Required" style="color: red;">*</span></label>
													</div>
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="empname"
																id="name" required="required">
														</div>
									</div>
									</div>
									<div class="col-xs-6 col-md-12 col-lg-12">	
								    <div class="form-group row">
													<div class="col-md-4">
														<label>8.Frequency   <span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="milk" name="milk"
																id="m1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="milk1" name="milk"
																id="m2" required="required" style="height:20px; width:20px;">
																
														</div>
														</div>
														</div>
					                        </div>
					                        	<div class="col-xs-6 col-md-12 col-lg-12">	
												<div class="form-group row">
													<div class="col-md-4">
														<label>9.If there is prestiside left over where it disposd?   <span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															In yord<input type="radio" class="form-control"
																value="milk" name="milk"
																id="m1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>In canalization </lebel>
															<input type="radio" class="form-control"
																value="milk1" name="milk"
																id="m2" required="required" style="height:20px; width:20px;">
																	<div class="col-md-2">
																	    </div>
														<div class="form-group">
															In slidewost dispose<input type="radio" class="form-control"
																value="milk" name="milk"
																id="m1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
													</div>
												
														<div class="col-md-2">
														<div class="form-group">
															<lebel>Other(Please specify)</lebel>
															<input type="radio" class="form-control"
																value="milk1" name="milk"
																id="m2" required="required" style="height:20px; width:20px;">
																
														</div>
														</div>
														</div>
													</div>		
                                         	<!--*****************************************************************-->
                                         		
											 <div class="col-xs-6 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-6">
														<label>10.How many years have you been using pestiside?  <span title="Required" style="color: red;">*</span></label>
													</div>
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="empname"
																id="name" required="required">
														</div>
								
                                         </div>
                                         		</div>
                                         
                                     <div class="col-xs-6 col-md-12 col-lg-12">
                                                    <div class="form-group row">
													<div class="col-md-4">
														<label>11.Do you wear protective clothing when applying pestiside?    <span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="checkbox" class="form-control"
																value="milk" name="milk"
																id="m1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="checkbox" class="form-control"
																value="milk1" name="milk"
																id="m2" required="required" style="height:20px; width:20px;">
																
                                                        </div> 
                                                    </div>
                                                </div> 
                                             </div>

                                        <div class="col-xs-6 col-md-12 col-lg-12">
											    <div class="form-group row">
													<div class="col-md-4">
														<label>12.if yes,check one or more of the following <span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															1.Gloves <input type="checkbox" class="form-control"
																value="milk" name="milk"
																id="m1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>2.Overalls</lebel>
															<input type="checkbox" class="form-control"
																value="milk1" name="milk"
																id="m2" required="required" style="height:20px; width:20px;">
																
                                      	</div></div>
                                      		<div class="col-md-2">
														<div class="form-group">
															3. Eye glasses <input type="checkbox" class="form-control"	value="milk" name="milk"	id="m1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															<lebel>4.Fack mask</lebel>
															<input type="checkbox" class="form-control"
																value="milk1" name="milk"
																id="m2" required="required" style="height:20px; width:20px;">
																	</div>
													</div>
                                      	
                                      	</div>
                                      	</div>
                                      	  <div class="col-xs-6 col-md-12 col-lg-12">
                                      	       <div class="form-group row">
													<div class="col-md-2">
														<div class="form-group">
														<lebel>	5.Boots/Shoes </lebel>
														<input type="checkbox" class="form-control"	value="milk" name="milk"	id="m1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>6.long-sleeve shirt</lebel>
															<input type="checkbox" class="form-control"	value="milk1" name="milk"	id="m2" required="required" style="height:20px; width:20px;">
																	</div>
														</div>
													<div class="col-md-2">
														<div class="form-group">
															7.Long Pants <input type="checkbox" class="form-control"	value="milk" name="milk"	id="m1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>8.Other</lebel>
															<input type="checkbox" class="form-control"	value="milk1" name="milk"	id="m2" required="required" style="height:20px; width:20px;">
																
												</div>
											</div>
											</div>
											</div>
											 <div class="col-xs-6 col-md-12 col-lg-12">
													 <div class="form-group row">
													<div class="col-md-4">
														<label>13.How did you apply them?<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															1.PumpSpray <input type="checkbox" class="form-control"
																value="milk" name="milk"
																id="m1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>2.Fogging gun</lebel>
															<input type="checkbox" class="form-control"
																value="milk1" name="milk"
																id="m2" required="required" style="height:20px; width:20px;">
																
                                      	</div></div>
													<div class="col-md-2">
														<div class="form-group">
															3.Manually <input type="checkbox" class="form-control"
																value="milk" name="milk"
																id="m1" required="required" style="height:20px; width:20px;">
																
														</div>
											</div>
											</div>
											</div>
											 <div class="col-xs-6 col-md-12 col-lg-12">
													<div class="form-group row">
													<div class="col-md-4">
														<label>14. Are the pestiside containers used for other purpose afterwords?<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															1.yes <input type="checkbox" class="form-control"
																value="milk" name="milk"
																id="m1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>2.No</lebel>
															<input type="checkbox" class="form-control"
																value="milk1" name="milk"
																id="m2" required="required" style="height:20px; width:20px;">
														</div>
														</div>		
                                      	
													<div class="col-md-2">
														<div class="form-group">
															3.If yes, where <input type="checkbox" class="form-control"
																value="milk" name="milk"
																id="m1" required="required" style="height:20px; width:20px;">
																
														</div>
														</div>
														</div></div>
										<div class="col-xs-6 col-md-12 col-lg-12">			
												<div class="form-group row">
													<div class="col-md-4">
														<label>15. Are the pestiside containers used for other purpose afterwords?<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															1.Returned to Company/Distributor <input type="checkbox" class="form-control"
																value="milk" name="milk"
																id="m1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>2.Buried</lebel>
															<input type="checkbox" class="form-control"
																value="milk1" name="milk"
																id="m2" required="required" style="height:20px; width:20px;">
															</div>
												</div>		
                                      
													<div class="col-md-2">
														<div class="form-group">
															3.Burnt <input type="checkbox" class="form-control"
																value="milk" name="milk"
																id="m1" required="required" style="height:20px; width:20px;">
																</div>
																</div>
														</div>
												</div>
												
										    	<div class="col-xs-6 col-md-12 col-lg-12">			
												<div class="form-group row">	
													<div class="col-md-2">
														<div class="form-group">
															4.Thrown in open field  <input type="checkbox" class="form-control"
																value="milk" name="milk"
																id="m1" required="required" style="height:20px; width:20px;">
																</div>
														</div>
													
														<div class="col-md-2">
														<div class="form-group">
															<lebel>5.Put in Rubbish/Trash</lebel>
															<input type="checkbox" class="form-control"
																value="milk1" name="milk"
																id="m2" required="required" style="height:20px; width:20px;">
																
                                                        </div>
														</div>
													<div class="col-md-2">
														<div class="form-group">
															6.Other <input type="checkbox" class="form-control"
																value="milk" name="milk"
																id="m1" required="required" style="height:20px; width:20px;">
																
														</div>
														</div>
														</div>
														</div>
													<div class="col-xs-6 col-md-12 col-lg-12">			
													<div class="form-group row">
													<div class="col-md-4">
														<label>16.If pestisides are used who of the family takes the decision on the usage of the pestisides<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															1.Head of the family  <input type="checkbox" class="form-control"
																value="milk" name="milk"
																id="m1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>2.His wife </lebel>
															<input type="checkbox" class="form-control"
																value="milk1" name="milk"
																id="m2" required="required" style="height:20px; width:20px;">
																
                                      	</div></div>
													<div class="col-md-2">
														<div class="form-group">
															3.Agriculture Expert His son  <input type="checkbox" class="form-control"
																value="milk" name="milk"
																id="m1" required="required" style="height:20px; width:20px;">
																</div>
														</div>
													<div class="col-md-2">
														<div class="form-group">
															4.friend  <input type="checkbox" class="form-control"
																value="milk" name="milk"
																id="m1" required="required" style="height:20px; width:20px;">
																</div>
														</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>5.Social Media </lebel>
															<input type="checkbox" class="form-control"
																value="milk1" name="milk"
																id="m2" required="required" style="height:20px; width:20px;">
																
                                      </div>
                                      </div>
													<div class="col-md-2">
														<div class="form-group">
															6.Others <input type="checkbox" class="form-control"
																value="milk" name="milk"
																id="m1" required="required" style="height:20px; width:20px;">
																
														</div>
														</div>
														</div>
														<div class="form-group row">
													<div class="col-md-6">
														<label>17.Do you have Information about organic Farming?  <span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="milk" name="milk"
																id="m1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="milk1" name="milk"
																id="m2" required="required" style="height:20px; width:20px;">
																
														</div>
														</div>
														</div>
															<div class="form-group row">
													<div class="col-md-4">
														<label>Internal Exposure of Pesicides Sign/Symptom of Internal Exposure  <span title="Required" style="color: red;">*</span></label>
													</div>
													
											
                  <!--************************************************************************************-->

                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										    <?php $psie=$this->db->get("pestiside_SIExposure");
										    foreach($psie->result() as $psi):?>
												<div class="col-xs-12 col-md-12 col-lg-12">
													<div class="form-group row">
													<div class="col-md-4">
														<label> <?php echo $psi->id." ) ".$psi->Name;?>:</label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="tea" name="psie<?php $psi->id;?>"	id="t1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="tea1" name="psie<?php $psi->id;?>"	id="t2" required="required" style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>
											</div>
										
											<?php endforeach;?>
                                    </div>
								</div>
	                                         
								<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-6">
														<label>External Exposure Of Pestisides in Human  </label>
													</div>
													</div>
													</div>
															
                                <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
											   <?php $ephe=$this->db->get("pestiside_eph");
										    foreach($ephe->result() as $eph):?>
										    <div class="col-xs-12 col-md-12 col-lg-12">
													<div class="form-group row">
													<div class="col-md-6">
														<label> <?php echo $eph->name;?>:</label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="wate" name="water"
																id="wat1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="wate1" name="water"
																id="wat2" required="required" style="height:20px; width:20px;">
																
														</div>
							             </div>
                        		</div>
                        		</div>
                        	<?php endforeach;?>
                        </div>
                        </div>
                        		 <!--************************************************************************************-->
                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp2. &nbsp &nbsp &nbspModerate irrition to eyes,skin,Nose,Throate:<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="wate" name="water"
																id="wat1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="wate1" name="water"
																id="wat2" required="required" style="height:20px; width:20px;">
																
														</div>
							             </div>
                        		</div>
                        		</div>
                        		
                        		 <!--************************************************************************************-->
                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp3. &nbsp &nbsp &nbspHighly irrition to eyes,skin,Nose,Throate :<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="wate" name="water"
																id="wat1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="wate1" name="water"
																id="wat2" required="required" style="height:20px; width:20px;">
																
														</div>
							             </div>
                        		</div>
                        		</div>
                        		 <!--************************************************************************************-->
                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp4. &nbsp &nbsp &nbspIrrition & Injury,skin,Nose & Nails:<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="wate" name="water"
																id="wat1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="wate1" name="water"
																id="wat2" required="required" style="height:20px; width:20px;">
																
														</div>
							             </div>
                        		</div>
                        		</div>
                        		<!--************************************************************************************-->
	                                         
																	  <div class="col-xs-6 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-6">
														<label>Chronic exposure of pesticides effect in Human <span title="Required" style="color: red;">*</span></label>
													</div>
													</div>
													</div>
															 <!--************************************************************************************-->
                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp1. &nbsp &nbsp &nbspLoss of Appetite:<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="wate" name="water"
																id="wat1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="wate1" name="water"
																id="wat2" required="required" style="height:20px; width:20px;">
																
														</div>
							             </div>
                        		</div>
                        		</div>
                        		 <!--************************************************************************************-->
                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp2. &nbsp &nbsp &nbspWeakness:<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="wate" name="water"
																id="wat1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="wate1" name="water"
																id="wat2" required="required" style="height:20px; width:20px;">
																
														</div>
							             </div>
                        		</div>
                        		</div>
                        		
                        		 <!--************************************************************************************-->
                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp3. &nbsp &nbsp &nbspWeight loss :<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="wate" name="water"
																id="wat1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="wate1" name="water"
																id="wat2" required="required" style="height:20px; width:20px;">
																
														</div>
							             </div>
                        		</div>
                        		</div>
                        		 <!--************************************************************************************-->
                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp4. &nbsp &nbsp &nbspGenral felling of sickness:<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="wate" name="water"
																id="wat1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="wate1" name="water"
																id="wat2" required="required" style="height:20px; width:20px;">
																
														</div>
							             </div>
                        		</div>
                        		</div>
                        		
                        		 <!--************************************************************************************-->
                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp5. &nbsp &nbsp &nbspNervousness & Intentional Tremor:<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="wate" name="water"
																id="wat1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="wate1" name="water"
																id="wat2" required="required" style="height:20px; width:20px;">
																
														</div>
							             </div>
							            </div> 
                        		</div> 
                        		<!--************************************************************************************-->
                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp6. &nbsp &nbsp &nbspAnemia:<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="wate" name="water"
																id="wat1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="wate1" name="water"
																id="wat2" required="required" style="height:20px; width:20px;">
																
														</div>
							             </div>
                        		</div>
                        		</div>
                        		 <!--************************************************************************************-->
                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp7. &nbsp &nbsp &nbspSwelling of face ear,ankle:<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="wate" name="water"
																id="wat1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="wate1" name="water"
																id="wat2" required="required" style="height:20px; width:20px;">
																
														</div>
							             </div>
                        		</div>
                        		</div>
                        		
							             </div>
                        		</div>
                        		</div>
                        		<!--************************************************************************************-->
	                                         
																	  <div class="col-xs-6 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-6">
														<label>(CKD,COPD,CIRRHOSIS & OTHER)CKD <span title="Required" style="color: red;">*</span></label>
													</div>
													</div>
													</div>
															 <!--************************************************************************************-->
                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp1. &nbsp &nbsp &nbspFacial Swelling or puffiness:<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="wate" name="water"
																id="wat1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="wate1" name="water"
																id="wat2" required="required" style="height:20px; width:20px;">
																
														</div>
							             </div>
                        		</div>
                        		</div>
                        		 <!--************************************************************************************-->
                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp2. &nbsp &nbsp &nbspNausea, Vomiting loss of appetite:<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="wate" name="water"
																id="wat1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="wate1" name="water"
																id="wat2" required="required" style="height:20px; width:20px;">
																
														</div>
							             </div>
                        		</div>
                        		</div>
                        		
                        		 <!--************************************************************************************-->
                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp3. &nbsp &nbsp &nbspFatigue,  weakness, decrease mental Sharpness :<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="wate" name="water"
																id="wat1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="wate1" name="water"
																id="wat2" required="required" style="height:20px; width:20px;">
																
														</div>
							             </div>
                        		</div>
                        		</div>
                        		 <!--************************************************************************************-->
                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp4. &nbsp &nbsp &nbspMultiple times urinate :<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="wate" name="water"
																id="wat1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="wate1" name="water"
																id="wat2" required="required" style="height:20px; width:20px;">
																
														</div>
							             </div>
                        		</div>
                        		</div>
                        		
                        		 <!--************************************************************************************-->
                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp5. &nbsp &nbsp &nbspSwelling of teeth, Swelling of Ankle:<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="wate" name="water"
																id="wat1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="wate1" name="water"
																id="wat2" required="required" style="height:20px; width:20px;">
																
														</div>
							             </div>
							            </div> 
                        		</div> 
                        		<!--************************************************************************************-->
                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp6. &nbsp &nbsp &nbspShortness of Breath, High blood pressure :<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="wate" name="water"
																id="wat1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="wate1" name="water"
																id="wat2" required="required" style="height:20px; width:20px;">
																
														</div>
							             </div>
                        		</div>
                        		</div>
                        		<!--************************************************************************************-->
	                                         
																	  <div class="col-xs-6 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-6">
														<label>(CKD,COPD,CIRRHOSIS & OTHER)COPD <span title="Required" style="color: red;">*</span></label>
													</div>
													</div>
													</div>
															 <!--************************************************************************************-->
                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp1. &nbsp &nbsp &nbspShortness of breath, especially during physical activities:<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="wate" name="water"
																id="wat1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="wate1" name="water"
																id="wat2" required="required" style="height:20px; width:20px;">
																
														</div>
							             </div>
                        		</div>
                        		</div>
                        		 <!--************************************************************************************-->
                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp2. &nbsp &nbsp &nbspWheezing:<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="wate" name="water"
																id="wat1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="wate1" name="water"
																id="wat2" required="required" style="height:20px; width:20px;">
																
														</div>
							             </div>
                        		</div>
                        		</div>
                        		
                        		 <!--************************************************************************************-->
                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp3. &nbsp &nbsp &nbspChest tightness :<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="wate" name="water"
																id="wat1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="wate1" name="water"
																id="wat2" required="required" style="height:20px; width:20px;">
																
														</div>
							             </div>
                        		</div>
                        		</div>
                        		 <!--************************************************************************************-->
                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp4. &nbsp &nbsp &nbspA chronic cough that may produce mucus (sputum) that may 
be clear, white, yellow or greenish
 :<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="wate" name="water"
																id="wat1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="wate1" name="water"
																id="wat2" required="required" style="height:20px; width:20px;">
																
														</div>
							             </div>
                        		</div>
                        		</div>
                        		
                        		 <!--************************************************************************************-->
                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp5. &nbsp &nbsp &nbspFrequent respiratory infections:<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="wate" name="water"
																id="wat1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="wate1" name="water"
																id="wat2" required="required" style="height:20px; width:20px;">
																
														</div>
							             </div>
							            </div> 
                        		</div> 
                        		<!--************************************************************************************-->
                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp6. &nbsp &nbsp &nbspLack of energy :<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="wate" name="water"
																id="wat1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="wate1" name="water"
																id="wat2" required="required" style="height:20px; width:20px;">
																
														</div>
							             </div>
                        		</div>
                        		</div>
                        			<!--************************************************************************************-->
                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp7. &nbsp &nbsp &nbspUnintended weight loss (in later stages) :<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="wate" name="water"
																id="wat1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="wate1" name="water"
																id="wat2" required="required" style="height:20px; width:20px;">
																
														</div>
														</div>
														</div>
															<!--************************************************************************************-->
                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp8. &nbsp &nbsp &nbspSwelling in ankles, feet or legs :<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="wate" name="water"
																id="wat1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="wate1" name="water"
																id="wat2" required="required" style="height:20px; width:20px;">
																
														</div>
														</div>
														</div>
															<!--************************************************************************************-->
	                                         
																	  <div class="col-xs-6 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-6">
														<label>(CKD,COPD,CIRRHOSIS & OTHER)Cirrhosis <span title="Required" style="color: red;">*</span></label>
													</div>
													</div>
													</div>
															 <!--************************************************************************************-->
                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp1. &nbsp &nbsp &nbspFatigue:<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="wate" name="water"
																id="wat1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="wate1" name="water"
																id="wat2" required="required" style="height:20px; width:20px;">
																
														</div>
							             </div>
                        		</div>
                        		</div>
                        		 <!--************************************************************************************-->
                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp2. &nbsp &nbsp &nbspEasily bleeding or bruising:<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="wate" name="water"
																id="wat1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="wate1" name="water"
																id="wat2" required="required" style="height:20px; width:20px;">
																
														</div>
							             </div>
                        		</div>
                        		</div>
                        		
                        		 <!--************************************************************************************-->
                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp3. &nbsp &nbsp &nbspLoss of appetite :<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="wate" name="water"
																id="wat1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="wate1" name="water"
																id="wat2" required="required" style="height:20px; width:20px;">
																
														</div>
							             </div>
                        		</div>
                        		</div>
                        		 <!--************************************************************************************-->
                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp4. &nbsp &nbsp &nbspNausea
 :<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="wate" name="water"
																id="wat1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="wate1" name="water"
																id="wat2" required="required" style="height:20px; width:20px;">
																
														</div>
							             </div>
                        		</div>
                        		</div>
                        		
                        		 <!--************************************************************************************-->
                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp5. &nbsp &nbsp &nbspSwelling in your legs, feet or ankles (edema):<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="wate" name="water"
																id="wat1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="wate1" name="water"
																id="wat2" required="required" style="height:20px; width:20px;">
																
														</div>
							             </div>
							            </div> 
                        		</div> 
                        		<!--************************************************************************************-->
                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp6. &nbsp &nbsp &nbspWeight loss :<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="wate" name="water"
																id="wat1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="wate1" name="water"
																id="wat2" required="required" style="height:20px; width:20px;">
																
														</div>
							             </div>
                        		</div>
                        		</div>
                        			<!--************************************************************************************-->
                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp7. &nbsp &nbsp &nbspItchy skin :<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="wate" name="water"
																id="wat1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="wate1" name="water"
																id="wat2" required="required" style="height:20px; width:20px;">
																
														</div>
														</div>
														</div>
														</div>
															<!--************************************************************************************-->
                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp8. &nbsp &nbsp &nbspYellow discoloration in the skin and eyes (jaundice) :<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="wate" name="water"
																id="wat1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="wate1" name="water"
																id="wat2" required="required" style="height:20px; width:20px;">
																
														</div>
														</div>
														</div>
														</div>
															<!--************************************************************************************-->
                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp9. &nbsp &nbsp &nbspFluid accumulation in your abdomen (ascites) :<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="wate" name="water"
																id="wat1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="wate1" name="water"
																id="wat2" required="required" style="height:20px; width:20px;">
																
														</div>
														</div>
														</div>
														</div>
															<!--************************************************************************************-->
                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp10. &nbsp &nbsp &nbspSpiderlike blood vessels on your skin :<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="wate" name="water"
																id="wat1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="wate1" name="water"
																id="wat2" required="required" style="height:20px; width:20px;">
																
														</div>
														</div>
														</div>
														</div>
															<!--************************************************************************************-->
                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp11. &nbsp &nbsp &nbspRedness in the palms of the hands :<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="wate" name="water"
																id="wat1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="wate1" name="water"
																id="wat2" required="required" style="height:20px; width:20px;">
																
														</div>
														</div>
														</div>
														</div>
															<!--************************************************************************************-->
                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp12. &nbsp &nbsp &nbspFor women, absent or loss of periods not related to menopause:<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="wate" name="water"
																id="wat1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="wate1" name="water"
																id="wat2" required="required" style="height:20px; width:20px;">
																
														</div>
														</div>
														</div>
														</div>
															<!--************************************************************************************-->
                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp13. &nbsp &nbsp &nbspFor men, loss of sex drive, breast enlargement (gynecomastia) or testicular atrophy:<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="wate" name="water"
																id="wat1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="wate1" name="water"
																id="wat2" required="required" style="height:20px; width:20px;">
																
														</div>
														</div>
														</div>
														</div>
															<!--************************************************************************************-->
                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp14. &nbsp &nbsp &nbspConfusion, and slurred speech (hepatic encephalopathy) :<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="wate" name="water"
																id="wat1" required="required" style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="wate1" name="water"
																id="wat2" required="required" style="height:20px; width:20px;">
																
														</div>
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
															<button type="submit" class="btn btn-primary" form="nameform"
																  style="margin-left:70%;">
																<i class="far fa-edit">&nbsp;Submit</i>
															</button>
														</div>
													</div>
												</div>

</div>
</div>









































































































								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

											<script>
												$("#eat").hide();
												$("#quan").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="1")
											{
											$("#eat").show();
											
											}
											else
											{
									
											$("#eat").hide();
											$("#quan").hide();
											}
											});
											});
</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
												$("#quan1").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="daily")
											{
												$("#eat").show();
											$("#quan1").show();
											
											}
											else
											{
									
											//$("#eat").show();
											$("#quan1").hide();
											}
											});
											});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
											$("#quan2").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="week")
											{
											$("#eat").show();
											$("#quan2").show();
											
											}
											else
											{
									
											//$("#eat").show();
											$("#quan2").hide();
											}
											});
											});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
												$("#quan3").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="month")
											{
												$("#eat").show();
											$("#quan3").show();
											
											}
											else
											{
									
											//$("#eat").show();
											$("#quan3").hide();
											}
											});
											});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
												$("#quan4").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="year")
											{
												$("#eat").show();
											$("#quan4").show();
											
											}
											else
											{
									
											//$("#eat").show();
											$("#quan4").hide();
											}
											});
											});
</script>
<!----*********************************************************************************************-->


				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												$("#eat1").hide();
												$("#fquan").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="fish")
											{
											$("#eat1").show();
											
											}
											else
											{
									
											$("#eat1").hide();
											$("#fquan").hide();
											}
											});
											});
</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												$("#eat1").hide();
												$("#fquan1").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="daily1")
											{
												$("#eat1").show();
											$("#fquan1").show();
											
											}
											else
											{
									
											//$("#eat").show();
											$("#fquan1").hide();
											}
											});
											});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												$("#eat1").hide();
											$("#fquan2").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="week1")
											{
											$("#eat1").show();
											$("#fquan2").show();
											
											}
											else
											{
									
											//$("#eat").show();
											$("#fquan2").hide();
											}
											});
											});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												$("#eat1").hide();
												$("#fquan3").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="month1")
											{
												$("#eat1").show();
											$("#fquan3").show();
											
											}
											else
											{
									
											//$("#eat").show();
											$("#fquan3").hide();
											}
											});
											});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												$("#eat1").hide();
												$("#fquan4").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="year")
											{
												$("#eat1").show();
											$("#fquan4").show();
											
											}
											else
											{
									
											//$("#eat").show();
											$("#fquan4").hide();
											}
											});
											});
</script>
<!----*********************************************************************************************-->
	
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												$("#eat2").hide();
												$("#dquan1").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="dessert")
											{
											$("#eat2").show();
											
											}
											else
											{
									
											$("#eat2").hide();
											$("#dquan1").hide();
											}
											});
											});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												$("#eat2").hide();
												$("#dquan2").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="daily2")
											{
												$("#eat2").show();
											$("#dquan2").show();
											
											}
											else
											{
									
											//$("#eat").show();
											$("#dquan2").hide();
											}
											});
											});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												$("#eat2").hide();
												$("#dquan3").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="month2")
											{
												$("#eat2").show();
											$("#dquan3").show();
											
											}
											else
											{
									
											//$("#eat").show();
											$("#dquan3").hide();
											}
											});
											});
</script>
<!----*********************************************************************************************-->

<!----*********************************************************************************************-->

<!----*********************************************************************************************-->

<!----*********************************************************************************************-->
	
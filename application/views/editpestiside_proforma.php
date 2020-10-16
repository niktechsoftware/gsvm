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
						<form method="post"	action="<?php echo base_url();?>index.php/customer/update_pesticideproforma" enctype="multipart/Form-data" no>
								

							<div class="card-body">
								<div class="row" id="regForm">

									<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										    	<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-5">
														<label>KVK NAME<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-7">
														<div class="form-group">
															<input type="text" class="form-control"
															 name="kvmname" value="<?php echo $pp->row()->kvm_name; ?>" >
														</div>
								
                                         </div>
												</div>
												</div>
												</div>
												</div>
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-3">
														<label>Do you have own farm<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"

																value="yes<?php echo $pp->row()->do_you_have_own_farm;?>" name="ownfarm"
																  style="height:20px; width:20px;" checked>

																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="no<?php echo $pp->row()->do_you_have_own_farm;?>" name="ownfarm"
																  style="height:20px; width:20px;" checked>

																
														</div>
								
                                         </div>
										 </div>
									</div>
									<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-6">
														<label>How many Acre do you cultivate <span title style="color: red;">*</span></label>
													</div>
												<div class="form-group">
															<input type="text" class="form-control"
														 name="cultivate" value="<?php echo $pp->row()->how_many_acre_do_you_cultivate;?>">
														</div>

											</div>
											</div>
											<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-3">
														<label>Do you us pestiside at <span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"

																value="yes<?php echo $pp->row()->do_you_use_pesticides_at;?>" name="pestiside"
																  style="height:20px; width:20px;" checked>

																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="no<?php echo $pp->row()->do_you_use_pesticides_at;?>" name="pestiside"
																  style="height:20px; width:20px;" checked>

																
														</div>
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-6">
														<label>Which Type Of crop you are copping  <span title style="color: red;">*</span></label>
													</div>
												<div class="form-group">
															<input type="text" class="form-control"
																 name="cropping" value="<?php echo $pp->row()->which_typeof_crop_you_are_cropping;?>">
														</div>
														</div>
														</div>
														 <div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-6">
														<label>Name and class of pestiside  <span title style="color: red;">*</span></label>
													</div>
												<div class="form-group">
															<input type="text" class="form-control"
															 name="cop" value="<?php echo $pp->row()->name_and_class_of_pesticide;?>">
														</div>
													</div>
                                         	</div>
											 <div class="col-xs-12 col-md-12 col-lg-12">
											 <div class="form-group row">
													<div class="col-md-4">
														<label>Group of prestiside<span title style="color: red;">*</span></label>
													</div>

									</div>
									</div>
									 <div class="col-xs-12 col-md-12 col-lg-12">
									 <div class="form-group row">
													<div class="col-md-4">
														<label>1.Organophosphate<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="yes<?php echo $pp->row()->gop_organophosphate;?>" name="gopo"
																id=""  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="no<?php echo $pp->row()->gop_organophosphate;?>" name="gopo"
																id=""  style="height:20px; width:20px;" checked>
																
														</div>
                                         </div>
                                         </div>
                                         </div>
										  <div class="col-xs-12 col-md-12 col-lg-12">
										  <div class="form-group row">
													<div class="col-md-4">
														<label>2.Organoclorine <span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="yes<?php echo $pp->row()->gop_organochlorine;?>" name="gop_o"
																id=""  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="no<?php echo $pp->row()->gop_organochlorine;?>" name="gop_o"
																id=""  style="height:20px; width:20px;" checked>
																
														</div>
                                         </div>
                                         		</div>
                                                </div>
												 <div class="col-xs-12 col-md-12 col-lg-12">
												<div class="form-group row">
													<div class="col-md-4">
														<label>3.Carbonate  <span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="yes<?php echo $pp->row()->gop_carbamate;?>" name="gopc"
																id=""  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="no<?php echo $pp->row()->gop_carbamate;?>" name="gopc"
																id=""  style="height:20px; width:20px;" checked>
																
														</div>
									</div>
									
									</div>
									</div>
									 <div class="col-xs-12 col-md-12 col-lg-12">
									 <div class="form-group row">
													<div class="col-md-4">
														<label>4.pyrethoid  <span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="yes<?php echo $pp->row()->gop_pyrethroid;?>" name="gopp"
																id=""  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="no<?php echo $pp->row()->gop_pyrethroid;?>" name="gopp"
																id=""  style="height:20px; width:20px;" checked>
																
														</div>
									</div>
									
									</div>
									</div>
									 <div class="col-xs-12 col-md-12 col-lg-12">
									  <div class="form-group row">
													<div class="col-md-4">
														<label>5.Bio pestiside   <span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="yes<?php $pp->row()->gop_bio_pesticides;?>" name="gopbp"
																id=""  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="no<?php $pp->row()->gop_bio_pesticides;?>"" name="gopbp"
																id=""  style="height:20px; width:20px;" checked>
																
														</div>
									</div>
									</div>
									</div>
									 <div class="col-xs-12 col-md-12 col-lg-12">
									 
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
        									         
        									   </tr><?php
									            $this->db->where("group_name_id",$groupInfo->id);
									            $phndetails = $this->db->get("pestiside_head_name");
									            $j =1; foreach($phndetails->result() as $phnd):
									                ?>
									                        <tr>
									                            <td><?php 
																$statusv="status".$phnd->id;
																$crop="crop".$phnd->id;
																$freq="freq".$phnd->id;
																$area="area".$phnd->id;
																$quantity="quantity".$phnd->id;
																echo $j;?></td>
    									                        <td><?php echo $phnd->name;?></td>
    									                        <td>	YES<input type="radio" class="form-control"	value="1<?php echo $statusv;?>" name="<?php echo $statusv;?>"  style="height:20px; width:20px;" >
																
																</td>
    									                        <td>	NO<input type="radio" class="form-control"	value="0<?php echo $statusv;?>" name="<?php echo $statusv;?>"	  style="height:20px; width:20px;"></td>
    									                        <td>	<input type="text" class="form-control"	value name="<?php echo $crop;?>"	id ></td>
    									                        <td><input type="text" class="form-control"	value name="<?php echo $freq;?>"	id ></td>
    									                        
    									                         <td><input type="text" class="form-control"	value name="<?php echo $area;?>"	id ></td>
    									                          <td><input type="text" class="form-control"	value name="<?php echo $quantity;?>"	id ></td>
																  <input type="hidden" name="pid" value="<?php echo $uri;?>">
    									                        
									                            
									                        </tr>
									                    
									                
									                
									               <?php $j++; endforeach;
									            ?> </table><?php    
									        endforeach;
									?>
									</div>
                                </br>
								</br>
								<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-8">
														<label>6.Name of cropend pert for which pestiside is used (Name of common crops and common pets)  <span title style="color: red;">*</span></label>
													</div>
														<div class="form-group">
															<input type="text" class="form-control"
																value="<?php $pp->row()->nccacp;?>" name="ncccp">
														</div>
                                                </div>
										</div>
										<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-6">
														<label>7.Dose applied/hectare  <span title style="color: red;">*</span></label>
													</div>
														<div class="form-group">
															<input type="text" class="form-control"
																value="<?php $pp->row()->da_h;?>" name="dah">
														</div>
									</div>
									</div>
										<div class="col-xs-12 col-md-12 col-lg-12">	
								    <div class="form-group row">
													<div class="col-md-4">
														<label>8.Frequency   <span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															Weekly<input type="radio" class="form-control"
																value="weekly<?php echo $pp->row()->frequency_timing;?>" name="freq"
																id  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>Monthly</lebel>
															<input type="radio" class="form-control"
																value="monthly<?php echo $pp->row()->frequency_timing;?>" name="freq"
																id  style="height:20px; width:20px;" checked>
																
														</div>
														</div>
														</div>
					                        </div>
											<div class="col-xs-12 col-md-12 col-lg-12">	
												<div class="form-group row">
													<div class="col-md-4">
														<label>9.If there is prestiside left over where it disposed?   <span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-1">
														<div class="form-group">
															In yord<input type="radio" class="form-control"
																value="inyord<?php echo $pp->row()->diposed;?>" name="disposed"
																id=""  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>In cancelization </lebel>
															<input type="radio" class="form-control"
																value="cancelization<?php echo $pp->row()->diposed;?>" name="disposed"
																id  style="height:20px; width:20px;" checked>
																</div>
																 </div>
																	<div class="col-md-2">
																	   
														<div class="form-group">
															In slidewost dispose<input type="radio" class="form-control"
																value="slidewostdispose<?php echo $pp->row()->diposed;?>" name="disposed"
																id=""  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
													
												
														<div class="col-md-2">
														<div class="form-group">
															<lebel>Other(Please specify)</lebel>
															<input type="radio" class="form-control"
																value="other<?php echo $pp->row()->diposed;?>" name="disposed"
																id=""  style="height:20px; width:20px;" checked>
																
														</div>
														</div>
														</div>
													</div>		
                                         	<!--*****************************************************************-->
											 <div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-6">
														<label>10.How many years have you been using pestiside?  <span title style="color: red;">*</span></label>
													</div>
														<div class="form-group">
															<input type="text" class="form-control"
																 name="hmyhybup" value="<?php echo $pp->row()->h_m_y_h_y_b_u_p;?>">
														</div>
								
                                         </div>
                                         		</div>
												<div class="col-xs-12 col-md-12 col-lg-12">
                                                    <div class="form-group row">
													<div class="col-md-6">
														<label>11.Do you wear protective clothing when applying pestiside?    <span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="wear<?php echo $pp->row()->d_y_w_p_c_w_a_p;?>" name="wear"
																id=""  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="nowear<?php echo $pp->row()->d_y_w_p_c_w_a_p;?>" name="wear"
																id=""  style="height:20px; width:20px;" checked>
																
                                                        </div> 
                                                    </div>
                                                </div> 
                                             </div>
											 
											  <div class="col-xs-12 col-md-12 col-lg-12" id="apply1">
											    <div class="form-group row">
													<div class="col-md-4">
														<label>if yes,check one or more of the following <span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															1.Gloves <input type="checkbox" class="form-control"
																value="gloves<?php echo $pp->row()->gloves;?>" name="gloves"
																id=""  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>2.Overalls</lebel>
															<input type="checkbox" class="form-control"
																value="overall<?php echo $pp->row()->overalls;?>" name="overall"
																id=""  style="height:20px; width:20px;" checked>
																
                                      	</div></div>
                                      		<div class="col-md-2">
														<div class="form-group">
															3. Eye glasses <input type="checkbox" class="form-control"	value="eye_glasse<?php echo $pp->row()->eye_glasses;?>" name="eye_g" style="height:20px; width:20px;" checked>
																
														</div>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															<lebel>4.Fack mask</lebel>
															<input type="checkbox" class="form-control"
																value="facemask<?php echo $pp->row()->face_mask;?>" name="fm"
																id=""  style="height:20px; width:20px;" checked>
																	</div>
													</div>
                                      	
                                      	</div>
                                      	</div>
										</div>
										<div class="col-xs-12 col-md-12 col-lg-12" id="apply2">
                                      	       <div class="form-group row">
											   <div class="col-md-4">
														</div>
													<div class="col-md-2">
														<div class="form-group">
														<lebel>	5.Boots/Shoes </lebel>
														<input type="checkbox" class="form-control"	value="boot_shoes<?php echo $pp->row()->boot_shoes;?>" name="bs"  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>6.long-sleeve shirt</lebel>
															<input type="checkbox" class="form-control"	value="long_sleeve_shirt<?php echo $pp->row()->long_sleeve_shirt;?>" name="lss"	  style="height:20px; width:20px;" checked>
																	</div>
														</div>
													<div class="col-md-2">
														<div class="form-group">
															7.Long Pants <input type="checkbox" class="form-control"	value="long_pant<?php echo $pp->row()->long_pants;?>" name="lpant"	  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>8.Other</lebel>
															<input type="checkbox" class="form-control"	value="other<?php echo $pp->row()->other;?>" name="others"  style="height:20px; width:20px;" checked>
																
												</div>
											</div>
											</div>
											</div>
											
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												$("#apply1").hide();
												$("#apply2").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="wear")
											{
											$("#apply1").show();
											$("#apply2").show();
											}
											else
											{
											$("#apply1").hide();
											$("#apply2").hide();
											}
											});
											});
</script>

						<div class="col-xs-12 col-md-12 col-lg-12">
													 <div class="form-group row">
													<div class="col-md-4">
														<label>13.How did you apply them?<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															1.PumpSpray <input type="checkbox" class="form-control"
																value="pump_spray<?php echo $pp->row()->pump_spray;?>" name="pummps"
																id=""  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>2.Fogging gun</lebel>
															<input type="checkbox" class="form-control"
																value="fogging_gun<?php echo $pp->row()->fogging_gun;?>" name="gun"
																id=""  style="height:20px; width:20px;" checked>
																
                                      	</div></div>
													<div class="col-md-2">
														<div class="form-group">
															3.Manually <input type="checkbox" class="form-control"
																value="manually<?php echo $pp->row()->manually;?>" name="manually"
																id=""  style="height:20px; width:20px;" checked>
																
														</div>
											</div>
											</div>
											</div>
											
											<div class="col-xs-12 col-md-12 col-lg-12">
													<div class="form-group row">
													<div class="col-md-6">
														<label>14. Are the pestiside containers used for other purpose afterwords?<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															1.yes <input type="radio" class="form-control"
																value="purpose<?php echo $pp->row()->pa_yes_no;?>" name="purposes"
																id  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>2.No</lebel>
															<input type="radio" class="form-control"
																value="nopurpose<?php echo $pp->row()->pa_yes_no;?>" name="purposes"
																id  style="height:20px; width:20px;" checked>
														</div>
														</div>		
                                      	
													<div class="col-md-2">
														<div class="form-group">
															<input type="text" class="form-control"
																value="<?php echo $pp->row()->pa_where;?>" name="purposesw" placeholder="WHERE"
																id="purposesw" >
																
														</div>
														</div>
														</div>
														</div>
														<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												$("#purposesw").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="purpose")
											{
											$("#purposesw").show();
											}
											else
											{
											$("#purposesw").hide();
											}
											});
											});
</script>
									<div class="col-xs-12 col-md-12 col-lg-12">			
												<div class="form-group row">
													<div class="col-md-6">
														<label>15. Are the pestiside containers used for other purpose afterwords?<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															1.Returned to Company/Distributor <input type="checkbox" class="form-control"
																value="returned_to_company<?php echo $pp->row()->rcd;?>" name="rcd" style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>2.Buried</lebel>
															<input type="checkbox" class="form-control"
																value="buried<?php echo $pp->row()->buried;?>" name="bur"
															  style="height:20px; width:20px;" checked>
															</div>
												</div>		
                                      
													<div class="col-md-2">
														<div class="form-group">
															3.Burnt <input type="checkbox" class="form-control"
																value="burnt<?php echo $pp->row()->burnt;?>" name="burnt"
																style="height:20px; width:20px;" checked>
																</div>
																</div>
														</div>
												</div>
												<div class="col-xs-12 col-md-12 col-lg-12">			
												<div class="form-group row">	
												<div class="col-md-6">
												</div>
													<div class="col-md-2">
														<div class="form-group">
															4.Thrown in open field  <input type="checkbox" class="form-control"
																value="thrown<?php echo $pp->row()->tiof;?>" name="tof"  style="height:20px; width:20px;" checked>
																</div>
														</div>
													
														<div class="col-md-2">
														<div class="form-group">
															<lebel>5.Put in Rubbish/Trash</lebel>
															<input type="checkbox" class="form-control"
																value="trash<?php echo $pp->row()->pirt;?>" name="rt"
																id=""  style="height:20px; width:20px;" checked>
																
                                                        </div>
														</div>
													<div class="col-md-2">
														<div class="form-group">
															6.Other <input type="checkbox" class="form-control"
																value="other<?php echo $pp->row()->other_s;?>" name="othe"
																id=""  style="height:20px; width:20px;" checked>
																
														</div>
														</div>
														</div>
														</div>
														<div class="col-xs-12 col-md-12 col-lg-12">			
													<div class="form-group row">
													<div class="col-md-12">
														<label>16.If pestisides are used who of the family takes the decision on the usage of the pestisides<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															1.Head of the family  <input type="checkbox" class="form-control"
																value="head_of_family<?php echo $pp->row()->hotf;?>" name="hotf"
																id=""  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>2.His wife </lebel>
															<input type="checkbox" class="form-control"
																value="his_wife<?php echo $pp->row()->h_w;?>" name="hw"
																id=""  style="height:20px; width:20px;" checked>
																
                                      	</div></div>
													<div class="col-md-2">
														<div class="form-group">
															3.Agriculture Expert His son  <input type="checkbox" class="form-control"
																value="agriculture_expert<?php echo $pp->row()->a_e_h_s;?>" name="aehs"
																id=""  style="height:20px; width:20px;" checked>
																</div>
														</div>
													<div class="col-md-2">
														<div class="form-group">
															4.friend  <input type="checkbox" class="form-control"
																value="friend<?php echo $pp->row()->f;?>" name="friends"
																id=""  style="height:20px; width:20px;" checked>
																</div>
														</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>5.Social Media </lebel>
															<input type="checkbox" class="form-control"
																value="social_media<?php echo $pp->row()->sm_tv_r;?>" name="sm"
																id=""  style="height:20px; width:20px;" checked>
																
                                      </div>
                                      </div>
													<div class="col-md-2">
														<div class="form-group">
															6.Others <input type="checkbox" class="form-control"
																value="other<?php echo $pp->row()->other_sp;?>" name="o_sp"
																id=""  style="height:20px; width:20px;" checked>
																
														</div>
														</div>
														</div>
														</div>
														<div class="col-xs-12 col-md-12 col-lg-12">	
														<div class="form-group row">
													<div class="col-md-6">
														<label>17.Do you have Information about organic Farming?  <span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="yes<?php echo $pp->row()->organic_f;?>" name="farming"
																id=""  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="no<?php echo $pp->row()->organic_f;?>" name="farming"
																id=""  style="height:20px; width:20px;" checked>
																
														</div>
														</div>
														</div>
														</div>
														<div class="form-group row">
													<div class="col-md-12">
														<label>Internal Exposure of Pesicides Sign/Symptom of Internal Exposure </label>
													</div>
						 <!--************************************************************************************-->
										<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										    <?php $psie=$this->db->get("pestiside_siexposure");
										    foreach($psie->result() as $psi):?>
												<div class="col-xs-12 col-md-12 col-lg-12">
													<div class="form-group row">
													<div class="col-md-4">
														<label> <?php echo $psi->id." ) ".$psi->Name;?>:</label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1" name="psie<?php echo $psi->id;?>"	  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0" name="psie<?php echo $psi->id;?>"	  style="height:20px; width:20px;" checked>
																
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
																value="1" name="eph<?php echo $eph->id;?>"
																id  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0" name="eph<?php echo $eph->id;?>"
																id  style="height:20px; width:20px;" checked>
																
														</div>
							             </div>
                        		</div>
                        		</div>
                        	<?php endforeach;?>
                        </div>
                        </div>
                        		 <!--************************************************************************************-->
												  <div class="col-xs-6 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-6">
														<label>Chronic exposure of pesticides effect in Human <span title style="color: red;">*</span></label>
													</div>
													</div>
													</div>
															 
                        		 <!--************************************************************************************-->
												 <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp1. &nbsp &nbsp &nbspLoss of Appetite:<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->loa;?>" name="loa"
																id  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->loa;?>" name="loa"
																id  style="height:20px; width:20px;" checked>
																
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
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp2. &nbsp &nbsp &nbspWeakness:<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->wkn;?>" name="weaknesss"
																id  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->wkn;?>" name="weaknesss"
																id  style="height:20px; width:20px;" checked>
																
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
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp3. &nbsp &nbsp &nbspWeight loss :<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->wl;?>" name="wl"
																id  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->wl;?>" name="wl"
																id  style="height:20px; width:20px;" checked>
																
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
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp4. &nbsp &nbsp &nbspGenral felling of sickness:<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->gfs;?>" name="gfs"
																id  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->gfs;?>" name="gfs"
																id  style="height:20px; width:20px;" checked>
																
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
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp5. &nbsp &nbsp &nbspNervousness & Intentional Tremor:<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->nit;?>" name="nit"
																id  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->nit;?>" name="nit"
																id  style="height:20px; width:20px;" checked>
																
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
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp6. &nbsp &nbsp &nbspAnemia: <span title style="color: red;">*</span></label>
													</div>
													
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
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspFatigue:<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->a_fatigue;?>" name="fati"
																id=""  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->a_fatigue;?>" name="fati"
																id=""  style="height:20px; width:20px;" checked>
																
														</div>
							             </div>
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
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspSkin Paller:<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->a_sp;?>" name="a_sp"
																id  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->a_sp;?>" name="a_sp"
																id  style="height:20px; width:20px;" checked>
																
														</div>
							             </div>
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
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspShortness of Breathing:<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->a_sob;?>" name="a_sob"
																id  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->a_sob;?>" name="a_sob"
																id  style="height:20px; width:20px;" checked>
																
														</div>
							             </div>
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
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspLight Headedness:<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->a_lh;?>" name="a_lh"
																id  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->a_lh;?>" name="a_lh"
																id  style="height:20px; width:20px;" checked>
																
														</div>
							             </div>
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
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspFast Heart Beat:<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->a_fhb;?>" name="a_fhb"
																id  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->a_fhb;?>" name="a_fhb"
																id  style="height:20px; width:20px;" checked>
																
														</div>
							             </div>
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
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp7. &nbsp &nbsp &nbspChronic Headache:<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->ch;?>" name="ch"
																id  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->ch;?>" name="ch"
																id  style="height:20px; width:20px;" checked>
																
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
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp8. &nbsp &nbsp &nbspStomach ache, Salivation:<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->sas;?>" name="sas"
																id  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->sas;?>" name="sas"
																id  style="height:20px; width:20px;" checked>
																
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
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp9. &nbsp &nbsp &nbspLow grade fever:<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->lgf;?>" name="lgf"
																id  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->lgf;?>" name="lgf"
																id  style="height:20px; width:20px;" checked>
																
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
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp10. &nbsp &nbsp &nbspGarlic breath(Arsenal):<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->gba;?>" name="gba"
																id  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->gba;?>" name="gba"
																id  style="height:20px; width:20px;" checked>
																
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
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp11. &nbsp &nbsp &nbspLiver Damage & jaundice:<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="liverdamage<?php echo $pp->row()->ldj;?>" name="ldj"
																 style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="noliverdamage<?php echo $pp->row()->ldj;?>" name="ldj"
																style="height:20px; width:20px;" checked>
																
														</div>
							             </div>
                        		</div>
                        		</div>
                        		 <!--************************************************************************************-->
						
								  <div class="col-md-12 col-lg-12 col-xs-12" id="liverdamage1">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspYellow color of sclera:<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="yellow_color<?php echo $pp->row()->ldj_ycs;?>" name="ldj_ycs"
																  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="noyellow_color<?php echo $pp->row()->ldj_ycs;?>" name="ldj_ycs"
																  style="height:20px; width:20px;" checked>
																
														</div>
							             </div>
                        		</div>
                        		</div>
								<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspStomach pain & swelling:<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="stomach_pain<?php echo $pp->row()->ldj_sps;?>" name="ldj_sps"
																 style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="no_stomach_pain<?php echo $pp->row()->ldj_sps;?>" name="ldj_sps"
																  style="height:20px; width:20px;" checked>
																
														</div>
							             </div>
                        		</div>
                        		</div>
								<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspJaundice:<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="jaundice<?php echo $pp->row()->ldj_j;?>" name="ldj_j"
																  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="nojaundice<?php echo $pp->row()->ldj_j;?>" name="ldj_j"
																  style="height:20px; width:20px;" checked>
																
														</div>
							             </div>
                        		</div>
                        		</div>
								</div>
                        		</div>
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												$("#liverdamage1").hide();
												$("#dquan2").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="liverdamage")
											{
												$("#liverdamage1").show();
											//$("#dquan2").show();
											
											}
											else
											{
									
											//$("#eat").show();
											//$("#liverdamage1").hide();
											}
											});
											});
</script>
                        		 <!--************************************************************************************-->
								   <div class="col-md-12 col-lg-12 col-xs-12" id="jaundice1">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspChange in skin colour:<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->ldj_j_csc;?>" name="ldj_j_csc"
																  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->ldj_j_csc;?>" name="ldj_j_csc"
																  style="height:20px; width:20px;" checked>
																
														</div>
							             </div>
                        		</div>
                        		</div>
								<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspAbdominal pain:<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->ldj_j_ap;?>" name="ldj_j_ap"
																  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->ldj_j_ap;?>" name="ldj_j_ap"
																  style="height:20px; width:20px;" checked>
																
														</div>
							             </div>
                        		</div>
                        		</div>
								<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspDark colour in urine & stool:<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->ldj_j_dcus;?>" name="ldj_j_dcus"
																  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->ldj_j_dcus;?>" name="ldj_j_dcus"
																  style="height:20px; width:20px;" checked>
																
														</div>
							             </div>
                        		</div>
                        		</div>
							<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspFever:<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1" name="ldj_j_f"
																  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0" name="ldj_j_f"
																  style="height:20px; width:20px;" checked>
																
														</div>
							             </div>
                        		</div>
                        		</div>
								</div>
								</div>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												$("#jaundice1").hide();
												//$("#dquan2").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="jaundice")
											{
												$("#jaundice1").show();
											//$("#dquan2").show();
											
											}
											else
											{
									
											//$("#eat").show();
											//$("#jaundice1").hide();
											}
											});
											});
</script>
                        		 <!--************************************************************************************-->
								 <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-8">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp12. &nbsp &nbsp &nbspFor women, absent or loss of periods not related to menopause:<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->c_walprm;?>" name="walpr"
																  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->c_walprm;?>" name="walpr"
																 style="height:20px; width:20px;" checked>
																
														</div>
														</div>
														</div>
														</div>
															<!--************************************************************************************-->
															
															<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-8">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp13. &nbsp &nbsp &nbspFor men, loss of sex drive, breast enlargement (gynecomastia) or testicular atrophy:<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->c_mlsdbeta;?>" name="mlsdbe"
																  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->c_mlsdbeta;?>" name="mlsdbe"
																  style="height:20px; width:20px;" checked>
																
														</div>
														</div>
														</div>
														</div>
															<!--************************************************************************************-->
																	  <div class="col-xs-6 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-6">
														<label>(CKD,COPD,CIRRHOSIS & OTHER)CKD <span title style="color: red;">*</span></label>
													</div>
													</div>
													</div>
															 <!--************************************************************************************-->
								 
                                          <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp1. &nbsp &nbsp &nbspFacial Swelling or puffiness:<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->fsp;?>" name="fsp"
																 style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->fsp;?>" name="fsp"
																 style="height:20px; width:20px;" checked>
																
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
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp2. &nbsp &nbsp &nbspNausea, Vomiting loss of appetite:<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->nvloa;?>" name="nvla"
																  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->nvloa;?>" name="nvla"
																 style="height:20px; width:20px;" checked>
																
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
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp3. &nbsp &nbsp &nbspFatigue,  weakness, decrease mental Sharpness :<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->fwdms;?>" name="fwdms"
																  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->fwdms;?>" name="fwdms"
																 style="height:20px; width:20px;" checked>
																
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
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp4. &nbsp &nbsp &nbspMultiple times urinate :<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->mtu;?>" name="mtu"
																 style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->mtu;?>" name="mtu"
																  style="height:20px; width:20px;" checked>
																
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
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp5. &nbsp &nbsp &nbspSwelling of teeth, Swelling of Ankle:<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->stsoa;?>" name="stsa"
																  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->stsoa;?>" name="stsa"
																 style="height:20px; width:20px;" checked>
																
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
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp6. &nbsp &nbsp &nbspShortness of Breath, High blood pressure :<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->sbhbp;?>" name="sbhbp"
																  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->sbhbp;?>" name="sbhbp"
																  style="height:20px; width:20px;" checked>
																
														</div>
							             </div>
                        		</div>
                        		</div>
                        		<!--************************************************************************************-->
								 <div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-6">
														<label>(CKD,COPD,CIRRHOSIS & OTHER)COPD <span title style="color: red;">*</span></label>
													</div>
													</div>
													</div>
															 <!--************************************************************************************-->
															  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp1. &nbsp &nbsp &nbspShortness of breath, especially during physical activities:<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->sbedpa;?>" name="sbedpa"
																  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->sbedpa;?>" name="sbedpa"
																  style="height:20px; width:20px;" checked>
																
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
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp2. &nbsp &nbsp &nbspWheezing: <span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->wheezing;?>" name="wheez"
																  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->wheezing;?>" name="wheez"
																  style="height:20px; width:20px;" checked>
																
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
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp3. &nbsp &nbsp &nbspChest tightness :<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->ctigt;?>" name="chest_t"
																  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->ctigt;?>" name="chest_t"
																  style="height:20px; width:20px;" checked>
																
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
 :<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->wyg;?>" name="cctmpm"
																  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->wyg;?>" name="cctmpm"
																  style="height:20px; width:20px;" checked>
																
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
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp5. &nbsp &nbsp &nbspFrequent respiratory infections:<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->fri;?>" name="fri"
																  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->fri;?>" name="fri"
																  style="height:20px; width:20px;" checked>
																
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
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp6. &nbsp &nbsp &nbspLack of energy :<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->loe;?>" name="loe"
																  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->loe;?>" name="loe"
																  style="height:20px; width:20px;" checked>
																
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
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp7. &nbsp &nbsp &nbspUnintended weight loss (in later stages) :<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->uwl;?>" name="wloss"
																  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->uwl;?>" name="wloss"
																  style="height:20px; width:20px;" checked>
																
														</div>
														</div>
														</div>
															<!--************************************************************************************-->
                  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp8. &nbsp &nbsp &nbspSwelling in ankles, feet or legs :<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->safl;?>" name="safl"
																  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->safl;?>" name="safl"
																  style="height:20px; width:20px;" checked>
																
														</div>
														</div>
														</div>
															<!--************************************************************************************-->
															 <div class="col-xs-6 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-6">
														<label>(CKD,COPD,CIRRHOSIS & OTHER)Cirrhosis <span title style="color: red;">*</span></label>
													</div>
													</div>
													</div>
															 <!--************************************************************************************-->
															  <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp1. &nbsp &nbsp &nbspFatigue:<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->c_f;?>" name="fati"
																  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->c_f;?>" name="fati"
																  style="height:20px; width:20px;" checked>
																
														</div>
							             </div>
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
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp2. &nbsp &nbsp &nbspEasily bleeding or bruising:<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->c_ebb;?>" name="ebb"
																  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->c_ebb;?>" name="ebb"
																  style="height:20px; width:20px;" checked>
																
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
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp3. &nbsp &nbsp &nbspLoss of appetite :<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->c_loa;?>" name="loapp"
																  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->c_loa;?>" name="loapp"
																  style="height:20px; width:20px;" checked>
																
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
 :<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->c_n;?>" name="nausea"
																  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->c_n;?>" name="nausea"
																  style="height:20px; width:20px;" checked>
																
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
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp5. &nbsp &nbsp &nbspSwelling in your legs, feet or ankles (edema):<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->c_slfa;?>" name="sylfa"
																  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->c_slfa;?>" name="sylfa"
																  style="height:20px; width:20px;" checked>
																
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
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp6. &nbsp &nbsp &nbspWeight loss :<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->c_wl;?>" name="weitl"
																  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->c_wl;?>" name="weitl"
																  style="height:20px; width:20px;" checked>
																
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
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp7. &nbsp &nbsp &nbspItchy skin :<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->c_is;?>" name="iskin"
																  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->c_is;?>" name="iskin"
																  style="height:20px; width:20px;" checked>
																
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
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp8. &nbsp &nbsp &nbspYellow discoloration in the skin and eyes (jaundice) :<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->c_j;?>" name="ydse"
																  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->c_j;?>" name="ydse"
																  style="height:20px; width:20px;" checked>
																
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
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp9. &nbsp &nbsp &nbspFluid accumulation in your abdomen (ascites) :<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->c_a;?>" name="saya"
																  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->c_a;?>" name="saya"
																  style="height:20px; width:20px;" checked>
																
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
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp10. &nbsp &nbsp &nbspSpiderlike blood vessels on your skin :<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->c_sbvs;?>" name="sbvys"
																  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->c_sbvs;?>" name="sbvys"
																  style="height:20px; width:20px;" checked>
																
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
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp11. &nbsp &nbsp &nbspRedness in the palms of the hands :<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->c_rph;?>" name="rph"
																  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->c_rph;?>" name="rph"
																  style="height:20px; width:20px;" checked>
																
														</div>
														</div>
														</div>
														</div>
														 <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-6">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp12. &nbsp &nbsp &nbspFor men,loss of sex drive,breast enlargement :<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->c_mlsdbeta;?>" name="mlsdbeta"
																  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->c_mlsdbeta;?>" name="mlsdbeta"
																  style="height:20px; width:20px;" checked>
																
														</div>
														</div>
														</div>
														</div>
														 <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-8">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp13. &nbsp &nbsp &nbspFor women,absent or loss of periods not related to menopause :<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->c_walprm;?>" name="walprm"
																  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->c_walprm;?>" name="walprm"
																  style="height:20px; width:20px;" checked>
																
														</div>
														</div>
														</div>
														</div>
														 <div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
												<div class="col-xs-12 col-md-12 col-lg-12">

												
													<div class="form-group row">
													<div class="col-md-8">
														<label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp14. &nbsp &nbsp &nbspConfusion, and slurred speech (hepatic encephalopathy) :<span title style="color: red;">*</span></label>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $pp->row()->c_mlsdbeta;?>" name="css"
																  style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $pp->row()->c_mlsdbeta;?>" name="css"
																  style="height:20px; width:20px;" checked>
																
														</div>
														</div>
														</div>
														</div>
															<!--************************************************************************************-->
									
									<div class="col-xs-12 col-md-12 col-lg-12">
												<div class="form-group row">
													
													<div class="col-md-9" style="margin-left:76%;">
														<div class="form-group">
															<button type="submit" class="btn btn-primary"
																id="regisbtn">
																<i class="far fa-edit">&nbsp;Update</i>
															</button>
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
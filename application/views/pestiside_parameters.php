
<div class="main-content">
	<div class="section">
		<div class="section-body">
			<div class="row">
				<div class="col-xs-12 col-md-12 col-lg-12">
					<div class="card">
						<div class="card-header">
							<h4>Biochemical Parameters</h4>

						</div>

						<form method="post"	action="<?php echo base_url()?>index.php/customer/pestiside" enctype="multipart/Form-data" >
          

							<div class="card-body">
								<div class="row" id="regForm">
									<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
											<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-4">
														<label>Enter Patient ID<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<input type="text" class="form-control"
																value="" name="username"
																id="reg_id" required="required">
														</div>
														
												 </div>
												 	<div class="col-md-4">
														<div class="form-group">
															<button type="submit" class="btn btn-primary"
																id="regisbtn" style="">
														<i class="fas fa-check">&nbsp;OK</i>
												</button>
											</div>
										</div>
											</div>
										</div>
											<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
												    <table>
												<?php if($uri){
												    $this->db->where("reg_id",$id);
												    $bcf = $this->db->get("breast_cancer_proforma");
												    if($bcf->num_rows()>0){
												        foreach($bcf->result() as $bc):?>
												        <tr> <td><?php echo $bc->date;?></td></tr>
												   <?php  endforeach; }
												}?>
												</table>
									</div>
								</div>
							</div>
						</div>
				</form>
				</div>
				</div>
				<?php if($uri){?>
				<div class="alert alert-info col-xs-12 col-md-12 col-lg-12">    <?php echo $msg;?></div>

					<form method="post"  action="<?php echo base_url();?>index.php/customer/pestiside_Submit" enctype="multipart/Form-data" no>
                <?php if($id){ ?>
              <input type="hidden" name="ppid" id="ppid" value="<?php echo $id;?>">
             <?php } ?>

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
                               name="kvmname" value="">
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

                                value="yes" name="ownfarm"
                                  style="height:20px; width:20px;">

                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="no" name="ownfarm"
                                  style="height:20px; width:20px;">

                                
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
                             name="cultivate"
                                id="">
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

                                value="yes" name="pestiside"
                                  style="height:20px; width:20px;">

                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="no" name="pestiside"
                                  style="height:20px; width:20px;">

                                
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
                                 name="cropping"
                                id="" >
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
                               name="cop"
                                id="" >
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
                                value="yes" name="gopo"
                                id=""  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="no" name="gopo"
                                id=""  style="height:20px; width:20px;">
                                
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
                                value="yes" name="gop_o"
                                id=""  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="no" name="gop_o"
                                id=""  style="height:20px; width:20px;">
                                
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
                                value="yes" name="gopc"
                                id=""  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="no" name="gopc"
                                id=""  style="height:20px; width:20px;">
                                
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
                                value="yes" name="gopp"
                                id=""  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="no" name="gopp"
                                id=""  style="height:20px; width:20px;">
                                
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
                                value="yes" name="gopbp"
                                id=""  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="no" name="gopbp"
                                id=""  style="height:20px; width:20px;">
                                
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
                                              <td>  YES<input type="radio" class="form-control" value="1" name="<?php echo $statusv;?>" id  style="height:20px; width:20px;">
                                
                                </td>
                                              <td>  NO<input type="radio" class="form-control"  value="0" name="<?php echo $statusv;?>" id  style="height:20px; width:20px;"></td>
                                              <td>  <input type="text" class="form-control" value name="<?php echo $crop;?>"  id ></td>
                                              <td><input type="text" class="form-control" value name="<?php echo $freq;?>"  id ></td>
                                              
                                               <td><input type="text" class="form-control"  value name="<?php echo $area;?>"  id ></td>
                                                <td><input type="text" class="form-control" value name="<?php echo $quantity;?>"  id ></td>
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
                                value name="ncccp"
                                id="" >
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
                                value name="dah"
                                id="" >
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
                                value="weekly" name="freq"
                                id  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>Monthly</lebel>
                              <input type="radio" class="form-control"
                                value="monthly" name="freq"
                                id  style="height:20px; width:20px;">
                                
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
                                value="inyord" name="disposed"
                                id=""  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>In cancelization </lebel>
                              <input type="radio" class="form-control"
                                value="cancelization" name="disposed"
                                id  style="height:20px; width:20px;">
                                </div>
                                 </div>
                                  <div class="col-md-2">
                                     
                            <div class="form-group">
                              In slidewost dispose<input type="radio" class="form-control"
                                value="slidewostdispose" name="disposed"
                                id=""  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                          
                        
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>Other(Please specify)</lebel>
                              <input type="radio" class="form-control"
                                value="other" name="disposed"
                                id=""  style="height:20px; width:20px;">
                                
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
                                 name="hmyhybup"
                                id="" >
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
                                value="wear" name="wear"
                                id=""  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="nowear" name="wear"
                                id=""  style="height:20px; width:20px;">
                                
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
                                value="gloves" name="gloves"
                                id=""  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>2.Overalls</lebel>
                              <input type="checkbox" class="form-control"
                                value="overall" name="overall"
                                id=""  style="height:20px; width:20px;">
                                
                                        </div></div>
                                          <div class="col-md-2">
                            <div class="form-group">
                              3. Eye glasses <input type="checkbox" class="form-control"  value="eye_glasse" name="eye_g" id="m1"  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                          <div class="col-md-2">
                            <div class="form-group">
                              <lebel>4.Fack mask</lebel>
                              <input type="checkbox" class="form-control"
                                value="facemask" name="fm"
                                id=""  style="height:20px; width:20px;">
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
                            <lebel> 5.Boots/Shoes </lebel>
                            <input type="checkbox" class="form-control" value="boot_shoes" name="bs"  id  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>6.long-sleeve shirt</lebel>
                              <input type="checkbox" class="form-control" value="long_sleeve_shirt" name="milk" id  style="height:20px; width:20px;">
                                  </div>
                            </div>
                          <div class="col-md-2">
                            <div class="form-group">
                              7.Long Pants <input type="checkbox" class="form-control"  value="long_pant" name="lpant"  id  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>8.Other</lebel>
                              <input type="checkbox" class="form-control" value="other" name="others" id  style="height:20px; width:20px;">
                                
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
                                value="pump_spray" name="pummps"
                                id=""  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>2.Fogging gun</lebel>
                              <input type="checkbox" class="form-control"
                                value="fogging_gun" name="gun"
                                id=""  style="height:20px; width:20px;">
                                
                                        </div></div>
                          <div class="col-md-2">
                            <div class="form-group">
                              3.Manually <input type="checkbox" class="form-control"
                                value="manually" name="manually"
                                id=""  style="height:20px; width:20px;">
                                
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
                                value="purpose" name="purposes"
                                id  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>2.No</lebel>
                              <input type="radio" class="form-control"
                                value="nopurpose" name="purposes"
                                id  style="height:20px; width:20px;">
                            </div>
                            </div>    
                                        
                          <div class="col-md-2">
                            <div class="form-group">
                              <input type="text" class="form-control"
                                value name="purposesw" placeholder="WHERE"
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
                                value="returned_to_company" name="rcd"
                                id  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>2.Buried</lebel>
                              <input type="checkbox" class="form-control"
                                value="buried" name="bur"
                                id  style="height:20px; width:20px;">
                              </div>
                        </div>    
                                      
                          <div class="col-md-2">
                            <div class="form-group">
                              3.Burnt <input type="checkbox" class="form-control"
                                value="burnt" name="burnt"
                                id  style="height:20px; width:20px;">
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
                                value="thrown" name="tof"
                                id=""  style="height:20px; width:20px;">
                                </div>
                            </div>
                          
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>5.Put in Rubbish/Trash</lebel>
                              <input type="checkbox" class="form-control"
                                value="trash" name="rt"
                                id=""  style="height:20px; width:20px;">
                                
                                                        </div>
                            </div>
                          <div class="col-md-2">
                            <div class="form-group">
                              6.Other <input type="checkbox" class="form-control"
                                value="other" name="othe"
                                id=""  style="height:20px; width:20px;">
                                
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
                                value="head_of_family" name="hotf"
                                id=""  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>2.His wife </lebel>
                              <input type="checkbox" class="form-control"
                                value="his_wife" name="hw"
                                id=""  style="height:20px; width:20px;">
                                
                                        </div></div>
                          <div class="col-md-2">
                            <div class="form-group">
                              3.Agriculture Expert His son  <input type="checkbox" class="form-control"
                                value="agriculture_expert" name="aehs"
                                id=""  style="height:20px; width:20px;">
                                </div>
                            </div>
                          <div class="col-md-2">
                            <div class="form-group">
                              4.friend  <input type="checkbox" class="form-control"
                                value="friend" name="friends"
                                id=""  style="height:20px; width:20px;">
                                </div>
                            </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>5.Social Media </lebel>
                              <input type="checkbox" class="form-control"
                                value="social_media" name="sm"
                                id=""  style="height:20px; width:20px;">
                                
                                      </div>
                                      </div>
                          <div class="col-md-2">
                            <div class="form-group">
                              6.Others <input type="checkbox" class="form-control"
                                value="other" name="o_sp"
                                id=""  style="height:20px; width:20px;">
                                
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
                                value="yes" name="farming"
                                id=""  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="no" name="farming"
                                id=""  style="height:20px; width:20px;">
                                
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
                                value="1" name="psie<?php echo $psi->id;?>"   style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="psie<?php echo $psi->id;?>"   style="height:20px; width:20px;">
                                
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
                                id  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="eph<?php echo $eph->id;?>"
                                id  style="height:20px; width:20px;">
                                
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
                                value="1" name="loa"
                                id  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="loa"
                                id  style="height:20px; width:20px;">
                                
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
                                value="1" name="weaknesss"
                                id  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="weaknesss"
                                id  style="height:20px; width:20px;">
                                
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
                                value="1" name="wl"
                                id  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="wl"
                                id  style="height:20px; width:20px;">
                                
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
                                value="1" name="gfs"
                                id  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="gfs"
                                id  style="height:20px; width:20px;">
                                
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
                                value="1" name="nit"
                                id  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="nit"
                                id  style="height:20px; width:20px;">
                                
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
                                value="1" name="fati"
                                id=""  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="fati"
                                id=""  style="height:20px; width:20px;">
                                
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
                                value="1" name="a_sp"
                                id  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="a_sp"
                                id  style="height:20px; width:20px;">
                                
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
                                value="1" name="a_sob"
                                id  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="a_sob"
                                id  style="height:20px; width:20px;">
                                
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
                                value="1" name="a_lh"
                                id  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="a_lh"
                                id  style="height:20px; width:20px;">
                                
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
                                value="1" name="a_fhb"
                                id  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="a_fhb"
                                id  style="height:20px; width:20px;">
                                
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
                                value="1" name="ch"
                                id  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="ch"
                                id  style="height:20px; width:20px;">
                                
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
                                value="1" name="sas"
                                id  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="sas"
                                id  style="height:20px; width:20px;">
                                
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
                                value="1" name="lgf"
                                id  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="lgf"
                                id  style="height:20px; width:20px;">
                                
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
                                value="1" name="gba"
                                id  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="gba"
                                id  style="height:20px; width:20px;">
                                
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
                                value="liverdamage" name="ldj"
                                 style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="noliverdamage" name="ldj"
                                style="height:20px; width:20px;">
                                
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
                                value="yellow_color" name="ldj_ycs"
                                  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="noyellow_color" name="ldj_ycs"
                                  style="height:20px; width:20px;">
                                
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
                                value="stomach_pain" name="ldj_sps"
                                 style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="no_stomach_pain" name="ldj_sps"
                                  style="height:20px; width:20px;">
                                
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
                                value="jaundice" name="ldj_j"
                                  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="nojaundice" name="ldj_j"
                                  style="height:20px; width:20px;">
                                
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
                                value="1" name="ldj_j_csc"
                                  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="ldj_j_csc"
                                  style="height:20px; width:20px;">
                                
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
                                value name="ldj_j_ap"
                                  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value name="ldj_j_ap"
                                  style="height:20px; width:20px;">
                                
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
                                value="1" name="ldj_j_dcus"
                                  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="ldj_j_dcus"
                                  style="height:20px; width:20px;">
                                
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
                                  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="ldj_j_f"
                                  style="height:20px; width:20px;">
                                
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
                                value="1" name="walpr"
                                  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="walpr"
                                 style="height:20px; width:20px;">
                                
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
                                value="1" name="mlsdbe"
                                  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="mlsdbe"
                                  style="height:20px; width:20px;">
                                
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
                                value="1" name="fsp"
                                 style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="fsp"
                                 style="height:20px; width:20px;">
                                
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
                                value="1" name="nvla"
                                  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="nvla"
                                 style="height:20px; width:20px;">
                                
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
                                value="1" name="fwdms"
                                  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="fwdms"
                                 style="height:20px; width:20px;">
                                
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
                                value="1" name="mtu"
                                 style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="mtu"
                                  style="height:20px; width:20px;">
                                
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
                                value="1" name="stsa"
                                  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="stsa"
                                 style="height:20px; width:20px;">
                                
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
                                value="1" name="sbhbp"
                                  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="sbhbp"
                                  style="height:20px; width:20px;">
                                
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
                                value="1" name="sbedpa"
                                  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="sbedpa"
                                  style="height:20px; width:20px;">
                                
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
                                value="1" name="wheez"
                                  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="wheez"
                                  style="height:20px; width:20px;">
                                
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
                                value="1" name="chest_t"
                                  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="chest_t"
                                  style="height:20px; width:20px;">
                                
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
                                value="1" name="cctmpm"
                                  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="cctmpm"
                                  style="height:20px; width:20px;">
                                
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
                                value="1" name="fri"
                                  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="fri"
                                  style="height:20px; width:20px;">
                                
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
                                value="1" name="loe"
                                  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="loe"
                                  style="height:20px; width:20px;">
                                
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
                                value="1" name="wloss"
                                  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="wloss"
                                  style="height:20px; width:20px;">
                                
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
                                value="1" name="safl"
                                  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="safl"
                                  style="height:20px; width:20px;">
                                
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
                                value="1" name="fati"
                                  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="fati"
                                  style="height:20px; width:20px;">
                                
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
                                value="1" name="ebb"
                                  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="ebb"
                                  style="height:20px; width:20px;">
                                
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
                                value="1" name="loapp"
                                  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="loapp"
                                  style="height:20px; width:20px;">
                                
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
                                value="1" name="nausea"
                                  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="nausea"
                                  style="height:20px; width:20px;">
                                
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
                                value="1" name="sylfa"
                                  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="sylfa"
                                  style="height:20px; width:20px;">
                                
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
                                value="1" name="weitl"
                                  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="weitl"
                                  style="height:20px; width:20px;">
                                
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
                                value="1" name="iskin"
                                  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="iskin"
                                  style="height:20px; width:20px;">
                                
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
                                value="1" name="ydse"
                                  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="ydse"
                                  style="height:20px; width:20px;">
                                
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
                                value="1" name="saya"
                                  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="saya"
                                  style="height:20px; width:20px;">
                                
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
                                value="1" name="sbvys"
                                  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="sbvys"
                                  style="height:20px; width:20px;">
                                
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
                                value="1" name="rph"
                                  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="rph"
                                  style="height:20px; width:20px;">
                                
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
                                value="1" name="mlsdbeta"
                                  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="mlsdbeta"
                                  style="height:20px; width:20px;">
                                
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
                                value="1" name="walprm"
                                  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="walprm"
                                  style="height:20px; width:20px;">
                                
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
                                value="1" name="css"
                                  style="height:20px; width:20px;">
                                
                            </div>
                          </div>
                            <div class="col-md-2">
                            <div class="form-group">
                              <lebel>NO</lebel>
                              <input type="radio" class="form-control"
                                value="0" name="css"
                                  style="height:20px; width:20px;">
                                
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
                                <i class="far fa-edit">&nbsp;Submit</i>
                              </button>
                            </div>
                          </div>
                        </div>

                      </div>
                                                    
                  
                

</div>
</div>
</form>
</div>
<?php }?> 
</div>
</div>
</div>
</div>
</div>                   
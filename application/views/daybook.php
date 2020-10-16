<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4><?php echo $smallTitle;?></h4>
                  </div>
                  <div class="card-body">
                  <div class="col-md-12 col-lg-12 col-xs-12">
                  
                      	<form method="post"	action="<?php echo base_url()?>index.php/daybookController/gerReport" enctype="multipart/Form-data" >
										<div class="row">
											<div class="col-xs-12 col-md-12 col-lg-12">
												<div class="form-group row">
													<div class="col-md-6">
														<label>Start Date</label>
															<input type="date" class="form-control"	value="" name="sdate">
													</div>
													<div class="col-md-6">
														<div class="form-group">
														    	<label>End Date</label>
														<input type="date" class="form-control"	value="" name="edate">
														</div>
								
                                                    </div>
                                                   </div>
                                                 </div>
                                                 <div class="col-xs-12 col-md-12 col-lg-12">
                                                    <div class="form-group row">
                                                    <div class="col-md-5">
													<?php $this->db->where("id",$uri);
													$spd = $this->db->get("study_plan")->row();
												
													?>
													<label><?php 	echo $spd->plan_name;;?><input type ="hidden" name ="getv" value="<?php echo $spd->id;?>"</label>
													<?php if($uri==3){$this->db->where("plan_id",$uri);
													             $ssp=   $this->db->get("sub_study_plan");?>
													<select id="ssp" name="ssp" class="form-control" required > 
													<?php if($ssp->num_rows()>0){
													    foreach($ssp->result() as $sspr):?>
													<option value="<?php echo $sspr->id;?>"><?php echo $sspr->sub_plan_name;?></option>
													
													<?php endforeach;}?></select>
													<?php }?>
                                                    </div>
                                                   
                                                    <div class="col-md-5">
													
													
															<button type="submit" class="btn btn-primary"
															
														<i class="fas fa-check">&nbsp;OK</i>
                												</button>
                										
											
								
                                                    </div> </div>
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
</section>
</div>


<!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-4">
                <div class="card author-box">
                  <div class="card-body">
                    <div class="author-box-center">
                    
                          <img alt="" height="128" width="138" src="<?php echo base_url();?>assets/img/<?php echo $crecord->row()->image;?>" />
                       
                      <div class="clearfix"></div>
                      <div class="author-box-name">
                        <a href="#"><?php //echo $this->session->userdata("name") ; ?></a>
                      </div>
            <div class="author-box-job">User Id:<?php  echo $crecord->row()->username; ?></div>
                    </div>
                    
                  </div>
                </div>
                
              </div>
              <div class="col-12 col-md-12 col-lg-8">
                <div class="card">
                  <div class="padding-20">
                    <ul class="nav nav-tabs" id="myTab2" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#about" role="tab"
                          aria-selected="true">View</a>
                      </li>
                     
                    </ul>
                    <div class="tab-content tab-bordered" id="myTab3Content">
                      <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab2">
                       
                          <div class="card-header">
                            <h4>Full Profile</h4>
                          </div>
                          <div class="card-body">
                            <div class="row">
                          <div class="col-xs-6 col-md-6 col-lg-6">

                        <div class="form-group row">
                          <div class="col-md-5">
                            <label>NAME<span  style="color: red;">*</span></label>
                          </div>
                          <div class="col-md-7">
                            <div class="form-group">
                              <input type="text" class="form-control"
                                value="<?php echo $crecord->row()->first_name.$crecord->row()->middle_name.$crecord->row()->last_name; ?>" name="empname" readonly>
                            </div>
                
                                         </div>
                        </div>


                      </div>
                       <div class="col-xs-6 col-md-6 col-lg-6">

                        <div class="form-group row">
                          <div class="col-md-5">
                            <label>City<span  style="color: red;">*</span></label>
                          </div>
                          <div class="col-md-7">
                            <div class="form-group">
                              <input type="text" class="form-control"
                                value="<?php echo $crecord->row()->city; ?>" readonly>
                            </div>
                
                                         </div>
                        </div>


                      </div>
                       <div class="col-xs-6 col-md-6 col-lg-6">

                        <div class="form-group row">
                          <div class="col-md-5">
                            <label>State:<span  style="color: red;">*</span></label>
                          </div>
                          <div class="col-md-7">
                            <div class="form-group">
                              <input type="text" class="form-control"
                                value="<?php echo $crecord->row()->state; ?>"  readonly>
                            </div>
                
                                         </div>
                        </div>


                      </div>
                      <div class="col-xs-6 col-md-6 col-lg-6">

                        <div class="form-group row">
                          <div class="col-md-5">
                            <label>Current Address:<span  style="color: red;">*</span></label>
                          </div>
                          <div class="col-md-7">
                            <div class="form-group">
                              <input type="text" class="form-control"
                                value="<?php echo $crecord->row()->address; ?>"  readonly>
                            </div>
                
                                         </div>
                        </div>


                      </div>
                <div class="col-xs-6 col-md-6 col-lg-6">
                      <div class="form-group row">
                           <div class="col-md-5">
                                <label>Pincode:<span  style="color: red;">*</span></label>
                           </div>
                           <div class="col-md-7">
                               <div class="form-group">
                                    <input type="text" class="form-control" value="<?php echo $crecord->row()->pincode; ?>"  readonly>
                               </div>
                           </div>
                      </div>
                </div>
                <div class="col-xs-6 col-md-6 col-lg-6">
                      <div class="form-group row">
                           <div class="col-md-5">
                                <label>Email Id :<span  style="color: red;">*</span></label>
                           </div>
                           <div class="col-md-7">
                               <div class="form-group">
                                    <input type="text" class="form-control" value="<?php echo $crecord->row()->email; ?>"  readonly>
                               </div>
                           </div>
                      </div>
                </div>
                <div class="col-xs-6 col-md-6 col-lg-6">
                      <div class="form-group row">
                           <div class="col-md-5">
                                <label>Mobile No:<span  style="color: red;">*</span></label>
                           </div>
                           <div class="col-md-7">
                               <div class="form-group">
                                    <input type="text" class="form-control" value="<?php echo $crecord->row()->mobile_number; ?>"  readonly>
                               </div>
                           </div>
                      </div>
                </div>
                <div class="col-xs-6 col-md-6 col-lg-6">
                      <div class="form-group row">
                           <div class="col-md-5">
                                <label>Phone No:<span  style="color: red;">*</span></label>
                           </div>
                           <div class="col-md-7">
                               <div class="form-group">
                                    <input type="text" class="form-control" value="<?php echo $crecord->row()->telephone_number; ?>"  readonly>
                               </div>
                           </div>
                      </div>
                </div>
                <div class="col-xs-6 col-md-6 col-lg-6">
                      <div class="form-group row">
                           <div class="col-md-5">
                                <label>User Id:<span  style="color: red;">*</span></label>
                           </div>
                           <div class="col-md-7">
                               <div class="form-group">
                                    <input type="text" class="form-control" value="<?php echo $crecord->row()->username; ?>"  readonly>
                               </div>
                           </div>
                      </div>
                </div>
                <div class="col-xs-6 col-md-6 col-lg-6">
                      <div class="form-group row">
                           <div class="col-md-5">
                                <label>Date:<span  style="color: red;">*</span></label>
                           </div>
                           <div class="col-md-7">
                               <div class="form-group">
                                    <input type="text" class="form-control" value="<?php echo $crecord->row()->date; ?>"  readonly>
                               </div>
                           </div>
                      </div>
                </div>
                 <div class="col-xs-6 col-md-6 col-lg-6">
                      <div class="form-group row">
                           <div class="col-md-5">
                                <label>Adhar Card<span  style="color: red;">*</span></label>
                           </div>
                           <div class="col-md-7">
                               <div class="form-group">
                                    <input type="text" class="form-control" value="<?php echo $crecord->row()->aadhar_card; ?>"  readonly>
                               </div>
                           </div>
                      </div>
                </div>
                 <div class="col-xs-6 col-md-6 col-lg-6">
                      <div class="form-group row">
                           <div class="col-md-5">
                                <label>Password:<span  style="color: red;">*</span></label>
                           </div>
                           <div class="col-md-7">
                               <div class="form-group">
                                    <input type="text" class="form-control" value="<?php echo $crecord->row()->password; ?>"  readonly>
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
    </div>
  </div>
</div>
</div>
</div>
</section>
</div>

     

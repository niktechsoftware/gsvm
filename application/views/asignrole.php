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
					<div class="row">
                     <div class="col-xs-6 col-md-6 col-lg-6">
                     <div class="form-group row">
						<div class="col-md-3">
								<label>Select Employee<span title="Required" style="color: red;">*</span></label>
								</div>
							<div class="col-md-9">
							<div class="form-group">
								 <select class="form-control " name="eid" id="eid" value ="">
							      <option>--Select Employee--</option>
							            <?php
							            if($record->num_rows()>0) {
							            	
										foreach($record->result() as $row):?>
								<option value="<?php echo $row->id;?>">
								<?php echo $row->employee_iname;?></option>
							       <?php endforeach; }?>
							    </select>  
							</div>
								
                       </div>
					</div>
                    </div>
                      
                    <div class="col-xs-6 col-md-6 col-lg-6">
                       <div class="form-group row">
						<div class="col-md-3">
								<label>Employee Name <span title="Required" style="color: red;"></span></label>
								</div>
							<div class="col-md-9">
							<div class="form-group">
                             <input type="text" class="form-control" value="" name="address" id="name" required="required">               
                     
                      			</div>
                      		</div>
                      	</div>
                      	</div>
                      </div>
                      <div class="row" id ="setValue">
                      </div>
                  
                    </div>
                    <div class="col-md-12 col-lg-12 col-xs-12" id="sms">
                    <div class="alert alert-info"> Plese Select and one Option to set Permission for filling study plan.
                    <br>
                    <br>
                     </div>
                     <br>
                     <br>
                     <br>
                     <br>
                     <br>
                    
                      <br>
                       <br>
                    </div>
                  </div>
                </div>
                  </div>
                </div>
           <script>
           $("#eid").change(function(){
               var eid = $("#eid").val();
               alert(eid);
               $.ajax({
                        
                          "url": "<?php echo site_url('adminController/getPermissionStatus') ?>",
                           "method": 'POST',
                           "data": {eid : eid},
                           beforeSend: function(data) {
                              $("#setValue").html("<center><img src='<?php echo base_url(); ?>assets/images/loading.gif' /></center>")
                           },
                           success: function(data) {
                               $("#setValue").html(data);
                               $("#sms").hide();
                           },
                           error: function(data) {
                               $("#setValue").html(data)
                           }
                       })

           });

           </script>     
             
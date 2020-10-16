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
                          <div class ="alert alert-info"> <h3>Pesticide Details between <?php echo $sdate ;?> to <?php echo $edate;?></h3></div>
                        
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Date</th>
                            <th>Patient Name</th>
                            <th>Father Name</th>
                            <th>Mobile Number</th>
                            <th>Pesticide Status</th>
                         
                            <th>User ID</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                       if($row->num_rows()>0){
                          $i=1;
                        foreach($row->result() as $res):
                             $this->db->where("id",$res->reg_id);
                           $data= $this->db->get("reg_patient_info")->row();
                        ?>
                          <tr>
                            <td><?php echo $i;?></td>
                           <td><?php echo $res->date;?>
                           <input type="hidden" id ="reg_id<?php echo $i;?>" value="<?php echo $data->id;?>" />
                           </td>
                            <td><?php echo $data->first_name.$data->middle_name.$data->last_name;?></td>
                            <td><?php echo $data->father_name;?></td>
                             <td><?php echo $data->mobile_number;?></td>
                            <td><a href="<?php echo base_url();?>index.php/customer/editpestiside_proforma/<?php echo $data->id; ?>"><?php echo $res->date;?></a>
                           </td>
                          
                           
                        <td class="align-middle"><a href="<?php echo base_url();?>index.php/patient/viewprofile/<?php echo $data->id;?>"><?php echo $data->username;?></a></td>
                            <td>
                                
                                <button class ="badge badge-danger badge-shadow" id ="delb<?php echo $i;?>"> Delete</button></td>
                                        <script>   $("#delb<?php echo $i;?>").click(function(){
                                       var reg_id = $("#reg_id<?php echo $i;?>").val();
                                       alert(reg_id);
                                       $.ajax({
                                                
                                                  "url": "<?php echo site_url('patient/deleteRegistration') ?>",
                                                   "method": 'POST',
                                                   "data": {reg_id : reg_id},
                                                   beforeSend: function(data) {
                                                      $("#delb<?php echo $i;?>").html("wait...")
                                                   },
                                                   success: function(data) {
                                                       if(data==1){
                                                       $("#delb<?php echo $i;?>").html("Deleted Successfully");
                                                   }else{
                                                       $("#delb<?php echo $i;?>").html("Permission Error");
                                                   }
                                                      
                                                   },
                                                   error: function(data) {
                                                       $("#delb<?php echo $i;?>").html(data)
                                                   }
                                               })
                        
                                   });</script>
                          </tr>
                          
                          <?php //} 
                          $i++; endforeach; }else{
                          echo "data not found";
                        } ?>
                          
                        </tbody>
                        
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

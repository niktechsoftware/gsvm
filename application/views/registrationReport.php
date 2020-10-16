<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4><?php echo $smallTitle;?></h4>
                   <button type="submit" id="dataExport" name="dataExport" value="Export to excel" class="btn btn-info">Export To Excel</button>
                  </div>
                 
                  <div class="card-body">
                          <div class ="alert alert-info"> <h3>Registration Details between <?php echo $sdate ;?> to <?php echo $edate;?></h3></div>
                        
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
                            <th>Diet Status</th>
                            <th>Smoking Status</th>
                             <th>Alcohal Status</th>
                            <th>Exercise Habit</th>
                            <th>User ID</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                       if($row->num_rows()>0){
                          $i=1;
                        foreach($row->result() as $data):
                        ?>
                          <tr>
                            <td><?php echo $i;?></td>
                           <td><?php echo $data->date;?>
                           <input type="hidden" id ="reg_id<?php echo $i;?>" value="<?php echo $data->id;?>" />
                           </td>
                            <td><?php echo $data->first_name.$data->middle_name.$data->last_name;?></td>
                            <td><?php echo $data->father_name;?></td>
                             <td><?php echo $data->mobile_number;?></td>
                            <td>
                         
                              <?php $this->db->where("reg_id",$data->id);
                            $dietD = $this->db->get("reg_patient_diet");
                            if($dietD->num_rows()>0){
                                foreach($dietD->result() as $dd):
                                  ?>
                                     <a href="<?php echo base_url();?>index.php/customer/editdiet_form/<?php echo $dd->id?>">
                                      <?php
                                    echo $dd->date."<br>";?>
                                  </a>
                              <?php   endforeach;
                            }else{
                                echo 'N/A';
                            }?>
                           </td>
                          
                              <td><?php $this->db->where("reg_id",$data->id);
                            $smokD = $this->db->get("reg_smoking_status");
                            if($smokD->num_rows()>0){
                                foreach($dietD->result() as $sd):
                                   ?>
                                     <a href="<?php echo base_url();?>index.php/customer/editsmoking_status/<?php echo $sd->id?>">
                                      <?php
                                    echo $sd->date."<br>";
                                    endforeach;
                            }else{
                                echo 'N/A';
                            }?>
                           </td>
                           
                             <td><?php $this->db->where("reg_id",$data->id);
                            $alcohalD = $this->db->get("reg_alcohol_status");
                            if($smokD->num_rows()>0){
                                foreach($alcohalD->result() as $asd):
                                   ?>
                                     <a href="<?php echo base_url();?>index.php/customer/editalcohol_status/<?php echo $asd->id?>">
                                      <?php
                                    echo $asd->date."<br>";
                                    endforeach;
                            }else{
                                echo 'N/A';
                            }?>
                           </td>
                              <td><?php $this->db->where("reg_id",$data->id);
                            $rehD = $this->db->get("reg_exercise_habit");
                            if($rehD->num_rows()>0){
                                foreach($rehD->result() as $reh):
                                   ?>
                                     <a href="<?php echo base_url();?>index.php/customer/editexercise_habit/<?php echo $reh->id?>">
                                      <?php
                                    echo $reh->date."<br>";
                                    endforeach;
                            }else{
                                echo 'N/A';
                            }?>
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



<?php
/* if(isset($_POST["dataExport"])) { 
  $fileName = "webdamn_export_".date('Ymd') . ".xls";     
  header("Content-Type: application/vnd.ms-excel");
  header("Content-Disposition: attachment; filename=\"$fileName\"");  
  $showColoumn = false;
  if(!empty($row)) {
    foreach($row as $export) {
    if(!$showColoumn) {    
      echo implode("\t", array_keys($export)) . "\n";
      $showColoumn = true;
    }export
    echo implode("\t", array_values($export)) . "\n";
    }
  }
  exit;  
}
?>*/




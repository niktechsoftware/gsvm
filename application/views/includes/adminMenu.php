
<ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
              <a href="<?php echo base_url();?>index.php/login/" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
              
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i data-feather="briefcase"></i><span>Employee</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?php echo base_url();?>index.php/adminController/addemployee/">Add New Employee </a></li>
                <li><a class="nav-link" href="<?php echo base_url();?>index.php/adminController/employee_list/">Employee List </a></li>
                <li><a class="nav-link" href="<?php echo base_url();?>index.php/adminController/studyAssign/">Study Assign</a></li>
              </ul>
            </li>
            
             <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i data-feather="shopping-bag"></i><span>Study Plans</span></a>
              <ul class="dropdown-menu">
              <?php $sp = $this->db->get("study_plan");
              foreach($sp->result() as $r):?>
                <li><a href="<?php echo base_url();?>index.php/customer/<?php echo $r->page_name;?>/<?php echo $r->id;?>"><?php echo $r->plan_name;?> </a></li>
              <?php endforeach;
              ?>
              
              </ul>
            </li>
           <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i data-feather="user-check"></i><span>Patient</span></a>
              <ul class="dropdown-menu">
             
                <li><a href="<?php echo base_url();?>index.php/customer/addpatient">Add  Patient Information </a></li>
                
              <li><a href="<?php echo base_url();?>index.php/patient/patient_list">Search Edit & Delete </a></li>

           
              </ul>
            </li>
            
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i data-feather="command"></i><span>Reports</span></a>
              <ul class="dropdown-menu">
                 <?php $sp = $this->db->get("study_plan");
              foreach($sp->result() as $r):?>
                <li><a href="<?php echo base_url();?>index.php/daybookController/report/<?php echo $r->id;?>"><?php echo $r->plan_name;?> </a></li>
              <?php endforeach;
              ?>
              
              </ul>
            </li>
             <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i data-feather="mail"></i><span>Mobile SMS</span></a>
              <ul class="dropdown-menu">
               <li><a class="nav-link" href="<?php echo base_url();?>index.php/adminController/sms_setting">Sms Setting</a></li>
                <li><a class="nav-link" href="<?php echo base_url();?>index.php/adminController/sms/1">Single Patient</a></li>
                <li><a class="nav-link" href="<?php echo base_url();?>index.php/adminController/sms/2">All Patient</a></li>
         <li><a class="nav-link" href="<?php echo base_url();?>index.php/adminController/sms/3">Employee and Patient</a></li>
               
              </ul>
            </li>
            
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i data-feather="copy"></i><span>Website</span></a>
              <ul class="dropdown-menu">
               
                <li><a class="nav-link" href="<?php echo base_url();?>index.php/daybookController/daybook/2">Notice</a></li>
                <li><a class="nav-link" href="<?php echo base_url();?>index.php/daybookController/daybookTrans/2">Contact Us</a></li>
                 <li><a class="nav-link" href="<?php echo base_url();?>index.php/daybookController/daybookTrans/2">Gallery</a></li>
                <li><a class="nav-link" href="card.html">Marquee Content</a></li>
              </ul>
            </li>

          </ul>

<div class="main-content">
  <div class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
          <div class="card">
            <div class="card-header">
              <h4>Biochemical Parameters</h4>
            </div>
            
       
       
            <form method="post" action="<?php echo base_url()?>index.php/customer/updatebpi_proforma" enctype="multipart/Form-data" >
                 

              <div class="card-body">
                <div class="row" id="regForm">



                  <div class="col-md-12 col-lg-12 col-xs-12">
                    <div class="row">
                      <div class="col-md-12"  style="background-color: lightgray;">
                            <label style="font-size:20px"><b>BLOOD INVESTIGATIONS:-</label>
                          </div>
                        </div>
                      </div>
                    </br>
                    </br>
              <div class="col-md-12 col-lg-12 col-xs-12">
                    <div class="row">           

                    <table style="width:118%; margin-left:2%;">
  <tr>
    <th>S.NO.</th>
    <th>PARAMETER</th>
    <th>LEVEL</th>
    <th>UNIT</th>
  </tr>
  <tr>
    <td >1</td>
    <td >Hemoglobin</td>

    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->hemoglobin_level;?>" name="himo_level" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->hemoglobin_unit;?>" name="himo_unit" ></td>
  
  </tr>
  <tr>
    <td >2</td>
    <td >Total leucocyte Count (TLC)</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->tlc_level;?>" name="tlclevel" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->tlc_unit;?>" name="tlcunit" ></td>
 
  </tr>
   <tr>
    <td >3</td>
    <td >Differential leucocyte Count (DLC)<br/><br/><br/>
    </br> a)Neutrophils<br/>
    </br>  b)Lymphocyte<br/>
    </br>  c)Monocyte <br/>
    </br> d)Basophils <br/>
  </br> e)Eosinophils    <br/>                                     
  </td>
  
    <td>
        <input type="text" class="form-control" value="<?php echo $bpi->row()->dlc_n_level;?>" name="dlcnlevel" ><br/> 
        <input type="text" class="form-control" value="<?php echo $bpi->row()->dlc_l_level;?>" name="dlcllevel" ><br/> 
        <input type="text" class="form-control" value="<?php echo $bpi->row()->dlc_m_level;?>" name="dlcmlevel" ><br/> 
        <input type="text" class="form-control" value="<?php echo $bpi->row()->dlc_b_level;?>" name="dlcblevel" ><br/> 
        <input type="text" class="form-control" value="<?php echo $bpi->row()->dlc_e_level;?>" name="dlcelevel" ><br/> 
    </td>
    <td>
        <input type="text" class="form-control" value="<?php echo $bpi->row()->dlc_nunit;?>" name="dlcnunit" ><br/> 
        <input type="text" class="form-control" value="<?php echo $bpi->row()->dlc_l_unit;?>" name="dlclunit" ><br/> 
        <input type="text" class="form-control" value="<?php echo $bpi->row()->dlc_m_unit;?>" name="dlcmunit" ><br/> 
      <input type="text" class="form-control" value="<?php echo $bpi->row()->dlc_b_unit;?>" name="dlcbunit" ><br/> 
      <input type="text" class="form-control" value="<?php echo $bpi->row()->dlc_e_unit;?>" name="dlceunit" ><br/> 
  </td>
  
   
  </tr>
   <tr>
    <td >4</td>
    <td >Total Red Blood Cells</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->trbc_level;?>" name="trbclevel" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->trbc_unit;?>" name="trbcunit" ></td>
   
  </tr>
  <tr>
    <td >5</td>
    <td>Mean Corpuscular Volume (MCV)</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->mcv_level;?>" name="mcvlevel" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->mcv_unit;?>" name="mcvunit" ></td>
  
  </tr>
   <tr>
    <td >6</td>
    <td >Mean Corpuscular Hemoglobin(MCH)</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->mch_level;?>" name="mchleve" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->mch_unit;?>" name="mchunit" ></td>
   
  </tr>
   <tr>
    <td >7</td>
    <td >Mean Corpuscular Hemoglobin  Concentration (MCHC)</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->mchc_level;?>" name="mchclevel" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->mchc_unit;?>" name="mchcunit" ></td>

  </tr>
   <tr>
    <td >8</td>
    <td >Red Cell Distribution Width (RDW)</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->rdw_level;?>" name="rdwlevel" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->rdw_unit;?>" name="rdwunit" ></td>

  </tr>
   <tr>
    <td >9</td>
    <td >Erythrocyte Sedimentation Rate (ESR)</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->esr_level;?>" name="esrlevel" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->esr_unit;?>" name="esrunit" ></td>
    
  </tr>
   <tr>
    <td >10</td>
    <td >Packed Cell Volume</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->pvc_level;?>" name="pcvlevel" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->pvc_unit;?>" name="pcvunit" ></td>
   
  </tr>
   <tr>
    <td >11</td>
    <td >General Blood Picture</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->gbp_level;?>" name="gbplevel" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->gbp_unit;?>" name="gbpunit" ></td>
  
  </tr>

</table>
</div>
</div>
</div>
</br>
</br>

<div class="col-md-12 col-lg-12 col-xs-12">
                    <div class="row">
                      <div class="col-md-12"  style="background-color: lightgray;">
                            <label style="font-size:20px">BLOOD INVESTIGATIONS:-</label>
                          </div>
                        </div>
                      </div>
                    </br>

                        <div class="col-md-12 col-lg-12 col-xs-12">
                    <div class="row">
                          <table>
  <tr>
    <th>S.NO.</th>
    <th>PARAMETER</th>
    <th>LEVEL</th>
    <th>UNIT</th>
  </tr>

   <tr>
    <td >12</td>
    <td >Blood Suger Fasting</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->bsf_level;?>" name="bsflevel" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->bsf_unit;?>" name="bsfunit" ></td>
   
  </tr>
   <tr>
    <td >13</td>
    <td >Blood Suger Post Prandial</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->bspp_level;?>" name="bspplevel" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->bspp_unit;?>" name="bsppunit" ></td>
  
  </tr>
   <tr>
    <td >14</td>
    <td >Random Blood Suger</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->rbs_level;?>" name="rbslevel" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->rbs_unit;?>" name="rbsunit" ></td>
  
  </tr>
   <tr>
    <td >15</td>
    <td >OGTT</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->ogtt_level;?>" name="ogttlevel" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->ogtt_unit;?>" name="ogttunit" ></td>
   
  </tr>
   <tr>
    <td >16</td>
    <td >HbA1C</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->hba1c_level;?>" name="hba1clevel" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->hba1c_unit;?>" name="hba1cunit" ></td>
   
  </tr>
   <tr>
    <td >17</td>
    <td >S.Total Protine</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->s_tp_level;?>" name="stplevel" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->s_tp_unit;?>" name="stpunit" ></td>
 
  </tr>
   <tr>
    <td >18</td>
    <td >Micro Protine</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->microprotein_level;?>" name="mplevel" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->microprotein_unit;?>" name="mpunit" ></td>
   
  </tr>
   <tr>
    <td >19</td>
    <td >S.Albumin</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->s_albumin_level;?>" name="salevel" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->s_albumin_unit;?>" name="saunit" ></td>
  
  </tr>
   <tr>
    <td >20</td>
    <td >Microalbumin</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->microalbumin_level;?>" name="malevel" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->microalbumin_unit;?>" name="maunit" ></td>
   
  </tr>
 <tr>
  <td >21</td>
    <td >A:G Ratio</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->a_g_ratio_level;?>" name="agrlevel" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->a_g_ratio_unit;?>" name="agrunit" ></td>
  
  </tr>
  <tr>
    <td >22</td>
    <td >S.Bilirubin(Total)</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->s_b_t_level;?>" name="sbtlevel" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->s_b_t_unit;?>" name="sbtunit" ></td>
  
  </tr>
 <tr>
  <td >23</td>
    <td >S.Bilirubin(Direct)</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->s_b_d_level;?>" name="sbdlevel" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->s_b_d_unit;?>" name="sbdunit" ></td>
   
  </tr>
  <tr>
    <td >24</td>
    <td >S.Bilirubin(Indirect)
</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->s_b_ind_level;?>" name="sbinlevel" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->s_b_ind_unit;?>" name="sbinunit" ></td>

  </tr>
 <tr>
  <td >25</td>
    <td >SGOT
</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->sgot_level;?>" name="sgotleve" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->sgot_unit;?>" name="sgotunit" ></td>
   
  </tr>
  <tr>
    <td >26</td>
    <td >SGPT
</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->sgpt_level;?>" name="sgptlevel" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->sgpt_unit;?>" name="sgptunit" ></td>
  
  </tr>
 <tr>
  <td >27</td>
    <td >Alkaline Phosphatase (ALP)</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->alp_level;?>" name="alplevel" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->alp_unit;?>" name="alpunit" ></td>
  
  </tr>
  <tr>
    <td >28</td>
    <td >Lactate dehydrogenase (LDH)</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->ldh_level;?>" name="ldhlevel" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->ldh_unit;?>" name="ldhunit" ></td>
  
  </tr>
 <tr>
    <td >Na+
</td>
<td >29</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->na_level;?>" name="nalevel" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->na_unit;?>" name="naunit" ></td>
   
  </tr>
  <tr>
    <td >30</td>
    <td >K+
</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->k_leve;?>" name="klevel" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->k_unit;?>" name="kunit" ></td>
   
  </tr>
 <tr>
  <td >31</td>
    <td >S.Urea
</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->s_u_level;?>" name="sulevel" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->s_u_unit;?>" name="suunit" ></td>
 
  </tr>
  <tr>
    <td >32</td>
    <td >S.creatinine
</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->s_c_level;?>" name="sclevel" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->s_c_unit;?>" name="scunit" ></td>
   
  </tr>
 <tr>
  <td >33</td>
    <td >Urea Bun
</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->u_b_level;?>" name="ublevel" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->u_b_unit;?>" name="ubunit" ></td>
   
  </tr>
  <tr>
    <td >34</td>
    <td >Lipid Profile
</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->l_p_level;?>" name="lplevel" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->l_p_unit;?>" name="lpunit" ></td>
 
  </tr>
 <tr>
  <td >35</td>
    <td >Total Cholesterol
</td>
   
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->t_c_level;?>" name="tclevel" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->t_c_unit;?>" name="tcunit" ></td>
  </tr>
  <tr>
    <td >36</td>
    <td >Triglyceride</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->triglyceride_level;?>" name="tlevel" ></td>
  
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->triglyceride_unit;?>" name="tlevel" ></td>
  </tr>
 <tr>
  <td >37</td>
    <td >High Density Lipoprotein
</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->hdl_level;?>" name="hdllevel" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->hdl_unit;?>" name="hdlunit" ></td>
   
  </tr>


   <tr>
    <td >38</td>
    <td >Low Density Lipoprotein

</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->ldl_level;?>" name="ldllevel" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->ldl_unit;?>" name="ldlunit" ></td>
   
  </tr>
 <tr>
  <td >39</td>
    <td >Very Low Density Lipoprotein

</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->vldl_level?>" name="vldllevel" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->vldl_unit;?>" name="vldlunit" ></td>

  </tr>
  <tr>
    <td >40</td>
    <td >S.Amylase
</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->sa_level;?>" name="salevel" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->sa_unit;?>" name="saunit" ></td>
 
  </tr>
 <tr>
  <td >41</td>
    <td >S.Lipase

</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->sl_level;?>" name="sllevel" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->sl_unit;?>" name="slunit" ></td>
   
  </tr>
   <tr>
    <td >42</td>
    <td >Uric Acid (Serum)


</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->ua_level;?>" name="ualevel" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->ua_unit;?>" name="uaunit" ></td>
  
  </tr>

</table>
                    </div>
                  </div>
                </br>
                </br>
                  <div class="col-md-12 col-lg-12 col-xs-12">
                    <div class="row">
                      <div class="col-md-12" style="background-color: lightgray;">
                        <label style="font-size:20px">THYROID PROFILE:- </label>
                          </div>
                        </div>
                      </div>
                    </br>
                          <div class="col-md-12 col-lg-12 col-xs-12">
                    <div class="row">
                          <table>
  <tr>
    <th>S.NO.</th>
    <th>PARAMETER</th>
    <th>LEVEL</th>
    <th>UNIT</th>
  </tr>
  <tr>
    <td >43</td>
    <td >Triiodothyronine (T 3)</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->t3_level;?>" name="t3level" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->t3_unit;?>" name="t3unit" ></td>
    
  </tr>
   <tr>
    <td >44</td>
    <td >Thyroxine(T4)
</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->t4_level;?>" name="t4level" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->t4_unit;?>" name="t4unit" ></td>
  
  </tr>
  <tr>
    <td >45</td>
    <td >Thyroid Stimulating Hormones</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->tsh_level;?>" name="tshlevel" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->tsh_unit;?>" name="tshunit" ></td>
   
  </tr>
   <tr>
    <td >46</td>
    <td >Triiodothyronine, Free (F T 3)</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->ft3_level;?>" name="ft3level" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->ft3_unit;?>" name="ft3unit" ></td>
   
  </tr>
  <tr>
    <td >47</td>
    <td >Thyroxine, Free(FT4)</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->ft4_level;?>" name="ft4level" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->ft4_unit;?>" name="ft4unit" ></td>
  
  </tr>
   <tr>
    <td >48</td>
    <td >Calcium Total</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->ct_level;?>" name="ctlevel" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->ct_unit;?>" name="ctunit" ></td>
   
  </tr>
  <tr>
    <td >49</td>
    <td >Cyanocobalamin (Vitamin B12)</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->vb12_level;?>" name="b12level" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->vb12_unit;?>" name="b12unit" ></td>
   
  </tr>
   <tr>
    <td >50</td>
    <td >25- Hydroxy Vitamin D</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->hv_d_level;?>" name="hvdlevel" ></td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->hv_d_unit;?>" name="hvdunit" ></td>
    
  </tr>
  
  
</table>
</div>
</div>
</br>
</br>
<div class="col-md-12 col-lg-12 col-xs-12">
                    <div class="row">
                      <div class="col-md-12" style="background-color: lightgray;">
                        <label style="font-size:20px">URINE EXAMINATION :- </label>
                          </div>
                        </div>
                      </div>

                          </br>
                          
                          <div class="col-md-12 col-lg-12 col-xs-12">
                    <div class="row">
                          <table>
  <tr>
    <th>S.NO.</th>
    <th>PARAMETER</th>
    <th>LEVEL</th>
    <th>UNIT</th>
  </tr>
  <tr>
    <td >51</td>
    <td >URINE EXAMINATION(Routine) PHYSICAL :-  <br/>
    </br> COLOUR <br/> 
</br>    pH      <br/> 
</br>     Specific Gravity<br/> 
</td>
    <td>
        <input type="text" class="form-control" value="<?php echo $bpi->row()->ue_c_level;?>" name="ueclevel" ><br/>
        <input type="text" class="form-control" value="<?php echo $bpi->row()->ue_ph_level;?>" name="uephlevel" ><br/>
        <input type="text" class="form-control" value="<?php echo $bpi->row()->ue_sg_level;?>" name="uesglevel" ><br/>
    </td>
    <td>
        <input type="text" class="form-control" value="<?php echo $bpi->row()->ue_c_unit;?>" name="uecunit" ><br/>
        <input type="text" class="form-control" value="<?php echo $bpi->row()->ue_ph_unit;?>" name="uephunit" ><br/>
        <input type="text" class="form-control" value="<?php echo $bpi->row()->ue_sg_unit;?>" name="uesgunit" ><br/>
    </td>
   
  </tr>
   <tr>
    <td >52</td>
    <td >CHEMICAL:- <br/>
      </br>Suger Glucose <br/>           
        </br> Ketone     <br/>
        </br> Protine  <br/>
        </br>Urobilinogen  <br/>       
         </br> Blood
</td>
    <td>
        <input type="text" class="form-control" value="<?php echo $bpi->row()->c_sg_level;?>" name="csglevel" >
        <input type="text" class="form-control" value="<?php echo $bpi->row()->c_k_level;?>" name="cklevel" >
        <input type="text" class="form-control" value="<?php echo $bpi->row()->c_p_level;?>" name="cplevel" >
        <input type="text" class="form-control" value="<?php echo $bpi->row()->c_u_level;?>" name="culevel" >
        <input type="text" class="form-control" value="<?php echo $bpi->row()->c_b_level;?>" name="cblevel" >
    </td>
    <td>
        <input type="text" class="form-control" value="<?php echo $bpi->row()->c_sg_unit;?>" name="csgunit" >
        <input type="text" class="form-control" value="<?php echo $bpi->row()->c_k_unit;?>" name="ckunit" >
        <input type="text" class="form-control" value="<?php echo $bpi->row()->c_p_unit;?>" name="cpunit" >
        <input type="text" class="form-control" value="<?php echo $bpi->row()->c_u_unit;?>" name="cuunit" >
        <input type="text" class="form-control" value="<?php echo $bpi->row()->c_b_unit;?>" name="cbunit" >
    </td>

  </tr>
  <tr>
    <td >53</td>
    <td >MICROSCOPIC: - <br/><br/>
     </br> Leucocytes<br/>                                
      </br> RCBs <br/>
       </br>Casts <br/>            
        </br>Crystals   <br/>    
         </br> Epithelial Cells  <br/>           
         </br>Fungal Budding <br/>
        </br>Differential Leucocytes  Count<br/>
</td>
    <td>
        <input type="text" class="form-control" value="<?php echo $bpi->row()->m_l_level;?>" name="mllevel" ><br/>
        <input type="text" class="form-control" value="<?php echo $bpi->row()->m_rbc_level;?>" name="mrlevel" ><br/>
        <input type="text" class="form-control" value="" name="mclevel" ><br/>
        <input type="text" class="form-control" value="<?php echo $bpi->row()->m_crystals_level;?>" name="mcrlevel" ><br/>
        <input type="text" class="form-control" value="<?php echo $bpi->row()->m_ec_level;?>" name="meclevel" ><br/>
        <input type="text" class="form-control" value="<?php echo $bpi->row()->m_fb_level;?>" name="mfblevel" ><br/>
        <input type="text" class="form-control" value="<?php echo $bpi->row()->m_dlc_level;?>" name="mdlclevel" ><br/>
    </td>
    <td>
        <input type="text" class="form-control" value="<?php echo $bpi->row()->m_l_unit;?>" name="mlunit" ><br/>
        <input type="text" class="form-control" value="<?php echo $bpi->row()->m_rbc_unit;?>" name="mrunit" ><br/>
        <input type="text" class="form-control" value="" name="mcunit" ><br/>
        <input type="text" class="form-control" value="<?php echo $bpi->row()->m_crystals_unit;?>" name="mcrunit" ><br/>
        <input type="text" class="form-control" value="<?php echo $bpi->row()->m_ec_unit;?>" name="mecunit" ><br/>
        <input type="text" class="form-control" value="<?php echo $bpi->row()->m_fb_unit;?>" name="mfbunit" ><br/>
        <input type="text" class="form-control" value="<?php echo $bpi->row()->m_dlc_unit;?>" name="mdlcunit" ><br/>
    </td>

  </tr>
   <tr>
    <td >54</td>
    <td >VIRAL MARKER:-  
    </br>HIV
    </br> HBsAg  
    </br> HCV
</td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->vm_hiv_level;?>" name="vmhivlevel" >
  <input type="text" class="form-control" value="<?php echo $bpi->row()->vm_hbsag_level;?>" name="vmhblevel" >
  <input type="text" class="form-control" value="<?php echo $bpi->row()->vm_hcv_level;?>" name="vmhcvlevel" >
  </td>
    <td><input type="text" class="form-control" value="<?php echo $bpi->row()->vm_hiv_unit;?>" name="vmhivunit" >
  
    <input type="text" class="form-control" value="<?php echo $bpi->row()->vm_hbsag_unit;?>" name="vmhbunit" >
  
    <input type="text" class="form-control" value="<?php echo $bpi->row()->vm_hcv_unit;?>" name="vmhcvunit" ></td>
  
    
  </tr>
</table>
</div>
</div>

<div class="col-xs-12 col-md-12 col-lg-12">
                        <div class="form-group row">
                          <div class="col-md-2"></div>
                          <div class="col-md-7">
                            <div class="form-group" style="margin-left:110%;">
                              <button type="submit" class="btn btn-primary"
                                id="">
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

  
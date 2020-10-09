
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 20px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
th {
  background-color: #6A5ACD;
  color: white;
}
</style>
<div class="main-content">
	<div class="section">
		<div class="section-body">
			<div class="row">
				<div class="col-xs-12 col-md-12 col-lg-12">
					<div class="card">
						<div class="card-header">
							<h4>Biochemical Parameters</h4>

						</div>
						<form method="post"	action="<?php echo base_url()?>index.php/customer/bpi_submit" enctype="multipart/Form-data" >
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
    <td><input type="text" class="form-control" value="" name="himo_level" ></td>
    <td><input type="text" class="form-control" value="" name="himo_unit" ></td>
  
  </tr>
  <tr>
  	<td >2</td>
    <td >Total leucocyte Count (TLC)</td>
    <td><input type="text" class="form-control" value="" name="tlclevel" ></td>
    <td><input type="text" class="form-control" value="" name="tlcunit" ></td>
 
  </tr>
   <tr>
   	<td >3</td>
    <td >Differential leucocyte Count (DLC)<br/><br/>
    </br> a)Neutrophils<br/>
    </br>  b)Lymphocyte<br/>
    </br>  c)Monocyte <br/>
    </br> d)Basophils <br/>
	</br> e)Eosinophils <br/>                                         
	</td>
    <td>
	<input type="text" class="form-control" value="" name="dlcnlevel" ><br/>
	<input type="text" class="form-control" value="" name="dlcllevel" ><br/>
	<input type="text" class="form-control" value="" name="dlcmlevel" ><br/>
	<input type="text" class="form-control" value="" name="dlcblevel" ><br/>
	<input type="text" class="form-control" value="" name="dlcelevel" ><br/>
	</td>
    <td>
	<input type="text" class="form-control" value="" name="dlcnunit" ><br/>
    <input type="text" class="form-control" value="" name="dlclunit" ><br/>
    <input type="text" class="form-control" value="" name="dlcmunit" ><br/>
    <input type="text" class="form-control" value="" name="dlcbunit" ><br/>
    <input type="text" class="form-control" value="" name="dlceunit" ><br/>
	</td>
	
   
  </tr>
   <tr>
   	<td >4</td>
    <td >Total Red Blood Cells</td>
    <td><input type="text" class="form-control" value="" name="trbclevel" ></td>
    <td><input type="text" class="form-control" value="" name="trbcunit" ></td>
   
  </tr>
  <tr>
  	<td >5</td>
    <td>Mean Corpuscular Volume (MCV)</td>
    <td><input type="text" class="form-control" value="" name="mcvlevel" ></td>
    <td><input type="text" class="form-control" value="" name="mcvunit" ></td>
  
  </tr>
   <tr>
   	<td >6</td>
    <td >Mean Corpuscular Hemoglobin(MCH)</td>
    <td><input type="text" class="form-control" value="" name="mchleve" ></td>
    <td><input type="text" class="form-control" value="" name="mchunit" ></td>
   
  </tr>
   <tr>
   	<td >7</td>
    <td >Mean Corpuscular Hemoglobin  Concentration (MCHC)</td>
    <td><input type="text" class="form-control" value="" name="mchclevel" ></td>
    <td><input type="text" class="form-control" value="" name="mchcunit" ></td>

  </tr>
   <tr>
   	<td >8</td>
    <td >Red Cell Distribution Width (RDW)</td>
    <td><input type="text" class="form-control" value="" name="rdwlevel" ></td>
    <td><input type="text" class="form-control" value="" name="rdwunit" ></td>

  </tr>
   <tr>
   	<td >9</td>
    <td >Erythrocyte Sedimentation Rate (ESR)</td>
    <td><input type="text" class="form-control" value="" name="esrlevel" ></td>
    <td><input type="text" class="form-control" value="" name="esrunit" ></td>
    
  </tr>
   <tr>
   	<td >10</td>
    <td >Packed Cell Volume</td>
    <td><input type="text" class="form-control" value="" name="pcvlevel" ></td>
    <td><input type="text" class="form-control" value="" name="pcvunit" ></td>
   
  </tr>
   <tr>
   	<td >11</td>
    <td >General Blood Picture</td>
    <td><input type="text" class="form-control" value="" name="gbplevel" ></td>
    <td><input type="text" class="form-control" value="" name="gbpunit" ></td>
  
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
    <td><input type="text" class="form-control" value="" name="bsflevel" ></td>
    <td><input type="text" class="form-control" value="" name="bsfunit" ></td>
   
  </tr>
   <tr>
   	<td >13</td>
    <td >Blood Suger Post Prandial</td>
    <td><input type="text" class="form-control" value="" name="bspplevel" ></td>
    <td><input type="text" class="form-control" value="" name="bsppunit" ></td>
  
  </tr>
   <tr>
   	<td >14</td>
    <td >Random Blood Suger</td>
    <td><input type="text" class="form-control" value="" name="rbslevel" ></td>
    <td><input type="text" class="form-control" value="" name="rbsunit" ></td>
  
  </tr>
   <tr>
   	<td >15</td>
    <td >OGTT</td>
    <td><input type="text" class="form-control" value="" name="ogttlevel" ></td>
    <td><input type="text" class="form-control" value="" name="ogttunit" ></td>
   
  </tr>
   <tr>
   	<td >16</td>
    <td >HbA1C</td>
    <td><input type="text" class="form-control" value="" name="hba1clevel" ></td>
    <td><input type="text" class="form-control" value="" name="hba1cunit" ></td>
   
  </tr>
   <tr>
   	<td >17</td>
    <td >S.Total Protine</td>
    <td><input type="text" class="form-control" value="" name="stplevel" ></td>
    <td><input type="text" class="form-control" value="" name="stpunit" ></td>
 
  </tr>
   <tr>
   	<td >18</td>
    <td >Micro Protine</td>
    <td><input type="text" class="form-control" value="" name="mplevel" ></td>
    <td><input type="text" class="form-control" value="" name="mpunit" ></td>
   
  </tr>
   <tr>
   	<td >19</td>
    <td >S.Albumin</td>
    <td><input type="text" class="form-control" value="" name="salevel" ></td>
    <td><input type="text" class="form-control" value="" name="saunit" ></td>
  
  </tr>
   <tr>
   	<td >20</td>
    <td >Microalbumin</td>
    <td><input type="text" class="form-control" value="" name="malevel" ></td>
    <td><input type="text" class="form-control" value="" name="maunit" ></td>
   
  </tr>
 <tr>
 	<td >21</td>
    <td >A:G Ratio</td>
    <td><input type="text" class="form-control" value="" name="agrlevel" ></td>
    <td><input type="text" class="form-control" value="" name="agrunit" ></td>
  
  </tr>
  <tr>
  	<td >22</td>
    <td >S.Bilirubin(Total)</td>
    <td><input type="text" class="form-control" value="" name="sbtlevel" ></td>
    <td><input type="text" class="form-control" value="" name="sbtunit" ></td>
  
  </tr>
 <tr>
 	<td >23</td>
    <td >S.Bilirubin(Direct)</td>
    <td><input type="text" class="form-control" value="" name="sbdlevel" ></td>
    <td><input type="text" class="form-control" value="" name="sbdunit" ></td>
   
  </tr>
  <tr>
  	<td >24</td>
    <td >S.Bilirubin(Indirect)
</td>
    <td><input type="text" class="form-control" value="" name="sbinlevel" ></td>
    <td><input type="text" class="form-control" value="" name="sbinunit" ></td>

  </tr>
 <tr>
 	<td >25</td>
    <td >SGOT
</td>
    <td><input type="text" class="form-control" value="" name="sgotleve" ></td>
    <td><input type="text" class="form-control" value="" name="sgotunit" ></td>
   
  </tr>
  <tr>
  	<td >26</td>
    <td >SGPT
</td>
    <td><input type="text" class="form-control" value="" name="sgptlevel" ></td>
    <td><input type="text" class="form-control" value="" name="sgptunit" ></td>
  
  </tr>
 <tr>
 	<td >27</td>
    <td >Alkaline Phosphatase (ALP)</td>
    <td><input type="text" class="form-control" value="" name="alplevel" ></td>
    <td><input type="text" class="form-control" value="" name="alpunit" ></td>
  
  </tr>
  <tr>
  	<td >28</td>
    <td >Lactate dehydrogenase (LDH)</td>
    <td><input type="text" class="form-control" value="" name="ldhlevel" ></td>
    <td><input type="text" class="form-control" value="" name="ldhunit" ></td>
  
  </tr>
 <tr>
    <td >Na+
</td>
<td >29</td>
    <td><input type="text" class="form-control" value="" name="nalevel" ></td>
    <td><input type="text" class="form-control" value="" name="naunit" ></td>
   
  </tr>
  <tr>
  	<td >30</td>
    <td >K+
</td>
    <td><input type="text" class="form-control" value="" name="klevel" ></td>
    <td><input type="text" class="form-control" value="" name="kunit" ></td>
   
  </tr>
 <tr>
 	<td >31</td>
    <td >S.Urea
</td>
    <td><input type="text" class="form-control" value="" name="sulevel" ></td>
    <td><input type="text" class="form-control" value="" name="suunit" ></td>
 
  </tr>
  <tr>
  	<td >32</td>
    <td >S.creatinine
</td>
    <td><input type="text" class="form-control" value="" name="sclevel" ></td>
    <td><input type="text" class="form-control" value="" name="scunit" ></td>
   
  </tr>
 <tr>
 	<td >33</td>
    <td >Urea Bun
</td>
    <td><input type="text" class="form-control" value="" name="ublevel" ></td>
    <td><input type="text" class="form-control" value="" name="ubunit" ></td>
   
  </tr>
  <tr>
  	<td >34</td>
    <td >Lipid Profile
</td>
    <td><input type="text" class="form-control" value="" name="lplevel" ></td>
    <td><input type="text" class="form-control" value="" name="lpunit" ></td>
 
  </tr>
 <tr>
 	<td >35</td>
    <td >Total Cholesterol
</td>
   
    <td><input type="text" class="form-control" value="" name="tclevel" ></td>
    <td><input type="text" class="form-control" value="" name="tcunit" ></td>
  </tr>
  <tr>
  	<td >36</td>
    <td >Triglyceride</td>
    <td><input type="text" class="form-control" value="" name="tlevel" ></td>
  
    <td><input type="text" class="form-control" value="" name="tlevel" ></td>
  </tr>
 <tr>
 	<td >37</td>
    <td >High Density Lipoprotein
</td>
    <td><input type="text" class="form-control" value="" name="hdllevel" ></td>
    <td><input type="text" class="form-control" value="" name="hdlunit" ></td>
   
  </tr>


   <tr>
   	<td >38</td>
    <td >Low Density Lipoprotein

</td>
    <td><input type="text" class="form-control" value="" name="ldllevel" ></td>
    <td><input type="text" class="form-control" value="" name="ldlunit" ></td>
   
  </tr>
 <tr>
 	<td >39</td>
    <td >Very Low Density Lipoprotein

</td>
    <td><input type="text" class="form-control" value="" name="vldllevel" ></td>
    <td><input type="text" class="form-control" value="" name="vldlunit" ></td>

  </tr>
  <tr>
  	<td >40</td>
    <td >S.Amylase
</td>
    <td><input type="text" class="form-control" value="" name="salevel" ></td>
    <td><input type="text" class="form-control" value="" name="saunit" ></td>
 
  </tr>
 <tr>
 	<td >41</td>
    <td >S.Lipase

</td>
    <td><input type="text" class="form-control" value="" name="sllevel" ></td>
    <td><input type="text" class="form-control" value="" name="slunit" ></td>
   
  </tr>
   <tr>
   	<td >42</td>
    <td >Uric Acid (Serum)


</td>
    <td><input type="text" class="form-control" value="" name="ualevel" ></td>
    <td><input type="text" class="form-control" value="" name="uaunit" ></td>
  
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
    <td><input type="text" class="form-control" value="" name="t3level" ></td>
    <td><input type="text" class="form-control" value="" name="t3unit" ></td>
    
  </tr>
   <tr>
   	<td >44</td>
    <td >Thyroxine(T4)
</td>
    <td><input type="text" class="form-control" value="" name="t4level" ></td>
    <td><input type="text" class="form-control" value="" name="t4unit" ></td>
  
  </tr>
  <tr>
  	<td >45</td>
    <td >Thyroid Stimulating Hormones</td>
    <td><input type="text" class="form-control" value="" name="tshlevel" ></td>
    <td><input type="text" class="form-control" value="" name="tshunit" ></td>
   
  </tr>
   <tr>
   	<td >46</td>
    <td >Triiodothyronine, Free (F T 3)</td>
    <td><input type="text" class="form-control" value="" name="ft3level" ></td>
    <td><input type="text" class="form-control" value="" name="ft3unit" ></td>
   
  </tr>
  <tr>
  	<td >47</td>
    <td >Thyroxine, Free(FT4)</td>
    <td><input type="text" class="form-control" value="" name="ft4level" ></td>
    <td><input type="text" class="form-control" value="" name="ft4unit" ></td>
  
  </tr>
   <tr>
   	<td >48</td>
    <td >Calcium Total</td>
    <td><input type="text" class="form-control" value="" name="ctlevel" ></td>
    <td><input type="text" class="form-control" value="" name="ctunit" ></td>
   
  </tr>
  <tr>
  	<td >49</td>
    <td >Cyanocobalamin (Vitamin B12)</td>
    <td><input type="text" class="form-control" value="" name="b12level" ></td>
    <td><input type="text" class="form-control" value="" name="b12unit" ></td>
   
  </tr>
   <tr>
   	<td >50</td>
    <td >25- Hydroxy Vitamin D</td>
    <td><input type="text" class="form-control" value="" name="hvdlevel" ></td>
    <td><input type="text" class="form-control" value="" name="hvdunit" ></td>
    
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
    <td >URINE EXAMINATION(Routine) PHYSICAL :-<br/><br/> 
    </br> COLOUR <br/>
</br>    pH      <br/>
</br>     Specific Gravity<br/>
</td><br/>
    <td>
	    <input type="text" class="form-control" value="" name="ueclevel" ><br/>
		<input type="text" class="form-control" value="" name="uephlevel" ><br/>
		<input type="text" class="form-control" value="" name="uesglevel" ><br/>
    </td>
    <td>
	    <input type="text" class="form-control" value="" name="uecunit" ><br/>
        <input type="text" class="form-control" value="" name="uephunit" ><br/>
        <input type="text" class="form-control" value="" name="uesgunit" ><br/>
	</td>
   
  </tr>
   <tr>
   	<td >52</td>
    <td >CHEMICAL:- <br/><br/>
    	</br>Suger Glucose  <br/>          
    	  </br> Ketone    <br/> 
    	  </br> Protine  <br/>
    	  </br>Urobilinogen   <br/>      
    	   </br> Blood<br/>
</td>
    <td>
	<input type="text" class="form-control" value="" name="csglevel" ><br/>
	<input type="text" class="form-control" value="" name="cklevel" ><br/>
    <input type="text" class="form-control" value="" name="cplevel" ><br/>
	<input type="text" class="form-control" value="" name="culevel" ><br/>
	<input type="text" class="form-control" value="" name="cblevel" ><br/>
    </td>
    <td>
	<input type="text" class="form-control" value="" name="csgunit" ><br/>
    <input type="text" class="form-control" value="" name="ckunit" ><br/>
	<input type="text" class="form-control" value="" name="cpunit" ><br/>
    <input type="text" class="form-control" value="" name="cuunit" ><br/>
    <input type="text" class="form-control" value="" name="cbunit" ><br/>
	</td>
 
  </tr>
  <tr>
  	<td >53</td>
    <td >MICROSCOPIC: - <br/><br/>
     </br> Leucocytes   <br/>                             
      </br> RCBs <br/>
       </br>Casts     <br/>        
        </br>Crystals  <br/>     
         </br> Epithelial Cells   <br/>          
         </br>Fungal Budding <br/>
        </br>Differential Leucocytes  Count<br/>
</td>
    <td>
	<input type="text" class="form-control" value="" name="mllevel" ><br/>
    <input type="text" class="form-control" value="" name="mrlevel" ><br/>
	<input type="text" class="form-control" value="" name="mclevel" ><br/>
	<input type="text" class="form-control" value="" name="mcrlevel" ><br/>
	<input type="text" class="form-control" value="" name="meclevel" ><br/>
	<input type="text" class="form-control" value="" name="mfblevel" ><br/>
	<input type="text" class="form-control" value="" name="mdlclevel" ><br/>
    </td>

	<td>
    <input type="text" class="form-control" value="" name="mlunit" ><br/>
    <input type="text" class="form-control" value="" name="mrunit" ><br/>
    <input type="text" class="form-control" value="" name="mcunit" ><br/>
    <input type="text" class="form-control" value="" name="mcrunit" ><br/>
    <input type="text" class="form-control" value="" name="mecunit" ><br/>
    <input type="text" class="form-control" value="" name="mfbunit" ><br/>
    <input type="text" class="form-control" value="" name="mdlcunit" ><br/>
	</td>
	
  
  </tr>
   <tr>
   	<td >54</td>
    <td >VIRAL MARKER:-<br/><br/>  
    </br>HIV<br/>
    </br> HBsAg  <br/>
    </br> HCV<br/>
</td>
    <td><input type="text" class="form-control" value="" name="vmhivlevel" ><br/>
	<input type="text" class="form-control" value="" name="vmhblevel" ><br/>
	<input type="text" class="form-control" value="" name="vmhcvlevel" ><br/>
	</td>
    <td><input type="text" class="form-control" value="" name="vmhivunit" ><br/>
	
    <input type="text" class="form-control" value="" name="vmhbunit" ><br/>
	
    <input type="text" class="form-control" value="" name="vmhcvunit" ><br/></td>
	
    
  </tr>
</table>
</div>
</div>

<center><button type="submit"> Submit </button></center>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
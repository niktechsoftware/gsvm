
<style>
	div.a {
  font-size: large;
}
	div.b{
  font-size: large;
}

</style>
<div class="main-content">
	<div class="section">
		<div class="section-body">
			<div class="row">
				<div class="col-xs-12 col-md-12 col-lg-12">
					<div class="card">
						<div class="card-header">
							<h4>Oral_Cancer_Proforma</h4>
						</div>
						<form method="post"	action="<?php echo base_url()?>index.php/customer/oralcancer_proforma" enctype="multipart/Form-data" >

							<div class="card-body">
								<div class="row" id="regForm">
									
									<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-12" style="background-color: lightgray;">

														<label>1.FAMILY HISTORY:<span title="Required" style="color: red;">*</span></label>
													</div>
												</br>
											
												<div class="col-md-2">
														<div class="form-group">
														</div>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															MOTHER<input type="checkbox" class="form-control"
																value="mother<?php echo $ocp->row()->mother;?>" name="mother"
																style="height:20px; width:20px;" >
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>FATHER</lebel>
															<input type="checkbox" class="form-control"
																value="father<?php echo $ocp->row()->father;?>" name="father"
																style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															AUNT<input type="checkbox" class="form-control"
																value="aunt<?php echo $ocp->row()->aunt;?>" name="aunt"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                          <div class="col-md-2">
														<div class="form-group">
															SISTER<input type="checkbox" class="form-control"
																value="sister<?php echo $ocp->row()->sister;?>" name="sister"
																 style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
								<!---*******************************************************************-->
									<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
												
												<div class="col-md-2">
														<div class="form-group">
														</div>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															BROTHER<input type="checkbox" class="form-control"
																value="brother<?php echo $ocp->row()->brother;?>" name="brother"
																style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>COUSIN</lebel>
															<input type="checkbox" class="form-control"
																value="cousin<?php echo $ocp->row()->cousin;?>" name="cousin"
																style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															OTHERS(Specify)<input type="checkbox" class="form-control"
																value="other<?php echo $ocp->row()->others;?>" name="other"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                          
												</div>


											</div>
											<!--**********************************************************-->	
											<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-3">
														<label>EARLIER TREATMENT FOR ANY:<span title="Required" style="color: red;">*</span></label>
													</div>
												</br>
												
											 <div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $ocp->row()->treatment_for_any;?>" name="treatment"
																 style="height:20px; width:20px;" checked>
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="0<?php echo $ocp->row()->treatment_for_any;?>" name="treatment"
															 style="height:20px; width:20px;" checked>
																
														</div>
								
                                         </div>
                                         
												</div>


											</div>

	<!--**********************************************************-->	

	<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-6">
														<label>2.HAS ANY MEMBER OF YOUR FAMILY BEEN DIAGNOSED OF ORAL CANCER:<span title="Required" style="color: red;">*</span></label>
													</div>
												</br>
												
											 <div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="ocyes" name="oralcancer" onclick="myFunction()"
																  style="height:20px; width:20px;" checked>
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="ocno" name="oralcancer"
															  style="height:20px; width:20px;" checked>
																
														</div>
								
                                         </div>
                                         	 <div class="col-md-3">
														<div class="form-group">
															<textarea name="oraldetail" id="familyoralcancerdtl"  value="<?php echo $ocp->row()->family_oral_cancer;?>" placeholder="fill your details" class="form-control"></textarea>

														</div>
														</div>

                                         
												</div>


											</div>
												
											<script>
												//$("#eat").hide();
											$("#familyoralcancerdtl").hide();
											$(document).ready(function(){
											$("input[type='radio']").change(function(){
											if($(this).val()=="ocyes")
											{
											$("#familyoralcancerdtl").show();
											
											}
											else
											{
									
											//$("#eat").hide();
											$("#familyoralcancerdtl").hide();
											}
											});
											});
</script>

								
										<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-3">
														<label>3.MOUTH/TEETH DISEASE:<span title="Required" style="color: red;">*</span></label>
													</div>
												</br>
												
											 <div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="yes1" name="mouthdisease"
																  style="height:20px; width:20px;" checked>
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no1" name="mouthdisease"
															  style="height:20px; width:20px;" checked>
																
														</div>
								
                                         </div>
                                         	 <div class="col-md-3">
														<div class="form-group">
															<textarea name="mouthdiseasedetail" id="mouthdiseasedtl" placeholder="History with medical paper and type of clinic" class="form-control" value="<?php echo $ocp->row()->history_medical_paper;?>"></textarea>

														</div>
														</div>

                                         
												</div>


											</div>
												<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
											<script>
												//$("#eat").hide();
										    	$("#mouthdiseasedtl").hide();
											    $(document).ready(function(){
											    $("input[type='radio']").change(function(){
											    if($(this).val()=="yes1")
											    {
										    	$("#mouthdiseasedtl").show();
											
											    }
											    else
											{
									
											//$("#eat").hide();
											$("#mouthdiseasedtl").hide();
											}
											});
											});
</script>

									<!----******************************************************************************-->	



										<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-3">
														<label>4.RADIOTHERAPY REPORT:<span title="Required" style="color: red;">*</span></label>
													</div>
												</br>
												
											 <div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $ocp->row()->radiotherapy_report;?>" name="radiotherapy"
																  style="height:20px; width:20px;" checked>
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="0<?php echo $ocp->row()->radiotherapy_report;?>" name="radiotherapy"
															  style="height:20px; width:20px;" checked>
																
														</div>
								
                                         </div>
                                         
                                         
												</div>


											</div>
											

<!----******************************************************************************-->		

			
										<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-5">
														<label>4.CHEMOTHERAPY OR ANY OTHER ADJUNCTIVE TREATMENTS:<span title="Required" style="color: red;">*</span></label>
													</div>
												</br>
												
											 <div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $ocp->row()->chemotherapy;?>" name="chemotherapy"
																  style="height:20px; width:20px;" checked>
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="0<?php echo $ocp->row()->chemotherapy;?>" name="chemotherapy"
															  style="height:20px; width:20px;" checked>
																
														</div>
								
                                         </div>
                                         
                                         
												</div>


											</div>
											

<!----******************************************************************************-->	
	<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-4">
														<label>6.NAME OF THE DRUGS(Any Steroid Therapy):<span title="Required" style="color: red;">*</span></label>
													</div>
												</br>
												
                                         <div class="col-md-4">
														<div class="form-group">
															<input type="text" class="form-control"
																 name="drugs" value="<?php echo $ocp->row()->drugs_name;?>">
																
														</div>
								
                                         </div>
                                         
                                         
												</div>


											</div>
											

<!----******************************************************************************-->	
<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
											<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-3">
														<label>7.CT SCAN:<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<input type="text" class="form-control"
																 name="ct_scan" value="<?php echo $ocp->row()->ct_scan;?>">
														</div>
								
                                         </div>
												</div>


											</div>
												<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-3">
														<label>7.MRI:<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<input type="text" class="form-control" value="<?php echo $ocp->row()->mri;?>"
																 name="mri">
														</div>
								
                                         </div>
												</div>


											</div>
										</div>
									</div>

<!----******************************************************************************-->	

									<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
											<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-12 a" style="background-color:lightgray;">
														<label>BIOPSY REPORT:<span title="Required" style="color: red;">*</span></label>
													</div>
													
												</div>


											</div>
												<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-6">
														<label>ORAL SQUAMOUS CELL CARCINOMA:<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<input type="text" class="form-control"
																value="<?php echo $ocp->row()->oral_squamous_cell_carcinoma;?>" name="squamous_cell"
																>
														</div>
								
                                         </div>
												</div>


											</div>
										</div>
									</div>

<!----******************************************************************************-->	

								<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-12">
														<label>9. SITE OF LESION:<span title="Required" style="color: red;">*</span></label>
													</div>
												</br>
												</br>
												</br>
												<div class="col-md-2">
														<div class="form-group">
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<lebel>a).BUCCAL MUCOSA</lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $ocp->row()->buccal_mucosa;?>" name="buccal"
																 style="height:20px; width:20px;" checked>
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="0<?php echo $ocp->row()->buccal_mucosa;?>" name="buccal"
																  style="height:20px; width:20px;" checked>
																
														</div>
								
                                         </div>
                                         		</div>
                                         	
								</div>

<!-------------------------------------------*************************************************************---->		
<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-2">
														<div class="form-group">
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<lebel>b).BUCCAL MUCOSA AND VESTIBULE</lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $ocp->row()->buccal_mucosa_vestibule;?>" name="buccalvestibula"
																 style="height:20px; width:20px;" checked>
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="0<?php echo $ocp->row()->buccal_mucosa_vestibule;?>" name="buccalvestibula"
																  style="height:20px; width:20px;" checked>
																
														</div>
								
                                         </div>
                                         		</div>
                                         	
								</div>

<!-------------------------------------------*************************************************************---->		
<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-2">
														<div class="form-group">
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<lebel>c).ALVEOLAR MUCOSA</lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $ocp->row()->alveolar_mucosa;?>" name="alveolar"
																 style="height:20px; width:20px;" checked>
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="0<?php echo $ocp->row()->alveolar_mucosa;?>" name="alveolar"
																  style="height:20px; width:20px;" checked>
																
														</div>
								
                                         </div>
                                         		</div>
                                         	
								</div>

<!-------------------------------------------*************************************************************---->		

<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-2">
														<div class="form-group">
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<lebel>d).PALATE</lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $ocp->row()->palate;?>" name="palate"
																 style="height:20px; width:20px;" checked>
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="0<?php echo $ocp->row()->palate;?>" name="palate"
																  style="height:20px; width:20px;" checked>
																
														</div>
								
                                         </div>
                                         		</div>
                                         	
								</div>

<!-------------------------------------------*************************************************************---->	
<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-2">
														<div class="form-group">
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<lebel>e).VESTIBULE</lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $ocp->row()->vestibule;?>" name="vestibule"
																 style="height:20px; width:20px;" checked>
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="0<?php echo $ocp->row()->vestibule;?>" name="vestibule"
																  style="height:20px; width:20px;" checked>
																
														</div>
								
                                         </div>
                                         		</div>
                                         	
								</div>

<!-------------------------------------------*************************************************************---->		
<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-2">
														<div class="form-group">
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<lebel>f).TONGUE</lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $ocp->row()->tounge;?>" name="tounge"
																 style="height:20px; width:20px;" checked>
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="0<?php echo $ocp->row()->tounge;?>" name="tounge"
																  style="height:20px; width:20px;" checked>
																
														</div>
								
                                         </div>
                                         		</div>
                                         	
								</div>

<!-------------------------------------------*************************************************************---->		
<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-2">
														<div class="form-group">
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<lebel>g).LIP</lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $ocp->row()->lip;?>" name="lip"
																 style="height:20px; width:20px;" checked>
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="0<?php echo $ocp->row()->lip;?>" name="lip"
																  style="height:20px; width:20px;" checked>
																
														</div>
								
                                         </div>
                                         		</div>
                                         	
								</div>

<!-------------------------------------------*************************************************************---->	
	
							<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-12">
														<label>10. HISTOPATHOLOGICAL GRANDING:<span title="Required" style="color: red;">*</span></label>
													</div>
												</br>
												</br>
												</br>
												<div class="col-md-2">
														<div class="form-group">
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<lebel>WELL DIFFERENTIATED</lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $ocp->row()->well_differentiated;?>" name="well_differentiated"
																 style="height:20px; width:20px;" checked>
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="0<?php echo $ocp->row()->well_differentiated;?>" name="well_differentiated"
																  style="height:20px; width:20px;" checked>
																
														</div>
								
                                         </div>
                                         		</div>
                                         	
								</div>

<!-------------------------------------------*************************************************************---->		
<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-2">
														<div class="form-group">
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<lebel>MODERATELY DIFFERENTIATED</lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $ocp->row()->moderately_differentiated;?>" name="moderately"
																 style="height:20px; width:20px;" checked>
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="0<?php echo $ocp->row()->moderately_differentiated;?>" name="moderately"
																  style="height:20px; width:20px;" checked>
																
														</div>
								
                                         </div>
                                         		</div>
                                         	
								</div>

<!-------------------------------------------*************************************************************---->		
<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-2">
														<div class="form-group">
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<lebel>POORLY DIFFERENTIATED</lebel>
														</div>
													</div>
												
                                         <div class="col-md-1">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $ocp->row()->poorly_differentiated;?>" name="poorly"
																 style="height:20px; width:20px;" checked>
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="0<?php echo $ocp->row()->poorly_differentiated;?>" name="poorly"
																  style="height:20px; width:20px;" checked>
																
														</div>
								
                                         </div>
                                         		</div>
                                         	
								</div>

<!-------------------------------------------*************************************************************---->		

<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													
													<div class="col-md-3">
														<div class="form-group">
															<lebel>ANY ADDITION DETAILS</lebel>
														</div>
													</div>
												
                                         <div class="col-md-4">
														<div class="form-group">
															<input type="text" class="form-control" value="<?php echo $ocp->row()->addition_details;?>"
																placeholder="Write your addition details" name="additionaldetails"
																 >
																
														</div>
								
                                         </div>
                                        
                                         		</div>
                                         	
								</div>
<!-------------------------------------------*************************************************************---->	
<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-12">
														<label>11.CLINICAL STAGING TNM:<span title="Required" style="color: red;">*</span></label>
													</div>
												</br>
												
												<div class="col-md-2">
														<div class="form-group">
														</div>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															T1<input type="checkbox" class="form-control"
																value="t1<?php echo $ocp->row()->t1;?>" name="t1"
																style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>T2</lebel>
															<input type="checkbox" class="form-control"
																value="t2<?php echo $ocp->row()->t2;?>" name="t2"
																style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															T3<input type="checkbox" class="form-control"
																value="t3<?php echo $ocp->row()->t3;?>" name="t3"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                          <div class="col-md-2">
														<div class="form-group">
															T4<input type="checkbox" class="form-control"
																value="t4<?php echo $ocp->row()->t4;?>" name="t4"
																 style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
												</div>


											</div>
								<!---*******************************************************************-->
									<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
												
												<div class="col-md-2">
														<div class="form-group">
														</div>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															N1<input type="checkbox" class="form-control"
																value="n1<?php echo $ocp->row()->n1;?>" name="n1"
																style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>N2</lebel>
															<input type="checkbox" class="form-control"
																value="n2<?php echo $ocp->row()->n2;?>" name="n2"
																style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															N2a<input type="checkbox" class="form-control"
																value="n2a<?php echo $ocp->row()->n2a;?>" name="n2a"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                          <div class="col-md-2">
														<div class="form-group">
															N2b<input type="checkbox" class="form-control"
																value="n2b<?php echo $ocp->row()->n2b;?>" name="n2b"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                          
												</div>


											</div>
											<!---------------------------------------------------------****
												***************************************************************-->
													<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
												
												<div class="col-md-2">
														<div class="form-group">
														</div>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															N2c<input type="checkbox" class="form-control"
																value="n2c<?php echo $ocp->row()->n2c;?>" name="n2c"
																style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>N3</lebel>
															<input type="checkbox" class="form-control"
																value="n3<?php echo $ocp->row()->n3;?>" name="n3"
																style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															M0<input type="checkbox" class="form-control"
																value="m0<?php echo $ocp->row()->m0?>" name="m0"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                          <div class="col-md-2">
														<div class="form-group">
															M1<input type="checkbox" class="form-control"
																value="m1<?php echo $ocp->row()->m1;?>" name="m1"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                          
												</div>


											</div>
	
					
					<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
											<div class="col-xs-12 col-md-12 col-lg-12">
												<div class="form-group row">
													<div class="col-md-3"></div>
													<div class="col-md-9">
														<div class="form-group">
															<button type="submit" class="btn btn-primary"
																id="regisbtn" style="margin-left:70%;">
																<i class="far fa-edit">&nbsp;Update</i>
															</button>
														</div>
													</div>
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


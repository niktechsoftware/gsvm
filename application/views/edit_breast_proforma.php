
<div class="main-content">
	<div class="section">
		<div class="section-body">
			<div class="row">
				<div class="col-xs-12 col-md-12 col-lg-12">
					<div class="card">
						<div class="card-header">
							<h4>Edit Breast Cancer Proforma</h4>
							</div>
<form method="post"	action="<?php echo base_url()?>index.php/customer/breast_cancer_proforma" enctype="multipart/Form-data" >
					
									<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
											<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-5">
														<label>HOW MANY CHILDREN YOU HAVE?<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<input type="text" class="form-control"
																value="<?php echo $bcp->row()->many_children;?>" name="children">
														</div>
								
                                         </div>
												</div>


											</div>

											</div>
									</div>
										<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
											<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-5">
														<label>WHAT WAS YOUR AGE AT FIRST CHILD BIRTH?<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<input type="text" class="form-control"
																value="<?php echo $bcp->row()->your_ageat_first_child_birth;?>" name="age">
														</div>
								
                                         </div>
												</div>


											</div>

											</div>
									</div>
											<!--**********************************************************-->	
											<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-4">
														<label>DOES YOU HAVE BREAST FEED YOUR BABY<span title="Required" style="color: red;">*</span></label>
													</div>
											
												
											 <div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $bcp->row()->breast_feed_your_baby;?>" name="breastfeed"
																 style="height:20px; width:20px;" checked>
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="0<?php echo $bcp->row()->breast_feed_your_baby;?>" name="breastfeed"
															 style="height:20px; width:20px;" checked>
																
														</div>
								
                                         </div>
                                         
												</div>


											</div>

	<!--**********************************************************-->	
		<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-4">
														<label>DURATION OF BREAST BABY FEEDING<span title="Required" style="color: red;">*</span></label>
													</div>
												</br>
												
											 <div class="col-md-3">
														<div class="form-group">
															<input type="text" class="form-control" value="<?php echo $bcp->row()->duration_breast_feed_baby;?>"
																 name="duration">
																
														</div>
								
                                         </div>
                                         
                                         
												</div>


											</div>

	<!--**********************************************************-->	

							<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-3">
														<label>HISTORY OF ANY:<span title="Required" style="color: red;">*</span></label>
													</div>
												</br>
												
												
													<div class="col-md-2">
														<div class="form-group">
															1.Miscarriage<input type="checkbox" class="form-control"
																value="1<?php echo $bcp->row()->miscarriage;?>" name="miscarriage"
																style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>2.Abortion</lebel>
															<input type="checkbox" class="form-control"
																value="1<?php echo $bcp->row()->abortion;?>" name="abortion"
																style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															3.Ectopic Pregnancy<input type="checkbox" class="form-control"
																value="1<?php echo $bcp->row()->ectopic_pragnancy;?>" name="ectopic"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         
												</div>


											</div>
											<!--**********************************************************-->	
											<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-8">
														<label>HAVE YOU EVER VISITED A DOCTOR,CLINIC OR HOSPITAL BECAUSE OF DIFFICULTY IN BREAST?<span title="Required" style="color: red;">*</span></label>
													</div>
												</br>
												
											 <div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $bcp->row()->visited_doctor;?>" name="visited"
																 style="height:20px; width:20px;" checked>
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="0<?php echo $bcp->row()->visited_doctor;?>" name="visited"
															 style="height:20px; width:20px;" checked>
																
														</div>
								
                                         </div>
                                         
												</div>


											</div>
				<!--****************************************************************************************************************-->	
					<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-8">
														<label>DID YOU EVER TAKE ANY MEDICATION FOR TREATMENT OF BREAST CANCER OR ANY BREAST DISEASE?<span title="Required" style="color: red;">*</span></label>
													</div>
												</br>
												
											 <div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $bcp->row()->medication_treatment_breast_cancer;?>" name="disease"
																 style="height:20px; width:20px;" checked>
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="0<?php echo $bcp->row()->medication_treatment_breast_cancer;?>" name="disease"
															 style="height:20px; width:20px;" checked>
																
														</div>
								
                                         </div>
                                         
												</div>


											</div>
				<!--****************************************************************************************************************-->	
	
		<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-3">
														<label>NAME OF THE DRUGS:<span title="Required" style="color: red;">*</span></label>
													</div>
												</br>
												
											 <div class="col-md-4">
														<div class="form-group">
															<input type="text" class="form-control"
																 name="drugs" placeholder="Any Steroid Therapy" value="<?php echo $bcp->row()->drugs_name;?>">
																
														</div>
								
                                         </div>
                                         
                                         
												</div>


											</div>

	<!--**********************************************************-->	
	
				<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-6">
														<label>HAS ANY MEMBER OF YOUR FAMILY BEEN DIAGOSED OF BREAST CANCER?<span title="Required" style="color: red;">*</span></label>
													</div>
												</br>
												
											 <div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $bcp->row()->diagnosed_breast_cancer;?>" name="familycancer"
																 style="height:20px; width:20px;" checked>
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="0<?php echo $bcp->row()->diagnosed_breast_cancer;?>" name="familycancer"
															 style="height:20px; width:20px;" checked>
																
														</div>
								
                                         </div>
                                         
												</div>


											</div>
				<!--****************************************************************************************************************-->	
				<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-6">
														<label>HAS ANY MEMBER OF YOUR FAMILY BEEN DIAGOSED OF OVARIAN CANCER?<span title="Required" style="color: red;">*</span></label>
													</div>
												</br>
												
											 <div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="yes<?php echo $bcp->row()->diagnosed_ovarian_cancer;?>" name="ovariancancer"
																 style="height:20px; width:20px;" checked>
																
														</div>
								
                                         </div>
                                         <div class="col-md-1">
														<div class="form-group">
															NO<input type="radio" class="form-control"
																value="no<?php echo $bcp->row()->diagnosed_ovarian_cancer;?>" name="ovariancancer"
															 style="height:20px; width:20px;" checked>
																
														</div>
								
                                         </div>
                                         
												</div>


											</div>
				<!--****************************************************************************************************************-->	
							<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-4">
														<label>WHAT IS HER/HIS RELATIONSHIP TO YOU?<span title="Required" style="color: red;">*</span></label>
													</div>
												</br>
												
												
													<div class="col-md-2">
														<div class="form-group">
															1.MOTHER<input type="checkbox" class="form-control"
																value="mother<?php echo $bcp->row()->mother;?>" name="mother"
																style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>2.FATHER</lebel>
															<input type="checkbox" class="form-control"
																value="father<?php echo $bcp->row()->father;?>" name="father"
																style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															3.AUNT<input type="checkbox" class="form-control"
																value="aunt<?php echo $bcp->row()->aunt;?>" name="aunt"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         
												</div>


											</div>
		<!--******************************************************************************************************************************-->	
											<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
												<div class="col-md-4">
														<div class="form-group">
														</div>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															1.SISTER<input type="checkbox" class="form-control"
																value="sister<?php echo $bcp->row()->sister;?>" name="sister"
																style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>2.COUSIN</lebel>
															<input type="checkbox" class="form-control"
																value="cousin<?php echo $bcp->row()->cousin;?>" name="cousin"
																style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															3.OTHERS(specify)<input type="checkbox" class="form-control"
																value="other<?php echo $bcp->row()->other;?>" name="other"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         
												</div>


											</div>
				<!--*****************************************************************************************************************-->	
					<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-4">
														<label>YOUR BREAST EXAMINATION IS DOING USING:<span title="Required" style="color: red;">*</span></label>
													</div>
												</br>
												
												
													<div class="col-md-2">
														<div class="form-group">
															1.SELF<input type="radio" class="form-control"
																value="self<?php echo $bcp->row()->breast_examination;?>" name="examination"
																style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>2.CLINICIAN</lebel>
															<input type="radio" class="form-control"
																value="clinician<?php echo $bcp->row()->breast_examination;?>" name="examination"
																style="height:20px; width:20px;" checked>
																
														</div>
								
                                         </div>
                                        </div>


											</div>
		<!--******************************************************************************************************************************-->	
			<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
										
											<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-4">
														<label>AGE OF MENARCHE<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-8">
														<div class="form-group">
															<input type="text" class="form-control"
																value="<?php echo $bcp->row()->age_of_menarche;?>" name="ageofmenarche">
														</div>
								
                                         </div>
												</div>


											</div>
												<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-4">
														<label>AGE OF MENOPAUSAL<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-8">
														<div class="form-group">
															<input type="text" class="form-control"
																value="<?php echo $bcp->row()->age_of_menopausal;?>" name="ageofmenopausal">
														</div>
								
                                         </div>
												</div>

										</div>
									</div>
								</div>
						

		<!--******************************************************************************************************************************-->	

<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-4">
														<label>HISTORY OF ANY OTHER PRIMARY .............:<span title="Required" style="color: red;">*</span></label>
													</div>
												</br>
												
												
													<div class="col-md-2">
														<div class="form-group">
															YES<input type="radio" class="form-control"
																value="1<?php echo $bcp->row()->primary;?>" name="primary"
																style="height:20px; width:20px;" checked>
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>NO</lebel>
															<input type="radio" class="form-control"
																value="0<?php echo $bcp->row()->primary;?>" name="primary"
																style="height:20px; width:20px;" checked>
																
														</div>
								
                                         </div>
                                       
                                        </div>


											</div>
											
		<!--******************************************************************************************************************************-->	
	

<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-8">
														<label>MAMMAOGRAPHY / HISTOPATHOLOGICAL EXAMINATION REPORT: (FNAC / FNAB / True cut biopsy):<span title="Required" style="color: red;">*</span></label>
													</div>
												</br>
												
												<div class="col-md-9">
														<div class="form-group">
															<textarea class="form-control"
																value="<?php echo $bcp->row()->mammography;?>" name="mammography"></textarea>
														</div>
								
                                         </div>
														
                                        </div>


											</div>
<!--------------------------------------------------------------------------------------------------------------->
		

<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-8">
														<label>ChHEST X-RAY REPORT:<span title="Required" style="color: red;">*</span></label>
													</div>
												</br>
												
												<div class="col-md-9">
														<div class="form-group">
															<textarea class="form-control"
																value="<?php echo $bcp->row()->chest_xray;?>" name="chestreport"></textarea>
														</div>
								
                                         </div>
														
                                        </div>


											</div>

		<!--******************************************************************************************************************************-->	


		<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-8">
														<label>USG W/A:<span title="Required" style="color: red;">*</span></label>
													</div>
												</br>
												
												<div class="col-md-9">
														<div class="form-group">
															<textarea class="form-control"
																value="<?php echo $bcp->row()->usg;?>" name="usg"></textarea>
														</div>
								
                                         </div>
														
                                        </div>


											</div>

		<!--******************************************************************************************************************************-->	


		<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-8">
														<label>BONE SCAN:<span title="Required" style="color: red;">*</span></label>
													</div>
												</br>
												
												<div class="col-md-9">
														<div class="form-group">
															<textarea class="form-control"
																value="<?php echo $bcp->row()->bone_scan;?>" name="bonescan"
																></textarea>
														</div>
								
                                         </div>
														
                                        </div>


											</div>

		<!--******************************************************************************************************************************-->	

<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-8">
														<label>PET SCAN:<span title="Required" style="color: red;">*</span></label>
													</div>
												</br>
												
												<div class="col-md-9">
														<div class="form-group">
															<textarea class="form-control"
																value="<?php echo $bcp->row()->pet_scan;?>" name="petscan"
															></textarea>
														</div>
								
                                         </div>
														
                                        </div>


											</div>

		<!--******************************************************************************************************************************-->	

<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-8">
														<label>HISTOPATHOLOGICAL TYPE OF Ca breast:<span title="Required" style="color: red;">*</span></label>
													</div>
												</br>
												
												<div class="col-md-9">
														<div class="form-group">
															<textarea class="form-control"
																value="<?php echo $bcp->row()->histopathology_ca_breast;?>" name="cabreast"
															></textarea>
														</div>
								
                                         </div>
														
                                        </div>


											</div>

		<!--******************************************************************************************************************************-->	
<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-8">
														<label>ER,PR,HER REPORT STATUS:<span title="Required" style="color: red;">*</span></label>
													</div>
												</br>
												
												<div class="col-md-9">
														<div class="form-group">
															<textarea class="form-control"
																value="<?php echo $bcp->row()->er_report_status;?>" name="erreport"
															></textarea>
														</div>
								
                                         </div>
														
                                        </div>


											</div>

		<!--******************************************************************************************************************************-->	
<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-12">
														<label>FINAL DIAGNOSIS / HISTOLOGY WITH STAGE (TNM):<span title="Required" style="color: red;">*</span></label>
													</div>
												</br>
												
												<div class="col-md-2">
														<div class="form-group">
														</div>
													</div>
													<div class="col-md-2">
														<div class="form-group">
															T1<input type="checkbox" class="form-control"
																value="t1<?php echo $bcp->row()->t1;?>" name="t1"
																style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>T2</lebel>
															<input type="checkbox" class="form-control"
																value="t2<?php echo $bcp->row()->t2;?>" name="t2"
																style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															T3<input type="checkbox" class="form-control"
																value="t3<?php echo $bcp->row()->t3;?>" name="t3"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                          <div class="col-md-2">
														<div class="form-group">
															T4<input type="checkbox" class="form-control"
																value="t4<?php echo $bcp->row()->t4;?>" name="t4"
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
																value="n1<?php echo $bcp->row()->n1;?>" name="n1"
																style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>N2</lebel>
															<input type="checkbox" class="form-control"
																value="n2<?php echo $bcp->row()->n2;?>" name="n2"
																style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															N2a<input type="checkbox" class="form-control"
																value="n2a<?php echo $bcp->row()->n2a;?>" name="n2a"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                          <div class="col-md-2">
														<div class="form-group">
															N2b<input type="checkbox" class="form-control"
																value="n2b<?php echo $bcp->row()->n2b;?>" name="n2b"
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
																value="n2c<?php echo $bcp->row()->n2c;?>" name="n2c"
																style="height:20px; width:20px;">
																
														</div>
													</div>
														<div class="col-md-2">
														<div class="form-group">
															<lebel>N3</lebel>
															<input type="checkbox" class="form-control"
																value="n3<?php echo $bcp->row()->n3;?>" name="n3"
																style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                         <div class="col-md-2">
														<div class="form-group">
															M0<input type="checkbox" class="form-control"
																value="m<?php echo $bcp->row()->m0;?>" name="m"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                          <div class="col-md-2">
														<div class="form-group">
															M1<input type="checkbox" class="form-control"
																value="m1<?php echo $bcp->row()->m1;?>" name="m1"
															  style="height:20px; width:20px;">
																
														</div>
								
                                         </div>
                                          
												</div>


											</div>
<!--******************************************************************************************************************************-->	
<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-8">
														<label>HISTORY OF CHEMOTHERAPY / RADIOTHERAPY /HORMONAL THERAPY:<span title="Required" style="color: red;">*</span></label>
													</div>
												</br>
												
												<div class="col-md-9">
														<div class="form-group">
															<textarea class="form-control"
																value="<?php echo $bcp->row()->history_of_chemotherapy;?>" name="hormonal"
															></textarea>
														</div>
								
                                         </div>
														
                                        </div>


											</div>

		<!--******************************************************************************************************************************-->	

				<div class="col-xs-12 col-md-12 col-lg-12">

												<div class="form-group row">
													<div class="col-md-8">
														<label>POST OPERATIVE SPECIMEN:<span title="Required" style="color: red;">*</span></label>
													</div>
												</br>
												
												<div class="col-md-9">
														<div class="form-group">
															<textarea class="form-control"
																value="<?php echo $bcp->row()->post_operative_specimen;?>" name="specimen"
															></textarea>
														</div>
								
                                         </div>
														
                                        </div>


											</div>

		<!--******************************************************************************************************************************-->	

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

	
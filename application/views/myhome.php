<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">    
    <title>sainath</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/fontawesome-all.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/font-awesome.min.css');?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Navigation-Clean.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css');?>">


	

	<style>
	.results tr[visible='false'], .no-result {
  			display: none;
		}
		.results tr[visible='true'] {
  display: table-row;
}

.counter {
  padding: 8px;
  color: #ccc;
}

.counter {
  padding: 8px;
  color: #ccc;
}

.results tr[visible='false'], .no-result {
  display: none;
}




		.back{
			margin-top:5%;
			margin-bottom:5%;
			background-color: #00BFFF;
			border:none;
		}

		#user{
			margin-top:5%;
			margin-left:2%;
			margin-right:2%;
		}

		.modal-dialog{
			max-width:750px;
		}

		.row{
			display:flex;
			flex-wrap : wrap;
			justify-content : center;
		}
		
	</style>
</head>

<body>
	<!-- Navbar -->
    <?php include_once 'nav.php';?>

	<?php
	if(isset($_GET['success'])){
	?>
		<div class="alert alert-success alert-dismissible">
  			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  			<strong>User !</strong> Inserted Successfully
		</div>
	<?php	
	}
	?>
	<!-- Body -->
    <div class="container" style="margin-top:62px;" >
		<!-- Row1 -->
        <div class="row">

			<!-- Col 1 -->
            <div class="col-md-3">
                <div onclick="openform()" class="text-monospace text-uppercase text-center border rounded border-success shadow" data-bs-hover-animate="bounce" style="padding: 50px;">
                    <p style="cursor:pointer;" >Add Donor</p>
                </div>
            </div>

			<!-- Col 2 -->
            <div class="col-md-3">
                <div onclick="openRecipientForm()" class="text-monospace text-uppercase text-center border rounded border-success shadow" data-bs-hover-animate="bounce" style="padding: 50px;">
                    <p style="cursor:pointer;" >Add Recipient</p>
                </div>
            </div>

			<!-- Col 3 -->	
            <?php include_once "serology/serology.php"; ?>

			<!-- Col 4 -->
			<?php include_once "bill/bill.php"; ?>

			<!-- Col 5 -->
			<?php include_once "bagIssue/Bag_issue.php";?>

			<!-- Col 6 -->
			<?php include_once "bagReturn/Bag_return.php";?>

			<!-- Col 7 -->
			<?php include_once "Pat_samp_rej/rejection.php";?>

			<!-- Col 8 -->
			<?php include_once "History/history.php";?>

			<!-- Col 9 -->
			<?php include_once "Reports/reports.php";?>

			<!-- Col 10 -->
			<?php include_once "Loan/loan.php";?>

			<!-- Col 11 -->
			<?php include_once "Admin/admin.php";?>
			

            <div id="userform" class="modal fade" role="dialog">
                <div class="modal-dialog" style="max-width:750px;">

				
                <!-- Modal content-->
        		<div class="modal-content">

					<!-- Modal Header -->
          			<div class="modal-header">
            			<h4 class="modal-title">Add Donor</h4>
            			<button type="button" class="close" data-dismiss="modal">&times;</button>
          			</div>

          			<div class="modal-body">
            		<!-- Form code goes here -->
            		<div>
						<ul class="nav nav-tabs">
							<li class="nav-item"><a role="tab" data-toggle="tab" href="#tab-1" class="nav-link active">Add Donor</a></li>
							<li class="nav-item"><a role="tab" data-toggle="tab" href="#tab-2" class="nav-link">Existing User</a></li>
							
						</ul>

						<!-- Add Donor Form -->
						<div class="tab-content">

							<!-- New Donor -->
							<div role="tabpanel" class="tab-pane active" id="tab-1">
								
								<!-- Form for new Donor -->
								<form style="padding-right: 0px;margin-right: 0px;margin-left: 0px;" method="post" action="adduser">

								<!-- User Form -->
								<div id="user-form" style="display:block;">
									<div id="user">    
									<div class="form-group" style="margin-right: 0px;"><label>Name : <br>नाम :</label></div>
										<div class="form-row">
										<div class="form-group col-md-1.5">
      										<select class="form-control" id="sel1">
        										<option id="mr">Mr.</option>
        										<option id="mrs">Mrs.</option>
        										<option id="ms">Ms.</option>
      										</select>
    									</div> 
										<div class="form-group col-md-3.5"><input type="text" class="form-control" id="fname" name="fname" placeholder="FirstName" required/></div><div id='ff_name';></div>
										<div class="form-group col-md-3"><input type="text" class="form-control" id="mname" name="mname" placeholder="MiddleName"/></div>
										<div class="form-group col-md-3.5"><input type="text" class="form-control" id="lname" name="lname" placeholder="LastName" required/></div><div id='fl_name';></div>
									</div>
									<div class="form-group"><label>Email : <br>ईमेल :</label><input type="email" class="form-control" id="email" name="email"/></div><div id='f_email'></div>
									<div class="form-group"><label>Address : <br>पता :</label><input type="text" class="form-control" id="addr" name="address" /></div><div id='f_addr'></div>
									<div class="form-group"><label>Pincode : <br> पिन कोड :</label><input type="text" class="form-control" id="pin" name="pin" /></div><div id='f_pincode'></div>
									<div class="form-group"><label>Age : <br> आयु</label><input type="text" class="form-control" id="age" name="age"/></div><div id='f_age'></div>
									<div class="form-group"><label>Phone Number : <br>फ़ोन नंबर :</label><input type="text" class="form-control" id="phno" name="phno"/></div><div id='f_phno'></div>
									<div class="form-group"><label>Blood Group : <br> रक्त वर्ग :</label>
										<div class="form-check"><input type="radio" class="form-check-control" name="bgrp" value="A+"/><label class="form-check-label" for="formCheck-1" >A+</label></div>
										<div class="form-check"><input type="radio" class="form-check-control" name="bgrp" value="A-"/><label class="form-check-label" for="formCheck-1" >A-</label></div>
										<div class="form-check"><input type="radio" class="form-check-control" name="bgrp" value="B+"/><label class="form-check-label" for="formCheck-1">B+</label></div>
										<div class="form-check"><input type="radio" class="form-check-control" name="bgrp" value="B-"/><label class="form-check-label" for="formCheck-1" >B-</label></div>
										<div class="form-check"><input type="radio" class="form-check-control" name="bgrp" value="O+"/><label class="form-check-label" for="formCheck-1" >O+</label></div>
										<div class="form-check"><input type="radio" class="form-check-control" name="bgrp" value="O-"/><label class="form-check-label" for="formCheck-1" >O-</label></div>
										<div class="form-check"><input type="radio" class="form-check-control" name="bgrp" value="AB+"/><label class="form-check-label" for="formCheck-1" >AB+</label></div>
										<div class="form-check"><input type="radio" class="form-check-control" name="bgrp" value="AB-"/><label class="form-check-label" for="formCheck-1" >AB-</label></div>
									</div>
									<div class="form-group"><label>Sex : <br> लिंग :</label>
										<div class="form-check"><input type="radio" class="form-check-input"  name="sex" value="Male"/><label class="form-check-label" for="formCheck-1">Male <br> पुरुष </label></div>
										<div class="form-check"><input type="radio" class="form-check-input"  name="sex" value="Female"/><label class="form-check-label" for="formCheck-1">Female <br> महिला</label></div>
										<div class="form-check"><input type="radio" class="form-check-input"  name="sex" value="Other"/><label class="form-check-label" for="formCheck-1" >Other <br> अन्य</label></div>
									</div>
									<div class="form-group"><label>Date of Birth : <br> जन्म तिथि :</label><input type="date" class="form-control" id="dob" name="dob"/></div><div id='f_dob'></div>
									<div class="form-group"><label>Occupation : <br> व्यवसाय :</label><input type="text" class="form-control" id="occ" name="occ"/></div><div id='f_occ'></div>
									<button class="btn btn-primary btn btn-success" type="button" onclick="showQuestions()">Next</button>
									<button class="btn btn-primary btn btn-danger" type="reset">Reset</button>
									</div>
								</div>

								<!-- Questions -->
								<div id="que" style="display:none;">
								<button class="btn btn-primary btn btn-danger back" type="button" onclick="backtouser()"><i class="fa fa-arrow-left"></i> Back</button>
									<h4><div id="user-name"></div>  Please answer the following questions : <br> कृप्या निम्नलिखित प्रश्नों का उत्तर दें :<br><br></h4>
									
									<div class="container">

										<div>
											<div class="form-group"><label style="margin-right: 39px;">1. Are you feeling well today ?<br>   क्या आप आज ठीक महसूस कर रहे हैं?</label>
												<div class="form-check"><input type="radio" class="form-check-input" value="1" name="q1" checked /><label class="form-check-label" for="formCheck-1">Yes</label></div>
												<div class="form-check"><input type="radio" class="form-check-input" value="0" name="q1" /><label class="form-check-label" for="formCheck-2">No</label></div>
											</div>

											<div class="form-group"><label style="margin-right: 39px;">2. Have you eaten anything in the last 4 hours ?<br>क्या आपने पिछले 4 घंटों में कुछ खाया है?</label>
												<div class="form-check"><input type="radio" class="form-check-input" value="1" name="q2" checked/><label class="form-check-label" for="formCheck-2">Yes</label></div>
												<div class="form-check"><input type="radio" class="form-check-input" value="0" name="q2"/><label class="form-check-label" for="formCheck-2">No</label></div>
											</div>

											<div class="form-group"><label style="margin-right: 39px;">3. Have you slept well last night ?<br> क्या आप कल रात अच्छी तरह सोए हैं?</label>
												<div class="form-check"><input type="radio" class="form-check-input" value="1" name="q3" checked /><label class="form-check-label" for="formCheck-2">Yes</label></div>
												<div class="form-check"><input type="radio" class="form-check-input" value="0" name="q3"/><label class="form-check-label" for="formCheck-2">No</label></div>
											</div>

											<div class="form-group"><label style="margin-right: 39px;">4. Have you taken Aspirin in the last 3 years ?<br>क्या आपने पिछले 3 वर्षों में एस्पिरिन लिया है?</label>
												<div class="form-check"><input type="radio" class="form-check-input" value="1" name="q4" checked/><label class="form-check-label" for="formCheck-2">Yes</label></div>
												<div class="form-check"><input type="radio" class="form-check-input" value="0" name="q4"/><label class="form-check-label" for="formCheck-2">No</label></div>
											</div>

											<div class="form-group"><label style="margin-right: 39px;">5. Are you taking any medicine at present ?<br>क्या आप वर्तमान में कोई दवा ले रहे हैं?</label>
												<div class="form-check"><input type="radio" class="form-check-input" value="1" name="q5" checked/><label class="form-check-label" for="formCheck-2">Yes</label></div>
												<div class="form-check"><input class="form-check-input" type="radio" value="0" name="q5"/><label class="form-check-label" for="formCheck-2">No</label></div>
											</div>

											<div class="form-group"><label style="margin-right: 39px;">6. Have you donate the blood in the last  3 months ?<br>क्या आपने पिछले 3 महीनों में रक्तदान किया है?</label>
												<div class="form-check"><input type="radio" class="form-check-input" value="1" name="q6" checked /><label class="form-check-label" for="formCheck-1">Yes</label></div>
												<div class="form-check"><input type="radio" class="form-check-input" value="0" name="q6" /><label class="form-check-label" for="formCheck-2">No</label></div>
											</div>

											<div class="form-group"><label style="margin-right: 39px;">7. Did you hve any discomfort during previous blood donation ?<br> क्या आपको पिछले रक्तदान के दौरान कोई असुविधा हुई थी?</label>
												<div class="form-check"><input type="radio" class="form-check-input" value="1" name="q7" checked/><label class="form-check-label" for="formCheck-1">Yes</label></div>
												<div class="form-check"><input type="radio" class="form-check-input" value="0" name="q7"/><label class="form-check-label" for="formCheck-2">No</label></div>
											</div>

											<div class="form-group"><label style="margin-right: 39px;">8. Have you had Jaundice in last 1 year ? <br>क्या आपको पिछले 1 साल में पीलिया हुआ है?</label>
												<div class="form-check"><input type="radio" class="form-check-input" value="1" name="q8" checked/><label class="form-check-label" for="formCheck-1">Yes</label></div>
												<div class="form-check"><input type="radio" class="form-check-input" value="0" name="q8"/><label class="form-check-label" for="formCheck-2">No</label></div>
											</div>

											<div class="form-group"><label style="margin-right: 39px;">9. Has your blood ever tested positive for Hepatitis-B ?<br>क्या आपका रक्त कभी हेपेटाइटिस-बी के लिए सकारात्मक हुआ है?</label>
													<div class="form-check"><input type="radio" class="form-check-input" value="1" name="q9" checked/><label class="form-check-label" for="formCheck-1">Yes</label></div>
													<div class="form-check"><input type="radio" class="form-check-input" value="0" name="q9"/><label class="form-check-label" for="formCheck-2">No</label></div>
											</div>

											<div class="form-group"><label style="mar	gin-right: 39px;">10. Has any of your family member suffered from Jaundice in the last 6 months ? <br> क्या पिछले 6 महीनों में आपके परिवार का कोई सदस्य पीलिया से पीड़ित हुआ है?</label>
												<div class="form-check"><input type="radio" class="form-check-input" value="1" name="q10" checked/><label class="form-check-label" for="formCheck-1">Yes</label></div>
												<div class="form-check"><input type="radio" class="form-check-input" value="0" name="q10"/><label class="form-check-label" for="formCheck-2">No</label></div>
											</div>

											<div class="form-group"><label style="margin-right: 39px;">11. Have you had Malaria or taken antimalarial drugs in the last 3 months ?<br>क्या आपको पिछले 3 महीनों में मलेरिया हुआ है या एंटीमैरलियल ड्रग्स लिया गया है?</label>
												<div class="form-check"><input type="radio" class="form-check-input" value="1" name="q11" checked/><label class="form-check-label" for="formCheck-1">Yes</label></div>
												<div class="form-check"><input type="radio" class="form-check-input" value="0" name="q11"/><label class="form-check-label" for="formCheck-2">No</label></div>
											</div>

											<div class="form-group"><label style="margin-right: 39px;">12. Have you any reason to believe that you have been infected by the virus that causes AIDS ? <br>क्या आपके पास यह विश्वास करने का कोई कारण है कि आप उस वायरस से संक्रमित हैं जो एड्स का कारण बनता है?</label>
												<div class="form-check"><input type="radio" class="form-check-input" value="1" name="q12" checked/><label class="form-check-label" for="formCheck-1">Yes</label></div>
												<div class="form-check"><input type="radio" class="form-check-input" value="0" name="q12"/><label class="form-check-label" for="formCheck-2">No</label></div>
											</div>

											<div class="form-group"><label style="margin-right: 39px;">13. In the last 6 months have you had any of the following symptoms and signs ?<br> पिछले 6 महीनों में आपके पास निम्नलिखित लक्षणों और संकेतों में से कोई भी है?</label>
												<div class="form-check"><input type="checkbox" class="form-check-input" value="1" name="q13" checked/><label class="form-check-label" for="formCheck-1">Night Sweats<br>रात को पसीना</label></div>
												<div class="form-check"><input type="checkbox" class="form-check-input" value="0" name="q13"/><label class="form-check-label" for="formCheck-2">Diarrhoea<br>दस्त</label></div>
												<div class="form-check"><input type="checkbox" class="form-check-input" value="0" name="q13"/><label class="form-check-label" for="formCheck-2">Unexplained Weightloss<br>अकारण वजन घटना</label></div>
												<div class="form-check"><input type="checkbox" class="form-check-input" value="0" name="q13"/><label class="form-check-label" for="formCheck-2">Swollen Glands<br>सुजे हुए ग्रंथियां</label></div>
												<div class="form-check"><input type="checkbox" class="form-check-input" value="0" name="q13"/><label class="form-check-label" for="formCheck-2">Persistent fever<br>लगातार बुखार</label></div>
												<div class="form-check"><input type="checkbox" class="form-check-input" value="1" name="q14"checked/><label class="form-check-label" for="formCheck-1">Typhoid<br>आंत्र ज्वर</label></div>
												<div class="form-check"><input type="checkbox" class="form-check-input" value="0" name="q14"/><label class="form-check-label" for="formCheck-2">Measles<br>खसरा</label></div>
												<div class="form-check"><input type="checkbox" class="form-check-input" value="0" name="q14"/><label class="form-check-label" for="formCheck-2">Chicken Pox<br>चेचक</label></div>
												<div class="form-check"><input type="checkbox" class="form-check-input" value="0" name="q14"/><label class="form-check-label" for="formCheck-2">Mumps<br>गलसुआ</label></div>
											</div>

											<div class="form-group"><label style="margin-right: 39px;">14. Have you been immunised or vaccinated in the last one month ?<br>क्या आपको पिछले एक महीने में टीकाकरण किया गया है?
											</label>
												<div class="form-check"><input type="checkbox" class="form-check-input" value="1" name="q14"checked/><label class="form-check-label" for="formCheck-1">Cholera<br>हैज़ा</label></div>
												<div class="form-check"><input type="checkbox" class="form-check-input" value="0" name="q14"/><label class="form-check-label" for="formCheck-2">Typhoid<br>आंत्र ज्वर</label></div>
												<div class="form-check"><input type="checkbox" class="form-check-input" value="0" name="q14"/><label class="form-check-label" for="formCheck-2">Diphtheria<br>डिप्थीरिया</label></div>
												<div class="form-check"><input type="checkbox" class="form-check-input" value="0" name="q14"/><label class="form-check-label" for="formCheck-2">Whooping cough<br>काली-खाँसी</label></div>
												<div class="form-check"><input type="checkbox" class="form-check-input" value="0" name="q14"/><label class="form-check-label" for="formCheck-2">T.T<br>टेटनस का टीका</label></div>
												<div class="form-check"><input type="checkbox" class="form-check-input" value="0" name="q14"/><label class="form-check-label" for="formCheck-2">Hepatitis<br>हेपेटाइटिस</label></div>
											</div>

											<div class="form-group"><label style="margin-right: 39px;">15. Have you received any blood or blood components in the last 1 year ?<br>क्या आपने पिछले 1 साल में रक्त या रक्त घटक प्राप्त किया है?</label>
												<div class="form-check"><input type="radio" class="form-check-input" id="formCheck-1" value="1" name="q15" checked/><label class="form-check-label" for="formCheck-1">Yes</label></div>
												<div class="form-check"><input type="radio" class="form-check-input" id="formCheck-2" value="0" name="q15"/><label class="form-check-label" for="formCheck-2">No</label></div>
											</div>

											<div class="form-group"><label style="margin-right: 39px;">16. Have you had a tattoo acupuncture or ear piercing in the last 6 months ?<br>क्या आपने पिछले 6 महीनों में टैटू एक्यूपंक्चर या कान छिदवाया है?  </label>
												<div class="form-check"><input type="radio" class="form-check-input" id="formCheck-1" value="1" name="q16" checked/><label class="form-check-label" for="formCheck-1">Yes</label></div>
												<div class="form-check"><input type="radio" class="form-check-input" id="formCheck-2" value="0" name="q16"/><label class="form-check-label" for="formCheck-2">No</label></div>
											</div>
											
											<div class="form-group"><label style="margin-right: 39px;">17. H/O alcohol consumption in the last 24 hours ?<br>पिछले 24 घंटों में एच / ओ शराब की खपत?  </label>
												<div class="form-check"><input type="radio" class="form-check-input" value="1" name="q17" checked/><label class="form-check-label" for="formCheck-1">Yes</label></div>
												<div class="form-check"><input type="radio" class="form-check-input" value="0" name="q17"/><label class="form-check-label" for="formCheck-2">No</label></div>
											</div>

											<div class="form-group"><label style="margin-right: 39px;">18. H/O dog bites &amp; history of taking Anti Rabies vaccination within a year ?<br>एच / ओ कुत्ता एक साल के भीतर एंटी रैबीज टीकाकरण लेने का इतिहास काटता है?  </label>
												<div class="form-check"><input type="radio" class="form-check-input" value="1" name="q18" checked/><label class="form-check-label" for="formCheck-1">Yes</label></div>
												<div class="form-check"><input type="radio" class="form-check-input" value="0" name="q18"/><label class="form-check-label" for="formCheck-2">No</label></div>
											</div>

											<div class="form-group"><label style="margin-right: 39px;">19. Have you had any of the following ?<br>क्या आपके पास निम्न में से कोई है?</label>
												<div class="form-check"><input type="checkbox" class="form-check-input" id="formCheck-1" value="1" name="q19" checked/><label class="form-check-label" for="formCheck-1">Allergy &nbsp&nbsp&nbsp&nbsp एलर्जी</label></div>
												<div class="form-check"><input type="checkbox" class="form-check-input" id="formCheck-2" value="0" name="q19"/><label class="form-check-label" for="formCheck-2">Amoebiasis &nbsp&nbsp&nbsp&nbsp आमांश</label></div>
												<div class="form-check"><input type="checkbox" class="form-check-input" id="formCheck-2" value="0" name="q19"/><label class="form-check-label" for="formCheck-2">Asthama &nbsp&nbsp&nbsp&nbsp दमा</label></div>
												<div class="form-check"><input type="checkbox" class="form-check-input" id="formCheck-2" value="0" name="q19"/><label class="form-check-label" for="formCheck-2">Bleeding Tendency &nbsp&nbsp&nbsp&nbsp खून बहने की प्रवृत्ति</label></div>
												<div class="form-check"><input type="checkbox" class="form-check-input" id="formCheck-2" value="0" name="q19"/><label class="form-check-label" for="formCheck-2">Cancer &nbsp&nbsp&nbsp&nbsp कैंसर</label></div>
												<div class="form-check"><input type="checkbox" class="form-check-input" id="formCheck-2" value="0" name="q19"/><label class="form-check-label" for="formCheck-2">Cold/Cough &nbsp&nbsp&nbsp&nbsp सर्दी ज़ुखाम </label></div>
												<div class="form-check"><input type="checkbox" class="form-check-input" id="formCheck-2" value="0" name="q19"/><label class="form-check-label" for="formCheck-2">Diabetes &nbsp&nbsp&nbsp&nbsp मधुमेह</label></div>
												<div class="form-check"><input type="checkbox" class="form-check-input" id="formCheck-2" value="0" name="q19"/><label class="form-check-label" for="formCheck-2">Fainting Attack &nbsp&nbsp&nbsp&nbsp चक्कर आना</label></div>
												<div class="form-check"><input type="checkbox" class="form-check-input" id="formCheck-2" value="0" name="q19"/><label class="form-check-label" for="formCheck-2">Epilepsy &nbsp&nbsp&nbsp&nbsp मिरगी</label></div>
												<div class="form-check"><input type="checkbox" class="form-check-input" id="formCheck-2" value="0" name="q19"/><label class="form-check-label" for="formCheck-2">Fever &nbsp&nbsp&nbsp&nbsp बुखार</label></div>
												<div class="form-check"><input type="checkbox" class="form-check-input" id="formCheck-2" value="0" name="q19"/><label class="form-check-label" for="formCheck-2">Gout &nbsp&nbsp&nbsp&nbsp गाउट</label></div>
												<div class="form-check"><input type="checkbox" class="form-check-input" id="formCheck-2" value="0" name="q19"/><label class="form-check-label" for="formCheck-2">Gonorrhoea &nbsp&nbsp&nbsp&nbsp सूजाक</label></div>
												<div class="form-check"><input type="checkbox" class="form-check-input" id="formCheck-2" value="0" name="q19"/><label class="form-check-label" for="formCheck-2">Heart Disease &nbsp&nbsp&nbsp&nbsp हृदयरोग</label></div>
												<div class="form-check"><input type="checkbox" class="form-check-input" id="formCheck-2" value="0" name="q19"/><label class="form-check-label" for="formCheck-2">Influenza &nbsp&nbsp&nbsp&nbsp इंफ्लुएंजा</label></div>
												<div class="form-check"><input type="checkbox" class="form-check-input" id="formCheck-2" value="0" name="q19"/><label class="form-check-label" for="formCheck-2">High/Low BP &nbsp&nbsp&nbsp&nbsp रक्त चाप</label></div>
												<div class="form-check"><input type="checkbox" class="form-check-input" id="formCheck-2" value="0" name="q19"/><label class="form-check-label" for="formCheck-2">Kidney Diseases &nbsp&nbsp&nbsp&nbsp गुर्दे की बीमारियाँ</label></div>
												<div class="form-check"><input type="checkbox" class="form-check-input" id="formCheck-2" value="0" name="q19"/><label class="form-check-label" for="formCheck-2">Lung Diseases &nbsp&nbsp&nbsp&nbsp फेफड़े की बीमारी</label></div>
												<div class="form-check"><input type="checkbox" class="form-check-input" id="formCheck-2" value="0" name="q19"/><label class="form-check-label" for="formCheck-2">Liver Diseases &nbsp&nbsp&nbsp&nbsp यकृत रोग</label></div>
												<div class="form-check"><input type="checkbox" class="form-check-input" id="formCheck-2" value="0" name="q19"/><label class="form-check-label" for="formCheck-2">Skin Diseases &nbsp&nbsp&nbsp&nbsp चर्म रोग</label></div>
												<div class="form-check"><input type="checkbox" class="form-check-input" id="formCheck-2" value="0" name="q19"/><label class="form-check-label" for="formCheck-2">Syphilis &nbsp&nbsp&nbsp&nbsp उपदंश</label></div>
												<div class="form-check"><input type="checkbox" class="form-check-input" id="formCheck-2" value="0" name="q19"/><label class="form-check-label" for="formCheck-2">Tuberculosis &nbsp&nbsp&nbsp&nbsp यक्ष्मा</label></div>
												
											</div>

											<div class="form-group"><label style="margin-right: 39px;">20.In the case of women...<br>महिलाओं के मामले में ...</label>
												<div class="form-check"><input type="radio" class="form-check-input" id="formCheck-1" value="1" name="q20"checked/><label class="form-check-label" for="formCheck-1">Yes</label></div>
												<div class="form-check"><input type="radio" class="form-check-input" id="formCheck-2" value="0" name="q20"/><label class="form-check-label" for="formCheck-2">No</label></div>
											</div>

											 <div class="form-group"><label style="margin-right: 39px;">20.a) Are you pregnant ?<br>क्या आप गर्भवती हैं ?</label>
												<div class="form-check"><input type="radio" class="form-check-input" id="formCheck-1" value="1" name="q20"checked/><label class="form-check-label" for="formCheck-1">Yes</label></div>
												<div class="form-check"><input type="radio" class="form-check-input" id="formCheck-2" value="0" name="q20"/><label class="form-check-label" for="formCheck-2">No</label></div>
											</div>

											<div class="form-group"><label style="margin-right: 39px;">20.b) Have you a child whose less than one year of age ?<br>क्या आपका कोई बच्चा है जिसकी आयु एक वर्ष से कम है?</label>
												<div class="form-check"><input type="radio" class="form-check-input" id="formCheck-1" value="1" name="q20"checked/><label class="form-check-label" for="formCheck-1">Yes</label></div>
												<div class="form-check"><input type="radio" class="form-check-input" id="formCheck-2" value="0" name="q20"/><label class="form-check-label" for="formCheck-2">No</label></div>
											</div>
											<div class="form-group"><label style="margin-right: 39px;">20.c) Are you breast feeding ?<br> क्या आप अपने बच्चे को स्तनपान करा रही हैं?</label>
												<div class="form-check"><input type="radio" class="form-check-input" id="formCheck-1" value="1" name="q20"checked/><label class="form-check-label" for="formCheck-1">Yes</label></div>
												<div class="form-check"><input type="radio" class="form-check-input" id="formCheck-2" value="0" name="q20"/><label class="form-check-label" for="formCheck-2">No</label></div>
											</div>

											<div class="form-group"><label style="margin-right: 39px;">20.d) Have you had an abortion in the last 6months ?<br> क्या आपने पिछले 6 महीनों में गर्भपात करवाया है ?</label>
												<div class="form-check"><input type="radio" class="form-check-input" id="formCheck-1" value="1" name="q20"checked/><label class="form-check-label" for="formCheck-1">Yes</label></div>
												<div class="form-check"><input type="radio" class="form-check-input" id="formCheck-2" value="0" name="q20"/><label class="form-check-label" for="formCheck-2">No</label></div>
											</div>


											<div class="form-group"><label style="margin-right: 39px;">20.e) Last Menstrual period date. <br>अंतिम मासिक धर्म की तारीख</label>
												<div class="form-check"><input type="radio" class="form-check-input" id="formCheck-1" value="1" name="q20"checked/><label class="form-check-label" for="formCheck-1">Yes</label></div>
												<div class="form-check"><input type="radio" class="form-check-input" id="formCheck-2" value="0" name="q20"/><label class="form-check-label" for="formCheck-2">No</label></div>
											</div>	
											
											<div class="form-group"><label style="margin-right: 39px;">21. Have you read and understood all the informaton presented to you ?<br>क्या आपने अपने सामने प्रस्तुत सभी सूचनाओं को पढ़ा और समझा है</label>
												<div class="form-check"><input type="radio" class="form-check-input"  value="1" name="q21" checked/><label class="form-check-label" for="formCheck-1">Yes</label></div>
												<div class="form-check"><input type="radio" class="form-check-input"  value="0" name="q21"/><label class="form-check-label" for="formCheck-2">No</label></div>
											</div>
											
										</div>
									</div>
									<div id="que_error"></div>
									<button class="btn btn-primary btn btn-success" type="button" onclick="showConsent()">Next</button>
								</div><!--Que-->

								<!-- Consent form -->
								<div id="consent" style="display:none;">    
									<button class="btn btn-primary btn btn-danger back" type="button" onclick="backtoque()"><i class="fa fa-arrow-left"></i> Back</button>
									<h4 align="center"> CONSENT </h4>

									<div class="form-group"><label style="margin-right: 39px;">I wish to donate my blood<br>मैं रोगी के लिए स्वेच्छा से अपना रक्त दान करना चाहता हूं।</label>
										<div class="form-check"><input type="radio" class="form-check-input" id="option1" name="radio_options" value="option1" checked/><label class="form-check-label" for="option1" onClick="donate(1)">voluntarily</label></div>
										<div class="form-check"><input type="radio" class="form-check-input" id="option2" name="radio_options" value="option2" /><label class="form-check-label" for="option2" onClick="donate(0)">for patient</label></div>
									</div>

									<div class="form-group" style="margin-right: 0px;">
										<label for="required_later">Patient Name :<br>दाता का नाम :</label><input type="text" class="form-control" id="required_later" disabled/></div><div id="f_dname"></div>

									<div class="form-group"><label style="margin-right: 39px;">I also give my consent to GSK Blood Bank & Components to carry out the HIV, Hepatitis B & C, Malaria, Syphilis & other tests as required.<br>मैं एचआईवी, हेपेटाइटिस बी एंड सी, मलेरिया, सिफलिस और अन्य परीक्षणों को आवश्यकतानुसार करने के लिए जीएसके ब्लड बैंक एंड कंपोनेंट्स को भी अपनी सहमति देता हूं। </label>
										<div class="form-check"><input type="radio" class="form-check-input" id="formCheck-1" checked/><label class="form-check-label" for="formCheck-1">Yes</label></div>
										<div class="form-check"><input type="radio" class="form-check-input" id="formCheck-2" /><label class="form-check-label" for="formCheck-2">No</label></div>
									</div>

									<div class="form-group"><label style="margin-right: 39px;">I am willing to donate blood after 3 months.<br>मैं 3 महीने बाद रक्तदान करने को तैयार हूं। </label>
										<div class="form-check"><input type="radio" class="form-check-input" id="formCheck-1" checked/><label class="form-check-label" for="formCheck-1">Yes</label></div>
										<div class="form-check"><input type="radio" class="form-check-input" id="formCheck-2" /><label class="form-check-label" for="formCheck-2">No</label></div>
									</div>

									<div class="form-group"><label style="margin-right: 39px;">I would like to be informed about any abnormal test results done on my donated blood.<br>मैं अपने दान किए गए रक्त पर किए गए किसी भी असामान्य परीक्षण परिणाम के बारे में सूचित करना चाहूंगा। </label>
										<div class="form-check"><input type="radio" class="form-check-input" id="formCheck-1" checked/><label class="form-check-label" for="formCheck-1">Yes</label></div>
										<div class="form-check"><input type="radio" class="form-check-input" id="formCheck-2" /><label class="form-check-label" for="formCheck-2">No</label></div>
									</div>

									<script>
										var today = new Date();
										var dd = String(today.getDate()).padStart(2, '0');
										var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
										var yyyy = today.getFullYear();

										today = mm + '/' + dd + '/' + yyyy;
										
									</script>

									<div class="form-group"><label>Date :<br>दिनांक :</label>&nbsp;<script>document.write(today);</script></div><div id="f_date"></div>

									<button class="btn btn-primary btn btn-success" type="button" onclick="showmedexam()" id="next">Next</button>
									<button class="btn btn-primary btn btn-danger" type="reset">Reset</button>
								</div>

								<!-- Medical Examination Form -->
								<div id="medexam" style="display:none;">    
									<button class="btn btn-primary btn btn-danger back" type="button" onclick="backtoconsent()"><i class="fa fa-arrow-left"></i> Back</button>
									<h4 align="center"> DONOR'S MEDICAL EXAM </h4>
									<div class="form-group" style="margin-right: 0px;"><label>Weight (in kgs) :</label><input type="text" class="form-control" id="wt" name="wt" /></div><div id='m_wt'></div>
								
									<div class="form-group"><label>B.P. (mm of Hg) :</label>
									<div class="form-row">
										<div class="form-group col-md-2"><input type="text" class="form-control" id="lbp" name="lbp" required /></div>
										<div class="form-group">&nbsp;/&nbsp;</div>
										<div class="form-group col-md-2"><input type="text" class="form-control" id="rbp" name="rbp" required /></div><div id='r_bp'></div>
									</div>
									</div>
									<div class="form-group"><label>Hb (gms %) :</label><input type="text" class="form-control" id="hb" name="hb"/></div><div id='m_hb'></div>
									<div class="form-group"><label>Pulse (per min) :</label><input type="text" class="form-control" id="pulse" name="pulse"/></div><div id='m_pulse'></div>
									<div class="form-group"><label>Temp (F) :</label><input type="text" class="form-control" id="temp" name="temp"/></div><div id='m_temp'></div>
									<div class="form-group"><label>Respiration (per min) :</label><input type="text" class="form-control" id="resp" name="resp"/></div><div id='m_resp'></div>
									<div class="form-group"><label>Systemic Examination :</label><input type="text" class="form-control" id="sys_exam" name="sys_exam"/></div><div id='m_sys_exam'></div>
									<div class="form-group"><label>Exam of venipuncture site :</label><input type="text" class="form-control" id="venipuncture" name="venipuncture"/></div><div id='m_venipuncture'></div>
									<div class="form-group"><label>Any other significant findings :</label><input type="text" class="form-control" id="other" name="other"/></div>

									<button class="btn btn-primary btn btn-success" type="button" onclick="showfinal()">Submit</button>
									<!-- <button class="btn btn-primary btn btn-danger" type="reset">Reset</button> -->
								</div>


								<!-- Final form -->
								<div id="final" style="display:none;">    
									<h4>Are you sure you want to submit the details?</h4>
									<button class="btn btn-primary btn btn-success" type="submit">Submit</button>
									<button class="btn btn-primary btn btn-danger back" type="button" onclick="backtomedexam()"><i class="fa fa-arrow-left"></i> Back</button>
								</div>

								</form>

							</div>


							<div role="tabpanel" class="tab-pane" id="tab-2">
							

								<!-- Table of Existing Donors -->
								<div>
    <div class="form-group pull-right"><input type="text" class="search form-control" placeholder="What you looking for?" /></div><span class="counter pull-right"></span>
    <table class="table table-hover table-bordered results">
        <thead>
            <tr>
                <th>Sr no</th>
				<th>Name</th>
                <th>Last Update</th>
                <th>Blood Group</th>
                <th>Age</th>
				<th>Sex</th>
            </tr>
            <tr class="warning no-result">
                <td colspan="6"><i class="fa fa-warning"></i> No result</td>
            </tr>
        </thead>
        <tbody>
			<?php $i=1; foreach($rows as $row): ?>
            <tr>
                <td><?=$i?></td>
                <td><?=$row->name;?></td>
                <td><?=$row->date;?></td>
                <td><?=$row->blood_gr;?></td>
				<td><?=$row->age;?></td>
				<td><?=$row->sex;?></td>
            </tr>
			<?php $i++; endforeach;?>
        </tbody>
    </table>
</div>

</div>
						</div> <!---Tab Content-->
					</div> <!--Divion-->
					</div> <!--Modal Body-->
				
                	<div class="modal-footer">
                   		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                	</div>
                </div> <!--Modal Content-->

                </div> <!--Modal Dialog-->
            </div> <!--user-form-->
        </div>
    </div>



<!--Recipient Form-->
<!-- Col 3 -->	
<div class="col"></div>

<div id="recipientform" class="modal fade" role="dialog">
	<div class="modal-dialog">

	
	<!-- Modal content-->
	<div class="modal-content">

		<!-- Modal Header -->
		  <div class="modal-header">
			<h4 class="modal-title">Add Recipient</h4>
			<button type="button" class="close" data-dismiss="modal">&times;</button>
		  </div>

		  <div class="modal-body">
		<!-- Form code goes here -->
		<div>
			<ul class="nav nav-tabs">
				<li class="nav-item"><a role="tab" data-toggle="tab" href="#tab-1" class="nav-link active">Add Recipient</a></li>
				<!-- <li class="nav-item"><a role="tab" data-toggle="tab" href="#tab-2" class="nav-link">Existing User</a></li> -->
				
			</ul>

			<!-- Add Recipient Form -->
			<div class="tab-content">

				<!-- New Donor -->
				<div role="tabpanel" class="tab-pane active" id="tab-1">
					
					<!-- Form for new Recipient -->
					<form style="padding-right: 0px;margin-right: 0px;margin-left: 0px;" method="post" action="addrecipient">

					<!-- Recipient Form -->
					<div id="recipient-form" style="display:block;">
						<div id="recipient">    
						<div class="form-group" style="margin-right: 0px;"><label>Type of Request :</label></div>
							<div class="form-row">
							<div class="form-group col-md-1.5">
								  <select class="form-control" id="sel1" name="type_of_req">
									<option value="Planned">Planned</option>
									<option value="Urgent">Urgent</option>
									<option value="Rush">Rush</option>
								  </select>
							</div> 
						</div>

						<div class="form-group"><label>Blood Group : <br> रक्त वर्ग :</label>
							<div class="form-check"><input type="radio" class="form-check-control" name="rbgrp" value="A+"/><label class="form-check-label" for="formCheck-1" >A+</label></div>
							<div class="form-check"><input type="radio" class="form-check-control" name="rbgrp" value="A-"/><label class="form-check-label" for="formCheck-1" >A-</label></div>
							<div class="form-check"><input type="radio" class="form-check-control" name="rbgrp" value="B+"/><label class="form-check-label" for="formCheck-1" >B+</label></div>
							<div class="form-check"><input type="radio" class="form-check-control" name="rbgrp" value="B-"/><label class="form-check-label" for="formCheck-1" >B-</label></div>
							<div class="form-check"><input type="radio" class="form-check-control" name="rbgrp" value="O+"/><label class="form-check-label" for="formCheck-1" >O+</label></div>
							<div class="form-check"><input type="radio" class="form-check-control" name="rbgrp" value="O-"/><label class="form-check-label" for="formCheck-1" >O-</label></div>
							<div class="form-check"><input type="radio" class="form-check-control" name="rbgrp" value="AB+"/><label class="form-check-label" for="formCheck-1" >AB+</label></div>
							<div class="form-check"><input type="radio" class="form-check-control" name="rbgrp" value="AB-"/><label class="form-check-label" for="formCheck-1" >AB-</label></div>
						</div>

						<div class="form-group" style="margin-right: 0px;"><label>Name of Patient : <br>नाम :</label></div>
										<div class="form-row">
										<div class="form-group col-md-1.5">
      										<select class="form-control" id="sel1">
        										<option id="mr">Mr.</option>
        										<option id="mrs">Mrs.</option>
        										<option id="ms">Ms.</option>
      										</select>
    									</div> 
										<div class="form-group col-md-3.5"><input type="text" class="form-control" id="frname" name="frname" placeholder="FirstName" required/></div><div id='r_fname'></div>
										<div class="form-group col-md-3"><input type="text" class="form-control" id="mrname" name="mrname" placeholder="MiddleName"/></div>
										<div class="form-group col-md-3.5"><input type="text" class="form-control" id="lrname" name="lrname" placeholder="LastName" required/></div><div id='r_lname'></div>
									</div>

						<div class="form-group"><label>Age : <br> आयु</label><input type="text" class="form-control" id="rage" name="rage"/></div><div id='r_age'></div>

						<div class="form-group"><label>Sex : <br> लिंग :</label>
							<div class="form-check"><input type="radio" class="form-check-input"  name="rsex" value="Male"/><label class="form-check-label" for="formCheck-1">Male <br> पुरुष </label></div>
							<div class="form-check"><input type="radio" class="form-check-input"  name="rsex" value="Female"/><label class="form-check-label" for="formCheck-1">Female <br> महिला</label></div>
							<div class="form-check"><input type="radio" class="form-check-input"  name="rsex" value="Other"/><label class="form-check-label" for="formCheck-1" >Other <br> अन्य</label></div>
						</div>

						<div class="form-group"><label>Indication of Transfusion : <br>रक्ताधान के संकेत :</label><input type="text" class="form-control" id="rtransfusion" name="rtransfusion" /></div><div id='r_transfusion'></div>
						
						<div class="form-group"><label>Clinical Dignosis : <br> नैदानिक निदान :</label><input type="text" class="form-control" id="rdiagnosis" name="rdiagnosis" /></div><div id='r_diagnosis'></div>
						
						<div class="form-group"><label>Hb : <br> एच बी :</label><input type="text" class="form-control" id="rhb" name="rhb" /></div><div id='r_hb'></div>
						
						<div class="form-group"><label>Gms./dl. :</label><input type="text" class="form-control" id="rgms" name="rgms" /></div><div id='r_gms'></div>
						
						<div class="form-group"><label>History of Previous Blood Transfusion :</label><input type="text" class="form-control" id="rhistory" name="rhistory" /></div><div id='r_history'></div>
						
						<div class="form-group"><label>If yes any Reaction : </label><input type="text" class="form-control" id="rreaction" name="rreaction" /></div><div id='r_reaction'></div>
						
						<div class="form-group"><label>NOTE : Please send sample in EDTC & Plain Buld clearty indicating Patient's Name, Doctor's Name and Date.</label></div>

						<button class="btn btn-primary btn btn-success" type="button" onclick="showReqTable()">Next</button>
						<button class="btn btn-primary btn btn-danger" type="reset">Reset</button>
						</div>
					</div>

					<!-- Requirement Table-->
					<div id="reqtable" style="display:none;">
						<button class="btn btn-primary btn btn-danger back" type="button" onclick="backtorecipient()"><i class="fa fa-arrow-left"></i> Back</button>
					<div>
						
						<table class="table table-hover table-bordered results">
						<thead>
							<tr>
								<th>Requirement</th>
								<th>Units</th>
								<th>Date</th>
								<th>At time</th>
								<th>Remark</th>
							</tr>
							<tr class="warning no-result">
								<td colspan="4"><i class="fa fa-warning"></i> No result</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>PACKED RED CELLS (PRC)</td>
								<td><input type="text" name="u1" id="u1" size="2"></td>
								<td><input type="date" name="d1" id="d1"></td>
								<td><input type="time" name="t1" id="t1"></td>
								<td><input type="text" name="r1" id="r1" size="2"></td>
							</tr>
							<tr>
								<td>WHOLE HUMAN BLOOD (WHB)</td>
								<td><input type="text" name="u2" id="u2" size="2"></td>
								<td><input type="date" name="d2" id="d2"></td>
								<td><input type="time" name="t2" id="t2"></td>
								<td><input type="text" name="r2" id="r2" size="2"></td>
							</tr>
							<tr>
								<td>SALINE WASHES RED CELL (SWRC)</td>
								<td><input type="text" name="u3" id="u3" size="2"></td>
								<td><input type="date" name="d3" id="d3"></td>
								<td><input type="time" name="t3" id="t3"></td>
								<td><input type="text" name="r3" id="r3" size="2"></td>
							</tr>
							<tr>
								<td>PLATELET CONCENTRATE (PC)</td>
								<td><input type="text" name="u4" id="u4" size="2"></td>
								<td><input type="date" name="d4" id="d4"></td>
								<td><input type="time" name="t4" id="t4"></td>
								<td><input type="text" name="r4" id="r4" size="2"></td>
							</tr>
							<tr>
								<td>PLATELET RICH PLASMA (PRP)</td>
								<td><input type="text" name="u5" id="u5" size="2"></td>
								<td><input type="date" name="d5" id="d5"></td>
								<td><input type="time" name="t5" id="t5"></td>
								<td><input type="text" name="r5" id="r5" size="2"></td>
							</tr>
							<tr>
								<td>FRESH FROZEN PLASMA (FFP)</td>
								<td><input type="text" name="u6" id="u6" size="2"></td>
								<td><input type="date" name="d6" id="d6"></td>
								<td><input type="time" name="t6" id="t6"></td>
								<td><input type="text" name="r6" id="r6" size="2"></td>
							</tr>
							<tr>
								<td>OTHER COMPONENT</td>
								<td><input type="text" name="u7" id="u7" size="2"></td>
								<td><input type="date" name="d7" id="d7"></td>
								<td><input type="time" name="t7" id="t7"></td>
								<td><input type="text" name="r7" id="r7" size="2"></td>
							</tr>
							
						</tbody>
						</table>
						<div id="reqtablecontent"></div>
					</div>
					<div class="form-group"><label>Kindly arranged and issue above mentioned requirements. The hospital staff is well experienced to handle any reaction arising during tranfusion.</label></div>

					<button class="btn btn-primary btn btn-success" type="button" onclick="showBBTable()">Next</button>
						<button class="btn btn-primary btn btn-danger" type="reset">Reset</button>

				</div>
				</div>


				<!-- For BB use Table-->

				<div id="bbtable" style="display:none;">
						<button class="btn btn-primary btn btn-danger back" type="button" onclick="backtoreqtable()"><i class="fa fa-arrow-left"></i> Back</button>
					<div>
					<div class="form-group"><label>Donor's Serial No. : </label><input type="text" class="form-control" id="donor_sr" name="donor_sr" /></div><div id='r_donor_sr'></div>
					<div class="form-group"><label>Requistion received at :</label><input type="text" class="form-control" id="reqr" name="reqr" /></div><div id='r_reqr'></div>
					<div class="form-group"><label>Time :</label><input type="text" class="form-control" id="time" name="time" /></div><div id='r_time'></div>

						<div  style="overflow-x : auto;">
						<table class="table table-hover table-bordered results">
						<thead>
							<tr>
								<th>Type of Component</th>
								<th>Bag No./Unit</th>
								<th>Blood Group</th>
								<th>X-matching</th>
								<th>Sign</th>
								<th>Dispatch Date</th>
								<th>Dispatch Time</th>
								<th>Remark</th>
							</tr>
							<tr class="warning no-result">
								<td colspan="4"><i class="fa fa-warning"></i> No result</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><input type="text" name="c1" id="c1" size="2"></td>
								<td><input type="text" name="uu1" id="uu1" size="2"></td>
								<td><input type="text" name="bgrp1" id="bgrp1" size="2"></td>
								<td><input type="text" name="x1" id="x1" size="2"></td>
								<td><input type="file" name="s1" id="s1"></td>
								<td><input type="date" name="dd1" id="dd1"></td>
								<td><input type="time" name="dt1" id="dt1"></td>
								<td><input type="text" name="rr1" id="rr1" size="2"></td>
							</tr>
							<tr>
								<td><input type="text" name="c2" id="c2" size="2"></td>
								<td><input type="text" name="uu2" id="uu2" size="2"></td>
								<td><input type="text" name="bgrp2" id="bgrp2" size="2"></td>
								<td><input type="text" name="x2" id="x2" size="2"></td>
								<td><input type="file" name="s2" id="s2"></td>
								<td><input type="date" name="dd2" id="dd2"></td>
								<td><input type="time" name="dt2" id="dt2"></td>
								<td><input type="text" name="rr2" id="rr2" size="2"></td>
							</tr>
							<tr>
								<td><input type="text" name="c3" id="c3" size="2"></td>
								<td><input type="text" name="uu3" id="uu3" size="2"></td>
								<td><input type="text" name="bgrp3" id="bgrp3" size="2"></td>
								<td><input type="text" name="x3" id="x3" size="2"></td>
								<td><input type="file" name="s3" id="s3"></td>
								<td><input type="date" name="dd3" id="dd3"></td>
								<td><input type="time" name="dt3" id="dt3"></td>
								<td><input type="text" name="rr3" id="rr3" size="2"></td>
							</tr>
							<tr>
								<td><input type="text" name="c4" id="c4" size="2"></td>
								<td><input type="text" name="uu4" id="uu4" size="2"></td>
								<td><input type="text" name="bgrp4" id="bgrp4" size="2"></td>
								<td><input type="text" name="x4" id="x4" size="2"></td>
								<td><input type="file" name="s4" id="s4"></td>
								<td><input type="date" name="dd4" id="dd4"></td>
								<td><input type="time" name="dt4" id="dt4"></td>
								<td><input type="text" name="rr4" id="r44" size="2"></td>
							</tr>
							<tr>
								<td><input type="text" name="c5" id="c5" size="2"></td>
								<td><input type="text" name="uu5" id="uu5" size="2"></td>
								<td><input type="text" name="bgrp5" id="bgrp5" size="2"></td>
								<td><input type="text" name="x5" id="x5" size="2"></td>
								<td><input type="file" name="s5" id="s5"></td>
								<td><input type="date" name="dd5" id="dd5"></td>
								<td><input type="time" name="dt5" id="dt5"></td>
								<td><input type="text" name="rr5" id="rr5" size="2"></td>
							</tr>
							<tr>
								<td><input type="text" name="c6" id="c6" size="2"></td>
								<td><input type="text" name="uu6" id="uu6" size="2"></td>
								<td><input type="text" name="bgrp6" id="bgrp6" size="2"></td>
								<td><input type="text" name="x6" id="x6" size="2"></td>
								<td><input type="file" name="s6" id="s6"></td>
								<td><input type="date" name="dd6" id="dd6"></td>
								<td><input type="time" name="dt6" id="dt6"></td>
								<td><input type="text" name="rr6" id="rr6" size="2"></td>
							</tr>
							<tr>
								<td><input type="text" name="c7" id="c7" size="2"></td>
								<td><input type="text" name="uu7" id="uu7" size="2"></td>
								<td><input type="text" name="bgrp7" id="bgrp7" size="2"></td>
								<td><input type="text" name="x7" id="x7" size="2"></td>
								<td><input type="file" name="s7" id="s7"></td>
								<td><input type="date" name="dd7" id="dd7"></td>
								<td><input type="time" name="dt7" id="dt7"></td>
								<td><input type="text" name="rr7" id="rr7" size="2"></td>
							</tr>
							<tr>
								<td><input type="text" name="c8" id="c8" size="2"></td>
								<td><input type="text" name="uu8" id="uu8" size="2"></td>
								<td><input type="text" name="bgrp8" id="bgrp8" size="2"></td>
								<td><input type="text" name="x8" id="x8" size="2"></td>
								<td><input type="file" name="s8" id="s8"></td>
								<td><input type="date" name="dd8" id="dd8"></td>
								<td><input type="time" name="dt8" id="dt8"></td>
								<td><input type="text" name="rr8" id="rr8" size="2"></td>
							</tr>
							<tr>
								<td><input type="text" name="c9" id="c9" size="2"></td>
								<td><input type="text" name="uu9" id="uu9" size="2"></td>
								<td><input type="text" name="bgrp9" id="bgrp9" size="2"></td>
								<td><input type="text" name="x9" id="x9" size="2"></td>
								<td><input type="file" name="s9" id="s9"></td>
								<td><input type="date" name="dd9" id="dd9"></td>
								<td><input type="time" name="dt9" id="dt9"></td>
								<td><input type="text" name="rr9" id="rr9" size="2"></td>
							</tr>
							<tr>
								<td><input type="text" name="c10" id="c10" size="2"></td>
								<td><input type="text" name="uu10" id="uu10" size="2"></td>
								<td><input type="text" name="bgrp10" id="bgrp10" size="2"></td>
								<td><input type="text" name="x10" id="x10" size="2"></td>
								<td><input type="file" name="s10" id="s10"></td>
								<td><input type="date" name="dd10" id="dd10"></td>
								<td><input type="time" name="dt10" id="dt10"></td>
								<td><input type="text" name="rr10" id="rr10" size="2"></td>
							</tr>
							<tr>
								<td><input type="text" name="c11" id="c11" size="2"></td>
								<td><input type="text" name="uu11" id="uu11" size="2"></td>
								<td><input type="text" name="bgrp11" id="bgrp11" size="2"></td>
								<td><input type="text" name="x11" id="x11" size="2"></td>
								<td><input type="file" name="s11" id="s11"></td>
								<td><input type="date" name="dd11" id="dd11"></td>
								<td><input type="time" name="dt11" id="dt11"></td>
								<td><input type="text" name="rr11" id="rr11" size="2"></td>
							</tr>
							
						</tbody>
						</table>
						<div id="bbtableinfo"></div>

						</div>
					</div>
					
					<button class="btn btn-primary btn btn-success" type="button" onclick="showFinalRec()">Submit</button>
						<button class="btn btn-primary btn btn-danger" type="reset">Reset</button>

				</div>
				</div>
				

					<!-- Final form submission -->
					<div id="finalrec" style="display:none;">    
						<h4>Are you sure you want to submit the details?</h4>
						<button class="btn btn-primary btn btn-success" type="submit">Submit</button>
						
						<button class="btn btn-primary btn btn-danger back" type="button" onclick="backtoBBTable()"><i class="fa fa-arrow-left"></i> Back</button>
					</div>

					</form>

				</div>


				<div role="tabpanel" class="tab-pane" id="tab-2">
				

					<!-- Table of Existing Recipient -->
					
					
					
			</div> <!---Tab Content-->
		</div> <!--Divion-->
		</div> <!--Modal Body-->
	
		<div class="modal-footer">
			   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
	</div> <!--Modal Content-->

	</div> <!--Modal Dialog-->
</div> <!--user-form-->
</div>
</div>



	<!-- Donor's valiadation -->

    <script>
        function openform(){
            $('#userform').modal('show'); 
        }
        function showQuestions(){
			var flag = 0;
			var fname = document.getElementById('fname').value;
			var lname = document.getElementById('lname').value;
			var email = document.getElementById('email').value;
			var address = document.getElementById('addr').value;
			var pincode = document.getElementById('pin').value;
			var age = document.getElementById('age').value;
			var phno = document.getElementById('phno').value;
			var dob = document.getElementById('dob').value;
			var occ = document.getElementById('occ').value;

			
			
			if(fname === "" || lname === ""){
				document.getElementById("fl_name").innerHTML = "<p style='color:red' >Enter Name in proper format</p>";
				flag = 1;
			}
			if(email === ""){
				document.getElementById("f_email").innerHTML = "<p style='color:red' >Enter Your Email</p>";
				flag = 1;
			}
			if(address === ""){
				document.getElementById("f_addr").innerHTML = "<p style='color:red' >Enter Your Address</p>";
				flag = 1;
			}
			if(pincode === ""){
				document.getElementById("f_pincode").innerHTML = "<p style='color:red' >Enter Your PinCode</p>";
				flag = 1;
			}
			if( pincode.length != 6){
				document.getElementById("f_pincode").innerHTML = "<p style='color:red' >Length of pincode should be 6 digit</p>";
				flag = 1;
			}
			if(age === ""){
				document.getElementById("f_age").innerHTML = "<p style='color:red' >Enter Your Age</p>";
				flag = 1;
			}
			if(age <=18 || age >=70){
				document.getElementById("f_age").innerHTML = "<p style='color:red' >Age should be in between 18 to 70</p>";
				flag = 1;
			}
			if(phno === ""){
				document.getElementById("f_phno").innerHTML = "<p style='color:red' >Enter Your Phone Number</p>";
				flag = 1;
			}
			if(phno.length < 10 || phno.length > 10 ){
				document.getElementById("f_phno").innerHTML = "<p style='color:red' >Length of phone number should be 10 digit </p>";
				flag = 1;
			}
			if(dob === ""){
				document.getElementById("f_dob").innerHTML = "<p style='color:red' >Enter Your Date of Birth</p>";
				flag = 1;
			}
			if(occ === ""){
				document.getElementById("f_occ").innerHTML = "<p style='color:red' >Enter Your Occupation</p>";
				flag = 1;
			}
			if(flag==0){
            	document.getElementById("user-form").style.display = "none";
            	document.getElementById("que").style.display = "block";
				document.getElementById("user-name").innerHTML = document.getElementById("fname").value;
			}
        }
		
		function showConsent(){
			var flag = 0;
			var ans = [1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1];
			for (var i = 1;i < 22;i++){
				var que = $("input[name='q"+i+"']:checked").val();
				if(ans[i-1] != que){
					flag = 1;
					break;
				}
			}
			if(flag == 1){
				document.getElementById("que_error").innerHTML = "<p style='color:red'>Sorry, you cannot donate blood today</p>";
			}else{
				document.getElementById("que").style.display = "none";
            	document.getElementById("consent").style.display = "block";
			}
        }

		function donate(flag){
			if(flag === 1){
				$("#option1").click(function() {
            		$("#required_later").prop("required", false);
            		$("#required_later").prop("disabled", true);
				});
			}
			else{
				$("#option2").click(function() {
            	$("#required_later").prop("required", true);
            	$("#required_later").prop("disabled", false);
				$("#required_later").focus();
				var required_later = document.getElementById("required_later").value;
				if(required_later === "" ){
					document.getElementById("f_dname").innerHTML = "<p style='color:red'>Enter Patient Name</p>"
					$("#next").prop("disabled", true);
				}
				else{
					$("#next").prop("disabled", false);
				}
        	});
		}
		}

		function showmedexam(){
			var flag = 0;
			var required_later = document.getElementById("required_later").value;
			// var date = document.getElementById("date").value;

			

			// $("#option1").click(function() {
            // 	$("#required_later").prop("required", false);
            // 	$("#required_later").prop("disabled", true);
			// });
		
        	// $("#option2").click(function() {
            // 	$("#required_later").prop("required", true);
            // 	$("#required_later").prop("disabled", false);
			// 	$("#required_later").focus();
			// 	if(required_later === "" ){
			// 	document.getElementById("f_dname").innerHTML = "<p style='color:red'>Enter Patient Name</p>"
			// 	flag = 1;
			// }
        	// });

			// if(date === ""){
			// 	document.getElementById("f_date").innerHTML = "<p style='color:red' >Enter Your Date of Birth</p>";
			// 	flag = 1;
			// }
			// if(flag == 0){
            	document.getElementById("consent").style.display = "none";
				document.getElementById("medexam").style.display = "block";
			
        }


        function backtouser(){
            document.getElementById("user-form").style.display = "block";
            document.getElementById("que").style.display = "none";
        }

		function backtoque(){
            document.getElementById("que").style.display = "block";
            document.getElementById("consent").style.display = "none";
        }

		function backtoconsent(){
            document.getElementById("consent").style.display = "block";
            document.getElementById("medexam").style.display = "none";
		}

		function backtomedexam(){
            document.getElementById("medexam").style.display = "block";
            document.getElementById("final").style.display = "none";
		}

		function showfinal(){
			var flag = 0;
			var wt = document.getElementById("wt").value;
			var r_bp = document.getElementById("r_bp").value;
			var hb = document.getElementById("hb").value;
			var pulse = document.getElementById("pulse").value;
			var temp = document.getElementById("temp").value;
			var resp = document.getElementById("resp").value;
			var sys_exam = document.getElementById("sys_exam").value;
			var venipuncture = document.getElementById("venipuncture").value;

			if(wt === ""){
				document.getElementById('m_wt').innerHTML = "<p style='color:red'>Enter Your Weight</p>";
				flag=1;
			}
			if(r_bp === ""){
				document.getElementById('r_bp').innerHTML = "<p style='color:red'>Enter Your Blood Pressure</p>";
				flag=1;
			}
			if(hb === ""){
				document.getElementById('m_hb').innerHTML = "<p style='color:red'>Enter Your Haemoglobin</p>";
				flag=1;
			}
			if(pulse === ""){
				document.getElementById('m_pulse').innerHTML = "<p style='color:red'>Enter Your Pulse Rate</p>";
				flag=1;
			}
			if(temp === ""){
				document.getElementById('m_temp').innerHTML = "<p style='color:red'>Enter Your Temperature</p>";
				flag=1;
			}
			if(resp === ""){
				docment.getElementById('m_resp').innerHTML = "<p style='color:red'>Enter Your Resp</p>";
				flag=1;
			}
			if(sys_exam === ""){
				document.getElementById('m_sys_exam').innerHTML = "<p style='color:red'>Enter Your Systemtic Examination</p>";
				flag=1;
			}
			if(venipuncture === ""){
				document.getElementById('m_venipuncture').innerHTML = "<p style='color:red'>Enter Exam. of Venipuncture Site</p>";
				flag=1;
			}
			if(flag==0){
				document.getElementById("medexam").style.display = "none";
				document.getElementById("final").style.display = "block";
			}
			
		}
    </script>
	<script>
		$(document).ready(function() {
  $(".search").keyup(function () {
    var searchTerm = $(".search").val();
    var listItem = $('.results tbody').children('tr');
    var searchSplit = searchTerm.replace(/ /g, "'):containsi('")
    
  $.extend($.expr[':'], {'containsi': function(elem, i, match, array){
        return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
    }
  });
    
  $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','false');
  });

  $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','true');
  });

  var jobCount = $('.results tbody tr[visible="true"]').length;
    $('.counter').text(jobCount + ' item');

  if(jobCount == '0') {$('.no-result').show();}
    else {$('.no-result').hide();}
		  });
});

	</script>
    <script src="<?php echo base_url("assets/js/jquery.min.js");?>"></script>
    <script src="<?php echo base_url("assets/bootstrap/js/bootstrap.min.js");?>"></script>
    <script src="<?php echo base_url("assets/js/bs-animation.js");?>"></script>



<!-- Recipient Validation-->

	<script>
		function openRecipientForm(){
            $('#recipientform').modal('show'); 
        }

		function showReqTable(){
			var flag = 0;
			var fname = document.getElementById("frname").value;
			var lname = document.getElementById("lrname").value;
			var age = document.getElementById("rage").value;
			var transfusion = document.getElementById("rtransfusion").value;
			var diagnosis = document.getElementById("rdiagnosis").value;
			var hb = document.getElementById("rhb").value;
			var gms = document.getElementById("rgms").value;
			var history = document.getElementById("rhistory").value
			var reaction = document.getElementById("rreaction").value;

			if(fname === "" || lname === ""){
				document.getElementById('r_lname').innerHTML = "<p style='color:red'>Enter Proper Name</p>";
				flag=1;
			}
			if(age === ""){
				document.getElementById("r_age").innerHTML = "<p style='color:red'>Enter Your Age</p>";
				flag=1;
			}

			if(transfusion === ""){
				document.getElementById("r_transfusion").innerHTML = "<p style='color:red'>Enter Indiction of Transfusion</p>";
				flag=1;
			}

			if(diagnosis === ""){
				document.getElementById("r_diagnosis").innerHTML = "<p style='color:red'>Enter Clinical Diagnosis</p>";
				flag=1;
			}

			if(hb === ""){
				document.getElementById("r_hb").innerHTML = "<p style='color:red'>Enter HB</p>";
				flag=1;
			}

			if(gms === ""){
				document.getElementById("r_gms").innerHTML = "<p style='color:red'>Enter Gms./dl.</p>";
				flag=1;
			}

			if(history === ""){
				document.getElementById("r_history").innerHTML = "<p style='color:red'>Enter History of previous Blood Transfusion</p>";
				flag=1;
			}
            if(flag == 0){
				document.getElementById("recipient-form").style.display = "none";
				document.getElementById("reqtable").style.display = "block";
			}
		}

		function showBBTable(){
			var flag = 0;
			var u1 = document.getElementById("u1").value;
			var u2 = document.getElementById("u2").value;
			var u3 = document.getElementById("u3").value;
			var u4 = document.getElementById("u4").value;
			var u5 = document.getElementById("u5").value;
			var u6 = document.getElementById("u6").value;
			var u7 = document.getElementById("u7").value;
			
			var d1 = document.getElementById("d1").value;
			var d2 = document.getElementById("d2").value;
			var d3 = document.getElementById("d3").value;
			var d4 = document.getElementById("d4").value;
			var d5 = document.getElementById("d5").value;
			var d6 = document.getElementById("d6").value;
			var d7 = document.getElementById("d7").value;
			
			var t1 = document.getElementById("t1").value;
			var t2 = document.getElementById("t2").value;
			var t3 = document.getElementById("t3").value;
			var t4 = document.getElementById("t4").value;
			var t5 = document.getElementById("t5").value;
			var t6 = document.getElementById("t6").value;
			var t7 = document.getElementById("t7").value;
			
			var r1 = document.getElementById("r1").value;
			var r2 = document.getElementById("r2").value;
			var r3 = document.getElementById("r3").value;
			var r4 = document.getElementById("r4").value;
			var r5 = document.getElementById("r5").value;
			var r6 = document.getElementById("r6").value;
			var r7 = document.getElementById("r7").value;

			 	
			if(u1 === "" || u2 === "" || u3 === "" || u4 === "" || u5 === "" || u6 === "" || u7 === "" || 
				d1 === "" || d2 === "" || d3 === "" || d4 === "" || d5 === "" || d6 === "" || d7 === "" ||
				t1 === "" || t2 === ""	 || t3 === "" || t4 === "" || t5 === "" || t6 === "" || t7 === "" ||
				r1 === "" || r2 === "" || r3 === "" || r4 === "" || r5 === "" || r6 === "" || r7 === ""){
				document.getElementById("reqtablecontent").innerHTML = "<p style='color:red'>Fill all the Information in the Table</p>";
				flag=1;
			}
			if(flag == 0){
            	document.getElementById("reqtable").style.display = "none";
            	document.getElementById("bbtable").style.display = "block";
			}
		}
		
		function showFinalRec(){
			var flag =0;
			var donor_sr = document.getElementById("donor_sr").value;
			var reqr = document.getElementById("reqr").value;
			var time = document.getElementById("time").value;
			
			var c1 = document.getElementById("c1").value;
			var uu1 = document.getElementById("uu1").value;
			var bgrp1 = document.getElementById("bgrp1").value;
			var x1 = document.getElementById("x1").value;
			var s1 = document.getElementById("s1").value;
			var dd1 = document.getElementById("dd1").value;
			var dt1 = document.getElementById("dt1").value;
			var rr1 = document.getElementById("rr1").value;


			if(donor_sr === ""){
				document.getElementById("r_donor_sr").innerHTML = "<p style='color:red'>Enter Donor's Serial No.</p>";
				flag=1;
			}

			if(reqr === ""){
				document.getElementById("r_reqr").innerHTML = "<p style='color:red'>Enter Requisition received at</p>";
				flag=1;
			}

			if(time === ""){
				document.getElementById("r_time").innerHTML = "<p style='color:red'>Enter Time</p>";
				flag=1;
			}

			if(c1 === "" || uu1 === "" || bgrp1 === "" || x1 === "" || s1 === "" || dd1 === "" || dt1 === "" || rr1 === ""){
				document.getElementById("bbtableinfo").innerHTML = "<p style='color:red'>Enter at least 1st Data</p>";
				flag=1;
			}

			if(flag == 0){
				document.getElementById("bbtable").style.display = "none";
				document.getElementById("finalrec").style.display = "block";
			}

		}

		function backtorecipient(){
			document.getElementById("reqtable").style.display = "none";
			document.getElementById("recipient-form").style.display = "block";
		}

		function backtoreqtable(){
			document.getElementById("bbtable").style.display = "none";
			document.getElementById("reqtable").style.display = "block";
		}

		function backtoBBTable(){
			document.getElementById("finalrec").style.display = "none";
			document.getElementById("bbtable").style.display = "block";
		}

		
	</script>
	
</body>

</html>

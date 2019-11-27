<?php
	function fetchdata(){
		$output = '';
		$connect = mysqli_connect("localhost", "root", "", "sainath");
		$query = "SELECT * FROM user_details";
		$result = mysqli_query($connect, $query);
		while($row = mysqli_fetch_array($result)){
			$output .= '
					<tr>
						<td>'.$row["id"].'</td>
						<td>'.$row["name"].'</td>
                        <td>'.$row["email"].'</td>
                        <td>'.$row["blood_gr"].'</td>
						<td>'.$row["age"].'</td>
                        <td>'.$row["sex"].'</td>
                        <td>'.$row["phone_no"].'</td>
						<td>'.$row["dob"].'</td>
						<td>'.$row["address"].'</td>
						<td>'.$row["pin"].'</td>
						<td>'.$row["occ"].'</td>
					</tr>
				';
		}
		return $output;
	}

	if (isset($_POST["reports"])) {
		require_once("C:/xampp/htdocs/new_sainath/sainath/application/libraries/tcpdf/tcpdf.php");
		$obj_pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
		$obj_pdf->SetTitle("donor_reports");
		$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, 18, "GSK Blood Bank", '');
		$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', 31));
        $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
        $obj_pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
		$obj_pdf->SetMargins(10, 35, 10);  //PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT 
		// $obj_pdf->SetPrintHeader(false);
		// $obj_pdf->SetPrintFooter(false);
        $obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        $obj_pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
        $obj_pdf->SetFont('helvetica', 'B', 10);
        $obj_pdf->SetHeaderMargin(10); //PDF_MARGIN_HEADER


        $content = '';
        $content .= '
        		<h1 align="center">Donor\'s Reports</h1>
        		<table border="1" cellspacing="0" cellpadding="5">
        		<tr>
					<th width="5%">ID</th>
					<th width="15%">Name</th>
                    <th width="20%">Email</th>
                    <th width="3%">BG</th>
					<th width="3.5%">Age</th>
                    <th width="5.5%">Sex</th>
                    <th width="9%">Phone No.</th>
                    <th width="8%">Date of Birth</th>
					<th width="15%">Adress</th>
					<th width="6%">Pincode</th>
					<th width="9%">Occupation</th>
				</tr>
		';

		$content .= fetchdata();

		$content .= '</table>';

        // $content .=  (0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
        
		$obj_pdf->AddPage('L', 'A4');


		// $obj_pdf->writeHTML($content);
        $obj_pdf->writeHTML($content, true, false, true, false, '');
        
        $obj_pdf->lastPage();

		$obj_pdf->Output("Donors_report.pdf", "I");
        exit;
	}
?>

<!-- <!DOCTYPE html>
<html>
<head>
	<title>Create PDF</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
</head>
<body>
	<div class="container" style="width:700px;">
		<div class="table-responsive">
			<table class="table table-bordered">
				<tr>
					<th width="5%">ID</th>
					<th width="30%">Name</th>
					<th width="45%">Email</th>
					<th width="10%">Age</th>
					<th width="10%">Sex</th>
				</tr>
				<?php
						echo fetchdata();
				?>
			</table>
			<br> -->
			<!-- <form method="post">
				<input type="submit" name="reports" value="Create PDF">
			</form> -->
		<!-- </div>
	</div>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
    <title>sainath</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/fontawesome-all.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/font-awesome.min.css');?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Navigation-Clean.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc; 
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}
</style>


    <script>
function getdate(){

	var today = new Date();
	var dd = String(today.getDate()).padStart(2, '0');
	var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
	var yyyy = today.getFullYear();

	var newtoday = yyyy + '-' + mm + '-' + dd;

    document.getElementById("from_date").value = newtoday;
    document.getElementById("to_date").value = newtoday;
    // document.getElementById("exp_date").value = newtoday;
}
</script>
<script>
	var today = new Date();
	var dd = String(today.getDate()).padStart(2, '0');
	var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
	var yyyy = today.getFullYear();
  today = mm + '/' + dd + '/' + yyyy;										
</script>

</head>

<body onload="getdate()" style="overflow-x : hidden";>
    
<div class="container-fluid">
    <button class="btn btn-primary back" style="margin-top : 1%"; type="button" ><a href="home" style="color:white";><i class="fa fa-arrow-circle-left" style="color:white";></i> &nbsp;Back</a></button>
    
    <form style="padding-right: 0px;margin-right: 0px;margin-left: 0px;" method="post">

        <div style="display:block;" id="dateInfo">
            <div class="form-row" style="margin-top : 1%";>
            <!-- <?php foreach($user as $row):?><?=$row->blood_gr;?><?php endforeach;?> --> 
                <div class="form-group col-md-3" style="margin-right: 0px;"><label>From :</label> <input type="date" class="form-control" name="from" id="from_date" /></div>
                <div class="form-group col-md-3" style="margin-right: 0px;"><label>To :</label> <input type="date" class="form-control" name="to" id="to_date" /></div>
                <div class="form-group col-md-1" style="margin-right: 0px;"><label></label><br><br><button class="btn btn-danger" type="button" style="float:right; margin:1%" onclick="getDonors()"><i class="fas fa-arrow-circle-right" style="color:white";></i> &nbsp;Go</button></div>
            </div>
        </div>

        <div class="form-row donor_info" style="display:none;" id="donorsInfo">
            <table class="table table-hover table-bordered results" style="overflow-y:hidden">
                <thead>
                    <tr>
                        <th>Sr no</th>
                        <th>ID</th>
                        <th>Donor's Name</th>
                        <th>Email</th>
                        <th>Blood Group</th>
                        <th>Age</th>
                        <th>Sex</th>
                        <th>Phone No.</th>
                        <th>Date of Birth</th>
                        <th>Address</th>
                        <th>Pin</th>
                        <th>Occupation</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; foreach($user as $row):?>
                        <tr>
                            <td><?=$i?></td>
                            <td><?=$row->id;?></td>
                            <td><?=$row->name;?></td>
                            <td><?=$row->email;?></td>
                            <td><?=$row->blood_gr;?></td>
                            <td><?=$row->age;?></td>
                            <td><?=$row->sex;?></td>
                            <td><?=$row->phone_no;?></td>
                            <td><?=$row->dob;?></td>
                            <td><?=$row->address;?></td>
                            <td><?=$row->pin;?></td>
                            <td><?=$row->occ;?></td>
                        </tr>
                    <?php $i++; endforeach;?>                
                </tbody>
            </table>                    
        </div>

        
    <div align ="center">
    <div><button class="btn btn-danger" type="button" style="float:right; margin:1%"><a href="home" style="color:white";><i class="fas fa-arrow-left" style="color:white";></i> &nbsp;Exit</a></button></div>
    <div><button class="btn btn-warning" type="reset" style="float:right; margin:1%"><i class="fas fa-close" style="color:red; font-size:18px;"></i> &nbsp;Cancel</button></div>
    <div><button class="btn btn-success" type="submit" name="reports" style="float:right; margin:1%"><i class="fas fa-file" style="color:white";></i> &nbsp;Report</button></div>
    </div>
    </div>
    </form>
    </html>


    <script src="<?php echo base_url("assets/js/jquery.min.js");?>"></script>
    <script src="<?php echo base_url("assets/bootstrap/js/bootstrap.min.js");?>"></script>
    <script src="<?php echo base_url("assets/js/bs-animation.js");?>"></script>


<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>

<script>
function getDonors(){
    var from_date = document.getElementById('from_date').value;
    var to_date = document.getElementById('to_date').value;

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var info = this.responseText;
        // var array = info.split(" ");
        if(info === ""){
            alert(info);
        }
        else{
            // document.getElementById('fname').value = array[0];
            // document.getElementById('mname').value = array[1];
            // document.getElementById('lname').value = array[2];
            // document.getElementById('gender').value = array[3];
            // document.getElementById('bgrp').value = array[4];
            // document.getElementById('phno').value = array[5];
            // document.getElementById('email').value = array[6];
            // document.getElementById('age').value = array[7];
            // document.getElementById('pincode').value = array[8];
            // document.getElementById('dob').value = array[9];
            // document.getElementById('occupation').value = array[10];
            // document.getElementById('address').value = array[11];
            document.getElementById("donorsInfo").style.display = "block";
            var array = info.split("^");
            var fullname = array[0];
            name = fullname.split(" ");
            var final_name = name.split(',');
            document.getElementById('fname').value = final_name[0];
            document.getElementById('mname').value = final_name[1];
            document.getElementById('lname').value = final_name[2];
            document.getElementById('gender').value = array[1];
            document.getElementById('bgrp').value = array[2];
            document.getElementById('phno').value = array[3];
            document.getElementById('email').value = array[4];
            document.getElementById('age').value = array[5];
            document.getElementById('pincode').value = array[6];
            document.getElementById('dob').value = array[7];
            document.getElementById('occupation').value = array[8];
            document.getElementById('address').value = array[9];    
        }
      }
    };
    xhttp.open("GET", "getDonorInfo?from="+from_date+"&to="+to_date, true);
    // xhttp.open("GET", "getDonorInfo?to="+to_date, true);
    xhttp.send();

}
</script>
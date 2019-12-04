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
</head>

<body>
<script>
function getdate(){

var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();

var newtoday = yyyy + '-' + mm + '-' + dd;

document.getElementById("req_date").value = newtoday;
document.getElementById("to_date").value = newtoday;
document.getElementById("return_date").value = newtoday;
}
</script>
<script>
var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();
today = mm + '/' + dd + '/' + yyyy;										
</script>
<body onload="getdate()" style="overflow-x : hidden";>
<form method="post">
<div class="container-fluid">
    <button class="btn btn-primary back" style="margin-top : 1%"; type="button" ><a href="home"  style="color:white";><i class="fa fa-arrow-left" style="color:white";></i> Back</a></button>
    
        <div class="form-row" style="margin-top : 2%";>
            <div class="form-group col-md-3" style="margin-right: 0px;"><label>Patient Name:</label><input type="text" class="form-control" id="patient"/></div>
            <div class="form-group col-md-3" style="margin-right: 0px;"><label>Component :</label><select type="text" class="form-control" />
				<option>..</option>
				</select>
			</div>
            <div class="form-group col-md-3"><label>Delivery Date :</label><input type="date" class="form-control" id="req_date" name="req_date" /></div>
            
        </div>

		<div class="form-row" style="margin-top : 2%";>
           
            <div class="form-group col-md-3" style="margin-right: 0px;"><label>Request Type :</label><select type="text" class="form-control" />
				<option>..</option>
				</select>
			</div>
			<div class="form-group col-md-3" style="margin-right: 0px;"><label>CM Bil No.:</label><input type="text" class="form-control" id="patient"/></div>
			<div class="form-group col-md-3" style="margin-right: 0px;"><label>Patient Barcode:</label><input type="text" class="form-control" id="patient"/></div>
            <div><button class="btn btn-danger" style="margin:65%">GO</button></div>
        </div>
		<div>


            <!-- <div class="form-group pull-left"><input type="text" class="search form-control" placeholder="What you looking for?" /></div><span class="counter pull-right"></span> -->
              <table class="table table-hover table-bordered results">
                <thead>
                  <tr>
                    <th>Sr no</th>
                    <th>CM Bill No.</th>
                    <th>Patient Name</th>
                    <th>Req Date Time</th>
					<th>Component</th>
                    <th>B Group</th>
					<th>NAT tests</th>
					<th>Reg Qty</th>
					<th>Prac Qty</th>
                  </tr>
                            <!-- <tr class="warning no-result">
                                <td colspan="4"><i class="fa fa-warning"></i> No result</td>
                            </tr> -->
                </thead>
                <tbody>
                <?php $i=1; foreach($recipients_val as $row): ?>
                  <tr onclick="enterdetails('<?=$row->patient_name?>','<?=$row->bgrp?>')">
                    <td><?=$i?></td>
                    <td><?=$row->rec_id;?></td>
                    <td><?=$row->patient_name;?></td>
                    <td><?=$row->date;?></td>
					<td></td>
                    <td><?=$row->bgrp;?></td>
                  </tr>
			          <?php $i++; endforeach;?>
                </tbody>
              </table>
          </div>
		  <div class="form-row" style="margin-top : 2%;">
		  <input type="checkbox" class="co-md-1" id="materialUnchecked" style="margin:5px;">
    		<label class="form-check-label" for="materialUnchecked" >Match</label>
            <div class="form-group col-md-3" style="margin-left: 50px;"><label>Patient Name:</label>
			<input type="text" class="form-control" id="patient"/></div>
			<div class="form-group col-md-3" style="margin-left: 50px;"><label>Stock:</label>
			<label class="radio-inline"><input type="radio" name="optradio" style="margin-left: 20px;">Priority</label>
			<label class="radio-inline"><input type="radio" name="optradio"style="margin-left: 20px;">Optional</label>
			</div>
			<div class="form-group col-md-2" style="margin-right: 0px;"><label>NAT tested :</label>
			<select type="text" class="form-control" />
				<option>NO</option>
				<option>YES</option>
				</select>
			</div>
			<div><button class="btn btn-danger" style="margin:65%">GO</button></div>
		</div>

			<div class="form-row" style="margin-top : 2%;">
					
						<div class="form-group col-md-4">
						<label for="text">Patient name:</label>
						<input type="text" class="form-control" id="patient" name="pat_name">
						</div>
						<div class="form-group col-md-2">
						<label for="text">Age:</label>
						<input type="text" class="form-control" id="patient_name" name="pat_name">
						</div>
				</div>
					<div class="form-row">
						<div class="form-group col-md-3">
							<label for="text">Blood Group</label>
							<select type="text" class="form-control" />
								<option></option>
								<option></option>
								</select>
						</div>
							<div class="form-group col-md-3">
							<label for="text">Component</label>
							<select type="text" class="form-control" />
								<option></option>
								<option></option>
								</select>
							</div>
						
					
						
					<div class="col-md-6">
					<div class="row">
						<div class="col-sm-12">
							<div class="card" style="padding:20px;">
								<div class="card-body">
									<div class="row">
									<table class="table table-hover table-bordered results">
										<thead>
										<tr>
											<th>Sr no</th>
											<th>CM Bill No.</th>
											<th>Patient Name</th>
											<th>Req Date Time</th>
											<th>Component</th>
											<th>B Group</th>
										<tr>
									</table>
									</div>
								</div>
							</div>
						<div>
					</div>
						</div>

				</div>
				</div>
				</div>
				<div class="form-row" style="margin-top : 2%;">
					<div class="form-group col-md-3">
							<label for="text">Age:</label>
							<input type="text" class="form-control" id="patient_name" name="pat_name">
					</div>

					<div class="form-group col-md-3">
							<label for="text">Age:</label>
							<input type="text" class="form-control" id="patient_name" name="pat_name">
					</div>
				</div>
				<div class="form-row" style="margin-top : 2%;">
					<div class="form-group col-md-3">
							<label for="text">Age:</label>
							<input type="text" class="form-control" id="patient_name" name="pat_name">
					</div>

					<div class="form-group col-md-3">
							<label for="text">EOH HDN:</label>
							<input type="text" class="form-control" id="patient_name" name="pat_name">
					</div>
				</div>
				<div class="form-row" style="margin-top : 2%;">
					<div class="form-group col-md-6">
					<label for="text">Allocated Date:</label>	
					<input type="date" class="form-control" id="to_date" name="req_date" /></div>
					</div>
				<div class="form-row" style="margin-top : 2%;">
					<div class="form-group col-md-6">
					<label for="text">Allocated By:</label>
							<select type="text" class="form-control" />
								<option></option>
								<option></option>
								</select>
					</div>
				</div	>
					<div class="form-row" style="margin-top : 2%;">
					<div class="form-group col-md-6">
					<label for="text">Remarks:</label>
							<input type="text" class="form-control" />
							
					</div>
			</div>
					<div class="but" style="text-align:center; margin:20px;">
		
                <button type="button" class="btn btn-danger" style="margin-right:20px;">Save</button>
                <button type="button" class="btn btn-warning"style="margin-right:20px;">Cancel</button>
                <button type="button" class="btn btn-primary"style="margin-right:20px;">Exit</button>
            </div>
		</div>	
	</form>
		<script>

function enterdetails(name,bgrp){
    document.getElementById("patient").value = name;
    document.getElementById("req_bg").value = bgrp;
    var fullname = name.split(" ");
    document.getElementById("patient").value = name;
    
}
</script>
		
</body>
</html>

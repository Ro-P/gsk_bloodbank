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
		
	<div class="form-row" style="margin-top : 2%";>
            <div class="form-group col-md-2" style="margin-left:10px;"><label>R type:</label>
			<input type="text" class="form-control" id="rtype"/>
			</div>
            <div class="form-group col-md-3" style="margin-right: 0px;"><label>Patient :</label>
			<input type="text" class="form-control" id="patient"/>
			</div>
			<div class="form-group col-md-2" style="margin-right: 0px;"><label>Issue Number:</label>
			<input type="text" class="form-control" id="issueno"/>
			</div>
			<div class="form-group col-md-3" style="margin-right: 0px;"><label>Hospital:</label>
			<input type="text" class="form-control" id="hospital"/>
			</div>
	</div>
	<div class="form-row" style="margin-top : 2%";>
            <div class="form-group col-md-4" style="margin-left:10px;"><label>Adv Remarks</label>
			<input type="text" class="form-control" id="remarks"/>
			</div>
            <div class="form-group col-md-2" style="margin-right: 0px;"><label>Total Advance: </label>
			<input type="text" class="form-control" id="advance"/>
			</div>
			<div class="form-group col-md-2" style="margin-right: 0px;"><label>S. number:</label>
			<input type="text" class="form-control" id="snumber"/>
			</div>
			<div class="form-group col-md-3" style="margin-right: 0px;"><label>Visitor Boy:</label>
			<select type="text" class="form-control" />
				<option>..</option>
				<option>..</option>
				</select>
			</div>
	</div>

	<div class="row">
						<div class="col-sm-12">
							<div class="card" style="padding:20px;">
								<div class="card-body">
									<div class="row">
										<div class="form-group col-md-2" style="margin-left:10px;"><label>Bag:</label>
										<input type="text" class="form-control" id="bag"/>
										</div>
										<div class="form-group col-md-2" style="margin-right: 0px;"><label>component :</label>
										<input type="text" class="form-control" id=component/>
										</div>
										<div class="form-group col-md-2" style="margin-right: 0px;"><label>Donor Number:</label>
										<input type="text" class="form-control" id="issueno"/>
										</div>
										<div class="form-group col-md-1" style="margin-right:20px;">
										<button type="button" class="btn btn-danger " style="margin:35px;">Search Donor</button>
										</div>
										<div class="form-group col-md-1"style="margin-left:20px;" >
										<button type="button" class="btn btn-warning"style="margin:35px;">Update</button>
										</div>
										<div class="form-group col-md-1" style="margin-left:20px;">
										<button type="button" class="btn btn-primary"style="margin:35px;">Delete</button>
										</div>
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

			<div class="form-row" style="margin-top : 2%";>
				<div class="form-group col-md-1" style="margin-left:10px;"><label>Total Quantity</label>
				<input type="text" class="form-control" id="remarks"/>
				</div>
				<div class="form-group col-md-1" style="margin-right: 20px; margin-left:20px;"><label>Tax Price: </label>
				<input type="text" class="form-control" id="advance"/>
				</div>
				<div class="form-group col-md-1" style="margin-right: 20px;"><label>Price Discount:</label>
				<input type="text" class="form-control" id="snumber"/>
				</div>
				<div class="form-group col-md-1" style="margin-right: 20px;"><label>Total NAT:</label>
				<input type="text" class="form-control" id="snumber"/>
				</div>
				<div class="form-group col-md-1" style="margin-right: 20px;"><label>Donor Discount:</label>
				<input type="text" class="form-control" id="snumber"/>
				</div>
				<div class="form-group col-md-1" style="margin-right: 20px;"><label>Total Amount:</label>
				<input type="text" class="form-control" id="snumber"/>
				</div>
				<div class="form-group col-md-1" style="margin-right: 20px;"><label>CM Balance:</label>
				<input type="text" class="form-control" id="snumber"/>
				</div>
				<div class="form-group col-md-2" style="margin-right: 20px;"><label>Special Discount:</label>
				<input type="text" class="form-control" id="snumber"/>
				</div>
			</div>
			
			<div class="form-row col-md-6" style="margin-top : 2%";>
				<div class="form-group col-md-3" style="margin-left:10px;"><label>Referred By</label>
				<select type="text" class="form-control" />
								<option></option>
								<option></option>
				</select>
				</div>
				<div class="form-group col-md-3" style=" margin-left:20px;"><label>Reason: </label>
				<select type="text" class="form-control" />
								<option></option>
								<option></option>
				</select>
				</div>

				<div class="form-row col-md-6" style="margin-top : 2%";>
				<div class="form-group " style="margin-left:10px;"><label><b>Special Discount Details:</b></label>
				</div>
				</div>
				</div>
				<div class="form-row col-md-6" >
				<div class="form-group col-md-12" style="margin-left:10px;"><label>Organization</label>
				<select type="text" class="form-control" />
								<option></option>
								<option></option>
				</select>
				</div>
				</div>
				<div class="form-row col-md-6" ;>
				<div class="form-group col-md-6" style="margin-left:10px;"><label>Cus Name:</label>
				<input type="text" class="form-control" />
								
				</div>
				<div class="form-group col-md-4" style="margin-left:10px;"><label>Mobile:</label>
				<input type="text" class="form-control" />
								
				</div>
				<div class="form-row col-md-6" >
				<div class="form-group col-md-12" style="margin-left:10px;"><label>Camp</label>
				<select type="text" class="form-control" />
								<option></option>
								<option></option>
				</select>
				</div>
				</div>
				
			</div>
			
			<div class="form-row col-md-6" style="margin-top : 2%";>
				<div class="form-group col-md-3" style="margin-left:10px;"><label>Referred By</label>
				<select type="text" class="form-control" />
								<option></option>
								<option></option>
				</select>
				</div>
			
		</div>

		
		<div class="but" style="text-align:center; margin:20px;">
		
		<button type="button" class="btn btn-danger" style="margin-right:20px;">Save</button>
		<button type="button" class="btn btn-warning"style="margin-right:20px;">Cancel</button>
		<button type="button" class="btn btn-primary"style="margin-right:20px;">Exit</button>
		<button type="button" class="btn btn-warning"style="margin-right:20px;">Print</button>
	</div>
</body>
</html>

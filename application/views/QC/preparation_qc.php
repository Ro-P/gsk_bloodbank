<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
    <title>GSK-Blood reports QC</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/fontawesome-all.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/font-awesome.min.css');?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Navigation-Clean.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css');?>">
    <script src="<?php echo base_url("assets\bootstrap\js\bootstrap.min.js");?>"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

	<?php include_once "application/views/nav.php"?>
	<form method="post" style="padding:30px;">
	<div class="form-group row">
	<div class="col-md-5">
	<label  class="col-form-label">Cell Suspension:</label>
	
	<input type="radio" name="optradio" style="margin:10px;" >A cells</label>	
	<input type="radio" name="optradio"style="margin:10px;"  >B cells</label>
	<input type="radio" name="optradio"style="margin:10px;"  >C cells</label>
	<input type="radio" name="optradio" style="margin:10px;" >D cells</label>
	<input type="radio" name="optradio" style="margin:10px;" >Sensetional cells</label>
	</div>
	<div class="col-md-3">
	<label  class="col-form-label ">Bag Count:</label>
	<input type="text" name="bagcount"class="form-control">
	</div>
	
	</div>
	</div>

	<div class="form-group row">
	<div class="col-md-2">
	<label  class="col-form-label">Bag Barcodes:</label>
	</div>
	<label  class="col-form-label">1):</label>
	<div class="col-sm-3">
	
	<input type="text" class="form-control" >
	</div>
	<label  class="col-form-label">2):</label>
	<div class="col-sm-3">
	

	<input type="text" class="form-control" >
	</div>
	<label  class="col-form-label">3):</label>
	<div class="col-sm-3">
	
	<input type="text" class="form-control" >
	</div>
	</div>
	</div>

	<div class="form-group row">
	<div class="col-md-2">
	<label  class="col-form-label"></label>
	</div>
	<label  class="col-form-label">4):</label>
	<div class="col-sm-3">
	
	<input type="text" class="form-control" >
	</div>

	<label  class="col-form-label">5):</label>
	<div class="col-sm-3">
	
	<input type="text" class="form-control" >
	</div>

	</div>
	</div>


	<div class="form-group row">
		<div class="col-md-4">	
			<label class="col-form-label">:</label> 
            <input type="text" class="form-control" >
        </div>

		<div class="col-md-4">	
			<label class="col-form-label">DAT Point</label> 
            <input type="text" class="form-control" >
        </div>

	</div>

	<div class="form-group row">
	<div class="col-md-2">
	
	<label  class="col-form-label">Reactivity and Speciaity:</label>
	</div>

	<label  class="col-form-label">Anti A:</label>
	<div class="col-sm-1">
	
	
	<select type="text" class="form-control" id="item_name">
						<option></option>
						<option>..</option>
					</select>
	</div>
	<label  class="col-form-label">Anti A:</label>
	<div class="col-sm-1">
	
	
	<select type="text" class="form-control" id="item_name">
						<option></option>
						<option>..</option>
					</select>
	</div>
	<label  class="col-form-label">Anti A:</label>
	<div class="col-sm-1">
	
	
	<select type="text" class="form-control" id="item_name">
						<option></option>
						<option>..</option>
					</select>
	</div>
	<label  class="col-form-label">Anti A:</label>
	<div class="col-sm-1">
	
	
	<select type="text" class="form-control" id="item_name">
						<option></option>
						<option>..</option>
					</select>
	</div>
	<button type="button" class="btn btn-success" style="margin:5px;">Add</button>
	<button type="button" class="btn btn-danger"style="margin:5px;">Delete</button>

	</div>

	<div class="form-group row">
	<div class="col-md-2">
	
	<label  class="col-form-label"></label>
	</div>

	<label  class="col-form-label">Anti D1:</label>
	<div class="col-sm-1">
	
	
	<select type="text" class="form-control" id="item_name">
						<option></option>
						<option>..</option>
					</select>
	</div>
	<label  class="col-form-label">Anti D2:</label>
	<div class="col-sm-1">
	
	
	<select type="text" class="form-control" id="item_name">
						<option></option>
						<option>..</option>
					</select>
	</div>
	<label  class="col-form-label">Anti AH3:</label>
	<div class="col-sm-1">
	
	
	<select type="text" class="form-control" id="item_name">
						<option></option>
						<option>..</option>
					</select>
	</div>

</div>
<div class="card-new">
                    
                <div class="card text-center" >
                    
                <div class="card-body">
                        
                    
					<table class="table">
                            <thead>
                                <tr>
                                <th scope="col">Sr No</th>
                                <th scope="col">Cell</th>
                                <th scope="col">No. Of bag</th>
                                <th scope="col">Barcodes</th>
                                <th scope="col">Appearance </th>
								<th scope="col">Anti A </th>
								<th scope="col">Anti B </th>
								<th scope="col"> Anti AB </th>
								<th scope="col">Anti D </th>
								<th scope="col">Anti A1 </th>
								<th scope="col">Anti D1 </th>
								<th scope="col">Anti D2 </th>
                               
                                </tr>
                            </thead>
						</table>

					
				</div>
			</div>
		</div>

		<div class="form-group row" style="margin-top:30px;">
		<div class="col-md-4">	
		<label class="col-form-label">Expiry</label> 
                    
					<input type="date" id="today2" name="my_date" class="form-control" >
		</div>
		<div class="col-md-4">
		<label class="col-form-label">Prepared by:</label> 	
		<select type="text" class="form-control" id="item_name">
						<option></option>
						<option>..</option>
					</select>
		</div>
		<div class="col-md-4">
		<label class="col-form-label">Remarks:</label> 	
		<input type="text" class="form-control" id="item_name">
						
					
		</div>
		</div>
		<div class="but" style="text-align:center; margin:30px;">
		<button type="button" class="btn btn-success">Add</button>
                <button type="button" class="btn btn-danger" style="">Save</button>
                <button type="button" class="btn btn-warning">Cancel</button>
                <button type="button" class="btn btn-primary">Exit</button>
				<button type="button" class="btn btn-secondary">Edit</button>
            </div>

		</form>
		</body>
		</html>





	


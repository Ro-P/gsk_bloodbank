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
	<div class="form-group row" >

                    <label class="col-form-label ">Sample Received date:</label> 
                    <div class="col-sm-3">
                    	<input type="date" id="today" name="my_date" class="form-control" >
                    </div>
				
				<label  class="col-form-label ">Bag Count:</label>
				
                <div class="col-sm-2">
                <input type="text" class="form-control" id="bagcount">
                </div>
            
    </div>
	<div class="form-group row">	
		<label  class="col-form-label">Blood Component:</label>
					<div class="col-sm-3">
						<select type="text" class="form-control" id="component">
							<option></option>
							<option>..</option>
						</select>
					</div>

		
					<label  class="col-form-label">Blood BagBarcode:</label>
                <div class="col-sm-3">
                <input type="text" class="form-control" id="barcode">
                    
                </div>
	</div>

	<div class="form-group row">	
	<label class="col-form-label">Bleeding date:</label> 
                    <div class="col-sm-3">
                    	<input type="date" id="today" name="my_date" class="form-control" >
                    </div>

					<label class="col-form-label">Expiry date:</label> 
                    <div class="col-sm-3">
                    	<input type="date" id="today" name="my_date" class="form-control" >
                    </div>

	</div>

	<div class="form-group row">

		<label  class="col-form-label">Segment Number:</label>
                <div class="col-sm-3">
                <input type="text" class="form-control" id="barcode">
                    
                </div>

				<button type="button" class="btn btn-primary" style="margin:10px">Add</button>
				<button type="button" class="btn btn-danger" style="margin:10px">Delete</button>

	</div>
	<div class="card-new">
                    
                <div class="card text-center" >
                    
                <div class="card-body">
                        
                    
					<table class="table">
                            <thead>
                                <tr>
                                <th scope="col">Sr No</th>
                                <th scope="col">Component Date</th>
                                <th scope="col">BBarCode</th>
                                <th scope="col">Component</th>
                                <th scope="col"> Expiry Date</th>
                               
                                </tr>
                            </thead>
						</table>

					
				</div>
			</div>
		</div>

		<div class="form-group row" style="margin:30px;">

		<label  class="col-form-label">Segment Number:</label>
                <div class="col-sm-3">
                <input type="text" class="form-control" id="barcode">
                    
                </div>
		

		<label  class="col-form-label">Remarks:</label>
                <div class="col-sm-3">
                <input type="text" class="form-control" id="barcode">
                    
                </div>
		</div>

		<div class="but" style="text-align:center;">
		<button type="button" class="btn btn-success">Add</button>
                <button type="button" class="btn btn-danger" style="">Save</button>
                <button type="button" class="btn btn-warning">Cancel</button>
                <button type="button" class="btn btn-primary">Exit</button>
            </div>




	</form>

	<script>
           let today = new Date().toISOString().substr(0, 10);
            document.querySelector("#today").value = today;
            document.querySelector("#today1").value = today;
            document.querySelector("#today2").valueAsDate= new Date();

        </script>



</body>
</html>

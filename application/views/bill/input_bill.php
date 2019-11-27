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

<?php include_once 'application\views\nav.php'; ?>
<h2 style="text-align:center; margin:1%;">---Billing---</h2>
<form action="Bill_action" style="margin:2%;" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="text">Patient name:</label>
      <input type="text" class="form-control" id="patient_name" name="pat_name" placeholder="Enter the name">
    </div>
    <div class="form-group col-md-6">
      <label for="text">Hospital/Doctor's name:</label>
      <input type="text" class="form-control" id="hospital_name" name="hosp_name" placeholder="Hospital/Doctor's name">
    </div>
    <div class="form-group col-md-2">
      <label for="text">Blood group:</label>
      <input type="text" class="form-control" id="blood_grp" name="bgrp" placeholder="Blood Group">
  </div>
  
  
  
    <div class="form-group col-md-3">
      <label >Inv no:</label>
      <input type="text" class="form-control" id="invoice" name="invoice">
    </div>
    </div>
<div class="row">
    <div class="form-group col-md-3">
    <label >Product:</label>
      <input type="text" class="form-control" id="product" name="product">
    </div>
    <div class="form-group col-md-2">
      <label >Description</label>
      <input type="text" class="form-control" id="description" name="description">
    </div>
    <div class="form-group col-md-2">
      <label >Quantity</label>
      <input type="text" class="form-control" id="description" name="quantity">
    </div>
    <div class="form-group col-md-2">
      <label >Charges</label>
      <input type="text" class="form-control" id="charges" name="charges" >
    </div>
  </div>
</div>
<div class="row">
    <div class="form-group col-md-2">
      <label >Gross Amt:</label>
      <input type="text" class="form-control" id="gr_amt" name="gross" >    
    </div>  

    <div class="form-group col-md-2">
      <label >Discount:</label>
      <input type="text" class="form-control" id="discount" name="discount" >    
    </div> 
    <div class="form-group col-md-2">
      <label >Amount</label>
      <input type="text" class="form-control" id="=amount" name="amount" >    
    </div>   

</div>
  <div class="form-group">
   
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
  </div>
</form>
</body>
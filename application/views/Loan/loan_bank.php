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
button{
  all:unset;
}
</style>
<script>
function getdate(){

	var today = new Date();
	var dd = String(today.getDate()).padStart(2, '0');
	var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
	var yyyy = today.getFullYear();

	var newtoday = yyyy + '-' + mm + '-' + dd;

    document.getElementById("date").value = newtoday;
   // document.getElementById("supp_date").value = newtoday;
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
<body onload="getdate()" style="overflow-x : hidden";>
   
<div class="container-fluid">
    <button class="btn btn-primary back" style="margin-top : 1%"; type="button" ><a href="home" style="color:white";><i class="fa fa-arrow-left" style="color:white";></i> Back</a></button> 
    
    <div class="col-md-12" style="margin-right:2%; max-width:100%">
        <div class="row">
            <div class="col-md-6"><label>Loan Bank Name : </label><input type="text" class="form-control" id="lbname" name="lbname"/></div><div id='lb_name'></div>
            <br> <br><div class="col-md-6"><label>Loan type : </label><input type="text" class="form-control" id="ltype" name="ltype"/></div><div id='l_type'></div> 
        </div>
        <div class="row">
            <div class="col-md-6"><label>Address : </label><input type="text" class="form-control" id="address" name="address"/></div><div id='addr'></div>
            <div class="col-md-6"><label>State: </label><input type="text" class="form-control" id="state" name="state"/></div><div id='state_name'></div>
        </div>
        <div class="row">
            <div class="col-md-6"><label>Contact No: </label><input type="text" class="form-control" id="contact" name="contact"/></div><div id='contat_no'></div>
            <div class="col-md-6"><label>District: </label><input type="text" class="form-control" id="district" name="district"/></div><div id='district'></div>
        </div>   
        <div class="row"> 
            <div class="col-md-6"><label>License No : </label><input type="text" class="form-control" id="license" name="license"/></div><div id='license_no'></div>
            <div class="col-md-6"><label>City : </label><input type="text" class="form-control" id="city" name="city"/></div><div id='city_name'></div>
        </div>
        <div class="row">    
            <div class="col-md-6"><label>Contact Person Name : </label><input type="text" class="form-control" id="contact" name="contact"/></div><div id='cp_name'></div>
            <div class="col-md-6"><label>RBTC : </label>
                <div class="form-check"><input type="radio" class="form-check-control" id="yes" name="yes"/><label>Yes</label><div id="yes"></div></div>
                <div class="form-check"><input type="radio" class="form-check-control" id="yes" name="yes"/><label>No</label><div id="yes"></div></div>
        </div>
    </div>
    <div class="row">
    <div class="col-md-12">
        <div class="form-group"><label>Remark : </label><input type="text" class="form-control" id="remark" name="remark"/></div><div id='remark'></div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-6">
        <div class="form-group"><label>Date : </label><input type="date" class="form-control" id="date" name="date"/></div><div id='date'></div>
    </div></div>

</div>
<div align ="center">
    <div><button class="btn btn-danger" type="add" style="float:right; margin:1%">Exit</button></div>
    <div><button class="btn btn-warning" type="add" style="float:right; margin:1%">Cancel</button></div>
    <div><button class="btn btn-success" type="add"  data-toggle="modal" data-target="#existing" style="float:right; margin:1%">Add</button></div>
</div>
</body>
</html>
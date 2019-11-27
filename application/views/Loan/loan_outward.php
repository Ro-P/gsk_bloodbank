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

    document.getElementById("odate").value = newtoday;
    //document.getElementById("supp_date").value = newtoday;
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
       <label><h5><b>Loan Details</b></h5></label>
        <div class="row">
            <div class="col-md-9"><label>Loan outward for : </label><input type="text" class="form-control" id="lofor" name="lofor"/></div><div id='loan_outward'></div>
            <div class="col-md-3"><label>Bag count : </label><input type="text" class="form-control" id="bcount" name="bcount"/></div><div id='bag_count'></div> 
        </div>
        <div class="row">
            <div class="col-md-4"><label>Outward Date : </label><input type="date" class="form-control" id="odate" name="odate"/></div><div id='outward_date'></div>
            <div class="col-md-8"><label>Remark : </label><input type="text" class="form-control" id="lremark" name="lremark"/></div><div id='remark'></div> 
        </div>
        <br>
        <label><h5><b>Bar Code Details</b></h5></label>
        <div class="row">
            <div class="col-md-4"><label>Loan outward for : </label><input type="text" class="form-control" id="lofor" name="lofor"/></div><div id='loan_outward'></div>
            <div class="col-md-3"><label>Bag count : </label><input type="text" class="form-control" id="bcount" name="bcount"/></div><div id='bag_count'></div> &nbsp &nbsp
            <div class="col-md-1"><button class="btn btn-success" type="add" data-target="#existing" style="float:right; margin:35%">Add</button></div>
            <div class="col-md-1"><button class="btn btn-danger" type="add" style="float:right; margin:35%">Exit</button></div>
        </div>
        <div class="row">
            <label>Fetch component table</label>
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
			
        </tbody>
    </table>
        </div>
        
    </div>
    <div align ="center">
        <div><button class="btn btn-danger" type="add" style="float:right; margin:1%">Exit</button></div>
        <div><button class="btn btn-warning" type="add" style="float:right; margin:1%">Cancel</button></div>
        <div><button class="btn btn-success" type="add"  data-toggle="modal" data-target="#existing" style="float:right; margin:1%">Add</button></div>
    </div>

   
</body>
</html>
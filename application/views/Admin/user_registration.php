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

    document.getElementById("join_date").value = newtoday;
    document.getElementById("dob_date").value = newtoday;
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
    <button class="btn btn-primary back" style="margin-top : 1%"; type="button" ><a href="home" style="color:white";><i class="fa fa-arrow-left" style="color:white";></i> Back</a></button>
    
    <form style="padding-right: 0px;margin-right: 0px;margin-left: 0px;" method="post" action="user_registration_entry">

        <div class="form-row" style="margin-top : 1%";>
            <div class="form-group col-md-4"><label>First Name :</label><input type="text" class="form-control" name="fname"/></div>
            <div class="form-group col-md-4"><label>Middle Name :</label><input type="text" class="form-control" name="mname"/></div>
            <div class="form-group col-md-4"><label>Last Name :</label><input type="text" class="form-control" name="lname"/></div>
        </div>

        <div class="form-row" style="margin-top : 1%";>
            <div class="form-group col-md-4"><label>Login Required : </label>
      			<select class="form-control" id="sel1" name="login_required">
        			<option value="yes">Yes</option>
        			<option value="no">No</option>
      			</select>
            </div>
            <div class="form-group col-md-4"><label>Login Name : </label><input type="text" class="form-control" name="login_name"/></div>
            <div class="form-group col-md-4"><label>Login Password : </label><input type="password" class="form-control" name="login_password"/></div>
        </div>

        <div class="form-row" style="margin-top : 1%";>
            <div class="form-group col-md-4"><label>User Type : </label>
      			<select class="form-control" id="sel1" name="user_type">
        			<option value="abc">abc</option>
        			<option value="def">def</option>
      			</select>
            </div>
            <div class="form-group col-md-4"><label>Joining Date :</label><input type="date" class="form-control" id="join_date" name="joining_date" /></div>
            <div class="form-group col-md-4"><label>FDA Approved : </label>
      			<select class="form-control" id="sel1" name="fda_approved">
        			<option value="yes">Yes</option>
        			<option value="no">No</option>
      			</select>
            </div>
        </div>

        <div class="form-row" style="margin-top : 1%";>
            <div class="form-group col-md-4"><label>Date of Birth :</label><input type="date" class="form-control" id="dob_date" name="dob" /></div>
            <div class="form-group col-md-4"><label>Gender : </label>
      			<select class="form-control" id="sel1" name="gender">
        			<option value="male">Male</option>
        			<option value="female">Female</option>
      			</select>
            </div>
            <div class="form-group col-md-4"><label>Marital Status : </label>
      			<select class="form-control" id="sel1" name="marital_status">
        			<option value="single">Single</option>
        			<option value="married">Married</option>
      			</select>
            </div>
        </div>

        <div class="form-row" style="margin-top : 1%";>
            <div class="form-group col-md-4"><label>Mobile Number 1 : </label><input type="text" class="form-control" name="mobile_no1"/></div>
            <div class="form-group col-md-4"><label>Mobile Number 2 : </label><input type="text" class="form-control" name="mobile_no2" /></div>
            <div class="form-group col-md-4"><label>Email ID : </label><input type="email" class="form-control" name="email"/></div>
        </div>

        <div class="form-row" style="margin-top : 1%";>
            <div class="form-group col-md-6"><label>Permanent Address : </label><textarea class="form-control" name="permanent_add"/></textarea></div>
            <div class="form-group col-md-6"><label>Temporary Address : </label><textarea class="form-control" name="temporary_add"/></textarea></div>
        </div>

        <div class="form-row" style="margin-top : 1%";>
            <div class="form-group col-md-6"><label>Resume/CV :</label><div class="custom-file"><input type="file" class="custom-file-input" id="customFile1" name="resume" /><label class="custom-file-label" for="customFile1" />Choose File</label></div></div>
            <div class="form-group col-md-6"><label>Experience Letter :</label><div class="custom-file"><input type="file" class="custom-file-input" id="customFile2" name="experience" /><label class="custom-file-label" for="customFile2" />Choose File</label></div></div>
            <div class="form-group col-md-6"><label>FDA Certificate :</label><div class="custom-file"><input type="file" class="custom-file-input" id="customFile3" name="fda" /><label class="custom-file-label" for="customFile3" />Choose File</label></div></div>
            <div class="form-group col-md-6"><label>Address Proof :</label><div class="custom-file"><input type="file" class="custom-file-input" id="customFile4" name="address" /><label class="custom-file-label" for="customFile4" />Choose File</label></div></div>
            <div class="form-group col-md-6"><label>Other :</label><div class="custom-file"><input type="file" class="custom-file-input" id="customFile5" name="other" /><label class="custom-file-label" for="customFile5" />Choose File</label></div></div>
        </div>

    <div align ="center">
        <div><button class="btn btn-danger" type="close" style="float:right; margin:1%">Exit</button></div>
        <div><button class="btn btn-warning" type="reset" style="float:right; margin:1%">Cancel</button></div>
        <div><button class="btn btn-success" type="add"  data-toggle="modal" data-target="#existing" style="float:right; margin:1%">Add</button></div>
        <div><button class="btn btn-primary" type="submit" style="float:right; margin:1%">Submit</button></div>
    </div>
    </div>

    </form>
</body>
</html>

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
$(".custom-file-input").on("change", function(){
    var resume = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(resume);
});
$(".custom-file-input").on("change", function(){
    var experience = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(experience);
});
$(".custom-file-input").on("change", function(){
    var fda = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fda);
});
$(".custom-file-input").on("change", function(){
    var address = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(address);
});
$(".custom-file-input").on("change", function(){
    var other = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(other);
});
</script>
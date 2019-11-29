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
  .results tr[visible='false'], .no-result {
    display: none;
  }
	.modal-dialog{
		max-width:750px;
	}
	.row{
		display:flex;
		flex-wrap : wrap;
		justify-content : center;
	}
  
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
  .pull-left{
    width:40%;
  }

</style>


    <script>
function getdate(){

	var today = new Date();
	var dd = String(today.getDate()).padStart(2, '0');
	var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
	var yyyy = today.getFullYear();

	var newtoday = yyyy + '-' + mm + '-' + dd;

    document.getElementById("reg_date").value = newtoday;
    document.getElementById("deactivation_date").value = newtoday;
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
    <?php
      if(isset($_GET["success"])){
        ?>
          <div class="alert alert-success">
            <strong>Success!</strong> Indicates a successful or positive action.
          </div>
        <?php
      }
    ?>
    <form style="padding-right: 0px;margin-right: 0px;margin-left: 0px;" method="post" action="user_deactivation_action">

        <!-- <div class="form-row" style="margin-top : 1%";>
            <div class="form-group col-md-4"><label>Full Name :</label><input type="text" class="form-control" id="full_name"/></div>
            <div class="form-group col-md-4"><label>Login Name :</label><input type="text" class="form-control" id="login_name"/></div>
            <div class="form-group"><label><br></label>&nbsp;&nbsp;<button class="btn btn-primary" type="submit" style="float:right; margin:1%">Search</button></div>
            <div class="form-group col-md-4"><label>User Type : </label>
      			<select class="form-control" id="sel1">
        			<option>+</option>
        			<option>-</option>
      			</select>
            </div>        
        </div> -->

        <div class="form-row" style="margin-top : 1%";>
          <div class="form-group col-md-12" style="margin-right: 0px;"><label></label>
          <!-- Table of Existing Donors -->
			    <div>
          <div class="form-group pull-left">
            <label><b>Enter Full Name/Login Name :</b></label> 
            <input type="text" class="search form-control" placeholder="What you looking for?" />
          </div>
          <span class="counter pull-right"></span>
              <table class="table table-hover table-bordered results" style="display:block; height:400px; overflow-y:scroll;">
                <thead>
                  <tr>
                    <th>Sr no</th>
                    <th>User Type</th>
                    <th>Date of Joining</th>
                    <th>Full Name</th>
                    <th>Login Name</th>
                    <th>Gender</th>
                    <th>Date of Birth</th>
                    <th>Login Required</th>
                    <th>FDA Approved</th>
                    <th>Marital Status</th>
                    <th>Mobile Number</th>
                    <th>Email ID</th>
                    <th>Address</th>
                  </tr>
                  <tr class="warning no-result">
                    <td colspan="6"><i class="fa fa-warning"></i> No result</td>
                  </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach($all_user as $row): ?>
                  <tr onclick="enterdetails('<?=$row->name?>','<?=$row->joining_date?>','<?=$row->user_type?>','<?=$row->id?>')">
                    <td><?=$i?></td>
                    <!-- <td><?=$row->id;?></td> -->
                    <td><?=$row->user_type;?></td>
                    <td><?=$row->joining_date;?></td>
                    <td><?=$row->name;?></td>
                    <td><?=$row->login_name;?></td>
                    <td><?=$row->gender;?></td>
                    <td><?=$row->dob;?></td>
                    <td><?=$row->login_required;?></td>
                    <td><?=$row->fda_approved;?></td>
                    <td><?=$row->marital_status;?></td>
                    <td><?=$row->mobile_no1;?></td>
                    <td><?=$row->email;?></td>
                    <td><?=$row->permanent_add;?></td>
                  </tr>
			          <?php $i++; endforeach;?>
                </tbody>
              </table>
          </div>

        </div>
      </div>

        <div class="form-row" style="margin-top : 1%";>
            <div class="form-group col-md-4"><label>Full Name : </label><input type="text" class="form-control" id="full_name" name="full_name"/></div>
            <div class="form-group col-md-4"><label>Registration Date :</label><input type="date" class="form-control" id="reg_date" name="join_date" /></div>
            <div class="form-group col-md-4"><label>User Type : </label>
      			<select class="form-control" id="user_type" name="user_type">
        			<option>abc</option>
        			<option>no</option>
      			</select>
            </div>
        </div>

        <div class="form-row" style="margin-top : 1%";>
            <div class="form-group col-md-4"><label>Deactivation Date :</label><input type="date" class="form-control" id="deactivation_date" name="deactivation_date" /></div>
            <div class="form-group col-md-4"><label>Deactivation Reason : </label>
      			<select class="form-control" id="sel1">
        			<option>+</option>
        			<option>-</option>
      			</select>
            </div>
            <div class="form-group col-md-4"><label>Deactivation Type : </label>
      			<select class="form-control" id="" name="deactivation_date">
        			<option>1</option>
        			<option>2</option>
      			</select>
            </div>
            <input type="hidden" id="user_id" name="user_id">
        </div>

        <div class="form-row" style="margin-top : 1%";>
            <div class="form-group col-md-12" style="margin-right: 0px;"><label>Remarks :</label><textarea rows="3" class="form-control" id="patient"/></textarea></div>
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

<script>
function enterdetails(fname, rdate, utype,uid){
    document.getElementById("full_name").value = fname;
    document.getElementById("reg_date").value = rdate;
    document.getElementById("user_type").value = utype;
    document.getElementById("user_id").value = uid;
    // var fullname = name.split(" ");
    // document.getElementById("patient").value = name;   
}
</script>
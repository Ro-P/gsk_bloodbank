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

    document.getElementById("req_date").value = newtoday;
    // document.getElementById("to_date").value = newtoday;
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
    <button class="btn btn-primary back" style="margin-top : 1%"; type="button" ><a href="home" style="color:white";><i class="fa fa-arrow-left" style="color:white";></i> Back</a></button>
    
    <form style="padding-right: 0px;margin-right: 0px;margin-left: 0px;" method="post" action="../addRejDetails">

        <div class="form-row">
            <div class="form-group col-md-5"></div>
            <div class="form-group col-md-2"><input type="text" class="form-control" name="search" id="search" required autofocus placeholder="Enter the Bag's ID" /></div>
            <div class="form-group col-md-1"><button class="btn btn-primary" type="button" onclick="searchip()">Go</button></div>
            <!-- <div class="form-group" style="margin-top:1%;"><input type="text" class="search form-control" placeholder="What you looking for?" /></div><span class="counter pull-right"></span> -->
        </div>
        <div class="form-row">
            <label style="margin-top:1%"><b><button type="button" onclick="summary()">Summary</button> | <button type="button" onclick="testResult()">Test Result </button> | <label style="margin-top:1%"><button type="button" onclick="bagDetails()">Bag Details</button> | Cross Match & Issue Details | SAP-Transfusion Details | SAP-Adverse Reaction</b></label>
        </div>

        <div id="summary" style="display:block;">
        <div class="form-row" style="margin-top : 1%";>
            <div class="form-group col-md-3" style="margin-right: 0px;"><label>Blood Group :</label> <input style="border:none;" id="bloodgrp" readonly/></div>
            <div class="form-group col-md-3" style="margin-right: 0px;"><label>Gender :</label> <input style="border:none;" id="gender" readonly/></div>
            <div class="form-group col-md-3" style="margin-right: 0px;"><label>TTI Completed :</label> <input style="border:none;" id="" readonly/></div>
            <div class="form-group col-md-3" style="margin-right: 0px;"><label>TTI Validate :</label> <input style="border:none;" id="" readonly/></div>
            <div class="form-group col-md-3" style="margin-right: 0px;"><label>Reactive :</label> <input style="border:none;" id="" readonly/></div>
            <div class="form-group col-md-3" style="margin-right: 0px;"><label>NAT Test :</label> <input style="border:none;" id="" readonly/></div>
            <div class="form-group col-md-3" style="margin-right: 0px;"><label>NAT Validate :</label> <input style="border:none;" id="" readonly/></div>
            <div class="form-group col-md-3" style="margin-right: 0px;"><label>Component Prepared :</label> <input style="border:none;" id="" readonly/></div>
        </div>

    <div align ="center">
    <div><button class="btn btn-danger" type="close" style="float:right; margin:1%">Exit</button></div>
    <div><button class="btn btn-warning" type="reset" style="float:right; margin:1%">Cancel</button></div>
    <div><button class="btn btn-success" type="add"  data-toggle="modal" data-target="#existing" style="float:right; margin:1%">Add</button></div>
    <div><button class="btn btn-primary" type="submit" style="float:right; margin:1%">Submit</button></div>
    </div>
    </div>

    <!-- test results -->
    <div id="testResult" style="display:none;"><b>Hiiii</b></div>

    <!-- bag details -->
    <div id="bagDetails" style="display:none;">
      <div class="form-row" style="margin-top : 1%";>
            <div class="form-group col-md-4" style="margin-right: 0px;"><label>Comp Name :</label> <input style="border:none;" id="" readonly/></div>
            <div class="form-group col-md-4" style="margin-right: 0px;"><label>Loan Name :</label> <input style="border:none;" id="" readonly/></div>
            <div class="form-group col-md-4" style="margin-right: 0px;"><label></label> <input style="border:none;" id="" readonly/></div>
            <div class="form-group col-md-4" style="margin-right: 0px;"><label>Bag Type :</label> <input style="border:none;" id="" readonly/></div>
            <div class="form-group col-md-4" style="margin-right: 0px;"><label>Phlebotomy Date :</label> <input style="border:none;" id="" readonly/></div>
            <div class="form-group col-md-4" style="margin-right: 0px;"><label></label> <input style="border:none;" id="" readonly/></div>
            <div class="form-group col-md-4" style="margin-right: 0px;"><label>Less Qty :</label> <input style="border:none;" id="" readonly/></div>
            <div class="form-group col-md-4" style="margin-right: 0px;"><label>Donor Type :</label> <input style="border:none;" id="" readonly/></div>
            <div class="form-group col-md-4" style="margin-right: 0px;"><label>Donor ID Status :</label> <input style="border:none;" id="" readonly/></div>
            <div class="form-group col-md-4" style="margin-right: 0px;"><label>HIV-HbsAg-HCV :</label> <input style="border:none;" id="" readonly/></div>
            <div class="form-group col-md-4" style="margin-right: 0px;"><label>VDRL-MP :</label> <input style="border:none;" id="" readonly/></div>
            <div class="form-group col-md-4" style="margin-right: 0px;"><label>Component Ready :</label> <input style="border:none;" id="" readonly/></div>
      </div>
      <hr>
      <div class="form-row" style="margin-top : 1%";>
            <div class="form-group col-md-4" style="margin-right: 0px;"><label>BG Status :</label> <input style="border:none;" id="" readonly/></div>
            <div class="form-group col-md-4" style="margin-right: 0px;"><label>BG Tested By :</label> <input style="border:none;" id="" readonly/></div>
            <div class="form-group col-md-4" style="margin-right: 0px;"><label>Bag Type :</label> <input style="border:none;" id="" readonly/></div>
            <div class="form-group col-md-4" style="margin-right: 0px;"><label>BG Entry By :</label> <input style="border:none;" id="" readonly/></div>
            <div class="form-group col-md-4" style="margin-right: 0px;"><label>BG Test Date :</label> <input style="border:none;" id="" readonly/></div>
            <div class="form-group col-md-4" style="margin-right: 0px;"><label>BG Entry Date :</label> <input style="border:none;" id="" readonly/></div>
            <div class="form-group col-md-4" style="margin-right: 0px;"><label>BG Validated :</label> <input style="border:none;" id="" readonly/></div>
            <div class="form-group col-md-4" style="margin-right: 0px;"><label>BG Validated On :</label> <input style="border:none;" id="" readonly/></div>
            <div class="form-group col-md-4" style="margin-right: 0px;"><label>BG Validated By :</label> <input style="border:none;" id="" readonly/></div>
      </div>
      <hr>
      <div class="form-row" style="margin-top : 1%";>
            <div class="form-group col-md-6" style="margin-right: 0px;"><label>Centrifuge Status :</label> <input style="border:none;" id="" readonly/></div>
            <div class="form-group col-md-6" style="margin-right: 0px;"><label>Process Status :</label> <input style="border:none;" id="" readonly/></div>
            <div class="form-group col-md-6" style="margin-right: 0px;"><label>Centrifuge Done By :</label> <input style="border:none;" id="" readonly/></div>
            <div class="form-group col-md-6" style="margin-right: 0px;"><label>Process Done By :</label> <input style="border:none;" id="" readonly/></div>
            <div class="form-group col-md-6" style="margin-right: 0px;"><label>Centrifuge Done On :</label> <input style="border:none;" id="" readonly/></div>
            <div class="form-group col-md-6" style="margin-right: 0px;"><label>Process Done On :</label> <input style="border:none;" id="" readonly/></div>
      </div>
      <hr>
      <div class="form-row" style="margin-top : 1%";>
            <div class="form-group col-md-6" style="margin-right: 0px;"><label>NAT Validated On :</label> <input style="border:none;" id="" readonly/></div>
            <div class="form-group col-md-6" style="margin-right: 0px;"><label>NAT Validated By :</label> <input style="border:none;" id="" readonly/></div>
            <div class="form-group col-md-6" style="margin-right: 0px;"><label>Elisa Validated On :</label> <input style="border:none;" id="" readonly/></div>
            <div class="form-group col-md-6" style="margin-right: 0px;"><label>Elisa Validated By :</label> <input style="border:none;" id="" readonly/></div>
      </div>
    </div>

    </form>


    <!-- Modal -->
    <div id="existing" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Choose Patient</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">

      <table class="table table-hover table-bordered results">
                        <thead>
                            <tr>
                                <th>Sr no</th>
                                <th>ID</th>
                                <th>Patient Name</th>
                                <th>Req Date Time</th>
                                <th>B Group</th>
                                <th>Sex</th>
                            </tr>
                            <!-- <tr class="warning no-result">
                                <td colspan="4"><i class="fa fa-warning"></i> No result</td>
                            </tr> -->
                        </thead>
                        <tbody>
                            <?php $i=1; foreach($user as $row):?>
                            <tr>
                            <td><?=$i?></td>
                                <td><?=$row->blood_gr;?></td>
                                <!-- <td><?=$row->patient_name;?></td>
                                <td><?=$row->date;?></td>
                                <td><?=$row->bgrp;?></td>
                                <td><?=$row->sex;?></td> -->

                            </tr>
                            <?php $i++; endforeach;?>
                            
                        </tbody>
        </table>                    

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
    <!-- Modal End -->
</div>
</div>
</body>
</html>

<script>

function enterdetails(name,bgrp){
    document.getElementById("patient").value = name;
    document.getElementById("req_bg").value = bgrp;
    var fullname = name.split(" ");
    document.getElementById("patient").value = name;
    
}
</script>

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
  function searchip(){
    var search_ip = document.getElementById('search').value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var info = this.responseText;
        if(info === "Data Not Found\nEnter a Valid ID"){
          alert(info);
        }
        else{
          var array = info.split("^");
          document.getElementById('bloodgrp').value = array[0];
          document.getElementById('gender').value = array[1];
        }
      }
    };
    xhttp.open("GET", "getBloodgroup?id="+search_ip, true);
    xhttp.send();
  }

function summary(){
    document.getElementById("summary").style.display = "block";
    document.getElementById("testResult").style.display = "none";
    document.getElementById("bagDetails").style.display = "none";
    document.getElementById("").style.display = "none";
    document.getElementById("").style.display = "none";
    document.getElementById("").style.display = "none";
}

function testResult(){
    document.getElementById("summary").style.display = "none";
    document.getElementById("testResult").style.display = "block";
    document.getElementById("bagDetails").style.display = "none";
    document.getElementById("").style.display = "none";
    document.getElementById("").style.display = "none";
    document.getElementById("").style.display = "none";
}

function bagDetails(){
    document.getElementById("summary").style.display = "none";
    document.getElementById("testResult").style.display = "none";
    document.getElementById("bagDetails").style.display = "block";
    document.getElementById("").style.display = "none";
    document.getElementById("").style.display = "none";
    document.getElementById("").style.display = "none";
}
</script>

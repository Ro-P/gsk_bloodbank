<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	
	
	<script>
		print();
		window.close();

</script>
<script>
										var today = new Date();
										var dd = String(today.getDate()).padStart(2, '0');
										var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
										var yyyy = today.getFullYear();

										date = mm + '/' + dd + '/' + yyyy;
										
									</script>

<script>
var today = new Date();
var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
</script>


<html>
	<head>
	<title>

	</title>
	</head>

	<body>
	<style>
	#bill td, #bill th {
  border: 1px solid;
  padding: 8px;
}
#bill,h6,h5{
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}



	</style>


<form action="CM_Bill" method="post">
	<div  style="margin : 2%";>
	<table id="bill">
	<?php $i=1; foreach($recipients as $row):?>
		<tr>
		<th colspan=6>GSK blood bank</th>

		</tr>
		<tr>
			<td colspan=4>
			<div>
				
				Patient : <?php echo $row->patient_name ;?><br>
				Hospital/Dr:<?php echo $row->doctors_name ;?><br>
				Blood Group : <?php echo $row->bgrp;?><br>
			</div>
			</td>
			<td colspan=2>	
			<div>
					Inv.No<br>
					Date : <script>document.write(date);</script><br>
					Time : <script>document.write(time);</script><br>	

			</div>
			</td>
			</td>

			
			</tr>

			<tr>
				<th>Sr.No</th>
				<th>Product</th>
				<th>Description</th>
				<th>Quantity</th>
				<th>Charges</th>
				<th>Amount</th>
				</tr>
				
			<td colspan="3">

			</td>

			<th>PAID AMT</th>
			<th>Gross Amt</th>
			<th>0</th>
			</tr>

			<tr>
			<td colspan="4">
			<b>Remarks:<b>
			</td>
			<th>Discount</th>
			<th>--</th>
			</tr>

			<tr>
			<td colspan="4">
			<b>   <b>
			</td>
			<th>--</th>
			<th>--</th>
			</tr>
</table>

<br>
<h5>Receiver Sign:</b>
<h5 style="text-align: left">Issued By:</b>

<h6>Terms and condition:Blood/Component unit will be kept reserved for <b>3 Days Only</b>.Afterwords,it may be issued to other Patient.No refund will be given back.</h6>
</div>
</div>
</div>
	

    <!-- Modal content-->
	
    <!-- <div><button class="btn btn-danger" type="save">Save</button></div> -->
    <!-- Modal -->
    <!-- <div id="existing" class="modal fade" role="dialog">
  <div class="modal-dialog"> -->

    <!-- Modal content-->
    
	
      <!-- <table class="table table-hover table-bordered results">
                        <thead>
                            <tr>
                                <th>Sr no</th>
                                <th>ID</th>
                                <th>Patient Name</th>
                                <th>Req Date Time</th>
                                <th>B Group</th>
                                <th>Sex</th>
                            </tr>
                             <tr class="warning no-result">
                                <td colspan="4"><i class="fa fa-warning"></i> No result</td>
                            </tr> -->
                        <!-- </thead>
                        <tbody>
                            
                            </tr>
                           
                            
                        </tbody>
        </table>  --> 

      </div>
	  <?php $i++; endforeach;?>
	  </form>
      

  </div>
</div>
    
</div>
</div>

</body>
</html>

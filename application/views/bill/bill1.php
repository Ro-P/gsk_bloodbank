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

<?php $i=1; foreach($recipients_val as $row): ?>
    <td><?=$row->rec_id;?></td>
    <td><?=$row->patient_name;?></td>
    <td><?=$row->date;?></td>
	<td><?=$row->bgrp;?></td>
    <td><?=$row->sex;?></td>
    </tr>
<?php $i++; endforeach;?>


	<div  style="margin : 2%";>
	<table id="bill">
		<tr>
		<th colspan=6>GSK blood bank</th>

		</tr>
		<tr>
			<td colspan=4>
			<div>
				
				Patient : <?=$row->patient_name;?><br>
				Hospital/Dr:<br>
				Blood Group : <?=$row->bgrp;?><br>
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
	</body>
</html>


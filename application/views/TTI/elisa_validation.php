<html>

<style>
	.row{
		margin-top:2%;
	}

	.btn-last{
		background-color:#ABADEA;
		width:90%;
	}
</style>


<h4 align="center">ELISA Validation</h4>
<button class="btn btn-primary back" style="margin : 2%"; type="button" ><a href="../home" style="color:white";><i class="fa fa-arrow-left" style="color:white";></i> Back</a></button>

<div class="container1" style="margin:2%;">
	<div class="row">
		<div class="form-group col-md-3">
				<label>Collection Date :</label>
				<input type="date" class="form-control" id="test_date" name="test_date" /></div><div id='date_req'>
		</div>

		<div class="form-group col-md-3">
				<label>To :</label>
				<input type="date" class="form-control" id="test_date" name="test_date" /></div><div id='date_req'>
		</div>

		<div class="form-group col-md-2">
			<button class="btn btn-primary back" style="margin-top : 15%"; type="button" >Search Camp</a></button>
		</div>

		<div class="form-group col-md-4">
			<label>Camp :</label>
			<input type="text" class="form-control" id="bag_bar" name="bag_bar" />
		</div>
	</div>


	<div class="row">
		<div class="form-group col-md-4">
			<label>Donor ID :</label>
			<input type="text" class="form-control" id="bag_bar" name="bag_bar" />
		</div>

		<div class="form-group col-md-4">
			<label>To :</label>
			<input type="text" class="form-control" id="bag_bar" name="bag_bar" />
		</div>

	</div>

	<div class="row" style="padding:1%">
		<table class="table table-bordered table-hover results" style="margin:0px; border:5px;">
            <thead>
            	<tr>
                    <th>Phlebotomy Date</th>
					<th>Donor ID</th>
					<th>HIV</th>
					<th>HBsAg</th>
					<th>HCV</th>
					<th>Validation</th>
					<th>Remarks</th>
                </tr>   
            </thead>
			<tbody>
		        	<?php for($x = 0; $x <= 10; $x++){ ?>
                        <tr>
                            <td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td> 	
                        </tr>
					<?php }?>
                </tbody>
        </table>

	</div>

	<div class="row">
		<div class="col-4 my-1">
			<label class="mr-sm-2" for="inlineFormCustomSelect">Validated By</label>
			<select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
				<option selected></option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
		</div>
	</div>

</div>


<div class="container2" style="margin:2%;">
	<div class="row">
		<div class="col-3">
		</div>

		<div class="col-6">
			<div class="row">
				<div class="col-4">
					<button type="submit" class="btn btn-last">Update</button>
				</div>
				<div class="col-4">
					<button type="submit" class="btn btn-last" >Cancel</button>
				</div>
				<div class="col-4">
					<button type="reset" class="btn btn-last">Exit</button>
				</div>
			</div>
		</div>
		</div>

		<div class="col-3">
		</div>
	</div>
</div>
</html>
  
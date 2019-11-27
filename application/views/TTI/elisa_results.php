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

<h4 align="center">ELISA Results</h4>
<button class="btn btn-primary back" style="margin : 2%"; type="button" ><a href="../home" style="color:white";><i class="fa fa-arrow-left" style="color:white";></i> Back</a></button>


<div class="container1" style="margin:2%;">

	<div class="row">
		
			<div class="form-group col-md-3">
				<label class="mr-sm-2" for="inlineFormCustomSelect">Test Name</label>
				<select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
					<option selected></option>
					<option value="1">HIV</option>
					<option value="2">HBsAg</option>
					<option value="3">HCV</option>
					<option value="4">VDRL</option>
					<option value="5">MP</option>
					<option value="6">NAT</option>
				</select>
			</div>

			<div class="form-group col-md-3">
				<label class="mr-sm-2" for="inlineFormCustomSelect">Kit</label>
				<select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
					<option selected></option>
					<option value="1">Merilisa HIV 4th GEN</option>
					<option value="2">Qualisa HIV</option>
					<option value="3">JML HIV</option>
					<option value="4">JML HIV 12 Sample</option>
					<option value="5">HIV calibrator</option>
					<option value="6">HIV controls</option>
					<option value="7">HIV Electra</option>
				</select>				
			</div>

			<div class="form-group col-md-2">
				<label>Preparation Date :</label>
				<input type="date" class="form-control" id="test_date" name="test_date" /></div><div id='date_req'>
			</div>

			<div class="form-group col-md-2">
				<label>To :</label>
				<input type="date" class="form-control" id="test_date" name="test_date" /></div><div id='date_req'>
			</div>

			<div class="form-group col-md-2">
				<button class="btn btn-primary back" style="margin-top : 15%"; type="button" >Go</a></button>
			</div>
	</div>

	<div class="row">
		<div class="col-10">
		<table class="table table-bordered table-hover results" style="margin:0px; border:5px;">
                <thead>
                	<tr>
                        <th>Sr no</th>
						<th>Preparation Date</th>
						<th>Test Name</th>
						<th>Kit Type</th>
						<th>Kit Name</th>
						<th>Login Name</th>


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
								
                            
                            </tr>
						<?php }?>
                    </tbody>
                </table>
		</div>
		<div class="col-2">
			<p>0 rows found!!</p>
		</div>
	</div>


	<div class="row">
		<div class="form-group col-md-4">
			<label>Bag Barcode :</label>
			<input type="text" class="form-control" id="bag_bar" name="bag_bar" />
		</div>

		<div class="form-group col-md-1">
			<button class="btn btn-primary back" style="margin-top : 35%"; type="button" >Go</a></button>
		</div>
	</div>

	<div class="row">
		<div class="col-6" style="border:1px solid black;padding:0px;">
		<table class="table table-bordered table-hover results" style="margin:0px; border:5px;">
            <thead>
                <tr>
                    <th>Bar Code</th>
					<th>Test Result</th>
                </tr>   
            </thead>
			<tbody>
		        <?php for($x = 0; $x <= 10; $x++){ ?>
                    <tr>
                        <td></td>
						<td></td>                    
                    </tr>
				<?php }?>
            </tbody>
                </table>
		</div>

		<div class="col-6" style="padding-left:2%;">
			<form style="width:100%;">

				<div class="form-row">
					<div class="col-6 my-1">
						<label class="mr-sm-2" for="inlineFormCustomSelect">Test Name</label>
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

				
				<div class="form-row">
					<div class="col-4 my-1">
						<label>Test Date :</label>
						<input type="date" class="form-control" id="test_date" name="test_date" /></div><div id='date_req'>
					</div>

				</div>

				<div class="form-row">
					<div class="col-6 my-1">
						<label class="mr-sm-2" for="inlineFormCustomSelect">Test Method</label>
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


				<div class="form-row">
					<div class="col-6 my-1">
						<label class="mr-sm-2" for="inlineFormCustomSelect">Screened By</label>
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

				<div class="form-row">
					<div class="col-8 my-1">
						<label>Remark</label>
						<input type="text" class="form-control" id="bag_bar" name="bag_bar" />
					</div>
				</div>
			</form>
		</div>


	</div>

</div>


<div class="container2" style="margin:2%;">
	<div class="row">
		<div class="col-3">
		</div>

		<div class="col-6">
			<div class="row">
				<div class="col-3">
					<button type="submit" class="btn btn-last">Add</button>
				</div>
				<div class="col-3">
					<button type="submit" class="btn btn-last" >Save</button>
				</div>
				<div class="col-3">
					<button type="reset" class="btn btn-last">Cancel</button>
				</div>
				<div class="col-3">
					<button type="submit" class="btn btn-last">Exit</button>
				</div>
			</div>
		</div>
		</div>

		<div class="col-3">
		</div>
	</div>
</div>
</html>

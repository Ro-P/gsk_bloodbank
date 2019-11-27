<html>
<style>
	.form-check{
		margin:3%;
		margin-left:3%;
	}

	.btn-last{
		background-color:#ABADEA;
		width:90%;
	}

</style>

<h4 align="center">Quarantine to Stock</h4>
<button class="btn btn-primary back" style="margin : 2%"; type="button" ><a href="../home" style="color:white";><i class="fa fa-arrow-left" style="color:white";></i> Back</a></button>

<div class="container1" style="margin:2%;">
	<div class="row">
		<div class="col-5" style="border:1px solid black;">
			<div class="row" style="margin:1%;margin-bottom:0px;">
				<h5>Action Type</h5>
			</div>
			<div class="row">
				<div class="form-check">
					<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
					<label class="form-check-label" for="exampleRadios1">
						Pending
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
					<label class="form-check-label" for="exampleRadios2">
						Approve
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
					<label class="form-check-label" for="exampleRadios3">
						Discard-TTI
					</label>			
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
					<label class="form-check-label" for="exampleRadios3">
						Discard-Other
					</label>			
				</div>
			</div>
		</div>

		<div class="col-3 my-1">
			<label class="mr-sm-2" for="inlineFormCustomSelect">Component</label>
			<select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
				<option selected></option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
		</div>

		<div class="form-group col-md-3">
			<label>Bag ID :</label>
			<input type="text" class="form-control" id="bag_bar" name="bag_bar" />
		</div>

		<div class="form-group col-md-1">
			<button class="btn btn-primary back" style="margin-top : 34%"; type="button" >Refresh</a></button>
		</div>
	

	</div>

	<div class="row" style="padding:1%">
		<table class="table table-bordered table-hover results" style="margin:0px; border:5px;">
            <thead>
            	<tr>
                    <th>Bleeding Date</th>
					<th>Blood Bag</th>
					<th>BGroup</th>
					<th>TTD Result</th>
					<th>Components</th>
					<th>Approve/Discard</th>
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

	<div class="row">
		<div class="col-4 my-1">
			<label class="mr-sm-2" for="inlineFormCustomSelect">Released By</label>
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

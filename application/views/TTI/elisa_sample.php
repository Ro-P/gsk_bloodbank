<style>

	.col-md-7{
		margin-left: 1%;
		margin-right: 1%;
	}

	.form-row{
		margin-top:2%;
	}

	.btn-last{
		background-color:#ABADEA;
		width:90%;
	}
</style>

<html>
<h4 align="center">ELISA Sample Arrangement</h4>
<button class="btn btn-primary back" style="margin : 2%"; type="button" ><a href="../home" style="color:white";><i class="fa fa-arrow-left" style="color:white";></i> Back</a></button>


<div class = "container1" style="margin:2%;"><!-- Begin Container -->

	<div class = "row" style="margin:2%"><!-- Begin Row1 -->
		<div class = "col-md-2" style="border:0px;">
			<div>
	  			<br><br><br><br><br><br>
				<h6>UNDEFINED TESTS</h6>
			</div>
			<div></div>
		</div>

		<div class = "col-md-9">
			<form>
	    	<div class="row">
				<div class="form-group col-md-4">
					<label class="mr-sm-2" for="inlineFormCustomSelect">Test Name</label>
					<select class="custom-select mr-sm-2" id="test_name" name="test_name" onChange="changekit(this.value);">
						<option selected></option>
						<option value="HIV">HIV</option>
						<option value="HBsAg">HBsAg</option>
						<option value="HCV">HCV</option>
						<option value="VDRL">VDRL</option>
						<option value="MP">MP</option>
						<option value="NAT">NAT</option>
					</select>
				</div>
				<div class="form-group col-md-4">
					<label class="mr-sm-2" for="inlineFormCustomSelect">Kit</label>
					<select class="custom-select mr-sm-2" id="kit_type" name="kit_type">
						<option value="" disabled selected></option>
						
					</select>
				
				</div>
				<div class="form-group col-md-4"><label>Test Date :</label><input type="date" class="form-control" id="test_date" name="test_date" /></div><div id='date_req'></div>
	  		</div>

			<div class="row">
				<div class="form-group col-md-4"><label>Bag Barcode :</label><input type="text" class="form-control" id="bag_bar" name="bag_bar" /></div>
				<div class="form-group col-md-1" style="border:0px;"><button class="btn btn-primary back" style="margin-top : 50%"; type="button" >Add</a></button></div>
				<div class="form-group col-md-4"><label>Total Controls : </label><input type="text" class="form-control" id="to_date" name="to_date" /></div>
				<div class="form-group col-md-2" style="border:0px;"><button class="btn btn-primary back" style="margin-top : 22%"; type="button" >View NAT Pending</a></button></div>
	  		</div>
			</form>
	  	</div>
	</div><!-- Close Row 1 -->


	<div class = "row" style="margin:2%"><!-- Begin Row2 -->

		<div class="col-md-2" style="margin-left: 1%;margin-right: 1%;border: 1px solid;"><!-- Begin Col 1 -->
			<table class="table table-hover results" style="margin:0px; border:5px;">
                <thead>
                	<tr>
                        <th><b>Sr no</b></th>        
                    </tr>
                   
                    </thead>
					<tbody>
			        	<?php for($x = 0; $x <= 30; $x++){ ?>
                            <tr>
                                <td></td>
                            
                            </tr>
						<?php }?>
                    </tbody>
                </table>
		</div><!-- Close Col 1 -->
		
		
		
		<div class="col-md-7"><!-- Begin Col 2 -->

			<div class="row" style="border:1px solid black; height:300px;"><!-- Begin Row1 -->
				
			</div><!-- Close Row 1 -->

			<div class="row" style="margin-top:2%"><!-- Begin Row2 -->
				<form style="width:100%;">

				<div class="form-row">
					
					<label class="mr-sm-2" for="inlineFormCustomSelect">Item Name</label>
					<select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
						<option selected></option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</div>

				<div class="form-row">
					<label class="mr-sm-2" for="inlineFormCustomSelect">Company</label>
					<select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
						<option selected></option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</div>

				<div class="form-row align-items-center">
					<div class="col-6 my-1">
						<label class="mr-sm-2" for="inlineFormCustomSelect">Lot No.</label>
						<select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
							<option selected></option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</div>
					<div class="col-3 my-1">
						<button type="submit" class="btn btn-primary " style="margin-top:15%">Add Lot No.</button>
					</div>
					<div class="col-3 my-1">
						<button type="submit" class="btn btn-primary" style="margin-top:15%">Clear Lot No.</button>
					</div>
				</div>

				<div class="form-row align-items-center">
					<div class="col-4 my-1">
						<label>Total Tests</label>
						<input type="text" class="form-control" id="bag_bar" name="bag_bar" />
					</div>
					<div class="col-4 my-1">
						<label>Used Tests</label>
						<input type="text" class="form-control" id="bag_bar" name="bag_bar" />
					</div>
					<div class="col-4 my-1">
						<label>Remaining Tests</label>
						<input type="text" class="form-control" id="bag_bar" name="bag_bar" />
					</div>
				</div>

				<div class="form-row">
					<label class="mr-sm-2" for="inlineFormCustomSelect">Tested By</label>
					<select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
						<option selected></option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</div>

				<div class="form-row">
					<label>Remark</label>
					<input type="text" class="form-control" id="bag_bar" name="bag_bar" />
				</div>

				
			</div><!-- Close Row 2 -->




		</div><!-- Close Col 2 -->
		

		
		<div class="col-md-2" style="margin-left: 1%;margin-right: 1%;border: 1px solid;"><!-- Begin Col 3 -->
			
		</div><!-- Close Col 3 -->
		





	</div><!-- Close Row2 -->
	

</div><!-- Close Container -->

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

<script>

var kitsByTests = {
    HIV: ["Merilisa HIV 4th GEN", "Qualisa HIV", "JML HIV", "JML HIV 12 Sample","HIV calibrator","HIV controls","HIV Electra"],
    HBsAg: ["A1", "B1", "C1", "D1"],
    HCV: ["A2", "B2", "C2", "D2"],
	VDRL: ["A3", "B3", "C3", "D3"],
	MP: ["A4", "B4", "C4", "D4"],
	NAT: ["A5", "B5", "C5", "D5"]

}

function changekit(value) {
    if (value.length == 0) document.getElementById("kit_type").innerHTML = "<option></option>";
    else {
        var kitOptions = "<option></option>";
        for (kitId in kitsByTests[value]) {
            kitOptions += "<option>" + kitsByTests[value][kitId] + "</option>";
	    }
        document.getElementById("kit_type").innerHTML = kitOptions;
    }
}

</script>

</html>

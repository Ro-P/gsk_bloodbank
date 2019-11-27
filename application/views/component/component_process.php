<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
    <title>GSK -Component Process</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/fontawesome-all.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/font-awesome.min.css');?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Navigation-Clean.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css');?>">
    <script src="<?php echo base_url("assets\bootstrap\js\bootstrap.min.js");?>"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <body>
    <?php include_once 'application\views\nav.php'?>
      <form style="margin:2%";>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label>Process</label>
          <select id="process" class="form-control" name="process">
          <option></option>
          <option>WB</option>
          <option>PRC+FTP</option>
          <option>PRC+FTP+PC</option>
          <option>PRC+FTP+PC+Buffy coat</option>
          <option>PRC To PRC + PRC-Aliquot-A</option>
          <option>PRC To PRC + PRC-Aliquot-A + PRC-Aliquot-B</option>
          <option>PRC-Aloiquot-A To  PRC-Aliquot-A + PRC-Aliquot-B </option>
          </select>
        </div>
      <div class="form-group col-md-2">
        <label>Max Process Hrs</label>
        <input type="text" class="form-control" id="hours" name="hrs" >
      </div>
    
    <div class="form-group col-md-2">
      <label >Bag Count</label>
      <input type="text" class="form-control" id="bag_count" name="bag_count">
    </div>
    <div class="form-group col-md-2"">
      <label >Duration</label>
      <input type="text" class="form-control" id="duration" name="duration" >
  </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label>BAG ID</label>
     <input type="text" class="form-control" id="bag_id" name="bag_id">
    
     </div>
    
     <!-- Button trigger modal -->
     <div class="form-group col-md-1">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#go" style="margin:25%;">
 GO
</button>


<!-- Modal -->
<div class="modal fade" id="go" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Process</h5>
      
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <table class="table">
  <thead>
    <tr>
      <th scope="col">sr no.</th>
      <th scope="col">BBarcode</th>
      <th scope="col">Collection Date Time</th>
      <th scope="col">Process Hrs</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>BB122324</td>
      <td>06/5/2020</td>
      <td>22</td>
    </tr>
   
  </tbody>
</table>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>

    <div class="form-group col-md-2">
      <label >Machine</label>
      <select id="machine" class="form-control" name="machine">
        <option></option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label >Program</label>
      <select id="program" class="form-control" name="program">
        <option></option>
      </select>
    </div>
  </div>
  </div>
  
  <div class="row">
  <div class="col-sm-6">
    <div class="card" style="padding:20px;">
      <div class="card-body">
        <p class="card-text">
        <div class="row">
        
        <label>BAG ID:  </label>
        <div class="col-sm-3">
     <input type="text" class="form-control col-md-8" id="bag_id" name="bag_id">
     </div>
     <div class="col-sm-2">
     <button type="button" class="btn btn-success" >Add</button>
     </div>
     <div class="col-sm-2">
     <button type="button" class="btn btn-danger" >Delete</button>
     </div>
     </p>
     </div>
     <div class="row">
     <div class="col-sm-6">
     <label style="padding-top:20px;">Preparation Date:</label>
     <input type="text" class="form-control col-md-8" id="prep_date" name="prep_date" >
      </div>

      <div class="col-sm-6">
     <label style="padding-top:20px;">Prepared By:</label>
     <input type="text" class="form-control col-md-8" id="prep_by" name="prep_by">
      </div>
    </div>
     <label style="padding-top:20px;">Remarks</label>
     <input type="text" class="form-control col-md-8" id="Remarks" name="Remarks" >
      </div>
  </div>
  </div>
  </div>
  <div class="but" style="text-align:center;padding-top:20px;">
  
  <button type="button" class="btn btn-success" >Add</button>
  
  <button type="button" class="btn btn-primary" >Edit</button>
  
  
  <button type="button" class="btn btn-success" >Save</button>
  <button type="button" class="btn btn-danger" >Cancel </button>
  <button type="button" class="btn btn-warning" >Delete</button>
  <button type="button" class="btn btn-success" >Exit</button>

  
  
  </div>
  </div>
  
</form>


    </body>

</html>



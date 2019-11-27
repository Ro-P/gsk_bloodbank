<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
    <title>GSK-Component_Separation</title>
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
                </select>
            </div>
            <div class="form-group col-md-1">
            </div>
            <div class="col-md-4">
                <label> Component Extractor </label>
                <select id="extractor" name="extractor" class="form-control">
                <option></option>
                <option>..</option>
            </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label>Under Process:</label> 
                <input type="text" id="under_process" name="under_process" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label ">Components:</label>
                <select id="component" class="form-control" name="component">
                <option></option>
                <option>..</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label>BAG ID:</label> 
                <input type="text" id="bag_id" name="bag_id" class="form-control">
            </div>
            <div>
                <button type="button" class="btn btn-success" style="margin:38%" data-toggle="modal" data-target="#search" >Search</button>
               
            <div class="modal fade bd-example-modal-lg" id="search" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
             <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Separation</h5>
            
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Bag Barcode</th>
                <th scope="col">Collection Date time</th>
                <th scope="col">Gender</th>
                <th scope="col">Component</th>
                <th scope="col">Segment No.</th>
                <th scope="col">Result</th>
                <th scope="col">Weight</th>
                <th scope="col">SAGM</th>
                <th scope="col">Transfer</th>
                </tr>
             </thead>
        <tbody>
            <tr>
            <th scope="row">1BB122324</th>
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
        
    </div>
    <div class="form-row" style="padding:50px;">
            <div class="form-group col-md-3">
                <label>Preparation Date:
                <input type="date" id="today" name="my_date" class="form-control" >
                </label> 
            </div>

            <div class="form-group col-md-3">
                <label>Storage Date:
                <input type="date" id="today2" name="my_date" class="form-control" >
                </label> 
            </div>
    
    
        
            <div class="form-group col-md-3">
                
            
                <label>Separated By:
                <select id="separated_by" name="separated_by" class="form-control col-md-12">
                <option></option>
                <option>..</option>
            </select>
                </label> 
            </div>

            <div class="form-group col-md-3">
                <label>Storage Done By:
                <select id="Storsge_done_by" name="storage_done" class="form-control col-md-12">
                <option></option>
                <option>..</option>
            </select>
                </label> 
            </div>
            </div>
            <div class="but" style="text-align:center;">
                
                <button type="button" class="btn btn-success" style="">Save </button>
                <button type="button" class="btn btn-warning">Cancel</button>
                <button type="button" class="btn btn-danger">Exit</button>
            </div>
    </div>
        </form>
        <script>
           let today = new Date().toISOString().substr(0, 10);
            document.querySelector("#today").value = today;
        
            document.querySelector("#today2").valueAsDate= new Date();
        </script>
    </body>

    </html>
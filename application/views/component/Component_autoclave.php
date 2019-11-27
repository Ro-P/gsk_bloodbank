<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
    <title>GSK-Component_Autoclave</title>
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

            <form method="post" style="margin:2%">
            <div class="form-group row">
                <label  class="col-form-label">Bag BarCode:</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="bbarcode">
                    </div>

                    <label  class="col-form-label">Component:</label>
                    <div class="col-sm-2">
                        <select class="form-control" id="component">
                            <option>.</option>
                        </select>
                    </div>

                    <label  class="col-form-label">Blood Group:</label>
                    <div class="col-sm-2">
                        <select class="form-control" id="bgrp">
                            <option>.</option>
                        </select>
                    </div>

                    <div class="col-sm-2">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#search">Search</button>
                        <!-- modal -->
                            <div id="search" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Modal Header</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Some text in the modal.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>

                                </div>
                             </div>


                        <!-- modal end -->

                    </div>
                
                </div>
                <div class="row">
                    <div class="col-sm-5">
                    <div class="card-new" style="padding-top:100px;">
                        <div class="card text-center" >
                        
                            <div class="card-body">
                            
                                <p class="card-text">
                                    <div class="form-group row">
                                            <label  class="col-form-label">Blood Barcode:</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="bag_id">
                                            </div>

                                            <label  class="col-form-label">Component:</label>
                                            <div class="col-sm-4">
                                                <select class="form-control" id="component">
                                                    <option>.</option>
                                                </select>
                                            </div>

                                    
                                        <div class="but" style="float:right; padding-top:20%">
                                            <button type="button" class="btn btn-warning">Delete</button>
                                        </div>
                                    
                                    </div>

                                </p>
                            </div>

                         </div>  

                         </div>
                    </div>


                   
               
             
             
             

                <div class="col-sm-6">

                    <div class="card-new" style="padding-top:100px;">
                        <div class="card text-center" >
                        
                            <div class="card-body">
                            
                                <p class="card-text">
                                    <div class="form-group row">
                                            <label  class="col-form-label col-sm-3">Blood Barcode:</label>
                                            <div class="col-sm-5">
                                             <input type="date" id="today" name="my_date" class="form-control" >
                                            </div>

                                    </div>

                                    <div class="form-group row">
                                            <label  class="col-form-label col-sm-3">End:</label>
                                            <div class="col-sm-5">
                                             <input type="date" id="today1" name="my_date" class="form-control" >
                                            </div>

                                    </div>
                                    <div class="form-group row">
                                            <label  class="col-form-label col-sm-3">Bio Disposal Agency:</label>
                                            <div class="col-sm-5">
                                             <select id=" agency" name="my_date" class="form-control" >
                                             <option> </option>
                                             <option>.... </option>
                                             </select>
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                            <label  class="col-form-label col-sm-3">Autoclave By:</label>
                                            <div class="col-sm-5">
                                             <select id=" agency" name="my_date" class="form-control" >
                                             <option> </option>
                                             <option>.... </option>
                                             </select>
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                            <label  class="col-form-label col-sm-3">Disposal Date:</label>
                                            <div class="col-sm-5">
                                             <input type="date" id="today2" name="my_date" class="form-control" >
                                            </div>

                                    </div>
                                    <div class="form-group row">
                                            <label  class="col-form-label col-sm-3">Checked By:</label>
                                            <div class="col-sm-5">
                                             <select id=" agency" name="my_date" class="form-control" >
                                             <option> </option>
                                             <option>.... </option>
                                             </select>
                                            </div>
                                    </div>

                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                
            </div>
            </div>
            <div class="but" style="text-align:center;padding:30px;">
                
                <button type="button" class="btn btn-danger" >Add</button>
                <button type="button" class="btn btn-warning">Edit</button>
                <button type="button" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger">Cancel</button>
                <button type="button" class="btn btn-success">Exit</button>

            </div>


        </form>

        </form>
        <script>
           let today = new Date().toISOString().substr(0, 10);
            document.querySelector("#today").value = today;
            document.querySelector("#today1").value = today;
            document.querySelector("#today2").value = today;
        
          
        </script>



        </body>

</html>
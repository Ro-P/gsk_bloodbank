<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
    <title>GSK-Component_Discard</title>
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
        <form method="post" style="padding:30px;">
            <div class="form-group row">
                <label  class="col-form-label">Blood BarCode:</label>
                <div class="col-sm-3">
                <input type="text" class="form-control" id="bbarcode">
                </div>
            
           
                <label  class="col-form-label">Component:</label>
                <div class="col-sm-3">
                <select type="text" class="form-control" id="component">
                    <option></option>
                    <option>..</option>
                </select>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="Expired_check">
                    <label class="form-check-label" for="gridCheck1">
                    Show only Expired
                    </label>
                </div>
            </div>

            <div class="form-group row" >
                    <label class="col-form-label">Expiry Date:</label> 
                    <div class="col-sm-3">
                    <input type="date" id="today" name="my_date" class="form-control" >
                    </div>
                
                    
                    <label>To</label>
                    <div class="col-sm-3">
                    <input type="date" id="today1" name="my_date" class="form-control" >
                    </div>

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#go">Go</button>
                    <div class="modal fade bd-example-modal-lg" id="go" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                <th scope="col">Sr No</th>
                                <th scope="col">Component Date</th>
                                <th scope="col">BBarCode</th>
                                <th scope="col">Component</th>
                                <th scope="col"> Expiry Date</th>
                               
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
            <div class="card-new" style="padding-top:100px;">
                <div class="card text-center" >
                    
                <div class="card-body">
                        
                    <p class="card-text">
                        <div class="form-group row">
                                <label for="inputEmail3" class="col-form-label">BAG ID:</label>
                                <div class="col-sm-3">
                                <input type="text" class="form-control" id="bag_id">
                                </div>

                                
                            <label for="inputPassword3" class="col-form-label">Component:</label>
                            <div class="col-sm-3">
                            <select type="text" class="form-control" id="component">
                                <option></option>
                                <option>..</option>
                            </select>
                            </div>
                                <button type="button" class="btn btn-danger">Remove</button>
                            
                        </div>
                        
                    
                        <div class="form-group row" >
                            <label class="col-form-label">Discard Date:</label> 
                            <div class="col-sm-3">
                                <input type="date" id="today2" name="my_date" class="form-control" >
                            </div>

                            <label for="inputPassword3" class="col-form-label">Discard Reason:</label>
                                <div class="col-sm-3">
                                    <select type="text" class="form-control" id="reason">
                                        <option></option>
                                        <option>..</option>
                                    </select>
                                </div>

                                <label for="inputPassword3" class="col-form-label">Discard By:</label>
                                <div class="col-sm-3">
                                    <select type="text" class="form-control" id="component">
                                        <option></option>
                                        <option>..</option>
                                    </select>
                                </div>
                        </div>
                        <div class="form-group row" >
                            <label class="col-form-label">Discard Method</label> 
                            <div class="col-sm-10">
                                <select type="text" id="method" name="my_date" class="form-control" >
                                    <option></option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row" >
                            <label class="col-form-label">Remarks:</label> 
                            <div class="col-sm-10">
                                <input type="text" id="method" name="my_date" class="form-control" >
                                    
                            </div>
                        </div>

                        
                     </p>    
                </div> 
                        
                    </div>
                    
                    <div class="card-footer text-muted">
                        
                    </div>
                    </div>
            </div>
            <div class="but" style="text-align:center;">
                
                <button type="button" class="btn btn-danger" style="">Discard</button>
                <button type="button" class="btn btn-warning">Cancel</button>
                <button type="button" class="btn btn-primary">Exit</button>
            </div>

        </form>
        <script>
           let today = new Date().toISOString().substr(0, 10);
            document.querySelector("#today").value = today;
            document.querySelector("#today1").value = today;
            document.querySelector("#today2").valueAsDate= new Date();

        </script>
    </body>


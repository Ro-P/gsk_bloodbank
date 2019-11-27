<div class="col-md-3">
    <div  style="margin-top:40px;">
        <div data-toggle="modal" data-target="#admin" class="text-monospace text-uppercase text-center border rounded border-success shadow" data-bs-hover-animate="bounce" style="padding: 50px;">
            <p style="cursor:pointer;" >Admin</p>
        </div>
    </div>
</div>

<div id="admin" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Admin</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      <ul class="list-group">
      <!-- Menu 1-->
        <li class="list-group-item"><a data-toggle="collapse" href="#collapse1">User</a></li>
            <!-- Sub Menu 1-->
            <div id="collapse1" class="panel-collapse collapse">
                <ul class="list-group">
                    <li class="list-group-item"><a href="user_registration">&#187; Registration</a></li>
                    <li class="list-group-item"><a href="user_permission">&#187; Permission</a></li>
                    <li class="list-group-item"><a href="user_deactivation">&#187; Deactivation</a></li>
                </ul>  
            </div>
        <li class="list-group-item"><a data-toggle="collapse" href="#collapse2"><a href="bill_delete">Bill Delete</a></li>
        <li class="list-group-item"><a data-toggle="collapse" href="#collapse3"><a href="patient_detail_edit">Patient Detail Edit</a></li>
        </ul>   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
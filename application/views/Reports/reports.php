<div class="col-md-3">
    <div  style="margin-top:40px;">
        <div data-toggle="modal" data-target="#reports" class="text-monospace text-uppercase text-center border rounded border-success shadow" data-bs-hover-animate="bounce" style="padding: 50px;">
            <p style="cursor:pointer;" >Reports</p>
        </div>
    </div>
</div>

<div id="reports" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Reports</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      <ul class="list-group">
      <!-- Menu 1-->
        <li class="list-group-item"><a data-toggle="collapse" href="#collapse1">Reports</a></li>
            <!-- Sub Menu 1-->
            <div id="collapse1" class="panel-collapse collapse">
                <ul class="list-group">
                    <li class="list-group-item"><a href="daily_reports">Daily Reports</a></li>
                    <li class="list-group-item"><a href="donor_reports">Donor Reports</a></li>
                    <li class="list-group-item"><a href="recipient_reports">Recipient Reports</a></li>
                </ul>  
            </div>
            <!-- Sub Menu1 End -->
        </ul>   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
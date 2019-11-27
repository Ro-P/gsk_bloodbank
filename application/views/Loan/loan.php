<div class="col-md-3">
    <div  style="margin-top:40px;">
        <div data-toggle="modal" data-target="#loan" class="text-monospace text-uppercase text-center border rounded border-success shadow" data-bs-hover-animate="bounce" style="padding: 50px;">
            <p style="cursor:pointer;" >Loan</p>
        </div>
    </div>
</div>

<div id="loan" class="modal fade" role="dialog">
  <div class="modal-dialog" style="max-width:750px;">

    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Loan</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      <ul class="list-group">
      <!-- Menu 1-->
        <li class="list-group-item"><a data-toggle="collapse" href="#collapse1"><b>Loan</b></a></li>
            <!-- Sub Menu 1-->
            <div id="collapse1" class="panel-collapse collapse">
                <ul class="list-group">
                    <li class="list-group-item"><a href="loan_bank">Loan Bank Master</a></li>
                    <li class="list-group-item"><a href="loan_request">Loan Request</a></li>
                    <li class="list-group-item"><a href="loan_outward">Loan Outward</a></li>
                    <li class="list-group-item"><a href="allot_fraction">Allot for Fractionation</a></li>
                    <li class="list-group-item"><a href="send_fraction">Send to Fractionation</a></li>
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
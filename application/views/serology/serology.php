<!-- Col 2 -->
<div class="col-md-3">
                <div data-toggle="modal" data-target="#serology" class="text-monospace text-uppercase text-center border rounded border-success shadow" data-bs-hover-animate="bounce" style="padding: 50px;">
                    <p style="cursor:pointer;" >Serology</p>
                </div>
</div>

<div id="serology" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Serology</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      <ul class="list-group">
      <!-- Menu 1-->
        <li class="list-group-item"><a data-toggle="collapse" href="#collapse1">Patient BG & AB Screening</a></li>
            <!-- Sub Menu 1-->
            <div id="collapse1" class="panel-collapse collapse">
                <ul class="list-group">
                    <li class="list-group-item"><a href="bg_group">BG Grouping</a></li>
                    <li class="list-group-item"><a href="patient_bg_validation">BG validation</li>
                    <li class="list-group-item">Three</li>
                </ul>  
            </div>
            <!-- Sub Menu1 End -->
        <!-- Menu2 -->
        <li class="list-group-item"><a data-toggle="collapse" href="#collapse2">Donor BG </a></li>
            <!-- Sub Menu2 -->
            <div id="collapse2" class="panel-collapse collapse">
                <ul class="list-group">
                    <li class="list-group-item"><a href="donor_bg_group">Donor BG Grouping</a></li>
                    <li class="list-group-item">BG validation</li>
                    <li class="list-group-item">Three</li>
                </ul>  
            </div>
        <!-- Menu2 End -->
    </ul>   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
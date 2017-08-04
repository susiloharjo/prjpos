<!-- start body -->
<div class="container-fluid">

<!-- <div class="col-lg-12">
  <div class="panel panel-default">
    <div class="panel-body">
      <h3>PROJECT</h3>
    </div>
  </div>
</div> -->
<div class="col-lg-3 col-md-6 col-sm-12">
  <!-- Panel -->
  <div class="panel panel-warning">
    <div class="panel-heading">
      <h3 class="panel-title">Project</h3>
      <h2><span class="glyphicon glyphicon-plus-sign icon-putih pull-right"></span></h2>
    </div>
    <div class="panel-body">
      <ul>
        <li>Project KPC</li>
        <li>Project KPC</li>
        <li>Project KPC</li>
        <li>Project KPC</li>
      </ul>
    </div>
  </div>
  <!-- End Panel -->
</div>
<!-- End col -->
<div class="col-lg-3 col-md-6 col-sm-12">
  <!-- Panel -->
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">To Do List</h3>
    </div>
    <div class="panel-body">
      Personal To Do List
      <ul>
        <li>UI/ UX</li>
        <li>Backend</li>
        <li>Flow</li>
      </ul>
    </div>
  </div>
  <!-- End Panel -->
</div>
<!-- End col -->
<div class="col-lg-3 col-md-6 col-sm-12">
  <!-- Panel -->
  <div class="panel panel-danger">
    <div class="panel-heading">
      <h3 class="panel-title">Panel success</h3>
    </div>
    <div class="panel-body">
      Panel content
    </div>
  </div>
  <!-- End Panel -->
</div>
<!-- End col -->
<div class="col-lg-3 col-md-6 col-sm-12">
  <!-- Panel -->
  <div class="list-group">
  <a href="#" class="list-group-item active">
    Cras justo odio
  </a>
    <ul class="list-group">
      <li class="list-group-item">
        <span class="badge">14</span>
        Cras justo odio
      </li>
      <li class="list-group-item">
        <span class="badge">2</span>
        Dapibus ac facilisis in
      </li>
      <li class="list-group-item">
        <span class="badge">1</span>
        Morbi leo risus
      </li>
  </ul>
</div>
  <!-- End Panel -->
</div>
<!-- End col -->


</div>
<!-- container-fluid -->


<!-- popup notif -->

<!-- end popup -->

<!-- Footer -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script>
        $(function() {
            $('#notif').modal({
                keyboard: true
            });
            // remove modal backdrop
            $('.modal-backdrop').removeClass("modal-backdrop");
        });
        function hide() {
                $('#notif').modal('hide');
            }
            // hide backdrop after 2 sec
        setTimeout('hide()', 3000);
    </script>
  </body>

<!-- modal -->
<div class="modal fade" id="notif" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:250px;height:3%;">
        <div class="modal-content" style="background-color:#333; color:#333;">
            <div class="modal-body">
                <div id="left">
                    <div>
                        <center>
                            <p><font color="white">Welcome Back <?php echo $this->session->userdata('nama'); ?></font>
                            </p>
                        </center>
                    </div>

                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

</html>

<!-- start body -->
<div class="container-fluid">
<div class="col-lg-4 col-md-6 col-sm-12">
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
<div class="col-lg-4 col-md-6 col-sm-12">
  <!-- Panel -->
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Project Monitor</h3>
    </div>
    <div class="list-group">

      <ul class="list-group">
        <li class="list-group-item">
          <span class="badge">14 %</span>
          Radio Trunking
        </li>
        <li class="list-group-item">
          <span class="badge">40 % </span>
          Ring Palapa Project
        </li>
        <li class="list-group-item">
          <span class="badge">20 %</span>
        Telkom project
        </li>
    </ul>
  </div>
  <!-- End Panel -->
</div>
<!-- End col -->




</div>
<!-- container-fluid -->

<div class="col-lg-12 col-md-6 col-sm-12">
  <!-- Panel -->
  <div class="panel panel-warning">
    <div class="panel-heading">
      <button class="btn btn-success pull-right" data-toggle="modal" data-target="#add">Add Project</button>
      <h2 class="panel-title">All Project</h2>
    </div>
    <div class="table ">
      <table class="table table-striped table-hover table-responsive ">
    <thead>
      <tr>

        <th colspan="5">
          <!-- <form class="navbar-form navbar-left pull-right" role="search">
            <div class="form-group">
              <input class="form-control" placeholder="Search" type="text">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form> -->
          <input type="text" class="form-group pull-right" placeholder="search project name" name="" value="">

        </th>
      </tr>

      <tr>
        <th width="4%">No</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>progress</th>
      </tr>
    </thead>
    <tbody>

      <tr>
        <td>1</td>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>
          <div class="progress">
          <div class="progress-bar progress-bar-success" style="width: 80%"></div>
          </div>
        </td>
      </tr>
      <tr>
        <td>2</td>
        <td>Moe</td>
        <td>Moe</td>
        <td>mary@example.com</td>
        <td>
          <div class="progress">
          <div class="progress-bar progress-bar-danger" style="width: 10%"></div>
          </div>
        </td>
      </tr>
      <tr>
        <td>3</td>
        <td>Dooley</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td>
          <div class="progress">
          <div class="progress-bar progress-bar-warning" style="width: 40%"></div>
          </div>
        </td>
      </tr>
    </tbody>
  </table>
    </div>

  <!-- End Panel -->
</div>
<!-- End col -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="right">Add New Project</h4>
      </div>
      <div class="modal-body">
        <form class="" action="index.html" method="post">
               <div class="form-group">
                  <!-- <label for="email">Email:</label> -->
                  <input type="text" class="form-control active" name="nama" placeholder="Nama Project">
               </div>
               <div class="form-group">
                  <!-- <label for="pwd">Password:</label> -->
                  <input type="text" class="form-control" name="perusahaan" placeholder="Perusahaan">
               </div>
               <div class="form-group">
                  <!-- <label for="pwd">Password:</label> -->
                  <input type="text" class="form-control" name="lokasi" placeholder="Lokasi">
               </div>

               <div class="form-group">
                  <!-- <label for="pwd">Password:</label> -->
                  <textarea name="name" class="form-control" placeholder="Keterangan" rows="8" cols="80"></textarea>
                  <!-- <input type="text" class="form-control" name="tanggal" placeholder="Perusahaan"> -->
               </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>

    </div>
  </div>
</div>



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


<!-- modal -->
<div class="modal fade" id="notif" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog dialogs" style="width:250px;height:3%;">
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
        </div>
        </div>
        <!-- /.modal -->
</div>

<!-- start body -->
<div class="container-fluid">
<div class="col-lg-4 col-md-6 col-sm-12">
  <!-- Panel -->
  <div class="panel panel-success">
    <div class="panel-heading">
      <button class="btn btn-default pull-right" data-toggle="modal" data-target="#add"><span class="glyphicon  glyphicon glyphicon-resize-full"></span></button>

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
      <button class="btn btn-default pull-right" data-toggle="modal" data-target="#add"><span class="glyphicon  glyphicon glyphicon-resize-full"></span></button>

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

<div class="col-lg-4 col-md-6 col-sm-12">
  <!-- Panel -->
  <div class="panel panel-warning">
    <div class="panel-heading">
      <button class="btn btn-default pull-right" data-toggle="modal" data-target="#add"><span class="glyphicon  glyphicon glyphicon-resize-full"></span></button>
      <h3 class="panel-title">Project History</h3>
    </div>
    <div class="list-group">

      <ul class="list-group">
        <li class="list-group-item">
          <span class="badge badge-success">Sales</span>
          <span class="badge badge-success">14 Agustus 2017</span>
          Create Project
        </li>
        <li class="list-group-item">
          <span class="badge badge-warning">RQM</span>
          <span class="badge badge-warning">15 Agustus 2017 </span>
          Add Project Number
        </li>
        <li class="list-group-item">
          <span class="badge badge-info">ENG</span>
          <span class="badge badge-info">16 Agustus 2017</span>
        Creating HO
        </li>
    </ul>
  </div>
  <!-- End Panel -->
</div>
<!-- End col -->
</div>
<!-- container-fluid -->

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="panel panel-warning">
      <div class="panel-heading">
        <button class="btn btn-success pull-right" data-toggle="modal" data-target="#add">Add Project</button>
        <h2 class="panel-title">All Project</h2>
      </div>
      <div class="panel-body">

      <div class="table ">


      <!-- table here -->
      <table id="request" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
          <tr>
            <!-- <th>No</th> -->
            <th>ID</th>
            <th>No PRJ</th>
            <th>Nama</th>
            <th>Lokasi</th>
            <th>Perusahaan</th>
            <th>keterangan</th>
            <th>Progress</th>


            <th style="width:125px;">Action</th>
          </tr>
        </thead>
        <tbody>
        </tbody>

        <tfoot>
          <tr>
            <th>ID</th>
            <th>No PRJ</th>
            <th>Nama</th>
            <th>Lokasi</th>
            <th>Perusahaan</th>
            <th>keterangan</th>
            <th>Progress</th>

            <th>Action</th>
          </tr>
        </tfoot>
      </table>


      <div class="clearfix"></div>
    </div>
  </div>
</div>

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
        <form class="" action="<?php echo base_url() ?>api/project/data" method="post">

              <input type="hidden" name="loc" value="sys/dashboard/sales">
               <div class="form-group">
                  <!-- <label for="email">Email:</label> -->
                  <input type="text" class="form-control active" name="nama" placeholder="Nama Project" required>
               </div>
               <div class="form-group">
                  <!-- <label for="pwd">Password:</label> -->
                  <input type="text" class="form-control" name="perusahaan" placeholder="Perusahaan" required>
               </div>
               <div class="form-group">
                  <!-- <label for="pwd">Password:</label> -->
                  <input type="text" class="form-control" name="lokasi" placeholder="Lokasi" required>
               </div>

               <div class="form-group">
                  <!-- <label for="pwd">Password:</label> -->
                  <textarea name="keterangan" class="form-control" placeholder="Keterangan" rows="8" cols="80" required></textarea>
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
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js" charset="utf-8"></script>
    <script type="text/javascript">

      var save_method; //for save method string
      var table;
      $(document).ready(function() {
        table = $('#request').DataTable({

          "processing": true, //Feature control the processing indicator.
          "serverSide": true, //Feature control DataTables' server-side processing mode.

          // Load data for the table's content from an Ajax source
          "ajax": {
              "url": "<?php echo site_url('api/dataproject/ajax_list')?>",
              "type": "POST"
          },

          "order": [[ 2, 'desc' ]],


          //Set column definition initialisation properties.
          "columnDefs": [
          {
            // "targets": [ -1 ], //last column
            // "orderable": false, //set not orderable
          },
          ],

        });
      });

      function add_person()
      {
        save_method = 'add';
        $('#form')[0].reset(); // reset form on modals
        $('#modal_form').modal('show'); // show bootstrap modal
        $('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
      }

      function edit_person(id)
      {
        save_method = 'update';
        $('#form')[0].reset(); // reset form on modals

        //Ajax Load data from ajax
        $.ajax({
          url : "<?php echo site_url('warehouse/crequest/ajax_edit/')?>/" + id,
          type: "GET",
          dataType: "JSON",
          success: function(data)
          {

            $('[name="id"]').val(data.id);
            $('[name="noid"]').val(data.noid);
            $('[name="po"]').val(data.po);
            $('[name="tanggal"]').val(data.tanggal);
            $('[name="customerid"]').val(data.customerid);
            $('[name="productid"]').val(data.productid);
            $('[name="printid"]').val(data.printid);
            $('[name="quantity"]').val(data.quantity);
            $('[name="qoperator"]').val(data.qoperator);
            $('[name="status"]').val(data.status);
            $('[name="keterangan"]').val(data.keterangan);
            $('[name="reqNumber"]').val(data.reqNumber);


              $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
              $('.modal-title').text('Edit Person'); // Set title to Bootstrap modal title

          },
          error: function (jqXHR, textStatus, errorThrown)
          {
              alert('Error get data from ajax');
          }
      });
      }

      function reload_table()
      {
        table.ajax.reload(null,false); //reload datatable ajax
      }

      function save()
      {
        var url;
        if(save_method == 'add')
        {
            url = "<?php echo site_url('warehouse/crequest/ajax_add')?>";
        }
        else
        {
          url = "<?php echo site_url('warehouse/crequest/ajax_update')?>";
        }

         // ajax adding data to database
            $.ajax({
              url : url,
              type: "POST",
              data: $('#form').serialize(),
              dataType: "JSON",
              success: function(data)
              {
                 //if success close modal and reload ajax table
                 $('#modal_form').modal('hide');
                 reload_table();
              },
              error: function (jqXHR, textStatus, errorThrown)
              {
                  alert('Error adding / update data/ Data exist');
              }
          });
      }

      function delete_person(id)
      {
        if(confirm('Are you sure delete this data?'))
        {
          // ajax delete data to database
            $.ajax({
              url : "<?php echo site_url('warehouse/crequest/ajax_delete')?>/"+id,
              type: "POST",
              dataType: "JSON",
              success: function(data)
              {
                 //if success reload ajax table
                 $('#modal_form').modal('hide');
                 reload_table();
              },
              error: function (jqXHR, textStatus, errorThrown)
              {
                  alert('Error adding / update data');
              }
          });

        }
      }

    </script>


<!-- modal -->
<div class="modal fade" id="notif" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog dialogs" style="width:200px;height:10px;">
        <div class="modal-content" style="background-color:#158CBA; color:#333;">
            <div class="modal-body">
                <div id="left">
                    <div>
                        <center>
                          <p><font color="white">
                            <?php
                            if ($this->session->tempdata('login') == '') {
                              echo "";
                            }
                            else {
                              echo "Welcome ";
                              echo  $this->session->userdata('nama');
                            ?>
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
                            <?php
                            }
                          ?>
                        </font>
                            <p>
                              <font color="white">
                                <?php
                                if ($this->session->tempdata('sukses') == '') {
                                  echo "";
                                }
                                else {
                                  echo $this->session->tempdata('sukses');
                                ?>
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
                                <?php
                                }
                              ?>
                            </font>
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

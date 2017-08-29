
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Welcome
        <small><?php echo $title ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Hi <?php echo $this->session->userdata('dept');?></a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?php echo $title ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Rendering engine</th>
              <th>Browser</th>
              <th>Platform(s)</th>
              <th>Engine version</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>Trident</td>
              <td>Internet
                Explorer 4.0
              </td>
              <td>Win 95+</td>
              <td> 4</td>
              <td><a href="<?php echo base_url()?>sys/dashboard/singles"><span class="glyphicon glyphicon-search"></span></a> </td>
            </tr>
            <tr>
              <td>Trident</td>
              <td>Internet
                Explorer 5.0
              </td>
              <td>Win 95+</td>
              <td>5</td>
              <td><a href="<?php echo base_url()?>sys/dashboard/singles"><span class="glyphicon glyphicon-search"></span></a> </td>

            </tr>
            <tr>
              <td>Trident</td>
              <td>Internet
                Explorer 5.5
              </td>
              <td>Win 95+</td>
              <td>5.5</td>
              <td><a href="<?php echo base_url()?>sys/dashboard/singles"><span class="glyphicon glyphicon-search"></span></a> </td>

            </tr>
            <tr>
              <td>Trident</td>
              <td>Internet
                Explorer 6
              </td>
              <td>Win 98+</td>
              <td>6</td>
              <td><a href="<?php echo base_url()?>sys/dashboard/singles"><span class="glyphicon glyphicon-search"></span></a> </td>

            </tr>
            <tr>
              <td>Trident</td>
              <td>Internet
                Explorer 6
              </td>
              <td>Win 98+</td>
              <td>6</td>
              <td><a href="<?php echo base_url()?>sys/dashboard/singles"><span class="glyphicon glyphicon-search"></span></a> </td>

            </tr>
            <tr>
              <td>Trident</td>
              <td>Internet
                Explorer 6
              </td>
              <td>Win 98+</td>
              <td>6</td>
              <td><a href="<?php echo base_url()?>sys/dashboard/singles"><span class="glyphicon glyphicon-search"></span></a> </td>

            </tr>
            <tr>
              <td>Trident</td>
              <td>Internet
                Explorer 6
              </td>
              <td>Win 98+</td>
              <td>6</td>
              <td><a href="<?php echo base_url()?>sys/dashboard/singles"><span class="glyphicon glyphicon-search"></span></a> </td>

            </tr>

            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->

      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

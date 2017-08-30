
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

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><?php echo $title ?></h3>

          <!-- <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div> -->
        </div>
        <div class="box-body">
          <!-- TO DO List -->
          <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">To Do List</h3>

              <div class="box-tools pull-right">
                <!-- <ul class="pagination pagination-sm inline">
                  <li><a href="#">&laquo;</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul> -->
                <!-- <button type="button" data-toggle="modal" data-target="#modal" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button> -->
                <a href="#" class="btn btn-default pull-right" onclick="add_todo()"><i class="fa fa-plus"> Add todo</i></a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <ul class="todo-list">

              <?php
                //print_r($data);
                for($i=0; $i<count($data);$i++) {
                ?>
                <li>
                  <!-- drag handle -->
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <!-- checkbox -->
                  <input id="cektodo" name="cektodo" type="checkbox" value="">
                  <!-- todo text -->
                  <span class="text"><?php echo $data[$i]->todo;?></span>
                  <!-- Emphasis label -->
                  <small class="label label-danger"><i class="fa fa-clock-o"></i> <?php echo $data[$i]->status;?></small>
                  <!-- General tools such as edit or delete-->
                  <div class="tools">
                    <!-- <a href="todo/edit/<?php echo $data[$i]->id;?>"><i class="fa fa-edit"></i></a> -->
                    <a href="#" onclick="edit_todo('<?php echo $data[$i]->id;?>')"><i class="fa fa-edit"></i></a>
                    <a href="#" onclick="delete_todo('<?php echo $data[$i]->id;?>')"><i class="fa fa-trash-o"></i></a>
                    <!-- <a href="todo/delete/<?php echo $data[$i]->id;?>"><i class="fa fa-trash-o"></i></a> -->

                  </div>


              <?php }?>

            </div>

          </div>
          <!-- /.box -->
        </div>
        <!-- /.box-body -->

      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="">Add To Do List</h4>
      </div>
      <div class="modal-body">
        <!-- <form class="form-group" id="form" action="todo/add/" method="post"> -->
        <form class="form-group" id="form"  method="post">

          <input type="hidden" name="id" value="">
          <div class="form-group">
            <label for="todo">To DO</label>
            <input type="text" class="form-control" name="todo" placeholder="Enter To Do">
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button  onclick="save()" class="btn btn-primary">Add</button>

      </div>
        </form>
    </div>
  </div>
</div>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <!-- Welcome -->
      </h1><br>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Hi <?php echo $this->session->userdata('dept');?></a></li>
      </ol>
    </section>

    <!-- Main content -->
<div class="container-fluid">

    <section class="content">
      <div class="container-fluid">

<div class="well">

  <strong>  <?php echo $title ?> </strong>
</div>

</div>
        <div class="col-md-4">
            <div class="box box-danger">
                            <div class="box-header with-border">
                              <h3 class="box-title">Project In Charge</h3>

                              <div class="box-tools pull-right">
                                <!-- <span class="label label-danger">8 New Members</span> -->
                                <button data-toggle="tooltip" title="detail" type="button" class="btn btn-box-tool" ><i class="fa fa-search"></i>
                                </button>
                                <!-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                                </button> -->
                              </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body no-padding">
                              <ul class="users-list clearfix">
                                <li>
                                  <img src="<?php echo base_url()?>assets/dist/img/user1-128x128.jpg" alt="User Image">
                                  <a class="users-list-name" href="#">Alexander Pierce</a>
                                  <span class="users-list-date">Today</span>
                                </li>
                                <li>
                                  <img src="<?php echo base_url()?>assets/dist/img/user8-128x128.jpg" alt="User Image">
                                  <a class="users-list-name" href="#">Norman</a>
                                  <span class="users-list-date">Yesterday</span>
                                </li>
                                <li>
                                  <img src="<?php echo base_url()?>assets/dist/img/user7-128x128.jpg" alt="User Image">
                                  <a class="users-list-name" href="#">Jane</a>
                                  <span class="users-list-date">12 Jan</span>
                                </li>
                                <li>
                                  <img src="<?php echo base_url()?>assets/dist/img/user6-128x128.jpg" alt="User Image">
                                  <a class="users-list-name" href="#">John</a>
                                  <span class="users-list-date">12 Jan</span>
                                </li>
                                <li>
                                  <img src="<?php echo base_url()?>assets/dist/img/user2-160x160.jpg" alt="User Image">
                                  <a class="users-list-name" href="#">Alexander</a>
                                  <span class="users-list-date">13 Jan</span>
                                </li>
                                <li>
                                  <img src="<?php echo base_url()?>assets/dist/img/user5-128x128.jpg" alt="User Image">
                                  <a class="users-list-name" href="#">Sarah</a>
                                  <span class="users-list-date">14 Jan</span>
                                </li>
                                <li>
                                  <img src="<?php echo base_url()?>assets/dist/img/user4-128x128.jpg" alt="User Image">
                                  <a class="users-list-name" href="#">Nora</a>
                                  <span class="users-list-date">15 Jan</span>
                                </li>
                                <li>
                                  <img src="<?php echo base_url()?>assets/dist/img/user3-128x128.jpg" alt="User Image">
                                  <a class="users-list-name" href="#">Nadia</a>
                                  <span class="users-list-date">15 Jan</span>
                                </li>
                              </ul>
                              <!-- /.users-list -->
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer text-center">
                              <!-- <a href="javascript:void(0)" class="uppercase">View All Users</a> -->
                            </div>
                            <!-- /.box-footer -->
                          </div>
                          <!--/.box -->
                        </div>
                        <!-- /.col -->


      <div class="col-md-4">
          <div class="box box-primary">
                          <div class="box-header with-border">
                            <h3 class="box-title">File Sharing</h3>

                            <div class="box-tools pull-right">
                              <!-- <span class="label label-danger">8 New Members</span> -->
                              <button data-toggle="tooltip" title="detail"  type="button" class="btn btn-box-tool" ><i class="fa fa-search"></i>
                              </button>
                              <!-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                              </button> -->
                            </div>
                          </div>
                          <!-- /.box-header -->
                          <div class="box-body no-padding">
                            <ul class="users-list folder-list clearfix">
                              <li>
                                <img src="<?php echo base_url()?>assets/dist/img/folder-icon.png" alt="User Image">
                                <a class="users-list-name" href="#">Alexander Pierce</a>
                                <span class="users-list-date">Today</span>
                              </li>
                              <li>
                                <img src="<?php echo base_url()?>assets/dist/img/folder-icon.png" alt="User Image">
                                <a class="users-list-name" href="#">Norman</a>
                                <span class="users-list-date">Yesterday</span>
                              </li>
                              <li>
                                <img src="<?php echo base_url()?>assets/dist/img/folder-icon.png" alt="User Image">
                                <a class="users-list-name" href="#">Jane</a>
                                <span class="users-list-date">12 Jan</span>
                              </li>
                              <li>
                                <img src="<?php echo base_url()?>assets/dist/img/folder-icon.png" alt="User Image">
                                <a class="users-list-name" href="#">John</a>
                                <span class="users-list-date">12 Jan</span>
                              </li>
                              <li>
                                <img src="<?php echo base_url()?>assets/dist/img/folder-icon.png" alt="User Image">
                                <a class="users-list-name" href="#">Alexander</a>
                                <span class="users-list-date">13 Jan</span>
                              </li>
                              <li>
                                <img src="<?php echo base_url()?>assets/dist/img/folder-icon.png" alt="User Image">
                                <a class="users-list-name" href="#">Sarah</a>
                                <span class="users-list-date">14 Jan</span>
                              </li>
                              <li>
                                <img src="<?php echo base_url()?>assets/dist/img/folder-icon.png" alt="User Image">
                                <a class="users-list-name" href="#">Nora</a>
                                <span class="users-list-date">15 Jan</span>
                              </li>
                              <li>
                                <img src="<?php echo base_url()?>assets/dist/img/folder-icon.png" alt="User Image">
                                <a class="users-list-name" href="#">Nadia</a>
                                <span class="users-list-date">15 Jan</span>
                              </li>
                            </ul>
                            <!-- /.users-list -->
                          </div>
                          <!-- /.box-body -->
                          <div class="box-footer text-center">
                            <!-- <a href="javascript:void(0)" class="uppercase">View All Users</a> -->
                          </div>
                          <!-- /.box-footer -->
                        </div>
                        </div>




  <div class="col-md-6">
                <!-- TO DO List -->
         <div class="box box-primary">
           <div class="box-header">
             <i class="ion ion-clipboard"></i>

             <h3 class="box-title">To Do List</h3>

             <div class="box-tools pull-right">
               <ul class="pagination pagination-sm inline">
                 <li><a href="#">&laquo;</a></li>
                 <li><a href="#">1</a></li>
                 <li><a href="#">2</a></li>
                 <li><a href="#">3</a></li>
                 <li><a href="#">&raquo;</a></li>
               </ul>
             </div>
           </div>
           <!-- /.box-header -->
           <div class="box-body">
             <ul class="todo-list">
               <li>
                 <!-- drag handle -->
                     <span class="handle">
                       <i class="fa fa-ellipsis-v"></i>
                       <i class="fa fa-ellipsis-v"></i>
                     </span>
                 <!-- checkbox -->
                 <input type="checkbox" value="">
                 <!-- todo text -->
                 <span class="text">Design a nice theme</span>
                 <!-- Emphasis label -->
                 <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                 <!-- General tools such as edit or delete-->
                 <div class="tools">
                   <i class="fa fa-edit"></i>
                   <i class="fa fa-trash-o"></i>
                 </div>
               </li>
               <li>
                     <span class="handle">
                       <i class="fa fa-ellipsis-v"></i>
                       <i class="fa fa-ellipsis-v"></i>
                     </span>
                 <input type="checkbox" value="">
                 <span class="text">Make the theme responsive</span>
                 <small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                 <div class="tools">
                   <i class="fa fa-edit"></i>
                   <i class="fa fa-trash-o"></i>
                 </div>
               </li>
               <li>
                     <span class="handle">
                       <i class="fa fa-ellipsis-v"></i>
                       <i class="fa fa-ellipsis-v"></i>
                     </span>
                 <input type="checkbox" value="">
                 <span class="text">Let theme shine like a star</span>
                 <small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                 <div class="tools">
                   <i class="fa fa-edit"></i>
                   <i class="fa fa-trash-o"></i>
                 </div>
               </li>
               <li>
                     <span class="handle">
                       <i class="fa fa-ellipsis-v"></i>
                       <i class="fa fa-ellipsis-v"></i>
                     </span>
                 <input type="checkbox" value="">
                 <span class="text">Let theme shine like a star</span>
                 <small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>
                 <div class="tools">
                   <i class="fa fa-edit"></i>
                   <i class="fa fa-trash-o"></i>
                 </div>
               </li>
               <li>
                     <span class="handle">
                       <i class="fa fa-ellipsis-v"></i>
                       <i class="fa fa-ellipsis-v"></i>
                     </span>
                 <input type="checkbox" value="">
                 <span class="text">Check your messages and notifications</span>
                 <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 week</small>
                 <div class="tools">
                   <i class="fa fa-edit"></i>
                   <i class="fa fa-trash-o"></i>
                 </div>
               </li>
               <li>
                     <span class="handle">
                       <i class="fa fa-ellipsis-v"></i>
                       <i class="fa fa-ellipsis-v"></i>
                     </span>
                 <input type="checkbox" value="">
                 <span class="text">Let theme shine like a star</span>
                 <small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>
                 <div class="tools">
                   <i class="fa fa-edit"></i>
                   <i class="fa fa-trash-o"></i>
                 </div>
               </li>
             </ul>
           </div>
           <!-- /.box-body -->
           <div class="box-footer clearfix no-border">
             <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>
           </div>
         </div>
         </div>
         <!-- /.box -->



       <div class="col-md-6">
         <!-- TO DO List -->
         <!-- Chat box -->
                 <div class="box box-success">
                   <div class="box-header">
                     <i class="fa fa-comments-o"></i>

                     <h3 class="box-title">Chat</h3>

                     <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
                       <div class="btn-group" data-toggle="btn-toggle">
                         <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
                         </button>
                         <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                       </div>
                     </div>
                   </div>
                   <div class="box-body chat" id="chat-box">
                     <!-- chat item -->
                     <div class="item">
                       <img src="<?php echo base_url() ?>assets/dist/img/user4-128x128.jpg" alt="user image" class="online">

                       <p class="message">
                         <a href="#" class="name">
                           <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:15</small>
                           Mike Doe
                         </a>
                         I would like to meet you to discuss the latest news about
                         the arrival of the new theme. They say it is going to be one the
                         best themes on the market
                       </p>
                       <div class="attachment">
                         <h4>Attachments:</h4>

                         <p class="filename">
                           Theme-thumbnail-image.jpg
                         </p>

                         <div class="pull-right">
                           <button type="button" class="btn btn-primary btn-sm btn-flat">Open</button>
                         </div>
                       </div>
                       <!-- /.attachment -->
                     </div>
                     <!-- /.item -->
                     <!-- chat item -->
                     <div class="item">
                       <img src="<?php echo base_url() ?>assets/dist/img/user3-128x128.jpg" alt="user image" class="offline">

                       <p class="message">
                         <a href="#" class="name">
                           <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small>
                           Alexander Pierce
                         </a>
                         I would like to meet you to discuss the latest news about
                         the arrival of the new theme. They say it is going to be one the
                         best themes on the market
                       </p>
                     </div>
                     <!-- /.item -->
                     <!-- chat item -->
                     <div class="item">
                       <img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" alt="user image" class="offline">

                       <p class="message">
                         <a href="#" class="name">
                           <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:30</small>
                           Susan Doe
                         </a>
                         I would like to meet you to discuss the latest news about
                         the arrival of the new theme. They say it is going to be one the
                         best themes on the market
                       </p>
                     </div>
                     <!-- /.item -->
                   </div>
                   <!-- /.chat -->
                   <div class="box-footer">
                     <div class="input-group">
                       <input class="form-control" placeholder="Type message...">

                       <div class="input-group-btn">
                         <button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>

               <!-- /.col -->
     <div class="col-md-12">
               <!-- LINE CHART -->
               <div class="box box-info">
                 <div class="box-header with-border">
                   <h3 class="box-title">Project Curva S </h3>

                   <div class="box-tools pull-right">
                     <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                     </button>
                     <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                   </div>
                 </div>
                 <div class="box-body">
                   <div class="chart">
                     <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                   </div>
                 </div>
                 <!-- /.box-body -->
               </div>
               <!-- /.box -->


             </div>
             <!-- /.col (RIGHT) -->


         </div>
      </div>
    </section>
  </div>

    <!-- /.content -->
  <!-- /.content-wrapper -->

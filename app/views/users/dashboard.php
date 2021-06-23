<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo SITENAME ?> - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo URLROOT ?>admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="<?php echo URLROOT ?>admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo URLROOT ?>admin/css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="<?php URLROOT.'dashboard' ?>"><?php echo SITENAME ?></a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <!-- <a class="dropdown-item" href="#">Settings</a> -->
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo URLROOT.'dashboard' ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo URLROOT.'properties/newProperty' ?>">
          <i class="fas fa-fw fa-plus"></i>
          <span>Add Property</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Property</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="<?php echo URLROOT.'dashboard/active' ?>">Active</a>
          <a class="dropdown-item" href="<?php echo URLROOT.'dashboard/pending' ?>">Pending</a>
          <a class="dropdown-item" href="<?php echo URLROOT.'dashboard/declined' ?>">Declined</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo URLROOT.'dashboard/messages' ?>">
          <i class="fas fa-fw fa-comments"></i>
          <span>Messages</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo URLROOT.'dashboard/config' ?>">
          <i class="fas fa-fw fa-cog"></i>
          <span>Site Config</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
                <div class="mr-5"><?php echo $data['messagesCount'] ?> Total Messages!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="<?php echo URLROOT.'dashboard/messages' ?>">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5"><?php echo $data['pendingCount'] ?> Pending Properties!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="<?php echo URLROOT.'dashboard/pending' ?>">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5"><?php echo $data['activeCount'] ?> Active Properties!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="<?php echo URLROOT.'dashboard/active' ?>">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5"><?php echo $data['declinedCount'] ?> Declined Properties!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="<?php echo URLROOT.'dashboard/declined' ?>">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>


        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            <?php echo $data['title'] ?></div>
          <div class="card-body">
              <?php flash('property') ?>
            <div class="table-responsive">
              <?php if(!isset($data['messages']) && !isset($data['config'])) : ?>
                <!-- Properties Section -->
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Title</th>
                        <th>Owner Name</th>
                        <th>City</th>
                        <th>Brochure</th>
                        <th>Type</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Title</th>
                        <th>Owner Name</th>
                        <th>City</th>
                        <th>Brochure</th>
                        <th>Type</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($data['properties'] as $property): ?>
                            <tr>
                                <td><a href="<?php echo URLROOT.'properties/property/'.$property->id ?>"><?php echo $property->title ?></a></td>
                                <td><?php echo $property->full_name ?></td>
                                <td><?php echo $property->city ?></td>
                                <td><a href="<?php echo URLROOT.'files/brochures/'.$property->brochure ?>" target="_blank">view</a></td>
                                <td><?php echo $property->type ?></td>
                                <td><?php echo $property->category ?></td>
                                <td><?php echo PropertyStatus::getLabel($property->status) ?></td>
                                <td> <?php echo (PropertyStatus::active == $property->status) 
                                  ?  '<a href="'.URLROOT.'properties/update/'.$property->idx.'&action='.PropertyStatus::declined  .'" name="" id="" class="btn btn-danger text-white" btn-lg btn-block">Decline</a>'
                                  : ((PropertyStatus::declined == $property->status) ? '<a href="'.URLROOT.'properties/update/'.$property->idx.'&action='.PropertyStatus::active.'" name="" id="" class="btn btn-primary text-white" btn-lg btn-block">Accept</a>' 
                                  : '<a href="'.URLROOT.'properties/update/'.$property->idx.'&action='.PropertyStatus::declined  .'" name="" id="" class="btn btn-danger text-white" btn-lg btn-block">Decline</a>
                                  <a href="'.URLROOT.'properties/update/'.$property->idx.'&action='.PropertyStatus::active.'" name="" id="" class="btn btn-primary text-white" btn-lg btn-block">Accept</a>') ?>
                                </td>
                            </tr>
                        <?php endforeach ?>    
                      </tr>
                    </tbody>
                  </table>
              <?php elseif(!isset($data['config'])) : ?>
              <!-- Messages Section -->
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Subject</th>
                        <th>Message</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Subject</th>
                        <th>Message</th>
                      </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($data['messages'] as $message): ?>
                            <tr>
                                <td><a href=""><?php echo $message->name ?></a></td>
                                <td><?php echo $message->email ?></td>
                                <td><?php echo $message->phone ?></td>
                                <td><?php echo $message->subject ?></td>
                                <td><?php echo $message->message ?></td>
                            </tr>
                        <?php endforeach ?>    
                      </tr>
                    </tbody>
                  </table>
              <?php else: ?>
              <?php flash('alert') ?>
              <form method="post">
                <div class="form-group">
                  <label for="title">Website Title</label>
                  <input type="text" class="form-control" id="title" name="title" value="<?php echo $data['config']->website_title?>">
                </div>
                <div class="form-group">
                  <label for="title">Email</label>
                  <input type="email" class="form-control" id="title" name="email" value="<?php echo $data['config']->email?>">
                </div>
                <div class="form-group">
                  <label for="title">Phone</label>
                  <input type="text" class="form-control" id="title" name="phone" value="<?php echo $data['config']->phone?>">
                </div>
                <div class="form-group">
                  <label for="title">Facebook URL</label>
                  <input type="text" class="form-control" id="title" name="facebook" value="<?php echo $data['config']->facebook?>">
                </div>
                <div class="form-group">
                  <label for="title">Twitter URL</label>
                  <input type="text" class="form-control" id="title" name="twitter" value="<?php echo $data['config']->twitter?>">
                </div>
                <div class="form-group">
                  <label for="title">Instagram URL</label>
                  <input type="text" class="form-control" id="title" name="instagram" value="<?php echo $data['config']->instagram?>">
                </div>
                <div class="form-group">
                  <label for="title">Office Address</label>
                  <input type="text" class="form-control" id="title" name="address" value="<?php echo $data['config']->address?>">
                </div>
                <div class="form-group">
                  <label for="abt">About</label>
                  <textarea class="form-control" id="abt" name="about" rows="3"><?php echo $data['config']->about ?></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary" name="update_config" style="width: 100%">Update</button>
              </form>
              <?php endif ?>
            </div>
          </div>
          <div class="card-footer small text-muted"></div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © <?php echo SITENAME ?> 2020</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo URLROOT.'users/logout' ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo URLROOT ?>admin/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo URLROOT ?>admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo URLROOT ?>admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="<?php echo URLROOT ?>admin/vendor/chart.js/Chart.min.js"></script>
  <script src="<?php echo URLROOT ?>admin/vendor/datatables/jquery.dataTables.js"></script>
  <script src="<?php echo URLROOT ?>admin/vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo URLROOT ?>admin/js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="<?php echo URLROOT ?>admin/js/demo/datatables-demo.js"></script>
  <script src="<?php echo URLROOT ?>admin/js/demo/chart-area-demo.js"></script>

</body>

</html>

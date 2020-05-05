<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
  <title></title>

 <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"> 
<!--bootstrap--->
<link rel="stylesheet" href="<?php echo web_root;?>bootstrap/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo web_root;?>plugins/font-awesome/css/font-awesome.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="<?php echo web_root;?>dist/css/AdminLTE.min.css">

<link rel="stylesheet" href="<?php echo web_root;?>dist/css/test.css">
<link rel="stylesheet" href="<?php echo web_root;?>dist/css/skins/_all-skins.css">

<!-- iCheck -->
<link rel="stylesheet" href="<?php echo web_root;?>plugins/iCheck/flat/blue.css">

<!-- Morris chart -->
<link rel="stylesheet" href="<?php echo web_root;?>plugins/morris/morris.css">

<!-- jvectormap -->
<link rel="stylesheet" href="<?php echo web_root;?>plugins/jvectormap/jquery-jvectormap-1.2.2.css">

<!-- Date Picker -->
<link href="<?php echo web_root; ?>plugins/datepicker/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

<link rel="stylesheet" href="<?php echo web_root;?>plugins/dataTables/jquery.dataTables.min.css">

<link rel="stylesheet" href="<?php echo web_root;?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
</head>
<body class="hold-transition skin-blue fixed sidebar-mini" >
<div>
  <header class="main-header">
    <!-- Logo -->
    <a class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Marsabit</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-large"><b>Marsabit</b></span>
    </a>


    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation" data-toggle="offcanvas" role="button">
      <!-- Sidebar toggle button-->
      <a href=""  class="sidebar-toggle">
        <span class="sr-only" >Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
 <!--php code here-->

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu" style="padding-right: 15px;">
            <a href="#" class="dropdown-toggle">
              <img>
              <span class="hidden-xs"><!--<?php echo $singleuser->FULLNAME; ?>--></span>
            </a>
            <ul class="dropdown-menu">>
              <!-- User image -->
              <li class="user-header"> 
                <img>  
              </li> 
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a>Profile</a>
                </div>
                <div class="pull-right">
                  <a>Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>



<div class="modal fade id="menuModal" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div>
                                    <button class="close">x</button>

                                    <h4 class="modal-title">Image.</h4>
                                </div>

                                <form>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <div class="rows">
                                                <div class="col-md-12">
                                                    <div class="rows">
                                                        <div class="col-md-8"> 
                                                            <input "mealid">
                                                              <input>
                                                               
                                                              <input>
                                                        </div>

                                                        <div class="col-md-4">
                                                          
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button>Close</button> <button>Upload Photo</button>
                                    </div>
                                </form>
                            </div><!-- /.modal-content-->
                        </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->  




<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
 
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu"> 
        <li>
          <a>
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>  
          </a> 
        </li> 
        
        <li>
          <a>
            <i class="fa fa-suitcase"></i> <span>Vacancy</span> 
          </a>
        </li>
        <li>
          <a>
            <i class="fa fa-users"></i> <span>Employee</span> 
          </a>
        </li> 
        <li> 
          <a>
            <i class="fa fa-users"></i> <span>Applicants</span> 
            <span class="label label-primary pull-right">
            <!--  <?php
                $sql = "SELECT count(*) as 'APPL' FROM `tbljobregistration` WHERE `PENDINGAPPLICATION`=1";
                $mydb->setQuery($sql);
                $pending = $mydb->loadSingleResult();
                echo $pending->APPL;
              ?>-->
            </span>
          </a>
        </li> 
        <li> 
          <a>
            <i class="fa fa-list"></i> <span>Category</span>  
          </a>
        </li> 
       
         
         <li class="<?php echo (currentpage() == 'user') ? "active" : false;?>">
          <a href="<?php echo web_root; ?>admin/user/">
            <i class="fa fa-user"></i> <span>Manage Users</span> </a>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

  <section class="content-header">
      <h1>
       <!-- <?php echo isset($title) ? $title : ''; ?>-->
        <!-- <small>it all starts here</small> -->
      </h1>
      <ol class="breadcrumb">
     <!--   <?php

          if ($title!='Home') {
            # code... 
            $active_title = '';
            if (isset($_GET['view'])) {
              # code...
              $active_title = '<li class='.$active_title.'><a href="index.php">'.$title.'</a></li>';
            }else{
              $active_title = '<li class='.$active_title.'>'.$title.'</li>';
            }
            echo '<li><a href='.web_root.'admin/><i class="fa fa-dashboard"></i> Home</a></li>';
            echo  $active_title;
            echo  isset($_GET['view']) ? '<li class="active">'.$_GET['view'].'</li>' : '';
          } 


        ?>-->
      </ol>
    </section>
         <section class="content">

          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-body">

             <?php 
               check_message();
               require_once $content; 
               ?> 
             </div>
             </div>
           </div>
         </div>

         </section>



 </div>
  <!-- /.content-wrapper -->

<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b></b>
    </div>
    <strong>Copyright &copy; 2020 <a>Job Portal</a>.</strong> All rights
    reserved.
</footer>


</body>

<script type="text/javascript" src="<?php echo web_root; ?>plugins/jQuery/jQuery-2.1.4.min.js"> </script>
      <script type="text/javascript" src="<?php echo web_root; ?>bootstrap/js/bootstrap.min.js" ></script>
      <script src="<?php echo web_root;?>dist/js/app.min.js"></script> 

      <script type="text/javascript" src="<?php echo web_root; ?>plugins/datepicker/bootstrap-datepicker.js" ></script> 
      <script type="text/javascript" src="<?php echo web_root; ?>plugins/datepicker/bootstrap-datetimepicker.js" charset="UTF-8"></script>
      <script type="text/javascript" src="<?php echo web_root; ?>plugins/datepicker/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>

      <script type="text/javascript" src="<?php echo web_root; ?>plugins/dataTables/dataTables.bootstrap.min.js" ></script> 
      <script src="<?php echo web_root; ?>plugins/datatables/jquery.dataTables.min.js"></script> 

      <script src="<?php echo web_root; ?>plugins/slimScroll/jquery.slimscroll.min.js"></script>

      <script type="text/javascript" language="javascript" src="<?php echo web_root; ?>plugins/input-mask/jquery.inputmask.js"></script> 
      <script type="text/javascript" language="javascript" src="<?php echo web_root; ?>plugins/input-mask/jquery.inputmask.date.extensions.js"></script> 
      <script type="text/javascript" language="javascript" src="<?php echo web_root; ?>plugins/input-mask/jquery.inputmask.extensions.js">
        
      </script> 


</html>
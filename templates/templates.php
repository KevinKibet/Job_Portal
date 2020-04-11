<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<!--CSS-->
<link rel="stylesheet" type="text/css" href="../plugins/home-plugins/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../plugins/home-plugins/css/fancybox/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="../plugins/home-plugins/css/flexslider.css">
<link rel="stylesheet" type="text/css" href="../plugins/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../plugins/dataTables/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="../plugins/dataTables/jquery.dataTables_themeroller.css">
<link rel="stylesheet" type="text/css" href="../plugins/home-plugins/css/style.css">
<!--DateTime Picker CSS-->

<link rel="stylesheet" type="text/css" href="../plugins/datepicker/bootstrap-datetimepicker.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="../plugins/datepicker/datepicker3.css" media="screen">

<title>Job Portal</title>
<style type="text/css">
	
</style>
<body>
	<div id="wrapper" class="home-page">

<!----Start of the Header-->

	<header>
		<div class="topbar navbar-fixed-top">
          <div class="container">
            <div class="row">
              <div class="col-md-12">      
                <p class="pull-left hidden-xs"><i class="fa fa-phone"></i>Tel No. (+254) 726142331</p>
                <p   style="font-size:15px;" class="pull-right login"><a data-target="#myModal" data-toggle="modal" href=""> <i class="fa fa-lock"></i> Login </a></p>
                
              <!--######## php code later--->
              </div>
            </div>
          </div>
        </div> 
        <div style="min-height: 30px;"></div>
        <div class="navbar navbar-default navbar-static-top" > 
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="./index.php">Website Name</a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="<?php echo !isset($_GET['q'])? 'active' :''?>"><a href="<?php echo web_root; ?>index.php">Home</a></li> 
                        <li class="dropdown">
                          <a href="#" data-toggle="dropdown" class="dropdown-toggle">Job Search <b class="caret"></b></a>
                          <ul class="dropdown-menu">
                              <li class="<?php  if(isset($_GET['q'])) { if($_GET['q']=='advancesearch'){ echo 'active'; }else{ echo ''; }}  ?>"><a href="index.php?q=advancesearch">Advance Search</a></li>
                              <li><a href="<?php echo web_root; ?>index.php?q=search-function">Job By Function</a></li>
                              <li><a href="<?php echo web_root; ?>index.php?q=search-jobtitle">Job By Title</a></li>
                         
                          </ul>
                       </li> 
                      <li class="dropdown" <?php  if(isset($_GET['q'])) { if($_GET['q']=='category'){ echo 'active'; }else{ echo ''; }}  ?>">
                          <a href="#" data-toggle="dropdown" class="dropdown-toggle">Popular Jobs <b class="caret"></b></a>
                          <ul class="dropdown-menu">

                            <!---##PHP code for viewing the most searched results-->

                          </ul>
                       </li>
                        <li class="<?php  if(isset($_GET['q'])) { if($_GET['q']=='hiring'){ echo 'active'; }else{ echo ''; }} ?>"><a href="<?php echo web_root; ?>index.php?q=hiring">Hiring Now</a></li>
                        <li class="<?php  if(isset($_GET['q'])) { if($_GET['q']=='About'){ echo 'active'; }else{ echo ''; }}  ?>"><a href="<?php echo web_root; ?>index.php?q=About">About Us</a></li>
                        <li class="<?php  if(isset($_GET['q'])) { if($_GET['q']=='Contact'){ echo 'active'; }else{ echo ''; }}  ?>"><a href="<?php echo web_root; ?>index.php?q=Contact">Contact</a></li>

                    </ul>
                </div>
            </div>
        </div>

	</header>
<!--End of header--->

<!---Start of footer-->

<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4">
        <div class="widget">
          <h5 class="widgetheading">Our Contact</h5>
          <address>
          <strong>Our Company</strong><br>
          near my tower<br>
            Nairobi Kenya.</address>
          <p>
            <i class="icon-phone"></i> (123) 456-789 - 1255-12584 <br>
            <i class="icon-envelope-alt"></i> email@gmail.com
          </p>
        </div>
      </div>
      <div class="col-md-4 col-sm-4">
        <div class="widget">
          <h5 class="widgetheading">Quick Links</h5>
          <ul class="link-list">
            <li><a href="<?php echo web_root; ?>index.php">Home</a></li>
            <li><a href="<?php echo web_root; ?>index.php?q=hiring">Hiring</a></li>
            <li><a href="<?php echo web_root; ?>index.php?q=About">About us</a></li>
            <li><a href="<?php echo web_root; ?>index.php?q=Contact">Contact us</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-4 col-sm-4">
        <div class="widget">
          <h5 class="widgetheading">Latest posts</h5>
          <ul class="link-list">



            <!--#####PHP Code to fetch latest posts-->
          </ul>
        </div>
      </div>

    </div>
  </div>
  <div id="sub-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="copyright">
            <p>
              <span>&copy; Job Portal 2020 All right reserved.  
            </p>
          </div>
        </div>
        <div class="col-lg-6">
          <ul class="social-network">
            <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
            <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  </footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

<!---JavaScript--->

<script src="../plugins/home-plugins/js/jquery.js"></script>
<script src="../plugins/home-plugins/js/jquery.easing.1.3.js"></script>
<script src="../plugins/home-plugins/js/bootstrap.min.js"></script>
 

<script type="text/javascript" src="../plugins/dataTables/dataTables.bootstrap.min.js" ></script>  
<script src="../plugins/datatables/jquery.dataTables.min.js"></script> 

<script type="text/javascript" src="../plugins/datepicker/bootstrap-datepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="../plugins/datepicker/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="../plugins/datepicker/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>

<script type="text/javascript" language="javascript" src="../plugins/input-mask/jquery.inputmask.js"></script> 
<script type="text/javascript" language="javascript" src="../plugins/input-mask/jquery.inputmask.date.extensions.js"></script> 
<script type="text/javascript" language="javascript" src="../plugins/input-mask/jquery.inputmask.extensions.js"></script> 

<script src="../plugins/home-plugins/js/jquery.fancybox.pack.js"></script>
<script src="../plugins/home-plugins/js/jquery.fancybox-media.js"></script>  
<script src="../plugins/home-plugins/js/jquery.flexslider.js"></script>
<script src="../plugins/home-plugins/js/animate.js"></script>


<!-- Vendor Scripts -->
<script src="../plugins/home-plugins/js/modernizr.custom.js"></script>
<script src="../plugins/home-plugins/js/jquery.isotope.min.js"></script>
<script src="../plugins/home-plugins/js/jquery.magnific-popup.min.js"></script>
<script src="../plugins/home-plugins/js/animate.js"></script>
<script src="../plugins/home-plugins/js/custom.js"></script> 




</body>
</html>
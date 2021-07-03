<?php
include ("../connection.php");
   $query="SELECT * FROM blogwrite";
   $data=mysqli_query($conn,$query);
   $total=mysqli_num_rows($data);
   $user_query="SELECT * FROM register";
   $user_data=mysqli_query($conn,$user_query);
   $user_total=mysqli_num_rows($user_data);
   ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>BLOG ADMIN | Homepage</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  </head>
  <body>
 
     
  <div id="page-wrapper">
 <div class="row">
          <div class="col-lg-12">
            <h1>Hello admin !</h1>
            <ol class="breadcrumb">
              <li><a href="../index1.php"><i class="icon-dashboard" style="text-decoration:none;"></i> <strong>View Website</strong></a></li>
              <li><a href="#"><i class="icon-dashboard" style="text-decoration:none;"></i> <strong>Dashboard</strong></a></li>
            </ol>
            <div class="alert alert-success fade in">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong><span class="fa fa-bullhorn fa-2x"></span> </strong> <strong>&nbsp;&nbsp;Welcome to your Admin Dashboard!!</strong>.
  </div>          </div>
        </div><!-- /.row -->

      <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<!--cards-->
 <div class="row">
          <div class="col-lg-4">
            <div class="panel panel-info">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-rss fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?php echo $total;?></p>
                    <p class="announcement-text"><strong>Blogs</strong></p>
                  </div>
                </div>
              </div>
              <a href="blogs_view.php">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      View
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="panel panel-warning">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-tags fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?php echo $user_total;?></p>
                    <p class="announcement-text"><strong>Users</strong></p>
                  </div>
                </div>
              </div>
              <a href="user_admin.php">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      View
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
         
            
        </div><!-- /.row -->
         <div class="row">
          <div class="col-lg-4">
            <div class="panel panel-warning">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-desktop fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading">1</p>
                    <p class="announcement-text"><strong>Web Details!</strong></p>
                  </div>
                </div>
              </div>
              <a href="../about.php">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      View
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        
          <div class="col-lg-4">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-bar-chart-o fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading">64</p>
                    <p class="announcement-text"><strong>Admin Stats</strong></p>
                  </div>
                </div>
              </div>
              <a href="#">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      View
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div><!-- /.row -->  
      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->
    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
<footer class="footer footer-inverse">
      <div class="container">
        <div class="text-center">
          <small>Blog Admin 2020 | Brought To You By <a href="index1.php">BlogZilla</a></small>
        </div>
      </div>
    </footer>
  </body>
</html>
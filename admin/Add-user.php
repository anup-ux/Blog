<?php
include "../link.php";
include "../connection.php";
?>
<div class="nav-container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark w-auto ">
              <a class="navbar-brand " href="../dashboard.php"> <i class="fas fa-home"></i>BLOG ADMIN</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
           </button>

              <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <a href="index1.php" class="btn btn-outline-danger ml-auto">Logout</a>
              </div>
        </nav>
      
            <div class="page-header">
              <div class="row">
                  <div class="col-sm-8 mt-5 bg-light" style="width="50%" height="5%">
                      <a style="text-decoration: none; color: inherit; padding:3rem; font-size:5rem width:20px;" href=""><img src="../images/feed.png">Blogs Update</a>
                   </div>
              </div>  
            </div>
            
  </div>
<div class="container">
<form action="../registration.php" method="post" enctype="multipart/form-data">
                       
                 <div class="form-group py-1" style="margin-top:1rem;">
                        <label ><b>Name:<b></label>
                         <input type="text" id="name" name="name" value="" class="form-control">
                  </div>
                  <div class="form-group">
	                      <label ><b>Email:<b></label>
                        <input type="email" id="Email" name="email" value="" class="form-control">
                   </div>
                   <div class="form-group py-1" style="margin-top:1rem;">
                        <label ><b>Password:<b></label>
                         <input type="Password" id="ID" name="password" value="" class="form-control">
                  </div>
                  <div class="form-group py-1" style="margin-top:1rem;">
                        <label ><b>Image<b></label>
                         <input type="file" name="user_img" class="form-control">
                  </div>
                  <a href="dashboard.php" class="btn btn-danger">Cancel</a>
                  <input type="submit" name="add_user" class="btn btn-success" value="Add">       
         </form> 
         </div>
       
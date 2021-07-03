<?php
include '../link.php';
include '../connection.php';
?>
  <div class="nav-container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark w-auto ">
              <a class="navbar-brand " href="#"> <i class="fas fa-home"></i>BLOG ADMIN</a>
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
                      <a style="text-decoration: none; color: inherit; padding:3rem; font-size:5rem width:20px;" href="blogs_view.php"><img src="../images/feed.png">User Update</a>
                   </div>
              </div>  
            </div>
            
  </div>
  <div class="container">
  <?php
  if (isset($_POST['edit']))
  {
   $id=$_POST['edit_id']; 
   $query="SELECT * FROM register WHERE id='$id'";
   $query_run=mysqli_query($conn,$query);
   foreach( $query_run as $row){

?>
           <form action="user_update.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="edit_id" value= "<?php echo $row['id']?>" class="form-control"> 
                 <div class="form-group py-1" style="margin-top:1rem;">
                        <label ><b>Name:<b></label>
                         <input type="text" id="ID" name="id_edit" value="<?php echo $row['id']?>" class="form-control" disabled>
                  </div>
                  <div class="form-group">
	                      <label ><b>Name<b></label>
                        <input type="text" id="title" name="name" value="<?php echo $row['fname']?>" class="form-control" required>
                   </div>
                  <div class="form-group">
	                      <label ><b>Email<b></label>
                        <input type="email" id="title" name="email" value="<?php echo $row['email']?>" class="form-control" required>
                   </div>
                  <div class="form-group py-1" style="margin-top:1rem;">
                        <label ><b>Image<b></label>
                         <input type="file" name="img_edit" class="form-control">
                  </div>
                      <a href="dashboard.php" class="btn btn-danger">Cancel</a>
                  <input type="submit" name="update_btn" class="btn btn-success" value="update">       
         </form> 
<?php
    }
  }
  
  ?>
                      
      
         </div>


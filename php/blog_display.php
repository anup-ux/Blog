<?php
error_reporting(0);
include 'link.php';
include 'connection.php';
include 'loginVal.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/315be1222b.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    <link rel="icon" href="images/favi1.ico">
    <link rel="stylesheet" href="css/blog1.css">
    <title>Blogs</title>
</head>
<style>
    .card-title{
        font-family:Georgia, serif;
        font-weight:100px;
        font-size:2rem;
    }
    .txt1{
        font-size:1rem;
        font-family:Tahoma, Geneva, sans-serif;
    }
    span{
        padding:0.4rem; 
    }
    .fa {
  padding:8px;
  font-size: 10px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}
.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
}

</style>
<body>
<header>
        <div class="container-fluid">
            <div class="row">
                <div class="  col-md-4 logo text-center  ">
                    <a class="navbar-brand mt-2" href="index1.php">
                        <i class="fab fa-linode linode"></i>
                        <span Class="h3 text-danger ml-3">BLOG Zilla</span>
                    </a>
                </div>
                <div class="col-md-4 top-forms text-center mt-lg-3 mt-md-1 mt-0">
                    <?php
                    if($_SESSION['name'])
                    {
                        echo "
                        <span class='text-danger'>Welcome Back!</span>
                        <span> <strong>$_SESSION[name]</strong></span><br>
                        <img src='student/$_SESSION[img]' alt='' width='50' height='50' style='border-radius:60%; background-image:url(images/user.png);'><br>
                        <a href='logout.php' class='btn btn-danger btn-sm mt-2 ml-1'>Logout</a>";
                    }
                    else{
                        echo"
                        <span class='mx-lg-4 mx-md-2  mx-1' id=''>
						<a href='register.php' style='text-decoration: none;' >
							<i class='fas fa-lock' ></i> <strong >Register</strong></a>
					</span>
                        <span>
						<a href='login.php' id='login'  style='text-decoration: none;'>  
							<i class='far fa-user' id='login1'></i> <strong >Login</strong></a>
					</span>";
                    }
                    ?>
               
                    
                </div>
                <div class="col-md-4 log-icons text-center">

                    <ul class="social_list1 mt-3">

                        <li>
                            <a href="" class=" facebook1 mx-2 ">
                                <i class="fab fa-facebook-f "></i>

                            </a>
                        </li>
                        <li>
                            <a href=" " class="twitter2">
                                <i class="fab fa-twitter"></i>

                            </a>
                        </li>
                        <li>
                            <a href=" " class=" dribble3 mx-2 ">
                                <i class="fab fa-dribbble "></i>
                            </a>
                        </li>
                        <li>
                            <a href=" " class="pin ">
                                <i class="fab fa-pinterest-p "></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index1.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About.php">About</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="Contact.php">Contact</a>
                    </li>
                </ul>
                
            </div>
        </nav>
</header>
     <?php
     if(isset($_GET['read_more']))
        {
         $id=$_GET['id']; 
         $query="SELECT * FROM blogwrite WHERE id='$id'";
         $query_run=mysqli_query($conn,$query);
         foreach( $query_run as $row){
      
      ?>
     <div class="card w-50 mx-auto mt-5">
     <?php echo '<img class="card-img-top" alt="image" width="400" height="400" src="student/'.$row['imgsrc'].'">'?>
     <div class="social-media">
     <a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a>
<a href="#" class="fa fa-pinterest"></a>
    </div>
    <div class="card-body">
                     <span class="text-muted" id="cats"><i class='fas fa-tags' style="color:#ff7171;"></i>&nbsp<?php echo $row['category']?><span>
                     <span class="text-muted"><i class="far fa-clock" style="color:#43658b;"></i>&nbsp<?php echo $row['date']?><span>
                     <span class="text-muted"><i class='fas fa-user py1'style="color:#2d4059;"  ></i>&nbsp<?php echo $row['author']?><span>
      <h5 class="card-title pt-2"><b><?php echo $row['title']?></b></h5>
     <p class="card-text text-muted txt1 pt-3"> <?php echo nl2br($row['blog'])?></p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
<?php
         }
    }
    include 'include/comments.php';
    include 'footer1.php';
    ?>
    
</body>
</html>
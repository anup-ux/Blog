<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/blog1.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" href="images/favi1.ico">
    <script src="https://kit.fontawesome.com/315be1222b.js"></script>
    <title>About</title> 
</head>
<style>
    .middle-container {
    margin: 100px 0;
    text-align: center;
}
    .profile {
    margin-top: 1%;
    border-radius: 60%;
}

.skill-row {
    width: 50%;
    margin: 100px auto 100px auto;
    text-align: left;
    line-height: 2;
}

.skill-img1 {
    margin-right: 30px;
    border-radius: 60%;
    width: 25%;
    float: left;
}

.skill-img2 {
    float: right;
    margin-right: 30px;
    border-radius: 60%;
    width: 25%;
}
p {
    font-size:1rem;
    line-height: 2;
    font-family: Arial, Helvetica, sans-serif;
}
h2 {
    font-weight: normal;
    font-size: 2.5rem;
    color: #66bfbf;
    font-family: 'Montserrat', sans-serif;
    padding-bottom: 10px;
}

h3 {
    color: #11999e;
    font-family: 'Montserrat', sans-serif;
}

</style>
<body>
<?php
include 'loginval.php';
error_reporting(0);
?>


<header>
        <div class="top-bar_sub_w3layouts container-fluid">
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
<div class="container-fluid mr-2">
    <img src="images/b4.jpg" alt="" class="mr-3"  width="100%" style="z-index:1;"> 
    <div class="about-header">
     <a href="index1.php" style="text-decoration:none">Home</a>
     /
    <span>
        About
    </span>
    </div>
    <div class="middle-container">
        <div class="profile">
            <img class="profile" src="images/profile.png" alt="profile" height="200px" width="200px">
            <h2>Hello.</h2>
            <p style="width:30%; margin:auto;">I'm a aspiring web designer / developer.I have a passion for web design and love to create for web and mobile devices..</p>
        </div>
        <hr>
        <div class="skills">
            <h2>My Skills.</h2>
            <div class="skill-row">
                <img class=" skill-img1" src="images/computer.png" alt="">
                <h3>Design & development</h3>
                <p>Since childhood i've been fascinated by technology and have been learning to develop my own websites and applications.Over the years i've done several projects.</p>
            </div>
            <div class="skill-row">
                <img class="skill-img2" src="images/chillies.png" alt="image">
                <h3>Hobbies</h3>
                <p>My hobbies would include Video games and coding but and my favourite one would be sleep.I love spicy food</p>
            </div>
        </div>
        <hr>
      
    </div>
</div>
<?php include 'footer1.php'; ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>

</body>
</html>
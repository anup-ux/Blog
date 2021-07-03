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
                            <a href="https://www.facebook.com/login/" class=" facebook1 mx-2 ">
                                <i class="fab fa-facebook-f "></i>

                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/login?lang=en " class="twitter2">
                                <i class="fab fa-twitter"></i>

                            </a>
                        </li>
                        <li>
                            <a href=" " class=" dribble3 mx-2 ">
                                <i class="fab fa-dribbble "></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.pinterest.it/login/ " class="pin ">
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
                   
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categories
                  </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="javascript:myFunction3()">News</a>
                            <a class="dropdown-item" href="javascript:myFunction2()">Hacks</a>
                            <a class="dropdown-item" href="javascript:myFunction4()">Memes</a>
                            <a class="dropdown-item" href="javascript:myFunction1()">Entertainment</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Contact.php">Contact</a>
                    </li>
                </ul>
                
            </div>
        </nav>
</header>
<script>
function myFunction1() {
  var elmnt = document.getElementById("enter");
  elmnt.scrollIntoView();
}
function myFunction2() {
  var elmnt = document.getElementById("hack");
  elmnt.scrollIntoView();
}
function myFunction3() {
  var elmnt = document.getElementById("trick");
  elmnt.scrollIntoView();
}
function myFunction4() {
  var elmnt = document.getElementById("meme");
  elmnt.scrollIntoView();
}



</script>


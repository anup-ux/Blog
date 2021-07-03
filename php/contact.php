<?php
include 'link.php';
include 'loginval.php';
error_reporting(0);
?>
<script>
  function showAlert() {
    var myText = "thank you for contacting us";
    alert (myText);
    window.location.href = "index1.php";
  }

</script>
<link rel="stylesheet" href="css/contact.css">
<link rel="stylesheet" href="css/blog1.css">
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
<div class="container contact mr-5 mt-5">
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
				<img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
				<h2>Contact Us</h2>
				<h4>We would love to hear from you !</h4>
			</div>
		</div>
		<div class="col-md-9">
			<div class="contact-form">
			
				<div class="form-group">
				  <label class="control-label col-sm-2" for="email" value="">Email:</label>
				  <div class="col-sm-10">
					<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="comment">Comment:</label>
				  <div class="col-sm-10">
					<textarea class="form-control" rows="5" id="comment"></textarea>
				  </div>
				</div>
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
				<a href="javascript:showAlert()" class="btn btn-primary">Submit</a>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>



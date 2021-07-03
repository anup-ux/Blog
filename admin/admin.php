<?php
include "adminlog.php";
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="JS.js"></script>
   <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
  <link rel="stylesheet" href="../css/admin.css">
    <header>
        <div class=" reg-head">
            <a><i class="fas fa-home" >BLOG Zilla</i></a>
        </div>
    </header>
   <div class="">
	    <div class="container d-flex justify-content-center">
		   <div class="row">
			<div class="card">
				<div class="card-header">
					<strong> Admin Login</strong>
				</div>
				<div class="card-body">
					<form action="adminlog.php" method="post" enctype="multipart/form-data">
						<div class="row">
							<div class="col">
								<span class="profile-img">
                                <img class="circular--square" src="../images/profile.jpg" height="200" />
								</span>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<hr> <!-- other content  -->
							</div>
						</div>
						<div class="row">
							<div class="col">
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">
												<i class='fas fa-user-shield'></i>
											</span>
										</div>
										<input  name="username" class="form-control" type="text" placeholder="Username"   autofocus required>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">
												<i class='fas fa-user-secret'></i>
											</span>
										</div>
										<input  name="password"  class="form-control" placeholder="Password" id="loginPassword" type="password" required >
									</div>
								</div>
								<div class="form-group">
                                  <button type="submit" class="btn btn-lg btn-success btn-block" name="submit">Login </button>
								</div>
							</div>
						</div>
					   <!-- <a href="#" onClick="">I forgot my password!</a> -->
					</form>
				</div>
			</div>
		</div>
	</div>


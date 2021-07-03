
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="JS.js"></script>
    <link rel="stylesheet" href="css/blog1.css">
    <link rel="icon" href="images/icons8-user-24.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/315be1222b.js"></script>
    <title>Register</title>
</head>

<body>
    <header>
        <div class=" reg-head">
            <a href="index1.php"><i class="fas fa-home" >BLOG Zilla</i></a>
        </div>
    </header>
    <section>

        <div class="container mt-4 pt-3 pl-1 mx-auto " style="width: 60%;">
            <div class="row  text-primary ">
                <div class="col-sm-mx-auto mb-4" id="reg-img">
                    <img src="images/Screenshot (30).png" alt="Unavailable">
                </div>
                <div class="col-sm ">
                    <form action="registration.php"  method="POST" enctype="multipart/form-data" onSubmit="return checkPassword(this)"  )>
                        <div class="container-fluid">
                        <div class="ml-5">
                            <h1 class="text-dark mb-7 mb-4">Sign Up</h1>
                            <!-- <p style="font-size: 1em;">Please fill in this form to create an account.</p> -->
                            </div>
                            <label for="text"><b>Name</b></label>
                            <input type="text" placeholder="Enter Name" name="name" required  id="name" required>
                            <label for="email"><b>Email</b></label>
                            <input type="email" placeholder="Enter Email" name="email" required name="text1" id="email" required>

                            <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="psw" required id="psw1" value="" required>

                            <label for="psw-repeat"><b>Repeat Password</b></label>
                            <input type="password" placeholder="Repeat Password" name="pswrepeat" required id="psw2" value="" required>
                            <!-- <input type="text" name="warning" value="" id="warning-txt" class="plainText" style="width:15rem;float:right;position:absolute;margin-left:20rem;bottom:12.5rem; "> -->
                            <label>
                            <label for="uploadfile"><b>Profile Image</b></label><br>
                            <input type="file" name="image" value="image" class="mb-3"><br>
                            
                          
                            <!-- <p style="font-size: 1em;">By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p> -->

                            <div class="clearfix"style="margin-bottom:10rem;">
                                <button type="button" class="cancelbtn " id="cancel" onclick="ClearFields() ">Cancel</button>
                                <button class="signupbtn" type="submit" name="submit">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>

</body>

</html>
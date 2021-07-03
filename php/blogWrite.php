<?php
include 'link.php';
include 'BLOGphp.php';
?>
<style>
textarea{
  font-family:Georgia;
}
 input[type="text"]
 {
    font-family:Georgia;
  }
.page-header{
	margin-left:6rem;
	margin-top:1rem;
}	
.page-header a{
	text-decoration:none;
	color:black;
	font-size:2rem;
}	
hr{
width:95%;
}
.blog-header{
	width:100%;
	background-color:rgb(0,0,0,0.3);
	margin-right:8rem;
	height:3rem;
	
}
.container-fluid h1{
color:green;
margin-left:2rem;
position:absolute;

}
.container-fluid{
     width:90%;
	border:solid black 1px;
}
.container #title{
	width:20rem;
}
#image-btn{
  position:absolute;
}
@media screen and (max-width: 500px)
{
 
  .container
  {
	 margin-right:15rem;
  }
  .container #title
  {
	  width:5rem;
  }
  .page-header
  {
	  margin-left:2rem;
  }
  .container-fluid h1
  {
  	margin-left:9rem;
	
  }
  .btn-outline-danger
  {
   width:28rem;
  }
 .container .btn-success{
	  margin-left:8rem;
  }

 
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>blog</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img src="images/favi1.ico" width="30" height="30" alt="">
    <a class="navbar-brand" href="#">Blog zilla</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
       </button>

</nav>

<div class="page-header">
 <a href=""><img src="images/feed.png" class="feed-img"> Blogs</a>
 <hr>
</div>


<form action="BLOGphp.php" method="post" enctype="multipart/form-data">
    <div class="container-fluid">
     <div class="blog-header">
         <h1 style="font-size:1rem; margin-right:10rem; margin-top:1rem;">blog details</h1>
     </div>
	       <hr>
	       <div class="container">
	          <label for="title"><b>Title:<b></label>&nbsp &nbsp &nbsp
            <input type="text" id="title" name="title" required><br><br>
            <label for="category">Category:</label>&nbsp &nbsp
             <select name="category" id="category" width="50%" required>
             <option value=""></option>
             <option value="News">News</option>
             <option value="hack">Hacks</option>
             <option value="meme">Memes</option>
             <option value="enter">Entertainment</option>
             </select>
              <br>
              <br>
             <label for="textfield" required>Blog:</label>
               <br>
              <textarea name="texfield" id="" cols="100" rows="20" class="ml-5"></textarea>
              <br>
           
             <br><br>
            <label for="author">Author:</label>
              <input type="text" name="author" id="desc" required>
               <br>
            <label for="image" class="mt-3">Choose an image:</label>&nbsp &nbsp &nbsp &nbsp 
              <input type="file" value="Uploadphoto" name="uploadfile" id="image-btn" class="mt-3" required>
               <br>
               <br>
            <button class="btn btn-success" type="submit" name="submit">Submit</button>
            </div><!--controls -->
           </div><!--container -->
  </form>
  </body>
</html>
  <script>
document.getElementById("mytext").disabled=true;
document.getElementById("text2").disabled=true;
document.getElementById("mytext").style.border="none";
document.getElementById("mytext").style.width="100px";
var n =  new Date();
 var y = n.getFullYear();
 var m = n.getMonth() + 1;
var d = n.getDate();
document.getElementById("text2").value = m + "/" + d + "/" + y;
document.getElementByTagName("input").style.fontFamily="cursive";
</script>
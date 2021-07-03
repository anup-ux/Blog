<?php
include 'link.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="JS.js"></script>
    <link rel="stylesheet" href="css/cards.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" href="images/favi1.ico">
   <link rel="stylesheet" href="css/blog1.css">
    <script src="https://kit.fontawesome.com/315be1222b.js"></script>
    <title>BLOG Zilla</title>
</head>
<body>
    <?php include 'header1.php'; ?>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/banner1.jpg" alt="First slide" height="600" width="300">
                    <div class="carousel-caption">
                        <h3 style=" font-family: 'Lobster', cursive; color:lawngreen;">Create a Lifestyle</h3>
                        <p style=" font-family: 'Lobster', cursive; color:lawngreen;">You Desire</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/b5.jpg" alt="Second slide" height="600" width="300">
                    <div class="carousel-caption" id="carousel-caption1">
                        <h3 style=" font-family: 'Lobster', cursive; color:red;">Engaging Purposefull</h3>
                        <p style=" font-family: 'Lobster', cursive; color:red;">And Creative</p>
                    </div>
                </div>
                <div class="carousel-item">

                    <img class="d-block w-100" src="images/m1.jpg" alt="Third slide" height="600" width="300">
                    <div class="carousel-caption">
                        <h3 style=" font-family: 'Lobster', cursive; color:lawngreen;">Create a Lifestyle</h3>
                        <p style=" font-family: 'Lobster', cursive; color:lawngreen;">For you</p>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    



  <?php
   include ('connection.php');
   $query="SELECT * FROM blogwrite where category='enter' ";
   $data=mysqli_query($conn,$query);
   $total=mysqli_num_rows($data);
   ?>
<div class="Category_list " id="enter" >
    <span class="p-4">Entertainment>></span> 
</div>
<div class="container  ">
   <div class= "row mr-5 ">
        <?php
        if(empty($total)){
            echo"
            <div class='cards pt-5 ' style='margin-left:9rem;'>
            <div class='card-body'>
            <img src='images/empty.png'>
            </div>
            </div>";
        }
        // $result=mysqli_fetch_assoc($data);
         while($result=mysqli_fetch_assoc($data))
   { 
        $id=$result['id'];
        $title=$result['title'];
        $blog=$result['blog'];
         $img=$result['imgsrc'];
         $author=$result['author'];
         $cate=$result['category'];
         $date=$result['date'];

     echo "
       <div class='col-sm pt-4 pb-5'>
             <div class='card pb-2'>
                 <div class='card-body' style='width:20rem;'>
                     <img class='card-img-top ml-2' src='student/$img' height='125px' width='50px'>
                      <div class='card-body'>
                      <h5 class='card-title text-dark mr-1'>$title</h5>
                      <p class='card-text text-dark text-muted pr-5' style='font-size:0.8rem;' >$blog</p>
                     <span class='px-1' style='font-size:0.8rem; color:#2d4059;' ><i class='fas fa-user px-1'></i>$author<span>
                     <span class='px-1' style='font-size:0.8rem; color:#ff7171;'><i class='fas fa-tags px-1'></i>$cate<span>
                     <span class='px-1' style='font-size:0.8rem; color:#43658b;'><i class='fas fa-clock px-1'></i>$date<span>";
                     ?>
                   <form action="blog_display.php" method="GET">
                   <input type="hidden" value="<?php echo $id?>" name="id">
                     <button type="submit" class="btn btn-primary pl-2" name="read_more">Read more</a>
                     </form>
                    </div>
                </div>
            </div>
     </div>
         
      <?php  
    } 
?>
  </div>
  </div>
  <!-- ********************************HACK CATEGORTY CODING*************** -->
  <?php
   include ('connection.php');
   $query="SELECT * FROM blogwrite where category='hack' ";
   $data=mysqli_query($conn,$query);
   $total=mysqli_num_rows($data);
   ?>
<div class="Category_list" id="hack">
<span class="p-4">Hack>></span> 
</div>
<div class="container  ">
   <div class= "row mr-5 ">
        <?php
        if(empty($total)){
            echo"
            <div class='cards pt-5 ' style='margin-left:9rem;'>
            <div class='card-body'>
            <img src='images/empty.png'>
            </div>
            </div>";
        }
        // $result=mysqli_fetch_assoc($data);
         while($result=mysqli_fetch_assoc($data))
   { 
        $id=$result['id'];
        $title=$result['title'];
        $blog=$result['blog'];
         $img=$result['imgsrc'];
         $author=$result['author'];
         $cate=$result['category'];
         $date=$result['date'];

     echo "
       <div class='col-sm pt-4 pb-5'>
             <div class='card pb-2'>
                 <div class='card-body' style='width:20rem;'>
                     <img class='card-img-top ml-2' src='student/$img' height='125px' width='50px'>
                      <div class='card-body'>
                      <h5 class='card-title text-dark mr-1'>$title</h5>
                      <p class='card-text text-dark text-muted pr-5' style='font-size:0.8rem;' >$blog</p>
                     <span class='px-1 ' style='font-size:0.8rem; color:#2d4059;' ><i class='fas fa-user px-1'></i>$author<span>
                     <span class='px-1' style='font-size:0.8rem; color:#ff7171;'><i class='fas fa-tags px-1'></i>$cate<span>
                     <span class='px-1' style='font-size:0.8rem; color:#43658b;'><i class='fas fa-clock px-1'></i>$date<span>";
                   
                     ?>
                   <form action="blog_display.php" method="GET">
                   <input type="hidden" value="<?php echo $id?>" name="id">
                     <button type="submit" class="btn btn-primary pl-2" name="read_more">Read more</a>
                     </form>
                    </div>
                </div>
            </div>
     </div>
         
      <?php 
      
    } 
    
   
    
   
?>
  </div>
  </div>
  <!-- *******************************tRICK category************************ -->
  <?php
   include ('connection.php');
   $query="SELECT * FROM blogwrite where category='news' ";
   $data=mysqli_query($conn,$query);
   $total=mysqli_num_rows($data);
   ?>
<div class="Category_list" id="trick">
<span class="p-4">News>></span> 
</div>
<div class="container  ">
   <div class= "row mr-5 ">
        <?php
       if(empty($total)){
        echo"
        <div class='cards pt-5 ' style='margin-left:9rem;'>
        <div class='card-body'>
        <img src='images/empty.png'>
        </div>
        </div>";
    }
        // $result=mysqli_fetch_assoc($data);
         while($result=mysqli_fetch_assoc($data))
   { 
        $id=$result['id'];
        $title=$result['title'];
        $blog=$result['blog'];
         $img=$result['imgsrc'];
         $author=$result['author'];
         $cate=$result['category'];
         $date=$result['date'];

     echo "
       <div class='col-sm pt-5 pb-5'>
             <div class='card pb-2'>
                 <div class='card-body' style='width:20rem'; '>
                     <img class='card-img-top ml-2' src='student/$img' height='125px' width='50px'>
                      <div class='card-body'>
                      <h5 class='card-title text-dark mr-1'>$title</h5>
                      <p class='card-text text-dark text-muted pr-5' style='font-size:0.8rem;' >$blog</p>
                     <span class='px-1 ' style='font-size:0.8rem; color:#2d4059;' ><i class='fas fa-user px-1'></i>$author<span>
                     <span class='px-1 ' style='font-size:0.8rem; color:#ff7171;'><i class='fas fa-tags px-1'></i>$cate<span>
                     <span class='px-1 ' style='font-size:0.8rem; color:#43658b;'><i class='fas fa-clock px-1'></i>$date<span>";
                     ?>
                   <form action="blog_display.php" method="GET">
                   <input type="hidden" value="<?php echo $id?>" name="id">
                     <button type="submit" class="btn btn-primary pl-2 mt-2" name="read_more">Read more</a>
                     </form>
                    </div>
                </div>
            </div>
     </div>
         
      <?php  
    } 
?>
  </div>
  </div>
  <!-- ******************************* Memes coding******************************************* -->
  <?php
   include ('connection.php');
   $query="SELECT * FROM blogwrite where category='meme' ";
   $data=mysqli_query($conn,$query);
   $total=mysqli_num_rows($data);
   
   ?>
<div class="Category_list" id="meme">
<span class="p-4">Memes>></span> 
</div>
<div class="container  ">
   <div class= "row mr-5 ">
        <?php
        if(empty($total)){
            echo"
            <div class='cards pt-5 ' style='margin-left:9rem;'>
            <div class='card-body'>
            <img src='images/empty.png'>
            </div>
            </div>";
        }
        // $result=mysqli_fetch_assoc($data);
         while($result=mysqli_fetch_assoc($data))
   { 
        $id=$result['id'];
        $title=$result['title'];
        $blog=$result['blog'];
         $img=$result['imgsrc'];
         $author=$result['author'];
         $cate=$result['category'];
         $date=$result['date'];

     echo "
       <div class='col-sm pt-4 pb-5'>
             <div class='card'>
                 <div class='card-body' style='width:20rem;'>
                     <img class='card-img-top ml-2' src='student/$img' height='125px' width='50px'>
                      <div class='card-body'>
                      <h5 class='card-title text-dark mr-1'>$title</h5>
                      <p class='card-text text-dark text-muted pr-5' style='font-size:0.8rem;' >$blog</p>
                     <span class='px-1' style='font-size:0.8rem; color:#2d4059;' ><i class='fas fa-user px-1'></i>$author<span>
                     <span class='px-1' style='font-size:0.8rem; color:#ff7171;'><i class='fas fa-tags px-1'></i>$cate<span>
                     <span class='px-1' style='font-size:0.8rem; color:#43658b;'><i class='fas fa-clock px-1'></i>$date<span>";
                     ?>
                   <form action="blog_display.php" method="GET">
                   <input type="hidden" value="<?php echo $id?>" name="id">
                     <button type="submit" class="btn btn-primary pl-2" name="read_more">Read more</a>
                     </form>
                    </div>
                </div>
            </div>
     </div>
       

      <?php  
    } 
?>
  </div>
  </div>
    <?php include 'footer1.php'; ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
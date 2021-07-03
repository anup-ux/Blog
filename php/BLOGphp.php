<?php
include "connection.php";
if (isset($_POST['submit'])) 
{
 $title=mysqli_real_escape_string($conn,$_POST['title']);
 $category=mysqli_real_escape_string($conn,$_POST['category']);
 $blog=mysqli_real_escape_string($conn,$_POST['texfield']);
 $author=mysqli_real_escape_string($conn,$_POST['author']);
 $filename=$_FILES["uploadfile"]["name"];
 $tempname=$_FILES["uploadfile"]["tmp_name"];
 $folder="student/".$filename;
 move_uploaded_file($tempname,$folder);
 $insert_details="INSERT INTO blogwrite (title,category,blog,date,author,imgsrc) VALUES( '$title','$category','$blog',CURDATE(),'$author','$filename')";
    $result=mysqli_query($conn,$insert_details) or die("failed");
    echo  "<script>
    window.location.href = 'admin/dashboard.php';
  </script>";

} 
if (isset($_POST['Comment'])){
  $user=mysqli_real_escape_string($conn,$_POST['user_name']);
  $comment=mysqli_real_escape_string($conn,$_POST['comment']);
  $blog_id=mysqli_real_escape_string($conn,$_POST['blog_id']);
  $insert_deets="INSERT INTO comments (user,comment,post_id) VALUES('$user','$comment','$blog_id' )";
    $results=mysqli_query($conn,$insert_deets) or die("failed");
    
    header("location:index1.php");
  
}

?>

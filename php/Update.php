<?php
include ("connection.php");
if(isset($_POST['submit']))
{
    if(isset($_POST["edit_id"])){
        $uid=$_POST["edit_id"];
      }
      
      if(isset($_POST['title_edit'])){
        $titles=$_POST['title_edit'];
      }
      
      $query="UPDATE blogwrite SET title='$titles' WHERE id='$uid' ";
     $data = mysqli_query($conn,$query);
          if($data)
          {
         echo "done";
           }
   
 }
 else{
     echo"ndone";
 }
      ?>
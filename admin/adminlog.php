<?php
include "../connection.php";
if (isset($_POST['submit']))
{
    $user_name=mysqli_real_escape_string($conn,$_POST['username']);
    $pass_word=mysqli_real_escape_string($conn,$_POST['password']);
    $get_data="SELECT username,pwd from administrator where  username='$user_name'&& pwd='$pass_word'";
    $result=mysqli_query($conn,$get_data) or die("query failed..");
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
   if(mysqli_num_rows($result)>0)
   {
        echo "<script>
              alert('***login successful***');
              window.location.href = 'dashboard.php';
            </script>";
   }    else
       {
         echo "<script>
           alert('***invalid username or password***');
           window.location.href = 'admin.php';
           </script>";
        }
}
?>

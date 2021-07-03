<?php
session_start();
include "connection.php";
if (isset($_POST['Login'])) {
    $cust_email=mysqli_real_escape_string($conn,$_POST['email']);
    $cust_pass=mysqli_real_escape_string($conn,$_POST['pass']);
    $get_data="SELECT email,pwd,fname,image,id from register where email='$cust_email'&& pwd='$cust_pass'";
    $result=mysqli_query($conn,$get_data) or die("query failed..");
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
   
if(mysqli_num_rows($result)>0)
{
    $_SESSION['name'] = $row['fname'];
    $_SESSION['img'] = $row['image'];
    $_SESSION['id'] = $row['id'];
    echo  "<script>
              alert('***login successful***');
            window.location.href = 'index1.php';
            </script>";
     
}else{
   echo "<script>
   alert('***invalid username or password***');
   window.location.href = 'login.php';
</script>";
}
}
?>

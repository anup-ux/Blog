<?php
include "connection.php";
if (isset($_POST["submit"])) {
    $cust_name=mysqli_real_escape_string($conn,$_POST['name']);
    $cust_pass=mysqli_real_escape_string($conn,$_POST['password']);
    $get_data="SELECT * from dummy where name='$cust_name' && password='$cust_pass'";
    $result=mysqli_query($conn,$get_data) or die("query failed..");
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
   
if(mysqli_num_rows($result)>0)
{
    echo "<script>
    alert('done');
    window.location.href = 'index1.php';
 </script>";    
}
else{
    echo "not done";
}
}
?>

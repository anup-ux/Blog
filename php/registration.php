<?php
include "connection.php";
if (isset($_POST['submit'])) {
    $cust_name=mysqli_real_escape_string($conn,$_POST['name']);
    $cust_email=mysqli_real_escape_string($conn,$_POST['email']);
    $cust_pass=mysqli_real_escape_string($conn,$_POST['psw']);
    $filename=$_FILES["image"]["name"];
    $tempname=$_FILES["image"]["tmp_name"];
    $folder="student/".$filename;
   $get_data="select email from register where email='$cust_email'";
   $result=mysqli_query($conn,$get_data) or die("query failed..");
if(mysqli_num_rows($result)>0)
{
    echo "<script>
              alert('***This user already exist***');
             window.location.href = 'register.php';
          </script>";
}else{
    $insert_details="INSERT INTO register(fname,email,pwd,image) VALUES('$cust_name','$cust_email','$cust_pass','$filename')";
    $result=mysqli_query($conn,$insert_details) or die("failed");
    move_uploaded_file($tempname,$folder);
    echo "<script>
              alert('>> Resistration successful -:)');
         window.location.href ='login.php';
          </script>";
}
}
if (isset($_POST['add_user'])) 
{
 $name=mysqli_real_escape_string($conn,$_POST['name']);
 $email=mysqli_real_escape_string($conn,$_POST['email']);
 $pass=mysqli_real_escape_string($conn,$_POST['password']);
 $filename=$_FILES["user_img"]["name"];
 $tempname=$_FILES["user_img"]["tmp_name"];
 $folder="student/".$filename;
 $get_details="select email from register where email='$email'";
 $data=mysqli_query($conn,$get_details) or die("query failed..");
if(mysqli_num_rows($data)>0)
{
  echo "<script>
            alert('***This user already exist***');
           window.location.href = 'admin/Add-user.php';
        </script>";
}
else{
 $insert_detail="INSERT INTO register (fname,email,pwd,image) VALUES( '$name','$email','$pass','$filename')";
    $data=mysqli_query($conn,$insert_detail) or die("failed");
    move_uploaded_file($tempname,$folder);
    echo "<script>
   
   window.location.href = 'admin/user_admin.php';
</script>";

} 
}
// else{
//     echo "not";
// }



if (isset($_POST['sub']))
 {
    $gmail=$_POST['gmail'];
    $get_gmail="select gmail from subs where gmail='$gmail'";
   $resultss=mysqli_query($conn,$get_gmail) or die("query failed..");
   if(mysqli_num_rows($resultss)>0)
  {
    echo "<script>
              alert('***you have already subscribed***');
             window.location.href = 'index1.php';
          </script>";
  }
   else
         {
              $insert_gmail="INSERT INTO subs(gmail) VALUES('$gmail')";
              $result=mysqli_query($conn,$insert_gmail) or die("failed");
                 echo "<script>
                 alert('>>Thank you for subscribing -:)');
                window.location.href ='index1.php';
                </script>";
         }
}
?>
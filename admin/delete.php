<?php
include '../connection.php';
if (isset($_GET['delete'])) 
{
$id=$_GET['edit_id'];
$query="DELETE FROM blogwrite WHERE id='$id'";
$data=mysqli_query($conn,$query);
  if($data)
   {
echo "deleted";
?>
<META HTTP-EQUIV="refresh" CONTENT="0; URL=http://localhost/blog/admin/blogs_view.php">
<?php
   }
else
{
echo "not deleted";
}


} 
else{
   
echo "not done";
}



?>
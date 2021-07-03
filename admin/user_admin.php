<?php
include '../link.php';
include "../connection.php";
$query="SELECT * FROM register";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!=0){
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="admin.css">
  <title>User | admin</title>
</head>
<body>
<div class="nav-container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark w-auto ">
              <a class="navbar-brand " href="dashboard.php"> <i class="fas fa-home"></i>BLOG ADMIN</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
           </button>

              <div class="collapse navbar-collapse " id="navbarSupportedContent">
              
              </div>
        </nav>

<div class="btn-toolbar pb-3 pt-3">
<a href="add-user.php" class="btn btn-primary block">  Add a User</a>

</button>
</div>

<div class="well">
    <table class="table" cellpadding="5%" width="80%" autofocus>
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Email</th>
          <th>Image</th>
          <th colspan="3">Operations</th>
        </tr>
        <?php  
        while($result=mysqli_fetch_assoc($data))
{
          ?>
  <tr>
           <td><?php echo $result['id'];?></td>
           <td><?php echo $result['fname'];?></td>
           <td><?php echo $result['email'];?></td>
           <td> <?php echo '<img  alt="image" width="100" height="100" src="../student/'.$result['image'].'">'?></td> 
        <td>
          <form action="user_edit.php" method="POST">
             <input type="hidden" name="edit_id" value= "<?php echo $result['id']?>"> 
             <button type="submit" name="edit" class="btn btn-success" style="width:4rem;">Edit</button>
         </form>
       </td>
       <td>
       <form action="user_del.php" method="GET">
             <input type="hidden" name="edit_id" value= "<?php echo $result['id']?>"> 
             <button type="submit" name="delete" class="btn btn-danger ml-3" style="width:5rem;" onclick="return confirm_del()">Delete</button>
         </form>
       </td>
  </tr>
 <?php
}
?>

</table>
<?php
 }
 else

 {
   echo "no records found";
 }
?>
<script>
function confirm_del(){
  return confirm("Are you sure to delete?")
}

</script>
</body>
</html>
     
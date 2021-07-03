<style>
   .navbar{
    width:100%;
  }
  body{
    padding:1rem;
  }
  .page-header{
    padding-bottom:4rem;
  }
  td,th{
    padding:1rem;
    border:3px solid black;
  }
  hr{
    width:100%;
    height:3rem;
  }
  th,td{
    padding:1rem;
  }
  </style>
<?php
   include '../link.php';
   include ("../connection.php");
   $query="SELECT * FROM blogwrite";
   $data=mysqli_query($conn,$query);
   $total=mysqli_num_rows($data);
 if($total!=0){
?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blogs|view</title>
</head>
<body>
<div class="nav-container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark w-auto ">
              <a class="navbar-brand " href="#"> <i class="fas fa-home"></i>BLOG ADMIN</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
           </button>

              <div class="collapse navbar-collapse " id="navbarSupportedContent">
             
              </div>
        </nav>
      
            <div class="page-header">
              <div class="row">
                  <div class="col-sm-8 mt-5 bg-light" style="width="100%">
                      <span style="text-decoration: none; color: inherit; padding:5rem; font-size:2rem;" href=""><img src="../images/feed.png">Blogs</span>
                   </div>
              </div>  
            </div> 
            <a  href="../blogWrite.php" class="btn btn-primary pt-2" style="margin-left:6rem; margin-top:1rem;">Add</a>

  <table>
            <tr>
              <th align>Id</th>
              <th>Title</th>
              <th>Category</th>
              <th>Blog</th>
              <th>Images</th>
              <th colspan="2">Operations</th>
              <hr style="width=1rem";>
            </tr>
    
          <?php  
        while($result=mysqli_fetch_assoc($data))
{
          ?>
  <tr>
           <td><?php echo $result['id'];?></td>
           <td><?php echo $result['title'];?></td>
           <td><?php echo $result['category'];?></td>
           <td style="width:800;"><?php echo $result['blog'];?></td>
           <td> <?php echo '<img width="100" height="100" src="../student/'.$result['imgsrc'].'">'?></td> 
        <td>
          <form action="blog_update.php" method="GET">
             <input type="hidden" name="edit_id" value= "<?php echo $result['id']?>"> 
             <input type="submit" name="edit" class="btn btn-success mt-3" value="edit"></input>
         </form>
       </td>
        <td>
          <form action="delete.php" method="GET">
             <input type="hidden" name="edit_id" value= "<?php echo $result['id']?>"> 
             <button type="submit" name="delete" class="btn btn-danger mt-3" onclick="return confirm_del()">Delete</button>
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
   echo "no records found
   <a class='btn btn-secondary' href='blogWrite.php'>Add</a>";
   
   
 }
?>
<script>
function confirm_del(){
  return confirm("Are you sure to delete?")
}

</script>
 </body>
</html>
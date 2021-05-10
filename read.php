<?php
include "php/read.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link rel="stylesheet" href="style/read.css">

    <title>CRUD</title>
</head>
<body>
  <div class="container">
<div class="Box">
<h3 class="display-4 text-center">Crate</h3><br>

<?php
  if(isset($_GET['success'])){



    ?>
    <div class="alert alert-success" role="alert">
        <?php echo $_GET['success'] ;?>
     </div>
<?php } ?>
<?php
if(mysqli_num_rows($result)){


?>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th>Action</th>
   
    </tr>
  </thead>
  <tbody>
    <?php 
    $i =0;
    while($row = mysqli_fetch_assoc($result)){

   $i++
    ?>
    <tr>
      <th scope="row"><?php echo $i;?> </th>
      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['email'];?></td>
  
      <td ><a class="btn btn-warning" href="update.php?id=<?php echo $row['id']?>">Update</a>
      <a class="btn btn-danger" href="php/delete.php?id=<?php echo $row['id']?>">Delete</a>
      
      </td>
   
   
    </tr>
  <?php }?>
  </tbody>
</table>

<?php } ?>
<div class="link-primary">
<a href="index.php" class="link-primary">Create</a>
</div>









</div>
 






  </div>
</body>
</html>
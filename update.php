<?php 

include "php/update.php";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link rel="stylesheet" href="style/index.css">

    <title>Update</title>
</head>
<body>
  <div class="container">
 


  <form id="from" action="php/update.php" method="post">

  <div class="form-group">
        <h3 class="display-4 text-center">Update</h3> <hr><br>

<?php
  if(isset($_GET['error'])){



    ?>
    <div class="alert alert-warning" role="alert">
        <?php echo $_GET['error'] ;?>
     </div>
<?php } ?>
 


  
   

            <label for="name">Name</label>
            <input type="name" class="form-control" id="name" name="name" aria-describedby="emailHelp"
            value="<?php echo $row['name'] ?>"  
		          
            
            
             >
           
        </div>


            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email"
                value="<?php echo $row['email'] ?>" 
		       
                >
            </div>

<input type="text" name="id" value="<?php echo $row['id']?>" >
        <button type="submit" class="btn btn-danger" name="update" >Update</button>
        <a href="read.php" class="link-primary">View</a>




</form>





  </div>
</body>
</html>
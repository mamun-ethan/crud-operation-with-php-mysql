<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link rel="stylesheet" href="style/index.css">

    <title>CRUD</title>
</head>
<body>
  <div class="container">
 


  <form id="from" action="php/create.php" method="post">


        <div class="form-group">
        <h3 class="display-4 text-center">Crate</h3> <hr><br>
<?php
  if(isset($_GET['error'])){



    ?>
    <div class="alert alert-warning" role="alert">
        <?php echo $_GET['error'] ;?>
     </div>
<?php } ?>
 


  
   

            <label for="name">Name</label>
            <input type="name" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter Your Name"  
		          
            
            >
           
        </div>


            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email" 
		         

              
                >
            </div>


        <button type="submit" class="btn btn-danger" name="create" >Create</button>
        <a href="read.php" class="link-primary">View</a>




</form>





  </div>
</body>
</html>
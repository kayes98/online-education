<?php

include 'config.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Success</title>

   <link rel="stylesheet" href="stylephp.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>Registration Successful</h3>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
            
         }
         
      }
      ?>
      
      
      <a class="btn" href="login.php">login now</a>
      
   </form>

</div>

</body>
</html>
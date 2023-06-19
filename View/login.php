<?php 
  $message = isset($msg)? $msg:'';      
?>

   




<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oliveti komerc</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="../Css/style.css">
    <link rel="stylesheet" href="../Css/styleLogin.css">
  </head>

    

    <body class="main-bg">

   <?php
        if($message != ''){
            ?>
                 <div class="row justify-content-center  item-align-center items-center">
      
      <div class=" col-2 m-5 text-center alert alert-danger " role="alert">
                      <?php echo $message ?>
                  </div>
      
  </div>
            <?php
        }
   ?>

        <div class="login-container text-c animated flipInX mt-5">
                <div>
                    <h1 class="logo-badge text-whitesmoke"><span class="fa fa-user-circle"></span></h1>
                </div>
                    <h3 class="text-whitesmoke">Ulogujte se</h3>
                    
                <div class="container-content">
                    <form class="margin-t" method="GET" action="indexSwitch.php">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="*****" name="password">
                        </div>
                        <button type="submit" class="form-button button-l margin-b">Uloguj se</button>
                        <p class="text-whitesmoke text-center"><small>Nemate nalog?</small></p>
                        <a class="text-darkyellow" href="registracija.php"><small>Napravite ga ovde!</small></a>

                     <input type="hidden" name="page" value="login">

                    </form>
                    <p class="margin-t text-whitesmoke"><small> Oliveti &copy; 2018</small> </p>
                   
                   

                </div>
            </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</body>
</html>
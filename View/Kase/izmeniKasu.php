
<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="../../Css/style.css">


</head>
<body>
<a href="../kase.php" class="btn btn-secondary btn-lg active m-5" role="button" aria-pressed="true">Nazad</a>

<div class="container">

<div class="row justify-content-center text-center m-5">
          <h1>Izmeni kasu</h1>
      </div>

            <form action="../indexSwitch.php" method="POST">
            <div class="row justify-content-between align-items-center p-5 shadow  rounded senka">
            <div class="col-5">

            
            <h2><span class="label label-success">Id kase:</span></h2>
            <input type="number" class="form-control" name="id" >
            <br>

            <h2><span class="label label-success">Naziv kase:</span></h2>
            <input type="text" class="form-control" name="naziv" >
            <br>
            
            <input type="hidden" name="page" value="izmeniKasu">
            </div>
            <div class="col-5 text-center">
            <h2><span class="label label-success">Tip kase:</span></h2>
            <input type="number" class="form-control" name="tip"  >
            <br>
            <button type="submit" class="btn btn-secondary btn-lg px-5 ">Izmeni kasu</button>
            </div>

            </form>

</div>

</body>
</html>
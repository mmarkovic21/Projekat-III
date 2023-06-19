
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
<a href="../usluge.php" class="btn btn-secondary btn-lg active m-5" role="button" aria-pressed="true">Nazad</a>

<div class="container">

<div class="row justify-content-center text-center m-5">
          <h1>Obrisi uslugu</h1>
      </div>

            <form action="../indexSwitch.php" method="POST">
            <div class="row justify-content-between align-items-center p-5 shadow  rounded senka">
            <div class="col-5">

            
            <h2><span class="label label-success">Id usluge:</span></h2>
            <input type="text" class="form-control" name="id" >
            <br>

        
            
            <input type="hidden" name="page" value="obrisiUslugu">
            </div>
            <div class="col-5 text-center">
       
            <br>
            <button type="submit" class="btn btn-secondary btn-lg px-5 ">Obrisi uslugu</button>
            </div>

            </form>

</div>

</body>
</html>
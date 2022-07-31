<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./../css/style.css">
    <title>Gatito</title>
</head>
<body>
<div class="container rounded-3">
        <div class="row bg-light rounded-3 p-4">
            <div class="col-sm-6 d-flex align-items-center justify-content-center" >
                <img src="https://i.gifer.com/2iFd.gif" alt="" width="240vh">
            </div>
            <div class="col-sm-6 d-flex flex-column align-items-center justify-content-center">
                <h3>:3</h3>
<?php
    require_once("./../negocio/RN_cat.php");
    $id = $_GET["id"];
    $obj_consult = new CatBT();
    $result = $obj_consult->consulta($id);

?>
                <p class="text-center">
                    <?php while($row = mysqli_fetch_object($result)){
                        echo $row->description;
                    } 
                    ?>
                </p>
            </div>
        </div>
    </div>  
</body>
</html>
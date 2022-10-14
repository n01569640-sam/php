<?php
require_once 'database.php';
$dbconn = database::getDB();

    $sql = "Select * FROM cars";

    $pdostm = $dbconn->prepare($sql);
    $pdostm->execute();
    $car = $pdostm->fetchAll();

?>

<html lang="en">
<head>
    <title>Humber</title>
    <meta name="description" content="system car">
    <meta name="keywords" content="cars">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
<p class="h1 text-center">system car</p>
<div class="m-1">
   
    <table class="table table-bordered tbl">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">make</th>
            <th scope="col">model</th>
            <th scope="col">year</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
 <?php foreach($cars as $car)
 { ?>
            <tr>
                <th><?= $car->Id; ?></th>
                <td><?= $car->make; ?></td>
                <td><?= $car->model; ?></td>
                <td><?= $car->year; ?></td>
                <td>
                    <form action="./updateCars.php" method="post">
                        <input type="hidden" name="Id" value="<?= $car->Id; ?>"/>
                        <input type="submit" class="button btn btn-primary" name="updateCars" value="Update"/>
                    </form>
                </td>
                <td>
                    <form action="./Delcars.php" method="post">
                        <input type="hidden" name="Id" value="<?= $car->Id; ?>"/>
                        <input type="submit" class="button btn btn-danger" name="Deletears" value="Delete"/>
                    </form>
                </td>
            </tr>
         <?php 
        } ?>
        </tbody>
    </table>
    <a href="./Addcars.php" id="btn_Addcars" class="btn btn-success btn-lg float-right">Addcars</a>

</div>
</body>
</html>


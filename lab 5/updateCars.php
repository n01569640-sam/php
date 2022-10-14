<?php
require_once 'models/Database.php';

$make = $model = $year = '';
if(isset($_POST['Id'])) {
    $Id = $_POST['Id'];

    $dbconn = Database::getDB();

    $sql = "Select * from car where Id = :Id";
    $pdostm = $dbconn->prepare($sql);
    $pdostm->bindParam(':Id', $Id);
    $pdostm->execute();
    $car = $pdostm->fetch();
    $name = $car->make;
    $email = $car->model;
    $program = $car->year;

}

if(isset($_POST['updateCars']))
{
    $make = $_POST['make'];
    $model = $_POST['model'];
    $year= $_POST['year'];
    $Id = $_POST['Id'];

    $dbconn = Database::getDB();

    $sql = "update cars set make= :make, model = :model, year = :year where Id= :Id";
    $pdostm = $dbconn->prepare($sql);

    $pdostm->bindParam(':Id', $Id);
    $pdostm->bindParam(':make', $make);
    $pdostm->bindParam(':model', $model);
    $pdostm->bindParam(':year', $year);

    $count = $pdostm->execute();
    if($count)
    {
        header("Location:list-Cars.php");
    } else
     {
        echo 'problem updating';
    }

}

?>

<html lang="en">

<head>
    <title>Addcars - car system </title>
    <meta name="description" content="car system">
    <meta name="keywords" content="Student,Humber, College, Admission">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/main.css" type="text/css">
</head>

<body>

<div>
    <!--    Form to Updatecars -->
    <form action="" method="post">
        <input type="hidden" name="sid" value="<?= $Id ?>" />
        <div class="form-group">
            <label for="make">make :</label>
            <input type="text" class="form-control" name="make" id="make" value=<?= $make ?>""
                   placeholder="Enter name">
            <span style="color: silver">

            </span>
        </div>
        <div class="form-group">
            <label for="model">model :</label>
            <input type="text" class="form-control" id="model" name="model" value="<?= $email ?>
            " placeholder="Enter model">
            <span style="color: silver">

            </span>
        </div>
        <div class="form-group">
            <label for="program">Program :</label>
            <input type="text" name="year" value="<?= $year ?>" class="form-control"
                   id="year" placeholder="Enter year">
            <span style="color: silver">

            </span>
        </div>
        <a href="./list car.php" id="btn_back" class="btn btn-success float-left">Back</a>
        <button type="submit" name="updateCars"
                class="btn btn-primary float-right" id="btn-submit">
            UpdateCars
        </button>
    </form>
</div>

</body>
</html


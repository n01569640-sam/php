<?php


if(isset($_POST['Add cars']))

{
    $name = $_POST['make'];
    $email = $_POST['model'];
    $program = $_POST['year'];

    require_once 'models/Datbse.php';
    $dbconn = Database::getDB();

    $sql = "insert into cars (make, model, year) values (:make, :model, :year)";
    $pdostm = $dbconn->prepare($sql);

    $pdostm->bindParam(':make', $make);
    $pdostm->bindParam(':model', $model);
    $pdostm->bindParam(':year', $year);

    $count = $pdostm->execute();
    if($count){
        header("Location: list-Cars.php");
    } else {
        echo 'problem adding';
    }


}

?>

<html lang="en">

<head>
    <title>Add cars</title>
    <meta name="description" content="cars">
    <meta name="keywords" content="cars">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/main.css" type="text/css">
</head>

<body>

<div>
    <!--    Form to Add  cars -->
    <form action="" method="post">

        <div class="form-group">
            <label for="make">make :</label>
            <input type="text" class="form-control" id="make" name="make" value=""
             placeholder="Enter make">
            <span style="color: silver">

            </span>
        </div>
        <div class="form-group">
            <label for="model">model :</label>
            <input type="text" class="form-control" id="model" name="model" value="" 
            placeholder="Enter model">  
            <span style="color: silver">

            </span>
        </div>
        <div class="form-group">
            <label for="year">year :</label>
            <input type="text" class="form-control" id="year" name="year" value="" 
            placeholder="Enter year">
            <span style="color: silver">

            </span>
        </div>
        <a href="./list-Cars.php" id="btn_back" class="btn btn-success float-left">Back</a>
        <button type="submit" name="Add Cars"
                class="btn btn-primary float-right" id="btn-submit">
            Add Cars
        </button>
    </form>
</div>

</body>
</html


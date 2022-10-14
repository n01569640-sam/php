<?php
if(isset($_POST['id']))
{
    $id= $_POST['id'];
    require_once 'models/database.php';
    $dbconn = database::getdb();

    $sql = "Delete from cars where id = :id";
    $pdostm = $dbconn->prepare($sql);
    $pdostm->bindParam(':id', $id);
    $count = $pdostm->execute();
    if($count)
    {
        header("Location: list-Cars.php");
    } else 
    {
        echo 'problem deleting';
    }

}

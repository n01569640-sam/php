<?php
$dbname = 'phpclass';
$user = 'root';
$pass = '';
$dsn = "mysql:host=localhost;dbname=$dbname";

try
{
    $dbconn = new PDO( $user, $pass, $dsn);
    $dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbconn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $sql = "Select * from students";

    $pdostm = $dbconn->prepare($sql);
    $pdostm->execute();

    foreach($pdostm as $cars)
    {
        echo "<li>" . $cars->make . "</li>";
    }

}
catch (PDOException $e)
{
    echo $e->getmessage();
}
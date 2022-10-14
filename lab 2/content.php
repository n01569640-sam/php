<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" 
content="width=device-width, initial-scale= 3.0">
</head>

<?php

$name_error=" ";

$nickname_error=" ";
$age_error=" ";
$email_error=" ";

$phone_error=" ";

if(isset($_GET["submit"]))
{

$name=$_GET['name'];
$nickname=$_GET['nickname'];
$age=$_GET['age'];
$email=$_GET['email'];
$phone=$_GET['phone'];

if(empty($name))
{

$name_error="<span style='color:red'; >name is empty</span>";

}
elseif(strlen($name)<=5){

$name_error="<span style='color:red'; >name should have more than 5 letters initials not allowed</span>";

}

if(empty($nickname))
{
    $nickname_error="<span style='color:red'; >nick name is empt></span>";

}elseif(strlen($nickname)<=2){

$nickname_error="<span style='color:red'; >name should have more than 5 letters initials not allowed</span>";

}


if(empty($age))
{

$age_error="<span style='color:red'; >age is empty></span>";

}
elseif($age<=18){

$age_error="<span style='color:red'; >your age should be greater than 18</span>";

}

if(empty($email)){


    $email_error="<span style='color:red'; >email is empty</span>";
    
    }
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
    
    $email_error="<span style='color:red'; >email is invalid</span>";
    
    }
    

if(empty($phone))
{

$phone_error="<span style='color:red'; >phone is empty</span>";

}
elseif(strlen($phone)<=9)
{

$phone_error="<span style='color:red'; >valid phone number</span>";

}

elseif(!preg_match('/^[0-9]{10}$/',$phone))

{

$phone_error="<span style='color:red'; >phone is invalid</span>";

}

}

?>

<body>

<?php 

include "head.php";

?>

<div class="content">



<form action="" method="GET" >

<h1>SIGN UP</h1>


<label for="name">NAME</label><br>

<input id="name" name="name" value=""><br>

<?php if(isset($name_error)){

?> <p> <?=$name_error ?></p>

<?php

} ?>



<label for="nickname">NICKNAME</label><br>

<input id="nickname" name="nickname" value=""><br>

<?php if(isset($nickname_error)){

?> <p> <?=$nickname_error ?></p>

<?php

} ?>



<label for="age">AGE</label><br>

<input id="age" name="age" value=""><br>

<?php if(isset($age_error)){

?> <p> <?=$age_error ?></p>

<?php

} ?>
<label for="email">EMAIL</label><br>

<input id="email" name="email" value=<?= isset($email) ? $email : '' ?> > <br>



<p> <?= $email_error ?></p>

<label for="phone">PHONE NUMBER</label><br>

<input id="phone" name="phone" value=""><br>

<?php if(isset($phone_error)){

?> <p> <?=$phone_error ?></p>

<?php

} ?>



<input class="submit" type="submit" name="submit" value="Submit" />

<?php 

include "footer.php";

?>

</form>



</div>

</body>



<style>

.content{

display:flex;

height:80%;

justify-content:center;

align-items:center;

}

</style>

</html>


<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=2.0">

</head>

<?php
$name_error="";

$nickname_error="";

$email_error="";

$phone_error="";

$age_error="";

$gender_error="";

if(isset($_GET["submit"]))
{


$name=$_GET['name'];

$nickname=$_GET['nickname'];

$email=$_GET['email'];

$phone=$_GET['phone'];

$age=$_GET['age'];

$gender=$_GET['gender'];


if(empty($name))

{

$name_error="<span style='color:Red'; >name is empty</span>";

}elseif(strlen($name)<=2)

{

$name_error="<span style='color:Red'; >name should have more than 5 letters initials not allowed</span>";

}

if(empty($nickname))

{

$nickname_error="<span style='color:Red'; >nick name is empty</span>";

}
elseif(strlen($nickname)<=2)
{

$nickname_error="<span style='color:Red'; >name should have more than 5 letters initials not allowed</span>";

}

if(empty($email))

{

    $email_error="<span style='color:Red'; >email is empty</span>";
    
    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
    
    {
    
    $email_error="<span style='color:Red'; >email is invalid</span>";
    
    }

if(empty($age))
{

$age_error="<span style='color:Red'; >age is empty></span>";

}
elseif($age<=18)
{

$age_error="<span style='color:Red'; >your age should be greater than 18</span>";

}

if(empty($phone))
{

$phone_error="<span style='color:Red'; >phone is empty</span>";

}elseif(strlen($phone)<=9){

$phone_error="<span style='color:Red'; >invalid phone number</span>";

}elseif(!preg_match('/^[0-9]{10}$/',$phone))

{

$phone_error="<span style='color:Red'; >phone is invalid</span>";

}

if(empty($gender)){
$gender_error="<span style='color:Red';>Select the Gender</span>";

}

}

?>

<body>

<?php 

include "head.php";

?>
<?php 
include "navigation.php";
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


<label for="nickname">Nickname</label><br>

<input id="nickname" name="nickname" value=""><br>

<?php if(isset($nickname_error)){

?> <p> <?=$nickname_error ?></p>

<?php

} ?>

<label for="email">EMAIL</label><br>

<input id="email" name="email" value=<?= isset($email) ? $email :'' ?> > <br>

<p> <?= $email_error ?></p>



<label for="phone">PHONE NUMBER</label><br>

<input id="phone" name="phone" value=""><br>

<?php if(isset($phone_error)){

?> <p> <?=$phone_error ?></p>

<?php

} ?>



<label for="age">AGE</label><br>

<input id="age" name="age" value=""><br>

<?php 

if(isset($age_error)){

?> <p> <?=$age_error ?></p>

<?php

}

?>

<label>

<input type="radio" name="gender" value="MALE" /> Male

</label 

<label>

<input type="radio" name="gender" value="Female" /> Female

</label>

<?php if(isset($gender_error))
{

?> 
<p> <?=$gender_error ?></p>

<?php

} 
?>

<label>SUBJECT</label> <br>

<Select name="subject">

<option selected="selected">Please Select</option>

<?php

$subject= array("C","JAVA","PHP","SQL");

foreach($subject as $value){

echo '<option value="'.$value.'">'.$value.'</option>';

}

?>





<input class="submit" type="submit" name="submit" value="Submit" />

<?php 

include "footer.php";

?>

</form>



</div>

</body>



<style>

.content
{

display:flex;
color: blue;

height:100%;

justify-content:center;

align-items:center;

}

</style>

</html>


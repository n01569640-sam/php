<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" conetnt="width=device-width, initial-scale=1.0">

</head>

<title> sign up</title>

<style>

li {

float: left;

}

li a {

display:block;

color: brown;

text-align:left;

padding: 19px 19px;

text-decoration:Line;

}



li a hover:not(.active){
background-color: #ff8000;

}

.active{

//background-color: #ff8000;


}

li img{

border:65px solid #650000;


}



.header
{

display:flex;

justify-content:space;

align-items:center;

height:50px;

width:100%;

border-bottom:2px solid orange;

padding-bottom:80px;

}

</style>



<?php



function display_navigation()

{ 


echo '<ul>

<li><a href="#Login">Login</a></li>

<li><a href="#Downloads">Downloads</a></li>

<li><a href="#Collection">Collection</a></li>

<li><a href="#Help">Help</a></li>

<li><a href="#Exit">Exit</a></li>

</ul>';

}

?>

<body>

<div class="header">

<ul>

<li> 
<img class="assignment" src="assignment.jpg" height="60px" width="100px" ALT="assignment" Align=CENTER>

<?php 

display_navigation(); 

?>



<p>Samdeep Singh Saini <break> N01569640</p>

</li>

</ul>

</div>

</body>

</html>


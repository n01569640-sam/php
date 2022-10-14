<?php

Class Page{

public $name;

public $age;


public function __construct($name, $age)
{

$this->name=$name;

$this->age=$age;


}

public function setName($name)

{

$this->name=$name;

}

public function getName()

{

return $this->name;

}

public function setage($age)

{

$this->age=$age;

}

public function getage()

{

return $this->age;

}

public function displayPage()

{

return '<br>'.$this->name.":".$this->age.":parentclass";

}

public function displaymyhtmlpage()

{

$go ='

<html>

<head>

<br>'.$this->body.'

</body>

</html>

';

echo $go;

}



}

?>

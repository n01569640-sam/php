<?php

include 'page.php';

Class child extends page

{

private $subject;



public function __construct($name, $age, $subject)

{

parent::__construct($name, $age);

$this->setSkills($subject);

}

public function setSkills($subject){

    $this->subject = $subject;
}    

public function displayUserSubject(){

return '<br>'.$this->getName() . '  ' . $this->subject." childclass";

}

}

?>

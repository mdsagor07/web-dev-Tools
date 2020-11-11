<?php
 class Fruit{

   public $name;
   public $color;

   function set_name($n){
     $this->name=$n;
 }
 function get_name()
 {
   return $this->name;
 }

 $mango = new Fruit();
 $mango->set_name("Mango");
 echo $mango->get_name();



 ?>

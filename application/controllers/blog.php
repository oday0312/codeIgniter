<?php
class Blog extends CI_Controller {

 function __construct()
 {
  parent::__construct();
 }

  public function index()
 {
  echo 'Hello World！';
 }

 public function comments()
 {
  echo '看这里！';
 }
    
 public function testInput($input1, $input2)
 {
     echo $input1 ;
     echo "  ";
     echo $input2;
 }
}
?>
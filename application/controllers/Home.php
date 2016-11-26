<?php

/**
 * Created by PhpStorm.
 * User: lab
 * Date: 26/11/2559
 * Time: 14:16
 */
class Home extends CI_Controller
{
 public function index(){
     echo "Hello";

 }
 public function test($Name="Bank",$lastname="Ninja"){

     echo "My Name is :" . $Name ." ". $lastname;


    }

    public function calculator($num1, $num2)
    {
        echo $num1 + $num2;
    }
}
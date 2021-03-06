<?php
  class FizzBuzz{
    function countNumber($number){
      for($i=1;$i<=$number;$i++){
        $result[$i] = $this->printResult($i);
      }
      return implode(',', $result);
    }

    function printResult($number){
      $this->number = $number;
      $result =  $this->checkfizz().$this->checkbuzz();
      return $result;
    }

    function checkfizz(){
      $fizz = ["Fizz","",""];
      return $fizz[$this->number%3];
    }

    function checkbuzz(){
      $check = $this->checknumber();
      $buzz = ["Buzz",$check,$check,$check,$check];
      return $buzz[$this->number%5];
    }

    function checknumber(){
      $check = ["",$this->number,$this->number];
      return $check[$this->number%3];
    }
 }
?>

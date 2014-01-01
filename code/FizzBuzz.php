<?php
  class FizzBuzz{
    function countNumber($number){
      if($number%3==0)
        return 'Fizz';
      if($number%5==0)
        return 'Buzz';
      return $number; 
    }
  }
?>

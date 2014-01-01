<?php
  class FizzBuzzTest extends PHPUnit_Framework_TestCase{
    function testFizzBuzzGivenOneWhenCountNumberThenReturnOne(){
      $expected = 1;
      $fizzBuzz = new FizzBuzz();
      $actual = $fizzBuzz->countNumber(1);
      $this->assertEquals($expected,$actual);
    }

    function testFizzBuzzGivenTwoWhenCountNumberThenReturnTwo(){
      $expected = 2;
      $fizzBuzz = new FizzBuzz();
      $actual = $fizzBuzz->countNumber(2);
      $this->assertEquals($expected,$actual);
    }

  }
?>

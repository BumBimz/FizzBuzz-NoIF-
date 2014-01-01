<?php
class FizzBuzzTest extends PHPUnit_Framework_TestCase{

    function setUp(){
      $this->fizzBuzz = new FizzBuzz();
    }

    function providerFizzBuzz(){
      $setInputAndExpected = array(
        array(1,1),
        array(2,2),
        array(3,'Fizz'),
        array(5,'Buzz'),
        array(6,'Fizz'),
        array(10,'Buzz'),
        array(15,'FizzBuzz'),
        array(30,'FizzBuzz')
      );
      return $setInputAndExpected;
    }

    /**
     * @dataProvider providerFizzBuzz
     */
    function testFizzBuzzGivenNumberWhenprintResultThenReturnExpected($number,$expected){
      $actual = $this->fizzBuzz->printResult($number);
      $this->assertEquals($expected,$actual);
    }

    function testFizzBuzzGivenOneWhenStartCountNumberReturnExpected(){
      $expected = "1";
      $actual = $this->fizzBuzz->countNumber(1);
      $this->assertEquals($expected,$actual);
    }

    function testFizzBuzzGivenTwoWhenStartCountNumberReturnExpected(){
      $expected = "1,2";
      $actual = $this->fizzBuzz->countNumber(2);
      $this->assertEquals($expected,$actual);
    }
     function testFizzBuzzGivenFifteenWhenStartCountNumberReturnExpected(){
      $expected = "1,2,Fizz,4,Buzz,Fizz,7,8,Fizz,Buzz,11,Fizz,13,14,FizzBuzz";
      $actual = $this->fizzBuzz->countNumber(15);
      $this->assertEquals($expected,$actual);
    } 
  }
?>

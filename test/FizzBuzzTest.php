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

    function providerCountFizzBuzz(){
      $setInputAndExpected = array(
        array(1,"1"),
        array(2,"1,2"),
        array(15,"1,2,Fizz,4,Buzz,Fizz,7,8,Fizz,Buzz,11,Fizz,13,14,FizzBuzz")
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

    /**
     * @dataProvider providerCountFizzBuzz
     */
    function testFizzBuzzGivenOneWhenStartCountNumberReturnExpected($number,$expected){
      $actual = $this->fizzBuzz->countNumber($number);
      $this->assertEquals($expected,$actual);
    }
  }
?>

<?php
class FizzBuzzTest extends PHPUnit_Framework_TestCase{

    function setUp(){
      $this->fizzBuzz = new FizzBuzz();
    }

    function providerFizzBuzz(){
      $setInputAndExpected = array(
        array(1,1),
        array(2,2),
        array(3,'Fizz')
      );
      return $setInputAndExpected;
    }

    /**
     * @dataProvider providerFizzBuzz
     */
    function testFizzBuzzGivenNumberWhenCountNumberThenReturnExpected($number,$expected){
      $actual = $this->fizzBuzz->countNumber($number);
      $this->assertEquals($expected,$actual);
    }

  }
?>

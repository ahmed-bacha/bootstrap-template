<?php
class MoneyTest extends PHPUnit_Framework_TestCase
{
   function setUp(){
        require_once "Money.php";
   }

    public function testCanBeNegated()
    {
        // Arrange
        $a = new Money(1);

        // Act
        $b = $a->negate();

        // Assert
        $this->assertEquals(-1, $b->getAmount());
    }

    public function ValidMin(){
        $a = new Money(100);
        $this->assertEquals(true,$a->validMin());
    }

    public function NotValidMin(){
        $a = new Money(100);
        $a->setMin(5);
        $this->assertEquals(false,$a->validMin());
    }

}
<?php  

require_once('TCHelpers.php');

class TCHelpersTest extends PHPUnit_Framework_TestCase
{

  function test_hello() {

    $this->assertStringStartsWith('hello,', 
      TCHelpers::instance('TheDOmagazine')->hello('pj'));

  }


} // end class 



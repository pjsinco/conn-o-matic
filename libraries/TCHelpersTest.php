<?php  

require_once(APP_PATH . '/vendors/simpletest/autorun.php');


// simpletest documentation:
// http://simpletest.org/en/unit_test_documentation.html

class TCHelpersTest extends UnitTestCase
{

  function __construct() {
    
  }

  function test_hello() {

    $this->assertTrue(
      TCHelpers::instance('TheDOmagazine')->hello('pj') === 
        'hello, pj, from TheDOmagazine'
    );

  }


} // end class 



<?php
/*
General app specific controller stored at the core level.
Allows for some general tasks like managing cookies, running tests, etc.
*/
class twitter_counts_coreutils_controller extends coreutils_controller {

	/*-------------------------------------------------------------------------------------------------
	This is an example controller to demonstrate unit testing 
	using PHP SimpleTest (http://www.simpletest.org/)
	
	To run, download SimpleTest and set the correct path below. 
	Then, run this method (ex: http://localhost/coreutils/test-database)
	
	To see what tests are being run, open /core/libraries/DB_Test.php.
	
	If you wish to get into testing, you should also check out PHPUnit (https://github.com/sebastianbergmann/phpunit/) 
	as a possible alternative to SimpleTest. It's not as easy out of the gate, but more robust.
	-------------------------------------------------------------------------------------------------*/
	public function test_database() {
		
		if(IN_PRODUCTION) die('This method can not be run while in poduction.');
		
		if(REMOTE_DB) die('This method can not be run on the remote database.');
		
		/*
		If running simpletest from this example controller, a copy of SimpleTest 
		needs to be downloaded and put in the following location.
		*/
		$simpletest_path = APP_PATH . "vendors/simpletest/autorun.php";
		
		if(file_exists($simpletest_path)) {
			include($simpletest_path);
		}
		else {
			die('simpletest could not be located at '.$simpletest_path);
		}
		
		# Run tests
		$test = New DB_Test();
			
	}

  public function test_tchelpers() {

    if (IN_PRODUCTION) die('This method cannot be run while in production.');
  
    // run tests
    $test = new TCHelpersTest();

  }
	
	

} // eoc

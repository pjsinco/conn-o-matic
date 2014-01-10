<?php

class connections_controller extends base_controller {
	
	public function __construct() {
		parent::__construct();
	} 
		
	/*-----------------------------------------------------------------
	Accessed via http://localhost/index/index/
	-----------------------------------------------------------------*/
	public function index() {	
		
		# Any method that loads a view will commonly start with this
		# First, set the content of the template with a view file
			$this->template->content = View::instance('v_connections_index');
			
		# Now set the <title> tag
			$this->template->title = "Hello World";
	
		# CSS/JS includes
			/*
			$client_files_head = Array("");
	    	$this->template->client_files_head = Utils::load_client_files($client_files);
	    	
	    	$client_files_body = Array("");
	    	$this->template->client_files_body = Utils::load_client_files($client_files_body);   
	    	*/
	      					     		
		# Render the view
			echo $this->template;

	} # End of method

  public function top_matter() {
    $this->template->content = View::instance('v_connections_top_matter');

    echo $this->template;
  }

  public function lead_in() {
    $this->template->content = View::instance('v_connections_lead_in');

    echo $this->template;
  }

  public function lead_in_kicker() {
    $this->template->content = View::instance('v_connections_lead_in_kicker');

    echo $this->template;
  }

  public function main_body() {
    $this->template->content = View::instance('v_connections_main_body');

    echo $this->template;
  }

  public function online_poll() {
    $this->template->content = View::instance('v_connections_online_poll');

    echo $this->template;
  }

  public function resources() {
    $this->template->content = View::instance('v_connections_resources');

    echo $this->template;
  }

  public function meet_your_peer() {
    $this->template->content = View::instance('v_connections_meet_your_peer');

    echo $this->template;
  }
  
  

	
	
} # End of class

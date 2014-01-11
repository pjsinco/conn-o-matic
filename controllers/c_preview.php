<?php

class preview_controller extends base_controller {
	
	/*-----------------------------------------------------------

	-----------------------------------------------------------*/
	public function __construct() {
		parent::__construct();
	} 
		
	/*----------------------------------------------------------
	Accessed via http://localhost/index/index/
	-----------------------------------------------------------*/
	public function index() {	
		
		# Any method that loads a view will commonly start with this
		# First, set the content of the template with a view file
			$this->template->content = View::instance('v_preview_index');
			
		# Now set the <title> tag
			$this->template->title = APP_NAME . ' | Preview';
	
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

	
  public function meta($id) {
    $this->template->content = View::instance('v_preview_meta');

    echo $this->template;
  }

  public function poll($id) {
    $this->template->content = View::instance('v_preview_poll');

    echo $this->template;
  }
	
  public function footer($id) {
    $this->template->content = View::instance('v_preview_footer');

    echo $this->template;
  }

  public function peer($id) {
    $this->template->content = View::instance('v_preview_peer');

    echo $this->template;
  }

  public function body($id) {
    $this->template->content = View::instance('v_preview_body');

    $data = Helpers::get_issue($id);
    //echo Debug::dump($data);
    //echo Debug::dump($data['lead_in']);
    $this->template->content->lead_in = $data['lead_in'];
    $this->template->content->kicker = $data['kicker'];
    $this->template->content->headline = $data['headline'];
    $this->template->content->body = $data['body'];

    echo $this->template;
  }
} # End of class

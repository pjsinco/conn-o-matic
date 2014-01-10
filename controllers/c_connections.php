<?php

class connections_controller extends base_controller {
	
	public function __construct() {
		parent::__construct();
	} 
		
	/*-----------------------------------------------------------------
	Accessed via http://localhost/index/index/
	-----------------------------------------------------------------*/
	public function index($id) {	
		
		# Any method that loads a view will commonly start with this
		# First, set the content of the template with a view file
			$this->template->content = View::instance('v_connections_index');
			
		# Now set the <title> tag
			$this->template->title = APP_NAME;

      $issue = Helpers::get_issue($id);
      $this->template->content->edition = $issue['edition'];
      $this->template->content->quarter = $issue['quarter'];
      $this->template->content->year = $issue['year'];

      //$this->template->content->id = $id;
	
		# CSS/JS includes
			/*
			$client_files_head = Array("");
	    	$this->template->client_files_head = Utils::load_client_files($client_files);
	    	
	    	$client_files_body = Array("");
	    	$this->template->client_files_body = Utils::load_client_files($client_files_body);   
	    	*/

      //$this->template->content->meta = 
        //View::instance('v_connections_meta');
      $this->template->content->lead_in = 
        View::instance('v_connections_lead_in');
      $this->template->content->lead_in->id = $id;

      $this->template->content->main_body = 
        View::instance('v_connections_main_body');
      $this->template->content->main_body->id = $id;

      $this->template->content->online_poll = 
        View::instance('v_connections_online_poll');
      $this->template->content->resources = 
        View::instance('v_connections_resources');
      $this->template->content->meet_your_peer = 
        View::instance('v_connections_meet_your_peer');
	      					     		
	      					     		
		# Render the view
			echo $this->template;

	} # End of method

  public function meta() {
    $this->template->content = View::instance('v_connections_meta');

    echo $this->template;
  }

  /**
   * creates/updates meta data for issue
   *
   */
  public function p_meta() {
    //echo Debug::dump($_POST);
    
    $data = array(
      'edition' => $_POST['edition'],
      'quarter' => $_POST['quarter'],
      'year' => $_POST['year']
    );

    $id = DB::instance(DB_NAME)->insert_row('meta', $data);
  
    Router::redirect('/connections/index/' . $id);
  }

  public function lead_in($id) {
    $this->template->content = View::instance('v_connections_lead_in');
    $this->template->content->id = $id;
    
    echo Debug::dump($id);

    echo $this->template;
  }

  /**
   * creates/updates lead_in item
   *
   */
  public function p_lead_in($id) {
    echo Debug::Dump($_POST);
    echo Debug::Dump($id);

    $data = array(
      'conn_id' => $id,
      'lead_in' => $_POST['lead-in'],
      'kicker' => $_POST['kicker']
    );

    $id = DB::instance(DB_NAME)->insert_row('lead_in', $data);
  }

  public function main_body($id) {
    $this->template->content = View::instance('v_connections_main_body');

    echo $this->template;
  }

  public function p_main_body($id) {
    echo Debug::Dump($_POST);

    $data = array(
      'conn_id' => $_POST['id'],
      'headline' => $_POST['headline'],
      'main' => $_POST['main']
    );

    $id = DB::instance(DB_NAME)->insert_row('body', $data);
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

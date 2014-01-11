<?php

require_once(APP_PATH . '/config/constants.php');

class form_controller extends base_controller {
	
	public function __construct() {
		parent::__construct();
	} 
		
	/*-----------------------------------------------------------------
	Accessed via http://localhost/index/index/
	-----------------------------------------------------------------*/
	public function index($id) {	
		
		# Any method that loads a view will commonly start with this
		# First, set the content of the template with a view file
			$this->template->content = View::instance('v_form_index');
			
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

      /*
       * lead_in
       */
      $this->template->content->main_body = 
        View::instance('v_form_main_body');
      $this->template->content->main_body->id = $id;
      $this->template->content->main_body->preview = 
        View::instance('v_preview_body');
      $this->template->content->main_body->preview->lead_in =
        $issue['lead_in'];
      $this->template->content->main_body->preview->kicker =
        $issue['kicker'];
      $this->template->content->main_body->preview->headline =
        $issue['headline'];
      $this->template->content->main_body->preview->main_body =
        $issue['main'];

      /*
       *online poll
       */
      $this->template->content->main_body->preview->poll = 
        View::instance('v_preview_poll');
      $this->template->content->main_body->preview->poll->question =
        $issue['question'];
      $this->template->content->main_body->preview->poll->link =
        $issue['link'];
    
      

      $this->template->content->resources = 
        View::instance('v_form_resources');

      $this->template->content->meet_your_peer = 
        View::instance('v_form_meet_your_peer');
	      					     		
	      					     		
		# Render the view
			echo $this->template;

	} # End of method

  public function meta() {
    $this->template->content = View::instance('v_form_meta');

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

    $id = DB::instance(DB_NAME)->insert_row('issue', $data);

    // add default text to issue
    Helpers::set_default_text($id);

    Router::redirect('/form/index/' . $id);
  }

  //public function lead_in($id) {
    //$this->template->content = View::instance('v_form_lead_in');
    //$this->template->content->id = $id;
    //$this->template->content->preview = View::instance('v_preview_main');
    
    //echo $this->template;
  //}

   //creates/updates lead_in item
  
  //public function p_lead_in($id) {
    //echo Debug::Dump($_POST);
    //echo Debug::Dump($id);

    //$data = array(
      //'conn_id' => $id,
      //'lead_in' => $_POST['lead-in'],
      //'kicker' => $_POST['kicker']
    //);

    //$id = DB::instance(DB_NAME)->insert_row('lead_in', $data);
  //}

  public function main_body($id) {
    $issue = Helpers::get_issue($id);
    echo Debug::dump($issue);

    $this->template->content = View::instance('v_form_main_body');
    $this->template->content->preview = View::instance('v_preview_body');
    $this->template->content->preview->lead_in = $issue['lead_in'];
    $this->template->content->preview->kicker = $issue['kicker'];
    $this->template->content->preview->headline = $issue['headline'];

    /*
     * process <p> tags
     */

    // set up p style
    $style = array(
      'font-size' => '13px',
      'color' => '#333333',
      'line-height' => '17px',
      'margin-top' => '0px',
      'margin-right' => '20px',
      'margin-bottom' => '10px',
      'margin-left' => '20px'   
    );

    // build up p tag from styles
    $p_style = '';
    foreach ($style as $key => $value) {
      $p_style .= $key . ':' . $value . '; ';
    }
    $p_tag = '<p style="' . $p_style . '">';
    
    // change p tags and send to view
    $this->template->content->preview->main_body =
      str_replace('<p>', $p_tag, $issue['main']);


    // render view
    echo $this->template;
  }

  public function p_main_body($id) {
    //echo Debug::Dump($_POST);

    $data = array(
      'lead_in' => $_POST['lead-in'],
      'kicker' => $_POST['kicker'],
      'headline' => $_POST['headline'],
      'main' => $_POST['main']
    );

    $result = 
      DB::instance(DB_NAME)->update_row(
        'issue', $data, "WHERE id = $id");
 
    Router::redirect('/preview/body/' . 
      ($result == 0 ? $id : $result));
  }

  public function online_poll($id) {
    $this->template->content = 
      View::instance('v_form_online_poll');
    
    $issue = Helpers::get_issue($id);

    $this->template->content->preview->link = $issue['link'];
    $this->template->content->preview->question = $issue['question'];


    echo $this->template;
  }

  public function resources() {
    $this->template->content = View::instance('v_form_resources');

    echo $this->template;
  }

  public function meet_your_peer() {
    $this->template->content = View::instance('v_form_meet_your_peer');

    echo $this->template;
  }
  
  

	
	
} # End of class

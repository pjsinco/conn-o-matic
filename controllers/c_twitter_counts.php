<?php

require_once(APP_PATH . '/config/constants.php');

class twitter_counts_controller extends base_controller {
	
  public function __construct() {
  	parent::__construct();
  } 
  	
  public function index() {
    $this->template->content = View::instance('v_twitter_counts_index');

    $client_files_head = Array(
      '/css/twitter_counts.css'
    );

    $this->template->client_files_head = 
      Utils::load_client_files($client_files_head);

    $client_files_body = Array(
      '/js/twitter_counts_index.js'
    );

    $this->template->client_files_body = 
      Utils::load_client_files($client_files_body);


    // REFRESHER!
    $this->template->content->message = 
      TCHelpers::instance('TheDOmagazine')->hello('pj');
    
    $this->template->content->followers = 
      TCHelpers::instance('TheDOmagazine')->get_followers();

    //echo Debug::dump(TCHelpers::instance('TheDOmagazine')->get_followers());
    echo Debug::dump(TCHelpers::instance('TheDOmagazine')->get_retweets());

    

    // render view
    echo $this->template;
  }


} # End of class

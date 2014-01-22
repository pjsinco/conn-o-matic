<?php

require_once(APP_PATH . '/config/constants.php');

class thedocal_controller extends base_controller {
	
  /*-------------------------------------------------------------------
  
  -------------------------------------------------------------------*/
  public function __construct() {
  	parent::__construct();
  } 

  public function index() {
    $this->template->content = 
      View::instance('v_thedocal_index');

    $client_files_head = Array(
      '/css/bootstrap.css',
      '/css/bootstrap-theme.css',
      '/css/thedocal_main.css'
    );
    $this->template->client_files_head = 
      Utils::load_client_files($client_files_head);   
    
    $client_files_body = Array(
      '/js/bootstrap.min.js',
      '/js/thedocal_index.js'
    );
    $this->template->client_files_body = 
      Utils::load_client_files($client_files_body);   

    // render view
    echo $this->template;

  }
  	
} // eoc

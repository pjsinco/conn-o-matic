<?php

require_once(APP_PATH . '/config/constants.php');

class admin_controller extends base_controller {
	
  /*-------------------------------------------------------------------
  
  -------------------------------------------------------------------*/
  public function __construct() {
  	parent::__construct();
  } 
  	
  /*-------------------------------------------------------------------
  Accessed via http://localhost/index/index/
  -------------------------------------------------------------------*/
  public function control_panel_preview($id) {	
    $this->template->content = 
      View::instance('v_admin_control_panel_preview');

    $client_files_head = Array(
      '/css/main.css'
    );
    $this->template->client_files_head = 
      Utils::load_client_files($client_files_head);   
  
    $client_files_body = Array(
      '/js/admin_control_panel_preview.js'
    );
    $this->template->client_files_body = 
      Utils::load_client_files($client_files_body);   
    echo $this->template;
  
  } # End of method

  public function p_control_panel_preview($html) {
    echo Debug::dump($html);
    //Router::redirect('/preview/page');
  }

  public function control_panel_code($id) {
    $this->template->content =
      View::instance('v_admin_control_panel_code');

    $client_files_head = Array(
      '/css/main.css'
    );
    $this->template->client_files_head = 
      Utils::load_client_files($client_files_head);   
    
  }

} # End of class

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

  public function article($id) {
    $this->template->content =
      View::instance('v_thedocal_article');

    $client_files_head = Array(
      '/css/bootstrap.css',
      '/css/thedocal_main.css'
    );
    $this->template->client_files_head = 
      Utils::load_client_files($client_files_head);   
    
    $article = CalHelpers::get_article($id);
    echo Debug::dump($article);
    
    $client_files_body = Array(
      '/js/bootstrap.min.js',
      '/js/thedocal_article.js'
    );
    $this->template->client_files_body = 
      Utils::load_client_files($client_files_body);   

    // render view
    echo $this->template;
  }

  public function month($month) {
    $this->template->content =
      View::instance('v_thedocal_month');

    $client_files_head = Array(
      '/css/bootstrap.css',
      '/css/thedocal_main.css'
    );
    $this->template->client_files_head = 
      Utils::load_client_files($client_files_head);   
    
    $client_files_body = Array(
      '/js/bootstrap.min.js'
    );
    $this->template->client_files_body = 
      Utils::load_client_files($client_files_body);   

    // render view
    echo $this->template;
  }

  public function admin() {
        

  }
  	
} // eoc

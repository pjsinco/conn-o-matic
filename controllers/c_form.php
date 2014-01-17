<?php

require_once(APP_PATH . '/config/constants.php');

class form_controller extends base_controller {
	
	public function __construct() {
		parent::__construct();
	} 
		
  public function meta() {
    $this->template->content = View::instance('v_form_meta');

    $client_files_head = Array(
      '/css/main.css'
    );
    Utils::load_client_files($client_files_head);

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

    Router::redirect('/preview/index/' . $id);
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
    $this->template->content->issue = $issue;
  
    // add preview to view
    $this->template->content->preview =
      View::instance('v_preview_index');
  
    // give the main_body view everthing it needs
    $this->template->content->preview->main =
      View::instance('v_preview_main_body');
    $this->template->content->preview->main->lead_in =
      $issue['lead_in'];
    $this->template->content->preview->main->kicker =
      $issue['kicker'];
    $this->template->content->preview->main->headline =
      $issue['headline'];
    $this->template->content->preview->main->resources =
      $issue['resources'];
  
    // add style to p tags
    $text_styled = Helpers::add_p_style($issue['main_body']);
    $this->template->content->preview->main->main_body =
      $text_styled;
  
    // pass poll to view and set up
    $this->template->content->preview->main->poll =
      View::instance('v_preview_poll');
    $this->template->content->preview->main->poll->poll_link =
      $issue['poll_link'];
    $this->template->content->preview->main->poll->poll_q =
      $issue['poll_q'];
  
    // pass meet-your-peer to view and set up
    $this->template->content->preview->peer =
      View::instance('v_preview_peer');
    $this->template->content->preview->peer->peer_name =
      $issue['peer_name'];
    $this->template->content->preview->peer->peer_occ =
      $issue['peer_occ'];
    $this->template->content->preview->peer->peer_school =
      $issue['peer_school'];
    $this->template->content->preview->peer->peer_inv =
      $issue['peer_inv'];
    $this->template->content->preview->peer->peer_rev =
      $issue['peer_rev'];
  
    // pass footer to view
    $this->template->content->preview->footer =
      View::instance('v_preview_footer');
  
    # CSS/JS includes
    $client_files_body = Array(
      '/js/form_index.js',
      '/js/preview_index.js'
    );
    $this->template->client_files_body = 
      Utils::load_client_files($client_files_body);
    	
    //$client_files_body = Array("");
    //$this->template->client_files_body = 
      //Utils::load_client_files($client_files_body);   
  
    # Render the view
    echo $this->template;
  
  } # End of method

  public function p_index($id) {
    $data = Helpers::distill_post($_POST);


    //echo Debug::dump($data);

    DB::instance(DB_NAME)->update_row(
      'issue', $data, "WHERE id = $id"
    );
    
    Router::redirect('/form/index/' . $id);
  }

  public function connections_flag_edit($id) {
    $this->template->content =
      View::instance('v_form_conn_flag');

    $this->template->content->id = $id;

    $client_files_head = Array(
      '/css/main.css'
    );
    Utils::load_client_files($client_files_head);

    echo $this->template;
  }

  public function p_conn_flag_edit($id) {
    $result = 
      Helpers::distill_post_and_update($_POST, 'issue', $id);

    Router::redirect('/preview/index/' . $id);
  }

  public function connections_quarter_edit($id) {
    $this->template->content =
      View::instance('v_form_quarter_flag');

    $this->template->content->id = $id;

    $client_files_head = Array(
      '/css/main.css'
    );
    Utils::load_client_files($client_files_head);

    echo $this->template;
  }

  public function p_connections_quarter_edit($id) {
    $result = 
      Helpers::distill_post_and_update($_POST, 'issue', $id);

    Router::redirect('/preview/index/' . $id);
  }

  public function main_body_edit($id) {
    $this->template->content = 
      View::instance('v_form_main_body');  

    $client_files_head = Array(
      '/css/main.css'
    );
    $this->template->client_files_head = 
      Utils::load_client_files($client_files_head);

    // pass id to view
    $this->template->content->id = $id;

    // render view
    echo $this->template;
  }

  public function p_main_body_edit($id) {
    $result = 
      Helpers::distill_post_and_update($_POST, 'issue', $id);

    Router::redirect('/preview/index/' . $id);
  }

  public function lead_in_edit($id) {
    $this->template->content =
      View::instance('v_form_lead_in');

    // pass id to view
    $this->template->content->id = $id;

    $client_files_head = Array(
      '/css/main.css'
    );
    $this->template->client_files_head = 
      Utils::load_client_files($client_files_head);

    // render view
    echo $this->template;
  }

  public function p_lead_in_edit($id) {
    // update the lead_in
    $result = 
      Helpers::distill_post_and_update($_POST, 'issue', $id);

    Router::redirect('/preview/index/' . $id);
  }

  public function kicker_edit($id) {
    $this->template->content =
      View::instance('v_form_kicker');

    // pass id to view
    $this->template->content->id = $id;

    $client_files_head = Array(
      '/css/main.css'
    );
    $this->template->client_files_head = 
      Utils::load_client_files($client_files_head);

    // render view
    echo $this->template;
  }

  public function p_kicker_edit($id) {
    // update the kicker
    $result = 
      Helpers::distill_post_and_update($_POST, 'issue', $id);

    Router::redirect('/preview/index/' . $id);
  }

  public function headline_edit($id) {
    $this->template->content =
      View::instance('v_form_headline');

    // pass id to view
    $this->template->content->id = $id;

    // add css to view
    $client_files_head = Array(
      '/css/main.css'
    );
    $this->template->client_files_head = 
      Utils::load_client_files($client_files_head);

    // render view
    echo $this->template;
  }

  public function p_headline_edit($id) {
    // update the headline
    $result = 
      Helpers::distill_post_and_update($_POST, 'issue', $id);

    Router::redirect('/preview/index/' . $id);
  }

  public function poll_edit($id) {
    $this->template->content = 
      View::instance('v_form_poll');
    
    // pass id to view
    $this->template->content->id = $id;

    $client_files_head = Array(
      '/css/main.css'
    );
    $this->template->client_files_head = 
      Utils::load_client_files($client_files_head);

    // render view
    echo $this->template;
  }

  public function p_poll_edit($id) {
    //update the poll
    $result = 
      Helpers::distill_post_and_update($_POST, 'issue', $id);

    Router::redirect('/preview/index/' . $id);
  }

//  public function resources_modal($id) {
//    $this->template->content =
//      View::instance('v_form_resources_modal');
//
//    $this->template->content->id = $id;
//    
//    // add css; needed?
//    $client_files_head = Array(
//      '/css/main.css'
//    );
//    $this->template->client_files_head = 
//      Utils::load_client_files($client_files_head);
//
//    // add js
//    $client_files_body = Array(
//      '/js/form_resources_modal.js'
//    );
//    $this->template->client_files_body = 
//      Utils::load_client_files($client_files_body);
//
//    // render view
//    echo $this->template;
//  }

//  public function p_resources_modal($id) {
//    echo Debug::dump($_POST);
//  }

  public function resources_edit($id) {
    $this->template->content = 
      View::instance('v_form_resources_edit');

    $this->template->content->id = $id;

    $client_files_body = Array(
      '/js/form_resources.js'
    );
    $this->template->client_files_body = 
      Utils::load_client_files($client_files_body);

    $client_files_head = Array(
      '/js/jquery.form.js',
      '/css/main.css'
    );
    $this->template->client_files_head = 
      Utils::load_client_files($client_files_head);

    // render view
    echo $this->template;
  }

  public function p_resources_delete($id, $res_id) {
    $where = "WHERE id = $res_id";
    $result = 
      DB::instance(DB_NAME)->delete('resource', $where);

    if ($result == 1) {
      return '';
    }

  }

  public function p_resources_create() {

    // get rid of id in $_POST
    unset($_POST['id']);

    // get rid of any escape slashes
    $_POST['res'] = stripslashes($_POST['res']);

    $result = DB::instance(DB_NAME)->insert('resource', $_POST);

    Router::redirect('/preview/index/' . $_POST['conn_id']);
  }

  public function p_resources_edit() {

    // get rid of any escape slashes
    $_POST['res'] = stripslashes($_POST['res']);
    $where = "WHERE id = " . $_POST['id'];
    $result = 
      DB::instance(DB_NAME)->update('resource', $_POST, $where);

    Router::redirect('/preview/index/' . $_POST['conn_id']);
  }

  public function peer_edit($id) {
    $this->template->content = 
      View::instance('v_form_peer');

    $this->template->content->id = $id;

    $client_files_head = Array(
      '/css/main.css'
    );
    $this->template->client_files_head = 
      Utils::load_client_files($client_files_head);

    // render view
    echo $this->template;
  }
  
  public function p_peer_edit($id) {
    //update the poll
    $result = 
      Helpers::distill_post_and_update($_POST, 'issue', $id);

    Router::redirect('/preview/index/' . $id);
  }
  

	
	
} # End of class

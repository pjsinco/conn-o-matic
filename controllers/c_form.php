<?php

require_once(APP_PATH . '/config/constants.php');

class form_controller extends base_controller {
	
	public function __construct() {
		parent::__construct();
	} 
		
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


  public function main_body($id) {
    $issue = Helpers::get_issue($id);
    echo Debug::dump($issue);

    $this->template->content = 
      View::instance('v_form_main_body');
    $this->template->content->preview = 
      View::instance('v_preview_main_body');
    //$this->template->content->preview->lead_in = $issue['lead_in'];
    //$this->template->content->preview->kicker = $issue['kicker'];
    //$this->template->content->preview->headline = $issue['headline'];

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
      str_replace('<p>', $p_tag, $issue['main_body']);


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

  public function resources() {
    $this->template->content = View::instance('v_form_resources');

    echo $this->template;
  }

  public function meet_your_peer() {
    $this->template->content = View::instance('v_form_meet_your_peer');

    echo $this->template;
  }
  
  

	
	
} # End of class

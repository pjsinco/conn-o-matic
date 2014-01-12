<?php

require_once(APP_PATH . '/config/constants.php');

class preview_controller extends base_controller {
	
	/*-----------------------------------------------------------

	-----------------------------------------------------------*/
	public function __construct() {
      parent::__construct();
	} 
		
	/*----------------------------------------------------------
	Accessed via http://localhost/index/index/
    Shows the whole enchilada
	-----------------------------------------------------------*/
	public function index($id) {	
      $issue = Helpers::get_issue($id);
      //echo Debug::dump($issue);
		
      # Any method that loads a view will commonly start with this
      # First, set the content of the template with a view file
      $this->template->content = View::instance('v_preview_index');
      	
      # Now set the <title> tag
      $this->template->title = APP_NAME . ' | Preview';

      // give the main_body view everthing it needs
      $this->template->content->main =
        View::instance('v_preview_main_body');
      $this->template->content->main->lead_in =
        $issue['lead_in'];
      $this->template->content->main->kicker =
        $issue['kicker'];
      $this->template->content->main->headline =
        $issue['headline'];
      $this->template->content->main->resources =
        $issue['resources'];

      // add style to p tags
      $text_styled = Helpers::add_p_style($issue['main_body']);
      $this->template->content->main->main_body =
        $text_styled;

      // pass poll to view and set up
      $this->template->content->main->poll =
        View::instance('v_preview_poll');
      $this->template->content->main->poll->poll_link =
        $issue['poll_link'];
      $this->template->content->main->poll->poll_q =
        $issue['poll_q'];

      // pass meet-your-peer to view and set up
      $this->template->content->peer =
        View::instance('v_preview_peer');
      $this->template->content->peer->peer_name =
        $issue['peer_name'];
      $this->template->content->peer->peer_occ =
        $issue['peer_occ'];
      $this->template->content->peer->peer_school =
        $issue['peer_school'];
      $this->template->content->peer->peer_inv =
        $issue['peer_inv'];
      $this->template->content->peer->peer_rev =
        $issue['peer_rev'];

      // pass footer to view
      $this->template->content->footer =
        View::instance('v_preview_footer');

      /*
       * add edit forms to view
       */
     
      // add lead_in_edit form to view 
      $this->template->content->lead_in_edit =
        View::instance('v_form_lead_in');
      $this->template->content->lead_in_edit->id = $id;

      // add kicker_edit form to view
      $this->template->content->kicker_edit =
        View::instance('v_form_kicker');
      $this->template->content->kicker_edit->id = $id;



      # CSS/JS includes
      $client_files_body = Array(
        '/js/preview_index.js'
      );
      $this->template->client_files_body = 
        Utils::load_client_files($client_files_body);   
        					     		
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
    echo Debug::dump($data);
    //echo Debug::dump($data['lead_in']);
    $this->template->content->lead_in = $data['lead_in'];
    $this->template->content->kicker = $data['kicker'];
    $this->template->content->headline = $data['headline'];
    $this->template->content->main_body = $data['main'];
    $this->template->content->poll = 
      View::instance('v_preview_poll');
    $this->template->content->poll->question = $data['question'];
    $this->template->content->poll->link = $data['link'];

    echo $this->template;
  }
} # End of class

<?php

require_once(APP_PATH . '/config/constants.php');

class preview_controller extends base_controller {
	
	/*-----------------------------------------------------------

	-----------------------------------------------------------*/
	public function __construct() {
      parent::__construct();
	} 
		
	/*----------------------------------------------------------
	Accessed via http://localhost/preview/index/{$id}
    Shows the whole enchilada
	-----------------------------------------------------------*/
	public function index($id) {	
    
    // CSS/JS includes
    $client_files_body = Array(
      '/js/codemirror.js',
      '/js/xml.js',
      '/js/schools.js',
      '/js/style.js',
      '/js/jquery.form.js',
      '/js/form_resources.js',
      '/js/preview_index.js',
      '/js/admin_control_panel_preview.js',
      '/js/admin_control_panel_code.js'
    );
    $this->template->client_files_body = 
      Utils::load_client_files($client_files_body);   

    $client_files_head = Array(
      '/css/codemirror.css',
      '/css/eclipse.css',
      '/css/main.css'
    );
    $this->template->client_files_head = 
      Utils::load_client_files($client_files_head);   
      					     		
    $issue = Helpers::get_issue($id);
		
    # Any method that loads a view will commonly start with this
    # First, set the content of the template with a view file
    $this->template->content = View::instance('v_preview_index');
    	
    # Now set the <title> tag
    $this->template->title = APP_NAME . ' | Preview';

    // give the main_body view everthing it needs

    // pass flag to view
    $conn_flag = Helpers::get_flag_url($id); // get url for flag
    $this->template->content->connections_flag = $conn_flag;

    // pass connections flag to view
    $edition_flag = Helpers::get_edition_url($id);
    $this->template->content->connections_quarter_flag = $edition_flag;
    $this->template->content->connections_quarter = $issue['edition'];

    //echo Debug::dump($issue['edition']);

    // pass edition to view
    $this->template->content->connections_date = 
      $issue['quarter'] . ' ' . $issue['year'];
      
    //echo Debug::dump($conn_flag);

    // pass lead_in, kicker, headline, main, resources to view
    $this->template->content->main =
      View::instance('v_preview_main_body');
    $this->template->content->main->lead_in =
      $issue['lead_in'];
    $this->template->content->main->kicker =
      $issue['kicker'];
    $this->template->content->main->headline =
      $issue['headline'];
    //$this->template->content->main->resources =
      //$issue['resources'];
    // add style to p tags
    //$text_styled = Helpers::add_p_style($issue['main_body']);
    $this->template->content->main->main_body =
      $issue['main_body'];
      //$text_styled;

    // pass poll to view and set up
    $this->template->content->main->poll =
      View::instance('v_preview_poll');
    $this->template->content->main->poll->poll_link =
      $issue['poll_link'];
    $this->template->content->main->poll->poll_q =
      $issue['poll_q'];

    // pass resources to reference to view
    $this->template->content->main->resources =
      View::instance('v_preview_resources');
    $res = Helpers::get_resources($id);
    $this->template->content->main->resources->res = $res;

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
    $this->template->content->peer->peer_photo =
      (IMAGE_LINK . $issue['peer_photo']);

    // pass footer to view
    $this->template->content->footer =
      View::instance('v_preview_footer');

    // pass control_panel_preview to view
    $this->template->content->control_panel_preview =
      View::instance('v_admin_control_panel_preview');

    // pass control_panel_code to view
    $this->template->content->control_panel_code =
      View::instance('v_admin_control_panel_code');

    /*
     * add edit forms to view
     */
    // add connections_flag_edit form to view
    $this->template->content->connections_flag_edit =
      View::instance('v_form_conn_flag');
    $this->template->content->connections_flag_edit->id = $id;

    // add connections_quarter_edit form to view
    $this->template->content->connections_quarter_edit =
      View::instance('v_form_quarter_flag');
    $this->template->content->connections_quarter_edit->id = $id;

    
    // add lead_in_edit form to view 
    $this->template->content->lead_in_edit =
      View::instance('v_form_lead_in');
    $this->template->content->lead_in_edit->id = $id;

    // add kicker_edit form to view
    $this->template->content->kicker_edit =
      View::instance('v_form_kicker');
    $this->template->content->kicker_edit->id = $id;

    // add main_body_edit form to view
    $this->template->content->main_body_edit =
      View::instance('v_form_main_body');
    $this->template->content->main_body_edit->id = $id;

    // add resources_edit form to view
    $this->template->content->resources_edit =
      View::instance('v_form_resources_edit');
    $this->template->content->resources_edit->id = $id;

    // add resources_create form to view
    $this->template->content->resources_create =
      View::instance('v_form_resources_create');
    $this->template->content->resources_create->id = $id;

    // NEEDED?
    // add resources_delete form to view
    //$this->template->content->resources_delete_modal =
      //View::instance('v_form_resources_delete_modal');
    //$this->template->content->resources_delete_modal->id = $id;

    // add poll_edit form to view
    $this->template->content->poll_edit =
      View::instance('v_form_poll');
    $this->template->content->poll_edit->id = $id;

    // add peer_edit form to view
    $this->template->content->peer_edit =
      View::instance('v_form_peer');
    $this->template->content->peer_edit->id = $id;


    # Render the view
    echo $this->template;

  } # End of method

  public function resources($id) {
    $this->template->content = 
      View::instance('v_preview_resources');
      //View::instance('v_preview_resources_play');

    $client_files_body = array(
       '/js/preview_resources.js' 
    );
    $this->template->client_files_body = 
      Utils::load_client_files($client_files_body);   

    $client_files_head = Array(
      '/css/main.css'
    );
    $this->template->client_files_head = 
      Utils::load_client_files($client_files_head);   

    $res = Helpers::get_resources($id);
    $this->template->content->res = $res;
    //echo Debug::dump($res);

    echo $this->template;
  }

  public function page() {
    $this->template->content =
      View::instance('v_preview_page');

    $client_files_head = Array(
      '/css/main.css'
    );
    $this->template->client_files_head = 
      Utils::load_client_files($client_files_head);   

    // render view
    echo $this->template;
  }

} # End of class

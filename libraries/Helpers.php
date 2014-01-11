<?php  

class Helpers
{
  public static function set_resource($conn_id, $res, $res_link) {
    $data = array(
      'res' => $res,
      'res_link' => $res_link,
      'conn_id' => $conn_id
    );

    $result = DB::instance(DB_NAME)->insert_row('resource', $data);

    return $result;
  }

  /**
   * Retrieves the 'Resources to Reference'
   *
   * Returns:
   *   An 2D array 'Resources to Reference'
   */
  public static function get_resources($conn_id) {
    $q = "
      SELECT res, res_link
      FROM resource
      WHERE conn_id = $conn_id
    ";
    $result = DB::instance(DB_NAME)->select_rows($q);

    return $result;
  }

  public static function add_p_style($text) {
    // set up p style
    // put in array for readability, accepting a bit more
    // complexity as price
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
    //$this->template->content->preview->main_body =
    return str_replace('<p>', $p_tag, $text);
  }

  public static function set_default_text($id) {
    $data = array(
      'headline' => 'HEADLINE GOES HERE',
      'main_body' => '<p>MAIN BODY TEXT GOES HERE<p>',
      'lead_in' => 'LEAD-IN GOES HERE',
      'kicker' => 'LEAD-IN KICKER GOES HERE',
      'poll_q' => 'ONLINE POLL QUESTION GOES HERE',
      'poll_link' => '#',
      'peer_name' => 'PEER NAME GOES HERE',
      'peer_occ' => 'PEER OCCUPATION GOES HERE',
      'peer_school' => 'PEER SCHOOL/CLASS GOES HERE',
      'peer_inv' => 'PEER I\'M INVOLVED BECAUSE ... GOES HERE',
      'peer_rev' => 'PEER WHEN REVIEWING ... GOES HERE'
    );

    $result = DB::instance(DB_NAME)->update_row('issue', $data, "WHERE id = $id");

    return $result;
  }

  public static function get_issue($id) {
    $q = "
      SELECT *
      FROM issue
      WHERE id = $id
    ";

    $result = DB::instance(DB_NAME)->select_row($q);

    return $result;
  }


}
?>

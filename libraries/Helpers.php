<?php  

include_once(APP_PATH . '/config/constants.php');

class Helpers
{
  /**
   *  Returns the list of resources-to-reference for
   *    the given $id
   *  @param
   *    $id - issue id
   *  @retursn
   *    an associative array of resources and resource links
   */
  public static function get_resources($id) {
    $q = "
      SELECT id, res, res_link
      FROM resource
      WHERE conn_id = $id
    ";

    $result = DB::instance(DB_NAME)->select_rows($q);

    return $result;
  }


  /**
   * Returns the link to edition flag for the issue
   * @param
   *   $id - issue id
   * @returns
   *   the url for the edition flag
   */
  public static function get_edition_url($id) {
    $data = self::get_issue($id);
    
    $url = IMAGE_LINK . 'connections_';
    $url .= strtolower($data['quarter']) . '_';
    $url .= $data['year'] . '.gif';

    return $url;
  }

  /**
   * Returns the link to flag for the issue
   * @param
   *   $id - issue id
   * @returns
   *   the url for the flag
   */
  public static function get_flag_url($id) {
    $data = self::get_issue($id);

    switch ($data['edition']) {
      case 'Peer Reviewer':
        return IMAGE_LINK . PR_FILE;
        break;
      case 'Editorial Board':
        return IMAGE_LINK . EB_FILE;
        break;
      case 'Editorial Advisory Board':
        return IMAGE_LINK . EAB_FILE;
        break;
      default:
        return null;
        break;
    }
  }

  /**
   * Distills $_POST and updates the given table
   * @params:
   *   $post_arr - $_POST
   *   $table - the table to update
   *   $id - the id of the row to update
   * @returns:
   *   the result of the update
   *
   */
  public static function distill_post_and_update($post_arr, $table, $id) {
    $data = self::distill_post($post_arr);
    
    // if $data is empty, don't update
    if (!$data) {
      return;
    }

    $result = DB::instance(DB_NAME)->update_row(
      $table,
      $data,
      "WHERE id = $id"
    );
    
    return $result;
  }

  /**
   * Takes $_POST and strips out keys with blank values
   * @param
   *    $post_arr - the $_POST array
   * @returns
   *    the stripped array
   */
  public static function distill_post($post_arr) {
    $data = array();

    // for $data, add only values that are set in $post_arr
    foreach ($_POST as $key => $value) {
      if ($value) {
        if ($key == 'id') { // skip id
          continue;
        } else {
          $data[$key] = stripslashes($value);
        }
      }
    }
    
    return $data;
  }

  /**
   *  Adds style 
   *
   */
  //public static function add_style($

  public static function add_lead_in_a_style($text, $link) {
    $style = array(
      'color' => '#fdc578'
    );

    $a_style = '';
    foreach($style as $key => $value) {
      //$a_style .= $key . ':' . $value . '; '
    }
    //$a_tag = '<a 


  }

//  public static function add_p_style($text) {
//    // set up p style
//    // put in array for readability, accepting a bit more
//    // complexity as price
//    $style = array(
//      'font-size' => '13px',
//      'color' => '#333333',
//      'line-height' => '17px',
//      'margin-top' => '0px',
//      'margin-right' => '20px',
//      'margin-bottom' => '10px',
//      'margin-left' => '20px',
//    );
//    
//    // build up p tag from styles
//    $p_style = '';
//    foreach ($style as $key => $value) {
//      $p_style .= $key . ':' . $value . '; ';
//    }
//    $p_tag = '<p style="' . $p_style . '">';
//    
//    // change p tags and send to view
//    //$this->template->content->preview->main_body =
//    return str_replace('<p>', $p_tag, $text);
//  }

  public static function set_default_text($id) {
    $results = array();

    $data = array(
      'headline'    => '<h1>***HEADLINE***</h1>',
      'main_body'   => '<p>***MAIN*BODY*TEXT***</p>',
      'lead_in'     => '<p>***LEAD*IN***</p>',
      'kicker'      => '<p>***LEAD*IN*KICKER***</p>',
      'poll_q'      => '<p>***ONLINE*POLL*QUESTION***</p>',
      'poll_link'   => '#',
      'peer_name'   => '<p>***PEER*NAME***</p>',
      'peer_occ'    => '<p>***PEER*OCCUPATION***</p>',
      'peer_school' => '<p>***PEER*SCHOOL***</p>',
      'peer_inv'    => '<p>***PEER*I*AM*INVOLVED*BECAUSE***</p>',
      'peer_rev'    => '<p>***PEER*WHEN*REVIEWING***</p>'
    );

    array_push($results, DB::instance(DB_NAME)->update_row('issue', $data, "WHERE id = $id"));

    for ($i = 1; $i <= 3; $i++) {
      $res_data = array();
      $res_data['res'] = 'Resource #' . $i;
      $res_data['res_link'] = '#';
      $res_data['conn_id'] = $id;

      array_push($results, DB::instance(DB_NAME)->insert_row('resource', $res_data));
    };

    return $results;
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

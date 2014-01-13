<?php  

include_once('/config/constants.php');

class Helpers
{
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
      'margin-left' => '20px',
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
    $resources =  "<li><a href='#' title=''>***Resource #1***</a></li>";
    $resources .= "<li><a href='#' title=''>***Resource #2***</a></li>";
    $resources .= "<li><a href='#' title=''>***Resource #3***</a></li>";
    $resources .= "<li><a href='#' title=''>***Resource #4***</a></li>";
    $resources .= "<li><a href='#' title=''>***Resource #5***</a></li>";

    $data = array(
      'headline'    => '***HEADLINE***',
      'main_body'   => '<p>***MAIN BODY TEXT***<p>',
      'lead_in'     => '***LEAD-IN***',
      'kicker'      => '***LEAD-IN KICKER***',
      'poll_q'      => '***ONLINE POLL QUESTION***',
      'poll_link'   => '#',
      'peer_name'   => '***PEER NAME***',
      'peer_occ'    => '***PEER OCCUPATION***',
      'peer_school' => '***PEER SCHOOL/CLASS***',
      'peer_inv'    => '***PEER I\'M INVOLVED BECAUSE ...***',
      'peer_rev'    => '***PEER WHEN REVIEWING ...***',
      'resources'   => $resources
    );

    $result = 
      DB::instance(DB_NAME)->update_row('issue', $data, "WHERE id = $id");

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

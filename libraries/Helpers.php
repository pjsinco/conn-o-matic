<?php  

class Helpers
{
  public static function get_body($conn_id) {
    $q = "
      SELECT *
      FROM issue
      WHERE conn_id = $conn_id
    ";

    $result = DB::instance(DB_NAME)->select_row($q);

    return $result;
  }

  public static function set_default_text($id) {
    $data = array(
      'id' => $id,
      'headline' => 'HEADLINE GOES HERE',
      'main' => '<p>MAIN BODY TEXT GOES HERE<p>',
      'lead_in' => 'LEAD-IN GOES HERE',
      'kicker' => 'LEAD-IN KICKER GOES HERE',
      'question' => 'ONLINE POLL QUESTION GOES HERE',
      'link' => '#',
      'name' => 'PEER NAME GOES HERE',
      'occupation' => 'PEER OCCUPATION GOES HERE',
      'school' => 'PEER SCHOOL/CLASS GOES HERE',
      'involved' => 'PEER I\'M INVOLVED BECAUSE ... GOES HERE',
      'reviewing' => 'PEER WHEN REVIEWING ... GOES HERE'
    );

    $result = DB::instance(DB_NAME)->update_or_insert_row('issue', $data);

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

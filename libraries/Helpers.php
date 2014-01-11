<?php  

class Helpers
{
  public static function set_default_text($id) {
    $data = array(
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

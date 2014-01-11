<?php  

class Helpers
{
  public static function set_default_text($id) {
    $data = array(
      'headline' => 'HEADLINE GOES HERE',
      'main_body' => '<p>MAIN BODY TEXT GOES HERE<p>',
      'lead_in' => 'LEAD-IN GOES HERE',
      'kicker' => 'LEAD-IN KICKER GOES HERE',
      'question' => 'ONLINE POLL QUESTION GOES HERE',
      'link' => '#',
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

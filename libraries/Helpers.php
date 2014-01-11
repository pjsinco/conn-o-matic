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

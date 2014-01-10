<?php  

class Helpers
{
  public static function get_issue($id) {
    $q = "
      SELECT *
      FROM meta
      WHERE id = $id
    ";

    $result = DB::instance(DB_NAME)->select_row($q);

    return $result;
  }


}
?>

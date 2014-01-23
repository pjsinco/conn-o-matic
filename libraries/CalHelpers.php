<?php  

include_once(APP_PATH . '/config/constants.php');

class CalHelpers
{
  public static function get_article($a_id) {
    $q = "
      SELECT *
      FROM thedocal_article
      WHERE id = $a_id
    ";

    $results = DB::instance(DB_NAME)->select_row($q);

    return $results;
  }



} // eoc


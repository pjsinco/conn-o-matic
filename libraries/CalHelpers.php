<?php  

include_once(APP_PATH . '/config/constants.php');

class CalHelpers
{
  public static function add_article($article_arr) {
    
  }

  public static function get_users() {
    $q = "
      SELECT *
      FROM thedocal_user
    ";
  
    $results = DB::instance(DB_NAME)->select_rows($q);

    return $results;
  }

//  public static function get_articles_by_month($month, $year) {
//    $q = "
//      SELECT * 
//      FROM thedocal_article 
//      WHERE month = '$month'
//        AND yr = '$year'
//    ";
//
//    $articles = DB::instance(DB_NAME)->select_rows($q);
//
//    for ($i = 0; $i < count($articles); $i++) {
//      $q = "
//        select f_name
//        from thedocal_user
//        where id = " . $articles[$i]['author'];
//
//      $articles[$i]['author'] 
//        = DB::instance(DB_NAME)->select_field($q);
//
//      $q = "
//        select f_name
//        from thedocal_user
//        where id = " . $articles[$i]['editor'];
//
//      $articles[$i]['editor'] 
//        = DB::instance(DB_NAME)->select_field($q);
//    }
//
//    return $articles;
//    
//  }

  public function add_roles($article) {

  }


  // returns a 2D array of articles, indexed by month
  public static function get_articles() {
    // get upcoming articles
    $cur_month = date('F', Time::now());
    $q = "
      SELECT * 
      FROM thedocal_article
      WHERE str_to_date(month, '%M') >= str_to_date('$cur_month', '%M')
    ";

    $articles = DB::instance(DB_NAME)->select_rows($q);


    for ($i = 0; $i < count($articles); $i++) {
      $q = "
        select f_name
        from thedocal_user
        where id = " . $articles[$i]['author'];

      $articles[$i]['author'] 
        = DB::instance(DB_NAME)->select_field($q);

      $q = "
        select f_name
        from thedocal_user
        where id = " . $articles[$i]['editor'];

      $articles[$i]['editor'] 
        = DB::instance(DB_NAME)->select_field($q);
    }

    foreach ($articles as $article) {
      $final_month = strtotime($cur_month);
      //echo Debug::dump(strtotime($article['month']));
      if (strtotime($article['month']) > $final_month) {
        $final_month = strtotime($article['month']);
      }
    }

    // sort articles by month
    $by_month = array(
      'January' => array(),
      'February' => array(),
      'March' => array(),
      'April' => array(),
      'May' => array(),
      'June' => array(),
      'July' => array(),
      'August' => array(),
      'September' => array(),
      'October' => array(),
      'November' => array(),
      'December' => array()
    );

    foreach ($articles as $article) {
      array_push($by_month[$article['month']], $article);
    }

    // strip empty months
    foreach ($by_month as $key => $value) {
      if (empty($by_month[$key])) {
        unset($by_month[$key]);
      }
    }

    return $by_month;
  }

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


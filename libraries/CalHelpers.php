<?php  

include_once(APP_PATH . '/config/constants.php');

class CalHelpers
{
  public static function add_article($article_arr) {
    
  }

  public static function get_authors() {
    $q = "
      SELECT *
      FROM thedocal_user
    ";
  
    $results = DB::instance(DB_NAME)->select_rows($q);

    return $results;
  }

  public static function get_articles() {
    // get articles
    $q = "
      SELECT * 
      FROM thedocal_article 
    ";

    $articles = DB::instance(DB_NAME)->select_rows($q);
    //echo Debug::dump($articles);
    //echo Debug::dump(count($articles));
    //echo Debug::dump($articles[0]['author']);
    //echo Debug::dump($articles[0]['editor']);

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

    return $articles;
//    // get roles
//    $q = "
//      select w.role, u.f_name, w.article_id
//      from thedocal_works_on w inner join thedocal_user u
//        on w.user_id = u.id
//      where w.article_id in (
//        select id
//        from thedocal_article
//      )
//    ";
//
//    $roles = DB::instance(DB_NAME)->select_rows($q);
//
//
//
//    // author comes before editor;
//    // see query's 'order by'
//    for ($i = 0; $i < count($articles); $i++) {
//      for ($j = $i; $j < count; $j += 2) {
//        $articles[$i]['author'] = $roles[$j]['f_name']; 
//        $articles[$i]['editor'] = $roles[$j + 1]['f_name']; 
//      }
//    }
//
    //foreach ($articles as $article) {
      //$article['author'] = $roles[0]['f_name'];
      //$article['editor'] = $roles[1]['f_name'];
    //}
    //$articles[0]['author'] = $roles[0]['f_name'];
    //$articles[0]['editor'] = $roles[1]['f_name'];

    return $articles;
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


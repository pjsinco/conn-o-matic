<?php  

include_once(APP_PATH . '/config/constants.php');
require_once(PHP_LOC . '/Cache/Lite.php');

/**
 * Uses this library: https://github.com/J7mbo/twitter-api-php
 */
class TCHelpers
{

  private $settings; 
  private $twitter;
  private $screen_name;
  private $cache_get_followers;
  private $cache_get_followers_id;
  private static $instance;

  public function __construct($screen_name = NULL) {

    $this->screen_name = $screen_name;

    // set up caches
    $cache_get_followers_opts = Array(
      'cacheDir' => '/tmp/',
      'lifeTime' => 3600
    );
    $this->cache_get_followers_id = 'get_followers';
    $this->cache_get_followers = new Cache_Lite($cache_get_followers_opts);

    $this->settings = Array(
      'oauth_access_token' => TWITTER_OAUTH_ACCESS_TOKEN,
      'oauth_access_token_secret' => TWITTER_OAUTH_ACCESS_TOKEN_SECRET,
      'consumer_key' => TWITTER_CONSUMER_KEY,
      'consumer_secret' => TWITTER_CONSUMER_SECRET
    );

    $this->twitter = new TwitterAPIExchange($this->settings);
    
  }

  // singleton pattern
  // TCHelpers::instance()->[method]
  public static function instance($screen_name = NULL) {

    if (!isset(self::$instance)) {

      // create a new instance
      self::$instance = new TCHelpers($screen_name);

    }

    // return instance
    return self::$instance;

  }

  public function hello($name) {
    return 'hello, ' . $name . ', from ' . $this->screen_name;
  }


  // help from:
  // http://kvz.io/blog/2007/08/01/speedup-your-website-with-cache-lite/
  // http://pear.php.net/manual/en/package.caching.cache-lite.intro.php
  public function get_followers() {

    if ($data = 
      $this->cache_get_followers->get($this->cache_get_followers_id)) {
      // cache hit; $data stores the cache content
    } else {
      ob_start();

      $url = 'https://api.twitter.com/1.1/followers/ids.json';
      $request_method = 'GET';
      $get_field = '?screen_name=' . $this->screen_name;

      $data = $this->twitter->setGetfield($get_field)
        ->buildOauth($url, $request_method)
        ->performRequest();

      $this->cache_get_followers->save($data, $this->cache_get_followers_id);
    
      ob_get_clean();
    }

    return $data;
  }

} // end class

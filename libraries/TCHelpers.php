<?php  

include_once(APP_PATH . '/config/constants.php');

/**
 * Uses this library: https://github.com/J7mbo/twitter-api-php
 */
class TCHelpers
{

  private $settings; 
  private $twitter;
  private $screen_name;
  private static $instance;

  public function __construct($screen_name = NULL) {

    $this->screen_name = $screen_name;

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


  public function get_followers() {

    $url = 'https://api.twitter.com/1.1/followers/ids.json';
    $request_method = 'GET';
    $get_field = '?screen_name=' . $this->screen_name;

    return $this->twitter->setGetfield($get_field)
      ->buildOauth($url, $request_method)
      ->performRequest();

  }
}




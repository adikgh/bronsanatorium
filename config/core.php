<?

	require 'db.php';
   require 't.php';
   require 'fun.php';

   class core {
      public function __construct() {
         session_start();
         new db; new t; new fun;
      }
   }
   $core = new core;

   // 
   $ver = 1.102;
   $site = mysqli_fetch_array(db::query("select * from `site` where id = 1"));
   $site_set = [
      'header' => true,
      'menu' => true,
      'footer' => true,
      'footer_c' => true,
      // 'bl8' => true,
      // 'bl14' => true,
      // 'bl3' => true,
      // 'bl12' => true,
      // 'bl9' => true,
      // 'bl11' => true,
      'bl10' => true,
   ];
   $css = [];
   $js = [];
	$header = true;
   $lang = 'ru';

   // 
   $url = $_SERVER['REQUEST_URI'];
   $url = explode('?', $url);
   $url = $url[0];
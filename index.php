<?php
require 'vendor/autoload.php';


if (!isset($_SESSION)) {
  session_start();
}

ob_start();


ini_set('date.timezone', 'Asia/Taipei');


error_reporting(E_ALL ^ E_DEPRECATED);



// // 支持的語言列表
// $allowedLanguages = ['en', 'tw', 'jp'];

// // 預設語言
// $defaultLanguage = 'en';
// if (!isset($_SESSION['lang']) || !in_array($_SESSION['lang'], $allowedLanguages)) {
//   $_SESSION['lang'] = $defaultLanguage; // 預設語言為英文
// }

// // 獲取當前請求路徑
// $requestUri = $_SERVER['REQUEST_URI'];

// // 提取路徑的第一段（考慮到專案目錄）
// $segments = explode('/', trim($requestUri, '/'));

// // 假設語言標識符是路徑的第二段（排除專案目錄）
// $dev_servers = ['localhost', 'cubetrek.com.tw'];

// $mode = in_array($_SERVER['SERVER_NAME'], $dev_servers) ? 'development' : 'production';

// if ($mode == 'development') {
//   $langFromPath = isset($segments[1]) ? $segments[1] : null;
// }else{
//   $langFromPath = isset($segments[0]) ? $segments[0] : null;
// }

// // 根據路徑切換語言（如果為支持的語言）
// if (in_array($langFromPath, $allowedLanguages)) {
//   $_SESSION['lang'] = $langFromPath;
// } else {
//   // 如果不是支持的語言，檢查是否為默認語言（無語言標識符）
//   if ($langFromPath === null || $langFromPath === '') {
//     $_SESSION['lang'] = $defaultLanguage;
//   }
// }




$config = [
  'templates.path' => './',
  'debug' => false // 停用預設的錯誤處理
];

$app = new \Slim\Slim($config);


$app->hook('slim.before', function () use ($app) {
  $req = $app->request;
  $host = $req->getHost();
  $port = $_SERVER['SERVER_PORT'] != 80 && $_SERVER['SERVER_PORT'] != 443 ? ':' . $_SERVER['SERVER_PORT'] : '';
  $root = $req->getRootUri();


  // if ($_SESSION['lang'] == 'tw') {
  //   $lanpath = '';
  // }else{
  //   $lanpath = '/en';
  // }

  $lanpath = '';


  $dev_servers = ['localhost', 'cubetrek.com.tw'];

  $mode = in_array($_SERVER['SERVER_NAME'], $dev_servers) ? 'development' : 'production';



  if ($mode == 'development') {
    $baseurl = (isset($_SERVER['HTTPS']) ? "https://" : "http://") . $host . $port . $root . $lanpath;
  }else{
    $baseurl = "https://" . $host . $root . $lanpath;
  }


  // aws
  // $baseurl = (isset($_SERVER['HTTPS']) ? "https://" : "http://") . $host . $port . $root . $lanpath;


  $app->view()->appendData(array('baseurl' => $baseurl));
});


$app->get('(/:path+)/images/:file', function ($path, $file) use ($app) {

  // if ($_SESSION['lang'] == 'tw') {
  //   $imagePath = '/views/images/' . $file;
  // }else{
  //   $imagePath = '/en/views/images/' . $file;
  // }

  $imagePath = '/views/images/' . $file;


  $fullPath = __DIR__ . $imagePath;

  if (file_exists($fullPath) && is_file($fullPath)) {
    $app->response->headers->set('Content-Type', mime_content_type($fullPath));
    readfile($fullPath);
  } else {
    $app->response->setStatus(404);
  }
});


// 404 錯誤處理
$app->notFound(function () use ($app) {
  $app->render('views/404.php');
});

// 500 錯誤處理
$app->error(function () use ($app) {
  $app->render('views/500.php');
});


$app->get('(/:path+)/log1n', function () use ($app) {
  $app->redirect('https://frassicms.zeabur.app/wp-admin');
});

// $app->get('/en(/:path+)/log1n', function () use ($app) {
//   $app->redirect('https://172-104-110-125.ip.linodeusercontent.com/wp-admin');
// });


$app->get('/', function () use ($app) {
  $app->render('views/index.php');
});

$app->get('/project', function () use ($app) {
  $app->render('views/project.php');
});

$app->get('/project(/:p)', function ($p = null) use ($app) {
  $app->render('views/project.php', [
    'p' => $p,
  ]);
})->conditions([
  'p' => '\d{1,2}',
]);

// category要寫在前面 不然會進到內頁
$app->get('/project/category/:slug(/:p)', function ($slug = null, $p = null) use ($app) {
  $app->render('views/project.php', [
    'slug' => $slug,
    'p' => $p,
  ]);
});

$app->get('/detail/:slug', function ($slug) use ($app) {
  $app->render('views/detail.php', [
    'slug' => $slug,
  ]);
})->conditions([
  'slug' => '.{2,}',
]);

$app->get('/about', function () use ($app) {
  $app->render('views/about.php');
});

$app->get('/service', function () use ($app) {
  $app->render('views/service.php');
});

$app->get('/news(/:p)', function ($p = null) use ($app) {
  $app->render('views/news.php', [
    'p' => $p,
  ]);
})->conditions([
  'p' => '\d{1,2}',
]);

$app->get('/news/category/:slug(/:p)', function ($slug = null, $p = null) use ($app) {
  $app->render('views/news.php', [
    'slug' => $slug,
    'p' => $p,
  ]);
});

$app->get('/news/:slug', function ($slug) use ($app) {
  $app->render('views/news_detail.php', [
    'slug' => $slug,
  ]);
})->conditions([
  'slug' => '.{2,}',
]);

$app->get('/movies(/:p)', function ($p = null) use ($app) {
  $app->render('views/movies.php', [
    'p' => $p,
  ]);
})->conditions([
  'p' => '\d{1,2}',
]);

$app->get('/movies/category/:slug(/:p)', function ($slug = null, $p = null) use ($app) {
  $app->render('views/movies.php', [
    'slug' => $slug,
    'p' => $p,
  ]);
});

$app->get('/movies/:slug', function ($slug) use ($app) {
  $app->render('views/movies_detail.php', [
    'slug' => $slug,
  ]);
})->conditions([
  'slug' => '.{2,}',
]);

$app->get('/feature', function () use ($app) {
  $isMob = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile"));

  if($isMob){
    $app->render('views/featureMobile.php');
  }else{
    $app->render('views/feature.php');
  }
});

$app->get('/contact', function () use ($app) {
  $app->render('views/contact.php');
});


// 多語系另外寫
$app->get('/en/index', function () use ($app) {
  $app->render('en/views/index.php');
});

$app->get('/en/about', function () use ($app) {
  $app->render('en/views/about.php');
});


$app->run();
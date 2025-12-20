<?php

require 'function.php';
$url = parse_url($_SERVER['REQUEST_URI'])['path'];
// $url=$_SERVER['REQUEST_URI'];


// if($url === '/website/demo/'){
//     require 'controllers/index.php';
// }
// elseif($url === '/website/demo/concat'){
//      require 'controllers/concat.php';
// }
// elseif($url === '/website/demo/about'){
//      require 'controllers/about.php';
// }
$route=[
    '/website/demo/'=> 'controllers/concat.php',
    '/website/demo/concat'=> 'controllers/about.php',
    '/website/demo/about'=>'controllers/about.php',
];
// echo $route[$url];
if(array_key_exists($url,$route)){
    require $route[$url];
}

 
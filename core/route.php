<?php
$routes=require base_path ('routes.php');


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


// echo $route[$url];


function routeToController($url,$routes){
    if(array_key_exists($url,$routes)){
    require base_path($routes[$url]);
}
else {
abort();
}

}
function abort($code=404){
        http_response_code($code);
require base_path("views/{$code}.php");
    die();
}
$url = parse_url($_SERVER['REQUEST_URI'])['path'];

routeToController($url,$routes);

 
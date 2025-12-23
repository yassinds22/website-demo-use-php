<?php


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


// echo $route[$url];
$route=[
    '/website/demo/'=> 'controllers/index.php',
    '/website/demo/about'=>'controllers/about.php',
    '/website/demo/notes'=>'controllers/notes.php',
    '/website/demo/note'=>'controllers/note.php',
    '/website/demo/concat'=> 'controllers/concat.php',
    
];

function routeToController($url,$route){
    if(array_key_exists($url,$route)){
    require $route[$url];
}
else {
abort();
}

}
function abort($code=404){
        http_response_code($code);
require "views/{$code}.php";
    die();
}

routeToController($url,$route);

 
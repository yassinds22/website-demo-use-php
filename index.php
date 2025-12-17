<?php
$heading="Home";
function add(){
    echo "<pre>";
var_dump([$_SERVER]);
echo "</pre>";
die();
}


require("views/index.view.php");
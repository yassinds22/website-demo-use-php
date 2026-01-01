<?php
use Core\Database;
$config=require BASE_PATH . '/config.php';

$db=new Database($config['database']);


$notes=$db->query('select * from notes')->get();




 view('notes/index.view.php',[
    'heading'=>'My Notes',
    'notes'=>$notes,
]);



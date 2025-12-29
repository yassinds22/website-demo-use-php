<?php
$config=require ('config.php');
$db=new Database($config['database']);

$heading="My Note";
$id=$_GET['id'];
$note=$db->query('select * from notes where id= :id',[
   
    'id'=>$_GET['id'],
    
])->findOrFelid();
// dd($note);
$currentUserId=1;
authorize($note['user_id'] ===$currentUserId);


if(!$note){
    abort(Respones::NOT_FOUND);

}






require('views/note.view.php');



<?php
$config=require ('config.php');
$db=new Database($config['database']);

$heading="My Note";
$id=$_GET['id'];
$note=$db->query('select * from notes where id= :id',[
   
    'id'=>$_GET['id'],
    
])->fetch();
$currentUserId=1;

if(!$note){
    abort(Respones::NOT_FOUND);

}
if($note['user_id'] !==$currentUserId){
    abort(Respones::FORBIDDEN );
}





require('views/note.view.php');



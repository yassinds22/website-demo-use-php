<?php
$config=require base_path('config.php');
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






 view('notes/show.view.php',[
    'heading'=>'Show Us',
    'note'=>$note,
]);



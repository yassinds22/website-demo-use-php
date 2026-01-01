<?php
use Core\Database;
require_once base_path('Core/Validator.php');



$config=require base_path('config.php');
$db=new Database($config['database']);

// $heading="Create Notes";
// dd(Validator::email('sss@gmail.com'));
    $errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


   
$title=$_POST['title'];
   

    if (! Validator::string($title,1,1000)) {
        $errors['title'] = 'A title is required  and the Text >1000';
    }


    if (empty($errors)) {
        $db->query(
            'INSERT INTO notes (title, user_id) VALUES (:title, :user_id)',
            [
                'title'   => $_POST['title'],
                'user_id' => 1
            ]
        );
    }
}


 view('notes/create.view.php',[
    'heading'=>'Create Us',
    'errors'=>$errors,
]);

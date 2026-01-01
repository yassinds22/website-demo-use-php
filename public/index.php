<?php
//define('BASE_PATH', dirname(__DIR__));
const BASE_PATH = __DIR__ . '/../';


//var_dump(BASE_PATH);
require BASE_PATH .'function.php';
// require base_path('Respones.php');
// require base_path('Database.php');
spl_autoload_register(function($class){
     require base_path( "core/{$class }.php");

});
require base_path( 'route.php');



































// $id=$_GET['id'];
//$query="select * from posts ";
// dd($query);
//$posts=$db->query($query,)->fetch();//>fetchAll(PDO::FETCH_ASSOC);
// dd($posts);


// foreach($posts as $data){
//     echo "<li>".$data['title']."</li>";
// }





// class Presson{
//     public $name;
//     public $age;

//     public function breathe(){
//         echo $this->name. 'is breathing';
//     }
// }

// $presson=new Presson();

// $presson->name="yasssin";
// $presson->age=20;
// $presson->breathe();

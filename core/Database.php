<?php

class Database{
    public $connection;
    public$statement;
    public function __construct($config,$username='root',$password=''){
       
       $dns='mysql:' .http_build_query($config,'',';');
      // dd( $dns);
           //$dns="mysql:host={$config['host']};port={$config['port']};dbname={$config['db']};charset={$config['charset']}";
           $this->connection=new PDO($dns,$username,$password,[
              PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
           ]);
         

    }
 
    

  public function query($query ,$param=[]){
    $this->statement = $this->connection->prepare($query);
    $this->statement->execute($param); // تنفيذ الاستعلام
    return $this;
      // جلب النتائج
}
public function find(){
  return $this->statement->fetch();

}

public function get(){
  return $this->statement->fetchAll();

}
public function findOrFelid(){
 $result=$this->find();
 if(!$result){
  abort();
 }
 return $result;

}

  
}
<?php
class SQL{
public $connection; 
public function __construct()
{
  $config = [
    'host' => '127.0.0.1',
    'port'=> '3306',
    'user'=> 'root',
    'charset'=> 'utf8mb4',
  ] ;
  $dsn = "mysql:{$config['host']};port={$config['port']};user={$config['user']};charset={$config['charset']};
  $this->connection = new PDO($dsn);
  }

  public function query($query){
    $statement = $this>connection->prepare ($query);
    $statement->execute();
    
    return $statement->fetch(PDO::FETCH_ASSOC);
  }
  };
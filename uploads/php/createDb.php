<?php 
class CreateDb{
  public $servername;
  public $username;
  public $password;
  public $dbname;
  public $tablename;
  public $con;

  // class constructor
  public function _construct(
      $dbname = "Newdb",
      $tablename = "ProductDb",
      $servername = "localhost",
      $username = "root",
      $password = ""
  ){
    $this->dbname = $dbname;
    $this->$tablename = $tablename;
    $this->$password = $password;
    $this->$servername = $servername;
    $this->$username= $username;

    $this->con = mysqli_connect($servername,$username,$password);
    // check connection 
    if(!$this->con){
      die("Connection failed:".mysqli_connect_error());
    }
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
    if(mysqli_query($this->con,$sql)){
       $this->con = mysqli_connect($servername,$username,$password,$dbname);

      //  sql to create new table
      $sql = "CREATE TABLE IF NOT EXISTS $tablename()";

    }
  }
}
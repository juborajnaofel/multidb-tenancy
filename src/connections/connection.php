<?php
class DatabaseConnection{
  private $servername = "localhost";
  private $username = "root";
  private $password = "";
  private $db = "testtenancy";
  public $conn = null;

  public function connectCentral(){
    try {
      $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->db", $this->username, $this->password);
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage()."<br>";
    }
  }

  public function switchTenant($tenantDatabaseName){
    try {
      $this->conn->exec("USE $tenantDatabaseName");
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage()."<br>";
    }
  }
}
?>


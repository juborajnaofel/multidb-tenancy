<?php
class Tenancy{
  public $conn = null;

  public function __construct($db) {
    $this->conn = $db->conn;
  }

  public function createTenant($tenantDBName){
    try {
        $sql = "CREATE DATABASE IF NOT EXISTS $tenantDBName";
        $this->conn->exec($sql);
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage()."<br>";
    }
  }

  public function currentSubdomain(){
        $host = $_SERVER['HTTP_HOST'];
        $parts = explode('.', $host);
        if (count($parts) > 2) {
            $subdomain = $parts[0];
        } else {
            $subdomain = null;
        }
        return $subdomain;
  }
}
?>


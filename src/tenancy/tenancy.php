<?php
class Tenancy{
  public $conn = null;
  public $domainConfig = null;
  public function __construct($db, $domainConfig) {
    $this->conn = $db->conn;
    $this->domainConfig = $domainConfig;
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
        $centralDomain = $this->domainConfig['CENTRAL_DOMAIN'];

        if (substr($host, -strlen($centralDomain)) === $centralDomain) {
            $subdomains = rtrim(substr($host, 0, -strlen($centralDomain)), '.');
            $subdomainArray = ($subdomains !== $host) ? explode(".", $subdomains) : [];
            if(count($subdomainArray) > 0){
              return implode(".", $subdomainArray);
            }
            return null;
        }
    
        return null;
  }
}
?>


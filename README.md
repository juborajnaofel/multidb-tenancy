# multidb-tenancy

config database and domains in ./config/config.php
```php
$dbConfig = [
	"DB_CONNECTION" => "mysql",
	"DB_HOST"=>"127.0.0.1",
	"DB_PORT"=>3306,
	"DB_DATABASE"=>"testtenancy",
	"DB_USERNAME"=>"root",
	"DB_PASSWORD"=> "",
];

$domainConfig = [
	"APP_URL" => '',
	"CENTRAL_DOMAIN => ''
];
```

access current subdomain in index.php
```php
$subdomain = $tenancy->currentSubdomain();
```

create a tenant in index.php
```php
$tenancy->createTenant($dbConfig['DB_DATABASE'].'_'.$subdomain);
```

switch to tenant database in index.php
```php
$db->switchTenant($dbConfig['DB_DATABASE'].'_'.$subdomain);
```

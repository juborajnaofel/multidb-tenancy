# multidb-tenancy

config database in ./config/config.php


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

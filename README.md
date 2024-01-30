# multidb-tenancy

config database in ./config/config.php


access current subdomain in index.php
```php
$subdomain = $tenancy->currentSubdomain();
```

create a tenant in index.php
```php
$tenancy->createTenant('testtenancy_'.$subdomain);
```

switch to tenant database in index.php
```php
$db->switchTenant('testtenancy_'.$subdomain);
```

<?php return array (
  'cors' => 
  array (
    'paths' => 
    array (
      0 => 'api/*',
      1 => 'sanctum/csrf-cookie',
    ),
    'allowed_methods' => 
    array (
      0 => '*',
    ),
    'allowed_origins' => 
    array (
      0 => '*',
    ),
    'allowed_origins_patterns' => 
    array (
    ),
    'allowed_headers' => 
    array (
      0 => '*',
    ),
    'exposed_headers' => 
    array (
    ),
    'max_age' => 0,
    'supports_credentials' => false,
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => '/var/www/html/resources/views',
    ),
    'compiled' => '/var/www/html/storage/framework/views',
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
    'bcrypt' => 
    array (
      'rounds' => 12,
      'verify' => true,
      'limit' => NULL,
    ),
    'argon' => 
    array (
      'memory' => 65536,
      'threads' => 1,
      'time' => 4,
      'verify' => true,
    ),
    'rehash_on_login' => true,
  ),
  'concurrency' => 
  array (
    'default' => 'process',
  ),
  'broadcasting' => 
  array (
    'default' => 'null',
    'connections' => 
    array (
      'reverb' => 
      array (
        'driver' => 'reverb',
        'key' => NULL,
        'secret' => NULL,
        'app_id' => NULL,
        'options' => 
        array (
          'host' => NULL,
          'port' => 443,
          'scheme' => 'https',
          'useTLS' => true,
        ),
        'client_options' => 
        array (
        ),
      ),
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => NULL,
        'secret' => NULL,
        'app_id' => NULL,
        'options' => 
        array (
          'cluster' => NULL,
          'host' => 'api-mt1.pusher.com',
          'port' => 443,
          'scheme' => 'https',
          'encrypted' => true,
          'useTLS' => true,
        ),
        'client_options' => 
        array (
        ),
      ),
      'ably' => 
      array (
        'driver' => 'ably',
        'key' => NULL,
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'app' => 
  array (
    'name' => 'allcatholicmedia',
    'env' => 'production',
    'debug' => false,
    'url' => 'http://acm.2.29.0.164.nip.io',
    'frontend_url' => 'http://localhost:3000',
    'asset_url' => NULL,
    'timezone' => 'America/New_York',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'faker_locale' => 'en_US',
    'cipher' => 'AES-256-CBC',
    'key' => 'base64:aupx1RSuyw8STqR4i3nxG5Xks5OGwbZN5xelUG0NVPE=',
    'previous_keys' => 
    array (
    ),
    'maintenance' => 
    array (
      'driver' => 'file',
      'store' => 'database',
    ),
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Concurrency\\ConcurrencyServiceProvider',
      6 => 'Illuminate\\Cookie\\CookieServiceProvider',
      7 => 'Illuminate\\Database\\DatabaseServiceProvider',
      8 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      9 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      10 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      11 => 'Illuminate\\Hashing\\HashServiceProvider',
      12 => 'Illuminate\\Mail\\MailServiceProvider',
      13 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      14 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      15 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      16 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      17 => 'Illuminate\\Queue\\QueueServiceProvider',
      18 => 'Illuminate\\Redis\\RedisServiceProvider',
      19 => 'Illuminate\\Session\\SessionServiceProvider',
      20 => 'Illuminate\\Translation\\TranslationServiceProvider',
      21 => 'Illuminate\\Validation\\ValidationServiceProvider',
      22 => 'Illuminate\\View\\ViewServiceProvider',
      23 => 'App\\Providers\\AppServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Arr' => 'Illuminate\\Support\\Arr',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Benchmark' => 'Illuminate\\Support\\Benchmark',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Concurrency' => 'Illuminate\\Support\\Facades\\Concurrency',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Context' => 'Illuminate\\Support\\Facades\\Context',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'Date' => 'Illuminate\\Support\\Facades\\Date',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Http' => 'Illuminate\\Support\\Facades\\Http',
      'Js' => 'Illuminate\\Support\\Js',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Number' => 'Illuminate\\Support\\Number',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Process' => 'Illuminate\\Support\\Facades\\Process',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'RateLimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schedule' => 'Illuminate\\Support\\Facades\\Schedule',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'Str' => 'Illuminate\\Support\\Str',
      'Uri' => 'Illuminate\\Support\\Uri',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'Vite' => 'Illuminate\\Support\\Facades\\Vite',
    ),
    'debug_blacklist' => 
    array (
      '_ENV' => 
      array (
        0 => 'APP_KEY',
        1 => 'ADMIN_DIR',
        2 => 'DB_DATABASE',
        3 => 'DB_USERNAME',
        4 => 'DB_PASSWORD',
        5 => 'REDIS_PASSWORD',
        6 => 'MAIL_PASSWORD',
        7 => 'PUSHER_APP_KEY',
        8 => 'PUSHER_APP_SECRET',
      ),
      '_SERVER' => 
      array (
        0 => 'APP_KEY',
        1 => 'ADMIN_DIR',
        2 => 'DB_DATABASE',
        3 => 'DB_USERNAME',
        4 => 'DB_PASSWORD',
        5 => 'REDIS_PASSWORD',
        6 => 'MAIL_PASSWORD',
        7 => 'PUSHER_APP_KEY',
        8 => 'PUSHER_APP_SECRET',
      ),
      '_POST' => 
      array (
        0 => 'password',
      ),
    ),
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'sanctum' => 
      array (
        'driver' => 'sanctum',
        'provider' => NULL,
      ),
      'member' => 
      array (
        'driver' => 'session',
        'provider' => 'members',
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'Botble\\ACL\\Models\\User',
      ),
      'members' => 
      array (
        'driver' => 'eloquent',
        'model' => 'Botble\\Member\\Models\\Member',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_reset_tokens',
        'expire' => 60,
        'throttle' => 60,
      ),
      'members' => 
      array (
        'provider' => 'members',
        'table' => 'member_password_resets',
        'expire' => 60,
      ),
    ),
    'password_timeout' => 10800,
  ),
  'cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'array' => 
      array (
        'driver' => 'array',
        'serialize' => false,
      ),
      'session' => 
      array (
        'driver' => 'session',
        'key' => '_cache',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'connection' => NULL,
        'table' => 'cache',
        'lock_connection' => NULL,
        'lock_table' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => '/var/www/html/storage/framework/cache/data',
        'lock_path' => '/var/www/html/storage/framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'cache',
        'lock_connection' => 'default',
      ),
      'dynamodb' => 
      array (
        'driver' => 'dynamodb',
        'key' => NULL,
        'secret' => NULL,
        'region' => 'us-east-1',
        'table' => 'cache',
        'endpoint' => NULL,
      ),
      'octane' => 
      array (
        'driver' => 'octane',
      ),
      'failover' => 
      array (
        'driver' => 'failover',
        'stores' => 
        array (
          0 => 'database',
          1 => 'array',
        ),
      ),
    ),
    'prefix' => 'allcatholicmedia-cache-',
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'url' => NULL,
        'database' => 'allcatholicmedia',
        'prefix' => '',
        'foreign_key_constraints' => true,
        'busy_timeout' => NULL,
        'journal_mode' => NULL,
        'synchronous' => NULL,
        'transaction_mode' => 'DEFERRED',
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'allcatholicmedia',
        'username' => 'heidi_admin',
        'password' => 'Admin!2026',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => false,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
      'mariadb' => 
      array (
        'driver' => 'mariadb',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'allcatholicmedia',
        'username' => 'heidi_admin',
        'password' => 'Admin!2026',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'allcatholicmedia',
        'username' => 'heidi_admin',
        'password' => 'Admin!2026',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'search_path' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'allcatholicmedia',
        'username' => 'heidi_admin',
        'password' => 'Admin!2026',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
      ),
    ),
    'migrations' => 
    array (
      'table' => 'migrations',
      'update_date_on_publish' => true,
    ),
    'redis' => 
    array (
      'client' => 'predis',
      'options' => 
      array (
        'cluster' => 'redis',
        'prefix' => 'allcatholicmedia-database-',
        'persistent' => false,
      ),
      'default' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'username' => NULL,
        'password' => NULL,
        'port' => '6379',
        'database' => '0',
        'max_retries' => 3,
        'backoff_algorithm' => 'decorrelated_jitter',
        'backoff_base' => 100,
        'backoff_cap' => 1000,
      ),
      'cache' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'username' => NULL,
        'password' => NULL,
        'port' => '6379',
        'database' => '1',
        'max_retries' => 3,
        'backoff_algorithm' => 'decorrelated_jitter',
        'backoff_base' => 100,
        'backoff_cap' => 1000,
      ),
    ),
  ),
  'feeds' => 
  array (
    'sources' => 
    array (
      0 => 
      array (
        'name' => 'Catholic News Agency',
        'url' => 'https://www.catholicnewsagency.com/feed',
        'type' => 'post',
        'category' => 'World News',
        'auto_publish' => true,
        'is_active' => true,
      ),
      1 => 
      array (
        'name' => 'National Catholic Register',
        'url' => 'https://www.ncregister.com/rss',
        'type' => 'post',
        'category' => 'Catholic Culture',
        'auto_publish' => true,
        'is_active' => true,
      ),
      2 => 
      array (
        'name' => 'Aleteia',
        'url' => 'https://aleteia.org/feed/',
        'type' => 'post',
        'category' => 'Spirituality',
        'auto_publish' => true,
        'is_active' => true,
      ),
      3 => 
      array (
        'name' => 'Crux Now',
        'url' => 'https://cruxnow.com/feed/',
        'type' => 'post',
        'category' => 'World News',
        'auto_publish' => true,
        'is_active' => true,
      ),
      4 => 
      array (
        'name' => 'America Magazine',
        'url' => 'https://www.americamagazine.org/rss.xml',
        'type' => 'post',
        'category' => 'Opinion & Commentary',
        'auto_publish' => true,
        'is_active' => true,
      ),
      5 => 
      array (
        'name' => 'The Pillar',
        'url' => 'https://www.pillarcatholic.com/feed',
        'type' => 'post',
        'category' => 'World News',
        'auto_publish' => true,
        'is_active' => true,
      ),
      6 => 
      array (
        'name' => 'Catholic Herald',
        'url' => 'https://catholicherald.co.uk/feed/',
        'type' => 'post',
        'category' => 'World News',
        'auto_publish' => true,
        'is_active' => true,
      ),
      7 => 
      array (
        'name' => 'EWTN News',
        'url' => 'https://www.ewtnews.com/feed',
        'type' => 'post',
        'category' => 'Vatican News',
        'auto_publish' => true,
        'is_active' => true,
      ),
      8 => 
      array (
        'name' => 'Vatican News (RSS)',
        'url' => 'https://www.vaticannews.va/en.rss.xml',
        'type' => 'post',
        'category' => 'Vatican News',
        'auto_publish' => true,
        'is_active' => true,
      ),
      9 => 
      array (
        'name' => 'Catholic Culture',
        'url' => 'https://www.catholicculture.org/news/feed.cfm',
        'type' => 'post',
        'category' => 'Catholic Culture',
        'auto_publish' => true,
        'is_active' => true,
      ),
      10 => 
      array (
        'name' => 'Word on Fire Blog',
        'url' => 'https://www.wordonfire.org/resources/feed/',
        'type' => 'post',
        'category' => 'Spirituality',
        'auto_publish' => true,
        'is_active' => true,
      ),
      11 => 
      array (
        'name' => 'Catholic Exchange',
        'url' => 'https://catholicexchange.com/feed/',
        'type' => 'post',
        'category' => 'Spirituality',
        'auto_publish' => true,
        'is_active' => true,
      ),
      12 => 
      array (
        'name' => 'Franciscan Media — Saint of the Day',
        'url' => 'https://www.franciscanmedia.org/saint-of-the-day/feed/',
        'type' => 'post',
        'category' => 'Saints & Feast Days',
        'auto_publish' => true,
        'is_active' => true,
      ),
      13 => 
      array (
        'name' => 'American Catholic — Saint of the Day',
        'url' => 'https://www.americancatholic.org/Features/Saints/rss.asp',
        'type' => 'post',
        'category' => 'Saints & Feast Days',
        'auto_publish' => true,
        'is_active' => true,
      ),
      14 => 
      array (
        'name' => 'Catholic Online — Saints',
        'url' => 'https://www.catholic.org/saints/f_day/rss.php',
        'type' => 'post',
        'category' => 'Saints & Feast Days',
        'auto_publish' => true,
        'is_active' => true,
      ),
    ),
  ),
  'filesystems' => 
  array (
    'default' => 'public',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => '/var/www/html/storage/app',
        'serve' => true,
        'throw' => false,
        'report' => false,
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => '/var/www/html/storage/app/public',
        'url' => 'http://acm.2.29.0.164.nip.io/storage',
        'visibility' => 'public',
        'throw' => true,
        'report' => false,
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => NULL,
        'secret' => NULL,
        'region' => NULL,
        'bucket' => NULL,
        'url' => NULL,
        'endpoint' => NULL,
        'use_path_style_endpoint' => false,
        'throw' => false,
        'report' => false,
      ),
      'fcache' => 
      array (
        'driver' => 'local',
        'root' => '/var/www/html/storage/framework/cache/data',
      ),
    ),
    'links' => 
    array (
      '/var/www/html/public/storage' => '/var/www/html/storage/app/public',
    ),
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'deprecations' => 
    array (
      'channel' => 'null',
      'trace' => false,
    ),
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'single',
        ),
        'ignore_exceptions' => false,
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => '/var/www/html/storage/logs/laravel.log',
        'level' => 'debug',
        'replace_placeholders' => true,
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => '/var/www/html/storage/logs/laravel.log',
        'level' => 'debug',
        'days' => 14,
        'replace_placeholders' => true,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'critical',
        'replace_placeholders' => true,
      ),
      'papertrail' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\SyslogUdpHandler',
        'handler_with' => 
        array (
          'host' => NULL,
          'port' => NULL,
          'connectionString' => 'tls://:',
        ),
        'processors' => 
        array (
          0 => 'Monolog\\Processor\\PsrLogMessageProcessor',
        ),
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'handler_with' => 
        array (
          'stream' => 'php://stderr',
        ),
        'formatter' => NULL,
        'processors' => 
        array (
          0 => 'Monolog\\Processor\\PsrLogMessageProcessor',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
        'facility' => 8,
        'replace_placeholders' => true,
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
        'replace_placeholders' => true,
      ),
      'null' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\NullHandler',
      ),
      'emergency' => 
      array (
        'path' => '/var/www/html/storage/logs/laravel.log',
      ),
    ),
  ),
  'mail' => 
  array (
    'default' => 'log',
    'mailers' => 
    array (
      'smtp' => 
      array (
        'transport' => 'smtp',
        'scheme' => NULL,
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => 2525,
        'username' => NULL,
        'password' => NULL,
        'timeout' => NULL,
        'local_domain' => 'acm.2.29.0.164.nip.io',
      ),
      'ses' => 
      array (
        'transport' => 'ses',
      ),
      'postmark' => 
      array (
        'transport' => 'postmark',
      ),
      'resend' => 
      array (
        'transport' => 'resend',
      ),
      'sendmail' => 
      array (
        'transport' => 'sendmail',
        'path' => '/usr/sbin/sendmail -bs -i',
      ),
      'log' => 
      array (
        'transport' => 'log',
        'channel' => NULL,
      ),
      'array' => 
      array (
        'transport' => 'array',
      ),
      'failover' => 
      array (
        'transport' => 'failover',
        'mailers' => 
        array (
          0 => 'smtp',
          1 => 'log',
        ),
        'retry_after' => 60,
      ),
      'roundrobin' => 
      array (
        'transport' => 'roundrobin',
        'mailers' => 
        array (
          0 => 'ses',
          1 => 'postmark',
        ),
        'retry_after' => 60,
      ),
      'mailgun' => 
      array (
        'transport' => 'mailgun',
      ),
    ),
    'from' => 
    array (
      'address' => 'hello@example.com',
      'name' => 'Example',
    ),
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => '/var/www/html/resources/views/vendor/mail',
      ),
    ),
  ),
  'paypal' => 
  array (
    'mode' => 'live',
    'sandbox' => 
    array (
      'client_id' => '',
      'client_secret' => '',
      'app_id' => '',
    ),
    'live' => 
    array (
      'client_id' => 'Adt-5mNRyPW-mj2BlvOL-BTzBtKs91zEnkua8HpBXi3paRrh5ZlMVAaxeukm3z8SsktdP7-Ke8Gyd6VZ',
      'client_secret' => 'EFSSaxq5xoiBUt2071Ol0qOg2-mT_k9SrgUq2QLxyvuWxgrmljhcHiH6YXZlg161TBYnPQjSBFNDcpJr',
      'app_id' => '',
    ),
    'payment_action' => 'Sale',
    'currency' => 'USD',
    'notify_url' => '',
    'locale' => 'en_US',
    'validate_ssl' => true,
    'timeout' => 30,
    'connect_timeout' => 10,
    'max_retries' => 2,
  ),
  'queue' => 
  array (
    'default' => 'sync',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'connection' => NULL,
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
        'after_commit' => false,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => 0,
        'after_commit' => false,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => NULL,
        'secret' => NULL,
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'default',
        'suffix' => NULL,
        'region' => 'us-east-1',
        'after_commit' => false,
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
        'after_commit' => false,
      ),
      'deferred' => 
      array (
        'driver' => 'deferred',
      ),
      'failover' => 
      array (
        'driver' => 'failover',
        'connections' => 
        array (
          0 => 'database',
          1 => 'deferred',
        ),
      ),
      'background' => 
      array (
        'driver' => 'background',
      ),
    ),
    'batching' => 
    array (
      'database' => 'mysql',
      'table' => 'job_batches',
    ),
    'failed' => 
    array (
      'driver' => 'database-uuids',
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'seo-helper' => 
  array (
    'title' => 
    array (
      'separator' => '—',
      'first' => true,
      'max' => 120,
    ),
    'description' => 
    array (
      'max' => 386,
    ),
    'misc' => 
    array (
      'canonical' => true,
      'robots' => false,
      'default' => 
      array (
        'author' => '',
        'publisher' => '',
      ),
    ),
    'webmasters' => 
    array (
      'google' => '',
      'bing' => '',
      'alexa' => '',
      'pinterest' => '',
      'yandex' => '',
    ),
    'open-graph' => 
    array (
      'prefix' => 'og:',
      'type' => 'website',
      'properties' => 
      array (
      ),
    ),
    'twitter' => 
    array (
      'prefix' => 'twitter:',
      'card' => 'summary_large_image',
      'metas' => 
      array (
      ),
    ),
    'analytics' => 
    array (
      'google' => '',
    ),
    'supported' => 
    array (
      0 => 'Botble\\Page\\Models\\Page',
    ),
  ),
  'services' => 
  array (
    'postmark' => 
    array (
      'key' => NULL,
    ),
    'resend' => 
    array (
      'key' => NULL,
    ),
    'ses' => 
    array (
      'key' => NULL,
      'secret' => NULL,
      'region' => 'us-east-1',
    ),
    'slack' => 
    array (
      'notifications' => 
      array (
        'bot_user_oauth_token' => NULL,
        'channel' => NULL,
      ),
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => 120,
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => '/var/www/html/storage/framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'botble_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => false,
    'http_only' => true,
    'same_site' => 'lax',
    'partitioned' => false,
  ),
  'youtube' => 
  array (
    'api_key' => 'AIzaSyBwcrE3lQn0qqRxztnZR1u-OcPe48utP_g',
    'sync' => 
    array (
      'videos_per_channel' => 60,
    ),
    'channels' => 
    array (
      0 => 
      array (
        'name' => 'CatholicTV',
        'slug' => 'catholictv',
        'youtube_channel_id' => '',
        'youtube_handle' => '@CatholicTV',
        'description' => 'Daily Catholic Mass, Rosary, prayers, and faith programming from CatholicTV.',
        'is_active' => true,
        'sort_order' => 1,
      ),
      1 => 
      array (
        'name' => 'EWTN',
        'slug' => 'ewtn',
        'youtube_channel_id' => '',
        'youtube_handle' => '@EWTN',
        'description' => 'Global Catholic Television Network — news, daily Mass, Rosary, and devotional programming.',
        'is_active' => true,
        'sort_order' => 2,
      ),
      2 => 
      array (
        'name' => 'Catholic Answers',
        'slug' => 'catholic-answers',
        'youtube_channel_id' => 'UCvwbLBTkuIwqNm9kHUqWRnw',
        'youtube_handle' => '',
        'description' => 'Defending and explaining the Catholic Faith through apologetics, talks, and Q&A.',
        'is_active' => true,
        'sort_order' => 3,
      ),
      3 => 
      array (
        'name' => 'Bishop Robert Barron',
        'slug' => 'bishop-barron',
        'youtube_channel_id' => 'UCcMjLgeWNwqL2LBGS-iPb1A',
        'youtube_handle' => '',
        'description' => 'Bishop Robert Barron\'s ministry — homilies, book studies, and Catholic evangelization.',
        'is_active' => true,
        'sort_order' => 4,
      ),
      4 => 
      array (
        'name' => 'Ascension Presents',
        'slug' => 'ascension-presents',
        'youtube_channel_id' => 'UCVdGX3N-WIJ5nUvklBTNhAw',
        'youtube_handle' => '',
        'description' => 'Catholic teaching, Bible studies, and faith formation videos from Ascension.',
        'is_active' => true,
        'sort_order' => 5,
      ),
      5 => 
      array (
        'name' => 'The Coming Home Network',
        'slug' => 'coming-home-network',
        'youtube_channel_id' => 'UCIDebJFlV5aIsFs2jzxASrQ',
        'youtube_handle' => '',
        'description' => 'Conversion stories, faith journeys, and Catholic testimony.',
        'is_active' => true,
        'sort_order' => 6,
      ),
      6 => 
      array (
        'name' => 'Vatican News',
        'slug' => 'vatican-news',
        'youtube_channel_id' => '',
        'youtube_handle' => '@vaticannews',
        'description' => 'Official Vatican channel — live papal Masses, Angelus, and Church events.',
        'is_active' => true,
        'sort_order' => 7,
      ),
      7 => 
      array (
        'name' => 'Rome Reports',
        'slug' => 'rome-reports',
        'youtube_channel_id' => '',
        'youtube_handle' => '@RomeReports',
        'description' => 'Catholic news agency covering Vatican and global Church news live.',
        'is_active' => true,
        'sort_order' => 8,
      ),
      8 => 
      array (
        'name' => 'Salt + Light TV',
        'slug' => 'salt-and-light-tv',
        'youtube_channel_id' => '',
        'youtube_handle' => '@saltandlighttv',
        'description' => 'Canadian Catholic television network with daily live programming.',
        'is_active' => true,
        'sort_order' => 9,
      ),
      9 => 
      array (
        'name' => 'Relevant Radio',
        'slug' => 'relevant-radio',
        'youtube_channel_id' => '',
        'youtube_handle' => '@RelevantRadio',
        'description' => 'Live Catholic talk radio — daily shows, call-ins, and discussions.',
        'is_active' => true,
        'sort_order' => 10,
      ),
      10 => 
      array (
        'name' => 'Pints With Aquinas',
        'slug' => 'pints-with-aquinas',
        'youtube_channel_id' => '',
        'youtube_handle' => '@PintsWithAquinas',
        'description' => 'Matt Fradd — live Q&As, philosophical and faith discussions.',
        'is_active' => true,
        'sort_order' => 11,
      ),
      11 => 
      array (
        'name' => 'National Shrine',
        'slug' => 'national-shrine',
        'youtube_channel_id' => '',
        'youtube_handle' => '@NationalShrine',
        'description' => 'Live Masses from the Basilica of the National Shrine, Washington DC.',
        'is_active' => true,
        'sort_order' => 12,
      ),
    ),
  ),
  'dompdf' => 
  array (
    'show_warnings' => false,
    'public_path' => '/var/www/html/public',
    'convert_entities' => true,
    'options' => 
    array (
      'font_dir' => '/var/www/html/storage/fonts',
      'font_cache' => '/var/www/html/storage/fonts',
      'temp_dir' => '/tmp',
      'chroot' => '/var/www/html',
      'allowed_protocols' => 
      array (
        'data://' => 
        array (
          'rules' => 
          array (
          ),
        ),
        'file://' => 
        array (
          'rules' => 
          array (
          ),
        ),
        'http://' => 
        array (
          'rules' => 
          array (
          ),
        ),
        'https://' => 
        array (
          'rules' => 
          array (
          ),
        ),
      ),
      'artifactPathValidation' => NULL,
      'log_output_file' => NULL,
      'enable_font_subsetting' => false,
      'pdf_backend' => 'CPDF',
      'default_media_type' => 'screen',
      'default_paper_size' => 'a4',
      'default_paper_orientation' => 'portrait',
      'default_font' => 'serif',
      'dpi' => 96,
      'enable_php' => false,
      'enable_javascript' => true,
      'enable_remote' => false,
      'allowed_remote_hosts' => NULL,
      'font_height_ratio' => 1.1,
      'enable_html5_parser' => true,
    ),
  ),
  'scribe' => 
  array (
    'routes' => 
    array (
      0 => 
      array (
        'match' => 
        array (
          'prefixes' => 
          array (
            0 => 'api/*',
          ),
          'domains' => 
          array (
            0 => '*',
          ),
        ),
        'include' => 
        array (
        ),
        'exclude' => 
        array (
        ),
      ),
    ),
    'type' => 'static',
    'assets_directory' => 'vendor/core/packages/api',
  ),
  'laravel-form-builder' => 
  array (
    'defaults' => 
    array (
      'wrapper_class' => 'form-group',
      'wrapper_error_class' => 'has-error',
      'label_class' => 'control-label',
      'field_class' => 'form-control',
      'field_error_class' => '',
      'help_block_class' => 'help-block',
      'error_class' => 'text-danger',
      'required_class' => 'required',
      'help_block_tag' => 'p',
    ),
    'form' => 'laravel-form-builder::form',
    'text' => 'laravel-form-builder::text',
    'textarea' => 'laravel-form-builder::textarea',
    'button' => 'laravel-form-builder::button',
    'buttongroup' => 'laravel-form-builder::buttongroup',
    'radio' => 'laravel-form-builder::radio',
    'checkbox' => 'laravel-form-builder::checkbox',
    'select' => 'laravel-form-builder::select',
    'choice' => 'laravel-form-builder::choice',
    'repeated' => 'laravel-form-builder::repeated',
    'child_form' => 'laravel-form-builder::child_form',
    'collection' => 'laravel-form-builder::collection',
    'static' => 'laravel-form-builder::static',
    'template_prefix' => '',
    'default_namespace' => '',
    'custom_fields' => 
    array (
    ),
    'plain_form_class' => 'Botble\\Base\\Forms\\Form',
    'form_builder_class' => 'Botble\\Base\\Forms\\FormBuilder',
    'form_helper_class' => 'Botble\\Base\\Forms\\FormHelper',
    'defaults.wrapper_class' => 'mb-3 position-relative',
    'defaults.label_class' => 'form-label',
    'defaults.field_error_class' => 'is-invalid',
    'defaults.help_block_class' => 'form-hint',
    'defaults.error_class' => 'invalid-feedback',
    'defaults.help_block_tag' => 'small',
    'defaults.select' => 
    array (
      'field_class' => 'form-select',
    ),
  ),
  'core' => 
  array (
    'base' => 
    array (
      'general' => 
      array (
        'admin_dir' => 'admin',
        'base_name' => 'allcatholicmedia',
        'logo' => '/vendor/core/core/base/images/logo.png',
        'favicon' => '/vendor/core/core/base/images/favicon.png',
        'editor' => 
        array (
          'ckeditor' => 
          array (
            'js' => 
            array (
              0 => '/vendor/core/core/base/libraries/ckeditor/ckeditor.js',
            ),
            'font_families' => '',
          ),
          'tinymce' => 
          array (
            'js' => 
            array (
              0 => '/vendor/core/core/base/libraries/tinymce/tinymce.min.js',
            ),
          ),
          'primary' => 'ckeditor',
        ),
        'error_reporting' => 
        array (
          'to' => NULL,
          'via_slack' => false,
          'ignored_bots' => 
          array (
            0 => 'googlebot',
            1 => 'bingbot',
            2 => 'slurp',
            3 => 'ia_archiver',
          ),
        ),
        'enable_https_support' => false,
        'force_root_url' => NULL,
        'force_schema' => NULL,
        'enable_http_security_headers' => true,
        'max_execution_time' => 300,
        'memory_limit' => NULL,
        'date_format' => 
        array (
          'date' => 'Y-m-d',
          'date_time' => 'Y-m-d H:i:s',
          'js' => 
          array (
            'date' => 'yyyy-mm-dd',
            'date_time' => 'yyyy-mm-dd H:i:s',
          ),
        ),
        'demo' => 
        array (
          'account' => 
          array (
            'username' => 'admin',
            'password' => '12345678',
          ),
        ),
        'google_fonts' => 
        array (
        ),
        'custom_google_fonts' => '',
        'custom_fonts' => '',
        'countries' => 
        array (
          'AF' => 'Afghanistan',
          'AX' => 'Åland Islands',
          'AL' => 'Albania',
          'DZ' => 'Algeria',
          'AS' => 'American Samoa',
          'AD' => 'Andorra',
          'AO' => 'Angola',
          'AI' => 'Anguilla',
          'AQ' => 'Antarctica',
          'AG' => 'Antigua and Barbuda',
          'AR' => 'Argentina',
          'AM' => 'Armenia',
          'AW' => 'Aruba',
          'AU' => 'Australia',
          'AT' => 'Austria',
          'AZ' => 'Azerbaijan',
          'BS' => 'Bahamas',
          'BH' => 'Bahrain',
          'BD' => 'Bangladesh',
          'BB' => 'Barbados',
          'BY' => 'Belarus',
          'BE' => 'Belgium',
          'PW' => 'Belau',
          'BZ' => 'Belize',
          'BJ' => 'Benin',
          'BM' => 'Bermuda',
          'BT' => 'Bhutan',
          'BO' => 'Bolivia',
          'BQ' => 'Bonaire, Saint Eustatius and Saba',
          'BA' => 'Bosnia and Herzegovina',
          'BW' => 'Botswana',
          'BV' => 'Bouvet Island',
          'BR' => 'Brazil',
          'IO' => 'British Indian Ocean Territory',
          'BN' => 'Brunei',
          'BG' => 'Bulgaria',
          'BF' => 'Burkina Faso',
          'BI' => 'Burundi',
          'KH' => 'Cambodia',
          'CM' => 'Cameroon',
          'CA' => 'Canada',
          'CV' => 'Cape Verde',
          'KY' => 'Cayman Islands',
          'CF' => 'Central African Republic',
          'TD' => 'Chad',
          'CL' => 'Chile',
          'CN' => 'China',
          'CX' => 'Christmas Island',
          'CC' => 'Cocos (Keeling) Islands',
          'CO' => 'Colombia',
          'KM' => 'Comoros',
          'CG' => 'Congo (Brazzaville)',
          'CD' => 'Congo (Kinshasa)',
          'CK' => 'Cook Islands',
          'CR' => 'Costa Rica',
          'HR' => 'Croatia',
          'CU' => 'Cuba',
          'CW' => 'Cura&ccedil;ao',
          'CY' => 'Cyprus',
          'CZ' => 'Czech Republic',
          'DK' => 'Denmark',
          'DJ' => 'Djibouti',
          'DM' => 'Dominica',
          'DO' => 'Dominican Republic',
          'EC' => 'Ecuador',
          'EG' => 'Egypt',
          'SV' => 'El Salvador',
          'GQ' => 'Equatorial Guinea',
          'ER' => 'Eritrea',
          'EE' => 'Estonia',
          'ET' => 'Ethiopia',
          'FK' => 'Falkland Islands',
          'FO' => 'Faroe Islands',
          'FJ' => 'Fiji',
          'FI' => 'Finland',
          'FR' => 'France',
          'GF' => 'French Guiana',
          'PF' => 'French Polynesia',
          'TF' => 'French Southern Territories',
          'GA' => 'Gabon',
          'GM' => 'Gambia',
          'GE' => 'Georgia',
          'DE' => 'Germany',
          'GH' => 'Ghana',
          'GI' => 'Gibraltar',
          'GR' => 'Greece',
          'GL' => 'Greenland',
          'GD' => 'Grenada',
          'GP' => 'Guadeloupe',
          'GU' => 'Guam',
          'GT' => 'Guatemala',
          'GG' => 'Guernsey',
          'GN' => 'Guinea',
          'GW' => 'Guinea-Bissau',
          'GY' => 'Guyana',
          'HT' => 'Haiti',
          'HM' => 'Heard Island and McDonald Islands',
          'HN' => 'Honduras',
          'HK' => 'Hong Kong',
          'HU' => 'Hungary',
          'IS' => 'Iceland',
          'IN' => 'India',
          'ID' => 'Indonesia',
          'IR' => 'Iran',
          'IQ' => 'Iraq',
          'IE' => 'Ireland',
          'IM' => 'Isle of Man',
          'IL' => 'Israel',
          'IT' => 'Italy',
          'CI' => 'Ivory Coast',
          'JM' => 'Jamaica',
          'JP' => 'Japan',
          'JE' => 'Jersey',
          'JO' => 'Jordan',
          'KZ' => 'Kazakhstan',
          'KE' => 'Kenya',
          'KI' => 'Kiribati',
          'KW' => 'Kuwait',
          'XK' => 'Kosovo',
          'KG' => 'Kyrgyzstan',
          'LA' => 'Laos',
          'LV' => 'Latvia',
          'LB' => 'Lebanon',
          'LS' => 'Lesotho',
          'LR' => 'Liberia',
          'LY' => 'Libya',
          'LI' => 'Liechtenstein',
          'LT' => 'Lithuania',
          'LU' => 'Luxembourg',
          'MO' => 'Macao',
          'MK' => 'North Macedonia',
          'MG' => 'Madagascar',
          'MW' => 'Malawi',
          'MY' => 'Malaysia',
          'MV' => 'Maldives',
          'ML' => 'Mali',
          'MT' => 'Malta',
          'MH' => 'Marshall Islands',
          'MQ' => 'Martinique',
          'MR' => 'Mauritania',
          'MU' => 'Mauritius',
          'YT' => 'Mayotte',
          'MX' => 'Mexico',
          'FM' => 'Micronesia',
          'MD' => 'Moldova',
          'MC' => 'Monaco',
          'MN' => 'Mongolia',
          'ME' => 'Montenegro',
          'MS' => 'Montserrat',
          'MA' => 'Morocco',
          'MZ' => 'Mozambique',
          'MM' => 'Myanmar',
          'NA' => 'Namibia',
          'NR' => 'Nauru',
          'NP' => 'Nepal',
          'NL' => 'Netherlands',
          'NC' => 'New Caledonia',
          'NZ' => 'New Zealand',
          'NI' => 'Nicaragua',
          'NE' => 'Niger',
          'NG' => 'Nigeria',
          'NU' => 'Niue',
          'NF' => 'Norfolk Island',
          'MP' => 'Northern Mariana Islands',
          'KP' => 'North Korea',
          'NO' => 'Norway',
          'OM' => 'Oman',
          'PK' => 'Pakistan',
          'PS' => 'Palestinian Territory',
          'PA' => 'Panama',
          'PG' => 'Papua New Guinea',
          'PY' => 'Paraguay',
          'PE' => 'Peru',
          'PH' => 'Philippines',
          'PN' => 'Pitcairn',
          'PL' => 'Poland',
          'PT' => 'Portugal',
          'PR' => 'Puerto Rico',
          'QA' => 'Qatar',
          'RE' => 'Reunion',
          'RO' => 'Romania',
          'RU' => 'Russia',
          'RW' => 'Rwanda',
          'BL' => 'Saint Barth&eacute;lemy',
          'SH' => 'Saint Helena',
          'KN' => 'Saint Kitts and Nevis',
          'LC' => 'Saint Lucia',
          'MF' => 'Saint Martin (French part)',
          'SX' => 'Saint Martin (Dutch part)',
          'PM' => 'Saint Pierre and Miquelon',
          'VC' => 'Saint Vincent and the Grenadines',
          'SM' => 'San Marino',
          'ST' => 'S&atilde;o Tom&eacute; and Pr&iacute;ncipe',
          'SA' => 'Saudi Arabia',
          'SN' => 'Senegal',
          'RS' => 'Serbia',
          'SC' => 'Seychelles',
          'SL' => 'Sierra Leone',
          'SG' => 'Singapore',
          'SK' => 'Slovakia',
          'SI' => 'Slovenia',
          'SB' => 'Solomon Islands',
          'SO' => 'Somalia',
          'ZA' => 'South Africa',
          'GS' => 'South Georgia/Sandwich Islands',
          'KR' => 'South Korea',
          'SS' => 'South Sudan',
          'ES' => 'Spain',
          'LK' => 'Sri Lanka',
          'SD' => 'Sudan',
          'SR' => 'Suriname',
          'SJ' => 'Svalbard and Jan Mayen',
          'SZ' => 'Swaziland',
          'SE' => 'Sweden',
          'CH' => 'Switzerland',
          'SY' => 'Syria',
          'TW' => 'Taiwan',
          'TJ' => 'Tajikistan',
          'TZ' => 'Tanzania',
          'TH' => 'Thailand',
          'TL' => 'Timor-Leste',
          'TG' => 'Togo',
          'TK' => 'Tokelau',
          'TO' => 'Tonga',
          'TT' => 'Trinidad and Tobago',
          'TN' => 'Tunisia',
          'TR' => 'Turkey',
          'TM' => 'Turkmenistan',
          'TC' => 'Turks and Caicos Islands',
          'TV' => 'Tuvalu',
          'UG' => 'Uganda',
          'UA' => 'Ukraine',
          'AE' => 'United Arab Emirates',
          'GB' => 'United Kingdom (UK)',
          'US' => 'United States (US)',
          'UM' => 'United States (US) Minor Outlying Islands',
          'UY' => 'Uruguay',
          'UZ' => 'Uzbekistan',
          'VU' => 'Vanuatu',
          'VA' => 'Vatican',
          'VE' => 'Venezuela',
          'VN' => 'Vietnam',
          'VG' => 'Virgin Islands (British)',
          'VI' => 'Virgin Islands (US)',
          'WF' => 'Wallis and Futuna',
          'EH' => 'Western Sahara',
          'WS' => 'Samoa',
          'YE' => 'Yemen',
          'ZM' => 'Zambia',
          'ZW' => 'Zimbabwe',
        ),
        'purifier' => 
        array (
          'default' => 
          array (
            'HTML.Doctype' => 'HTML 4.01 Transitional',
            'HTML.Allowed' => 'div,b,strong,i,em,u,a[href|title|rel|style|target|dofollow|nofollow],ul,ol,li,p[style],br,span[style],img[width|height|alt|src|style|loading],button,ins[style|data-ad-client|data-ad-slot|data-ad-format|data-full-width-responsive],video[src|type|width|height|preload|controls|autoplay|autostart|poster|id|class,muted,loop],meta[name|content|property],link[media|type|rel|href]',
            'URI.AllowedSchemes' => 'http,https,mailto,tel,viber,ftp,data',
            'HTML.AllowedElements' => 
            array (
              0 => 'a',
              1 => 'b',
              2 => 'blockquote',
              3 => 'br',
              4 => 'code',
              5 => 'em',
              6 => 'h1',
              7 => 'h2',
              8 => 'h3',
              9 => 'h4',
              10 => 'h5',
              11 => 'h6',
              12 => 'hr',
              13 => 'i',
              14 => 'img',
              15 => 'li',
              16 => 'ol',
              17 => 'p',
              18 => 'pre',
              19 => 's',
              20 => 'span',
              21 => 'strong',
              22 => 'sub',
              23 => 'sup',
              24 => 'table',
              25 => 'tbody',
              26 => 'td',
              27 => 'dl',
              28 => 'dt',
              29 => 'dd',
              30 => 'th',
              31 => 'thead',
              32 => 'tr',
              33 => 'u',
              34 => 'ul',
              35 => 'pre',
              36 => 'abbr',
              37 => 'kbd',
              38 => 'var',
              39 => 'samp',
              40 => 'hr',
              41 => 'iframe',
              42 => 'figure',
              43 => 'figcaption',
              44 => 'section',
              45 => 'article',
              46 => 'aside',
              47 => 'blockquote',
              48 => 'caption',
              49 => 'del',
              50 => 'div',
              51 => 'button',
              52 => 'ins',
              53 => 'video',
              54 => 'source',
              55 => 'meta',
              56 => 'link',
              57 => 'audio',
            ),
            'HTML.SafeIframe' => 'true',
            'Attr.AllowedFrameTargets' => 
            array (
              0 => '_blank',
            ),
            'CSS.AllowedProperties' => 
            array (
              0 => 'font',
              1 => 'font-size',
              2 => 'font-weight',
              3 => 'font-style',
              4 => 'font-family',
              5 => 'text-decoration',
              6 => 'padding-left',
              7 => 'color',
              8 => 'background-color',
              9 => 'text-align',
              10 => 'max-width',
              11 => 'border',
              12 => 'width',
              13 => 'line-height',
              14 => 'word-spacing',
              15 => 'border-style',
              16 => 'list-style-type',
              17 => 'border-color',
              18 => 'height',
              19 => 'min-width',
              20 => 'min-height',
              21 => 'max-height',
              22 => 'list-style',
              23 => 'margin',
              24 => 'margin-bottom',
              25 => 'margin-left',
              26 => 'margin-right',
              27 => 'margin-top',
              28 => 'padding',
              29 => 'height',
              30 => 'line-height',
              31 => 'border-collapse',
            ),
            'CSS.MaxImgLength' => NULL,
            'AutoFormat.AutoParagraph' => false,
            'AutoFormat.RemoveEmpty' => false,
            'Attr.EnableID' => true,
          ),
          'custom_elements' => 
          array (
            0 => 
            array (
              0 => 'u',
              1 => 'Inline',
              2 => 'Inline',
              3 => 'Common',
            ),
            1 => 
            array (
              0 => 'button',
              1 => 'Inline',
              2 => 'Inline',
              3 => 'Common',
            ),
            2 => 
            array (
              0 => 'ins',
              1 => 'Inline',
              2 => 'Inline',
              3 => 'Common',
            ),
            3 => 
            array (
              0 => 'meta',
              1 => 'Inline',
              2 => 'Empty',
              3 => 'Common',
            ),
            4 => 
            array (
              0 => 'link',
              1 => 'Inline',
              2 => 'Empty',
              3 => 'Common',
            ),
            5 => 
            array (
              0 => 'audio',
              1 => 'Block',
              2 => 'Optional: (source, Flow) | (Flow, source) | Flow',
              3 => 'Common',
            ),
          ),
          'custom_attributes' => 
          array (
            0 => 
            array (
              0 => 'a',
              1 => 'rel',
              2 => 'Text',
            ),
            1 => 
            array (
              0 => 'a',
              1 => 'dofollow',
              2 => 'Bool',
            ),
            2 => 
            array (
              0 => 'a',
              1 => 'nofollow',
              2 => 'Bool',
            ),
            3 => 
            array (
              0 => 'span',
              1 => 'data-period',
              2 => 'Text',
            ),
            4 => 
            array (
              0 => 'span',
              1 => 'data-type',
              2 => 'Text',
            ),
            5 => 
            array (
              0 => 'ins',
              1 => 'data-ad-client',
              2 => 'Text',
            ),
            6 => 
            array (
              0 => 'ins',
              1 => 'data-ad-slot',
              2 => 'Text',
            ),
            7 => 
            array (
              0 => 'ins',
              1 => 'data-ad-format',
              2 => 'Text',
            ),
            8 => 
            array (
              0 => 'ins',
              1 => 'data-ad-full-width-responsive',
              2 => 'Text',
            ),
            9 => 
            array (
              0 => 'img',
              1 => 'data-src',
              2 => 'Text',
            ),
            10 => 
            array (
              0 => 'img',
              1 => 'loading',
              2 => 'Text',
            ),
            11 => 
            array (
              0 => 'video',
              1 => 'autoplay',
              2 => 'Bool',
            ),
            12 => 
            array (
              0 => 'video',
              1 => 'muted',
              2 => 'Bool',
            ),
            13 => 
            array (
              0 => 'video',
              1 => 'loop',
              2 => 'Bool',
            ),
            14 => 
            array (
              0 => 'meta',
              1 => 'name',
              2 => 'Text',
            ),
            15 => 
            array (
              0 => 'meta',
              1 => 'content',
              2 => 'Text',
            ),
            16 => 
            array (
              0 => 'meta',
              1 => 'property',
              2 => 'Text',
            ),
            17 => 
            array (
              0 => 'link',
              1 => 'media',
              2 => 'Text',
            ),
            18 => 
            array (
              0 => 'link',
              1 => 'type',
              2 => 'Text',
            ),
            19 => 
            array (
              0 => 'link',
              1 => 'rel',
              2 => 'Text',
            ),
            20 => 
            array (
              0 => 'link',
              1 => 'href',
              2 => 'Text',
            ),
            21 => 
            array (
              0 => 'link',
              1 => 'color',
              2 => 'Text',
            ),
            22 => 
            array (
              0 => 'audio',
              1 => 'controls',
              2 => 'Bool',
            ),
            23 => 
            array (
              0 => 'div',
              1 => 'data-bs-theme',
              2 => 'Text',
            ),
            24 => 
            array (
              0 => 'div',
              1 => 'data-url',
              2 => 'Text',
            ),
            25 => 
            array (
              0 => 'button',
              1 => 'data-bb-toggle',
              2 => 'Text',
            ),
            26 => 
            array (
              0 => 'button',
              1 => 'data-value',
              2 => 'Text',
            ),
          ),
        ),
        'enable_system_updater' => false,
        'phone_validation_rule' => 'min:8|max:15|regex:/^([0-9\\s\\-\\+\\(\\)]*)$/',
        'zipcode_validation_rule' => 'string|min:4|max:9',
        'disable_verify_csrf_token' => false,
        'enable_less_secure_web' => false,
        'db_strict_mode' => false,
        'db_prefix' => '',
        'enable_ini_set' => true,
        'upgrade_php_require_disabled' => false,
        'enabled_cleanup_database' => false,
        'hide_cleanup_system_menu' => false,
        'hide_activated_license_info' => false,
        'google_fonts_url' => 'https://fonts.bunny.net',
        'google_fonts_enabled' => true,
        'google_fonts_enabled_cache' => true,
        'using_uuids_for_id' => false,
        'using_ulids_for_id' => false,
        'type_id' => 'BIGINT',
        'csv_import_input_encoding' => 'UTF-8',
        'google_fonts_key' => NULL,
        'demo_mode_enabled' => false,
        'enable_email_configuration_from_admin_panel' => true,
        'session_cookie' => 'botble_session',
        'allowed_iframe_urls' => '',
        'iframe_regex' => '',
        'static_ip' => NULL,
        'license_storage_method' => 'file',
        'plugin_namespaces' => 
        array (
          'base' => 'core/base',
          'setting' => 'core/setting',
          'icon' => 'core/icon',
          '' => 
          array (
            '' => 
            array (
              '' => 'packages/data-synchronize',
            ),
          ),
          'get-started' => 'packages/get-started',
          'installer' => 'packages/installer',
          'menu' => 'packages/menu',
          'optimize' => 'packages/optimize',
          'page' => 'packages/page',
          'table' => 'core/table',
          'acl' => 'core/acl',
          'dashboard' => 'core/dashboard',
          'media' => 'core/media',
          'js-validation' => 'core/js-validation',
          'chart' => 'core/chart',
          'plugin-management' => 'packages/plugin-management',
          'revision' => 'packages/revision',
          'seo-helper' => 'packages/seo-helper',
          'shortcode' => 'packages/shortcode',
          'slug' => 'packages/slug',
          'theme' => 'packages/theme',
          'widget' => 'packages/widget',
          'language' => 'plugins/language',
          'language-advanced' => 'plugins/language-advanced',
          'ads' => 'plugins/ads',
          'ai-writer' => 'plugins/ai-writer',
          'analytics' => 'plugins/analytics',
          'announcement' => 'plugins/announcement',
          'audit-log' => 'plugins/audit-log',
          'backup' => 'plugins/backup',
          'blog' => 'plugins/blog',
          'captcha' => 'plugins/captcha',
          'contact' => 'plugins/contact',
          'cookie-consent' => 'plugins/cookie-consent',
          'fob-comment' => 'plugins/fob-comment',
          'gallery' => 'plugins/gallery',
          'member' => 'plugins/member',
          'newsletter' => 'plugins/newsletter',
          'note' => 'plugins/note',
          'request-log' => 'plugins/request-log',
          'rss-feed' => 'plugins/rss-feed',
          'social-login' => 'plugins/social-login',
          'translation' => 'plugins/translation',
          'live-stream' => 'plugins/live-stream',
          'community' => 'plugins/community',
          'sitemap' => 'packages/sitemap',
        ),
      ),
      'assets' => 
      array (
        'offline' => true,
        'enable_version' => true,
        'version' => NULL,
        'scripts' => 
        array (
          0 => 'core-ui',
          1 => 'excanvas',
          2 => 'ie8-fix',
          3 => 'modernizr',
          4 => 'select2',
          5 => 'datepicker',
          6 => 'cookie',
          7 => 'core',
          8 => 'app',
          9 => 'toastr',
          10 => 'custom-scrollbar',
          11 => 'stickytableheaders',
          12 => 'jquery-waypoints',
          13 => 'spectrum',
          14 => 'fancybox',
          15 => 'fslightbox',
        ),
        'styles' => 
        array (
          0 => 'fontawesome',
          1 => 'select2',
          2 => 'toastr',
          3 => 'custom-scrollbar',
          4 => 'datepicker',
          5 => 'spectrum',
          6 => 'fancybox',
        ),
        'resources' => 
        array (
          'scripts' => 
          array (
            'core-ui' => 
            array (
              'use_cdn' => false,
              'location' => 'footer',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/js/core-ui.js',
              ),
            ),
            'core' => 
            array (
              'use_cdn' => false,
              'location' => 'footer',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/js/core.js',
              ),
            ),
            'app' => 
            array (
              'use_cdn' => false,
              'location' => 'header',
              'src' => 
              array (
                'local' => 
                array (
                  0 => '/vendor/core/core/base/libraries/jquery.min.js',
                  1 => '/vendor/core/core/base/js/app.js',
                ),
              ),
            ),
            'vue' => 
            array (
              'use_cdn' => false,
              'location' => 'header',
              'src' => 
              array (
                'local' => 
                array (
                  0 => '/vendor/core/core/base/libraries/vue.global.min.js',
                ),
              ),
            ),
            'vue-app' => 
            array (
              'use_cdn' => false,
              'location' => 'header',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/js/vue-app.js',
              ),
            ),
            'bootstrap' => 
            array (
              'use_cdn' => false,
              'location' => 'header',
              'src' => 
              array (
                'local' => 
                array (
                  0 => '/vendor/core/core/base/libraries/bootstrap.bundle.min.js',
                ),
              ),
            ),
            'modernizr' => 
            array (
              'use_cdn' => true,
              'location' => 'footer',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/modernizr/modernizr.min.js',
                'cdn' => '//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js',
              ),
            ),
            'excanvas' => 
            array (
              'use_cdn' => false,
              'location' => 'footer',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/excanvas.min.js',
              ),
            ),
            'ie8-fix' => 
            array (
              'use_cdn' => false,
              'location' => 'footer',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/ie8.fix.min.js',
              ),
            ),
            'counterup' => 
            array (
              'use_cdn' => false,
              'location' => 'footer',
              'src' => 
              array (
                'local' => 
                array (
                  0 => '/vendor/core/core/base/libraries/counterup/jquery.counterup.min.js',
                ),
              ),
            ),
            'blockui' => 
            array (
              'use_cdn' => false,
              'location' => 'footer',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/jquery.blockui.min.js',
              ),
            ),
            'jquery-ui' => 
            array (
              'use_cdn' => true,
              'location' => 'footer',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/jquery-ui/jquery-ui.min.js',
                'cdn' => '//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js',
              ),
            ),
            'cookie' => 
            array (
              'use_cdn' => true,
              'location' => 'footer',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/jquery-cookie/jquery.cookie.js',
                'cdn' => '//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js',
              ),
            ),
            'dropzone' => 
            array (
              'use_cdn' => false,
              'location' => 'footer',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/dropzone/dropzone.js',
              ),
            ),
            'jqueryTree' => 
            array (
              'use_cdn' => false,
              'location' => 'footer',
              'include_style' => true,
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/jquery-tree/jquery.tree.min.js',
              ),
            ),
            'jqueryTreeView' => 
            array (
              'use_cdn' => false,
              'location' => 'footer',
              'include_style' => true,
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/jquery-treeview/jquery.treeview.min.js',
              ),
            ),
            'bootstrap-editable' => 
            array (
              'use_cdn' => true,
              'location' => 'footer',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/bootstrap3-editable/js/bootstrap-editable.min.js',
                'cdn' => '//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/js/bootstrap-editable.min.js',
              ),
            ),
            'toastr' => 
            array (
              'use_cdn' => true,
              'location' => 'footer',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/toastr/toastr.min.js',
                'cdn' => '//cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.2/toastr.min.js',
              ),
            ),
            'fancybox' => 
            array (
              'use_cdn' => false,
              'location' => 'footer',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/fancybox/jquery.fancybox.min.js',
                'cdn' => '//fastly.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js',
              ),
            ),
            'fslightbox' => 
            array (
              'use_cdn' => false,
              'location' => 'footer',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/fslightbox.js',
                'cdn' => '//fastly.jsdelivr.net/npm/fslightbox@3.4.1/index.min.js',
              ),
            ),
            'datatables' => 
            array (
              'use_cdn' => false,
              'location' => 'footer',
              'src' => 
              array (
                'local' => 
                array (
                  0 => '/vendor/core/core/base/libraries/datatables/media/js/jquery.dataTables.min.js',
                  1 => '/vendor/core/core/base/libraries/datatables/media/js/dataTables.bootstrap.min.js',
                  2 => '/vendor/core/core/base/libraries/datatables/extensions/Buttons/js/dataTables.buttons.min.js',
                  3 => '/vendor/core/core/base/libraries/datatables/extensions/Buttons/js/buttons.bootstrap.min.js',
                  4 => '/vendor/core/core/base/libraries/datatables/extensions/Responsive/js/dataTables.responsive.min.js',
                ),
              ),
            ),
            'raphael' => 
            array (
              'use_cdn' => false,
              'location' => 'footer',
              'src' => 
              array (
                'local' => 
                array (
                  0 => '/vendor/core/core/base/libraries/raphael-min.js',
                ),
              ),
            ),
            'morris' => 
            array (
              'use_cdn' => true,
              'location' => 'footer',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/morris/morris.min.js',
                'cdn' => '//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js',
              ),
            ),
            'select2' => 
            array (
              'use_cdn' => true,
              'location' => 'footer',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/select2/js/select2.min.js',
                'cdn' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
              ),
            ),
            'cropper' => 
            array (
              'use_cdn' => true,
              'location' => 'footer',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/cropper/cropper.min.js',
                'cdn' => '//cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.1/cropper.min.js',
              ),
            ),
            'datepicker' => 
            array (
              'use_cdn' => false,
              'location' => 'footer',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/flatpickr/flatpickr.min.js',
                'cdn' => '//fastly.jsdelivr.net/npm/flatpickr',
              ),
            ),
            'sortable' => 
            array (
              'use_cdn' => false,
              'location' => 'footer',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/sortable/sortable.min.js',
              ),
            ),
            'jquery-nestable' => 
            array (
              'use_cdn' => false,
              'location' => 'footer',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/jquery-nestable/jquery.nestable.min.js',
              ),
            ),
            'custom-scrollbar' => 
            array (
              'use_cdn' => false,
              'location' => 'footer',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/mcustom-scrollbar/jquery.mCustomScrollbar.js',
              ),
            ),
            'stickytableheaders' => 
            array (
              'use_cdn' => false,
              'location' => 'footer',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/stickytableheaders/jquery.stickytableheaders.js',
              ),
            ),
            'are-you-sure' => 
            array (
              'use_cdn' => false,
              'location' => 'footer',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/jquery.are-you-sure/jquery.are-you-sure.js',
              ),
            ),
            'moment' => 
            array (
              'use_cdn' => true,
              'location' => 'footer',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/moment-with-locales.min.js',
                'cdn' => '//cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.1/moment-with-locales.min.js',
              ),
            ),
            'datetimepicker' => 
            array (
              'use_cdn' => true,
              'location' => 'footer',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js',
                'cdn' => '//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js',
              ),
            ),
            'jquery-waypoints' => 
            array (
              'use_cdn' => false,
              'location' => 'footer',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/jquery-waypoints/jquery.waypoints.min.js',
              ),
            ),
            'colorpicker' => 
            array (
              'use_cdn' => false,
              'location' => 'footer',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js',
              ),
            ),
            'timepicker' => 
            array (
              'use_cdn' => false,
              'location' => 'footer',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/bootstrap-timepicker/js/bootstrap-timepicker.min.js',
              ),
            ),
            'spectrum' => 
            array (
              'use_cdn' => false,
              'location' => 'footer',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/spectrum/spectrum.js',
              ),
            ),
            'input-mask' => 
            array (
              'use_cdn' => false,
              'location' => 'footer',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/jquery-inputmask/jquery.inputmask.bundle.min.js',
              ),
            ),
            'form-validation' => 
            array (
              'use_cdn' => false,
              'location' => 'footer',
              'src' => 
              array (
                'local' => '/vendor/core/core/js-validation/js/js-validation.js',
              ),
            ),
            'apexchart' => 
            array (
              'use_cdn' => false,
              'location' => 'footer',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/apexchart/apexcharts.min.js',
              ),
            ),
            'coloris' => 
            array (
              'use_cdn' => true,
              'location' => 'footer',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/coloris/coloris.min.js',
                'cdn' => '//fastly.jsdelivr.net/gh/mdbassit/Coloris@latest/dist/coloris.min.js',
              ),
            ),
            'tagify' => 
            array (
              'use_cdn' => true,
              'location' => 'footer',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/tagify/tagify.js',
                'cdn' => '//cdnjs.cloudflare.com/ajax/libs/tagify/4.16.4/tagify.min.js',
              ),
            ),
          ),
          'styles' => 
          array (
            'core' => 
            array (
              'use_cdn' => false,
              'location' => 'header',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/css/core.css',
              ),
            ),
            'fontawesome' => 
            array (
              'use_cdn' => true,
              'location' => 'header',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/font-awesome/css/fontawesome.min.css',
                'cdn' => '//use.fontawesome.com/releases/v6.1.1/css/all.css',
              ),
            ),
            'dropzone' => 
            array (
              'use_cdn' => false,
              'location' => 'footer',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/dropzone/dropzone.css',
              ),
            ),
            'jqueryTree' => 
            array (
              'use_cdn' => false,
              'location' => 'footer',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/jquery-tree/jquery.tree.min.css',
              ),
            ),
            'jqueryTreeView' => 
            array (
              'use_cdn' => false,
              'location' => 'footer',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/jquery-treeview/jquery.treeview.min.css',
              ),
            ),
            'jquery-ui' => 
            array (
              'use_cdn' => true,
              'location' => 'footer',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/jquery-ui/jquery-ui.min.css',
                'cdn' => '//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.theme.css',
              ),
            ),
            'toastr' => 
            array (
              'use_cdn' => true,
              'location' => 'header',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/toastr/toastr.min.css',
                'cdn' => '//cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.2/toastr.min.css',
              ),
            ),
            'kendo' => 
            array (
              'use_cdn' => false,
              'location' => 'footer',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/kendo/kendo.min.css',
              ),
            ),
            'datatables' => 
            array (
              'use_cdn' => false,
              'location' => 'header',
              'src' => 
              array (
                'local' => 
                array (
                  0 => '/vendor/core/core/base/libraries/datatables/media/css/dataTables.bootstrap.min.css',
                  1 => '/vendor/core/core/base/libraries/datatables/extensions/Buttons/css/buttons.bootstrap.min.css',
                  2 => '/vendor/core/core/base/libraries/datatables/extensions/Responsive/css/responsive.bootstrap.min.css',
                ),
              ),
            ),
            'bootstrap-editable' => 
            array (
              'use_cdn' => true,
              'location' => 'footer',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/bootstrap3-editable/css/bootstrap-editable.css',
                'cdn' => '//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/css/bootstrap-editable.css',
              ),
            ),
            'morris' => 
            array (
              'use_cdn' => true,
              'location' => 'header',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/morris/morris.css',
                'cdn' => '//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css',
              ),
            ),
            'cropper' => 
            array (
              'use_cdn' => false,
              'location' => 'header',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/cropper/cropper.min.css',
                'cdn' => '//cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.1/cropper.min.css',
              ),
            ),
            'datepicker' => 
            array (
              'use_cdn' => false,
              'location' => 'header',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/flatpickr/flatpickr.min.css',
                'cdn' => '//fastly.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css',
              ),
            ),
            'jquery-nestable' => 
            array (
              'use_cdn' => false,
              'location' => 'header',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/jquery-nestable/jquery.nestable.min.css',
              ),
            ),
            'select2' => 
            array (
              'use_cdn' => true,
              'location' => 'header',
              'src' => 
              array (
                'local' => 
                array (
                  0 => '/vendor/core/core/base/libraries/select2/css/select2.min.css',
                  1 => '/vendor/core/core/base/css/libraries/select2.css',
                ),
                'cdn' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css',
              ),
            ),
            'fancybox' => 
            array (
              'use_cdn' => false,
              'location' => 'header',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/fancybox/jquery.fancybox.min.css',
                'cdn' => '//fastly.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css',
              ),
            ),
            'custom-scrollbar' => 
            array (
              'use_cdn' => false,
              'location' => 'header',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/mcustom-scrollbar/jquery.mCustomScrollbar.css',
              ),
            ),
            'datetimepicker' => 
            array (
              'use_cdn' => true,
              'location' => 'header',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css',
                'cdn' => '//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css',
              ),
            ),
            'colorpicker' => 
            array (
              'use_cdn' => false,
              'location' => 'header',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css',
              ),
            ),
            'timepicker' => 
            array (
              'use_cdn' => false,
              'location' => 'header',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/bootstrap-timepicker/css/bootstrap-timepicker.min.css',
              ),
            ),
            'spectrum' => 
            array (
              'use_cdn' => false,
              'location' => 'header',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/spectrum/spectrum.css',
              ),
            ),
            'apexchart' => 
            array (
              'use_cdn' => false,
              'location' => 'header',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/apexchart/apexcharts.css',
              ),
            ),
            'coloris' => 
            array (
              'use_cdn' => true,
              'location' => 'header',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/coloris/coloris.min.css',
                'cdn' => '//fastly.jsdelivr.net/gh/mdbassit/Coloris@latest/dist/coloris.min.css',
              ),
            ),
            'tagify' => 
            array (
              'use_cdn' => true,
              'location' => 'header',
              'src' => 
              array (
                'local' => '/vendor/core/core/base/libraries/tagify/tagify.css',
                'cdn' => '//cdnjs.cloudflare.com/ajax/libs/tagify/4.16.4/tagify.css',
              ),
            ),
          ),
        ),
      ),
      'permissions' => 
      array (
        0 => 
        array (
          'name' => 'System',
          'flag' => 'core.system',
        ),
        1 => 
        array (
          'name' => 'CMS',
          'flag' => 'core.cms',
        ),
        2 => 
        array (
          'name' => 'Manage license',
          'flag' => 'core.manage.license',
          'parent_flag' => 'core.system',
        ),
        3 => 
        array (
          'name' => 'Cronjob',
          'flag' => 'systems.cronjob',
          'parent_flag' => 'core.system',
        ),
        4 => 
        array (
          'name' => 'Tools',
          'flag' => 'core.tools',
        ),
        5 => 
        array (
          'name' => 'Import/Export Data',
          'flag' => 'tools.data-synchronize',
          'parent_flag' => 'core.tools',
        ),
      ),
    ),
    'setting' => 
    array (
      'general' => 
      array (
        'driver' => 'database',
        'enable_email_smtp_settings' => true,
      ),
      'email' => 
      array (
        'name' => 'core/setting::setting.email.base_template',
        'description' => 'core/setting::setting.email.base_template_description',
        'templates' => 
        array (
          'header' => 
          array (
            'title' => 'core/setting::setting.email.template_header',
            'description' => 'core/setting::setting.email.template_header_description',
          ),
          'footer' => 
          array (
            'title' => 'core/setting::setting.email.template_footer',
            'description' => 'core/setting::setting.email.template_footer_description',
          ),
        ),
      ),
      'permissions' => 
      array (
        0 => 
        array (
          'name' => 'Settings',
          'flag' => 'settings.index',
        ),
        1 => 
        array (
          'name' => 'Common',
          'flag' => 'settings.common',
          'parent_flag' => 'settings.index',
        ),
        2 => 
        array (
          'name' => 'General',
          'flag' => 'settings.options',
          'parent_flag' => 'settings.common',
        ),
        3 => 
        array (
          'name' => 'Email',
          'flag' => 'settings.email',
          'parent_flag' => 'settings.common',
        ),
        4 => 
        array (
          'name' => 'Media',
          'flag' => 'settings.media',
          'parent_flag' => 'settings.common',
        ),
        5 => 
        array (
          'name' => 'Admin Appearance',
          'flag' => 'settings.admin-appearance',
          'parent_flag' => 'settings.common',
        ),
        6 => 
        array (
          'name' => 'Cache',
          'flag' => 'settings.cache',
          'parent_flag' => 'settings.common',
        ),
        7 => 
        array (
          'name' => 'Datatables',
          'flag' => 'settings.datatables',
          'parent_flag' => 'settings.common',
        ),
        8 => 
        array (
          'name' => 'Email Rules',
          'flag' => 'settings.email.rules',
          'parent_flag' => 'settings.common',
        ),
        9 => 
        array (
          'name' => 'Phone Number',
          'flag' => 'settings.phone-number',
          'parent_flag' => 'settings.common',
        ),
        10 => 
        array (
          'name' => 'Others',
          'flag' => 'settings.others',
          'parent_flag' => 'settings.index',
        ),
      ),
    ),
    'icon' => 
    array (
      'icon' => 
      array (
        'className' => 'icon',
        'attributes' => 
        array (
        ),
      ),
    ),
    'acl' => 
    array (
      'general' => 
      array (
        'activations' => 
        array (
          'expires' => 259200,
          'lottery' => 
          array (
            0 => 2,
            1 => 100,
          ),
        ),
        'backgrounds' => 
        array (
          0 => 'vendor/core/core/acl/images/backgrounds/1.jpg',
          1 => 'vendor/core/core/acl/images/backgrounds/2.jpg',
          2 => 'vendor/core/core/acl/images/backgrounds/3.jpg',
          3 => 'vendor/core/core/acl/images/backgrounds/4.jpg',
          4 => 'vendor/core/core/acl/images/backgrounds/5.jpg',
          5 => 'vendor/core/core/acl/images/backgrounds/6.jpg',
          6 => 'vendor/core/core/acl/images/backgrounds/7.jpg',
          7 => 'vendor/core/core/acl/images/backgrounds/8.jpg',
          8 => 'vendor/core/core/acl/images/backgrounds/9.jpg',
          9 => 'vendor/core/core/acl/images/backgrounds/10.jpg',
        ),
      ),
      'email' => 
      array (
        'name' => 'core/acl::auth.settings.email.title',
        'description' => 'core/acl::auth.settings.email.description',
        'templates' => 
        array (
          'password-reminder' => 
          array (
            'title' => 'core/acl::auth.settings.email.templates.password_reminder.title',
            'description' => 'core/acl::auth.settings.email.templates.password_reminder.description',
            'subject' => 'core/acl::auth.settings.email.templates.password_reminder.subject',
            'can_off' => false,
            'variables' => 
            array (
              'reset_link' => 'core/acl::auth.settings.email.templates.password_reminder.reset_link',
            ),
          ),
        ),
      ),
      'permissions' => 
      array (
        0 => 
        array (
          'name' => 'Users',
          'flag' => 'users.index',
          'parent_flag' => 'core.system',
        ),
        1 => 
        array (
          'name' => 'Create',
          'flag' => 'users.create',
          'parent_flag' => 'users.index',
        ),
        2 => 
        array (
          'name' => 'Edit',
          'flag' => 'users.edit',
          'parent_flag' => 'users.index',
        ),
        3 => 
        array (
          'name' => 'Delete',
          'flag' => 'users.destroy',
          'parent_flag' => 'users.index',
        ),
        4 => 
        array (
          'name' => 'Roles',
          'flag' => 'roles.index',
          'parent_flag' => 'core.system',
        ),
        5 => 
        array (
          'name' => 'Create',
          'flag' => 'roles.create',
          'parent_flag' => 'roles.index',
        ),
        6 => 
        array (
          'name' => 'Edit',
          'flag' => 'roles.edit',
          'parent_flag' => 'roles.index',
        ),
        7 => 
        array (
          'name' => 'Delete',
          'flag' => 'roles.destroy',
          'parent_flag' => 'roles.index',
        ),
      ),
    ),
    'media' => 
    array (
      'media' => 
      array (
        'sizes' => 
        array (
          'thumb' => '150x150',
        ),
        'permissions' => 
        array (
          0 => 'folders.create',
          1 => 'folders.edit',
          2 => 'folders.trash',
          3 => 'folders.destroy',
          4 => 'files.create',
          5 => 'files.edit',
          6 => 'files.trash',
          7 => 'files.destroy',
          8 => 'files.favorite',
          9 => 'folders.favorite',
        ),
        'libraries' => 
        array (
          'stylesheets' => 
          array (
            0 => 'vendor/core/core/media/libraries/jquery-context-menu/jquery.contextMenu.min.css',
            1 => 'vendor/core/core/media/css/media.css',
          ),
          'javascript' => 
          array (
            0 => 'vendor/core/core/media/libraries/lodash/lodash.min.js',
            1 => 'vendor/core/core/base/libraries/dropzone/dropzone.js',
            2 => 'vendor/core/core/media/libraries/jquery-context-menu/jquery.ui.position.min.js',
            3 => 'vendor/core/core/media/libraries/jquery-context-menu/jquery.contextMenu.min.js',
            4 => 'vendor/core/core/media/js/media.js',
          ),
        ),
        'allowed_mime_types' => 'jpg,jpeg,png,gif,txt,docx,zip,mp3,bmp,csv,xls,xlsx,ppt,pptx,pdf,mp4,m4v,doc,mpga,wav,webp,webm,mov,jfif,avif,rar,x-rar',
        'allowed_admin_to_upload_any_file_types' => false,
        'mime_types' => 
        array (
          'image' => 
          array (
            0 => 'image/png',
            1 => 'image/jpeg',
            2 => 'image/gif',
            3 => 'image/bmp',
            4 => 'image/svg+xml',
            5 => 'image/webp',
            6 => 'image/avif',
          ),
          'video' => 
          array (
            0 => 'video/mp4',
            1 => 'video/m4v',
            2 => 'video/mov',
            3 => 'video/quicktime',
          ),
          'document' => 
          array (
            0 => 'application/pdf',
            1 => 'application/vnd.ms-excel',
            2 => 'application/excel',
            3 => 'application/x-excel',
            4 => 'application/x-msexcel',
            5 => 'text/plain',
            6 => 'application/msword',
            7 => 'text/csv',
            8 => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            9 => 'application/vnd.ms-powerpoint',
            10 => 'application/vnd.openxmlformats-officedocument.presentationml.presentation',
          ),
          'zip' => 
          array (
            0 => 'application/zip',
            1 => 'application/x-zip-compressed',
            2 => 'application/x-compressed',
            3 => 'multipart/x-zip',
            4 => 'multipart/x-rar',
          ),
          'audio' => 
          array (
            0 => 'audio/mpeg',
            1 => 'audio/mp3',
            2 => 'audio/wav',
          ),
        ),
        'default_image' => '/vendor/core/core/base/images/placeholder.png',
        'sidebar_display' => 'horizontal',
        'watermark' => 
        array (
          'enabled' => 0,
          'source' => NULL,
          'size' => 10,
          'opacity' => 70,
          'position' => 'bottom-right',
          'x' => 10,
          'y' => 10,
        ),
        'custom_s3_path' => '',
        'chunk' => 
        array (
          'enabled' => false,
          'chunk_size' => 1048576,
          'max_file_size' => 1048576,
          'storage' => 
          array (
            'chunks' => 'chunks',
            'disk' => 'local',
          ),
          'clear' => 
          array (
            'timestamp' => '-3 HOURS',
            'schedule' => 
            array (
              'enabled' => true,
              'cron' => '25 * * * *',
            ),
          ),
          'chunk' => 
          array (
            'name' => 
            array (
              'use' => 
              array (
                'session' => true,
                'browser' => false,
              ),
            ),
          ),
        ),
        'preview' => 
        array (
          'document' => 
          array (
            'enabled' => true,
            'providers' => 
            array (
              'google' => 'https://docs.google.com/gview?embedded=true&url={url}',
              'microsoft' => 'https://view.officeapps.live.com/op/view.aspx?src={url}',
            ),
            'default' => 'microsoft',
            'type' => 'iframe',
            'mime_types' => 
            array (
              0 => 'application/pdf',
              1 => 'application/vnd.ms-excel',
              2 => 'application/excel',
              3 => 'application/x-excel',
              4 => 'application/x-msexcel',
              5 => 'application/msword',
              6 => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
              7 => 'application/vnd.ms-powerpoint',
              8 => 'application/vnd.openxmlformats-officedocument.presentationml.presentation',
              9 => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            ),
          ),
        ),
        'default_upload_folder' => NULL,
        'default_upload_url' => NULL,
        'generate_thumbnails_enabled' => true,
        'generate_thumbnails_chunk_limit' => 50,
        'folder_colors' => 
        array (
          0 => '#3498db',
          1 => '#2ecc71',
          2 => '#e74c3c',
          3 => '#f39c12',
          4 => '#9b59b6',
          5 => '#1abc9c',
          6 => '#34495e',
          7 => '#e67e22',
          8 => '#27ae60',
          9 => '#c0392b',
        ),
        'use_storage_symlink' => false,
      ),
      'permissions' => 
      array (
        0 => 
        array (
          'name' => 'Media',
          'flag' => 'media.index',
          'parent_flag' => 'core.cms',
        ),
        1 => 
        array (
          'name' => 'File',
          'flag' => 'files.index',
          'parent_flag' => 'media.index',
        ),
        2 => 
        array (
          'name' => 'Create',
          'flag' => 'files.create',
          'parent_flag' => 'files.index',
        ),
        3 => 
        array (
          'name' => 'Edit',
          'flag' => 'files.edit',
          'parent_flag' => 'files.index',
        ),
        4 => 
        array (
          'name' => 'Trash',
          'flag' => 'files.trash',
          'parent_flag' => 'files.index',
        ),
        5 => 
        array (
          'name' => 'Delete',
          'flag' => 'files.destroy',
          'parent_flag' => 'files.index',
        ),
        6 => 
        array (
          'name' => 'Folder',
          'flag' => 'folders.index',
          'parent_flag' => 'media.index',
        ),
        7 => 
        array (
          'name' => 'Create',
          'flag' => 'folders.create',
          'parent_flag' => 'folders.index',
        ),
        8 => 
        array (
          'name' => 'Edit',
          'flag' => 'folders.edit',
          'parent_flag' => 'folders.index',
        ),
        9 => 
        array (
          'name' => 'Trash',
          'flag' => 'folders.trash',
          'parent_flag' => 'folders.index',
        ),
        10 => 
        array (
          'name' => 'Delete',
          'flag' => 'folders.destroy',
          'parent_flag' => 'folders.index',
        ),
      ),
    ),
    'js-validation' => 
    array (
      'js-validation' => 
      array (
        'view' => 'core/js-validation::bootstrap',
        'form_selector' => 'form',
        'focus_on_error' => false,
        'duration_animate' => 1000,
        'disable_remote_validation' => false,
        'remote_validation_field' => '_js_validation',
        'escape' => false,
        'ignore' => '',
      ),
    ),
  ),
  'debugbar' => 
  array (
    'enabled' => false,
    'capture_ajax' => false,
    'remote_sites_path' => '',
  ),
  'sanctum' => 
  array (
    'stateful' => 
    array (
      0 => 'localhost',
      1 => 'localhost:3000',
      2 => '127.0.0.1',
      3 => '127.0.0.1:8000',
      4 => '::1',
      5 => 'acm.2.29.0.164.nip.io',
    ),
    'guard' => 
    array (
      0 => 'web',
    ),
    'expiration' => NULL,
    'token_prefix' => '',
    'middleware' => 
    array (
      'authenticate_session' => 'Laravel\\Sanctum\\Http\\Middleware\\AuthenticateSession',
      'encrypt_cookies' => 'Illuminate\\Cookie\\Middleware\\EncryptCookies',
      'validate_csrf_token' => 'Illuminate\\Foundation\\Http\\Middleware\\ValidateCsrfToken',
    ),
  ),
  'excel' => 
  array (
    'exports' => 
    array (
      'chunk_size' => 1000,
      'pre_calculate_formulas' => false,
      'strict_null_comparison' => false,
      'csv' => 
      array (
        'delimiter' => ',',
        'enclosure' => '"',
        'line_ending' => '
',
        'use_bom' => true,
        'include_separator_line' => false,
        'excel_compatibility' => false,
        'output_encoding' => '',
        'test_auto_detect' => true,
      ),
      'properties' => 
      array (
        'creator' => '',
        'lastModifiedBy' => '',
        'title' => '',
        'description' => '',
        'subject' => '',
        'keywords' => '',
        'category' => '',
        'manager' => '',
        'company' => '',
      ),
    ),
    'imports' => 
    array (
      'read_only' => true,
      'ignore_empty' => true,
      'heading_row' => 
      array (
        'formatter' => 'slug',
      ),
      'csv' => 
      array (
        'delimiter' => NULL,
        'enclosure' => '"',
        'escape_character' => '\\',
        'contiguous' => false,
        'input_encoding' => 'UTF-8',
      ),
      'properties' => 
      array (
        'creator' => '',
        'lastModifiedBy' => '',
        'title' => '',
        'description' => '',
        'subject' => '',
        'keywords' => '',
        'category' => '',
        'manager' => '',
        'company' => '',
      ),
      'cells' => 
      array (
        'middleware' => 
        array (
        ),
      ),
    ),
    'extension_detector' => 
    array (
      'xlsx' => 'Xlsx',
      'xlsm' => 'Xlsx',
      'xltx' => 'Xlsx',
      'xltm' => 'Xlsx',
      'xls' => 'Xls',
      'xlt' => 'Xls',
      'ods' => 'Ods',
      'ots' => 'Ods',
      'slk' => 'Slk',
      'xml' => 'Xml',
      'gnumeric' => 'Gnumeric',
      'htm' => 'Html',
      'html' => 'Html',
      'csv' => 'Csv',
      'tsv' => 'Csv',
      'pdf' => 'Dompdf',
    ),
    'value_binder' => 
    array (
      'default' => 'Maatwebsite\\Excel\\DefaultValueBinder',
    ),
    'cache' => 
    array (
      'driver' => 'memory',
      'batch' => 
      array (
        'memory_limit' => 60000,
      ),
      'illuminate' => 
      array (
        'store' => NULL,
      ),
      'default_ttl' => 10800,
    ),
    'transactions' => 
    array (
      'handler' => 'db',
      'db' => 
      array (
        'connection' => NULL,
      ),
    ),
    'temporary_files' => 
    array (
      'local_path' => '/var/www/html/storage/framework/cache/laravel-excel',
      'local_permissions' => 
      array (
      ),
      'remote_disk' => NULL,
      'remote_prefix' => NULL,
      'force_resync_remote' => NULL,
    ),
  ),
  'purifier' => 
  array (
    'encoding' => 'UTF-8',
    'finalize' => true,
    'ignoreNonStrings' => false,
    'cachePath' => '/var/www/html/storage/app/purifier',
    'cacheFileMode' => 493,
    'settings' => 
    array (
      'default' => 
      array (
        'HTML.Doctype' => 'HTML 4.01 Transitional',
        'HTML.Allowed' => 'div,b,strong,i,em,u,a[href|title|rel|style|target|dofollow|nofollow],ul,ol,li,p[style],br,span[style],img[width|height|alt|src|style|loading],button,ins[style|data-ad-client|data-ad-slot|data-ad-format|data-full-width-responsive],video[src|type|width|height|preload|controls|autoplay|autostart|poster|id|class,muted,loop],meta[name|content|property],link[media|type|rel|href]',
        'URI.AllowedSchemes' => 'http,https,mailto,tel,viber,ftp,data',
        'HTML.AllowedElements' => 
        array (
          0 => 'a',
          1 => 'b',
          2 => 'blockquote',
          3 => 'br',
          4 => 'code',
          5 => 'em',
          6 => 'h1',
          7 => 'h2',
          8 => 'h3',
          9 => 'h4',
          10 => 'h5',
          11 => 'h6',
          12 => 'hr',
          13 => 'i',
          14 => 'img',
          15 => 'li',
          16 => 'ol',
          17 => 'p',
          18 => 'pre',
          19 => 's',
          20 => 'span',
          21 => 'strong',
          22 => 'sub',
          23 => 'sup',
          24 => 'table',
          25 => 'tbody',
          26 => 'td',
          27 => 'dl',
          28 => 'dt',
          29 => 'dd',
          30 => 'th',
          31 => 'thead',
          32 => 'tr',
          33 => 'u',
          34 => 'ul',
          35 => 'pre',
          36 => 'abbr',
          37 => 'kbd',
          38 => 'var',
          39 => 'samp',
          40 => 'hr',
          41 => 'iframe',
          42 => 'figure',
          43 => 'figcaption',
          44 => 'section',
          45 => 'article',
          46 => 'aside',
          47 => 'blockquote',
          48 => 'caption',
          49 => 'del',
          50 => 'div',
          51 => 'button',
          52 => 'ins',
          53 => 'video',
          54 => 'source',
          55 => 'meta',
          56 => 'link',
          57 => 'audio',
        ),
        'HTML.SafeIframe' => 'true',
        'Attr.AllowedFrameTargets' => 
        array (
          0 => '_blank',
        ),
        'CSS.AllowedProperties' => 
        array (
          0 => 'font',
          1 => 'font-size',
          2 => 'font-weight',
          3 => 'font-style',
          4 => 'font-family',
          5 => 'text-decoration',
          6 => 'padding-left',
          7 => 'color',
          8 => 'background-color',
          9 => 'text-align',
          10 => 'max-width',
          11 => 'border',
          12 => 'width',
          13 => 'line-height',
          14 => 'word-spacing',
          15 => 'border-style',
          16 => 'list-style-type',
          17 => 'border-color',
          18 => 'height',
          19 => 'min-width',
          20 => 'min-height',
          21 => 'max-height',
          22 => 'list-style',
          23 => 'margin',
          24 => 'margin-bottom',
          25 => 'margin-left',
          26 => 'margin-right',
          27 => 'margin-top',
          28 => 'padding',
          29 => 'height',
          30 => 'line-height',
          31 => 'border-collapse',
        ),
        'CSS.MaxImgLength' => NULL,
        'AutoFormat.AutoParagraph' => false,
        'AutoFormat.RemoveEmpty' => false,
        'Attr.EnableID' => true,
        'URI.SafeIframeRegexp' => '%^(http://|https://|//)(www.youtube.com/embed/|player.vimeo.com/video/|maps.google.com/maps|www.google.com/maps|docs.google.com/|drive.google.com/|view.officeapps.live.com/op/embed.aspx|onedrive.live.com/embed|open.spotify.com/embed|www.googletagmanager.com|www.facebook.com/plugins|tiktok.com/embed|acm.2.29.0.164.nip.io)%',
      ),
      'test' => 
      array (
        'Attr.EnableID' => 'true',
      ),
      'youtube' => 
      array (
        'HTML.SafeIframe' => 'true',
        'URI.SafeIframeRegexp' => '%^(http://|https://|//)(www.youtube.com/embed/|player.vimeo.com/video/)%',
      ),
      'custom_definition' => 
      array (
        'id' => 'html5-definitions',
        'rev' => 1,
        'debug' => false,
        'elements' => 
        array (
          0 => 
          array (
            0 => 'section',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          1 => 
          array (
            0 => 'nav',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          2 => 
          array (
            0 => 'article',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          3 => 
          array (
            0 => 'aside',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          4 => 
          array (
            0 => 'header',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          5 => 
          array (
            0 => 'footer',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          6 => 
          array (
            0 => 'address',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          7 => 
          array (
            0 => 'hgroup',
            1 => 'Block',
            2 => 'Required: h1 | h2 | h3 | h4 | h5 | h6',
            3 => 'Common',
          ),
          8 => 
          array (
            0 => 'figure',
            1 => 'Block',
            2 => 'Optional: (figcaption, Flow) | (Flow, figcaption) | Flow',
            3 => 'Common',
          ),
          9 => 
          array (
            0 => 'figcaption',
            1 => 'Inline',
            2 => 'Flow',
            3 => 'Common',
          ),
          10 => 
          array (
            0 => 'video',
            1 => 'Block',
            2 => 'Optional: (source, Flow) | (Flow, source) | Flow',
            3 => 'Common',
            4 => 
            array (
              'src' => 'URI',
              'type' => 'Text',
              'width' => 'Length',
              'height' => 'Length',
              'poster' => 'URI',
              'preload' => 'Enum#auto,metadata,none',
              'controls' => 'Bool',
            ),
          ),
          11 => 
          array (
            0 => 'source',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
            4 => 
            array (
              'src' => 'URI',
              'type' => 'Text',
            ),
          ),
          12 => 
          array (
            0 => 's',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          13 => 
          array (
            0 => 'var',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          14 => 
          array (
            0 => 'sub',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          15 => 
          array (
            0 => 'sup',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          16 => 
          array (
            0 => 'mark',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          17 => 
          array (
            0 => 'wbr',
            1 => 'Inline',
            2 => 'Empty',
            3 => 'Core',
          ),
          18 => 
          array (
            0 => 'ins',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
            4 => 
            array (
              'cite' => 'URI',
              'datetime' => 'CDATA',
            ),
          ),
          19 => 
          array (
            0 => 'del',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
            4 => 
            array (
              'cite' => 'URI',
              'datetime' => 'CDATA',
            ),
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            0 => 'iframe',
            1 => 'allowfullscreen',
            2 => 'Bool',
          ),
          1 => 
          array (
            0 => 'table',
            1 => 'height',
            2 => 'Text',
          ),
          2 => 
          array (
            0 => 'td',
            1 => 'border',
            2 => 'Text',
          ),
          3 => 
          array (
            0 => 'th',
            1 => 'border',
            2 => 'Text',
          ),
          4 => 
          array (
            0 => 'tr',
            1 => 'width',
            2 => 'Text',
          ),
          5 => 
          array (
            0 => 'tr',
            1 => 'height',
            2 => 'Text',
          ),
          6 => 
          array (
            0 => 'tr',
            1 => 'border',
            2 => 'Text',
          ),
        ),
      ),
      'custom_attributes' => 
      array (
        0 => 
        array (
          0 => 'a',
          1 => 'rel',
          2 => 'Text',
        ),
        1 => 
        array (
          0 => 'a',
          1 => 'dofollow',
          2 => 'Bool',
        ),
        2 => 
        array (
          0 => 'a',
          1 => 'nofollow',
          2 => 'Bool',
        ),
        3 => 
        array (
          0 => 'span',
          1 => 'data-period',
          2 => 'Text',
        ),
        4 => 
        array (
          0 => 'span',
          1 => 'data-type',
          2 => 'Text',
        ),
        5 => 
        array (
          0 => 'ins',
          1 => 'data-ad-client',
          2 => 'Text',
        ),
        6 => 
        array (
          0 => 'ins',
          1 => 'data-ad-slot',
          2 => 'Text',
        ),
        7 => 
        array (
          0 => 'ins',
          1 => 'data-ad-format',
          2 => 'Text',
        ),
        8 => 
        array (
          0 => 'ins',
          1 => 'data-ad-full-width-responsive',
          2 => 'Text',
        ),
        9 => 
        array (
          0 => 'img',
          1 => 'data-src',
          2 => 'Text',
        ),
        10 => 
        array (
          0 => 'img',
          1 => 'loading',
          2 => 'Text',
        ),
        11 => 
        array (
          0 => 'video',
          1 => 'autoplay',
          2 => 'Bool',
        ),
        12 => 
        array (
          0 => 'video',
          1 => 'muted',
          2 => 'Bool',
        ),
        13 => 
        array (
          0 => 'video',
          1 => 'loop',
          2 => 'Bool',
        ),
        14 => 
        array (
          0 => 'meta',
          1 => 'name',
          2 => 'Text',
        ),
        15 => 
        array (
          0 => 'meta',
          1 => 'content',
          2 => 'Text',
        ),
        16 => 
        array (
          0 => 'meta',
          1 => 'property',
          2 => 'Text',
        ),
        17 => 
        array (
          0 => 'link',
          1 => 'media',
          2 => 'Text',
        ),
        18 => 
        array (
          0 => 'link',
          1 => 'type',
          2 => 'Text',
        ),
        19 => 
        array (
          0 => 'link',
          1 => 'rel',
          2 => 'Text',
        ),
        20 => 
        array (
          0 => 'link',
          1 => 'href',
          2 => 'Text',
        ),
        21 => 
        array (
          0 => 'link',
          1 => 'color',
          2 => 'Text',
        ),
        22 => 
        array (
          0 => 'audio',
          1 => 'controls',
          2 => 'Bool',
        ),
        23 => 
        array (
          0 => 'div',
          1 => 'data-bs-theme',
          2 => 'Text',
        ),
        24 => 
        array (
          0 => 'div',
          1 => 'data-url',
          2 => 'Text',
        ),
        25 => 
        array (
          0 => 'button',
          1 => 'data-bb-toggle',
          2 => 'Text',
        ),
        26 => 
        array (
          0 => 'button',
          1 => 'data-value',
          2 => 'Text',
        ),
      ),
      'custom_elements' => 
      array (
        0 => 
        array (
          0 => 'u',
          1 => 'Inline',
          2 => 'Inline',
          3 => 'Common',
        ),
        1 => 
        array (
          0 => 'button',
          1 => 'Inline',
          2 => 'Inline',
          3 => 'Common',
        ),
        2 => 
        array (
          0 => 'ins',
          1 => 'Inline',
          2 => 'Inline',
          3 => 'Common',
        ),
        3 => 
        array (
          0 => 'meta',
          1 => 'Inline',
          2 => 'Empty',
          3 => 'Common',
        ),
        4 => 
        array (
          0 => 'link',
          1 => 'Inline',
          2 => 'Empty',
          3 => 'Common',
        ),
        5 => 
        array (
          0 => 'audio',
          1 => 'Block',
          2 => 'Optional: (source, Flow) | (Flow, source) | Flow',
          3 => 'Common',
        ),
      ),
    ),
  ),
  'datatables-buttons' => 
  array (
    'namespace' => 
    array (
      'base' => 'DataTables',
      'model' => 'App\\Models',
    ),
    'pdf_generator' => 'excel',
    'snappy' => 
    array (
      'options' => 
      array (
        'no-outline' => true,
        'margin-left' => '0',
        'margin-right' => '0',
        'margin-top' => '10mm',
        'margin-bottom' => '10mm',
      ),
      'orientation' => 'landscape',
    ),
    'parameters' => 
    array (
      'dom' => 'Bfrtip',
      'order' => 
      array (
        0 => 
        array (
          0 => 0,
          1 => 'desc',
        ),
      ),
      'buttons' => 
      array (
        0 => 'excel',
        1 => 'csv',
        2 => 'pdf',
        3 => 'print',
        4 => 'reset',
        5 => 'reload',
      ),
    ),
    'generator' => 
    array (
      'columns' => 'id,add your columns,created_at,updated_at',
      'buttons' => 'excel,csv,pdf,print,reset,reload',
      'dom' => 'Bfrtip',
    ),
  ),
  'datatables-html' => 
  array (
    'namespace' => 'LaravelDataTables',
    'table' => 
    array (
      'class' => 'table',
      'id' => 'dataTableBuilder',
    ),
    'script' => 'core/table::script',
    'editor' => 'core/table::editor',
  ),
  'datatables' => 
  array (
    'search' => 
    array (
      'smart' => true,
      'multi_term' => true,
      'case_insensitive' => true,
      'use_wildcards' => false,
      'starts_with' => false,
    ),
    'index_column' => 'DT_RowIndex',
    'engines' => 
    array (
      'eloquent' => 'Botble\\Table\\EloquentDataTable',
      'query' => 'Botble\\Table\\QueryDataTable',
      'collection' => 'Botble\\Table\\CollectionDataTable',
      'resource' => 'Botble\\Table\\ApiResourceDataTable',
    ),
    'builders' => 
    array (
    ),
    'nulls_last_sql' => ':column :direction NULLS LAST',
    'error' => NULL,
    'columns' => 
    array (
      'excess' => 
      array (
        0 => 'rn',
        1 => 'row_num',
      ),
      'escape' => '*',
      'raw' => 
      array (
        0 => 'action',
      ),
      'blacklist' => 
      array (
        0 => 'password',
        1 => 'remember_token',
      ),
      'whitelist' => '*',
    ),
    'json' => 
    array (
      'header' => 
      array (
      ),
      'options' => 0,
    ),
    'callback' => 
    array (
      0 => '$',
      1 => '$.',
      2 => 'function',
    ),
  ),
  'packages' => 
  array (
    'api' => 
    array (
      'api' => 
      array (
        'provider' => 
        array (
          'model' => 'Botble\\Member\\Models\\Member',
          'guard' => 'member',
          'password_broker' => 'members',
          'verify_email' => false,
        ),
      ),
      'permissions' => 
      array (
        0 => 
        array (
          'name' => 'API',
          'flag' => 'api.settings',
          'parent_flag' => 'settings.index',
        ),
        1 => 
        array (
          'name' => 'Sanctum Token',
          'flag' => 'api.sanctum-token.index',
          'parent_flag' => 'api.settings',
        ),
        2 => 
        array (
          'name' => 'Create',
          'flag' => 'api.sanctum-token.create',
          'parent_flag' => 'api.sanctum-token.index',
        ),
        3 => 
        array (
          'name' => 'Delete',
          'flag' => 'api.sanctum-token.destroy',
          'parent_flag' => 'api.sanctum-token.index',
        ),
      ),
    ),
    'data-synchronize' => 
    array (
      'data-synchronize' => 
      array (
        'mime_types' => 
        array (
          0 => 'application/vnd.ms-excel',
          1 => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
          2 => 'text/csv',
          3 => 'application/csv',
          4 => 'text/plain',
        ),
        'extensions' => 
        array (
          0 => 'csv',
          1 => 'xls',
          2 => 'xlsx',
        ),
        'storage' => 
        array (
          'disk' => 'local',
          'path' => 'data-synchronize',
        ),
        'export' => 
        array (
          'chunk_size' => 400,
          'memory_limit' => '512M',
          'time_limit' => 0,
          'optimize_memory' => true,
          'use_chunked' => true,
        ),
      ),
    ),
    'installer' => 
    array (
      'installer' => 
      array (
        'enabled' => true,
        'requirements' => 
        array (
          'php' => 
          array (
            0 => 'openssl',
            1 => 'pdo',
            2 => 'mbstring',
            3 => 'tokenizer',
            4 => 'JSON',
            5 => 'cURL',
            6 => 'gd',
            7 => 'fileinfo',
            8 => 'xml',
            9 => 'ctype',
          ),
          'apache' => 
          array (
            0 => 'mod_rewrite',
          ),
          'permissions' => 
          array (
            0 => '.env',
            1 => 'storage/framework/',
            2 => 'storage/logs/',
            3 => 'bootstrap/cache/',
          ),
        ),
      ),
    ),
    'menu' => 
    array (
      'permissions' => 
      array (
        0 => 
        array (
          'name' => 'Menu',
          'flag' => 'menus.index',
          'parent_flag' => 'core.appearance',
        ),
        1 => 
        array (
          'name' => 'Create',
          'flag' => 'menus.create',
          'parent_flag' => 'menus.index',
        ),
        2 => 
        array (
          'name' => 'Edit',
          'flag' => 'menus.edit',
          'parent_flag' => 'menus.index',
        ),
        3 => 
        array (
          'name' => 'Delete',
          'flag' => 'menus.destroy',
          'parent_flag' => 'menus.index',
        ),
      ),
    ),
    'optimize' => 
    array (
      'general' => 
      array (
        'skip' => 
        array (
          0 => '*.xml',
          1 => '*.less',
          2 => '*.pdf',
          3 => '*.doc',
          4 => '*.txt',
          5 => '*.ico',
          6 => '*.rss',
          7 => '*.zip',
          8 => '*.mp3',
          9 => '*.rar',
          10 => '*.exe',
          11 => '*.wmv',
          12 => '*.doc',
          13 => '*.avi',
          14 => '*.ppt',
          15 => '*.mpg',
          16 => '*.mpeg',
          17 => '*.tif',
          18 => '*.wav',
          19 => '*.mov',
          20 => '*.psd',
          21 => '*.ai',
          22 => '*.xls',
          23 => '*.mp4',
          24 => '*.m4a',
          25 => '*.swf',
          26 => '*.dat',
          27 => '*.dmg',
          28 => '*.iso',
          29 => '*.flv',
          30 => '*.m4v',
          31 => '*.torrent',
        ),
      ),
      'permissions' => 
      array (
        0 => 
        array (
          'name' => 'Optimize',
          'flag' => 'optimize.settings',
          'parent_flag' => 'settings.common',
        ),
      ),
    ),
    'page' => 
    array (
      'permissions' => 
      array (
        0 => 
        array (
          'name' => 'Pages',
          'flag' => 'pages.index',
          'parent_flag' => 'core.cms',
        ),
        1 => 
        array (
          'name' => 'Create',
          'flag' => 'pages.create',
          'parent_flag' => 'pages.index',
        ),
        2 => 
        array (
          'name' => 'Edit',
          'flag' => 'pages.edit',
          'parent_flag' => 'pages.index',
        ),
        3 => 
        array (
          'name' => 'Delete',
          'flag' => 'pages.destroy',
          'parent_flag' => 'pages.index',
        ),
      ),
    ),
    'plugin-management' => 
    array (
      'general' => 
      array (
        'enable_plugin_manager' => true,
        'hide_plugin_author' => false,
        'enable_plugin_list_cache' => false,
        'enable_marketplace_feature' => true,
      ),
      'permissions' => 
      array (
        0 => 
        array (
          'name' => 'Plugins',
          'flag' => 'plugins.index',
          'parent_flag' => 'core.system',
        ),
        1 => 
        array (
          'name' => 'Activate/Deactivate',
          'flag' => 'plugins.edit',
          'parent_flag' => 'plugins.index',
        ),
        2 => 
        array (
          'name' => 'Remove',
          'flag' => 'plugins.remove',
          'parent_flag' => 'plugins.index',
        ),
        3 => 
        array (
          'name' => 'Add New Plugins',
          'flag' => 'plugins.marketplace',
          'parent_flag' => 'plugins.index',
        ),
      ),
    ),
    'revision' => 
    array (
      'general' => 
      array (
        'supported' => 
        array (
          0 => 'Botble\\Page\\Models\\Page',
          1 => 'Botble\\Blog\\Models\\Post',
        ),
      ),
    ),
    'seo-helper' => 
    array (
      'general' => 
      array (
        'title' => 
        array (
          'separator' => '-',
          'first' => true,
          'max' => 120,
        ),
        'description' => 
        array (
          'max' => 386,
        ),
        'misc' => 
        array (
          'canonical' => true,
          'robots' => false,
          'default' => 
          array (
            'author' => '',
            'publisher' => '',
          ),
        ),
        'webmasters' => 
        array (
          'google' => '',
          'bing' => '',
          'alexa' => '',
          'pinterest' => '',
          'yandex' => '',
        ),
        'open-graph' => 
        array (
          'prefix' => 'og:',
          'type' => 'website',
          'properties' => 
          array (
          ),
        ),
        'twitter' => 
        array (
          'prefix' => 'twitter:',
          'card' => 'summary',
          'metas' => 
          array (
          ),
        ),
        'analytics' => 
        array (
          'google' => '',
        ),
        'supported' => 
        array (
          0 => 'Botble\\Page\\Models\\Page',
          1 => 'Botble\\Blog\\Models\\Post',
          2 => 'Botble\\Blog\\Models\\Category',
          3 => 'Botble\\Blog\\Models\\Tag',
          4 => 'Botble\\Gallery\\Models\\Gallery',
        ),
      ),
    ),
    'shortcode' => 
    array (
      'shortcode' => 
      array (
        'cache' => 
        array (
          'enabled' => true,
          'ttl' => 1800,
        ),
        'performance' => 
        array (
          'log_threshold' => 0.5,
        ),
      ),
    ),
    'slug' => 
    array (
      'general' => 
      array (
        'pattern' => '--slug--',
        'supported' => 
        array (
          'Botble\\Page\\Models\\Page' => 'Pages',
        ),
        'prefixes' => 
        array (
        ),
        'disable_preview' => 
        array (
        ),
        'slug_generated_columns' => 
        array (
          'Botble\\Member\\Models\\Member' => 'last_name',
        ),
        'enable_slug_translator' => false,
      ),
    ),
    'theme' => 
    array (
      'general' => 
      array (
        'themeDefault' => 'default',
        'layoutDefault' => 'default',
        'themeDir' => 'themes',
        'containerDir' => 
        array (
          'layout' => 'layouts',
          'asset' => '',
          'partial' => 'partials',
          'view' => 'views',
        ),
        'events' => 
        array (
        ),
        'enable_custom_js' => true,
        'enable_custom_html' => true,
        'enable_custom_html_shortcode' => true,
        'enable_robots_txt_editor' => true,
        'public_theme_name' => NULL,
        'display_theme_manager_in_admin_panel' => false,
        'public_single_ending_url' => NULL,
        'extra_date_format' => NULL,
      ),
      'permissions' => 
      array (
        0 => 
        array (
          'name' => 'Appearance',
          'flag' => 'core.appearance',
          'parent_flag' => 'core.system',
        ),
        1 => 
        array (
          'name' => 'Theme',
          'flag' => 'theme.index',
          'parent_flag' => 'core.appearance',
        ),
        2 => 
        array (
          'name' => 'Activate',
          'flag' => 'theme.activate',
          'parent_flag' => 'theme.index',
        ),
        3 => 
        array (
          'name' => 'Remove',
          'flag' => 'theme.remove',
          'parent_flag' => 'theme.index',
        ),
        4 => 
        array (
          'name' => 'Theme options',
          'flag' => 'theme.options',
          'parent_flag' => 'core.appearance',
        ),
        5 => 
        array (
          'name' => 'Custom CSS',
          'flag' => 'theme.custom-css',
          'parent_flag' => 'core.appearance',
        ),
        6 => 
        array (
          'name' => 'Custom JS',
          'flag' => 'theme.custom-js',
          'parent_flag' => 'core.appearance',
        ),
        7 => 
        array (
          'name' => 'Custom HTML',
          'flag' => 'theme.custom-html',
          'parent_flag' => 'core.appearance',
        ),
        8 => 
        array (
          'name' => 'Robots.txt Editor',
          'flag' => 'theme.robots-txt',
          'parent_flag' => 'core.appearance',
        ),
        9 => 
        array (
          'name' => 'Website Tracking',
          'flag' => 'settings.website-tracking',
          'parent_flag' => 'settings.common',
        ),
      ),
    ),
    'widget' => 
    array (
      'permissions' => 
      array (
        0 => 
        array (
          'name' => 'Widgets',
          'flag' => 'widgets.index',
          'parent_flag' => 'core.appearance',
        ),
      ),
    ),
    'sitemap' => 
    array (
      'config' => 
      array (
        'use_cache' => false,
        'cache_key' => 'cms-sitemap.',
        'cache_duration' => 3600,
        'escaping' => true,
        'use_limit_size' => false,
        'max_size' => NULL,
        'use_styles' => true,
        'styles_location' => '/vendor/core/packages/sitemap/styles/',
        'use_gzip' => false,
        'indexnow_endpoints' => 
        array (
          'bing' => 'https://api.indexnow.org/indexnow',
          'yandex' => 'https://yandex.com/indexnow',
          'seznam' => 'https://search.seznam.cz/indexnow',
          'naver' => 'https://searchadvisor.naver.com/indexnow',
        ),
      ),
      'permissions' => 
      array (
        0 => 
        array (
          'name' => 'Sitemap',
          'flag' => 'sitemap.settings',
          'parent_flag' => 'settings.index',
        ),
      ),
    ),
  ),
  'assets' => 
  array (
    'offline' => true,
    'enable_version' => false,
    'version' => 1787439020,
    'scripts' => 
    array (
      0 => 'modernizr',
      1 => 'app',
    ),
    'styles' => 
    array (
      0 => 'bootstrap',
    ),
    'resources' => 
    array (
      'scripts' => 
      array (
        'app' => 
        array (
          'use_cdn' => false,
          'location' => 'footer',
          'src' => 
          array (
            'local' => '/js/app.js',
          ),
        ),
        'modernizr' => 
        array (
          'use_cdn' => true,
          'location' => 'header',
          'src' => 
          array (
            'local' => '/vendor/core/packages/modernizr/modernizr.min.js',
            'cdn' => '//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js',
          ),
        ),
      ),
      'styles' => 
      array (
        'bootstrap' => 
        array (
          'use_cdn' => true,
          'location' => 'header',
          'src' => 
          array (
            'local' => '/packages/bootstrap/css/bootstrap.min.css',
            'cdn' => '//stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css',
          ),
          'attributes' => 
          array (
            'integrity' => 'sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB',
            'crossorigin' => 'anonymous',
          ),
        ),
      ),
    ),
  ),
  'ziggy' => 
  array (
    'except' => 
    array (
      0 => 'debugbar.*',
    ),
  ),
  'plugins' => 
  array (
    'language' => 
    array (
      'general' => 
      array (
        'supported' => 
        array (
          1 => 'Botble\\Menu\\Models\\Menu',
          2 => 'Botble\\Menu\\Models\\MenuNode',
        ),
      ),
      'permissions' => 
      array (
        0 => 
        array (
          'name' => 'Languages',
          'flag' => 'languages.index',
          'parent_flag' => 'settings.common',
        ),
        1 => 
        array (
          'name' => 'Create',
          'flag' => 'languages.create',
          'parent_flag' => 'languages.index',
        ),
        2 => 
        array (
          'name' => 'Edit',
          'flag' => 'languages.edit',
          'parent_flag' => 'languages.index',
        ),
        3 => 
        array (
          'name' => 'Delete',
          'flag' => 'languages.destroy',
          'parent_flag' => 'languages.index',
        ),
      ),
    ),
    'language-advanced' => 
    array (
      'general' => 
      array (
        'supported' => 
        array (
          'Botble\\Page\\Models\\Page' => 
          array (
            0 => 'name',
            1 => 'description',
            2 => 'content',
            3 => 'gallery',
          ),
          'Botble\\Slug\\Models\\Slug' => 
          array (
            0 => 'key',
            1 => 'prefix',
          ),
          'Botble\\Ads\\Models\\Ads' => 
          array (
            0 => 'name',
            1 => 'image',
            2 => 'tablet_image',
            3 => 'mobile_image',
            4 => 'url',
          ),
          'ArchiElite\\Announcement\\Models\\Announcement' => 
          array (
            0 => 'content',
            1 => 'action_label',
          ),
          'Botble\\Blog\\Models\\Post' => 
          array (
            0 => 'name',
            1 => 'description',
            2 => 'content',
            3 => 'gallery',
          ),
          'Botble\\Blog\\Models\\Category' => 
          array (
            0 => 'name',
            1 => 'description',
          ),
          'Botble\\Blog\\Models\\Tag' => 
          array (
            0 => 'name',
            1 => 'description',
          ),
          'Botble\\Contact\\Models\\CustomField' => 
          array (
            0 => 'name',
            1 => 'placeholder',
          ),
          'Botble\\Contact\\Models\\CustomFieldOption' => 
          array (
            0 => 'label',
          ),
          'Botble\\Gallery\\Models\\Gallery' => 
          array (
            0 => 'name',
            1 => 'description',
            2 => 'gallery',
          ),
          'Botble\\Gallery\\Models\\GalleryMeta' => 
          array (
            0 => 'images',
          ),
        ),
        'translatable_meta_boxes' => 
        array (
          0 => 'language_advanced_wrap',
          1 => 'seo_wrap',
          2 => 'contact-custom-field-options',
          3 => 'gallery_wrap',
        ),
        'page_use_language_v2' => true,
      ),
      'permissions' => 
      array (
        0 => 
        array (
          'name' => 'Import Translations',
          'flag' => 'translations.import',
          'parent_flag' => 'tools.data-synchronize',
        ),
        1 => 
        array (
          'name' => 'Export Translations',
          'flag' => 'translations.export',
          'parent_flag' => 'tools.data-synchronize',
        ),
        2 => 
        array (
          'name' => 'Import Property Translations',
          'flag' => 'property-translations.import',
          'parent_flag' => 'tools.data-synchronize',
        ),
        3 => 
        array (
          'name' => 'Export Property Translations',
          'flag' => 'property-translations.export',
          'parent_flag' => 'tools.data-synchronize',
        ),
      ),
    ),
    'ads' => 
    array (
      'permissions' => 
      array (
        0 => 
        array (
          'name' => 'Ads',
          'flag' => 'ads.index',
        ),
        1 => 
        array (
          'name' => 'Create',
          'flag' => 'ads.create',
          'parent_flag' => 'ads.index',
        ),
        2 => 
        array (
          'name' => 'Edit',
          'flag' => 'ads.edit',
          'parent_flag' => 'ads.index',
        ),
        3 => 
        array (
          'name' => 'Delete',
          'flag' => 'ads.destroy',
          'parent_flag' => 'ads.index',
        ),
        4 => 
        array (
          'name' => 'Ads',
          'flag' => 'ads.settings',
          'parent_flag' => 'settings.others',
        ),
      ),
      'general' => 
      array (
        'use_real_image_url' => true,
      ),
    ),
    'analytics' => 
    array (
      'general' => 
      array (
        'cache_lifetime_in_minutes' => 1440,
        'cache' => 
        array (
          'store' => 'file',
        ),
        'enabled_dashboard_widgets' => true,
      ),
      'permissions' => 
      array (
        0 => 
        array (
          'name' => 'Analytics',
          'flag' => 'analytics.general',
          'parent_flag' => 'core.system',
        ),
        1 => 
        array (
          'name' => 'Top Page',
          'flag' => 'analytics.page',
          'parent_flag' => 'analytics.general',
        ),
        2 => 
        array (
          'name' => 'Top Browser',
          'flag' => 'analytics.browser',
          'parent_flag' => 'analytics.general',
        ),
        3 => 
        array (
          'name' => 'Top Referrer',
          'flag' => 'analytics.referrer',
          'parent_flag' => 'analytics.general',
        ),
        4 => 
        array (
          'name' => 'Analytics',
          'flag' => 'analytics.settings',
          'parent_flag' => 'settings.others',
        ),
      ),
    ),
    'announcement' => 
    array (
      'permissions' => 
      array (
        0 => 
        array (
          'name' => 'Announcements',
          'flag' => 'announcements.index',
        ),
        1 => 
        array (
          'name' => 'Create',
          'flag' => 'announcements.create',
          'parent_flag' => 'announcements.index',
        ),
        2 => 
        array (
          'name' => 'Edit',
          'flag' => 'announcements.edit',
          'parent_flag' => 'announcements.index',
        ),
        3 => 
        array (
          'name' => 'Delete',
          'flag' => 'announcements.destroy',
          'parent_flag' => 'announcements.index',
        ),
        4 => 
        array (
          'name' => 'Announcements',
          'flag' => 'announcements.settings',
          'parent_flag' => 'settings.others',
        ),
      ),
    ),
    'audit-log' => 
    array (
      'permissions' => 
      array (
        0 => 
        array (
          'name' => 'Activity Logs',
          'flag' => 'audit-log.index',
          'parent_flag' => 'core.system',
        ),
        1 => 
        array (
          'name' => 'Delete',
          'flag' => 'audit-log.destroy',
          'parent_flag' => 'audit-log.index',
        ),
      ),
    ),
    'backup' => 
    array (
      'general' => 
      array (
        'mysql' => 
        array (
          'execute_path' => '',
        ),
        'pgsql' => 
        array (
          'execute_path' => '',
        ),
      ),
      'permissions' => 
      array (
        0 => 
        array (
          'name' => 'Backup',
          'flag' => 'backups.index',
          'parent_flag' => 'core.system',
        ),
        1 => 
        array (
          'name' => 'Create',
          'flag' => 'backups.create',
          'parent_flag' => 'backups.index',
        ),
        2 => 
        array (
          'name' => 'Restore',
          'flag' => 'backups.restore',
          'parent_flag' => 'backups.index',
        ),
        3 => 
        array (
          'name' => 'Delete',
          'flag' => 'backups.destroy',
          'parent_flag' => 'backups.index',
        ),
      ),
    ),
    'blog' => 
    array (
      'general' => 
      array (
        'use_language_v2' => true,
      ),
      'permissions' => 
      array (
        0 => 
        array (
          'name' => 'Blog',
          'flag' => 'plugins.blog',
          'parent_flag' => 'core.cms',
        ),
        1 => 
        array (
          'name' => 'Posts',
          'flag' => 'posts.index',
          'parent_flag' => 'plugins.blog',
        ),
        2 => 
        array (
          'name' => 'Create',
          'flag' => 'posts.create',
          'parent_flag' => 'posts.index',
        ),
        3 => 
        array (
          'name' => 'Edit',
          'flag' => 'posts.edit',
          'parent_flag' => 'posts.index',
        ),
        4 => 
        array (
          'name' => 'Delete',
          'flag' => 'posts.destroy',
          'parent_flag' => 'posts.index',
        ),
        5 => 
        array (
          'name' => 'Categories',
          'flag' => 'categories.index',
          'parent_flag' => 'plugins.blog',
        ),
        6 => 
        array (
          'name' => 'Create',
          'flag' => 'categories.create',
          'parent_flag' => 'categories.index',
        ),
        7 => 
        array (
          'name' => 'Edit',
          'flag' => 'categories.edit',
          'parent_flag' => 'categories.index',
        ),
        8 => 
        array (
          'name' => 'Delete',
          'flag' => 'categories.destroy',
          'parent_flag' => 'categories.index',
        ),
        9 => 
        array (
          'name' => 'Tags',
          'flag' => 'tags.index',
          'parent_flag' => 'plugins.blog',
        ),
        10 => 
        array (
          'name' => 'Reports',
          'flag' => 'blog.reports',
          'parent_flag' => 'plugins.blog',
        ),
        11 => 
        array (
          'name' => 'Create',
          'flag' => 'tags.create',
          'parent_flag' => 'tags.index',
        ),
        12 => 
        array (
          'name' => 'Edit',
          'flag' => 'tags.edit',
          'parent_flag' => 'tags.index',
        ),
        13 => 
        array (
          'name' => 'Delete',
          'flag' => 'tags.destroy',
          'parent_flag' => 'tags.index',
        ),
        14 => 
        array (
          'name' => 'Blog',
          'flag' => 'blog.settings',
          'parent_flag' => 'settings.others',
        ),
        15 => 
        array (
          'name' => 'Export Posts',
          'flag' => 'posts.export',
          'parent_flag' => 'tools.data-synchronize',
        ),
        16 => 
        array (
          'name' => 'Import Posts',
          'flag' => 'posts.import',
          'parent_flag' => 'tools.data-synchronize',
        ),
      ),
    ),
    'captcha' => 
    array (
      'general' => 
      array (
        'math-captcha' => 
        array (
          'operands' => 
          array (
            0 => '+',
            1 => '-',
            2 => '*',
          ),
          'rand-min' => 2,
          'rand-max' => 5,
        ),
      ),
      'permissions' => 
      array (
        0 => 
        array (
          'name' => 'Captcha',
          'flag' => 'captcha.settings',
          'parent_flag' => 'settings.others',
        ),
      ),
    ),
    'contact' => 
    array (
      'email' => 
      array (
        'name' => 'plugins/contact::contact.settings.email.title',
        'description' => 'plugins/contact::contact.settings.email.description',
        'templates' => 
        array (
          'notice' => 
          array (
            'title' => 'plugins/contact::contact.settings.email.templates.notice_title',
            'description' => 'plugins/contact::contact.settings.email.templates.notice_description',
            'subject' => 'plugins/contact::contact.settings.email.templates.subject',
            'can_off' => true,
            'variables' => 
            array (
              'contact_name' => 'plugins/contact::contact.settings.email.templates.contact_name',
              'contact_subject' => 'plugins/contact::contact.settings.email.templates.contact_subject',
              'contact_email' => 'plugins/contact::contact.settings.email.templates.contact_email',
              'contact_phone' => 'plugins/contact::contact.settings.email.templates.contact_phone',
              'contact_address' => 'plugins/contact::contact.settings.email.templates.contact_address',
              'contact_content' => 'plugins/contact::contact.settings.email.templates.contact_content',
              'contact_custom_fields' => 'plugins/contact::contact.settings.email.templates.contact_custom_fields',
            ),
          ),
          'sender-confirmation' => 
          array (
            'title' => 'plugins/contact::contact.settings.email.templates.sender_confirmation_title',
            'description' => 'plugins/contact::contact.settings.email.templates.sender_confirmation_description',
            'subject' => 'plugins/contact::contact.settings.email.templates.sender_confirmation_subject',
            'can_off' => true,
            'enabled' => false,
            'variables' => 
            array (
              'contact_name' => 'plugins/contact::contact.settings.email.templates.contact_name',
              'contact_subject' => 'plugins/contact::contact.settings.email.templates.contact_subject',
              'contact_email' => 'plugins/contact::contact.settings.email.templates.contact_email',
              'contact_phone' => 'plugins/contact::contact.settings.email.templates.contact_phone',
              'contact_address' => 'plugins/contact::contact.settings.email.templates.contact_address',
              'contact_content' => 'plugins/contact::contact.settings.email.templates.contact_content',
              'contact_custom_fields' => 'plugins/contact::contact.settings.email.templates.contact_custom_fields',
            ),
          ),
          'admin-reply' => 
          array (
            'title' => 'plugins/contact::contact.settings.email.templates.admin_reply_title',
            'description' => 'plugins/contact::contact.settings.email.templates.admin_reply_description',
            'subject' => 'plugins/contact::contact.settings.email.templates.admin_reply_subject',
            'can_off' => true,
            'enabled' => true,
            'variables' => 
            array (
              'contact_name' => 'plugins/contact::contact.settings.email.templates.contact_name',
              'contact_subject' => 'plugins/contact::contact.settings.email.templates.contact_subject',
              'contact_email' => 'plugins/contact::contact.settings.email.templates.contact_email',
              'contact_content' => 'plugins/contact::contact.settings.email.templates.contact_content',
              'admin_reply_message' => 'plugins/contact::contact.settings.email.templates.admin_reply_message',
              'site_title' => 'plugins/contact::contact.settings.email.templates.site_title',
            ),
          ),
        ),
      ),
      'permissions' => 
      array (
        0 => 
        array (
          'name' => 'Contact',
          'flag' => 'contacts.index',
          'parent_flag' => 'core.cms',
        ),
        1 => 
        array (
          'name' => 'Edit',
          'flag' => 'contacts.edit',
          'parent_flag' => 'contacts.index',
        ),
        2 => 
        array (
          'name' => 'Delete',
          'flag' => 'contacts.destroy',
          'parent_flag' => 'contacts.index',
        ),
        3 => 
        array (
          'name' => 'Custom Fields',
          'flag' => 'contact.custom-fields',
          'parent_flag' => 'contacts.index',
        ),
        4 => 
        array (
          'name' => 'Contact',
          'flag' => 'contact.settings',
          'parent_flag' => 'settings.others',
        ),
      ),
    ),
    'cookie-consent' => 
    array (
      'general' => 
      array (
        'cookie_name' => 'cookie_for_consent',
        'cookie_lifetime' => 7300,
        'cookie_categories' => 
        array (
          'essential' => 
          array (
            'required' => true,
          ),
          'analytics' => 
          array (
            'required' => false,
          ),
          'marketing' => 
          array (
            'required' => false,
          ),
        ),
      ),
    ),
    'fob-comment' => 
    array (
      'permissions' => 
      array (
        0 => 
        array (
          'name' => 'FOB Comments',
          'flag' => 'fob-comment.index',
        ),
        1 => 
        array (
          'name' => 'List',
          'flag' => 'fob-comment.comments.index',
          'parent_flag' => 'fob-comment.index',
        ),
        2 => 
        array (
          'name' => 'Edit',
          'flag' => 'fob-comment.comments.edit',
          'parent_flag' => 'fob-comment.index',
        ),
        3 => 
        array (
          'name' => 'Delete',
          'flag' => 'fob-comment.comments.destroy',
          'parent_flag' => 'fob-comment.index',
        ),
        4 => 
        array (
          'name' => 'Reply',
          'flag' => 'fob-comment.comments.reply',
          'parent_flag' => 'fob-comment.index',
        ),
        5 => 
        array (
          'name' => 'Settings',
          'flag' => 'fob-comment.settings',
          'parent_flag' => 'fob-comment.index',
        ),
      ),
    ),
    'gallery' => 
    array (
      'general' => 
      array (
        'supported' => 
        array (
          0 => 'Botble\\Gallery\\Models\\Gallery',
          1 => 'Botble\\Page\\Models\\Page',
          2 => 'Botble\\Blog\\Models\\Post',
        ),
        'enable_gallery_images_meta_box' => true,
      ),
      'permissions' => 
      array (
        0 => 
        array (
          'name' => 'Galleries',
          'flag' => 'galleries.index',
          'parent_flag' => 'core.cms',
        ),
        1 => 
        array (
          'name' => 'Create',
          'flag' => 'galleries.create',
          'parent_flag' => 'galleries.index',
        ),
        2 => 
        array (
          'name' => 'Edit',
          'flag' => 'galleries.edit',
          'parent_flag' => 'galleries.index',
        ),
        3 => 
        array (
          'name' => 'Delete',
          'flag' => 'galleries.destroy',
          'parent_flag' => 'galleries.index',
        ),
      ),
    ),
    'member' => 
    array (
      'general' => 
      array (
        'notification' => 'Botble\\Member\\Notifications\\ConfirmEmailNotification',
        'verify_email' => false,
        'verification_expire_minutes' => 60,
      ),
      'email' => 
      array (
        'name' => 'plugins/member::member.settings.email.title',
        'description' => 'plugins/member::member.settings.email.description',
        'templates' => 
        array (
          'confirm-email' => 
          array (
            'title' => 'plugins/member::settings.email.templates.confirm_email.title',
            'description' => 'plugins/member::settings.email.templates.confirm_email.description',
            'subject' => 'plugins/member::settings.email.templates.confirm_email.subject',
            'can_off' => false,
            'variables' => 
            array (
              'verify_link' => 'plugins/member::settings.email.templates.confirm_email.verify_link',
              'member_name' => 'plugins/member::settings.email.templates.confirm_email.member_name',
            ),
          ),
          'password-reminder' => 
          array (
            'title' => 'plugins/member::settings.email.templates.password_reminder.title',
            'description' => 'plugins/member::settings.email.templates.password_reminder.description',
            'subject' => 'plugins/member::settings.email.templates.password_reminder.subject',
            'can_off' => false,
            'variables' => 
            array (
              'reset_link' => 'plugins/member::settings.email.templates.password_reminder.reset_link',
            ),
          ),
          'new-pending-post' => 
          array (
            'title' => 'plugins/member::settings.email.templates.new_pending_post.title',
            'description' => 'plugins/member::settings.email.templates.new_pending_post.description',
            'subject' => 'plugins/member::settings.email.templates.new_pending_post.subject',
            'can_off' => true,
            'variables' => 
            array (
              'post_author' => 'plugins/member::settings.email.templates.new_pending_post.post_author',
              'post_name' => 'plugins/member::settings.email.templates.new_pending_post.post_name',
              'post_url' => 'plugins/member::settings.email.templates.new_pending_post.post_url',
            ),
          ),
        ),
      ),
      'permissions' => 
      array (
        0 => 
        array (
          'name' => 'Members',
          'flag' => 'member.index',
          'parent_flag' => 'core.cms',
        ),
        1 => 
        array (
          'name' => 'Create',
          'flag' => 'member.create',
          'parent_flag' => 'member.index',
        ),
        2 => 
        array (
          'name' => 'Edit',
          'flag' => 'member.edit',
          'parent_flag' => 'member.index',
        ),
        3 => 
        array (
          'name' => 'Delete',
          'flag' => 'member.destroy',
          'parent_flag' => 'member.index',
        ),
        4 => 
        array (
          'name' => 'Member',
          'flag' => 'member.settings',
          'parent_flag' => 'settings.others',
        ),
      ),
    ),
    'newsletter' => 
    array (
      'email' => 
      array (
        'name' => 'plugins/newsletter::newsletter.settings.email.templates.title',
        'description' => 'plugins/newsletter::newsletter.settings.email.templates.description',
        'templates' => 
        array (
          'subscriber_email' => 
          array (
            'title' => 'plugins/newsletter::newsletter.settings.email.templates.to_user.title',
            'description' => 'plugins/newsletter::newsletter.settings.email.templates.to_user.description',
            'subject' => 'plugins/newsletter::newsletter.settings.email.templates.to_user.subject',
            'can_off' => true,
            'variables' => 
            array (
              'newsletter_name' => 'plugins/newsletter::newsletter.settings.email.templates.to_user.newsletter_name',
              'newsletter_email' => 'plugins/newsletter::newsletter.settings.email.templates.to_user.newsletter_email',
              'newsletter_unsubscribe_link' => 'plugins/newsletter::newsletter.settings.email.templates.to_user.newsletter_unsubscribe_link',
              'newsletter_unsubscribe_url' => 'plugins/newsletter::newsletter.settings.email.templates.to_user.newsletter_unsubscribe_url',
            ),
          ),
          'admin_email' => 
          array (
            'title' => 'plugins/newsletter::newsletter.settings.email.templates.to_admin.title',
            'description' => 'plugins/newsletter::newsletter.settings.email.templates.to_admin.description',
            'subject' => 'plugins/newsletter::newsletter.settings.email.templates.to_admin.subject',
            'can_off' => true,
            'variables' => 
            array (
              'newsletter_email' => 'plugins/newsletter::newsletter.settings.email.templates.to_admin.newsletter_email',
            ),
          ),
        ),
        'variables' => 
        array (
        ),
      ),
      'permissions' => 
      array (
        0 => 
        array (
          'name' => 'Newsletters',
          'flag' => 'newsletter.index',
        ),
        1 => 
        array (
          'name' => 'Delete',
          'flag' => 'newsletter.destroy',
          'parent_flag' => 'newsletter.index',
        ),
        2 => 
        array (
          'name' => 'Newsletters',
          'flag' => 'newsletter.settings',
          'parent_flag' => 'settings.others',
        ),
      ),
    ),
    'request-log' => 
    array (
      'permissions' => 
      array (
        0 => 
        array (
          'name' => 'Request Logs',
          'flag' => 'request-log.index',
          'parent_flag' => 'core.system',
        ),
        1 => 
        array (
          'name' => 'Delete',
          'flag' => 'request-log.destroy',
          'parent_flag' => 'request-log.index',
        ),
      ),
    ),
    'rss-feed' => 
    array (
      'rss-feed' => 
      array (
        'feeds' => 
        array (
          'main' => 
          array (
            'items' => '',
            'url' => '',
            'title' => 'My feed',
            'description' => 'The description of the feed.',
            'language' => 'en-US',
            'image' => '',
            'format' => 'atom',
            'view' => 'feed::atom',
            'type' => '',
            'contentType' => '',
          ),
        ),
      ),
    ),
    'social-login' => 
    array (
      'general' => 
      array (
        'supported' => 
        array (
        ),
      ),
      'permissions' => 
      array (
        0 => 
        array (
          'name' => 'Social Login',
          'flag' => 'social-login.settings',
          'parent_flag' => 'settings.others',
        ),
      ),
    ),
    'translation' => 
    array (
      'general' => 
      array (
        'exclude_groups' => 
        array (
        ),
      ),
      'permissions' => 
      array (
        0 => 
        array (
          'name' => 'Localization',
          'flag' => 'plugins.translation',
          'parent_flag' => 'settings.index',
        ),
        1 => 
        array (
          'name' => 'Locales',
          'flag' => 'translations.locales',
          'parent_flag' => 'plugins.translation',
        ),
        2 => 
        array (
          'name' => 'Theme translations',
          'flag' => 'translations.theme-translations',
          'parent_flag' => 'plugins.translation',
        ),
        3 => 
        array (
          'name' => 'Other translations',
          'flag' => 'translations.index',
          'parent_flag' => 'plugins.translation',
        ),
        4 => 
        array (
          'name' => 'Export Theme translations',
          'flag' => 'theme-translations.export',
          'parent_flag' => 'tools.data-synchronize',
        ),
        5 => 
        array (
          'name' => 'Export Other Translations',
          'flag' => 'other-translations.export',
          'parent_flag' => 'tools.data-synchronize',
        ),
        6 => 
        array (
          'name' => 'Import Theme Translations',
          'flag' => 'theme-translations.import',
          'parent_flag' => 'tools.data-synchronize',
        ),
        7 => 
        array (
          'name' => 'Import Other Translations',
          'flag' => 'other-translations.import',
          'parent_flag' => 'tools.data-synchronize',
        ),
      ),
    ),
    'live-stream' => 
    array (
      'permissions' => 
      array (
        0 => 
        array (
          'name' => 'Live Streams',
          'flag' => 'live-streams.index',
        ),
        1 => 
        array (
          'name' => 'Create',
          'flag' => 'live-streams.create',
          'parent_flag' => 'live-streams.index',
        ),
        2 => 
        array (
          'name' => 'Edit',
          'flag' => 'live-streams.edit',
          'parent_flag' => 'live-streams.index',
        ),
        3 => 
        array (
          'name' => 'Delete',
          'flag' => 'live-streams.destroy',
          'parent_flag' => 'live-streams.index',
        ),
      ),
    ),
    'community' => 
    array (
      'permissions' => 
      array (
        0 => 
        array (
          'name' => 'Community Groups',
          'flag' => 'community-groups.index',
        ),
        1 => 
        array (
          'name' => 'Edit',
          'flag' => 'community-groups.edit',
          'parent_flag' => 'community-groups.index',
        ),
        2 => 
        array (
          'name' => 'Delete',
          'flag' => 'community-groups.destroy',
          'parent_flag' => 'community-groups.index',
        ),
        3 => 
        array (
          'name' => 'Community Forums',
          'flag' => 'community-forums.index',
        ),
        4 => 
        array (
          'name' => 'Create',
          'flag' => 'community-forums.create',
          'parent_flag' => 'community-forums.index',
        ),
        5 => 
        array (
          'name' => 'Edit',
          'flag' => 'community-forums.edit',
          'parent_flag' => 'community-forums.index',
        ),
        6 => 
        array (
          'name' => 'Delete',
          'flag' => 'community-forums.destroy',
          'parent_flag' => 'community-forums.index',
        ),
        7 => 
        array (
          'name' => 'Community Feed',
          'flag' => 'community-feed.index',
        ),
        8 => 
        array (
          'name' => 'Delete',
          'flag' => 'community-feed.destroy',
          'parent_flag' => 'community-feed.index',
        ),
      ),
    ),
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'alias' => 
    array (
    ),
    'dont_alias' => 
    array (
      0 => 'App\\Nova',
    ),
  ),
);

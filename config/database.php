<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */

    'default' => env('DB_CONNECTION', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'url' => env('DATABASE_URL'),
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
        ],
        'mysql' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        #this is for my option connection
        'OPTION' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST_OPTION', '10.168.72.109'),
            'port' => env('DB_PORT_OPTION', '3306'),
            'database' => env('DB_DATABASE_OPTION', 'sekisan_imanager'),
            'username' => env('DB_USERNAME_OPTION', 'sys_developer'),
            'password' => env('DB_PASSWORD_OPTION', 'h78r78d'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        #this is for my option localhost connection
        'OPTION_LOCAL' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST_OPTION1', '10.169.130.92'),
            'port' => env('DB_PORT_OPTION1', '3306'),
            'database' => env('DB_DATABASE_OPTION1', 'sekisan_imanager'),
            'username' => env('DB_USERNAME_OPTION1', 'forge'),
            'password' => env('DB_PASSWORD_OPTION1', 'forge'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        #this is for my cad LOCALHOST connection
        'Flooring' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST_Flooring', '10.169.142.34'),
            'port' => env('DB_PORT_Flooring', '3306'),
            'database' => env('DB_DATABASE_Flooring', 'flooring_imanager'),
            'username' => env('DB_USERNAME_Flooring', 'forge'),
            'password' => env('DB_PASSWORD_Flooring', 'forge'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

         #this connection is for Getting Document_settings(boss code)
         'cad_imanager' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST_CAD1', '10.168.72.109'),
            'port' => env('DB_PORT_CAD1', '3306'),
            'database' => env('DB_DATABASE_CAD1', 'cad_imanager'),
            'username' => env('DB_USERNAME_CAD1', 'forge'),
            'password' => env('DB_PASSWORD_CAD1', 'forge'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        #this connection is for accessing HRDSQL to check if user is Registered in main HRD database
        'hrdsql' => [
            'driver' => 'sqlsrv',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST2', 'HRDSQL'),
            'port' => env('DB_PORT2', '1433'),
            'database' => env('DB_DATABASE2', 'CompanyInformation'),
            'username' => env('DB_USERNAME2', 'forge'),
            'password' => env('DB_PASSWORD2', 'forge'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
        ],
        // 'mysql' => [
        //     'driver' => 'mysql',
        //     'url' => env('DATABASE_URL'),
        //     'host' => env('DB_HOST_DenkiAfterkakou', '127.0.0.1'),
        //     'port' => env('DB_PORT_DenkiAfterkakou', '3306'),
        //     'database' => env('DB_DATABASE_DenkiAfterkakou', 'afterkakou'),
        //     'username' => env('DB_USERNAME_DenkiAfterkakou', 'root'),
        //     'password' => env('DB_PASSWORD_DenkiAfterkakou', 'admin'),
        //     'unix_socket' => env('DB_SOCKET', ''),
        //     'charset' => 'utf8mb4',
        //     'collation' => 'utf8mb4_unicode_ci',
        //     'prefix' => '',
        //     'prefix_indexes' => true,
        //     'strict' => true,
        //     'engine' => null,
        //     'options' => extension_loaded('pdo_mysql') ? array_filter([
        //         PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
        //     ]) : [],
        // ],
        #this is for my sqc LOCALHOST connection
        'SQC' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST_SQC', '10.168.72.109'),
            'port' => env('DB_PORT_SQC', '3306'),
            'database' => env('DB_DATABASE_SQC', 'inquiry'),
            'username' => env('DB_USERNAME_SQC', 'forge'),
            'password' => env('DB_PASSWORD_SQC', 'forge'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        #this is for my shiyousho LOCALHOST connection
        'SHIO' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST_SHIO', '10.168.72.109'),
            'port' => env('DB_PORT_SHIO', '3306'),
            'database' => env('DB_DATABASE_SHIO', 'shiyousho_imanager'),
            'username' => env('DB_USERNAME_SHIO', 'sys_developer'),
            'password' => env('DB_PASSWORD_SHIO', 'h78r78d'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        #this is for my Heidisql SetUp connection
        'DenkiAfterkakou' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST_DenkiAfterkakou', '10.168.72.109'),
            'port' => env('DB_PORT_DenkiAfterkakou', '3306'),
            'database' => env('DB_DATABASE_DenkiAfterkakou', 'afterkakou'),
            'username' => env('DB_USERNAME_DenkiAfterkakou', 'syscom'),
            'password' => env('DB_PASSWORD_DenkiAfterkakou', 'h78r78d'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],
        
        #this is for my cad LOCALHOST connection
        'CAD' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST_CAD', '10.169.142.18'),
            'port' => env('DB_PORT_CAD', '3306'),
            'database' => env('DB_DATABASE_CAD', 'cad_imanager'),
            'username' => env('DB_USERNAME_CAD', 'forge'),
            'password' => env('DB_PASSWORD_CAD', 'forge'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],
        #this is for my cad LOCALHOST connection
        'SP' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST_SP', '10.169.142.37'),
            'port' => env('DB_PORT_SP', '3306'),
            'database' => env('DB_DATABASE_SP', 'new_imanager'),
            'username' => env('DB_USERNAME_SP', 'forge'),
            'password' => env('DB_PASSWORD_SP', 'forge'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        #Plan Application Imanager
        'PlanApplication' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST_PA', '10.168.72.109'),
            'port' => env('DB_PORT_PA', '3306'),
            'database' => env('DB_DATABASE_PA', 'gaihi_monitoring'),
            'username' => env('DB_USERNAME_PA', 'sys_developer'),
            'password' => env('DB_PASSWORD_PA', 'h78r78d'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        #this connection is for accessing new registered account in new database created (user)
        'user' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST3', '10.168.72.109'),
            'port' => env('DB_PORT3', '3306'),
            'database' => env('DB_DATABASE3', 'user'),
            'username' => env('DB_USERNAME3', 'forge'),
            'password' => env('DB_PASSWORD3', 'forge'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        #this connection is for Getting Document_settings(boss code)
        'cad_imanager' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST_CAD1', '10.168.72.109'),
            'port' => env('DB_PORT_CAD1', '3306'),
            'database' => env('DB_DATABASE_CAD1', 'cad_imanager'),
            'username' => env('DB_USERNAME_CAD1', 'forge'),
            'password' => env('DB_PASSWORD_CAD1', 'forge'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        #this connection is for hrdapps49
        'hrdapps49' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST49', 'hrdapps49'),
            'port' => env('DB_PORT49', '3310'),
            'database' => env('DB_DATABASE49', 'new_manager'),
            'username' => env('DB_USERNAME49', 'forge'),
            'password' => env('DB_PASSWORD49', 'forge'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],


         #this connection is for hrdapps67 BUNDLE scheduler
         'hrdapps67' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST_BUND', 'hrdapps67'),
            'port' => env('DB_PORT_BUND', '3306'),
            'database' => env('DB_DATABASE_BUND', 'bundle_exceldata'),
            'username' => env('DB_USERNAME_BUND', 'forge'),
            'password' => env('DB_PASSWORD_BUND', 'forge'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        #this connection is for plan application hrdsql HrdInformationService
        'HRDSQL_INFO' => [
            'driver' => 'sqlsrv',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST_ALVS3', 'HRDSQL'),
            'port' => env('DB_PORT_ALVS3', '1433'),
            'database' => env('DB_DATABASE_ALVS3', 'HrdInformationService'),
            'username' => env('DB_USERNAME_ALVS3', 'forge'),
            'password' => env('DB_PASSWORD_ALVS3', 'forge'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
        ],
        #this connection is for plan application hrdsql2 siyoDataBroker
        'HRDSQL2_INFO' => [
            'driver' => 'sqlsrv',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST_ALVS', 'HRDSQL2'),
            'port' => env('DB_PORT_ALVS', ''),
            'database' => env('DB_DATABASE_ALVS', 'siyoDataBroker'),
            'username' => env('DB_USERNAME_ALVS', 'forge'),
            'password' => env('DB_PASSWORD_ALVS', 'forge'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
        ],

         #this connection is for plan application hrdsql2 SekisanDataBroker
         'HRDSQL2_SQC' => [
            'driver' => 'sqlsrv',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST_SQC2', 'HRDSQL2'),
            'port' => env('DB_PORT_SQC2', ''),
            'database' => env('DB_DATABASE_SQC2', 'SekisanDataBroker'),
            'username' => env('DB_USERNAME_SQC2', 'forge'),
            'password' => env('DB_PASSWORD_SQC2', 'forge'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
        ],
        #this connection is for plan application hrdsql3 SiteSurvey
        'HRDSQL3_INFO' => [
            'driver' => 'sqlsrv',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST_ALVS2', 'HRDSQL3'),
            'port' => env('DB_PORT_ALVS2', ''),
            'database' => env('DB_DATABASE_ALVS2', 'SiteSurvey'),
            'username' => env('DB_USERNAME_ALVS2', 'forge'),
            'password' => env('DB_PASSWORD_ALVS2', 'forge'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
        ],

        

        'pgsql' => [
            'driver' => 'pgsql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],

        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '1433'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run in the database.
    |
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer body of commands than a typical key-value system
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
    */

    'redis' => [

        'client' => env('REDIS_CLIENT', 'phpredis'),

        'options' => [
            'cluster' => env('REDIS_CLUSTER', 'redis'),
            'prefix' => env('REDIS_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_database_'),
        ],

        'default' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_DB', '0'),
        ],

        'cache' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_CACHE_DB', '1'),
        ],

    ],

];

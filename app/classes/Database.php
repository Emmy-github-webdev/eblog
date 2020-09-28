<?php
namespace App\Classes;
use Illuminate\Database\Capsule\Manager as Capsule;

class Database
{
    public function __construct()
    {
        $db = new Capsule;
        $db->addConnection([
           'driver' => getenv('DB_DRIVER'),
            'host' => getenv('DB_HOST'),
            'database' => getenv('DB_SCHEMA'),
            'username' => getenv('DB_USER'),
            'password' => getenv('DB_PASS'),
            'charset' => 'utf8mb4',
            'collation' => 'utf8_unicode_ci',
            'prefix' => ''
        ]);
        
        $db->setAsGlobal();
        $db->bootEloquent();
    }
}
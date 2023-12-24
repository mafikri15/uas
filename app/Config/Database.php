<?php

namespace Config;

use CodeIgniter\Database\Config;

class Database extends Config
{
    public string $filesPath = APPPATH . 'Database' . DIRECTORY_SEPARATOR;
    public string $defaultGroup = 'default';

    public array $default = [
        'DSN'         => '',
        'hostname'    => 'localhost', // Sesuaikan dengan hostname database Anda
        'username'    => 'root', // Sesuaikan dengan username database Anda
        'password'    => '', // Sesuaikan dengan password database Anda
        'database'    => 'uas2', // Nama database uas2
        'DBDriver'    => 'MySQLi',
        'DBPrefix'    => '',
        'pConnect'    => false,
        'DBDebug'     => true,
        'charset'     => 'utf8',
        'DBCollat'    => 'utf8_general_ci',
        'swapPre'     => '',
        'encrypt'     => false,
        'compress'    => false,
        'strictOn'    => false,
        'failover'    => [],
        'port'        => 3306,
        'numberNative'=> false,
    ];

    public array $tests = [
        // ...
    ];

    public function __construct()
    {
        parent::__construct();

        // ...
    }
}

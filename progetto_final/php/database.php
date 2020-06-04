<?php
$config = [
    'db_engine' => 'mysql',
    'db_host' => 'remotemysql.com',
    'db_name' => 'koNhicck05',
    'db_user' => 'koNhicck05',
    'db_password' => 'O6mpObr3LC',
];

$db_config = $config['db_engine'] . ":host=".$config['db_host'] . ";port=3306" . ";dbname=" . $config['db_name'];

try {
    $pdo = new PDO($db_config, $config['db_user'], $config['db_password'], [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
    ]);
        
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e) {
    exit("Impossibile connettersi al database: " . $e->getMessage());
}
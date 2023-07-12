<?php
define('HOST', 'localhost');
define('DATABASE', 'form_cadastro');
define('USER', 'root');
define('PASSWORD', '');

$print = function ($class) {
    $filePath = 'classes/' . $class . '.php';
    if (file_exists($filePath)) {
        include_once($filePath);
    }
};

spl_autoload_register($print);

try {
    $pdo = new PDO('mysql:host=' . HOST . ';dbname=' . DATABASE, USER, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    Mysql::setConnection($pdo);
} catch (PDOException $e) {
    echo '<h2 style="color:red;">Erro ao conectar com o banco de dados: ' . $e->getMessage() . '</h2>';
    die();
}

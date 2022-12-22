<?php 
    //Development connection
    $host = '127.0.0.1';
    $db = 'newspa_db';
    $user = 'root';
    $password = '';
    $charset = 'utf8mb4';
    
    //Azure connection string
    //$host= "applied-web.mysql.database.azure.com";
    //$db = "newspa_db";
    //$user= "appliedweb_user@applied-web";
    //$password= "P@ssword1";
    //$charset = 'utf8mb4';
    
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    try{
        $pdo = new PDO($dsn, $user, $password);
        //echo 'Hello Database';
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
    } catch(PDOException $e) {
        throw new PDOException($e->getMessage());
    }
    require_once 'crud.php';
    require_once 'user.php';
    $crud = new crud($pdo);
    $user = new user($pdo);

    $user->insertUser("admin","password");
?>
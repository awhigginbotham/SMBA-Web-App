<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 4/7/2016
 * Time: 4:12 PM
 */

// connect to database with pdo
$dsn = 'mysql:dbname=sys;host=127.0.0.1';
$user = 'ahiggs';
$password = 'Higglebiggle1!';


try {
    $pdoConnection = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit();
}
?>

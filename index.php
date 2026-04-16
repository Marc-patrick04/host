<?php
$host = 'ep-quiet-tree-amk3wgjr-pooler.c-5.us-east-1.aws.neon.tech';
$dbname = 'neondb';
$username = 'neondb_owner';
$password = 'npg_q4ystuBrRw5F';
$port = '5432';

try {
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;sslmode=require", $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
    echo "IWACU TWATARAMYE BIRAKORA<br>";
} catch (PDOException $e) {
    echo "SHAKIRA HANO IKIBAZO: " . $e->getMessage() . "<br>";
}
?>
<?php
try {
    $pdo = new PDO("mysql:dbname=lifeguard;host=localhost", "root", "10seconds@Maomi");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>
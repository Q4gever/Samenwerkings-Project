<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=mycandy", "root", "");
} catch(PDOException $e) {
    die("Error!!!! : " . $e->getMessage());
}
?>
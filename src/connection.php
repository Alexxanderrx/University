<?php
// $host = "localhost";
// $dbname = "pf_00";
// $dsn = "mysql:host=$host;dbname=$dbname;";

// $username = "root";
// $password = "";

// try {
//     $pdo = new PDO($dsn, $username, $password);
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//     echo "Error: " . $e->getMessage();
// }
try {
    $mysqli = new mysqli("localhost", "root",  "", "pf_00");
} catch (mysqli_sql_exception $e) {
    echo "Error: " . $e->getMessage();
};

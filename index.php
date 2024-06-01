<?php
require "functions.php";

$dsn = "mysql:host=mysql;port=3306;dbname=myApp;charset=utf8mb4";
$userName = "root";
$userPass = "root";
$pdo = new PDO($dsn, $userName, $userPass);
$statement = $pdo->prepare("select * from posts");
$statement->execute();
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}


require "router.php";


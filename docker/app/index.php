<?php
$dbuser = $_ENV['MYSQL_USER'];
$dbpass = $_ENV['MYSQL_PASS'];

try {
    $pdo = new PDO("mysql:host=mysql;dbname=Trabalho", $dbuser, $dbpass);
    $statement = $pdo->prepare("SELECT * FROM Usuarios");
    $statement->execute();
    $posts = $statement->fetchAll(PDO::FETCH_OBJ);
    
    echo "<h2>Posts</h2>";
    echo "<ul>";
    foreach ($posts as $post ) {
        echo "<li>".$post->title."</li>";
    }
    echo "</ul>";

} catch(PDOException $e) {
    echo $e->getMessage();
}


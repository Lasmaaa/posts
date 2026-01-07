<?php
require_once "functions.php";
require_once "Database.php";
$config = require "config.php";

$db = new Database($config["database"]);

$posts = $db->query("SELECT * FROM posts")->fetchAll(PDO::FETCH_ASSOC);

echo "<ul>";
    foreach($posts as $post){
        echo "<li>" . $post["content"] . "</li>";
    }
echo "</ul>";

$firstPost = $db->query("SELECT * FROM posts WHERE id = 1")->fetch(PDO::FETCH_ASSOC);

dd($firstPost);

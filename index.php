<?php
require_once "functions.php";
require_once "Database.php";
$config = require "config.php";
require_once "categories.php";

$db = new Database($config["database"]);
$sql_query = "SELECT * FROM posts";

$params = [];

if(isset($_GET["search_query"]) && trim($_GET["search_query"]) != "") {
    $sql_query .= " WHERE content LIKE :search";
    $params["search"] = "%" . $_GET["search_query"] . "%";
}

$posts = $db->query($sql_query, $params)->fetchAll(PDO::FETCH_ASSOC);



echo "<h1>Emuārs</h1>";

echo "<form>";
    echo "<input name='search_query' />";
    echo "<button>Meklēt</button>";
echo "</form>";



echo "<ul>";
    foreach($posts as $post){
        echo "<li>" . $post["content"] . "</li>";
    }
echo "</ul>";

$firstPost = $db->query("SELECT * FROM posts WHERE id = 1")->fetch(PDO::FETCH_ASSOC);

dd($firstPost);

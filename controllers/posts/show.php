<?php

if (!isset($_GET["id"]) || $_GET["id"] == "") {
    redirectIfNotFound();
}
$sql = "SELECT * FROM posts
    LEFT JOIN categories ON posts.category_id = categories.id
    WHERE posts.id = :id";
$params = ["id" => $_GET["id"]];
$post = $db->query($sql, $params)->fetch();
if (!$post) {
    redirectIfNotFound();
}


$comments = $db->query(
    "SELECT * FROM comments WHERE post_id = :id ORDER BY created_at DESC",
    ["id" => $_GET["id"]]
)->fetchAll();


require "views/posts/show.view.php";

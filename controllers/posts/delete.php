<?php

require "Validator.php";

if (!isset($_GET['id']) || !Validator::number($_GET['id'], 1)) {
    redirectIfNotFound();
}


$id = (int) $_GET['id'];

$sql = "SELECT * FROM posts WHERE id = :id";
$post = $db->query($sql, ['id' => $id])->fetch();

if (!$post) {
    redirectIfNotFound();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sql = "DELETE FROM posts WHERE id = :id";
    $db->query($sql, ['id' => $id]);

    header("Location: /");
    exit;
}


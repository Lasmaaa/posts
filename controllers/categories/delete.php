<?php

require "Validator.php";

if (!isset($_GET['id']) || !Validator::number($_GET['id'], 1)) {
    redirectIfNotFound();
}


$id = (int) $_GET['id'];

$sql = "SELECT * FROM categories WHERE id = :id";
$categorie = $db->query($sql, ['id' => $id])->fetch();

if (!$categorie) {
    redirectIfNotFound();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sql = "DELETE FROM categories WHERE id = :id";
    $db->query($sql, ['id' => $id]);

    header("Location: /categories");
    exit;
}
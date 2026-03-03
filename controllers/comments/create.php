<?php
require "Validator.php";
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: /");
    exit;
}

$errors = [];

if (!Validator::string($_POST["author"], max: 50)) {
    $errors["author"] = "Autors obligāts (max 50)";
}

if (!Validator::string($_POST["content"], max: 500)) {
    $errors["content"] = "Komentārs obligāts (max 500)";
}

if (empty($errors)) {
    $sql = "INSERT INTO comments (post_id, author, content)
            VALUES (:post_id, :author, :content)";

$db->query($sql, [
    "post_id" => $_POST["post_id"],
    "author" => $_POST["author"],
    "content" => $_POST["content"]
]);
}
header("Location: /show?id=" . $_POST["post_id"]);
exit;


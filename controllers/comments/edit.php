<?php
require "Validator.php";

$errors = [];

if (!Validator::string($_POST["content"], max: 500)) {
    $errors["content"] = "Komentārs nederīgs";
}
if (empty($errors)) {
    $sql = "UPDATE comments
            SET author = :author, content = :content
            WHERE id = :id";

    $db->query($sql, [
        "author" => $_POST["author"],
        "content" => $_POST["content"],
        "id" => $_POST["id"]
    ]);
}

header("Location: /show?id=/edit/comments" . $_POST["post_id"]);
exit;
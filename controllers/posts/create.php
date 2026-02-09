<?php

require "Validator.php";

$pageTitle = "Emuārs - Izveidot";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
    $content = trim($_POST['content'] ?? '');

    if (!Validator::string($_POST["content"], max: 50)) {
        $errors['content'] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm.";
    }

    if (empty($errors)) {
        $sql = "INSERT INTO posts (content) VALUES (:content)";
        $params = ["content" => $content];
        $db->query($sql, $params);

        header("Location: /");
        exit;
    }
}

require "./views/posts/create.view.php";

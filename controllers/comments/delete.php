<?php

$sql = "DELETE FROM comments WHERE id = :id";
$db->query($sql, ["id" => $_POST["id"]]);

header("Location: /show?id=" . $_POST["post_id"]);
exit;

require "views/posts/show.view.php";
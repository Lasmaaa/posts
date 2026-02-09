<?php
$pageTitle = "Emuārs - kategorijas";


$sql_query = "SELECT category_name FROM categories";
$params = [];

if (!empty($_GET["search_query"])) {
    $sql_query .= " WHERE category_name LIKE :search";
    $params["search"] = "%" . $_GET["search_query"] . "%";
}

$categories = $db->query($sql_query, $params)->fetchAll(PDO::FETCH_ASSOC);

require "./views/categories.view.php";

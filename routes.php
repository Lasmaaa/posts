<?php

return [
    "/" => "controllers/posts/index.php",
    "/about" => "controllers/story.php",
    "/categories" => "controllers/categories.php",

    "/show" => "controllers/posts/show.php",
    "/create" => "controllers/posts/create.php", 
    "/edit" => "controllers/posts/edit.php",
    "/delete" => "controllers/posts/delete.php",

    "/categories/create" => "controllers/categories/create.php",
    "/categories/index" => "controllers/categories/index.php",
    "/categories/show" => "controllers/categories/show.php",
   "/categories/edit" => "controllers/categories/edit.php",
    "/categories/delete" => "controllers/categories/delete.php",


    "/comments/create" => "controllers/comments/create.php",
    "/comments/delete" => "controllers/comments/delete.php",
    "/comments/edit" => "controllers/comments/edit.php",


];
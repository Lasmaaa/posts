<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>

<h1 class = "virsraksts"> <?= htmlspecialchars($post["content"]) ?> </h1>

<a href="edit?id=<?= $post["id"]?>"> rediģēt</a>


<form method="POST" action="/delete?id=<?= $post["id"]?>">
    <input type="hidden" name="id" value="<?= htmlspecialchars($post['id']) ?>">
    <button type="submit">Dzēst</button>
</form>
<?php require "views/components/footer.php" ?>
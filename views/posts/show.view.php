<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>

<h1 class = "virsraksts"> <?= htmlspecialchars($post["content"]) ?> </h1>
<h2><?= $post["category_name"]?></h2>

<a href="edit?id=<?= $post["id"]?>"> rediģēt</a>

<form method="POST" action="/delete?id=<?= $post["id"]?>">
<input type="hidden" name="id" value="<?= htmlspecialchars($post['id']) ?>">
    <button type="submit">Dzēst</button>
</form>

<?php require "views/components/footer.php" ?>



<h3>Pievienot komentāru</h3>

<form method="POST" action="/comments/create">
    <input type="hidden" name="post_id" value="<?= $post["id"] ?>">

    <label>Autors:</label><br>
    <input name="author"><br><br>

    <label>Komentārs:</label><br>
    <textarea name="content"></textarea><br><br>

    <button>Publicēt</button>
</form>

<h3>Komentāri</h3>

<?php foreach ($comments as $comment) : ?>
    <div style="border:1px solid #ccc; margin:10px; padding:10px">

        <b><?= htmlspecialchars($comment["author"]) ?></b>
        <small><?= $comment["created_at"] ?></small>

        <p><?= nl2br(htmlspecialchars($comment["content"])) ?></p>

        <form method="POST" action="/comments/delete" style="display:inline">
            <input type="hidden" name="id" value="<?= $comment["id"] ?>">
            <input type="hidden" name="post_id" value="<?= $post["id"] ?>">
            <button>Dzēst</button>
        </form>

        <form method="POST" action="/comments/edit" style="display:inline">
            <input type="hidden" name="id" value="<?= $comment["id"] ?>">
            <input type="hidden" name="post_id" value="<?= $post["id"] ?>">

            <input name="author" value="<?= htmlspecialchars($comment["author"]) ?>">
            <input name="content" value="<?= htmlspecialchars($comment["content"]) ?>">

            <button>Saglabāt</button>
        </form>

    </div>
<?php endforeach; ?>
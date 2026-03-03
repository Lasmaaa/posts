<?php require "./views/components/header.php";?>
<?php require "./views/components/navbar.php";?>
    <h1><?= htmlspecialchars($post["category_name"]) ?></h1>
    <div>
        <a href="/categories/edit?id=<?= htmlspecialchars($post["id"]) ?>">
            Rediģēt kategoriju
        </a>

        <form method="POST" action="/categories/delete?id=<?= $post["id"]?>">
            <input type="hidden" name="id" value="<?= htmlspecialchars($post['id']) ?>">
            <button type="submit">Dzēst</button>
        </form>
    </div>


    <h2>Posts</h2>
    <?php if(count($posts) == 0) { ?>
        <p>Nav atrasts neviens ieraksts.</p>
    <?php } else { ?>
        <ul>
            <?php foreach($posts as $post_item) { ?>
                <li><a href="show?id=<?= $post_item["id"] ?>"><?= htmlspecialchars($post_item["content"]) ?></a></li>
            <?php } ?>
        </ul>
    <?php } ?>



    <a href="/comments/index?id=<?= htmlspecialchars($post["id"]) ?>">
            
    </a>
<?php require "./views/components/footer.php";?>
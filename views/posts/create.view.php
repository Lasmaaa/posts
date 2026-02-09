<?php
require "views/components/header.php";
require "views/components/navbar.php";?>

<h1>Izveidot bloga ierakstu</h1>
<form class="form" method="POST">
    <label>
       <?php if(isset($errors["content"])) { ?>
            <p><?= $errors["content"] ?></p>
        <?php } ?>
        Rediģēt
        <input name="content" value="<?= $_POST['content'] ?? "" ?>"/>
    </label>
    <button>Saglabāt</button>
</form>

<?php require "views/components/footer.php"; ?>

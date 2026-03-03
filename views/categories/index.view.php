<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

<h1 class = "virsraksts">Emuārs</h1>

<form class = "form">
    <input name='search_query' value='<?= $_GET["search_query"] ?? "" ?>' />
    <button>Meklēt</button>
</form>

<?php if (count($categories) == 0){ ?>
    <p> ❌ Nav atrasts neviens ieraksts. 😭 Lūdzu, pamēģini citu vārdu vai frāzi 🐣</p>
        <?php 
}
else { ?>
    <ul>
        <?php foreach($categories as $categorie) { ?>
            <li class = "ieraksti"> 
                <a href = "categories/show?id=<?= $categorie["id"] ?>"> <?= htmlspecialchars($categorie["content"]) ?> </a> 
            </li>
            <?php } ?>
    </ul>
<?php } ?>

<?php require "views/components/footer.php"; ?>
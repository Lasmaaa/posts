<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

<h1 class = "virsraksts" >Kategorijas</h1>

    <form class = "form">
        <input name='search_query'/>
        <button >Meklēt</button>
    </form>

    <ul>
        <?php foreach($categories as $categorie) { ?>
            <li class = "ieraksti"> 
                <a href = "categories/show?id=<?= $categorie["id"] ?>"> <?= htmlspecialchars($categorie["category_name"]) ?> </a> 
            </li>
            <?php } ?>
    </ul>
<?php require "components/header.php"; ?>
<?php require "components/navbar.php"; ?>

<h1 class = "virsraksts" >Kategorijas</h1>

    <form class = "form">
        <input name='search_query'/>
        <button >Meklēt</button>
    </form>

    <ul>
        <?php foreach($categories as $categorie) { ?>
            <li class = "ieraksti"> <?= $categorie["category_name"] ?> </li>
        <?php } ?>
    </ul>
<?php 
require_once(__DIR__ . '/variables.php'); 
require_once(__DIR__ . '/functions.php'); 
?>
  <div class="container">
        <!-- inclusion de l'entête du site -->
        <?php include(__DIR__ . '/includes/header.php'); ?>
        <h1>Site de recettes</h1>
        <?php foreach (getRecipes($recipes) as $recipe) : ?>
            <article>
                <h3><?php echo $recipe['title']; ?></h3>
                <div><?php echo $recipe['recipe']; ?></div>
                <i><?php echo displayAuthor($recipe['author'], $users); ?></i>
            </article>
        <?php endforeach ?>
    </div>
    <!-- inclusion du bas de page du site -->
   

<?php require_once(__DIR__ . '/includes/footer.php'); ?>    
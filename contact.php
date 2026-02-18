<?php
require_once(__DIR__ . '/functions.php'); 
?>

 <div class="container">
        <?php include(__DIR__ . '/includes/header.php'); ?>
        <h1>Contactez nous</h1>
        <form action="submit_contact.php" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help">
                <div id="email-help" class="form-text">Nous ne revendrons pas votre email.</div>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Votre message</label>
                <textarea class="form-control" placeholder="Exprimez vous" id="message" name="message"></textarea>
            </div>
             <!-- Ajout champ d'upload ! -->
    <div class="mb-3">
        <label for="screenshot" class="form-label">Votre capture d'écran</label>
        <input type="file" class="form-control" id="screenshot" name="screenshot" />
    </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
        <br />
    </div>



    <?php require_once(__DIR__ . '/includes/footer.php'); ?>


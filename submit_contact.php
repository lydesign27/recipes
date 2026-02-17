 <?php include(__DIR__ . '/includes/header.php'); ?>
 <div class="container mt-5">
<?php

/**
 * On ne traite pas les super globales provenant de l'utilisateur directement,
 * ces données doivent être testées et vérifiées.
 */

$getData = $_GET;

if (
    !isset($getData['email'])
    || !filter_var($getData['email'], FILTER_VALIDATE_EMAIL)
    || empty($getData['message'])
    || trim($getData['message']) === ''
) {
    echo('Il faut un email et un message valides pour soumettre le formulaire.');
    return;
}

?>
</div>
    <div class="container">
  


        <h1>Message bien reçu !</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Rappel de vos informations</h5>
                <p class="card-text"><b>Email</b> : <?php echo($getData['email']); ?></p>
                <p class="card-text"><b>Message</b> : <?php echo($getData['message']); ?></p>
            </div>
        </div>
    </div>





  

<?php include(__DIR__ . '/includes/footer.php'); ?>    
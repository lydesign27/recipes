<?php require_once(__DIR__ . '/includes/header.php'); ?>
    <body>
        <h2>Page de test</h2>
        
        <p>
            Cette page contient du code HTML avec des balises PHP.<br />
            <?php /* Insérer du code PHP ici */ ?>
            Voici quelques petits tests :
        </p>
        
        <ul>
        <li style="color: blue;">Texte en bleu</li>
        <li style="color: red;">Texte en rouge</li>
        <li style="color: green;">Texte en vert</li>
        </ul>
        
       
        <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>
        <?php
$fullname = 'Leidiane DE SOUZA';
   echo "Bonjour {$fullname} et bienvenue sur le site !";
?>
<br>


<?php
$autorise = "oui"; 

if ($autorise === "oui") {
    echo "Vous êtes autorisé à accéder à cette page.";
}
elseif ($autorise === "non") {
    echo "Vous n'êtes pas autorisé à accéder à cette page.";
}
else {
    echo "Une erreur est survenue.Je ne connais pas votre statut d'autorisation.";
}

$isAllowedToEnter = true; // boolean qui indique si l'utilisateur est autorisé à entrer ou non
if (!$isAllowedToEnter) {
    echo "Vous n'êtes pas autorisé à entrer.";
}

?>
<br>
<!-- Conditions multiples -->
<?php
$isEnabled = true;
$isOwner = false;
$isAdmin = true;

if (($isEnabled && $isOwner) || $isAdmin) {
    echo 'Accès à la recette validé ✅';
} else {
    echo 'Accès à la recette interdit ! ❌';
}

?>
<?php $chickenRecipesEnabled = true; ?>

<?php if ($chickenRecipesEnabled): ?> <!-- Ne pas oublier le ":" -->

<h1>Liste des recettes à base de poulet</h1>

<?php endif; ?><!-- Ni le ";" après le endif -->

<!--Condition switch-->
<?php
$grade = 20;
// on indique sur quelle variable on travaille 
switch ($grade) 
{ 
    case 0: // dans le cas où $grade vaut 0
        echo "Il faudra revoir tout le cours !";
    break;
    
    case 5: // dans le cas où $grade vaut 5
        echo "Tu dois réviser plusieurs modules";
    break;
    
    case 7: // dans le cas où $grade vaut 7
        echo "Il te manque quelques révisions pour atteindre la moyenne ";
    break;
    
    case 10: // etc. etc.
        echo "Tu as pile poil la moyenne, c'est un peu juste…";
    break;
    
    case 12:
        echo "Tu es assez bon";
    break;
    
    case 16:
        echo "Tu te débrouilles très bien !";
    break;
    
    case 20:
        echo "Excellent travail, c'est parfait !";
    break;
    
    default:
        echo "Désolé, je n'ai pas de message à afficher pour cette note";
}
?>
<br>
<!-- Opérateur ternaire -->
<?php
$userAge = 18; // Exemple d'âge de l'utilisateur
$isAdult = ($userAge >= 18) ? "Oui, vous êtes majeur." : "Vous êtes mineur.";
echo $isAdult;
?>
<br>
<!-- les boucles (while, & for) et les tableaux --> 


<?php

$mickael = ['Mickaël Andrieu', 'mickael.andrieu@exemple.com', 'S3cr3t', 34];
$mathieu = ['Mathieu Nebra', 'mathieu.nebra@exemple.com', 'devine', 33];
$laurene = ['Laurène Castor', 'laurene.castor@exemple.com', 'P4ssw0rD', 28];
$leidiane = ['Leidiane de Souza', 'leidiane.de.souza@exemple.com', 'M0tDeP4ss3', 44];
$users = [$mickael, $mathieu, $laurene, $leidiane];

echo $users[3][0]; // "Leidiane de Souza"
?><br>

<?php
$lines = 1;

while ($lines <= 10) {
    echo 'n° ' . $lines . ' - Je ne dois pas regarder les mouches voler quand j\'apprends le PHP.<br />';
    $lines++; // $lines = $lines + 1
}

$lines = 1;


?>
<br>
<?php
$users = [
    [
        'full_name' => 'Mickaël Andrieu',
        'email' => 'mickael.andrieu@exemple.com',
        'age' => 34,
    ],
    [
        'full_name' => 'Leidiane de Souza',
        'email' => 'leidiane.de.souza@exemple.com',
        'age' => 44,
    ],
    [
        'full_name' => 'Mathieu Nebra',
        'email' => 'mathieu.nebra@exemple.com',
        'age' => 34,
    ],
    [
        'full_name' => 'Laurène Castor',
        'email' => 'laurene.castor@exemple.com',
        'age' => 28,
    ],
];
?>
<p style="color: red;">BOUCLE WHILE</p>
<?php
$lines = 4; // nombre d'utilisateurs dans le tableau
$counter = 0;
while ($counter < $lines) {
    echo '<h2>' . $users[$counter]['full_name'] . ' ' . $users[$counter]['email'] . '</h2>';
    $counter++;
}
?>
<p style="color: red;">BOUCLE FOR</p>
<?php


// On peut aussi faire la même chose avec une boucle for
for ($i = 0; $i < $lines; $i++) {
    echo '<h3>' . $users[$i]['full_name'] . ' ' . $users[$i]['email'] . '</h3>';
}


?>
-----------------------------------------------------------------------------------------------
<?php

// Déclaration du tableau des recettes
$recipes = [
    ['Cassoulet','[...]','mickael.andrieu@exemple.com',true,],
    ['Couscous','[...]','mickael.andrieu@exemple.com',false,],
];

?>
 <ul>
        <?php for ($lines = 0; $lines <= 1; $lines++): ?>
            <li><?php echo $recipes[$lines][0] . ' (' . $recipes[$lines][2] . ')'; ?></li>
        <?php endfor; ?>
    </ul>

  <?php
    $recipes = [
        ['name' => 'Spaghetti Carbonara', 
        'author' => 'Mickaël Andrieu'],
        ['name' => 'Poulet au curry', 
        'author' => 'Mickaël Andrieu'],
        ['name' => 'Tarte aux pommes', 
        'author' => 'Mickaël Andrieu'],
        ['name' => 'Salade César', 
        'author' => 'Mickaël Andrieu'],
        ['name' => 'Ratatouille', 
        'author' => 'Mickaël Andrieu'],
    ];
    ?>
    
    <h1>Recettes de cuisine</h1>
    <p>Voici quelques recettes de cuisine que j'aime :</p>
    <ul>
        <?php for ($i = 0; $i < count($recipes); $i++): ?>
        <li><?php echo $recipes[$i]['name'] . ' (par ' . $recipes[$i]['author'] . ')'; ?></li>
        <?php endfor; ?>
    </ul>
------------------------------------------------------------------------------------------------
<p>Les tableaux numérotés</p>
<?php
$recipe = [
'title' => 'Couscous',
'recipe' => '1. Faire revenir les oignons et la viande dans une cocotte. 2. Ajouter les épices, les légumes et l\'eau. 3. Laisser mijoter pendant 1h30.',
'author' => 'Mickaël Andrieu',
'is_enabled' => true,
] ;
echo ($recipe['title']); // Affiche "Couscous"
?>
<br>
 _____________________________________________________________________________________________
<p>Les tableaux associatifs</p>
<?php
$recipe = [
    'title' => 'Cassoulet',
    'recipe' => 'Etape 1 : des flageolets, Etape 2 : ...',
    'author' => 'mickael.andrieu@exemple.com',
    'enabled' => true,
];

foreach ($recipe as $valeur) {
    echo $valeur . '<br>';
}
/**
 * AFFICHE
 * Cassoulet
 * Etape 1 : des flageolets, Etape 2 : ...
 * mickael.andrieu@exemple.com
 * 1
 */
?>
<p style="color: red;">Un tableau des tableaux</p>
<?php

$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => 'Etape 1 : des flageolets, Etape 2 : ...',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => '1. Faire revenir les oignons et la viande dans une cocotte. 2. Ajouter les épices, les légumes et l\'eau. 3. Laisser mijoter pendant 1h30.',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => '1. Aplatir les escalopes de veau. 2. Les tremper dans de l\'œuf battu puis dans de la chapelure. 3. Les faire frire dans de l\'huile chaude jusqu\'à ce qu\'elles soient dorées.',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Salade Romaine',
        'recipe' => '1. Laver et couper la laitue romaine. 2. Ajouter des croûtons, du parmesan râpé et une vinaigrette.',
        'author' => 'laurene.castor@exemple.com',
        'is_enabled' => false,
    ],
];

foreach($recipes as $recipe) {
    echo $recipe['title'] . '<br>' . ' contribué(e) par : ' . $recipe['author'] . '<br>' . $recipe['recipe'] . '<br><br>'; 
}
?>
// 
<?php
$recipe = [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
];

 // récupérer la clé de l'élément.
foreach($recipe as $property => $propertyValue)
{
    echo '[' . $property . '] vaut ' . $propertyValue . '<br>';
}
?>


<?php

$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
];

echo '<pre>';
print_r($recipes);
echo '</pre>';
?>

<p style="color: red;"> Rechercher dans un tableau</p>

<?php
$recipe = [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
];

if (array_key_exists('title', $recipe))
{
    echo 'La clé "title" se trouve dans la recette !';
}

if (array_key_exists('commentaires', $recipe))
{
    echo 'La clé "commentaires" se trouve dans la recette !';
}
?>
<br>
<?php
$users = [
    'Mathieu Nebra',
    'Mickaël Andrieu',
    'Laurène Castor',
];

if (in_array('Mathieu Nebra', $users))
{
    echo 'Mathieu fait bien partie des utilisateurs enregistrés !';
}

if (in_array('Arlette Chabot', $users))
{
    echo 'Arlette fait bien partie des utilisateurs enregistrés !';
}
?>
<br>
<?php
$users = [
    'Mathieu Nebra',
    'Mickaël Andrieu',
    'Laurène Castor',
];

$positionMathieu = array_search('Mathieu Nebra', $users);
echo '"Mathieu" se trouve en position ' . $positionMathieu . '<br>';

$positionLaurène = array_search('Laurène Castor', $users);
echo '"Laurène" se trouve en position ' . $positionLaurène . '<br>';
?>
<p style="color: red;">Afficher les recettes activées</p>
<?php
$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => 'Etape 1 : des flageolets !',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => 'Etape 1 : de la semoule',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => 'Etape 1 : prenez une belle escalope',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],
];
foreach ($recipes as $recipe) {
    if ($recipe['is_enabled']) {
        echo '<h1>Affichage des recettes activées</h1>';
        echo '<h2>' . $recipe['title'] . ' : ' . '</h2>' . '<br>' . $recipe['recipe'] . '<br>' . $recipe['author'] . '<br><br>';
    }
}
?>

<p style="color: red;">Manipulez des fonctions</p>
<?php // les fonctions
$recipe = 'Etape 1 : des flageolets ! Etape 2 : de la saucisse toulousaine';
$length = strlen($recipe);
 
 
echo 'La phrase ci-dessous comporte ' . $length . ' caractères :' . '<br><br>' . $recipe  . '<br><br>';
?>
<?php
echo str_replace('c', 'C', 'le cassoulet, c\'est très bon' .'<br>');
?>
<h3 style= "color : blue" ;>La fonction <strong> sprintf </strong> permet de formater une chaîne de caractères.</h3>
<?php
$recipe = [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
];

echo sprintf(
    '%s par "%s" : %s',
    $recipe['title'],
    $recipe['author'],
    $recipe['recipe']
);
?>
<br>
<!-- Récupérer la date -->
 <?php
 $aujourdhui = date('d/m/y');
 $time = date('H\h i');
 echo "Nous sommes le : {$aujourdhui} et il est {$time}";
 ?>
 <br>
 <h3>Exemple 1 : vérifiez la validité d'une recette</h3>
<?php

$recipe = [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
    'is_enabled' => true,
];

// encore mieux !
if (array_key_exists('is_enabled', $recipe)) {
    $isEnabled = $recipe['is_enabled'];
} else {
    $isEnabled = false;
}
?>

===============================================================================

<?php

$users = [
    [
        'full_name' => 'Mickaël Andrieu',
        'email' => 'mickael.andrieu@exemple.com',
        'age' => 34,
    ],
    [
        'full_name' => 'Mathieu Nebra',
        'email' => 'mathieu.nebra@exemple.com',
        'age' => 34,
    ],
    [
        'full_name' => 'Laurène Castor',
        'email' => 'laurene.castor@exemple.com',
        'age' => 28,
    ],
];

$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => 'Etape 1 : des flageolets !',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => 'Etape 1 : de la semoule',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => 'Etape 1 : prenez une belle escalope',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],
];

function displayAuthor(string $authorEmail, array $users): string
{
    foreach ($users as $user) {
        if ($authorEmail === $user['email']) {
            return $user['full_name'] . '(' . $user['age'] . ' ans)';
        }
    }
}

function isValidRecipe(array $recipe): bool
{
    if (array_key_exists('is_enabled', $recipe)) {
        $isEnabled = $recipe['is_enabled'];
    } else {
        $isEnabled = false;
    }

    return $isEnabled;
}

function getRecipes(array $recipes): array
{
    $valid_recipes = [];

    foreach ($recipes as $recipe) {
        if (isValidRecipe($recipe)) {
            $valid_recipes[] = $recipe;
        }
    }

    return $valid_recipes;
}

?>

<div class="container">
    <h1>Liste des recettes de cuisine</h1>

    <?php foreach (getRecipes($recipes) as $recipe) : ?>
        <article>
            <h3><?php echo $recipe['title']; ?></h3>
            <div><?php echo $recipe['recipe']; ?></div>
            <i><?php echo displayAuthor($recipe['author'], $users); ?></i>
        </article>
    <?php endforeach ?>

<?php require_once(__DIR__ . '/includes/footer.php'); ?>

  
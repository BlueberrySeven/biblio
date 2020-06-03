<?php ob_start() ?>

contenu page accueil

<?php  
$content = ob_get_clean();
$title = "Bibliothéque MGA";
require "template.php";
?>
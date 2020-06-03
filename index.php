<?php ob_start() ?>

coucou

<?php  
$content = ob_get_clean();
$title = "Bibliothéque MGA";
require "template.php";
?>
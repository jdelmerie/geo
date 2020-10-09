<?
require_once 'inc/header.inc.php';
?>

<div class="container">
    <div class="row text-center m-4">
        <p>Ce site représente un exercice réalisé en formation pour travailler le templating et les supers globales en PHP. En cliquant sur la liste "Voir les pays" dans la barre de navigation, sélectionnez un pays pour accéder à ses informations géographiques.</p>
    </div>
    <div>
        <? require 'pays.php' ?>
    </div>
 <?require 'inc/footer.inc.php'?>    
</div>
</body>
</html>
<?php
$title = "Supprimer client";
ob_start();
?>
<p>Voulez vous vraiment supprimer le client ?</p>
    <a class="btn btn-danger" href="index.php?page=destroy&id=<?php echo $id ?>">Valider la suppression</a>
    <a class="btn btn-warning" href="index.php?page=list">Annuler la suppression</a>
<?php
$container = ob_get_clean();
include_once 'views/layout.php';
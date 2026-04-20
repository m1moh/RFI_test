<?php
$cheminDuFichier = 'index.php';

if (file_exists($cheminDuFichier)) {
    $contenu = file_get_contents($cheminDuFichier);
    echo $contenu;
} else {
    echo "Le fichier n'existe pas.";
}
?>

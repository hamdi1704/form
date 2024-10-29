<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);
    $ddn = htmlspecialchars($_POST['ddn']);
    $cin = htmlspecialchars($_POST['cin']);
    $sex = $_POST['sex'];
    $checkbox= $_POST['checkbox'];
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage Information</title>
</head>
<body>
    <h2>Addichage d' Information</h2>
    <p><strong>Prenom:</strong> <?php echo $prenom; ?></p>
    <p><strong>nom:</strong> <?php echo $prenom; ?></p>
    <p><strong>Date de Naissance:</strong> <?php echo $ddn; ?></p>
    <p><strong>SEX:</strong> <?php echo $sex; ?></p>
    <p><strong>CHECKBOX:</strong> <?php echo $checkbox; ?></p>
</body>
</html>

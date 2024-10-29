<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <h2>Entrez Votre Information</h2>
    <form action="submit.php" method="POST">
        <label for="prenom">Prenom:</label>
        <input type="text" id="prenom" name="prenom" required><br><br>
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required><br><br>
        <label for="ddn">Date de Naissance:</label>
        <input type="date" id="ddn" name="ddn" required><br><br>
        <label for="cin">CIN:</label>
        <input type="number" id="cin" name="cin" required><br><br>
        <label>Sex:</label>
        <label for="sex_femme">Femme</label>
        <input type="radio" id="sex_femme" name="sex" value="femme" checked>
        <label for="sex_homme">Homme</label>
        <input type="radio" id="sex_homme" name="sex" value="homme" ><br><br>
        <label>Status:</label>
        <label for="checkbox">Etudiant</label>
        <input type="checkbox" name="checkbox"  value="Etudiant">
        <label for="checkbox">Enseignant</label>
        <input type="checkbox" name="checkbox" value="Enseignant" ><br><br>
        <input type="submit" value="Affichage">
    </form>
</body>
</html>

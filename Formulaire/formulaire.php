<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="formulaire.css"/>
        <title>Index</title>
    </head>
    <body>
        <h1>
            Exercice Formulaire
        </h1>

        <form action="validationFormulaire.php" method="POST">
            <label for="nom">* Nom:</label>
            <input name="nom" id="nom" type="text" required/>

            <label for="prenom">* Prénom:</label>
            <input name="prenom" id="prenom" type="text" required/>

            <label for="mail">* E-Mail:</label>
            <input name="mail" id="mail" type="mail" required/>

            <label for="sujet">* Sujet:</label>
            <input name="sujet" id="sujet" type="text" required/>

            <label for="message">* Message:</label>
            <textarea name="message" id="message" type="text" rows="15" required></textarea>

            <button type="submit">Valider</button>
        </form>

        <p>Les éléments comportant '*' sont obligatoires</p>
    </body>


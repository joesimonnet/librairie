<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/assets/css/styles.css">
    <title>Page Administration</title>
</head>
<body>
<h1>Tableau de bord administration</h1>

<h2>Publier un événement ou une actualité</h2>
<form action="#">
    <label for="title">Titre de l'actualité</label>
    <input type="text" id="title" name="title" placeholder="Titre">
    <label for="content">Contenu</label>
    <textarea name="content" id="content" cols="30" rows="10" placeholder="Contenu de l'actualité"></textarea>
    <input type="submit" value="Publier">
</form>


<h2>Envoyer une newsletter</h2>
<form action="#">
    <label for="title">Titre de la newsletter</label>
    <input type="text" id="title" name="title" placeholder="Titre">
    <label for="content">Contenu</label>
    <textarea name="content" id="content" cols="30" rows="10" placeholder="Contenu de la newsletter"></textarea>
    <input type="submit" value="Envoyer">
</form>


<h2>Ajouter un coup de coeur</h2>
<form action="#">
    <label for="title">Titre du livre</label>
    <input type="search" id="title" name="title" placeholder="Titre">
    <label for="content">Mon Avis</label>
    <textarea name="content" id="content" cols="30" rows="10" placeholder="Avis"></textarea>
    <input type="submit" value="Ajouter">
</form>

    
</body>
</html>
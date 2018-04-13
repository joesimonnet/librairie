<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Librairie Mot à Mot</title>
    <link rel="stylesheet" type="text/css" href="public/assets/css/style.css">
</head>
<body>

<h1>Page d'inscription</h1>

<form>
	<label>Votre nom:</label>
	<input type="text" name="firstname" placeholder="Votre nom" required>
	<label>Votre prenom:</label>
	<input type="text" name="surname" placeholder="Votre prenom" required>
	<label>Votre email:</label>
	<input type="email" name="email" placeholder="Votre email" required>
	<label>Votre mot de passe:</label>
	<input type="password" name="password" placeholder="Votre mot de passe" required>
	<label>Confirmer votre mot de passe:</label>
	<input type="password" name="passwordConfirm" placeholder="Confirmer votre mot de passe" required>
	<label>Votre téléphone:</label>
	<input type="tel" name="phone" placeholder="Votre téléphone">
	<label>Votre addresse:</label>
	<input type="text" name="adress" placeholder="Votre addresse">
	<label><input type="checkbox" name="newsletter"> S'inscrire à la newsletter ? </label>
	<button type="submit"> S'inscrire</button>
</form>

</body>
</html>
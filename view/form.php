<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ward me form</title>
    <link rel="stylesheet" href="styles/css/style.css">
</head>
<body>
    <header>
        <h1>Ward me form</h1>
        <p>Formulaire warde me</p>
    </header>

    <?php
    if (isset($_GET['sucess']) && $_GET['sucess'] == 1){
        include "component/popup.php";
    }
    ?>

    <div class="form">
        <form id="form" action="send" method='post'>
            <div class="form__container">
                <input class="form__double" type="text" name="name" placeholder="Nom" required>
                <input class="form__double" type="text" name="lastname" placeholder="Prénom" required>
            </div>
            <input class="form__input" type="number" name="age" placeholder="Age" required>
            
            <input class="form__input" type="text" name="location" placeholder="Où habitez vous" required>
            
            <div class="form__radio">
                <p>Genre :</p>
                <input type="radio" id="contactChoice1"
                name="sexe" value="homme" required>
                <label for="contactChoice1">Homme</label>
                <input type="radio" id="contactChoice2"
                name="sexe" value="femme" required>
                <label for="contactChoice2">Femme</label>
                <input type="radio" id="contactChoice3"
                name="sexe" value="autre" required>
                <label for="contactChoice3">Autre</label >
            </div>


            <select class='form__select' id="job" name="metier" required>
                <option class="option" value="">Quelle est votre métier</option>
                <option class="option" value="Cadre" required>Cadre </option>
                <option class="option" value="Professions intermédiaires" required>Professions intermédiaires</option>
                <option class="option" value="Ouvrier" required>Ouvrier</option>
                <option class="option" value="Sans Emploi" required>Sans Emploi</option>
                <option class="option" value="Artisans, commerçants, chef d'entreprise" required>Artisans, commerçants, chef d'entreprise</option>
                <option class="option" value="Agriculteur" required>Agriculteur</option>
                <option class="option" value="Retraité" required>Retraité </option>

            </select>
            
            <div class="form__radio">
                <p>Jouez vous au jeux video :</p>
                <input class="ecoute" type="radio" id="contactChoice4"
                name="play_game" value="oui" required>
                <label for="contactChoice4">oui</label>
                <input class="ecoute" type="radio" id="contactChoice5"
                name="play_game" value="non" required>
                <label for="contactChoice5">non</label>
            </div>
            
            <select class='form__select game_choice' id="game" name="type_game" required>
                <option class="option" value="">A quelle type de jeux jouez-vous</option>
                <option class="option" value="FPS">FPS</option>
                <option class="option" value="MOBA">MOBA</option>
                <option class="option" value="TPS">TPS</option>
                <option class="option" value="stratégie">Stratégie</option>
            </select>
             <div id="recreate-game"></div>
             <div id="recreate-hour"></div>
            <input class="form__input small hour_game" type="number" name="hour" placeholder="En moyenne, combien d'heures jouez-vous par semaine aux jeux vidéo (mobile inclus)" required>
            
            <div class="form__condition">
                <input type="checkbox" id="condition" name="check"  required>
                <label for="condition">J'ai lu et j'accepte les <a href="condition"> Conditions Générales</a> de WARD ME</label>
            </div>

            <input class="input__submit" type="submit">

        </form>
    </div>
    <script src="javascript/app.js"></script>
</body>
</html>
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
        <p>lorem ipsum</p>
    </header>

    <div class="form">
        <form action="" method='post'>
            <input class="form__input" type="number" name="age" placeholder="Votre Age">
            
            <input class="form__input" type="text" name="location" placeholder="Où habitez vous">
            
            <div class="form__radio">
                <p>Vous etes :</p>
                <input type="radio" id="contactChoice1"
                name="sexe" value="homme">
                <label for="contactChoice1">Homme</label>
                <input type="radio" id="contactChoice2"
                name="sexe" value="femme">
                <label for="contactChoice2">Femme</label>
                <input type="radio" id="contactChoice3"
                name="sexe" value="autre">
                <label for="contactChoice3">Autre</label>
            </div>


            <select class='form__select' id="cars" name="metier" >
                <option class="option" value="front">Quelle est votre metier</option>
                <option class="option" value="Cadre ">Cadre </option>
                <option class="option" value="Professions intermédiaires">Professions intermédiaires</option>
                <option class="option" value="Ouvrier">Ouvrier</option>
                <option class="option" value="Sans Emploi">Sans Emploi</option>
                <option class="option" value="Artisans, commerçants, chef d'entreprise">Artisans, commerçants, chef d'entreprise</option>
                <option class="option" value="Agriculteur">Agriculteur</option>
                <option class="option" value="Retraité">Retraité </option>

            </select>
            
            <div class="form__radio">
                <p>Jouez vous au jeux video :</p>
                <input type="radio" id="contactChoice1"
                name="play_game" value="oui">
                <label for="contactChoice1">oui</label>
                <input type="radio" id="contactChoice2"
                name="play_game" value="non">
                <label for="contactChoice2">non</label>
            </div>
            
            <select class='form__select' id="cars" name="type_game" >
                <option class="option" value="front">A quelle type de jeux jouez vous</option>
                <option class="option" value="FPS">FPS</option>
                <option class="option" value="MOBA">MOBA</option>
                <option class="option" value="TPS">TPS</option>
                <option class="option" value="stratégie">Stratégie</option>
            </select>
            
            <input class="form__input small" type="number" name="hour" placeholder="En moyenne, combien d'heures jouez-vous par semaine aux jeux vidéo (mobile inclus)">
            
            <input class="input__submit" type="submit">

        </form>
    </div>
</body>
</html>
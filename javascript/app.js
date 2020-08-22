let $close = document.querySelector("#close");
let $popup = document.querySelector(".popup");
let $form = document.querySelectorAll(".ecoute");
let $gameChoice = document.querySelector(".game_choice");
let $hourGame = document.querySelector(".hour_game");
let $forms = document.querySelector("#form");
let $secure_game = document.querySelector("#recreate-game");
let $secure_hour = document.querySelector("#recreate-hour");
console.log($gameChoice);
console.log($hourGame);

console.log("uiop");


if ($close){
    $close.addEventListener("click", ()=>{
    $popup.className = "close"
})
}


console.log($form);


console.log($forms);


for (let i = 0; i < $form.length; i++){
    $form[i].addEventListener("click", ()=>{
        if ($form[i].value === "non"){
            $gameChoice = document.querySelector(".game_choice");
            $hourGame = document.querySelector(".hour_game");
            $gameChoice.remove();
            $hourGame.remove();

        } else{
            $gameChoice = document.querySelector(".game_choice");
            $hourGame = document.querySelector(".hour_game");
            if ($gameChoice && $hourGame){

            } else {
                    let input_gamechoice = document.createElement("div");
                    input_gamechoice.innerHTML = `<select class='form__select game_choice' id="game" name="type_game" required>
                    <option class="option" value="">A quelle type de jeux jouez-vous</option>
                    <option class="option" value="FPS">FPS</option>
                    <option class="option" value="MOBA">MOBA</option>
                    <option class="option" value="TPS">TPS</option>
                    <option class="option" value="stratégie">Stratégie</option>
                    </select>`
                    $secure_game.appendChild(input_gamechoice);

                    let input_hour = document.createElement("div");
                    input_hour.innerHTML = `<input class="form__input small hour_game" type="number" name="hour" 
                    placeholder="En moyenne, combien 
                    d'heures jouez-vous par semaine aux jeux vidéo (mobile inclus)" required></input>`

                    $secure_hour.appendChild(input_hour);
            }
  
        
        }
        
    })
}
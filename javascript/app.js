$close = document.querySelector("#close");
$popup = document.querySelector(".popup");


$close.addEventListener("click", ()=>{
    $popup.className = "close"
})

console.log("good link");
console.log($popup);
console.log($close);


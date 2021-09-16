if (sessionStorage.getItem("FenetreAlcool") === null) {
  window.alert("L'alcool est dangereux pour la santé, buvez avec modération");
  sessionStorage.setItem("FenetreAlcool", "ok");
}

/* Sélection des éléments HTML */
let link = document.querySelector("#link");
let burger = document.querySelector("#burger");
let ulBurger = document.getElementById("list-burger");

/* gestionnaire d'événement sur le a#link pour venir changer l'attribution de la classe .open à la ul et au span#burger */
link.addEventListener("click", function (e) {
  e.preventDefault();
  burger.classList.toggle("open");
  ulBurger.classList.toggle("open");
});

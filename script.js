const popup = document.getElementById("popup");
const loginButton = document.getElementById("loginButton");
const closePopup = document.getElementById("closePopup");


loginButton.addEventListener("click", () => {
  popup.style.display = "flex";
});


closePopup.addEventListener("click", () => {
  popup.style.display = "none";
});
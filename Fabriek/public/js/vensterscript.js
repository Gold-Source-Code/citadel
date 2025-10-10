const closeSchaar = document.getElementById("schaar-close");
const Schaar = document.getElementById("schaar");

function schaarvenster(){
    Schaar.classList.add("open");
};

closeSchaar.addEventListener("click", () => {
    Schaar.classList.remove("open");
});
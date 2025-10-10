const openKBV = document.getElementById("kantbank-open");
const closeKBV = document.getElementById("kantbank-close");
const KBV = document.getElementById("kantbank");

openKBV.addEventListener("click", () => {
    KBV.classList.add("open");
});

closeKBV.addEventListener("click", () => {
    KBV.classList.remove("open");
});
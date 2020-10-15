const icons = document.querySelectorAll(".collapse__icon");
const collapseButtons = document.querySelectorAll(".collapse__button");

for (let index = 0; index < collapseButtons.length; index++) {
   collapseButtons[index].addEventListener("click", () => setCollapse(index));
}

function setCollapse(index) {
   const collapseContent = collapseButtons[index].nextElementSibling;

   if (localStorage.getItem("theme") === "dark") {
      collapseButtons[index].classList.toggle("collapse-btn-active-dark");

   } else {
      collapseButtons[index].classList.toggle("collapse-btn-active-light");
   }

   if (collapseContent.style.display === "block") {
      icons[index].innerHTML = "&#9650;";
      collapseContent.style.display = "none";

   } else {
      icons[index].innerHTML = "&#9660;";
      collapseContent.style.display = "block";
   }
}

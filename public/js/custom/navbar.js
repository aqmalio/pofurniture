const searchbar = document.querySelector(".searchbar");
const navbarItems = document.querySelector(".navbar__items");

document.querySelector(".toggle-menu").addEventListener("click", () => {
   navbarItems.classList.toggle("navbar--slide");

   if (navbarItems.classList[1] === "navbar--slide") {
      if (searchbar !== null) {
         searchbar.style.zIndex = 0;
         document.body.style.overflow = "hidden";
         
      } else {
         document.body.style.overflow = "hidden";
      }

   } else {
      if (searchbar !== null) {
         searchbar.style.zIndex = 1;
         document.body.style.overflow = "auto";

      } else {
         document.body.style.overflow = "auto";
      }
   }
});

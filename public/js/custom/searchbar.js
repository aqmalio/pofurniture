const navbar = document.querySelector(".navbar");
const searchInput = document.querySelector(".searchbar");

document.addEventListener("scroll", () => {
   if (this.scrollY >= 1) {
      navbar.style.opacity = "0";
      searchInput.style.zIndex = "3";
      searchInput.style.opacity = "1";
      searchInput.style.borderBottom = "2px solid #909090";

   } else {
      navbar.style.opacity = "1";
      searchInput.style.zIndex = "1";
      searchInput.style.opacity = "0";
   }
});

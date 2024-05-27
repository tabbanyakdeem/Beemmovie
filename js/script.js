// Toggle Class Aktive

const navbarNav = document.querySelector(".navbar-nav");
// Ketika Menu
document.querySelector("#menu").onclick = () => {
  navbarNav.classList.toggle("active");
};

// Klik Di Luar Sidebar Utk Menghilangkan Nav

const menu = document.querySelector("#menu");

document.addEventListener("click", function (e) {
  if (!menu.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
});

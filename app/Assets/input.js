function setTheme(darkMode) {
  if (darkMode) {
    document.documentElement.classList.add("dark");
    localStorage.setItem("theme", "dark");
  } else {
    document.documentElement.classList.remove("dark");
    localStorage.setItem("theme", "light");
  }
}

const savedTheme = localStorage.getItem("theme");
if (
  savedTheme === "dark" ||
  (!savedTheme && window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
  setTheme(true);
}

document.getElementById("theme-toggle").addEventListener("click", function () {
  const isDarkMode = document.documentElement.classList.contains("dark");
  setTheme(!isDarkMode);
});

document
  .getElementById("mobile-theme-toggle")
  .addEventListener("click", function () {
    const isDarkMode = document.documentElement.classList.contains("dark");
    setTheme(!isDarkMode);
  });

const mobileMenuButton = document.getElementById("mobile-menu-button");
const mobileCloseButton = document.getElementById("mobile-close-button");
const mobileMenu = document.getElementById("mobile-menu");
const mobileMenuContent = document.getElementById("mobile-menu-content");
const mobileMenuBackdrop = document.getElementById("mobile-menu-backdrop");
const menuIcon = document.querySelector(".menu-icon");
const closeIcon = document.querySelector(".close-icon");

function openMobileMenu() {
  mobileMenu.classList.remove("hidden");
  void mobileMenuContent.offsetWidth;

  setTimeout(() => {
    mobileMenuContent.classList.remove("-translate-x-full");
    mobileMenuContent.classList.add("translate-x-0");
    menuIcon.classList.add("hidden");
    closeIcon.classList.remove("hidden");
  }, 10);

  document.body.style.overflow = "hidden";
}

function closeMobileMenu() {
  mobileMenuContent.classList.remove("translate-x-0");
  mobileMenuContent.classList.add("-translate-x-full");
  menuIcon.classList.remove("hidden");
  closeIcon.classList.add("hidden");

  setTimeout(() => {
    mobileMenu.classList.add("hidden");
    document.body.style.overflow = "";
  }, 300);
}

mobileMenuButton.addEventListener("click", function () {
  if (mobileMenu.classList.contains("hidden")) {
    openMobileMenu();
  } else {
    closeMobileMenu();
  }
});

mobileCloseButton.addEventListener("click", closeMobileMenu);
mobileMenuBackdrop.addEventListener("click", closeMobileMenu);

let touchStartX = 0;
let touchEndX = 0;

mobileMenuContent.addEventListener(
  "touchstart",
  (e) => {
    touchStartX = e.changedTouches[0].screenX;
  },
  false
);

mobileMenuContent.addEventListener(
  "touchend",
  (e) => {
    touchEndX = e.changedTouches[0].screenX;
    handleSwipe();
  },
  false
);

function handleSwipe() {
  if (touchStartX - touchEndX > 50) {
    closeMobileMenu();
  }
}

// Handle Mobile Menu
const mobileMenuButton = document.getElementById("mobile-menu-button");
const mobileCloseButton = document.getElementById("mobile-close-button");
const mobileMenu = document.getElementById("mobile-menu");
const mobileMenuContent = document.getElementById("mobile-menu-content");
const mobileMenuBackdrop = document.getElementById("mobile-menu-backdrop");
const menuIcon = document.querySelector(".menu-icon");
const closeIcon = document.querySelector(".close-icon");

function openMobileMenu() {
  mobileMenu.classList.remove("hidden");
  setTimeout(() => {
    mobileMenuContent.classList.remove("-translate-x-full");
    menuIcon.classList.add("hidden");
    closeIcon.classList.remove("hidden");
  }, 10);
  document.body.style.overflow = "hidden";
}

function closeMobileMenu() {
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

// Theme Toggle Functionality
function setTheme(darkMode) {
  if (darkMode) {
    document.documentElement.classList.add("dark");
    localStorage.setItem("theme", "dark");
  } else {
    document.documentElement.classList.remove("dark");
    localStorage.setItem("theme", "light");
  }
}

// Initialize theme based on saved preference or system preference
const savedTheme = localStorage.getItem("theme");
if (
  savedTheme === "dark" ||
  (!savedTheme && window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
  setTheme(true);
}

// Desktop theme toggle
document.getElementById("theme-toggle").addEventListener("click", function () {
  const isDarkMode = document.documentElement.classList.contains("dark");
  setTheme(!isDarkMode);
});

// Mobile theme toggle
document
  .getElementById("mobile-theme-toggle")
  .addEventListener("click", function () {
    const isDarkMode = document.documentElement.classList.contains("dark");
    setTheme(!isDarkMode);
  });

// Navbar scroll behavior
window.addEventListener("scroll", function () {
  const navbar = document.getElementById("navbar");
  if (window.scrollY > 10) {
    navbar.classList.add(
      "bg-white/20",
      "dark:bg-neutral-900/20",
      "backdrop-blur-md",
      "shadow-sm"
    );
    navbar.classList.remove("bg-transparent");
  } else {
    navbar.classList.remove(
      "bg-white/20",
      "dark:bg-neutral-900/20",
      "backdrop-blur-md",
      "shadow-sm"
    );
    navbar.classList.add("bg-transparent");
  }
});

// Initialize navbar state based on current scroll position
if (window.scrollY > 10) {
  const navbar = document.getElementById("navbar");
  navbar.classList.add(
    "bg-white/20",
    "dark:bg-neutral-900/20",
    "backdrop-blur-sm"
  );
  navbar.classList.remove("bg-transparent");
}

function toggleMobileMenu() {
    const menu = document.getElementById("mobileNav");
    if (menu.classList.contains("w3-hide")) {
      menu.classList.remove("w3-hide");
      menu.classList.add("w3-show");
    } else {
      menu.classList.remove("w3-show");
      menu.classList.add("w3-hide");
    }
  }


function goToCategory(category) {
    window.location.href = 'book.html?category=' + encodeURIComponent(category);
  }


  function setTheme(mode) {
    if (mode === 'dark') {
      document.body.classList.add('dark-theme');
      document.body.classList.remove('light-theme');
    } else {
      document.body.classList.add('light-theme');
      document.body.classList.remove('dark-theme');
    }
    localStorage.setItem("theme", mode);
  }

  // Load saved theme or default to dark
  window.onload = function () {
    const savedTheme = localStorage.getItem("theme") || "dark";
    setTheme(savedTheme);
  };







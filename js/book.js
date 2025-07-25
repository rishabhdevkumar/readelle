
  function filterBooks(category) {
    const allCards = document.getElementsByClassName('book-card');
    const categories = ["all", "science", "poetry"];

    for (let i = 0; i < allCards.length; i++) {
      const card = allCards[i];
      const cardCategory = card.getAttribute('data-category').toLowerCase();
      card.style.display = (category === "all" || cardCategory === category) ? "" : "none";
    }

    for (let i = 0; i < categories.length; i++) {
      const btn = document.getElementById("btn-" + categories[i]);
      if (btn) btn.classList.remove("w3-black");
    }

    const activeBtn = document.getElementById("btn-" + category);
    if (activeBtn) activeBtn.classList.add("w3-black");
  }

  function setupCategoryButtons() {
    const categories = ["all", "science", "poetry"];
    for (let i = 0; i < categories.length; i++) {
      const btn = document.getElementById("btn-" + categories[i]);
      if (btn) {
        btn.onclick = function () {
          filterBooks(categories[i]);
          history.replaceState(null, '', '?category=' + categories[i]);
        };
      }
    }
  }

  window.onload = function () {
    setupCategoryButtons();
    const urlParams = new URLSearchParams(window.location.search);
    const selectedCategory = urlParams.get("category")?.toLowerCase() || "all";
    filterBooks(selectedCategory);
  };



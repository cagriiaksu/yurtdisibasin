document.addEventListener("DOMContentLoaded", () => {
  const mobileMenuToggle = document.querySelector(".mobile-menu-toggle");
  const mobileMenu = document.querySelector(".mobile-menu");
  const mobileMenuClose = document.querySelector(".mobile-menu-close");
  if (mobileMenuToggle && mobileMenu && mobileMenuClose) {
    mobileMenuToggle.addEventListener("click", () => {
      mobileMenu.classList.add("active");
      document.body.style.overflow = "hidden";
    });
    mobileMenuClose.addEventListener("click", () => {
      mobileMenu.classList.remove("active");
      document.body.style.overflow = "";
    });
  }

  const tabButtons = document.querySelectorAll(".tab-btn");
  if (tabButtons.length > 0) {
    tabButtons.forEach((button) => {
      button.addEventListener("click", function () {
        const tabId = this.dataset.tab;
        document.querySelectorAll(".tab-btn").forEach((btn) => btn.classList.remove("active"));
        document.querySelectorAll(".tab-pane").forEach((pane) => pane.classList.remove("active"));
        this.classList.add("active");
        document.getElementById(tabId).classList.add("active");
      });
    });
  }

  const quantityInput = document.getElementById("quantity");
  const minusBtn = document.querySelector(".quantity-btn.minus");
  const plusBtn = document.querySelector(".quantity-btn.plus");
  if (quantityInput && minusBtn && plusBtn) {
    minusBtn.addEventListener("click", () => {
      const value = Number.parseInt(quantityInput.value);
      if (value > 1) quantityInput.value = value - 1;
    });
    plusBtn.addEventListener("click", () => {
      const value = Number.parseInt(quantityInput.value);
      quantityInput.value = value + 1;
    });
  }

  const addToCartBtn = document.getElementById("add-to-cart");
  if (addToCartBtn) {
    addToCartBtn.addEventListener("click", () => {
      const quantity = document.getElementById("quantity").value;
      showToast(`${quantity} adet ürün sepete eklendi`);
      const cartBadge = document.querySelector(".social-icon.cart .badge");
      if (cartBadge) {
        const currentCount = Number.parseInt(cartBadge.textContent);
        cartBadge.textContent = currentCount + Number.parseInt(quantity);
      }
    });
  }

  const loadMoreBtn = document.querySelector(".btn-load-more");
  if (loadMoreBtn) {
    loadMoreBtn.addEventListener("click", function () {
      const reviewList = document.querySelector(".review-list");
      this.textContent = "Yükleniyor...";
      this.disabled = true;
      setTimeout(() => {
        for (let i = 0; i < 3; i++) {
          const reviewItem = document.createElement("div");
          reviewItem.className = "review-item";
          reviewItem.innerHTML = `
            <div class="review-header">
              <div class="reviewer">
                <div class="reviewer-avatar">
                  <img src="https://via.placeholder.com/50" alt="Kullanıcı">
                </div>
                <div class="reviewer-info">
                  <h4>Kullanıcı ${Math.floor(Math.random() * 100)}</h4>
                  <div class="review-stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </div>
              </div>
              <div class="review-date">${new Date().toLocaleDateString()}</div>
            </div>
            <div class="review-content">
              <p>Harika bir hizmet! Çok memnun kaldım ve kesinlikle tekrar tercih edeceğim.</p>
            </div>
          `;
          reviewList.appendChild(reviewItem);
        }
        this.textContent = "Daha Fazla Yorum Yükle";
        this.disabled = false;
        showToast("Yeni yorumlar yüklendi");
      }, 1500);
    });
  }

  const table = $('#example').DataTable({
    responsive: true,
    lengthMenu: [5, 10, 25, 50],
    pageLength: 10,
    order: []
  });

  $.fn.dataTable.ext.search.push((settings, data) => {
    const name = $('#filter-name').val().toLowerCase();
    const minIdx = parseInt($('#filter-index-min').val(), 10);
    const maxIdx = parseInt($('#filter-index-max').val(), 10);
    const reg = $('#filter-registered').val();
    const type = $('#filter-type').val();
    const minP = parseFloat($('#filter-price-min').val());
    const maxP = parseFloat($('#filter-price-max').val());

    const rowName = data[0].toLowerCase();
    const rowIdx = parseInt(data[1].replace(/\./g,''), 10);
    const rowReg = data[2];
    const rowType = data[6];
    const rowPrice = parseFloat(data[7].replace(/\./g,''));

    if (name && rowName.indexOf(name) === -1) return false;
    if (!isNaN(minIdx) && rowIdx < minIdx) return false;
    if (!isNaN(maxIdx) && rowIdx > maxIdx) return false;
    if (reg && rowReg !== reg) return false;
    if (type && rowType !== type) return false;
    if (!isNaN(minP) && rowPrice < minP) return false;
    if (!isNaN(maxP) && rowPrice > maxP) return false;
    return true;
  });

  document.getElementById('btn-apply').addEventListener('click', () => {
    table.draw();
  });

  document.getElementById('btn-clear').addEventListener('click', () => {
    document.querySelectorAll('.filter-item input, .filter-item select').forEach(el => el.value = '');
    table.draw();
  });
});

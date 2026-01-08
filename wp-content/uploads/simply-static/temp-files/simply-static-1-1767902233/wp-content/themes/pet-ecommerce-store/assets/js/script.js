jQuery(document).ready(function($) {
  var scroll = $(window).scrollTop();
  var scrollup = $('.scroll-top');
  /*------------------------------------------------
            Scroll Top
  ------------------------------------------------*/
  scrollup.click(function () {
    $('html, body').animate({
      scrollTop: '0px'
    }, 800);
    return false;
  });
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll >= 200) {
      scrollup.fadeIn();
    } else {
      scrollup.fadeOut();
    }
  });
});

// Image Slider
jQuery(document).ready(function() {
  jQuery('.slider-section .owl-carousel').owlCarousel({
    loop: true,
    margin: 40,
    nav: true,
    navText: ["<i class='fa-solid fa-square-caret-left'></i>", "<i class='fa-solid fa-square-caret-right'></i>"], 
    dots: true,
    rtl: false,
    responsive: {
      0: { 
        items: 1 
      },
      768: { 
        items: 3
      }
    },
    autoplay: true,
    center: true
  });
});

// Product Slider
jQuery(document).ready(function() {
  jQuery('.product-section .owl-carousel').owlCarousel({
    loop: true,
    margin: 40,
    nav: true,
    navText: ["<i class='fa-solid fa-square-caret-left'></i>", "<i class='fa-solid fa-square-caret-right'></i>"], 
    dots: false,
    rtl: false,
    responsive: {
      0: { 
        items: 1 
      },
      600: { 
        items: 2,
        margin: 20
      },
      992: { 
        items: 3,
        margin: 15
      },
      1200: { 
        items: 3,
        margin: 40
      }
    },
    autoplay: true,
  });
});

//  Single Product Link
document.addEventListener("click", function(e) {
  const pet_ecommerce_store_btn = e.target.closest(".product-section .products-main-box .product-box .product-img-content .product-btn");
  if (!pet_ecommerce_store_btn) return;

  const pet_ecommerce_store_productItem = pet_ecommerce_store_btn.closest("li.product");
  if (!pet_ecommerce_store_productItem) return;

  const pet_ecommerce_store_productLink = pet_ecommerce_store_productItem.querySelector("a[href*='/product/']");
  if (pet_ecommerce_store_productLink) {
    window.location.href = pet_ecommerce_store_productLink.getAttribute("href");
  }
});

// Slider
jQuery(document).ready(function() {
  jQuery('.testimonial-section .owl-carousel').owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    navText: ["<i class='fa-solid fa-angles-left'></i>", "<i class='fa-solid fa-angles-right'></i>"], 
    dots: true,
    rtl: false,
    responsive: {
    0: { 
      items: 1 
    },
    600: { 
      items: 2 
    },
    992: { 
      items: 3 
    },
    1200: { 
      items: 4 
    }
  },
    autoplay: true,
  });
});

jQuery(document).ready(function() {
  jQuery('.latest-news .owl-carousel').owlCarousel({
    loop: true,
    margin: 30,
    nav: false,
    dots: false,
    rtl: false,
    responsive: {
    0: { 
      items: 1 
    },
    600: { 
      items: 2 
    },
    992: { 
      items: 3 
    }
  },
    autoplay: true,
  });
});
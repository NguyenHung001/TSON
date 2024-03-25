
// Move Slide
let slideIndex = 0;
showSlides();
function showSlides() {
  let i;
  let slides = document.getElementsByClassName("slide__item");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }
  slides[slideIndex - 1].style.display = "block";
  setTimeout(showSlides, 4000);
}

// Back to top
$(document).ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop()) {
      $(".backtotop").fadeIn();
    } else {
      $(".backtotop").fadeOut();
    }
  });
  $(".backtotop").click(function () {
    $("html, body").animate(
      {
        scrollTop: 0,
      },3000
    );
  });
});


function plusProduct() {
  let qualityEle = document.getElementById("quality-text").innerHTML;
  let quality = Number(qualityEle);
  quality++;
  document.getElementById("quality-text").innerHTML = quality;
   console.log(typeof(quality))
   changePrince(quality);
}

function minusProduct() {
  let qualityEle = document.getElementById("quality-text").innerHTML;
  let quality = Number(qualityEle);
  quality--;
  document.getElementById("quality-text").innerHTML = quality;
   console.log(quality)
   changePrince(quality);
}

function changePrince(quality) {
  let priceEle = document.getElementById("price").innerHTML;
  let price = parseFloat(priceEle);
  let totalPrice = 90.000*quality;
  document.getElementById("price").innerHTML = totalPrice.toFixed(3);
}

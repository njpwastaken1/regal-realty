$(function () {
    $('.single-item').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      autoplay: true,
      autoplaySpeed: 2000,
      dots: false,
      centerMode: true,
      centerPadding: '0',
    });
  });






// Get references to all elements with class names
const hoverImages = document.querySelectorAll('.hover-image');
const hoverDivs = document.querySelectorAll('.hover-div');

// Add hover event listeners to all elements
hoverImages.forEach((hoverImage, index) => {
    hoverImage.addEventListener('mouseover', () => {
        // When hovering over the image, move the corresponding div up
        hoverDivs[index].style.bottom = '50px'; // Adjust to your desired position
    });

    hoverImage.addEventListener('mouseout', () => {
        // When the mouse leaves the image, move the corresponding div back down
        hoverDivs[index].style.bottom = '0'; // Return to the original position
    });
});

function openNav() {
  document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
}

AOS.init();
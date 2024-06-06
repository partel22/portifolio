// Side Navbar
var menuBtn = document.getElementById("menuBtn");
var sideNav = document.getElementById("sideNav");

sideNav.style.right = "-250px";
menuBtn.onclick = function() {
    if (sideNav.style.right == "-250px") {
        sideNav.style.right = "0";
    }
    else{
        sideNav.style.right = "-250px";
    }
}


// Smooth Scroll
var scroll = new SmoothScroll('a[href*="#"]', {
    speed: 1000,
    speedAsDuration: true
});
    // JavaScript for toggling visibility of additional content
    function toggleReadMore() {
      var additionalContent = document.getElementById('additionalContent');
      var readMoreBtn = document.querySelector('.read-more-btn');

      if (additionalContent.style.display === 'none') {
        additionalContent.style.display = 'block';
        readMoreBtn.textContent = 'Read Less';
      } else {
        additionalContent.style.display = 'none';
        readMoreBtn.textContent = 'Read More';
      }
    }
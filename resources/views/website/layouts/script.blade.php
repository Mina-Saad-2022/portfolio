
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset('website/assets/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('website/assets/js/popper.js') }}"></script>
<script src="{{ asset('website/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('website/assets/js/stellar.js') }}"></script>
<script src="{{ asset('website/assets/vendors/lightbox/simpleLightbox.min.js') }}"></script>
<script src="{{ asset('website/assets/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('website/assets/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('website/assets/vendors/isotope/isotope-min.js') }}"></script>
<script src="{{ asset('website/assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('website/assets/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('website/assets/vendors/counter-up/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('website/assets/vendors/counter-up/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('website/assets/js/mail-script.js') }}"></script>

<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="{{ asset('website/assets/js/gmaps.min.js') }}"></script>
<script src="{{ asset('website/assets/js/theme.js') }}"></script>



{{-- to animation --}}
<script>
    // Wrap every letter in a span
var textWrapper = document.querySelector('.ml11 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml11 .line',
    scaleY: [0,1],
    opacity: [0.5,1],
    easing: "easeOutExpo",
    duration: 700
  })
  .add({
    targets: '.ml11 .line',
    translateX: [0, document.querySelector('.ml11 .letters').getBoundingClientRect().width + 10],
    easing: "easeOutExpo",
    duration: 700,
    delay: 100
  }).add({
    targets: '.ml11 .letter',
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=775',
    delay: (el, i) => 34 * (i+1)
  }).add({
    targets: '.ml11',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });

  // to show number by animation
  const scrollToTopButton = document.getElementById('scroll-to-top');

window.addEventListener('scroll', () => {
    if (window.scrollY > 100) {
        scrollToTopButton.classList.add('show');
        scrollToTopButton.classList.remove('hide');
    } else {
        scrollToTopButton.classList.remove('show');
        scrollToTopButton.classList.add('hide');
    }
});

scrollToTopButton.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});


// to slowmothen scroll
document.querySelectorAll('.scroll-link').forEach(link => {
            link.addEventListener('click', e => {
                e.preventDefault();
                const target = document.querySelector(link.getAttribute('href'));
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });


// animation for number

 // Get the placeholder element
 const animatedNumber = document.getElementById('animated-number');

// Set the starting value
let number = 0;

// Set the target value
const targetNumber = 100; // Change this to your desired target number

// Define the animation speed (in milliseconds)
const animationSpeed = 50; // Change this to control the speed

// Define the increment value
const increment = 1; // Change this to control the increment

// Start the animation
const interval = setInterval(() => {
    // Update the number
    number += increment;

    // Update the displayed value
    animatedNumber.textContent = number;

    // Check if the target number is reached
    if (number >= targetNumber) {
        // Stop the animation
        clearInterval(interval);
    }
}, animationSpeed);

</script>

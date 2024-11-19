    <div class="boxcenter">
        <div class="row mb footer">
            Copyright @ 2024
        </div>
    
    </div>

<!-- js slideshow -->
<script>
    let slideIndex = 0;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    const slides = document.querySelectorAll('.slide');
    if (n >= slides.length) {
        slideIndex = 0;
    }
    if (n < 0) {
        slideIndex = slides.length - 1;
    }
    slides.forEach((slide, index) => {
        slide.style.display = (index === slideIndex) ? 'block' : 'none';
    });
}

function autoShowSlides() {
    plusSlides(1);
    setTimeout(autoShowSlides, 2500);
}

document.addEventListener('DOMContentLoaded', () => {
    showSlides(slideIndex);
    autoShowSlides();
});
</script>
</body>
</html>
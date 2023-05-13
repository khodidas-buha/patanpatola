// Hero slider JS
$('.hero-slider').owlCarousel({
    animateOut: 'flipOutX',
    animateIn: 'fadeIn',
    items: 1,
    loop: true,
    nav: true,
    dots: true,
})

    // award slider
			
    const btn = document.querySelector("button.mobile-menu-button");
    const menu = document.querySelector(".mobile-menu");

    btn.addEventListener("click", () => {
    menu.classList.toggle("hidden");
    });
			
+// Hero slider JS
$('.hero-slider').owlCarousel({
    animateOut: 'flipOutX',
    animateIn: 'fadeIn',
    items:1,
    loop:true,
    nav:true,
    dots: true,
    })

    // slider awards
    const config = {
        type: 'carousel',
        startAt: 0,
        perView: 4,
        gap: 32,
        breakpoints: {
          1280: {
            perView: 3,
          },
          1024: {
            perView: 2,
          },
          768: {
            perView: 1,
          }
        }
      }
      new Glide('.glide', config).mount()
    
      // lider 2
      const config2 = {
        type: 'carousel',
        startAt: 0,
        perView: 2,
        gap: 32,
        breakpoints: {
          1280: {
            perView: 3,
          },
          1024: {
            perView: 2,
          },
          768: {
            perView: 1,
          }
        }
      }
      new Glide('.glide2', config2).mount()
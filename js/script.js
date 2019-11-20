const carousel = document.querySelectorAll('.carousel');
M.Carousel.init(carousel);

const slider = document.querySelectorAll('#slider');
M.Slider.init(slider, {
    indicators: false,
    height: 700,
    transistion: 600,
    interval: 3000
});

const quotes = document.querySelectorAll('#quotes');
M.Slider.init(quotes, {
    indicators: true,
    height: 200,
    transistion: 600,
    interval: 3000
})

const sidenav = document.querySelectorAll('.sidenav');
M.Sidenav.init(sidenav);

const materialbox = document.querySelectorAll('.materialboxed');
M.Materialbox.init(materialbox);

const paralax = document.querySelectorAll('.parallax');
M.Parallax.init(paralax);

const scroll = document.querySelectorAll('.scrollspy');
M.ScrollSpy.init(scroll, {
    scrollOffset: 50
});

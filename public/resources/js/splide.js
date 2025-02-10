document.addEventListener("DOMContentLoaded", function () {
  // Start Splide
  if (document.querySelector('.splide')) {
      let splide = new Splide(".splide", {
          type: "loop",
          focus: 0,
          gap: "1rem",
          perPage: 4,
          breakpoints: {
              640: {
                  perPage: 2,
              },
              480: {
                  perPage: 1,
              },
          },
      });
      splide.mount();
  }
});
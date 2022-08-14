$(document).ready(function () {
  $(".owl-carousel").owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    nav: false,
    dots: false,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 4,
      },
    },
  });
});

document
  .getElementById("agendaMenu")
  .addEventListener("click", function (event) {
    document.getElementById("agendaYears").classList.toggle("show");
    event.stopPropagation();
  });

document
  .getElementById("programMenu")
  .addEventListener("click", function (event) {
    document.getElementById("programYears").classList.toggle("show");
    event.stopPropagation();
  });

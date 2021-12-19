export default class HotProduct {
  constructor() {
    this.$slider = $(".slider");
  }
  init() {
    if (this.$slider.length) {
      this.addSlick();
    }
  }
  addSlick() {
    this.$slider.slick({
      infinite: true,
      speed: 300,
      arrows: true,
      slidesToShow: 4,
      slidesToScroll: 1,
      // adaptiveHeight: true,
      prevArrow:
        '<button type="button" class="btn slick-prev arrows"><span class="icomoon h1 icon-chevron-left"></span></button>',
      nextArrow:
        '<button type="button" class="btn slick-next arrows"><span class="icomoon h1 icon-chevron-right"></span></button>',
      responsive: [
        {
          breakpoint: 1440,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: true,
          },
        },
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
          },
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 428,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ],
    });
  }
}
new HotProduct().init();

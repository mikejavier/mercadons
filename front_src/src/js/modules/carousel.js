import $ from 'jquery'
import 'slick-carousel'

const $ctaCarousel = $('[data-carousel="cta"]')
const $productCarousel = $('[data-carousel="product"]')
const $promotiontCarousel = $('[data-carousel="promotion"]')

$ctaCarousel.slick({
	slidesToShow: 1,
	prevArrow: $('[data-carousel-btn-prev="cta"]'),
	nextArrow: $('[data-carousel-btn-next="cta"]')
})

$productCarousel.slick({
	slidesToShow: 4,
	prevArrow: $('[data-carousel-btn-prev="product"]'),
	nextArrow: $('[data-carousel-btn-next="product"]'),
	responsive: [
		{
			breakpoint: 1024,
			settings: {
				slidesToShow: 2
			}
		},
		{
			breakpoint: 580,
			settings: {
				slidesToShow: 1,
			}
		}
	]
})

$promotiontCarousel.slick({
	slidesToShow: 2,
	prevArrow: $('[data-carousel-btn-prev="promotion"]'),
	nextArrow: $('[data-carousel-btn-next="promotion"]'),
	responsive: [
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 1
			}
		}
	]
})

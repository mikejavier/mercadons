import $ from 'jquery'
import 'slick-carousel'

const $productCarousel = $('[data-carousel="product"]')

$productCarousel.slick({
	slidesToShow: 4,
	// prevArrow: $('[data-slider-prev-control="collection-products"]'),
	// nextArrow: $('[data-slider-next-control="collection-products"]'),
	// responsive: [
	// 	{
	// 		breakpoint: 768,
	// 		settings: {
	// 			slidesToShow: 2
	// 		}
	// 	},
	// 	{
	// 		breakpoint: 480,
	// 		settings: {
	// 			slidesToShow: 1,
	// 			centerPadding: '20%'
	// 		}
	// 	}
	// ]
})

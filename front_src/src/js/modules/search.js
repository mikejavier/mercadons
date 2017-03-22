import $ from 'jquery'

const $search = $('[data-toggle="search"]')

$search.on('click', function(e) {
	e.preventDefault()
	$(this).parent().children('.main-search').slideToggle('fast').attr('open', 'true')
})

$(document).on('click', function(e) {
	if($('.main-search').has(e.target).length !== 1 && e.target !== $search[0] && $('.main-search').attr('open')){
		return $('.main-search').slideToggle('fast').removeAttr('open')
	}
})

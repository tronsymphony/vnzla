document.querySelectorAll('.search-with-filter__filter').forEach(function (filter) {
	filter.addEventListener('click', function () {
		if (filter.dataset.id != 'Ver todo') {
			document.querySelectorAll('.search-with-filter__filter').forEach(function (button) {
				button.classList.remove('active')
			})
			filter.classList.add('active')
			document.querySelectorAll('.accordions-with-filter__item').forEach(function (accordion) {
				accordion.classList.add('none')
			})
			document
				.querySelectorAll(`.accordions-with-filter__item[data-category="${filter.dataset.id}"]`)
				.forEach(function (accordion) {
					accordion.classList.remove('none')
				})
		} else {
			document.querySelectorAll('.search-with-filter__filter').forEach(function (button) {
				button.classList.remove('active')
			})
			filter.classList.add('active')
			document.querySelectorAll(`.accordions-with-filter__item`).forEach(function (accordion) {
				accordion.classList.remove('none')
			})
		}
	})
})

document.querySelectorAll('.accordion').forEach(function (accordion) {
	const triger = accordion.querySelector('.accordion__triger')
	const content = accordion.querySelector('.accordion__content')
	triger.addEventListener('click', function () {
		accordion.classList.toggle('active')
	})
})
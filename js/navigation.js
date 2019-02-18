/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
button = document.querySelector('#menu-toggle');

button.addEventListener('click', menuToggle);
window.onscroll = function () { shrinkNav(window.scrollY); };
window.addEventListener('resize', resizeFun);


function menuToggle() {
	if (-1 !== button.className.indexOf('change')) {
		button.className = button.className.replace('change', '');
	} else {
		button.className += ' change';
	}
	popout = document.getElementById("popout").classList.toggle("popped");
	modDis = document.getElementById("modal");

	window.getComputedStyle(modDis).display == "none" ? modDis.style.display = "block" : modDis.style.display = "none";
}


//handle navbar transitions
function shrinkNav(scrollPos) {

	const headerEl = document.getElementById("nav");
	const menu = document.querySelector("#navDiv > .menu-topmenu-container");
	const toggle = document.getElementById("menu-toggle");

	if (document.getElementById("popout").classList.contains("popped")) menuToggle(); //pull the popout in

	if ((5 < scrollPos && !headerEl.classList.contains("smallNav")) ||
		(5 >= scrollPos && headerEl.classList.contains("smallNav"))) {
		toggleNav();
	}

	function toggleNav() {
		headerEl.classList.toggle("smallNav");
		if (480 > document.body.clientWidth) { return };
		menu.style.display = (window.getComputedStyle(menu).display == 'none' ? 'flex' : 'none');
		toggle.style.display = (window.getComputedStyle(toggle).display == 'none' ? 'inline-block' : 'none');
	}
}

//keeps menus correct if browser is resized
function resizeFun() {
	const menu = document.querySelector("#navDiv > .menu-topmenu-container");
	const toggle = document.getElementById("menu-toggle");

	if (5 < window.scrollY) return;
	if (480 > document.body.clientWidth && window.getComputedStyle(menu).display == 'flex') {
		menu.style.display = 'none';
		toggle.style.display = 'inline-block';
	}
	else if (480 < document.body.clientWidth && window.getComputedStyle(menu).display == 'none') {
		menu.style.display = 'flex';
		toggle.style.display = 'none';
	}
}
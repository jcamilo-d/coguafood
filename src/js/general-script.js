$(document).ready(function () {

	var idElement = window.location.hash;

	if ((idElement != undefined)) {

		var strElement = idElement.substring(0, 11);

		if (strElement == "#scroll-to-") {
			var scrollTo = idElement.substring(11);

			setTimeout(function () {
				$('html, body').animate({
					scrollTop: $("#" + scrollTo).offset().top - 90
				}, 950);
			}, 800);
		}
	}	
});
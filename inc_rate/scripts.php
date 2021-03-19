
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../styles/bootstrap-4.1.2/popper.js"></script>
    <script src="../styles/bootstrap-4.1.2/bootstrap.min.js"></script>
    <script src="../plugins/greensock/TimelineMax.min.js"></script>
    <script src="../plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="../plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="//cdn.rawgit.com/smashingboxes/OwlCarousel2/2.0.0-beta.3/dist/owl.carousel.js"></script>
    <script src="../js/custom.js"></script>
	<script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
	<script>
		// Listen for form submissions
		document.addEventListener('submit', function (event) {

			// Only run our code on .rating forms
			if (!event.target.matches('.rating')) return;

			// Prevent form from submitting
			event.preventDefault();

			// Get the selected star
			var selected = document.activeElement;
			if (!selected) return;
			var selectedIndex = parseInt(selected.getAttribute('data-star'), 10);

			// Get all stars in this form (only search in the form, not the whole document)
			
			var stars = Array.from(event.target.querySelectorAll('.star'));

			// Loop through each star, and add or remove the `.selected` class to toggle highlighting
			stars.forEach(function (star, index) {
				if (index < selectedIndex) {
					// Selected star or before it
					// Add highlighting
					star.classList.add('selected');
				} else {
					// After selected star
					// Remove highlight
					star.classList.remove('selected');
				}
			});

			// Remove aria-pressed from any previously selected star
			var previousRating = event.target.querySelector('.star[aria-pressed="true"]');
			if (previousRating) {
				previousRating.removeAttribute('aria-pressed');
			}

			// Add aria-pressed role to the selected button
			selected.setAttribute('aria-pressed', true);

		}, false);

		// Highlight the hovered or focused star
		var highlight = function (event) {

			// Only run our code on .rating forms
			var star = event.target.closest('.star');
			var form = event.target.closest('.rating');
			if (!star || !form) return;

			// Get the selected star
			var selectedIndex = parseInt(star.getAttribute('data-star'), 10);

			// Get all stars in this form (only search in the form, not the whole document)
			
			var stars = Array.from(form.querySelectorAll('.star'));

			// Loop through each star, and add or remove the `.selected` class to toggle highlighting
			stars.forEach(function (star, index) {
				if (index < selectedIndex) {
					// Selected star or before it
					// Add highlighting
					star.classList.add('selected');
				} else {
					// After selected star
					// Remove highlight
					star.classList.remove('selected');
				}
			});

		};

		// Listen for hover and focus events on stars
		document.addEventListener('mouseover', highlight, false);
		document.addEventListener('focus', highlight, true);

		// Reset highlighting after hover or focus
		var resetSelected = function (event) {

			// Only run our code on .rating forms
			if (!event.target.closest) return;
			var form = event.target.closest('.rating');
			if (!form) return;

			var stars = Array.from(form.querySelectorAll('.star'));

			// Get an existing rating if there is one
			var selected = form.querySelector('.star[aria-pressed="true"]');
			var selectedIndex = selected ? parseInt(selected.getAttribute('data-star'), 10) : 0;

			// Loop through each star, and add or remove the `.selected` class to toggle highlighting
			stars.forEach(function (star, index) {
				if (index < selectedIndex) {
					// Selected star or before it
					// Add highlighting
					star.classList.add('selected');
				} else {
					// After selected star
					// Remove highlight
					star.classList.remove('selected');
				}
			});

		};

		// Reset selected on mouse off and blur
		document.addEventListener('mouseleave', resetSelected, true);
		document.addEventListener('blur', resetSelected, true);

	</script>
</body>
</html>

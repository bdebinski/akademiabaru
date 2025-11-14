/**
 * Scroll Progress Bar
 * Updates the width of the progress bar based on scroll position
 */

document.addEventListener('DOMContentLoaded', function() {
	const progressBar = document.getElementById('scrollProgress');

	if (!progressBar) {
		return;
	}

	// Calculate and update progress
	function updateScrollProgress() {
		const windowHeight = window.innerHeight;
		const documentHeight = document.documentElement.scrollHeight;
		const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

		// Calculate scroll percentage
		const scrollableHeight = documentHeight - windowHeight;
		const scrollPercentage = (scrollTop / scrollableHeight) * 100;

		// Update progress bar width
		progressBar.style.width = scrollPercentage + '%';
	}

	// Update on scroll with throttle for performance
	let ticking = false;

	window.addEventListener('scroll', function() {
		if (!ticking) {
			window.requestAnimationFrame(function() {
				updateScrollProgress();
				ticking = false;
			});
			ticking = true;
		}
	});

	// Initial update
	updateScrollProgress();

	// Update on resize
	window.addEventListener('resize', updateScrollProgress);
});

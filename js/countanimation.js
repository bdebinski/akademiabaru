/**
 * Animated Counter for Statistics Section
 * Counts up numbers when they scroll into view
 */

document.addEventListener('DOMContentLoaded', function() {
	const counters = document.querySelectorAll('.stat-number');
	let hasAnimated = false;

	// Function to animate counting
	function animateCounter(counter) {
		const target = parseInt(counter.getAttribute('data-target'));
		const duration = 2000; // 2 seconds
		const increment = target / (duration / 16); // 60fps
		let current = 0;

		const updateCounter = () => {
			current += increment;
			if (current < target) {
				counter.textContent = Math.floor(current);
				requestAnimationFrame(updateCounter);
			} else {
				counter.textContent = target;
			}
		};

		updateCounter();
	}

	// Intersection Observer for triggering animation
	const observerOptions = {
		root: null,
		rootMargin: '0px',
		threshold: 0.3
	};

	const observer = new IntersectionObserver((entries) => {
		entries.forEach(entry => {
			if (entry.isIntersecting && !hasAnimated) {
				hasAnimated = true;
				counters.forEach((counter, index) => {
					setTimeout(() => {
						animateCounter(counter);
					}, index * 100); // Stagger the animations
				});
			}
		});
	}, observerOptions);

	// Observe the statistics section
	const statsSection = document.querySelector('.stats-section');
	if (statsSection) {
		observer.observe(statsSection);
	}
});

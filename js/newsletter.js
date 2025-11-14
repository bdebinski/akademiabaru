/**
 * Newsletter Signup Form Handler
 * Note: This is a frontend-only implementation.
 * To actually collect emails, integrate with a service like Mailchimp, Sendinblue, or your own backend.
 */

document.addEventListener('DOMContentLoaded', function() {
	const newsletterForm = document.getElementById('newsletterForm');
	const messageElement = document.getElementById('newsletterMessage');

	if (!newsletterForm) {
		return;
	}

	newsletterForm.addEventListener('submit', function(event) {
		event.preventDefault();

		const emailInput = newsletterForm.querySelector('input[type="email"]');
		const email = emailInput.value.trim();

		// Basic email validation
		const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

		if (!emailRegex.test(email)) {
			showMessage('Proszę podać prawidłowy adres email.', 'error');
			return;
		}

		// Show loading state
		const submitButton = newsletterForm.querySelector('button[type="submit"]');
		const originalButtonText = submitButton.textContent;
		submitButton.textContent = 'Zapisuję...';
		submitButton.disabled = true;

		// TODO: Replace this with actual backend integration
		// Example: Send to Mailchimp, Sendinblue, or your own API
		// fetch('/api/newsletter-subscribe', {
		//     method: 'POST',
		//     headers: { 'Content-Type': 'application/json' },
		//     body: JSON.stringify({ email: email })
		// })
		// .then(response => response.json())
		// .then(data => {
		//     if (data.success) {
		//         showMessage('Dziękujemy za zapisanie się!', 'success');
		//         emailInput.value = '';
		//     } else {
		//         showMessage('Wystąpił błąd. Spróbuj ponownie.', 'error');
		//     }
		// })
		// .catch(error => {
		//     showMessage('Wystąpił błąd. Spróbuj ponownie.', 'error');
		// })
		// .finally(() => {
		//     submitButton.textContent = originalButtonText;
		//     submitButton.disabled = false;
		// });

		// Simulated success for demonstration
		setTimeout(function() {
			showMessage('Dziękujemy za zapisanie się na newsletter!', 'success');
			emailInput.value = '';
			submitButton.textContent = originalButtonText;
			submitButton.disabled = false;

			// Hide message after 5 seconds
			setTimeout(function() {
				messageElement.textContent = '';
				messageElement.className = 'newsletter-message mt-2';
			}, 5000);
		}, 1000);
	});

	function showMessage(message, type) {
		messageElement.textContent = message;
		messageElement.className = 'newsletter-message mt-2 ' + type;
	}
});

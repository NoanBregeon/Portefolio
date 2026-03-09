import './bootstrap';
import './three-scene';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Accessibilité : désactivation des animations (pour layout public)
document.addEventListener('DOMContentLoaded', () => {
	const btn = document.getElementById('accessibility-toggle');
	if (!btn) return;
	btn.addEventListener('click', () => {
		const accessible = localStorage.getItem('accessibilityMode') === 'true';
		if (!accessible) {
			document.body.classList.add('accessibility-mode');
			localStorage.setItem('accessibilityMode', 'true');
			btn.textContent = 'Mode normal';
		} else {
			document.body.classList.remove('accessibility-mode');
			localStorage.setItem('accessibilityMode', 'false');
			btn.textContent = 'Mode accessible';
		}
	});
	// Appliquer le mode au chargement
	if (localStorage.getItem('accessibilityMode') === 'true') {
		document.body.classList.add('accessibility-mode');
		btn.textContent = 'Mode normal';
	}
});



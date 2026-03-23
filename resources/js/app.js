import './bootstrap';
import './three-scene';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Accessibilité : désactivation des animations (pour layout public)
document.addEventListener('DOMContentLoaded', () => {
	const btn = document.getElementById('accessibility-toggle');
	const reducedMotionQuery = window.matchMedia('(prefers-reduced-motion: reduce)');
	const getStoredAccessibilityMode = () => {
		const value = localStorage.getItem('accessibilityMode');
		if (value === 'true') return true;
		if (value === 'false') return false;
		return null;
	};

	const applyAccessibilityMode = (enabled) => {
		document.body.classList.toggle('accessibility-mode', enabled);
		localStorage.setItem('accessibilityMode', String(enabled));

		if (btn) {
			btn.textContent = enabled ? 'Mode normal' : 'Mode accessible';
		}

		window.dispatchEvent(new CustomEvent('accessibility-mode-changed', {
			detail: { enabled }
		}));
	};

	const isEnabled = getStoredAccessibilityMode() ?? reducedMotionQuery.matches;
	applyAccessibilityMode(isEnabled);

	if (!btn) return;

	btn.addEventListener('click', () => {
		applyAccessibilityMode(!document.body.classList.contains('accessibility-mode'));
	});
});



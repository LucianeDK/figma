document.addEventListener('DOMContentLoaded', () => {
	const menuToggle = document.querySelector('#mobile-menu-toggle');
	const mobileMenu = document.querySelector('#mobile-menu');

	if (menuToggle && mobileMenu) {
		const closeMobileMenu = () => {
			mobileMenu.classList.add('hidden');
			menuToggle.setAttribute('aria-expanded', 'false');
			menuToggle.setAttribute('aria-label', 'Abrir menu');
		};

		const toggleMobileMenu = () => {
			const isOpen = menuToggle.getAttribute('aria-expanded') === 'true';

			mobileMenu.classList.toggle('hidden', isOpen);
			menuToggle.setAttribute('aria-expanded', String(!isOpen));
			menuToggle.setAttribute('aria-label', isOpen ? 'Abrir menu' : 'Fechar menu');
		};

		menuToggle.addEventListener('click', toggleMobileMenu);
		mobileMenu.querySelectorAll('a').forEach((link) => {
			link.addEventListener('click', closeMobileMenu);
		});
		document.addEventListener('keydown', (event) => {
			if (event.key === 'Escape') {
				closeMobileMenu();
			}
		});
	}

	const tabs = document.querySelectorAll('.service-category-tab');
	const cards = document.querySelector('#service-cards');
	const errorMessage = document.querySelector('#service-filter-error');

	if (!tabs.length || !cards) {
		return;
	}

	const endpoint = cards.dataset.serviceEndpoint;

	const setActiveTab = (category) => {
		tabs.forEach((tab) => {
			const isActive = tab.dataset.category === category;

			tab.classList.toggle('border-brand-navy', isActive);
			tab.classList.toggle('bg-brand-navy', isActive);
			tab.classList.toggle('text-white', isActive);
			tab.classList.toggle('border-brand-line', !isActive);
			tab.classList.toggle('bg-white', !isActive);
			tab.classList.toggle('text-brand-navy', !isActive);
		});
	};

	const loadCards = async (category) => {
		const query = category ? `?category=${encodeURIComponent(category)}` : '';
		const url = `${endpoint}${query}`;

		cards.setAttribute('aria-busy', 'true');
		errorMessage.textContent = '';

		try {
			const response = await fetch(url, {
				headers: { Accept: 'application/json' },
			});

			if (!response.ok) {
				throw new Error('Falha ao carregar os serviços.');
			}

			const data = await response.json();
			cards.innerHTML = data.html;
			setActiveTab(category);

		} catch (error) {
			errorMessage.textContent = 'Não foi possível atualizar os serviços. Tente novamente.';
			console.error(error);
		} finally {
			cards.removeAttribute('aria-busy');
		}
	};

	tabs.forEach((tab) => {
		tab.addEventListener('click', (event) => {
			event.preventDefault();
			loadCards(tab.dataset.category);
		});
	});
});

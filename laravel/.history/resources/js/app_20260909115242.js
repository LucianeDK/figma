document.addEventListener('DOMContentLoaded', () => {
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

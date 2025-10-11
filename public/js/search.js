(function () {
    const input = document.getElementById('customer_search');
    if (!input) return;

    const cards = Array.from(document.querySelectorAll('[data-customer]'));
    const countEl = document.getElementById('customers_count');

    // cria "nenhum resultado" se não existir
    let noResults = document.getElementById('no_results');
    if (!noResults) {
        noResults = document.createElement('div');
        noResults.id = 'no_results';
        noResults.className = 'card p-8 text-center text-gray-600 hidden';
        noResults.textContent = 'Nenhum cliente encontrado.';
        const listWrapper = document.querySelector('#projects_list > div'); // div que contém os cards
        (listWrapper?.parentNode || document.body)
            .insertBefore(noResults, listWrapper?.nextSibling ?? null);
    }

    const normalize = (s) =>
        (s || '')
            .toString()
            .normalize('NFD')
            .replace(/[\u0300-\u036f]/g, '')
            .toLowerCase();

    const digitsOnly = (s) => (s || '').toString().replace(/\D+/g, '');

    function filter() {
        const raw = input.value.trim();
        const term = normalize(raw);
        const termDigits = digitsOnly(raw);

        let visible = 0;

        cards.forEach((card) => {
            const text = normalize(card.textContent);
            const nums = digitsOnly(card.textContent);
            const match = term
                ? text.includes(term) || (termDigits && nums.includes(termDigits))
                : true;

            card.classList.toggle('hidden', !match);
            if (match) visible++;
        });

        noResults.classList.toggle('hidden', visible !== 0);

        if (countEl) {
            countEl.textContent = `${visible} Cliente${visible === 1 ? '' : 's'}`;
        }
    }

    // debounce
    let t;
    input.addEventListener('input', () => {
        clearTimeout(t);
        t = setTimeout(filter, 150);
    });

    // ESC limpa a busca
    input.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            input.value = '';
            filter();
        }
    });

    // estado inicial
    filter();
})();

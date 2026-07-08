(function () {
    const table = document.getElementById('devices_table');
    if (!table) return;

    const input = document.getElementById('equipmentSearch');
    const rows = Array.from(table.querySelectorAll('tbody tr.equipment-row'));
    const emptyRow = document.getElementById('equipmentEmptyRow');
    const countEl = document.getElementById('equipmentCount');
    const filterTabs = Array.from(document.querySelectorAll('.equip-filter-tab'));

    // filtro de tipo atual: 'all' ou um device_id
    let currentFilter = 'all';

    const normalize = (s) =>
        (s || '')
            .toString()
            .normalize('NFD')
            .replace(/[̀-ͯ]/g, '')
            .toLowerCase();

    function apply() {
        const term = normalize(input ? input.value.trim() : '');
        let visible = 0;

        rows.forEach((row) => {
            const matchesType =
                currentFilter === 'all' ||
                row.getAttribute('data-device-id') === currentFilter;
            const matchesTerm = term ? normalize(row.textContent).includes(term) : true;
            const show = matchesType && matchesTerm;

            row.style.display = show ? '' : 'none';
            if (show) visible++;
        });

        if (emptyRow) emptyRow.style.display = visible === 0 ? '' : 'none';
        if (countEl) countEl.textContent = visible;
    }

    // busca instantânea (Item 6)
    if (input) {
        let t;
        input.addEventListener('input', () => {
            clearTimeout(t);
            t = setTimeout(apply, 150);
        });
        input.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                input.value = '';
                apply();
            }
        });
    }

    // filtros por tipo de dispositivo (Item 9)
    filterTabs.forEach((tab) => {
        tab.addEventListener('click', () => {
            currentFilter = tab.getAttribute('data-filter') || 'all';

            filterTabs.forEach((t) => {
                const active = t === tab;
                t.classList.toggle('active', active);
                const parent = t.closest('.equip-filter-item');
                if (parent) {
                    parent.classList.toggle('border-b-primary', active);
                    parent.classList.toggle('border-b-transparent', !active);
                }
                const title = t.querySelector('.menu-title');
                if (title) {
                    title.classList.toggle('text-primary', active);
                    title.classList.toggle('font-semibold', active);
                    title.classList.toggle('text-gray-700', !active);
                }
            });

            apply();
        });
    });

    // estado inicial
    apply();
})();

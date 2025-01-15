const activeFiltersContainer = document.getElementById('active-filters');
const clearAllButton = document.getElementById('clear-all-filters');
const filterOptions = document.querySelectorAll('#filter-options-container input[type="checkbox"]');

// Quando algum filtro for alterado
filterOptions.forEach(option => {
    option.addEventListener('change', () => {
        applyFilters(); // Aplica os filtros
        updateActiveFilters(); // Atualiza os filtros ativos
    });
});

// Função para aplicar os filtros
function applyFilters() {
    // Obtém os valores dos filtros selecionados
    const selectedSize = Array.from(document.querySelectorAll('input[name="size"]:checked')).map(el => el.value);
    const selectedColor = Array.from(document.querySelectorAll('input[name="color"]:checked')).map(el => el.value);

    const products = document.querySelectorAll('.product');

    products.forEach(product => {
        // Obtém os dados de cada produto
        const productSize = product.getAttribute('data-size').split(',');
        const productColor = product.getAttribute('data-color').split(',');

        // Verifica se o produto corresponde aos filtros selecionados
        let sizeMatch = selectedSize.length === 0 || selectedSize.some(size => productSize.includes(size));
        let colorMatch = selectedColor.length === 0 || selectedColor.some(color => productColor.includes(color));

        // Exibe ou oculta o produto com base nos filtros aplicados
        if (sizeMatch && colorMatch) {
            product.style.display = 'block';
        } else {
            product.style.display = 'none';
        }
    });

    updateActiveFilters(); // Atualiza a exibição dos filtros ativos
}

// Função para atualizar a exibição dos filtros ativos
function updateActiveFilters() {
    activeFiltersContainer.innerHTML = ''; // Limpa os filtros ativos anteriores
    let hasFilters = false;

    filterOptions.forEach(option => {
        if (option.checked) {
            hasFilters = true;
            
            // Pega o nome do filtro a partir do atributo data-name
            const filterName = option.name;
            const filterValue = option.value;
            const filterLabel = option.getAttribute('data-name'); // Pega o nome do filtro

            // Cria uma tag de filtro ativo
            const filterTag = document.createElement('div');
            filterTag.classList.add('active-filter-tag');
            filterTag.setAttribute('data-filter', filterName);
            filterTag.setAttribute('data-value', filterValue);
            filterTag.innerHTML = `${filterLabel} <span class="remove-filter">&times;</span>`;

            // Faz a tag de filtro ser clicável para remover o filtro
            filterTag.addEventListener('click', function() {
                const filterName = this.getAttribute('data-filter');
                const filterValue = this.getAttribute('data-value');
                const filterCheckbox = document.querySelector(`input[name="${filterName}"][value="${filterValue}"]`);

                if (filterCheckbox) {
                    filterCheckbox.checked = false; // Desmarca o checkbox
                    applyFilters(); // Reaplica os filtros
                }
            });

            activeFiltersContainer.appendChild(filterTag);
        }
    });

    // Exibe ou oculta o botão "Apagar todos" baseado se há filtros ativos
    clearAllButton.style.display = hasFilters ? 'block' : 'none';
}

// Evento para limpar todos os filtros
clearAllButton.addEventListener('click', () => {
    filterOptions.forEach(option => option.checked = false); // Desmarca todos os filtros
    applyFilters(); // Reaplica os filtros
});

// Função para alternar a exibição dos filtros
function toggleFilterSection(header) {
    header.classList.toggle('active');
    let options = header.nextElementSibling;
    if (options.style.display === "block") {
        options.style.display = "none";
    } else {
        options.style.display = "block";
    }
}

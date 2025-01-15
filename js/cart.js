let cart = [];
const FREE_SHIPPING_THRESHOLD = 290;

// Função para carregar o carrinho do localStorage
function loadCart() {
    const storedCart = localStorage.getItem('cart');
    if (storedCart) {
        cart = JSON.parse(storedCart);
        updateCartUI();
    }
}

// Carregar o carrinho do localStorage ao carregar a página
document.addEventListener('DOMContentLoaded', function() {
    loadCart();
    updateCartCount();
    toggleCartSidebar(false);

    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            toggleCartSidebar(false);
        }
    });
});

// Função para adicionar produtos ao carrinho
function addToCart(productId, productName, productPrice, productImage, selectedSize, quantity) {
    console.log("Função addToCart chamada");
    
    // Verificar se o productPrice existe e é uma string válida
    if (productPrice && typeof productPrice === 'string') {
        // Corrigir o valor de productPrice para garantir que ele seja numérico
        productPrice = productPrice.replace('R$', '').replace(',', '.');
    } else {
        console.error("Preço do produto inválido", productPrice);
        return;
    }
    
    // Garantir que o preço seja numérico
    const price = parseFloat(productPrice);

    // Verificar a existência do produto no carrinho
    const existingProductIndex = cart.findIndex(item => item.id === productId && item.size === selectedSize);

    if (existingProductIndex > -1) {
        // Produto já existe no carrinho com o mesmo tamanho, incrementa a quantidade em 1
        cart[existingProductIndex].quantity += parseInt(quantity);
        console.log(`Produto já existente no carrinho: ${productName} (Tamanho: ${selectedSize}). Nova quantidade: ${cart[existingProductIndex].quantity}`);
    } else {
        // Produto não existe no carrinho, adiciona como novo
        const newProduct = {
            id: productId,
            name: productName,
            price: price,
            image: productImage,
            size: selectedSize,
            quantity: parseInt(quantity)
        };
        cart.push(newProduct);
        console.log(`Adicionando novo produto ao carrinho: ${productName} (Tamanho: ${selectedSize})`);
    }

    // Salva o carrinho atualizado no localStorage
    saveCart();
    // Atualiza a interface do carrinho
    updateCartUI();
    // Atualiza a contagem no ícone do carrinho
    updateCartCount();
    // Exibe a barra lateral do carrinho
    toggleCartSidebar(true);
}

// Função para salvar o carrinho no localStorage
function saveCart() {
    localStorage.setItem('cart', JSON.stringify(cart));
    console.log("Carrinho salvo no localStorage:", cart);
}

// Atualizar a interface do carrinho
function updateCartUI() {
    const cartItemsContainer = document.getElementById('cart-items-container');
    const cartSubtotalElement = document.getElementById('cart-subtotal');
    const emptyCartMessage = document.getElementById('empty-cart-message');
    const freeShippingText = document.getElementById('free-shipping-text');
    const progressBar = document.getElementById('progress-bar');

    cartItemsContainer.innerHTML = '';
    let subtotal = 0;

    cart.forEach((item, index) => {
        subtotal += item.price * item.quantity;

        const itemElement = document.createElement('div');
        itemElement.classList.add('cart-item');

        itemElement.innerHTML = `
            <div class="cart-item-info">
                <img src="${item.image}" alt="${item.name}" class="cart-item-image" />
                <div class="cart-item-details">
                    <p class="cart-item-name">${item.name}</p>
                    <p class="cart-item-color-size">Tamanho: ${item.size}</p>
                    <div class="cart-item-controls">
                        <button onclick="updateItemQuantity(${index}, -1)" class="quantity-btn" ${item.quantity === 1 ? 'disabled' : ''}>-</button>
                        <span class="quantity-display">${item.quantity}</span>
                        <button onclick="updateItemQuantity(${index}, 1)" class="quantity-btn">+</button>
                    </div>
                </div>
                <button onclick="removeCartItem(${index})" class="remove-cart-item">Remover</button>
                <p class="cart-item-price">R$${(item.price * item.quantity).toFixed(2)}</p>
            </div>
        `;

        cartItemsContainer.appendChild(itemElement);
    });

    cartSubtotalElement.innerHTML = `Subtotal: R$${subtotal.toFixed(2)}`;

    if (cart.length > 0) {
        cartItemsContainer.style.display = 'block';
        cartSubtotalElement.parentElement.style.display = 'block';
        emptyCartMessage.style.display = 'none';
        updateFreeShippingProgress(subtotal);
    } else {
        cartItemsContainer.style.display = 'none';
        cartSubtotalElement.parentElement.style.display = 'none';
        emptyCartMessage.style.display = 'block';
        progressBar.style.width = '0%';
        freeShippingText.innerText = `Frete grátis a partir de R$${FREE_SHIPPING_THRESHOLD.toFixed(2)}`;
    }
    updateCartCount();
}

// Função para atualizar a quantidade de itens no ícone do carrinho
function updateCartCount() {
    const cartCountElement = document.getElementById('cart-count');
    const totalItems = cart.reduce((acc, item) => acc + item.quantity, 0);
    
    if (totalItems > 0) {
        cartCountElement.style.display = 'block';
        cartCountElement.innerText = totalItems;
    } else {
        cartCountElement.style.display = 'none';
    }
}

// Atualizar o progresso do frete grátis
function updateFreeShippingProgress(subtotal) {
    const freeShippingText = document.getElementById('free-shipping-text');
    const progressBar = document.getElementById('progress-bar');

    if (subtotal >= FREE_SHIPPING_THRESHOLD) {
        freeShippingText.innerHTML = `Você ganhou <strong style="text-transform: uppercase;">FRETE GRÁTIS!</strong>`;
        progressBar.style.width = '100%';
    } else {
        const remaining = FREE_SHIPPING_THRESHOLD - subtotal;
        freeShippingText.innerText = `Faltam R$${remaining.toFixed(2)} para ganhar frete grátis nas suas compras!`;

        const progressPercent = (subtotal / FREE_SHIPPING_THRESHOLD) * 100;
        progressBar.style.width = `${progressPercent}%`;
    }
}

// Atualizar a quantidade de itens no carrinho
function updateItemQuantity(index, change) {
    const item = cart[index];
    item.quantity += change;

    if (item.quantity < 1) {
        item.quantity = 1;
    }

    updateCartUI();
}

// Remover item do carrinho
function removeCartItem(index) {
    cart.splice(index, 1);
    saveCart();
    updateCartCount();
    updateCartUI();
}

// Alternar a visibilidade do carrinho
function toggleCartSidebar(show) {
    const cartSidebar = document.getElementById('cart-sidebar');
    const pageOverlay = document.getElementById('page-overlay');

    if (show) {
        cartSidebar.classList.add('visible');
        pageOverlay.classList.add('active');
    } else {
        cartSidebar.classList.remove('visible');
        pageOverlay.classList.remove('active');
    }
}

// Fechar o carrinho ao clicar no botão de fechar
document.getElementById('close-cart').addEventListener('click', function () {
    toggleCartSidebar(false);
});

// Adicionar evento para abrir o carrinho ao clicar no ícone do carrinho
document.getElementById('cart-icon').addEventListener('click', function (event) {
    event.preventDefault();
    updateCartUI();
    toggleCartSidebar(true);
});

// Fechar o carrinho ao clicar fora do sidebar
document.getElementById('page-overlay').addEventListener('click', function () {
    toggleCartSidebar(false);
});
<?php
/*
Template Name: Minha Conta
*/
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>?ver=<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/4c87557831.js" crossorigin="anonymous"></script>
    <style>
    .input-container select {
        background: url('<?php echo get_template_directory_uri(); ?>/img/icon/down-arrow.png') no-repeat;
        width: 100%;
        height: 56px;
        padding-top: 13px;
        padding-left: 19px;
        font-size: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        transition: border-color 0.2s ease;
        appearance: none;
        /* Aqui você usa PHP para gerar o caminho correto */
        background: url('<?php echo get_template_directory_uri(); ?>/img/icon/down-arrow.png') no-repeat;
        background-position: calc(100% - 20px) calc(50% + 6px);
        cursor: pointer;
    }
    </style>
</head>

<body>
    <section id="product-header">
        <div class="logo-container">
            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-preto.png" class="logo" alt="Logo"></a>
        </div>
        
        <div class="nav-menu">
            <ul id="navbar">
                <li><a href="<?php echo get_permalink(get_page_by_title('Drop Satus')); ?>">LANÇAMENTO</a></li>
                <li>
                    <a href="">MASCULINO</a>
                    <div class="dropdown">
                        <h4>ROUPAS MASCULINAS</h4>
                        <ul>
                            <li><a href="<?php echo get_permalink(get_page_by_title('Camisas Masculinas')); ?>">Camisas</a></li>
                            <li><a href="<?php echo get_permalink(get_page_by_title('Shorts Masculinos')); ?>">Shorts</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="">FEMININO</a>
                    <div class="dropdown">
                        <h4>ROUPAS FEMININAS</h4>
                        <ul>
                            <li>
                                <a href="<?php echo get_permalink(get_page_by_title('Tops Femininos')); ?>">Tops</a>
                                <li id="dropdown-specific"><a href="<?php echo get_permalink(get_page_by_title('Tops Prize')); ?>">Top Prize</a></li>
                                <li id="dropdown-specific"><a href="<?php echo get_permalink(get_page_by_title('Tops Sheer')); ?>">Top Sheer</a></li>
                            </li>
                            <li><a href="<?php echo get_permalink(get_page_by_title('Leggings Femininas')); ?>">Leggings</a></li>
                            <li><a href="<?php echo get_permalink(get_page_by_title('Shorts Femininos')); ?>">Shorts</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="">OFERTAS</a>
                    <div class="dropdown">
                        <ul>
                            <li><a href="">Ofertas Femininas</a></li>
                            <li><a href="">Ofertas Masculinas</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="">COLEÇÕES</a>
                    <div class="dropdown">
                        <h4>DROPS</h4>
                        <ul>
                            <li><a href="">Volans</a></li>
                            <li><a href="<?php echo get_permalink(get_page_by_title('Drop Satus')); ?>">Satus</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="">SOBRE NÓS</a></li>
            </ul>
        </div>
        
        <div class="nav-extra">
            <ul id="navbar-icons">
                <li id="search-icon"><a href=""><i class="fa-solid fa-magnifying-glass"></i></a></li>
                <li id="cart-icon-container">
                    <a href="#" id="cart-icon"><i class="fa-solid fa-bag-shopping"></i></a>
                    <span id="cart-count">0</span>
                </li>
                <li id="user-icon" class="user-icon-container">
                    <a href="#" id="open-login-modal">
                        <i class="fa-solid fa-user"></i>
                    </a>
                    <div class="hover-zone"></div>
                    <div id="user-menu" class="user-menu">
                        <ul>
                            <li><a href="/minha-conta">Minha Conta</a></li>
                            <li><a href="/minha-conta/meus-pedidos">Meus pedidos</a></li>
                            <li><a href="minha-conta/lista-desejos">Lista de Desejos <i class="fa-solid fa-heart"></i></a></li>
                            <li><a href="#" id="logout-btn">Sair <i class="fa-solid fa-right-from-bracket"></i></a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section id="produtos-promo-section">
        <div id="promo-banner">
            <div class="promo-text">
                <p>Frete grátis a partir de R$290,00</p>
                <p>Entregas para todo o Brasil</p>
                <p>Frete grátis a partir de R$290,00</p>
                <p>Entregas para todo o Brasil</p>
                <p>Frete grátis a partir de R$290,00</p>
                <p>Entregas para todo o Brasil</p>
                <p>Frete grátis a partir de R$290,00</p>
                <p>Entregas para todo o Brasil</p>
                <p>Frete grátis a partir de R$290,00</p>
                <p>Entregas para todo o Brasil</p>
                <p>Frete grátis a partir de R$290,00</p>
                <p>Entregas para todo o Brasil</p>
                <p>Frete grátis a partir de R$290,00</p>
                <p>Entregas para todo o Brasil</p>
                <p>Frete grátis a partir de R$290,00</p>
                <p>Entregas para todo o Brasil</p>
            </div>

            <div class="promo-text">
                <p>Frete grátis a partir de R$290,00</p>
                <p>Entregas para todo o Brasil</p>
                <p>Frete grátis a partir de R$290,00</p>
                <p>Entregas para todo o Brasil</p>
                <p>Frete grátis a partir de R$290,00</p>
                <p>Entregas para todo o Brasil</p>
                <p>Frete grátis a partir de R$290,00</p>
                <p>Entregas para todo o Brasil</p>
                <p>Frete grátis a partir de R$290,00</p>
                <p>Entregas para todo o Brasil</p>
                <p>Frete grátis a partir de R$290,00</p>
                <p>Entregas para todo o Brasil</p>
                <p>Frete grátis a partir de R$290,00</p>
                <p>Entregas para todo o Brasil</p>
                <p>Frete grátis a partir de R$290,00</p>
                <p>Entregas para todo o Brasil</p>
            </div>
        </div>
    </section>
    
    <section id="user-dashboard">
        <h2 id="user-dashboard-title">Minha Conta</h2>
        <div class="dashboard-container">
            <div class="sidebar">
                <ul>
                    <li id="overview-link" class="sidebar-item active">Visão Geral</li>
                    <li id="orders-link" class="sidebar-item">Meus Pedidos</li>
                    <li id="personal-info-link" class="sidebar-item">Dados Pessoais</li>
                    <li id="addresses-link" class="sidebar-item">Endereços</li>
                    <li id="wishlist-link" class="sidebar-item">Lista de Desejos</li>
                    <li><a href="<?php echo wp_logout_url(home_url()); ?>" class="logout-btn">Sair</a></li>
                </ul>
            </div>
    
            <div class="main-content-dashboard">
                <div id="overview" class="content-box active">
                    <h3>Bem-vindo(a) de volta!</h3>
                    <p>Aqui você pode visualizar e gerenciar todos os seus pedidos, endereços e detalhes da conta.</p>
                </div>

                <div id="orders" class="content-box">
                    <h3>Meus Pedidos</h3>
                    <?php
                        // Exemplo de exibição de pedidos
                        $args = array(
                            'post_type' => 'shop_order',
                            'posts_per_page' => 5,
                            'post_status' => 'wc-completed',
                            'author' => get_current_user_id(),
                        );
                        $orders = new WP_Query($args);
                        if ($orders->have_posts()) :
                            while ($orders->have_posts()) : $orders->the_post();
                                $order = wc_get_order(get_the_ID());
                                echo '<p>Pedido #' . $order->get_id() . ' - Total: ' . $order->get_total() . '</p>';
                            endwhile;
                        else :
                            echo '<p>Você ainda não fez nenhum pedido.</p>';
                        endif;
                        wp_reset_postdata();
                    ?>
                </div>

                <div id="personal-info" class="content-box">
                    <h3>Dados Pessoais</h3>
                    <p>Nome: <?php echo $current_user->display_name; ?></p>
                    <p>Email: <?php echo $current_user->user_email; ?></p>
                    <p>Data de Registro: <?php echo $current_user->user_registered; ?></p>
                </div>

                <div id="addresses" class="content-box">
                    <div id="enderecos-header" style="display: none;">
                        <h3 id="addresses-title">Endereços</h3>
                    </div>
                    <div id="enderecos-view">
                        <p>Nenhum endereço cadastrado!</p>
                        <button id="add-address-btn" class="find-products-btn">Adicionar Endereço</button>
                    </div>
                    
                    <div id="address-form" class="context-box" style="display: none;">
                        <div id="adicionar-endereco-header" style="display: none;">
                            <h3>Adicionar um novo endereço</h3>
                        </div>
                        <form id="add-endereco-form">
                            <div class="input-container">
                                <input type="text" id="first-name" placeholder=" " required>
                                <label for="first-name">Nome</label>
                                <div class="error-message" id="first-name-error" style="display> none;"></div>
                            </div>
                            <div class="input-container">
                                <input type="text" id="last-name" placeholder=" " required>
                                <label for="last-name">Sobrenome</label>
                                <div class="error-message" id="last-name-error" style="display: none;"></div>
                            </div>
                            <div class="input-container">
                                <input type="text" id="cpf" placeholder=" " required>
                                <label for="cpf">CPF</label>
                                <div class="error-message" id="cpf-error" style="display: none;"></div>
                            </div>
                            <div class="input-container">
                                <input type="tel" id="phone" placeholder=" " required>
                                <label for="phone">Telefone</label>
                                <div class="error-message" id="phone-error" style="display: none;"></div>
                            </div>
                            <div class="input-container">
                                <select id="country" required>
                                    <option value="br">Brasil</option>
                                </select>
                                <label for="country">País</label>
                            </div>
                            <div class="input-container">
                                <input type="text" id="cep" placeholder=" " required>
                                <label for="cep">CEP</label>
                                <div class="error-message" id="cep-error" style="display: none;"></div>
                            </div>
                            <a href="https://buscacepinter.correios.com.br/app/endereco/index.php?t#" target="_blank" id="link-buscar-cep">Não sabe seu CEP?</a>
                            <div class="input-container">
                                <input type="text" id="address" placeholder=" " required>
                                <label for="address">Endereço</label>
                                <div class="error-message" id="address-error" style="display: none;"></div>
                            </div>
                            <div class="input-container">
                                <input type="text" id="number" placeholder=" " required>
                                <label for="number">Número</label>
                                <div class="error-message" id="number-error" style="display: none;"></div>
                            </div>
                            <div class="input-container">
                                <input type="text" id="complement" placeholder=" ">
                                <label for="complement">Complemento</label>
                            </div>
                            <div class="input-container">
                                <input type="text" id="neighborhood" placeholder=" " required>
                                <label for="neighborhood">Bairro</label>
                                <div class="error-message" id="neighborhood-error" style="display: none;"></div>
                            </div>
                            <div class="input-container">
                                <input type="text" id="city" placeholder=" " required>
                                <label for="city">Cidade</label>
                                <div class="error-message" id="city-error" style="display: none;"></div>
                            </div>
                            <div class="input-container">
                                <select id="state" required>
                                    <option value="" disabled selected>Selecione o Estado</option>
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                                </select>
                                <label for="state">Estado</label>
                                <div class="error-message" id="state-error" style="display: none;"></div>
                            </div>
                            <div class="form-buttons">
                                <button type="submit" id="submit-adress" class="find-products-btn">Adicionar Endereço</button>
                                <button type="button" id="cancel-address" class="find-products-btn">Cancelar</button>
                            </div>
                        </form>
                    </div>
                    <div id="enderecos-container" style="display: flex; flex-wrap: wrap; gap: 20px;"></div>
                </div>

                <div id="wishlist" class="content-box">
                    <h3>Minha Lista de Desejos</h3>
                </div>
            </div>
        </div>
    </section>

    <section id="social-media">
        <div class="media-title">
             <img src="<?php echo get_template_directory_uri(); ?>/img/alis - frase vectorizada_Prancheta 1 cópia (1).png" alt="">
        </div>
        
        <div class="media-subtitle">
            <div id="subt-text">
                <p>Nossas redes sociais: </p>
            </div>

            <div class="social-icons">
                <ul id="soc-netw-icons">
                    <li><a href="https://www.instagram.com/alisoficiall" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="https://www.tiktok.com/@alisoficiall" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-tiktok"></i></a></li>
                    <li><a href="https://www.facebook.com/profile.php?id=61560905203824&mibextid=LQQJ4d" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="https://wa.link/52lhlp" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-whatsapp"></i></a></li>
                </ul>
            </div>
        </div>
    </section>

    <footer class="section-p1">
        <div class="top-footer">
            <div class="newsletter">
                <div class="news-text">
                    <p>Gostou dos nossos produtos? Cadastre-se e fique por dentro das nossas novidades e ofertas.</p>
                </div>
    
                <div class="form">
                    <input type="email" placeholder="Insira seu e-mail" class="newsletter-input">
                    <button class="newsletter-btn">Cadastrar</button>
                    <a href=""><i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="bottom-footer">
            <div class="col">
                <h4>Contato</h4>
                <p><strong>E-mail:</strong> alisoriginalfitness@gmail.com</p>
                <p><strong>Whatsapp:</strong> +55 (85) 92001-4169</p>
                <p><strong>Horário de atendimento:</strong> de segunda à sábado <br> 08:00-18:00</p>
            </div>

            <div class="col">
                <h4>Dúvidas</h4>
                <a href="">Sobre nós</a>
                <a href="">Informações de entrega</a>
                <a href="">Política de Privacidade</a>
                <a href="">Termos & Condições</a>
                <a href="">Fale Conosco</a>
            </div>
    
            <div class="col">
                <h4>Minha Conta</h4>
                <a href="">Entrar</a>
                <a href="">Ver Carrinho</a>
                <a href="">Minha Lista de Desejos</a>
                <a href="">Rastrear Pedido</a>
                <a href="">Ajuda</a>
            </div>

            <div class="col">
                <h4>Formas de Pagamento</h4>
                <div class="pay-icons">
                    <img class="visa-img" src="<?php echo get_template_directory_uri(); ?>/img/pay/visa-logo.png" alt="">
                    <img class="pix-img" src="<?php echo get_template_directory_uri(); ?>/img/pay/logo-pix.png" alt="">
                    <img class="mastercard-img" src="<?php echo get_template_directory_uri(); ?>/img/pay/mastercard-logo.png" alt="">
                    <img class="paypal-img" src="<?php echo get_template_directory_uri(); ?>/img/pay/paypal-logo.png" alt="">
                </div>
            </div>
        </div>

        <div id="copyright">
            <p>CNPJ "XXXXXXXX" - © 2024 Alis - Todos os direitos reservados.</p>
            <p>Desenvolvido por João Lucas Paiva</p>
        </div>
    </footer>
    
    <div id="page-overlay"></div>

    <div id="cart-sidebar" class="cart-sidebar">
        <div class="cart-sidebar-header">
            <h3>CARRINHO</h3>
            <button id="close-cart" class="close-cart-btn">&times;</button>
        </div>
        
        <div id="free-shipping-container">
            <p id="free-shipping-text">Frete grátis a partir de R$290,00</p>
            <div id="progress-bar-container">
                <div id="progress-bar"></div>
            </div>
        </div>
        
        <div id="cart-items-container"></div>
        
        <div id="empty-cart-message" style="display:none;">
            <p class="empty-cart-text">Seu Carrinho está vazio!</p>
            <p class="empty-cart-subtext">Clique no botão abaixo e procure pelo seu produto!</p>
            <button id="find-products-btn" class="find-products-btn">PROCURAR</button>
        </div>
        
        <div class="cart-sidebar-footer">
            <p id="cart-subtotal">Subtotal: R$0,00</p>
            <button id="checkout-btn" class="checkout-btn">Finalizar Compra</button>
        </div>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const sidebarItems = document.querySelectorAll('.sidebar-item');
            const contentBoxes = document.querySelectorAll('.content-box');

            sidebarItems.forEach(item => {
                item.addEventListener('click', function() {
                    // Remove a classe 'active' de todos os itens da barra lateral e conteúdo
                    sidebarItems.forEach(i => i.classList.remove('active'));
                    contentBoxes.forEach(box => box.classList.remove('active'));

                    // Adiciona a classe 'active' ao item clicado e ao conteúdo correspondente
                    this.classList.add('active');
                    const targetContent = document.getElementById(this.id.replace('-link', ''));
                    targetContent.classList.add('active');
                });
            });
            
            // Seleciona todas as imagens do produto
            document.querySelectorAll('.product-image').forEach(productImage => {
                const originalImage = productImage.querySelector('img'); // A imagem padrão
                const hoverImage = productImage.querySelector('.hover-image'); // A imagem de hover
                const sizeOverlay = productImage.querySelector('.size-options-overlay');
            
                // Verifica se a imagem de hover existe
                if (hoverImage) {
                    productImage.addEventListener('mouseenter', () => {
                        originalImage.style.display = 'none'; // Esconde a imagem original
                        hoverImage.style.display = 'block'; // Mostra a imagem de hover
                    });
    
                    productImage.addEventListener('mouseleave', () => {
                        originalImage.style.display = 'block'; // Mostra a imagem original
                        hoverImage.style.display = 'none'; // Esconde a imagem de hover
                    });
                }
            });
            
            // Função para configurar o botão "Adicionar ao Carrinho"
            document.querySelectorAll('.add-to-cart-btn').forEach(button => {
                button.addEventListener('click', function(event) {
                    const productElement = this.closest('.product');
                    const productId = parseInt(this.getAttribute('data-product_id'));
                    const productName = productElement.querySelector('#product-name').innerText;
            
                    // Obter os dados das imagens e preços diretamente do HTML
                    const images = JSON.parse(productElement.getAttribute('data-images'));
                    const prices = JSON.parse(productElement.getAttribute('data-prices'));
            
                    // Reabre o overlay e configura o evento de seleção de tamanho
                    showSizeOptions(productId, productName, prices, images);
                });
            });
        
            function showSizeOptions(productId, productName, prices, images) {
                selectedSize = null;
                const sizeOverlay = document.getElementById(`size-options-overlay-${productId}`);
                sizeOverlay.style.display = 'flex'; // Mostrar o overlay
            
                // Função para lidar com a seleção de tamanho
                function handleSizeOptionClick(event) {
                    if (event.target.classList.contains('size-option')) {
                        const selectedSize = event.target.innerText.trim().toUpperCase(); // Usa maiúsculas para uniformidade
                        const productImage = images[selectedSize];
                        const productPrice = prices[selectedSize];
                        
                        if (productImage && productPrice) {
                            console.log("Chamando addToCart apenas uma vez");
                            // Adicionar ao carrinho
                            addToCart(productId, productName, productPrice, productImage, selectedSize, 1);
                        } else {
                            alert('Tamanho selecionado não disponível. Verifique a seleção.');
                        }
                    }
                    // Fechar o overlay após qualquer clique, seja em uma opção de tamanho ou não
                    closeSizeOverlay();
                }
            
                // Função para fechar o overlay
                function closeSizeOverlay() {
                    sizeOverlay.style.display = 'none';
                    sizeOverlay.removeEventListener('click', handleSizeOptionClick);
                }
            
                // Adicionar o evento de clique para a seleção de tamanho com `{ once: true }`
                sizeOverlay.addEventListener('click', handleSizeOptionClick, { once: true });
            }
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
        var isLoggedIn = <?php echo is_user_logged_in() ? 'true' : 'false'; ?>;
        var userEmail = "<?php echo esc_js(is_user_logged_in() ? wp_get_current_user()->user_email : ''); ?>";
    </script>
    </script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/endereco.js?ver=<?php echo filemtime(get_template_directory() . '/js/endereco.js'); ?>"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/cart.js?ver=<?php echo filemtime(get_template_directory() . '/js/cart.js'); ?>"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js?ver=<?php echo filemtime(get_template_directory() . '/js/script.js'); ?>"></script>
</body>
</html>
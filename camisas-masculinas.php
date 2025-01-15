<?php
/*
Template Name: Camisas Masculinas
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
</head>
<body class=product-page>
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
                    <!-- Menu que aparece ao passar o mouse -->
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

    <section id="content">
        <h2 class="camisas-title">Camisas Masculinas</h2>

        <div class="main-content">
            <!-- Filtro -->
            <aside id="filter-sidebar-satus" class="camisas-filter">
                <h3>Filtrar</h3>
                
                <div id="active-filters-container">
                    <div id="active-filters"></div>
                    <button id="clear-all-filters" style="display: none;">Apagar todos</button>
                </div>
                
                <div id="filter-options-container">
                    <!-- Filtro por Tamanho -->
                    <div class="filter-group">
                        <h4 onclick="toggleFilterSection(this)">
                            Tamanho
                            <span class="arrow-icon"><i class="fa fa-chevron-down"></i></span>
                        </h4>
                        <div class="filter-options">
                            <?php
                            // Define a ordem personalizada dos tamanhos
                            $size_order = array('P', 'M', 'G', 'GG', 'XG'); // Você pode adicionar mais tamanhos conforme necessário
                            
                            // Busca os produtos da categoria "camisasm"
                            $args = array(
                                'post_type' => 'product',
                                'posts_per_page' => -1, // Não limitar a quantidade de produtos
                                'fields' => 'ids', // Retorna apenas os IDs dos produtos
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'product_cat',
                                        'field'    => 'slug',
                                        'terms'    => 'camisasm', // Categoria "camisasm"
                                    ),
                                ),
                            );
                            $product_ids = get_posts($args); // Pega os IDs dos produtos da categoria "camisasm"
                            
                            // Verifica se há produtos para a categoria "camisasm"
                            if ($product_ids) {
                                // Agora, consulta os tamanhos (termos de "pa_tamanho") associados a esses produtos
                                $args = array(
                                    'taxonomy' => 'pa_tamanho', // Taxonomia do tamanho
                                    'orderby' => 'name',
                                    'hide_empty' => false, // Mostrar mesmo os termos que não têm produtos
                                    'object_ids' => $product_ids, // Limita aos produtos da categoria "camisasm"
                                );
                                $sizes = get_terms($args);
                                
                                // Ordenar os tamanhos pela ordem personalizada
                                usort($sizes, function($a, $b) use ($size_order) {
                                    $pos_a = array_search($a->name, $size_order);
                                    $pos_b = array_search($b->name, $size_order);
                                    return $pos_a - $pos_b;
                                });
                    
                                // Exibe as opções de tamanho
                                foreach ($sizes as $size) {
                                    echo '<label><input type="checkbox" name="size" value="' . $size->slug . '" data-name="' . $size->name . '"> ' . $size->name . '</label><br>';
                                }
                            } else {
                                echo '<p>Nenhum tamanho disponível para os produtos atuais.</p>';
                            }
                            ?>
                        </div>
                    </div>
                    
                    <!-- Filtro por Cor -->
                    <div class="filter-group">
                        <h4 onclick="toggleFilterSection(this)">
                            Cor
                            <span class="arrow-icon"><i class="fa fa-chevron-down"></i></span>
                        </h4>
                        <div class="filter-options">
                            <?php
                            // Busca os produtos da categoria "camisasm"
                            $args = array(
                                'post_type' => 'product',
                                'posts_per_page' => -1, // Não limitar a quantidade de produtos
                                'fields' => 'ids', // Retorna apenas os IDs dos produtos
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'product_cat',
                                        'field'    => 'slug',
                                        'terms'    => 'camisasm', // Categoria "camisasm"
                                    ),
                                ),
                            );
                            $product_ids = get_posts($args); // Pega os IDs dos produtos da categoria "camisasm"
                            
                            // Verifica se há produtos para a categoria "camisasm"
                            if ($product_ids) {
                                // Agora, consulta as cores (termos de "pa_cor") associadas a esses produtos
                                $args = array(
                                    'taxonomy' => 'pa_cor', // Taxonomia da cor
                                    'orderby' => 'name',
                                    'hide_empty' => false, // Mostrar mesmo os termos que não têm produtos
                                    'object_ids' => $product_ids, // Limita aos produtos da categoria "camisasm"
                                );
                                $colors = get_terms($args);
                    
                                // Exibe as opções de cor
                                foreach ($colors as $color) {
                                    echo '<label><input type="checkbox" name="color" value="' . $color->slug . '" data-name="' . $color->name . '"> ' . $color->name . '</label><br>';
                                }
                            } else {
                                echo '<p>Nenhuma cor disponível para os produtos atuais.</p>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </aside>
            
            <!-- Exibição dos Produtos -->
            <section id="collection-section">
                <div class="collection-grid">
                    <?php
                    // Consulta dos produtos com base nos filtros
                    $args = array(
                        'post_type' => 'product',
                        'posts_per_page' => 12,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'product_cat',  // Taxonomia para categorias de produtos
                                'field'    => 'slug',         // Usando o slug da categoria
                                'terms'    => 'camisasm',     // Alterado para a categoria "camisasm"
                                'operator' => 'IN',
                            ),
                        ),
                    );
                    
                    // Verificar e aplicar o filtro de tamanho
                    if (isset($_GET['size']) && !empty($_GET['size'])) {
                        $args['tax_query'][] = array(
                            'taxonomy' => 'pa_tamanho',
                            'field'    => 'slug',
                            'terms'    => $_GET['size'],
                            'operator' => 'IN',
                        );
                    }

                    // Verificar e aplicar o filtro de cor
                    if (isset($_GET['color']) && !empty($_GET['color'])) {
                        $args['tax_query'][] = array(
                            'taxonomy' => 'pa_cor',
                            'field'    => 'slug',
                            'terms'    => $_GET['color'],
                            'operator' => 'IN',
                        );
                    }

                    // Executar a consulta
                    $loop = new WP_Query($args);
                    if ($loop->have_posts()) :
                        while ($loop->have_posts()) : $loop->the_post(); global $product; ?>
                        
                            <?php
                            $product_variations = $product->get_children();
                            $images = [];
                            $prices = [];
            
                            foreach ($product_variations as $variation_id) {
                                $variation = new WC_Product_Variation($variation_id);
                                $size = strtoupper($variation->get_attribute('pa_tamanho')); // Use maiúsculas para uniformidade
                                $images[$size] = wp_get_attachment_url($variation->get_image_id());
                                $prices[$size] = $variation->get_price();
                            }
                            ?>
                            
                            <div class="product" id="product-<?php echo get_the_ID(); ?>" data-images='<?php echo esc_attr(json_encode($images)); ?>' data-prices='<?php echo esc_attr(json_encode($prices)); ?>'
                                data-size="<?php echo join(',', wp_get_post_terms(get_the_ID(), 'pa_tamanho', array('fields' => 'slugs'))); ?>"
                                data-color="<?php echo join(',', wp_get_post_terms(get_the_ID(), 'pa_cor', array('fields' => 'slugs'))); ?>"
                            >
                                <div class="product-image">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'full');
                                        
                                        // Recupera a primeira imagem da galeria como imagem de hover
                                        $attachment_ids = $product->get_gallery_image_ids();
                                        $hover_image_id = isset($attachment_ids[0]) ? $attachment_ids[0] : ''; 
                                        
                                        if ($hover_image_id):
                                            echo wp_get_attachment_image($hover_image_id, 'full', false, array('class' => 'hover-image', 'style' => 'display:none;'));
                                        endif;
                                        ?>
                                    </a>
                                    
                                    <div class="size-options-overlay" id="size-options-overlay-<?php echo get_the_ID(); ?>" style="display:none;">
                                        <div class="size-options">
                                            <?php
                                            $product_sizes = wp_get_post_terms(get_the_ID(), 'pa_tamanho');
                                            if ($product_sizes && !is_wp_error($product_sizes)) {
                                                foreach ($product_sizes as $size) {
                                                    echo '<button class="size-option">' . esc_html($size->name) . '</button>';
                                                }
                                            } else {
                                                echo '<p>Nenhum tamanho disponível.</p>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <p id="product-name"><?php the_title(); ?></p>
                                    <p><?php echo $product->get_price_html(); ?></p>
                                    <button class="add-to-cart-btn" data-product_id="<?php echo get_the_ID(); ?>">Adicionar ao Carrinho</button>
                                </div>
                            </div>
                        <?php endwhile;
                    else :
                        echo '<p>Nenhum produto encontrado.</p>';
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
            </section>
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
    
    <div id="modal-overlay"></div>
    
    <div id="login-modal" class="modal" style="display:none;">
        <div class="modal-content">
          <span class="close-btn" id="closeLogin">&times;</span>
          <h2>Entrar na Conta</h2>
          <button class="login-btn google-login">
            <img src="<?php echo get_template_directory_uri(); ?>/img/pay/google-icon.png" alt="Google Icon" class="icon" />
            Entre com Google
          </button>
          <button class="login-btn facebook-login">
            <img src="<?php echo get_template_directory_uri(); ?>/img/pay/facebook-icon.png" alt="Facebook Icon" class="icon" />
            Entre com Facebook
          </button>
          <div class="divider">
            <hr> <span>ou</span> <hr>
          </div>
          <form id="login-form">
            <input type="email" id="login-email" placeholder="E-mail" required autocomplete="off">
            <div class="password-container-toggle">
                <input type="password" id="login-password" placeholder="Senha" required autocomplete="off">
                <i class="fa-solid fa-eye-slash toggle-password" id="toggle-login-password"></i>
            </div>
            <a href="<?php echo wp_lostpassword_url(); ?>">Esqueceu a senha?</a>
            <button type="submit" class="submit-btn" id="login-btn">
                Fazer login
            </button>
          </form>
          <p>Não tem uma conta? <a href="#" id="showRegisterModal" class="create-account">Criar conta</a></p>
        </div>
    </div>
    
    <div id="register-modal" class="modal" style="display:none;">
        <div class="modal-content">
            <span class="close-btn" id="closeRegister">&times;</span>
            <h2>Criar Conta</h2>
            <button class="login-btn google-login">
                <img src="<?php echo get_template_directory_uri(); ?>/img/pay/google-icon.png" alt="Google Icon" class="icon" />
                Registre-se com Google
            </button>
            <button class="login-btn facebook-login">
                <img src="<?php echo get_template_directory_uri(); ?>/img/pay/facebook-icon.png" alt="Facebook Icon" class="icon" />
                Registre-se com Facebook
            </button>
            <form id="register-form">
                <input type="text" id="register-name" placeholder="Nome de Usuário" required autocomplete="off">
                <input type="email" id="register-email" placeholder="E-mail" required autocomplete="off">

                <div class="password-container">
                    <div class="password-wrapper">
                        <div class="password-container-toggle">
                            <input type="password" id="register-password" placeholder="Senha" required>
                            <i class="fa-solid fa-eye-slash toggle-password" id="toggle-register-password"></i>
                        </div>
                        <div class="password-container-toggle">
                            <input type="password" id="confirm-password" placeholder="Confirme a Senha" required>
                            <i class="fa-solid fa-eye-slash toggle-password" id="toggle-confirm-password"></i>
                        </div>
                    </div>
                </div>
                
                <button type="submit" class="submit-btn" id="register-btn">
                    Registrar
                </button>
            </form>
            <p class="create-account-r">Já tem uma conta? <a href="#" id="showLoginModal">Faça login</a></p>
        </div>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Seleciona todas as imagens do produto
            document.querySelectorAll('.product-image').forEach(productImage => {
                const originalImage = productImage.querySelector('img'); // A imagem padrão
                const hoverImage = productImage.querySelector('.hover-image'); // A imagem de hover
            
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
    <script src="<?php echo get_template_directory_uri(); ?>/js/produtos-categoria.js?ver=<?php echo filemtime(get_template_directory() . '/js/produtos.js'); ?>"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/cart.js?ver=<?php echo filemtime(get_template_directory() . '/js/cart.js'); ?>"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js?ver=<?php echo filemtime(get_template_directory() . '/js/script.js'); ?>"></script>
</body>
</html>
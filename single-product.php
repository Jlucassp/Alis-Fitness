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

    <?php
    // Inicia o loop do WooCommerce
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            global $product;
            ?>
            
            <section id="product_detail_section">
                <div class="product-detail-container">
                    <div class="product-images">
                        <img id="main-product-image" alt="Imagem do Produto" src="<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>" />
                        <div id="product-thumbnails" class="product-thumbnails">
                            <?php
                            // Recupera a imagem principal
                            $main_image_url = get_the_post_thumbnail_url($post->ID, 'full');
                            echo '<img src="' . $main_image_url . '" class="thumbnail-image" onclick="changeMainImage(\'' . $main_image_url . '\');" />';
                            
                            // Agora mostra as miniaturas das outras imagens
                            $attachment_ids = $product->get_gallery_image_ids();
                            foreach ($attachment_ids as $attachment_id) {
                                $image_url = wp_get_attachment_url($attachment_id);
                                echo '<img src="' . $image_url . '" onclick="changeMainImage(\'' . $image_url . '\');">';
                            }
                            ?>
                        </div>
                    </div>
                    
                    <div class="product-info">
                        <h1 id="product-title" class="product-title"><?php the_title(); ?></h1>
                        <p id="product-price" class="product-price"><?php echo wc_price($product->get_price()); ?></p>
                        
                        <div class="product-options">
                            <label for="size">Tamanho: <span id="selected-size-name"></span></label>
                            <div id="sizes-options-container">
                                <?php
                                // Recuperar as variações do produto
                                $variations = $product->get_available_variations();

                                // Inicializar um array para armazenar os tamanhos disponíveis
                                $available_sizes = array();
                                
                                // Iterar sobre as variações e coletar os tamanhos disponíveis
                                foreach ($variations as $variation) {
                                    $size = strtoupper($variation['attributes']['attribute_pa_tamanho']); // Tamanho da variação com primeira letra maiúscula
                                    if (!in_array($size, $available_sizes)) {
                                        $available_sizes[] = $size; // Adicionar tamanho único ao array
                                    }
                                }
                                
                                // Exibir os botões de tamanho
                                foreach ($available_sizes as $size) {
                                    echo '<div class="size-button" data-size="' . $size . '">' . $size . '</div>';
                                }
                                ?>
                            </div>
                            
                            <label for="quantity">Quantidade:</label>
                            <div class="quantity-selector">
                                <button class="quantity-btn-sproduct minus">-</button>
                                <input type="number" id="quantity" class="product-quantity" value="1" min="1" max="10">
                                <button class="quantity-btn-sproduct plus">+</button>
                            </div>
                            
                            <div class="product-actions">
                                <button class="btn-add-to-cart" onclick="addToCart()">Adicionar ao Carrinho</button>
                                <button class="btn-wishlist" title="Lista de Desejos">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon/heart.png" alt="Favoritar Icon">
                                </button>
                            </div>
                        </div>
                        
                        <div class="product-description">
                            <h2>Descrição do Produto</h2>
                            <p id="product-description"><?php echo wpautop(get_the_content()); ?></p>
                        </div>
                        
                        <div class="additional-info">
                            <!-- Indicado Para -->
                            <div class="info-item">
                                <button class="info-title" onclick="toggleInfo(this)">Indicado Para</button>
                                <div class="info-content" id="info-recommended">
                                    <?php
                                    // Obtém o termo do atributo 'Indicado Para'
                                    $terms = get_the_terms( $post->ID, 'pa_recommendedfor' );
                                    if (!empty($terms) && !is_wp_error($terms)):
                                        $recommended_for = array();
                                        foreach($terms as $term):
                                            $recommended_for[] = $term->name;
                                        endforeach;
                                        echo implode(',', $recommended_for);
                                    else:
                                        echo 'Informação não disponível';
                                    endif;
                                    ?>
                                </div>
                            </div>
                            
                            <!-- Modelo -->
                            <div class="info-item">
                                <button class="info-title" onclick="toggleInfo(this)">Modelo</button>
                                <div class="info-content" id="model-info">
                                    <?php
                                    // Obter as categorias do produto
                                    $terms = get_the_terms($product->get_id(), 'product_cat');
                                    
                                    // Verifica se o produto pertence a uma das categorias específicas
                                    $valid_categories = ['camisasm', 'shortsm', 'shortsf', 'tops', 'leggings'];
                                    $product_category = '';
                                    
                                    if ($terms && !is_wp_error($terms)) {
                                        foreach ($terms as $term) {
                                            // Se a categoria do produto estiver entre as categorias válidas
                                            if (in_array($term->slug, $valid_categories)) {
                                                $product_category = $term->slug;
                                                break;
                                            }
                                        }
                                    }
                            
                                    // Recuperar os atributos do modelo
                                    $model_height_terms = get_the_terms($product->get_id(), 'pa_height_model'); 
                                    if ($model_height_terms && !is_wp_error($model_height_terms)) {
                                        $model_height = $model_height_terms[0]->name; // Altura do modelo
                                    }
                            
                                    $model_size_terms = get_the_terms($product->get_id(), 'pa_model_size'); 
                                    if ($model_size_terms && !is_wp_error($model_size_terms)) {
                                        $model_size = $model_size_terms[0]->name; // Tamanho do modelo
                                    }
                            
                                    if ($model_size && $model_height) {
                                        // Exibir o modelo na formatação desejada
                                        echo '<p>O modelo veste: <strong> ' . $model_size . ' | ' . $model_height . '</strong></p>';
                                    }
                                    
                                    // Exibir informações adicionais baseadas na categoria
                                    if ($product_category == 'shortsf' || $product_category == 'shortsm' || $product_category == 'leggings') {
                                        echo '<p>Baseado em cintura e quadril:</p>';
                                        // Recuperando as variações do produto
                                        $variations = $product->get_available_variations();
                            
                                        if ($variations) {
                                            echo '<ul>';
                                            foreach ($variations as $variation) {
                                                $size = strtoupper($variation['attributes']['attribute_pa_tamanho']); // Tamanho da variação com primeira letra maiúscula
                                                $hip_measurement = get_post_meta($variation['variation_id'], 'attribute_pa_quadril', true);
                                                $waist_measurement = get_post_meta($variation['variation_id'], 'attribute_pa_cintura', true);
                            
                                                if ($waist_measurement && $hip_measurement) {
                                                    echo '<li>' . $size . ' veste ' . $waist_measurement . ' | ' . $hip_measurement . '</li>';
                                                } else {
                                                    echo '<li>' . $size . ' medições não definidas</li>';
                                                }
                                            }
                                            echo '</ul>';
                                        }
                                    } elseif ($product_category == 'camisasm' || $product_category == 'tops') {
                                        echo '<p>Baseado em tórax e cintura:</p>';
                                        // Recuperando as variações do produto
                                        $variations = $product->get_available_variations();
                            
                                        if ($variations) {
                                            echo '<ul>';
                                            foreach ($variations as $variation) {
                                                $size = strtoupper($variation['attributes']['attribute_pa_tamanho']); // Tamanho da variação com primeira letra maiúscula
                                                $chest_measurement = get_post_meta($variation['variation_id'], 'attribute_pa_torax', true);
                                                $waist_measurement = get_post_meta($variation['variation_id'], 'attribute_pa_cintura', true);
                            
                                                if ($chest_measurement && $waist_measurement) {
                                                    echo '<li>' . $size . ' veste ' . $chest_measurement . ' | ' . $waist_measurement . '</li>';
                                                } else {
                                                    echo '<li>' . $size . ' medições não definidas</li>';
                                                }
                                            }
                                            echo '</ul>';
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            
                            <!-- Composição -->
                            <div class="info-item">
                                <button class="info-title" onclick="toggleInfo(this)">Composição</button>
                                <div class="info-content" id="info-composition">
                                    <?php
                                    // Obtém o termo do atributo 'Composição'
                                    $terms_composition = get_the_terms($post->ID, 'pa_composicao');
                                    if (!empty($terms_composition) && !is_wp_error($terms_composition)) :
                                        $composition = array();
                                        foreach ($terms_composition as $term) :
                                            $composition[] = $term->name;
                                        endforeach;
                                        echo implode(', ', $composition);
                                    else :
                                        echo 'Informação não disponível';
                                    endif;
                                    ?>
                                </div>
                            </div>
                            
                            <!-- Entregas e Devoluções -->
                            <div class="info-item">
                                <button class="info-title" onclick="toggleInfo(this)">Entregas e Devoluções</button>
                                <div class="info-content" id="info-shipping">
                                    <p class="subtitle-info-shipping"><strong>Confira o prazo de entrega</strong></p>
                                    <p>O prazo de entrega começa a contar a partir do faturamento do pedido.</p>
                                    <p class="text-content-info-shipping">Para saber mais sobre nossas informações de entrega, <a href="#">clique aqui</a></p>
                        
                                    <p class="subtitle-info-shipping"><strong>Problemas com o produto?</strong></p>
                                    <p>Para realizar a devolução, <a href="#">clique aqui.</a></p>
                                    <p>Saiba mais em <a href="#">Política de Trocas e Devoluções</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <?php
        endwhile;
    endif;
    ?>

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
        // Função para trocar a imagem principal
        function changeMainImage(imageUrl) {
            document.getElementById('main-product-image').src = imageUrl;
        }
            
        // Função para alternar as informações adicionais
        function toggleInfo(button) {
            const infoItem = button.parentElement;
            const infoContent = button.nextElementSibling;
            
            // Alterna a visibilidade das informações
            if (infoItem.classList.contains('active')) {
                infoItem.classList.remove('active');
                infoContent.style.display = 'none';
            } else {
                infoItem.classList.add('active');
                infoContent.style.display = 'block';
            }
        }
        
        document.addEventListener('DOMContentLoaded', function() {
            // Selecione todos os botões de tamanho
            const sizeButtons = document.querySelectorAll('.size-button');
            const selectedSizeElement = document.getElementById('selected-size-name');
            
            let selectedSize = null;
            
            // Adiciona o evento de clique para cada botão de tamanho
            sizeButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    // Remover a classe 'selected' de todos os botões
                    sizeButtons.forEach(function(btn) {
                        btn.classList.remove('selected');
                    });
                    
                    // Adicionar a classe 'selected' ao botão clicado
                    button.classList.add('selected');
                    
                    // Exibir o tamanho selecionado
                    selectedSize = button.getAttribute('data-size');
                    selectedSizeElement.textContent = selectedSize; // Atualiza o texto com o tamanho selecionado
                });
            });
            
            // Selecione os botões de quantidade
            const quantityInput = document.getElementById('quantity');
            const minusButton = document.querySelector('.quantity-btn-sproduct.minus');
            const plusButton = document.querySelector('.quantity-btn-sproduct.plus');

            if (parseInt(quantityInput.value) <= parseInt(quantityInput.min)) {
                minusButton.disabled = true;
                minusButton.style.cursor = 'not-allowed';
            }
        
            // Ação para o botão de diminuir
            minusButton.addEventListener('click', function() {
                let currentValue = parseInt(quantityInput.value);
                if (currentValue > parseInt(quantityInput.min)) {
                    quantityInput.value = currentValue - 1;
                }
            });
        
            plusButton.addEventListener('click', () => {
                let currentValue = parseInt(quantityInput.value);
                if (currentValue < parseInt(quantityInput.max)) {
                    quantityInput.value = currentValue + 1;
                }
                
                if (parseInt(quantityInput.value) > parseInt(quantityInput.min)) {
                    minusButton.disabled = false;
                    minusButton.style.cursor = 'pointer';
                }
            });
        
            quantityInput.addEventListener('change', function() {
                let currentValue = quantityInput.value;
                
                if (currentValue === '' || currentValue == 0) {
                    quantityInput.value = 1;
                }
                
                if (parseInt(quantityInput.value) <= parseInt(quantityInput.min)) {
                    minusButton.disabled = true;
                    minusButton.style.cursor = 'not-allowed';
                } else {
                    minusButton.disabled = false;
                    minusButton.style.cursor = 'pointer';
                }
            });
            
            const addToCartButton = document.querySelector('.btn-add-to-cart');
            
            // Adiciona o evento de clique no botão "Adicionar ao Carrinho"
            addToCartButton.addEventListener('click', function() {
                const selectedSize = document.getElementById('selected-size-name').textContent.trim();
                const quantity = document.getElementById('quantity').value;
                const productPrice = document.querySelector('#product-price').textContent;
        
                // Verifique se os dados necessários estão definidos
                if (!selectedSize || !quantity || !productPrice || parseInt(quantity) < 1) {
                    alert("Por favor, preencha todos os detalhes do produto corretamente.");
                    return;
                }
        
                const productId = <?php echo $product->get_id(); ?>;
                const productName = document.querySelector('#product-title').innerText;
                const productImage = "<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>";
        
                // Agora, chama a função addToCart com os dados corretos
                addToCart(productId, productName, productPrice, productImage, selectedSize, quantity);
            });
        });
    </script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js?ver=<?php echo filemtime(get_template_directory() . '/js/script.js'); ?>"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/cart.js?ver=<?php echo filemtime(get_template_directory() . '/js/cart.js'); ?>"></script>
</body>
</html>
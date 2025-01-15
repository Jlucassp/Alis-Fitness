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
    <section id="header">
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

    <section id="banner-slider">
        <div class="slider-container">
            <div class="slide">
                <img src="<?php echo get_template_directory_uri(); ?>/img/banner/IMG_0174.JPG" alt="Conjuntos Femininos" class="banner-image-feminino">
                <div class="banner-text-feminino">
                    <h1>Satus</h1>
                </div>
                <a href="" class="banner-button-feminino">Ver mais</a>
            </div>

            <div class="slide">
                <img src="<?php echo get_template_directory_uri(); ?>/img/banner/IMG_0165.JPG" alt="Conjuntos Masculinos" class="banner-image-masculino">
                <div class="banner-text-masculino">
                    <h1>Eternal <BR>Summer</h1>
                </div>
                <a href="" class="banner-button-masculino">Coleção Feminina</a>
            </div>

            <div class="slide">
                <img src="<?php echo get_template_directory_uri(); ?>/img/banner/irandes aventureiro.jpg" alt="Conjuntos Sale" class="banner-image">
                <div class="banner-text-img">
                    <h1>Imparável em <br>cada passo</h1>
                </div>
                <a href="" class="banner-button-img">Coleção Masculina</a>
            </div>
        </div>

        <div class="slider-nav">
            <span class="prev">&lt;</span>
            <span class="next">&gt;</span>
        </div>
    </section>

    <section id="promo-section">
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

    <section id="product-section">
        <h2>NOSSOS PRODUTOS</h2>
        <div class="product-grid">
            <?php
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 4,
            );
    
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
    
                    <div class="product" id="product-<?php echo get_the_ID(); ?>" data-images='<?php echo esc_attr(json_encode($images)); ?>' data-prices='<?php echo esc_attr(json_encode($prices)); ?>'>
                        <div class="product-image">
                            <a href="<?php the_permalink(); ?>">
                                <?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'full'); ?>
                                <?php
                                // Recupera a primeira imagem da galeria como imagem de hover
                                $attachment_ids = $product->get_gallery_image_ids();
                                $hover_image_id = isset($attachment_ids[0]) ? $attachment_ids[0] : ''; // Obtém a primeira imagem da galeria
                                ?>
                                <?php if ($hover_image_id) : ?>
                                    <?php echo wp_get_attachment_image($hover_image_id, 'full', false, array('class' => 'hover-image', 'style' => 'display:none;')); ?>
                                <?php endif; ?>
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
                            <button class="add-to-cart-btn" data-product_id="<?php echo get_the_ID(); ?>">
                                Adicionar ao Carrinho
                            </button>
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

    <section id="best_sellers" class="best-sellers-section">
        <h2 class="bs-section-title">MAIS VENDIDOS</h2>
        <div class="best-seller-container">
            <div class="best-item" id="ofertas-feminina">
                <img src="<?php echo get_template_directory_uri(); ?>/img/banner/irandes aventureiro.jpg" alt="Ofertas Feminina">
                <a href="">
                    <div class="overlay-best-sellers">
                        <div class="best-sellers-text">OFERTAS FEMININA</div>
                    </div>
                </a>
            </div>
            <div class="best-item" id="ofertas-masculina">
                <img src="<?php echo get_template_directory_uri(); ?>/img/banner/irandes aventureiro.jpg" alt="Ofertas Masculina">
                <a href="">
                    <div class="overlay-best-sellers">
                        <div class="best-sellers-text">OFERTAS MASCULINA</div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section id="about-us" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/banner/12.png');">
        <div class="about-container">
            <h2>One day or Day one</h2>
            <p class="about-short">
                A <span>ALIS</span> é uma marca que redefine a exclusividade no mundo da moda esportiva. Com um foco inabalável na qualidade e no design único, cada peça da Alis é produzida em <span>peças limitadas</span>, garantindo que cada item seja tão especial para seus usuários. A produção restrita não apenas eleva o status de cada vestuário, mas também fomenta uma conexão mais íntima entre a marca e seus clientes, que valorizam a <span>distinção</span> e a <span>singularidade</span> em suas escolhas.<br><br>
                A exclusividade da Alis vai além do número limitado de peças produzidas. O design de cada item reflete uma fusão perfeita de <span>inovação</span> e <span>elegância</span>, com linhas que respeitam tanto a funcionalidade quanto a estética moderna. O logotipo da marca, com seus traços retos e curvas sutis, simboliza a <span>modernidade</span> e <span>leveza</span> de um estilo de vida único.
            </p>
            <h2 class="about-full hidden">100% POLIAMIDA</h2>
            <p class="about-full hidden">
                <span>Por que se utiliza poliamida em roupas de academia?</span> O material é o mais indicado para a prática de atividades físicas, pois é resistente, durável, macio eleve. Além de permitir os movimentos, o tecido também ajuda no processo de transpiração, que é muito importante durante o treino.
            </p>
            <button id="read-more-btn">Leia mais</button>
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
          <a href="#" id="showRegisterModal" class="create-account">Criar conta</a>
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
        window.addEventListener('scroll', function() {
            const header = document.getElementById('header');
            if (window.scrollY > 0) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
        
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');
        const totalSlides = slides.length;
        const sliderContainer = document.querySelector('.slider-container');
        let autoSlideInterval;
        
        // Criação de um slide adicional (clone do primeiro)
        const firstSlideClone = slides[0].cloneNode(true);
        sliderContainer.appendChild(firstSlideClone);
        
        // Atualiza a posição do slider
        function updateSliderPosition() {
            const offset = -currentSlide * 100; // Corrige o sinal para mover à esquerda
            sliderContainer.style.transition = 'transform 0.5s ease'; // Transição suave
            sliderContainer.style.transform = `translateX(${offset}%)`;
        }
        
        // Redefine o slide automático
        function resetAutoSlide() {
            clearInterval(autoSlideInterval);
            autoSlideInterval = setInterval(() => {
                currentSlide = (currentSlide + 1) % (totalSlides + 1); // +1 para incluir o clone
                if (currentSlide === totalSlides) {
                    // Depois de alcançar o último slide, volta para o primeiro
                    sliderContainer.style.transition = 'none';
                    currentSlide = 0;
                    updateSliderPosition();
                    setTimeout(() => {
                        sliderContainer.style.transition = 'transform 0.5s ease'; // Reseta a transição suave
                    }, 50); // Pequeno atraso para reiniciar a transição suave
                } else {
                    updateSliderPosition();
                }
            }, 5000);
        }
        
        // Inicializa o slide automático
        resetAutoSlide();
        
        // Adiciona o evento de "next"
        document.querySelector('.next').addEventListener('click', () => {
            currentSlide = (currentSlide + 1) % (totalSlides + 1); // Se for o último slide (clone), vai para o primeiro
            if (currentSlide === totalSlides) {
                sliderContainer.style.transition = 'none';
                currentSlide = 0;
                updateSliderPosition();
                setTimeout(() => {
                    sliderContainer.style.transition = 'transform 0.5s ease'; // Reseta a transição suave
                }, 50);
            } else {
                updateSliderPosition();
            }
            resetAutoSlide();
        });
        
        // Adiciona o evento de "prev"
        document.querySelector('.prev').addEventListener('click', () => {
            if (currentSlide === 0) {
                currentSlide = totalSlides - 1; // Quando estiver no primeiro slide, vá para o último (terceiro slide)
            } else {
                currentSlide--; // Caso contrário, apenas subtraímos 1
            }
        
            updateSliderPosition();
            resetAutoSlide();
        });
        
        // Inicializa a posição do slider
        updateSliderPosition();

        document.addEventListener('DOMContentLoaded', function () {
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
            
            const readMoreButton = document.getElementById('read-more-btn');
            const aboutFullText = document.querySelectorAll('.about-full');
        
            readMoreButton.addEventListener('click', function () {
                aboutFullText.forEach(text => {
                    text.classList.toggle('hidden');
                    if (text.classList.contains('hidden')) {
                        text.style.display = 'none';
                    } else {
                        text.style.display = 'block';
                    }
                });
        
                // Opcional: Alterar o texto do botão para "Ler Menos" quando a seção estiver visível
                if (readMoreButton.innerText === 'Leia mais') {
                    readMoreButton.innerText = 'Ler menos';
                } else {
                    readMoreButton.innerText = 'Leia mais';
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
    </script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/cart.js?ver=<?php echo filemtime(get_template_directory() . '/js/cart.js'); ?>"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js?ver=<?php echo filemtime(get_template_directory() . '/js/script.js'); ?>"></script>
    <script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>
</body>
</html>
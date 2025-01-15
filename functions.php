<?php

// Evita o acesso direto ao arquivo
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// wp_localize_script('my_script', 'myAjax', array(
//     'url' => admin_url('admin-ajax.php')
// ));

function pass_logged_in_status_to_frontend() {
    ?>
    <script type="text/javascript">
        var is_user_logged_in = <?php echo json_encode( is_user_logged_in() ); ?>;
    </script>
    <?php
}
add_action( 'wp_head', 'pass_logged_in_status_to_frontend' );

// Função para adicionar suporte a recursos do tema
function alisfitness_setup() {
    // Suporte a imagens destacadas
    add_theme_support('post-thumbnails');
    
    // Suporte a títulos
    add_theme_support('title-tag');

    // Registra menus de navegação
    register_nav_menus(array(
        'primary' => __('Menu Principal', 'alisfitness'),
    ));
}

// Hook para inicializar o tema
add_action('after_setup_theme', 'alisfitness_setup');

// Função para carregar scripts e estilos
function alisfitness_enqueue_scripts() {
    // Enfileira o jQuery
    wp_enqueue_script('jquery');
    
    // Enfileira o script principal
    wp_enqueue_script('my_script', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true);
    
    // Funções dos Endereços
    wp_enqueue_script('endereco-script', get_template_directory_uri() . '/js/endereco.js', array('jquery'), null, true);
    
    // Passar informações para o JavaScript
    wp_localize_script('endereco-script', 'myAjax', array(
        'url' => admin_url('admin-ajax.php'),
        'user_email' => is_user_logged_in() ? wp_get_current_user()->user_email : ''
    ));
    
    // Funções dos Produtos (Filtro, Seleção de Tamanho)
    wp_enqueue_script('produtos-script', get_template_directory_uri() . '/js/produtos.js', array('jquery'), null, true);
    
    // Passa a URL do admin-ajax.php para o JavaScript
    wp_localize_script('my_script', 'myAjax', array(
        'url' => admin_url('admin-ajax.php')
    ));
    
    // Estilos do tema
    wp_enqueue_style('style', get_stylesheet_uri());
    
    // Funções do Carrinho
    wp_enqueue_script('cart-script', get_template_directory_uri() . '/js/cart.js', array('jquery'), null, true);
    
    // Estilos do WooCommerce
    if (class_exists('WooCommerce')) {
        wp_enqueue_style('woocommerce', get_template_directory_uri() . '/css/woocommerce.css');
    }

    // Font Awesome
    wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/4c87557831.js', array(), null, true);
}

// Hook para adicionar scripts e estilos
add_action('wp_enqueue_scripts', 'alisfitness_enqueue_scripts');

function ensure_user_addresses_field_exists($user_id) {
    // Verifica se o campo '_user_addresses' já existe para o usuário
    $enderecos = get_user_meta($user_id, '_user_addresses', true);

    // Se o campo não existir ou não for um array, cria ele como um array vazio
    if (empty($enderecos)) {
        update_user_meta($user_id, '_user_addresses', array());
    }
}
add_action('user_register', 'ensure_user_addresses_field_exists');

// Função para obter os endereços do usuário
function get_user_addresses() {
    if (!isset($_POST['user_email'])) {
        wp_send_json_error(array('message' => 'Email do usuário não fornecido.'));
        return;
    }

    $user_email = sanitize_email($_POST['user_email']);
    $user = get_user_by('email', $user_email);

    if (!$user) {
        wp_send_json_error(array('message' => 'Usuário não encontrado.'));
        return;
    }

    $user_id = $user->ID;

    // Recupera os endereços do banco de dados
    $enderecos = get_user_meta($user_id, '_user_addresses', true);

    // Garantir que os endereços sejam sempre um array, mesmo que não existam
    if (!is_array($enderecos)) {
        $enderecos = []; // Se não for um array, define como um array vazio
    }

    // Log para depuração
    error_log('Endereços encontrados: ' . print_r($enderecos, true));

    wp_send_json_success(array('data' => $enderecos)); 
}
add_action('wp_ajax_get_user_addresses', 'get_user_addresses');
add_action('wp_ajax_nopriv_get_user_addresses', 'get_user_addresses');

// Função para salvar um novo endereço no banco de dados
function save_user_address() {
    if (!isset($_POST['user_email']) || !isset($_POST['address_data'])) {
        wp_send_json_error(array('message' => 'Dados do usuário ou endereço não fornecidos.'));
        return;
    }
    
    $user_email = sanitize_email($_POST['user_email']);
    $address_data = $_POST['address_data'];

    // Verifica se o usuário existe
    $user = get_user_by('email', $user_email);
    if (!$user) {
        wp_send_json_error(array('message' => 'Usuário não encontrado.'));
        return;
    }
    
    $user_id = $user->ID;

    // Recupera os endereços existentes
    $enderecos = get_user_meta($user_id, '_user_addresses', true);
    if (!$enderecos) {
        $enderecos = array(); // Se não houver nenhum endereço, cria um array vazio
    }

    // Adiciona o novo endereço
    $enderecos[] = $address_data;

    // Salva os endereços no banco de dados
    update_user_meta($user_id, '_user_addresses', $enderecos);

    wp_send_json_success(array('message' => 'Endereço salvo com sucesso.'));
}
add_action('wp_ajax_save_user_address', 'save_user_address');
add_action('wp_ajax_nopriv_save_user_address', 'save_user_address');

// Função para atualizar um endereço existente
function update_user_address() {
    if (!isset($_POST['user_email']) || !isset($_POST['address_data']) || !isset($_POST['index'])) {
        wp_send_json_error(array('message' => 'Dados do usuário, endereço ou índice não fornecidos.'));
        return;
    }
    
    $user_email = sanitize_email($_POST['user_email']);
    $address_data = $_POST['address_data'];
    $index = intval($_POST['index']);
    
    // Verifica se o usuário existe
    $user = get_user_by('email', $user_email);
    if (!$user) {
        wp_send_json_error(array('message' => 'Usuário não encontrado.'));
        return;
    }
    
    $user_id = $user->ID;
    
    // Recupera os endereços existentes
    $enderecos = get_user_meta($user_id, '_user_addresses', true);
    if (!$enderecos || !isset($enderecos[$index])) {
        wp_send_json_error(array('message' => 'Endereço não encontrado.'));
        return;
    }

    // Atualiza o endereço no índice fornecido
    $enderecos[$index] = $address_data;

    // Salva os endereços no banco de dados
    update_user_meta($user_id, '_user_addresses', $enderecos);

    wp_send_json_success(array('message' => 'Endereço atualizado com sucesso.'));
}
add_action('wp_ajax_update_user_address', 'update_user_address');
add_action('wp_ajax_nopriv_update_user_address', 'update_user_address');

// Função para excluir um endereço
function delete_user_address() {
    if (!isset($_POST['user_email']) || !isset($_POST['index'])) {
        wp_send_json_error(['message' => 'Dados insuficientes para excluir o endereço']);
    }

    $user_email = sanitize_email($_POST['user_email']);
    $index = intval($_POST['index']);

    // Recupera os endereços do usuário
    $user = get_user_by('email', $user_email);
    if (!$user) {
        wp_send_json_error(['message' => 'Usuário não encontrado']);
    }
    
    $addresses = get_user_meta($user->ID, '_user_addresses', true);

    if (empty($addresses) || !isset($addresses[$index])) {
        wp_send_json_error(['message' => 'Endereço não encontrado']);
    }

    // Remove o endereço pelo índice
    unset($addresses[$index]);

    // Reindexa o array para corrigir a sequência dos índices
    $addresses = array_values($addresses);

    // Atualiza os endereços do usuário no banco de dados
    update_user_meta($user->ID, '_user_addresses', $addresses);

    wp_send_json_success(['message' => 'Endereço excluído com sucesso']);
}
add_action('wp_ajax_delete_user_address', 'delete_user_address'); // Registra a ação para usuários logados

// Função para definir um endereço como padrão
function set_default_address() {
    if (!is_user_logged_in()) {
        wp_send_json_error(array('message' => 'Usuário não autenticado.'));
        return;
    }

    $user_email = isset($_POST['user_email']) ? sanitize_email($_POST['user_email']) : '';
    $index = isset($_POST['index']) ? intval($_POST['index']) : -1;

    if (empty($user_email) || $index < 0) {
        wp_send_json_error(array('message' => 'Dados insuficientes.'));
        return;
    }

    $user = get_user_by('email', $user_email);
    if (!$user) {
        wp_send_json_error(array('message' => 'Usuário não encontrado.'));
        return;
    }

    $user_addresses = get_user_meta($user->ID, '_user_addresses', true);
    if (empty($user_addresses) || !is_array($user_addresses)) {
        wp_send_json_error(array('message' => 'Endereços não encontrados.'));
        return;
    }

    // Garantir que todos os endereços sejam desmarcados como padrão
    foreach ($user_addresses as $key => $address) {
        $user_addresses[$key]['isDefault'] = false;
    }

    // Marcar o endereço atual como padrão
    $user_addresses[$index]['isDefault'] = true;

    // Atualiza os endereços no banco de dados
    update_user_meta($user->ID, '_user_addresses', $user_addresses);

    wp_send_json_success(array('message' => 'Endereço atualizado com sucesso.'));
}
// Registrar a ação no WordPress
add_action('wp_ajax_set_default_address', 'set_default_address');

// function ajax_login() {
//     if (isset($_POST['email']) && isset($_POST['password'])) {
//         $creds = array(
//             'user_login'    => $_POST['email'],
//             'user_password' => $_POST['password'],
//             'remember'      => true
//         );

//         $user = wp_signon($creds, false);
        
//         if (is_wp_error($user)) {
//             error_log('Erro no login: ' . $user->get_error_message()); // Log do erro
//             echo json_encode(array('success' => false, 'message' => 'Erro no login. Verifique suas credenciais.'));
//         } else {
//             // Verificar se o login foi feito no frontend
//             if (!is_admin()) {
//                 wp_set_current_user($user->ID);
//                 wp_set_auth_cookie($user->ID);
//             }
//             echo json_encode(array('success' => true, 'message' => 'Login bem-sucedido.'));
//         }
//     } else {
//         error_log('Dados de login ausentes'); // Log caso falte algum dado
//         echo json_encode(array('success' => false, 'message' => 'Dados de login não enviados.'));
//     }
//     wp_die(); // Finaliza a requisição AJAX
// }
// add_action('wp_ajax_nopriv_ajax_login', 'ajax_login');
// add_action('wp_ajax_ajax_login', 'ajax_login');

add_action('wp_ajax_custom_login', 'custom_login_function');
add_action('wp_ajax_nopriv_custom_login', 'custom_login_function');

function custom_login_function() {
    if (!isset($_POST['email']) || !isset($_POST['password'])) {
        wp_send_json_error(array('message' => 'Por favor, preencha todos os campos.'));
    }

    $email = sanitize_email($_POST['email']);
    $password = sanitize_text_field($_POST['password']);

    // Verifica as credenciais
    $user = get_user_by('email', $email);

    if ($user && wp_check_password($password, $user->user_pass, $user->ID)) {
        // Realiza o login do usuário
        wp_set_current_user($user->ID);
        wp_set_auth_cookie($user->ID);

        // Retorna a resposta de sucesso
        wp_send_json_success(array(
            'redirect_url' => home_url() // Ou qualquer URL para redirecionamento após o login
        ));
    } else {
        wp_send_json_error(array('message' => 'Credenciais inválidas.'));
    }
}

// function ajax_register() {
//     // Checar se os dados foram enviados via AJAX
//     if ( isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) ) {
//         $username = sanitize_text_field($_POST['username']);
//         $email = sanitize_email($_POST['email']);
//         $password = $_POST['password'];
        
//         // Verificar se o e-mail já está em uso
//         if ( email_exists($email) ) {
//             echo json_encode(array('success' => false, 'message' => 'Este e-mail já está em uso.'));
//             wp_die();
//         }
        
//         // Criar o usuário
//         $user_id = wp_create_user($username, $password, $email);
        
//         // Verificar se houve sucesso ao criar o usuário
//         if (!is_wp_error($user_id) ) {
//             // Login automático após o registro
//             wp_signon(array(
//                 'user_login'    => $username,
//                 'user_password' => $password,
//                 'remember'      => true
//             ));

//             echo json_encode(array('success' => true, 'message' => 'Usuário registrado e logado com sucesso.'));
//         } else {
//             echo json_encode(array('success' => false, 'message' => 'Erro ao criar usuário.'));
//         }
//     }
//     wp_die(); // Finalizar a requisição AJAX
// }
// add_action('wp_ajax_nopriv_ajax_register', 'ajax_register'); // Para usuários não logados
// add_action('wp_ajax_ajax_register', 'ajax_register'); // Para usuários logados

add_action('wp_ajax_custom_register', 'custom_register_function');
add_action('wp_ajax_nopriv_custom_register', 'custom_register_function');

function custom_register_function() {
    if (!isset($_POST['username']) || !isset($_POST['email']) || !isset($_POST['password'])) {
        wp_send_json_error(array('message' => 'Por favor, preencha todos os campos.'));
    }

    $username = sanitize_text_field($_POST['username']);
    $email = sanitize_email($_POST['email']);
    $password = sanitize_text_field($_POST['password']);

    // Verifica se o email já está registrado
    if (email_exists($email)) {
        wp_send_json_error(array('message' => 'Este e-mail já está registrado.'));
    }

    // Verifica se o nome de usuário já está em uso
    if (username_exists($username)) {
        wp_send_json_error(array('message' => 'Este nome de usuário já está em uso.'));
    }

    // Cria o usuário no WordPress
    $user_id = wp_create_user($username, $password, $email);

    if (!is_wp_error($user_id)) {
        // Atribui o papel de 'cliente' ao novo usuário
        $user = new WP_User($user_id);
        $user->set_role('customer');

        // Realiza o login automaticamente
        wp_set_current_user($user_id);
        wp_set_auth_cookie($user_id);

        wp_send_json_success(array(
            'redirect_url' => home_url() // Redireciona após o registro
        ));
    } else {
        wp_send_json_error(array('message' => 'Erro ao registrar o usuário.'));
    }
}

// Função para fazer logout via AJAX
function ajax_logout() {
    // Verifica se o usuário está logado e se ele está no frontend
    if (is_user_logged_in() && !is_admin()) {
        wp_logout(); // Faz o logout apenas no frontend
        wp_redirect(home_url()); // Redireciona para a página inicial do site após o logout
        exit;

        echo json_encode(array('success' => true, 'message' => 'Você foi desconectado com sucesso no frontend.'));
    } else {
        // Se não estiver logado ou estiver no wp-admin, não faz logout
        echo json_encode(array('success' => false, 'message' => 'Você não está logado ou está no painel administrativo.'));
    }

    // Finaliza a execução da requisição AJAX
    wp_die();
}

// Registra a ação AJAX para usuários não logados e logados
add_action('wp_ajax_nopriv_ajax_logout', 'ajax_logout');
add_action('wp_ajax_ajax_logout', 'ajax_logout');

// Função para checar se o usuário está logado
function check_user_logged_in() {
    if (is_user_logged_in()) {
        echo json_encode(array('logged_in' => true));
    } else {
        echo json_encode(array('logged_in' => false));
    }
    wp_die();
}

add_action('wp_ajax_check_user_logged_in', 'check_user_logged_in');
add_action('wp_ajax_nopriv_check_user_logged_in', 'check_user_logged_in');

// Função para redirecionar usuários não administradores
// function redirect_non_admin_to_home() {
//     // Verifica se o usuário está no painel administrativo e não é um administrador
//     if ( is_admin() && !current_user_can('manage_options') ) {
//         wp_redirect(home_url()); 
//         exit;
//     }
// }
// add_action('init', 'redirect_non_admin_to_home');

// Passa a variável para abrir o modal de login no frontend
function add_login_modal_script() {
    if ( isset($_GET['login']) && $_GET['login'] == 'true' ) {  // Apenas se o parâmetro 'login=true' estiver presente na URL
        ?>
        <script type="text/javascript">
            // Função para exibir o modal de login com o page overlay
            jQuery(document).ready(function() {
                // Abrir o modal de login e exibir o overlay
                jQuery('#login-modal').show();
                jQuery('#modal-overlay').addClass('active');
            });
        </script>
        <?php
    }
}
add_action('wp_footer', 'add_login_modal_script');
?>
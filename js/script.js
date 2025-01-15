// if (typeof jQuery === 'undefined') {
//     var script = document.createElement('script');
//     script.src = 'https://code.jquery.com/jquery-3.6.0.min.js';
//     script.type = 'text/javascript';
//     script.onload = function() {
//         initScript();
//     };
//     document.head.appendChild(script);
// } else {
//     initScript();
// }

// function initScript() {
//     var myAjax = {
//         url: 'https://alisfitness.com.br/wp-admin/admin-ajax.php'
//     };

    const userIcon = document.getElementById('open-login-modal');
    const userIconContainer = document.getElementById('user-icon');
    const userMenu = document.getElementById('user-menu');
    const hoverZone = document.querySelector('.hover-zone');
    const logoutBtn = document.getElementById('logout-btn');

    const loginModal = document.getElementById('login-modal');
    const registerModal = document.getElementById('register-modal');
    const pageOverlay = document.getElementById('modal-overlay');

    const closeLogin = document.getElementById('closeLogin');
    const closeRegister = document.getElementById('closeRegister');
    const showRegisterModal = document.getElementById('showRegisterModal');
    const showLoginModal = document.getElementById('showLoginModal');

    // // Função para verificar se o usuário está logado
    // function isUserLoggedIn(callback) {
    //     const cookies = document.cookie.split(';');
    //     let isLoggedIn = false;
        
    //     // Verifica a presença do cookie "wordpress_logged_in"
    //     cookies.forEach(cookie => {
    //         if (cookie.trim().startsWith('wordpress_logged_in_')) {
    //             isLoggedIn = true;
    //         }
    //     });
        
    //     console.log(isLoggedIn ? "Usuário logado, cookie detectado." : "Usuário não logado, cookie não detectado.");
    //     callback(isLoggedIn);
    // }
    
    // Função para mostrar o menu de usuário
    function showUserMenu() {
        userMenu.style.display = 'block';
    }

    // Função para esconder o menu de usuário
    function hideUserMenu() {
        userMenu.style.display = 'none';
    }

    // Função para alternar visibilidade do menu de usuário ao passar o mouse
    function handleMouseEnter() {
        if (isLoggedIn) {
            showUserMenu();
        }
    }

    // Função para ocultar o menu quando o mouse sair do ícone, hover-zone e do menu
    function handleMouseLeave() {
        setTimeout(() => {
            if (!userIconContainer.matches(':hover') && !hoverZone.matches(':hover') && !userMenu.matches(':hover')) {
                hideUserMenu();
            }
        }, 100);
    }

    // Inicializa o comportamento dependendo do estado de login
    function initUserMenu() {
        if (isLoggedIn) {
            showUserMenu();  // Mostrar o menu se o usuário estiver logado
        } else {
            hideUserMenu();  // Esconder o menu se não estiver logado
        }
    }
    
    initUserMenu();
    
    // Event listeners para exibir/ocultar o menu do usuário ao passar o mouse
    userIconContainer.addEventListener('mouseenter', handleMouseEnter);
    hoverZone.addEventListener('mouseenter', handleMouseEnter);
    userMenu.addEventListener('mouseenter', handleMouseEnter);
    userIconContainer.addEventListener('mouseleave', handleMouseLeave);
    hoverZone.addEventListener('mouseleave', handleMouseLeave);
    userMenu.addEventListener('mouseleave', handleMouseLeave);

    // // Função de logout (via AJAX) - Afeta somente o frontend
    // logoutBtn.addEventListener('click', function(e) {
    //     e.preventDefault();
    
    //     // Enviar a requisição para o backend para efetuar o logout
    //     jQuery.post(myAjax.url, { action: 'ajax_logout' }, function(response) {
    //         const result = JSON.parse(response);
    //         if (result.success) {
    //             console.log("Logout bem-sucedido.");
    //             alert(result.message);
    //             location.reload();  // Recarregar a página ou redirecionar para garantir que o estado do login seja atualizado
    //         } else {
    //             console.log("Erro no logout.");
    //             alert(result.message);  // Mensagem de erro
    //         }
    //     });
    // });
    
    // Checar se o usuário já está logado
    function checkLoginStatus() {
        if (isLoggedIn) {
            userIcon.addEventListener('click', function (event) {
                event.preventDefault();
                alert('Você já está logado!');
            });
        } else {
            userIcon.addEventListener('click', function (event) {
                event.preventDefault();
                openLoginModal();
            });
        }
    }
    
    checkLoginStatus();

    // // Código do login
    // userIcon.addEventListener('click', function(e) {
    //     if (!isUserLoggedIn()) {
    //         openLoginModal();
    //     }
    // });

    // Função para abrir o modal de login
    function openLoginModal() {
        loginModal.style.display = 'block';
        registerModal.style.display = 'none';
        pageOverlay.classList.add('active');
    }

    // Função para abrir o modal de registro
    function openRegisterModal() {
        registerModal.style.display = 'block';
        loginModal.style.display = 'none';
        pageOverlay.classList.add('active');
    }

    // Fechar modais
    closeLogin.addEventListener('click', function() {
        loginModal.style.display = 'none';
        pageOverlay.classList.remove('active');
    });

    closeRegister.addEventListener('click', function() {
        registerModal.style.display = 'none';
        pageOverlay.classList.remove('active');
    });

    showRegisterModal.addEventListener('click', function() {
        openRegisterModal();
    });

    showLoginModal.addEventListener('click', function() {
        openLoginModal();
    });

    window.addEventListener('click', function(event) {
        if (event.target === pageOverlay) {
            loginModal.style.display = 'none';
            registerModal.style.display = 'none';
            pageOverlay.classList.remove('active');
        }
    });

    window.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            loginModal.style.display = 'none';
            registerModal.style.display = 'none';
            pageOverlay.classList.remove('active');
        }
    });
    
    const togglePasswordIcons = document.querySelectorAll('.toggle-password');
    togglePasswordIcons.forEach(icon => {
        icon.addEventListener('click', function () {
            const passwordInput = this.previousElementSibling;
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);

            // Alterna o ícone entre olho aberto e fechado
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });
    });

    // // Função de login via AJAX
    // document.getElementById('login-form').addEventListener('submit', function(e) {
    //     e.preventDefault();

    //     let email = document.getElementById('login-email').value;
    //     let password = document.getElementById('login-password').value;

    //     const data = {
    //         action: 'ajax_login',
    //         email: email,
    //         password: password
    //     };

    //     jQuery.post(myAjax.url, data, function(response) {
    //         const result = JSON.parse(response);
    //         if (result.success) {
    //             console.log("Login bem-sucedido");
    //             alert(result.message);
    //             location.reload();  // Recarregar para atualizar a página com o estado de login
    //         } else {
    //             console.log("Erro no login");
    //             alert(result.message);
    //         }
    //     });
    // });
    
    document.getElementById('login-form').addEventListener('submit', function(event) {
        event.preventDefault(); // Impede o envio tradicional do formulário
    
        let email = document.getElementById('login-email').value;
        let password = document.getElementById('login-password').value;
    
        // Enviar dados via AJAX para a ação de login do WordPress
        jQuery.ajax({
            url: ajaxurl, // O WordPress já define isso
            method: 'POST',
            data: {
                action: 'custom_login', // Ação que vamos registrar no WordPress
                email: email,
                password: password
            },
            success: function(response) {
                if (response.success) {
                    let redirectUrl = localStorage.getItem('redirect_after_login') || '/';
                    window.location.href = redirectUrl; 
                } else {
                    alert(response.message); // Exibe uma mensagem de erro
                }
            }
        });
    });

    // // Função de registro via AJAX
    // document.getElementById('register-form').addEventListener('submit', function(e) {
    //     e.preventDefault();

    //     const username = document.getElementById('register-name').value;
    //     const email = document.getElementById('register-email').value;
    //     const password = document.getElementById('register-password').value;
    //     const confirmPassword = document.getElementById('confirm-password').value;

    //     if (password !== confirmPassword) {
    //         alert('As senhas não coincidem. Tente novamente.');
    //         return;
    //     }

    //     const data = {
    //         action: 'ajax_register',
    //         username: username,
    //         email: email,
    //         password: password
    //     };

    //     jQuery.post(myAjax.url, data, function(response) {
    //         const result = JSON.parse(response);
    //         if (result.success) {
    //             alert(result.message);
    //             location.reload();
    //         } else {
    //             alert(result.message);
    //         }
    //     });
    // });
    
    document.getElementById('register-form').addEventListener('submit', function(event) {
        event.preventDefault();
    
        let username = document.getElementById('register-name').value;
        let email = document.getElementById('register-email').value;
        let password = document.getElementById('register-password').value;
        let confirmPassword = document.getElementById('confirm-password').value;
    
        // Verificar se as senhas coincidem
        if (password !== confirmPassword) {
            alert("As senhas não coincidem.");
            return;
        }
    
        // Enviar dados via AJAX para a ação de registro do WordPress
        jQuery.ajax({
            url: ajaxurl, // O WordPress já define isso
            method: 'POST',
            data: {
                action: 'custom_register', // Ação que vamos registrar no WordPress
                username: username,
                email: email,
                password: password
            },
            success: function(response) {
                if (response.success) {
                    window.location.href = response.redirect_url; // Redireciona para a página inicial ou a página desejada
                } else {
                    alert(response.message); // Exibe uma mensagem de erro
                }
            }
        });
    });
    document.addEventListener('DOMContentLoaded', function () {
        const adicionarEnderecoHeader = document.getElementById('adicionar-endereco-header');
        const enderecosHeader = document.getElementById('enderecos-header');
        const enderecosView = document.getElementById('enderecos-view');
        const addAddressBtn = document.querySelector('#add-address-btn');
        const addressForm = document.querySelector('#address-form');
        const addressesTitle = document.getElementById('addresses-title');
        const noAddressMessage = document.getElementById('no-address-message');
        const cancelAddressBtn = document.querySelector('#cancel-address');
        const enderecosContainer = document.getElementById('enderecos-container');
        
        let editIndex = -1; // Índice do endereço a ser editado, -1 significa adicionar novo
        
        // Função para renderizar os endereços
        function RenderAddress() {
            enderecosContainer.innerHTML = '';
            enderecosView.innerHTML = '';
            
            enderecosHeader.style.display = 'block';
            adicionarEnderecoHeader.style.display = 'none';
            
            // Carregar os endereços do banco de dados via AJAX
            jQuery.ajax({
                url: ajaxurl,
                type: 'POST',
                data: {
                    action: 'get_user_addresses', // Ação definida no functions.php
                    user_email: userEmail
                },
                success: function(response) {
                    if (response.success && Array.isArray(response.data.data)) {
                        const enderecos = response.data.data;
        
                        if (enderecos.length === 0) {
                            enderecosView.innerHTML = `<p>Nenhum endereço cadastrado.</p>`;
                            
                            const addButton = document.createElement('button');
                            addButton.id = 'add-address-btn';
                            addButton.className = 'find-products-btn';
                            addButton.textContent = 'Adicionar Endereço';
                            addButton.onclick = showEditForm;
                            
                            enderecosView.appendChild(addButton);
                            enderecosContainer.style.display = 'none';
                        } else {
                            const addButton = document.createElement('button');
                            addButton.id = 'add-address-btn';
                            addButton.className = 'find-products-btn';
                            addButton.textContent = 'Adicionar Endereço';
                            addButton.onclick = showEditForm;
                            
                            enderecosView.appendChild(addButton);
                            enderecos.forEach((endereco, index) => {
                                const enderecoDiv = document.createElement('div');
                                enderecoDiv.className = 'endereco-item';
                                
                                // Adiciona borda para o endereço padrão
                                if (JSON.parse(endereco.isDefault) === true) {
                                    console.log('Endereço Padrão:', endereco.isDefault);
                                    enderecoDiv.style.border = '1px solid #424240';
                                } else {
                                    console.log('Endereço não padrão:', endereco.isDefault);
                                }
                                
                                enderecoDiv.innerHTML += `
                                    <h4>${endereco.firstName} ${endereco.lastName}</h4>
                                    <p>${endereco.address}, ${endereco.number}</p>
                                    <p>${endereco.complement || ''}</p>
                                    <p>${endereco.neighborhood}</p>
                                    <p>${endereco.city}, ${endereco.state}, ${endereco.cep}, ${endereco.country || 'Brasil'}</p>
                                    <p>${endereco.phone}</p>
                                    <div class="endereco-buttons">
                                        <button class="editar-info-endereco-btn" data-index="${index}">Editar</button>
                                        <button class="excluir-endereco-btn" data-index="${index}">Excluir</button>
                                    </div>
                                    <div class="default-buttons">
                                        ${JSON.parse(endereco.isDefault) === true 
                                            ? `<span class="padrao">Padrão</span>` 
                                            : `<button class="set-default-btn" data-index="${index}">Definir como padrão</button>`
                                        }
                                    </div>
                                `;
                                enderecosContainer.appendChild(enderecoDiv);
                            });
                            
                            // // Verifica se algum endereço é padrão
                            // const defaultAddress = enderecos.find(endereco => endereco.isDefault);
                            
                            // // Se não houver nenhum padrão, marca o primeiro como padrão
                            // if (!defaultAddress && enderecos.length > 0) {
                            //     const firstAddressButton = document.querySelector('.set-default-btn');
                            //     if (firstAddressButton) {
                            //         firstAddressButton.textContent = 'Padrão';
                            //         firstAddressButton.disabled = true;
                            //     }
                            // }
                            
                            // Adicionar evento de clique para editar o endereço
                            const editButtons = document.querySelectorAll('.editar-info-endereco-btn');
                            editButtons.forEach(button => {
                                button.addEventListener('click', function() {
                                    const index = this.dataset.index;
                                    showEditForm(enderecos[index], index); // Passar os dados do endereço para o formulário de edição
                                });
                            });
                            
                            // Adicionar evento de clique para excluir o endereço
                            const deleteButtons = document.querySelectorAll('.excluir-endereco-btn');
                            deleteButtons.forEach(button => {
                                button.addEventListener('click', function() {
                                    const index = this.dataset.index;
                                    handleDeleteAddress(index); // Chama a função para excluir o endereço
                                });
                            });
                            
                            // Adiciona evento de clique para o botão "Definir como padrão"
                            const defaultButtons = document.querySelectorAll('.set-default-btn');
                            defaultButtons.forEach(button => {
                                button.addEventListener('click', function() {
                                    const index = this.dataset.index;
                                    handleSetDefaultAddress(enderecos, index); // Define o endereço como padrão
                                });
                            });
                        }
                    } else {
                        console.error("A resposta não é um array válido de endereços ou não foi retornado sucesso.");
                        enderecosView.innerHTML = `<p>Erro ao carregar os endereços. Tente novamente.</p>`;
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Erro ao carregar os endereços:", error);
                    enderecosView.innerHTML = `<p>Erro ao carregar os endereços. Tente novamente.</p>`;
                }
            });
            
            enderecosContainer.style.display = 'flex';
        }
        
        // Função para excluir o endereço
        function handleDeleteAddress(index) {
            if(confirm('Você tem certeza que deseja excluir este endereço?')) {
                // Enviar a solicitação de exclusão via AJAX
                jQuery.ajax({
                    url: ajaxurl,
                    type: 'POST',
                    data: {
                        action: 'delete_user_address',
                        user_email: userEmail,
                        index: index
                    },
                    success: function(response) {
                        if (response.success) {
                            RenderAddress();
                        } else {
                            alert('Erro ao excluir o endereço. Tente novamente.');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Erro ao excluir o endereço:', error);
                        alert('Erro ao excluir o endereço. Tente novamente.');
                    }
                });
            }
        }
        
        function handleSetDefaultAddress(enderecos, index) {
            // Atualiza todos os endereços para que apenas o escolhido tenha 'isDefault' como true
            enderecos.forEach((endereco, idx) => {
                if (idx === index) {
                    endereco.isDefault = true;
                } else {
                    endereco.isDefault = false;
                }
            });
            
            // Enviar a solicitação para o servidor para atualizar o endereço como padrão
            jQuery.ajax({
                url: ajaxurl,
                type: 'POST',
                data: {
                    action: 'set_default_address',
                    user_email: userEmail,
                    index: index,
                    all_addresses: enderecos // Envia todos os endereços para garantir que apenas um seja padrão
                },
                success: function(response) {
                    if (response.success) {
                        // Ao atualizar o banco de dados, a interface deve ser recarregada
                        RenderAddress();  // Certifique-se de que todos os endereços sejam renderizados novamente com o "padrão" correto
                    } else {
                        alert('Erro ao definir o endereço como padrão. Tente novamente.');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Erro ao definir o endereço como padrão:', error);
                    alert('Erro ao definir o endereço como padrão. Tente novamente.');
                }
            });
        }
        
        // Mostrar o formulário para adicionar um novo endereço
        function showEditForm(endereco = {}, index = -1) {
            editIndex = index; // Armazena o índice do endereço a ser editado, ou -1 para novo
            enderecosView.style.display = 'none';
            addressForm.style.display = 'block';
            enderecosHeader.style.display = 'none';
            adicionarEnderecoHeader.style.display = 'block';
        
            // Limpa os campos para novos endereços
            document.querySelectorAll('#add-endereco-form input').forEach(input => {
                input.value = '';
                hideError(input);
            });
            
            // Preenche os campos com os dados do endereço, caso esteja editando
            if (index !== -1) {
                document.getElementById('first-name').value = endereco.firstName || '';
                document.getElementById('last-name').value = endereco.lastName || '';
                document.getElementById('cpf').value = endereco.cpf || '';
                document.getElementById('phone').value = endereco.phone || '';
                document.getElementById('address').value = endereco.address || '';
                document.getElementById('number').value = endereco.number || '';
                document.getElementById('complement').value = endereco.complement || '';
                document.getElementById('neighborhood').value = endereco.neighborhood || '';
                document.getElementById('city').value = endereco.city || '';
                document.getElementById('state').value = endereco.state || '';
                document.getElementById('cep').value = endereco.cep || '';
                document.getElementById('state').value = endereco.state || '';
            }
        
            // Limpa o contêiner de endereços
            const enderecosContainer = document.getElementById('enderecos-container');
            enderecosContainer.style.display = 'none';
        }
    
        // Ocultar o formulário de endereço quando o botão cancelar for pressionado
        cancelAddressBtn.addEventListener('click', function() {
            addressForm.style.display = 'none';
            enderecosView.style.display = 'block';
            enderecosHeader.style.display = 'block';
            adicionarEnderecoHeader.style.display = 'none';
            RenderAddress();
        });
        
        const form = document.getElementById('add-endereco-form');
        
        // Impede a validação padrão do navegador
        form.setAttribute('novalidate', true);
        
        // Função para exibir a mensagem de erro
        function showError(inputId, message) {
            const errorElement = document.getElementById(inputId + '-error');
            if (errorElement) {
                errorElement.style.display = 'block';
                errorElement.textContent = message;
            }
        }
        
        // Função para esconder a mensagem de erro
        function hideError(inputId) {
            const errorElement = document.getElementById(inputId + '-error');
            if (errorElement) {
                errorElement.style.display = 'none';
            }
        }
        
        // Função para validar se o campo contém apenas letras
        function validateName(name) {
            const regex = /^[A-Za-zÀ-ÿ\s]+$/;
            return regex.test(name);
        }
        
        // Função para validar CPF
        function validateCPF(cpf) {
            return /^\d{3}\.\d{3}\.\d{3}-\d{2}$/.test(cpf) || /^\d{11}$/.test(cpf);
        }
        
        // Função para formatar o CPF
        function formatCPF(value) {
            value = value.replace(/\D/g, ''); // Remove caracteres não numéricos
            if (value.length > 11) {
                value = value.slice(0, 11); // Limita a 11 dígitos
            }
            // Formatação: XXX.XXX.XXX-XX
            if (value.length > 3) {
                value = value.replace(/(\d{3})(\d)/, '$1.$2');
            } 
            if (value.length > 6) {
                value = value.replace(/(\d{3})\.(\d{3})(\d)/, '$1.$2.$3');
            }
            if (value.length > 10) {
                value = value.replace(/(\d{3})\.(\d{3})\.(\d{3})(\d)/, '$1.$2.$3-$4');
            }
            return value;
        }
        
        // Função para validar CPF em tempo real
        function validateCPFRealTime(input) {
            let cpfValue = input.value.replace(/\D/g, '');
        
            // Limitar a 11 dígitos
            if (cpfValue.length > 11) {
                cpfValue = cpfValue.substring(0, 11);
            }
        
            input.value = formatCPF(cpfValue);
        
            // Verificação de erros:
            if (cpfValue.length === 0) {
                showError(input.id, 'Campo obrigatório.');
            } else if (cpfValue.length < 11) {
                showError(input.id, 'O CPF está incompleto.');
            } else {
                hideError(input.id);
            }
        }
        
        // Função para validar o CPF ao perder o foco
        function validateCPFOnBlur(input) {
            let cpfValue = input.value.replace(/\D/g, '');
        
            // Verificar se o CPF está incompleto
            if (cpfValue.length > 0 && cpfValue.length < 11) {
                showError(input.id, 'O CPF está incompleto.');
            }
        }
        
        // Adicionar evento de input para validar CPF em tempo real
        document.getElementById('cpf').addEventListener('input', function () {
            validateCPFRealTime(this);
        });
        
        // Adicionar evento de blur para o CPF
        document.getElementById('cpf').addEventListener('blur', function () {
            validateCPFOnBlur(this);
        });
        
        // Função para validar DDD
        function validateDDD(ddd) {
            return /^(11|12|13|14|15|16|17|18|19|21|22|24|27|28|31|32|33|34|35|37|38|41|42|43|44|45|46|47|48|49|51|53|54|55|61|62|63|64|65|66|67|68|69|71|73|74|75|77|79|81|82|83|84|85|86|87|88|89|91|92|93|94|95|96|97|98|99)$/.test(ddd);
        }
        
        // Função para validar telefone
        function validatePhone(phone) {
            return /^\(\d{2}\) \d{4,5}-\d{4}$/.test(phone) || /^\d{10,11}$/.test(phone);
        }
        
        // Função para formatar o telefone
        function formatPhone(value) {
            value = value.replace(/\D/g, '');
            if (value.length > 11) {
                value = value.substring(0, 11);
            }
            // Formatação: (XX) XXXXX-XXXX
            value = value.replace(/^(\d{2})(\d)/, '($1) $2');
            value = value.replace(/(\d{5})(\d)/, '$1-$2');
            
            return value;
        }
        
        // Função para validar o telefone em tempo real
        function validatePhoneRealTime(input) {
            let phoneValue = input.value.replace(/\D/g, '');
            
            if (phoneValue.length > 11) {
                phoneValue = phoneValue.substring(0, 11);
            }
            
            input.value = formatPhone(phoneValue);
            
            // Verificação de erros:
            if (phoneValue.length === 0) {
                showError(input.id, 'Campo obrigatório.');
            } else if (phoneValue.charAt(0) === '0') {
                showError(input.id, 'O DDD é inválido.');
            } else if (phoneValue.length >= 2 && !validateDDD(phoneValue.slice(0, 2))) {
                showError(input.id, 'O DDD é inválido.');
            } else if (phoneValue.length >= 3 && phoneValue.charAt(2) !== '9') {
                showError(input.id, 'O prefixo deve ser 9.');
            } else {
                hideError(input.id);
            }
        }
        
        // Função para validar o telefone ao perder o foco (quando o telefone não estiver completo)
        function validatePhoneOnBlur(input) {
            let phoneValue = input.value.replace(/\D/g, '');
            if (phoneValue.charAt(0) === '0') {
                showError(input.id, 'O DDD é inválido.');
            } else if (phoneValue.length >= 2 && !validateDDD(phoneValue.slice(0, 2))) {
                showError(input.id, 'O DDD é inválido.');
            } else if (phoneValue.length >= 3 && phoneValue.charAt(2) !== '9') {
                showError(input.id, 'O prefixo deve ser 9.');
            } else if (phoneValue.length > 0 && phoneValue.length < 11) {
                showError(input.id, 'O número de telefone está incompleto.');
            }
        }
        
        // Adicionar evento de input para validar telefone em tempo real
        document.getElementById('phone').addEventListener('input', function () {
            validatePhoneRealTime(this);
        });
        
        // Adicionar evento de blur para o telefone
        document.getElementById('phone').addEventListener('blur', function() {
            validatePhoneOnBlur(this);
        });
        
        // Função para validar CEP
        function validateCEP(cep) {
            const regex = /^\d{5}-\d{3}$/;
            return regex.test(cep);
        }
        
        // Função para formatar o CEP
        function formatCEP(value) {
            value = value.replace(/\D/g, '');
            if (value.length > 8) {
                value = value.substring(0, 8);
            }
            
            if (value.length > 5) {
                value = value.replace(/(\d{5})(\d)/, '$1-$2');
            }
            return value;
        }
        
        // Função para buscar o CEP e preencher os campos automaticamente
        function fetchAddressByCEP(cep) {
            const url = `https://viacep.com.br/ws/${cep}/json/`;
            
            fetch(url)
                .then(response => response.json())
                .then(data => {
                    if (data.erro) {
                        showError('cep', 'CEP não encontrado.');
                    } else {
                        document.getElementById('address').value = data.logradouro || '';
                        document.getElementById('neighborhood').value = data.bairro || '';
                        document.getElementById('city').value = data.localidade || '';
                        document.getElementById('state').value = data.uf || '';
                        
                        // Após o preenchimento, verifica se os campos estão preenchidos para esconder os erros
                        checkFieldsAfterCEP();
                        
                        hideError('cep');
                    }
                })
                .catch(() => showError('cep', 'Ocorreu um erro ao buscar o CEP. Tente novamente.'));
        }
        
        // Função para checar os campos após o preenchimento do CEP
        function checkFieldsAfterCEP() {
            // Verifica e esconde os erros dos campos preenchidos automaticamente
            const addressField = document.getElementById('address');
            const neighborhoodField = document.getElementById('neighborhood');
            const cityField = document.getElementById('city');
            const stateField = document.getElementById('state');
        
            // Se os campos estiverem preenchidos, remove a mensagem de erro
            if (addressField.value.trim()) {
                hideError('address');
            }
        
            if (neighborhoodField.value.trim()) {
                hideError('neighborhood');
            }
        
            if (cityField.value.trim()) {
                hideError('city');
            }
            
            if (stateField.value.trim()) {
                hideError('state');
            }
        }
        
        // Função para validar o CEP em tempo real
        function validateCEPRealTime(input) {
            let cepValue = input.value.replace(/\D/g, '');
    
            // Limitar a 8 dígitos
            if (cepValue.length > 8) {
                cepValue = cepValue.substring(0, 8);
            }
    
            input.value = formatCEP(cepValue);
        }
        
        // Função para validar o CEP ao perder o foco
        function validateCEPOnBlur(input) {
            let cepValue = input.value.replace(/\D/g, '');
    
            if (cepValue.length === 0) {
                hideError(input.id);
            } else if (cepValue.length > 0 && cepValue.length < 8) {
                showError(input.id, 'O CEP está incompleto. Certifique-se de que tem 8 dígitos.');
            } else {
                fetchAddressByCEP(cepValue);
            }
        }
        
        // Adicionar evento de input para validar o CEP em tempo real
        document.getElementById('cep').addEventListener('input', function () {
            validateCEPRealTime(this);
        });
        
        // Adicionar evento de blur para o CEP
        document.getElementById('cep').addEventListener('blur', function () {
            validateCEPOnBlur(this);
        });
        
        // Função para validar número
        function validateNumber(number) {
            return /^\d+$/.test(number);
        }
        
        // Função para validar o campo de número (somente números)
        function validateNumberField(input) {
            const numberValue = input.value.replace(/\D/g, '');
            
            input.value = numberValue;
        }
        
        // Adicionar evento de input para validar o campo número
        document.getElementById('number').addEventListener('input', function () {
            validateNumberField(this);
        });
        
        // Função para validar o campo de selecionar um estado
        function validateState(state) {
            return state !== "";
        }
        
        // Função de validação de campos obrigatórios
        function validateRequiredFields() {
            let isValid = true;
            const requiredFields = [
                { id: 'first-name', mensagemErro: 'Campo obrigatório.' },
                { id: 'last-name', mensagemErro: 'Campo obrigatório.' },
                { id: 'cpf', mensagemErro: 'Campo obrigatório.' },
                { id: 'phone', mensagemErro: 'Campo obrigatório.' },
                { id: 'cep', mensagemErro: 'Campo obrigatório.' },
                { id: 'address', mensagemErro: 'Campo obrigatório.' },
                { id: 'number', mensagemErro: 'Campo obrigatório.' },
                { id: 'neighborhood', mensagemErro: 'Campo obrigatório.' },
                { id: 'city', mensagemErro: 'Campo obrigatório.' },
                { id: 'state', mensagemErro: 'Campo obrigatório.' }
            ];
            
            let firstErrorField = null;
    
            requiredFields.forEach((field) => {
                const input = document.getElementById(field.id);
                const fieldValue = input.value.trim();
    
                // Verificação: Se o campo está vazio
                if (!fieldValue) {
                    isValid = false;
                    showError(field.id, field.mensagemErro);
                    if (!firstErrorField) {
                        firstErrorField = input;
                    }
                } else {
                    hideError(field.id);
                }
            });
    
            // Se houver um campo com erro, dê foco a ele
            if (firstErrorField) {
                firstErrorField.focus();
            }
    
            return isValid;
        }
        
        // Atualiza a mensagem de erro em tempo real
        function atualizarErro(input) {
            const valor = input.value.trim();
            if (!valor) {
                showError(input.id, 'Campo obrigatório.');
            } else if (input.id === 'first-name' && !validateName(valor)) {
                showError(input.id, 'Nome deve conter apenas letras e espaços.');
            } else if (input.id === 'last-name' && !validateName(valor)) {
                showError(input.id, 'Sobrenome deve conter apenas letras e espaços.');
            } else if (input.id === 'phone') {
                validatePhoneRealTime(input);
            } else {
                hideError(input.id);
            }
        }
        
        // Adicionar evento de input para validação em tempo real
        document.querySelectorAll('#add-endereco-form input').forEach(input => {
            input.addEventListener('input', () => atualizarErro(input));
        });
        
        // Função para enviar o formulário via AJAX
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            
            if (validateRequiredFields()) {
                const formData = {
                    firstName: document.getElementById('first-name').value.trim(),
                    lastName: document.getElementById('last-name').value.trim(),
                    address: document.getElementById('address').value.trim(),
                    number: document.getElementById('number').value.trim(),
                    neighborhood: document.getElementById('neighborhood').value.trim(),
                    city: document.getElementById('city').value.trim(),
                    state: document.getElementById('state').value.trim(),
                    cep: document.getElementById('cep').value.trim(),
                    phone: document.getElementById('phone').value.trim(),
                    complement: document.getElementById('complement').value.trim(),
                    cpf: document.getElementById('cpf').value.trim(), 
                    isDefault: false
                };
                
                // Caso o endereço seja o primeiro ou marcado como "padrão", definimos o isDefault como true
                const allAddresses = getAllAddresses(); // Função que recupera todos os endereços atuais
                if (allAddresses.length === 0 || shouldBeDefault()) { // Verifica se o primeiro ou deseja marcar como padrão
                    formData.isDefault = true;
                }
                
                // Enviar os dados para o servidor
                jQuery.ajax({
                    url: ajaxurl,
                    type: 'POST',
                    data: {
                        action: editIndex === -1 ? 'save_user_address' : 'update_user_address',
                        user_email: userEmail, 
                        address_data: formData,
                        index: editIndex
                    },
                    success: function(response) {
                        if (response.success) {
                            RenderAddress();
                        } else {
                            alert('Erro ao salvar o endereço.');
                        }
                    }
                });
            
                // Mostra o título "Endereços" e o botão "Adicionar Endereço"
                enderecosHeader.style.display = 'block';
                adicionarEnderecoHeader.style.display = 'none';
                
                // Depois de salvar, volte para a visualização dos endereços
                addressForm.style.display = 'none';
                enderecosView.style.display = 'block';
            }
            
            // Função para verificar se o endereço deve ser o padrão
            function shouldBeDefault() {
                const firstAddressBtn = document.querySelector('.set-default-btn');
                return firstAddressBtn && firstAddressBtn.textContent === 'Padrão';
            }
            
            // Função para obter todos os endereços cadastrados
            function getAllAddresses() {
                // Aqui você pode pegar a lista de endereços através de um AJAX ou manipulação de dados de forma interna
                // Exemplo simples: Retorne a lista de endereços atual do seu formulário
                return Array.from(document.querySelectorAll('.endereco-item'));
            }
        });
        
        // Inicializa a visualização dos endereços
        RenderAddress();
    });
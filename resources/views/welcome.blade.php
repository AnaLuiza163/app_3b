<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f0f2f5;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.container {
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    width: 300px;
}

h2 {
    text-align: center;
}

label {
    display: block;
    margin-top: 10px;
}

input[type="text"],
input[type="password"],
input[type="email"] {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    width: 100%;
    padding: 10px;
    margin-top: 15px;
    border: none;
    border-radius: 5px;
    background-color: #007bff;
    color: #fff;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

.link {
    text-align: center;
    margin-top: 10px;
}

.link a {
    color: #007bff;
    text-decoration: none;
}

.link a:hover {
    text-decoration: underline;
}
        </style>
</head>
<body>
    <div class="container">
        <!-- Aba de Login -->
        <div id="login">
            <h2>Login</h2>
            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" placeholder="Digite seu CPF">
            <label for="senha">Senha:</label>
            <input type="password" id="senha" placeholder="Digite sua senha">
            <button onclick="entrar()">Entrar</button>
            <div class="link">
                <a href="#" onclick="mostrarAba('recuperar')">Recuperar Senha</a><br>
                <a href="#" onclick="mostrarAba('criar')">Criar Conta</a>
            </div>
        </div>

        <!-- Aba de Recuperação -->
        <div id="recuperar" class="aba" style="display: none;">
            <h2>Recuperar Senha</h2>
            <label for="cpf_recuperacao">CPF:</label>
            <input type="text" id="cpf_recuperacao" placeholder="Digite seu CPF">
            <button onclick="mostrarAba('redefinir')">Enviar Código</button>
            <button onclick="mostrarAba('login')">Voltar</button>
        </div>

        <!-- Aba de Redefinir Senha -->
        <div id="redefinir" class="aba" style="display: none;">
            <h2>Redefinir Senha</h2>
            <label for="nova_senha">Nova Senha:</label>
            <input type="password" id="nova_senha" placeholder="Digite a nova senha">
            <label for="confirmar_senha">Confirmar Senha:</label>
            <input type="password" id="confirmar_senha" placeholder="Confirme a nova senha">
            <button onclick="mostrarAba('login')">Fazer Login</button>
            <button onclick="enviarSenha()">Enviar</button>
        </div>

        <!-- Aba Criar Conta -->
        <div id="criar" class="aba" style="display: none;">
            <h2>Criar Conta</h2>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" placeholder="Digite seu nome">
            <label for="cpf_criar">CPF:</label>
            <input type="text" id="cpf_criar" placeholder="Digite seu CPF">
            <label for="email">Email:</label>
            <input type="email" id="email" placeholder="Digite seu e-mail">
            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" placeholder="Digite seu telefone">
            <label for="senha_criar">Senha:</label>
            <input type="password" id="senha_criar" placeholder="Digite sua senha">
            <label for="confirmar_senha_criar">Confirmar Senha:</label>
            <input type="password" id="confirmar_senha_criar" placeholder="Confirme sua senha">
            <button onclick="mostrarAba('login')">Voltar</button>
            <button onclick="cadastrar()">Cadastrar</button>
        </div>
    </div>

    <script >
function mostrarAba(aba) {
    const abas = ['login', 'recuperar', 'redefinir', 'criar'];
    abas.forEach(id => {
        document.getElementById(id).style.display = 'none';
    });
    document.getElementById(aba).style.display = 'block';
}

function entrar() {
    const cpf = document.getElementById('cpf').value;
    const senha = document.getElementById('senha').value;

    // Aqui você pode validar os dados
    alert(`CPF: ${cpf}\nSenha: ${senha}\n(Login de exemplo)`);
}

function enviarSenha() {
    const novaSenha = document.getElementById('nova_senha').value;
    const confirmar = document.getElementById('confirmar_senha').value;

    if (novaSenha === confirmar) {
        alert('Senha redefinida com sucesso!');
        mostrarAba('login');
    } else {
        alert('As senhas não coincidem.');
    }
}

function cadastrar() {
    const nome = document.getElementById('nome').value;
    const cpf = document.getElementById('cpf_criar').value;
    const email = document.getElementById('email').value;
    const telefone = document.getElementById('telefone').value;
    const senha = document.getElementById('senha_criar').value;
    const confirmar = document.getElementById('confirmar_senha_criar').value;

    if (senha === confirmar) {
        alert(`Cadastro realizado com sucesso!\nNome: ${nome}\nCPF: ${cpf}\nEmail: ${email}\nTelefone: ${telefone}`);
        mostrarAba('login');
    } else {
        alert('As senhas não coincidem.');
    }
}
    </script>
</body>
</html>




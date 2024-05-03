<?php
//Configurações do banco de dados
$dsn = 'mysql:host=localhost;dbname=cadastro';//dsn e protocolo - linha de conexão - 127.0.0.1 = localhost - dbname = nome do banco "cadastro"
$username = 'root';
$password = '';

try {//try = (tenta) ele e um metodo que ele vai realizar na tentativa da execução e se na hora da execução falhar ele vai relatar erro
    //Conexão com o banco de dados usando PDO
    $pdo = new PDO($dsn , $username, $password);//pdo = (inteprete/ intrução) 

    //Configura para lançar exceções em caso de erros
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//seta e oara chamar uma função dentro da outra 

    //Verifica se o formulário foi submetido
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        //Obtém os dados do formulário
        $nome = $_POST ['nome'];
        $data_nascimento = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $bairro = $_POST['bairro'];
        
        //Prepara consulta SQL
        $sql = "INSERT INTO lista (nome, data_nascimento, cidade, bairro)
        VALUES (:nome, :data_nascimento, :cidade, :bairro)";//':'-> e uma relção com as variveis(nome,ciade bairro e etc)

        //Prepara a declaração 
        $stmt = $pdo->prepare($sql);

        //Associa os parâmetros com os valores - arrumado os dados para o BD
        $stmt->bindValue(':nome', $nome, PDO::PARAM_STR);
        $stmt->bindValue(':data_nascimento', $data_nascimento, PDO::PARAM_STR);
        $stmt->bindValue(':cidade', $cidade, PDO::PARAM_STR);
        $stmt->bindValue(':bairro', $bairro, PDO::PARAM_STR);

        //executa a consulta
        $stmt->execute();
        
        echo "Dados inseridos com sucesso!";
    }
} catch(PDOExecption $e){
    //Em caso de erro, exibe a mensagem de erro
    echo "Erro: " , $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Formulário PHP PDO com Tailwind CSS</title>
        <link 
            href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
            rel="stylesheet">
    </head>
    <body class="bg-gray-100">
        <div class="container mx-auto py-8">
            <h2 class="text-2x1 font-bold mb-4">Insira seus dados:</h2>
            <form method="POST" class="max-w-lg">
                <div class="mb-4">
                    <label for="nome" class="block text-gray-700">
                        Nome:
                    </label>
                    <input
                        type="text"
                        id="nome"
                        nome="nome"
                        required="required"
                        class="form-input mt-1 block w-full">
                </div>
                
                <div class="mb-4">
                    <label for="data_nascimento" class="block text-gray-700">
                        Data de Nascimento:
                    </label>
                    <input
                        type="date"
                        id="data_nascimento"
                        nome="data_nascimento"
                        required="required"
                        class="form-input mt-1 block w-full">
                </div>

                <div class="mb-4">
                    <label for="cidade" class="block text-gray-700">
                        Cidade:
                    </label>
                    <input
                        type="text"
                        id="cidade"
                        nome="cidade"
                        required="required"
                        class="form-input mt-1 block w-full">
                </div>

                <div class="mb-4">
                    <label for="bairro" class="block text-gray-700">
                        Bairro:
                    </label>
                    <input
                        type="text"
                        id="bairro"
                        nome="bairro"
                        required="required"
                        class="form-input mt-1 block w-full">
                </div>

                <button
                    type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-while
                    font-bold py-2 px-4 rounded">Enviar</button>
            </form>
        </div>
    </body>
</html>
                        
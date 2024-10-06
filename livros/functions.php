<?php

    include('../config.php');
    include(DBAPI);

    $livros = null;
    $livro = null;

    
    //  Listagem de Clientes
    
    function index() {
        global $livros;
        $livros = find_all('livros');
    }

    
    //   Visualização de um Cliente
     
    function view($id = null) {
    global $livro;
    $livro = find('livros', $id);
    }



    //   Cadastro de Clientes
 
    function add() {
        // Verificar se o formulário foi enviado e se contém dados do livro
        if (!empty($_POST['livro'])) {
            // Criar um objeto DateTime para armazenar a data e hora atual
            $now = new DateTime("now", new DateTimeZone('America/Sao_Paulo'));
            
            // Obter os dados do livro do formulário
            $livro = $_POST['livro'];
            
            // Inicializar a variável que armazenará o caminho da imagem
            $livro['capa'] = null;
    
            // Lidar com o upload da imagem (se houver um arquivo enviado)
            if (isset($_FILES['capa']['name']) && $_FILES['capa']['error'] == 0) {
                $upload_dir = 'uploads/';
                $file_extension = pathinfo($_FILES['capa']['name'], PATHINFO_EXTENSION);
                $new_file_name = uniqid() . '.' . $file_extension; // Gerar um nome único para a imagem
                $uploaded_file = $upload_dir . $new_file_name;
    
                // Verificar e mover o arquivo enviado para o diretório de uploads
                if (move_uploaded_file($_FILES['capa']['tmp_name'], $uploaded_file)) {
                    $livro['capa'] = $uploaded_file; // Salvar o caminho da imagem no banco de dados
                } else {
                    echo "Erro ao enviar a imagem.";
                }
            }
    
            // Definir as datas de criação e modificação do livro
            $livro['modified'] = $livro['created'] = $now->format("Y-m-d H:i:s");
    
            // Salvar o livro no banco de dados usando a função save
            save("livros", $livro);
    
            // Redirecionar o usuário de volta à página inicial após o salvamento
            header('Location: index.php');
            exit(); // Para garantir que o código pare após o redirecionamento
        }
    }


        /**
     *	Atualizacao/Edicao de Cliente
    */
    function edit() {

        $now = date_create("now", new DateTimeZone("America/Sao_Paulo"));
    
        if (isset($_GET["id"])) {
    
        $id = $_GET["id"];
         if (isset($_FILES['capa']['name']) && $_FILES['capa']['error'] == 0) {
                $upload_dir = 'uploads/';
                $file_extension = pathinfo($_FILES['capa']['name'], PATHINFO_EXTENSION);
                $new_file_name = uniqid() . '.' . $file_extension; // Gerar um nome único para a imagem
                $uploaded_file = $upload_dir . $new_file_name;
    
                // Verificar e mover o arquivo enviado para o diretório de uploads
                if (move_uploaded_file($_FILES['capa']['tmp_name'], $uploaded_file)) {
                    $livro['capa'] = $uploaded_file; // Salvar o caminho da imagem no banco de dados
                } else {
                    echo "Erro ao enviar a imagem.";
                }
            }
    
    
        if (isset($_POST['livro'])) {

            $livro = $_POST["livro"];
            $livro["modified"] = $now->format("Y-m-d H:i:s");
    
            update("livros", $id, $livro);
            header("location: index.php");
        } else {
    
            global $livro;
            $livro = find('livros', $id);
        } 
        } else {
        header('location: index.php');
        }
    }
    
        
    /**
     *  Exclusão de um Cliente
     */
    function delete($id = null) {

    global $livro;
    $livro = remove('livros', $id);

    header('location: index.php');
    }

    
    
?>
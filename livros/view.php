<?php
    include("functions.php");
    view($_GET["id"]);
    include(HEADER_TEMPLATE);
?>

    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="../icons8-livros-32.ico" type="image/x-icon">

        <link rel="stylesheet" href="<?php echo BASEURL; ?>css/awesome/all.min.css">
        <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo BASEURL; ?>css/global.css">
    </head>

    <section class="custom-shadow bg-dark">
        <h2>Livro <?php echo $livro["id"]; ?></h2>
        <hr class="border border-light  border-2 opacity-75">

        <?php if (!empty($_SESSION['message'])): ?>
            <div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
        <?php endif; ?>

        <dl class="dl-horizontal">
            <dt>Nome:</dt>
            <dd><?php echo $livro['titulo_livro']; ?></dd>

            <dt>Autor:</dt>
            <dd><?php echo $livro['autor']; ?></dd>

            <dt>Editora:</dt>
            <dd><?php echo $livro['editora']; ?></dd>
        </dl>

        <dl class="dl-horizontal">
            <dt>Descrição:</dt>
            <dd><?php echo $livro['descricao']; ?></dd>

            <dt>capa:</dt>
            <dd><?php echo $livro['capa']; ?></dd>

            <dt>Preço:</dt>
            <dd><?php echo cep($livro['preco']); ?></dd>

            <dt>genero:</dt>
            <dd><?php echo cep($livro['genero_livro']); ?></dd>

            <dt>Data da ultima atualização:</dt>
            <dd><?php echo formatadata($livro['modified'], "d/m/Y"); ?></dd>
        </dl>

        
        <div id="actions" class="row">
            <div class="col-md-12">
                <a href="edit.php?id=<?php echo $livro['id']; ?>" class="btn btn-primary">Editar</a>
                <a href="index.php" class="btn btn-secondary">Voltar</a>
            </div>
        </div>
        <?php include(FOOTER_TEMPLATE); ?>
    </section>


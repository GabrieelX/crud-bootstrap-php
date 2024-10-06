<?php 
  include("functions.php"); 
  edit();
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
    <h2 class="mt-2">Atualizar Cliente</h2>

    <form action="edit.php?id=<?php echo $livro['id']; ?>" method="post" enctype="multipart/form-data">
      <!-- area de campos do form -->
      <hr class="border border-light  border-2 opacity-75">
      <div class="row">
        <div class="form-group col-md-7">
          <label for="name">Nome do livro</label>
          <input type="text" class="form-control" name="livro['titulo_livro']"maxlength="50" value="<?php echo $livro['titulo_livro']; ?>">
        </div>

        <div class="form-group col-md-3">
          <label for="campo2">Autor</label>
          <input type="text" class="form-control" name="livro['autor']" value="<?php echo $livro['autor']; ?>">
        </div>

        <div class="form-group col-md-2">
          <label for="campo3">Editora</label>
          <input type="date" class="form-control" name="livro['editora']" value="<?php echo $livro['editora']; ?>">
        </div>
      </div>
      
      <div class="row">
        <div class="form-group col-md-5">
          <label for="campo1">Descrição</label>
          <input type="text" class="form-control" name="livro['descricao']" value="<?php echo $livro['descricao']; ?>">
        </div>

        <div class="form-group col-md-3">
          <label for="campo2">capa</label>
          <input type="file" name="capa" id="capa" class="form-control" accept="image/*" onchange="previewImage(event)">
          <img id="image-preview" src="#" alt="Pré-visualização da Capa" style="display:none; margin-top:10px; max-width:100%; height:auto;">
        </div>
        
        <div class="form-group col-md-2">
          <label for="campo3">Preço</label>
          <input type="text" class="form-control" name="livro['preco']"  value="<?php echo $livro['preco']; ?>">
        </div>
        
        <div class="form-group col-md-2">
          <label for="campo3">Genero do livro</label>
          <input type="text" class="form-control" name="livro['genero_livro']" disabled  value="<?php echo $livro['genero_livro']; ?>">
        </div>
      </div>
      
    
      
      <div id="actions" class="row mt-2">
        <div class="col-md-12">
          <button type="submit" class="btn btn-primary"><i class="fa-solid fa-sd-card"></i> Salvar</button>
          <a href="index.php" class="btn btn-light"><i class="fa-solid fa-rotate-left"></i> Cancelar</a>
        </div>
      </div>
    </form>
    <?php include(FOOTER_TEMPLATE); ?>
  </section>
  <script src="../js/preview.js"></script>

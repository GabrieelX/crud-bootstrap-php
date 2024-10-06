<?php 
  include("functions.php"); 
  add();
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

<section class="bg-dark custom-shadow p-4 ">
  <h2 class="mt-2" >Novo Livro</h2>

  <form action="add.php" method="post" enctype="multipart/form-data">
    <!-- area de campos do form -->
    <hr class="border border-light  border-2 opacity-75">
    <div class="row">
      <div class="form-group col-md-7">
        <label for="name">Nome do livro </label>
        <input type="text" class="form-control" name="livro[titulo_livro]"maxlength="50">
      </div>

      <div class="form-group col-md-3">
        <label for="campo2">Autor</label>
        <input type="text" class="form-control" name="livro[autor]">
      </div>

      <div class="form-group col-md-2">
        <label for="campo3">Editora</label>
        <input type="text" class="form-control" name="livro[editora]">
      </div>
    </div>
    
    <div class="row">
      <div class="form-group col-md-5">
        <label for="campo1">Descrição</label>
        <input type="text" class="form-control" name="livro[descricao]">
      </div>

      <div class="form-group col-md-3">
        <label for="capa">Capa do Livro</label>
        <input type="file" name="capa" id="capa" class="form-control" accept="image/*" onchange="previewImage(event)">
        <img id="image-preview" src="#" alt="Pré-visualização da Capa" style="display:none; margin-top:10px; max-width:100%; height:auto;">
      </div>
      
      <div class="form-group col-md-2">
        <label for="campo3">Preço</label>
        <input type="text" class="form-control" name="livro[preco]">
      </div>
      
      <div class="form-group col-md-2">
        <label for="campo3">Genero do Livro</label>
        <input type="text" class="form-control" name="livro[genero_livro]">
      </div>
      <div class="form-group col-md-2">
        <label for="campo4">Data de Cadastro</label>
        <input type="text" class="form-control" name="livro[created]" disabled>
      </div>
    </div>
    
    <div id="actions" class="row mt-2">
      <div class="col-md-12">
        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-sd-card"></i> Salvar</button>
        <a href="index.php" class="btn btn-light"><i class="fa-solid fa-rotate-left"></i> Cancelar</a>
      </div>
    </div>
  </form>
</section>
<script src="../js/preview.js"></script>
<?php
  include(FOOTER_TEMPLATE);
?>
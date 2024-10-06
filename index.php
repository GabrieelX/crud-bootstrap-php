<?php 
	include "config.php"; 

	include DBAPI; 

	include(HEADER_TEMPLATE); 
	$db = open_database(); 
?>


		<head>
			<meta charset="utf-8">
			<title>CRUD com Bootstrap</title>
			<meta name="description" content="">
			<meta name="keywords" content="">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<!-- <link rel="icon" href="https://icons8.com.br/icon/457/books" type="image/x-icon"> -->
			<link rel="shortcut icon" href="icons8-livros-32.ico" type="image/x-icon">

			<link rel="stylesheet" href="<?php echo BASEURL; ?>css/awesome/all.min.css">
			<link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap/bootstrap.min.css">
			<link rel="stylesheet" href="<?php echo BASEURL; ?>css/global.css">
			<link rel="stylesheet" href="<?php echo BASEURL; ?>index.css">
        
    	</head>
		
		<style>
        /* Definir a imagem de fundo que cobre a tela toda */
       
    </style>
</head>
<body>

    <!-- Seção da imagem de fundo -->
    <div class="imgFundo"></div>
			<h1 class="">O que deseja fazer?</h1>
			<hr class="mt-5 border border-light  border-2 opacity-75">

			<?php if ($db) : ?>

				<div class="row">
    <div class="col-xs-6 col-sm-3 col-md-2 d-flex justify-content-center">
        <a href="customers/add.php" class="btn btn-primary w-100">
            <div class="text-center">
                <i class="fa fa-plus fa-5x"></i>
                <p>Novo Cliente</p>
            </div>
        </a>
    </div>

    <div class="col-xs-6 col-sm-3 col-md-2 d-flex justify-content-center">
        <a href="customers" class="btn btn-secondary w-100">
            <div class="text-center">
                <i class="fa fa-user fa-5x"></i>
                <p>Clientes</p>
            </div>
        </a>
    </div>


	<hr class="mt-5 border border-light  border-2 opacity-75">
	<!-- Livros -->
	<div class="row mt-5">
		<div class="col-xs-6 col-sm-3 col-md-2 d-flex justify-content-center">
			<a href="livros/add.php" class="btn btn-primary w-100">
				<div class="text-center">
					<i class="fa fa-plus fa-5x"></i>
					<p>Novo Livro</p>
				</div>
			</a>
		</div>

		<div class="col-xs-6 col-sm-3 col-md-2 d-flex justify-content-center">
			<a href="livros" class="btn btn-secondary w-100">
				<div class="text-center">
					<i class="fa fa-user fa-5x"></i>
					<p>Livros</p>
				</div>
			</a>
		</div>
	</div>


			 
			<?php else : ?>
				<div class="alert alert-danger" role="alert">
					<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
				</div>

			<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>
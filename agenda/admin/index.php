<!DOCTYPE html>
<?php
//session_start();
error_reporting(0);
/*session_start();
if (!isset($_SESSION)) {//Verificar se a sessão não já está aberta.
  session_start();*/
/*links*/
if (empty($_SERVER['HTTPS'])){
    $serverhttp = "http://";
  }else{
    $serverhttp = "https://";
}
$host = $serverhttp.$_SERVER['HTTP_HOST'];
$HOME = "$host/cantores";
$ADICIONAR = "$HOME/gravar.php";
$APAGAR = "$HOME/deletar.php";
$OR_EUCARISTICA = "$HOME/oracoes-eucaristica.php";
$LISTA = "$host/lista/";

?>
<html lang="pt_br">
  <head>
  
     <link rel="icon" type="image/png" sizes="16x16"  href="<?=$host?>/favicons/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">


    <!--<link rel="icon" type="image/x-icon" href="https://akamai.sscdn.co/letras/static/img/favicon.vbc34a3b.ico" /> 
    <link rel="apple-touch-icon" href="//akamai.sscdn.co/mletras/static/img/apple-touch-icon.v838068f9.png"> 
    <link rel="apple-touch-icon" sizes="72x72" href="//akamai.sscdn.co/mletras/static/img/apple-touch-icon.v8368.png"> 
    <link rel="apple-touch-icon" sizes="114x114" href="//akamai.sscdn.co/mletras/static/img/apple-touch-f9.png"> 
    <link rel="apple-touch-icon" sizes="144x144" href="//akamai.sscdn.co/mletras/static/img/apple-touch-ico8f9.png">
     -->
     
  
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Par&oacute;quia S&atilde;o Pedro Ap&oacute;stolo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<style>

</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark  bg-dark ">
<div class="container-fluid">
		  <a class="navbar-brand" href="<?=$HOME?>">Par&oacute;quia S&atilde;o Pedro Ap&oacute;stolo</a>
		  <button class="navbar-toggler" type="button"  data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  
		  
		  <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
			<ul class="navbar-nav">
			  <li class="nav-item active">
				<a class="nav-link" href="<?=$HOME?>">Inicio</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="<?=$ADICIONAR?>">Adicionar Letras</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="<?=$APAGAR?>">Apagar</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link " href="<?=$OR_EUCARISTICA?>">Ora&ccedil;&atilde;o Eucaristica</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link " href="<?=$LISTA?>">Lista de Cantos</a>
			  </li>
			</ul>
		  </div>
		 </div>
		</nav>

		<br />
		<div class="container">
	<div class="card">
	  <div class="card-header">
		Fonte e Cores
	  </div>
	  <div class="card-body border ferr">
		<div class="es">
			
		</div>
		
		
		
	  </div>
	</div>
</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	
  </body>
</html>
<?php
/*}else{
include "login.php";
}*/

?>


<!DOCTYPE html>
<?php
error_reporting(0);

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
$AGENDA = "$host/agenda/";

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
			  <button onclick="Mudarestado('collapseNavbar')" class="navbar-toggler" type="button"  data-bs-toggle="collapse" data-bs-target="#collapseNavbar" aria-controls="collapseNavbar" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  
		  
		  <div class="collapse navbar-collapse"  id="collapseNavbar">
				<ul class="navbar-nav">
				  <li class="nav-item active">
					<a class="nav-link" href="/">Inicio</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="<?=$HOME?>">M&uacutesicas</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="<?=$AGENDA?>">Agenda Par&oacutequial</a>
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
		
<script>
function Mudarestado(el) {
        var display = document.getElementById(el).style.display;
        if(display == "none")
            document.getElementById(el).style.display = 'block';
        else
            document.getElementById(el).style.display = 'none';
    }
</script>


		
	<div class="card ">
  <h5 class="card-header">Online</h5>
  <div class="card-body" style="  position:relative; ">
    
	
	<div class="card  mb-3" style="max-width: 100vw;">
  <div class="card-header">Musicas para a missa <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-list" viewBox="0 0 16 16">
  <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2z"/>
  <path fill-rule="evenodd" d="M12 3v10h-1V3h1z"/>
  <path d="M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1V2.82z"/>
  <path fill-rule="evenodd" d="M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
</svg></div>
  <div class="card-body">
    <h5 class="card-title">Acessar p&aacute;gina das m&uacute;sicas</h5>
    <p class="card-text">Clique nesse link <a href="<?=$HOME?>">aqui</a>.</p>
  </div>
</div>


<div class="card  mb-3" style="max-width: 100vw;">
  <div class="card-header">Agenda Par&oacute;quial <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-square-fill" viewBox="0 0 16 16">
  <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.93 4.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg></div>
  <div class="card-body">
    <h5 class="card-title">Acessar p&aacute;gina da Agenda Par&oacute;quial</h5>
    <p class="card-text">Clique nesse link <a href="<?=$AGENDA?>">aqui</a>..</p>
  </div>	
	
	
	
  </div>
  
  <div class="card  mb-3" style="max-width: 100vw;">
  <div class="card-header">Ora&ccedil;&atilde;o Eucaristica <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-square-fill" viewBox="0 0 16 16">
  <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.93 4.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg></div>
  <div class="card-body">
    <h5 class="card-title">Acessar Ora&ccedil;&atilde;o Eucaristica</h5>
    <p class="card-text">Clique nesse link <a href="<?=$OR_EUCARISTICA?>">aqui</a>..</p>
  </div>	
	
	
	
  </div>
  
  
</div>

</body>
</html>



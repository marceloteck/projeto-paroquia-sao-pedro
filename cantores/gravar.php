<?php
include "part/top.php";		
?>
<?php
/** COMANDOS POST E GET **/
error_reporting(0);
$linksLetra = $_POST['link'];
$editor1 = $_POST['editor1'];
$title = $_POST['title'];
$video = $_POST['video'];
$novapasta = $_POST['novapasta'];
$date = $_POST['date'];
$pastaativa1 = $_POST['pastaativa1'];
$pastaativa2 = $_POST['pastaativa2'];
/** COMANDOS POST E GET **/

	/** CRIANDO O ARQUIVO PELO LINK **/
	if($linksLetra != ""){
		//$TipoCanto = $_GET['tipoc'];
		//$tpo = "<!--TipoCanto: $TipoCanto--> ";
		
		$content = my_file_get_contents($linksLetra); //PESQUISA NO SITE
		
		//BUSCANDO O TITULO
		$titulo = explode('"Name":"', $content);
		$titulo = explode('"};window', $titulo[1]);
		$titulo =  $titulo[0];
		
		//CRIANDO O LINK
		$link = preg_replace("/[^\w\s]/", "", iconv("UTF-8", "ASCII//TRANSLIT", $titulo));
		$link = str_replace(" ", "-", $link);
		$link = strtolower($link);
		
		//SABER EM QUAL PASTA SALVAR
		$pastaativa1 = strtolower($pastaativa1);
		$pastaativa1 = str_replace(" dia ", "&&", $pastaativa1);
		$pastaativa1 = str_replace(" ", "_", $pastaativa1);
		$pastaativa1 = str_replace("/", "-", $pastaativa1);
		
		//SEPARANDO SOMENTE A LETRA
		$contentArray = explode('<div class="folha-header">', $content);
		$contentArray = explode('<div class="modal-color">', $contentArray[1]);
		$contentArray = $contentArray[0];
		
		//MODIFICANDO URL
		$addurl = explode('href="', $contentArray);
		$addurl = explode('">', $addurl[1]);
		$addurl0 = 'href="'.$addurl[0].'">';
		$urlF = str_replace('&&', '__', $pastaativa1);
		$addurl1 = 'id="crs" href="../../../video.php'.$addurl[0].'?url=post/letras/'.$urlF.'/'.$link.'">';
		$contentArray = str_replace($addurl0,$addurl1, $contentArray);
		
		//REMOVENDO O NOME DO CANTOR
		$removercantor = explode('<h2><a href="', $contentArray);
		$removercantor = explode('</a></h2>', $removercantor[1]);
		$removercantor = '<h2><a href="'.$removercantor[0].'</a></h2>';
		$contentArray = str_replace($removercantor,"", $contentArray);
		//$contentArray = str_replace('" width="100%">',"", $contentArray);
		
		$contentArray = '<br /> <div class="container">'.$contentArray.'</div>';
		
		//ADICIONANDO UMA DIV
		$contentArray = str_replace('<div class="folha-cnt">','  <!--EDIT_2--> <div class="container"><div class="folha-cnt">', $contentArray);

		//INSERINDO PHP NO ARQUIVO
		$top = '<?php
		include "../../../part/top.php";
		include "../../../part/ferra.php";
		?>';
		$rodape = '<?php
		include "../../../part/rodape.php";
		?>';
		
		//JUNTANDO AS INFORMAÇÕES
		$ConteudoFin = $top.' <!-- -->'.$tpo.' <!--EDIT_1--> '.$contentArray.' <!--EDIT_0--> '.$rodape;
		
		//ESCREVENDO E CRIANDO O ARQUIVO
		function gravarLetras($texto,$link1,$pastaativa1){
			//Variável arquivo armazena o nome e extensão do arquivo.
			$arquivo = "./post/letras/$pastaativa1/$link1.php";		
			//Variável $fp armazena a conexão com o arquivo e o tipo de ação.
			$fp = fopen($arquivo, "w+");
			//Escreve no arquivo aberto.
			$escrito = fwrite($fp, $texto);
			if($escrito){
			echo '<script type="text/javascript">alert("Criado com sucesso!!!"); </script>';
			}else{
			echo '<script type="text/javascript">alert("Erro ao Criar arquivo"); </script>';
			}
			//Fecha o arquivo.
			fclose($fp);
		}
		if($link){
			gravarLetras($ConteudoFin,$link,$pastaativa1);
		}
	}else if($editor1 != "" and $title != ""){
	
		//RECEBENDO O TITULO
		$titulo =  $title;
		
		//CRIANDO LINK
		$link = preg_replace("/[^\w\s]/", "", iconv("UTF-8", "ASCII//TRANSLIT", $title));
		$link = str_replace(" ", "-", $link);
		$link = strtolower($link);
		
		//BUSCANDO QUAL PASTA SALVAR
		$pastaativa2 = strtolower($pastaativa2);
		$pastaativa2 = str_replace(" dia ", "&&", $pastaativa2);
		$pastaativa2 = str_replace(" ", "_", $pastaativa2);
		$pastaativa2 = str_replace("/", "-", $pastaativa2);
		
		//BUSCANDO O ID DO VIDEO
		$videoYoutube = $video;
		$videoYoutube = str_replace("https://www.youtube.com/watch?v=", "", $videoYoutube);
		$videoYoutube = str_replace("http://www.youtube.com/watch?v=", "", $videoYoutube);
		$videoYoutube = str_replace("https://youtu.be/", "", $videoYoutube);
		$videoYoutube = str_replace("http://youtu.be/", "", $videoYoutube);
		$lig = str_replace("&", "", $videoYoutube);
		if($lig){
			$videoYoutube = explode('&', $videoYoutube);
			$videoYoutube = $videoYoutube[0];
		}
		
		//INSERINDO PHP NO ARQUIVO
		$top = '<?php
		include "../../../part/top.php";
		include "../../../part/ferra.php";
		?> ';
		$rodape = '<?php
		include "../../../part/rodape.php";
		?>';
		
		//JUNTANDO AS INFORMAÇÕES
		$urlF = str_replace('&&', '__', $pastaativa2);
		$editor1 = '<br /> <!--EDIT_1--> <div class="container crs"><h1><a id="crs" href="../../../video.php?v='.$videoYoutube.'&url=post/letras/'.$urlF.'/'.$link.'">'.$titulo.'</a></h1><br />  <!--EDIT_2-->  <div class="folha-cnt">'.$editor1.'</div></div> <!--EDIT_0--> ';
		$ConteudoFin = $top.$editor1.$rodape;
		
		//ESCREVENDO E CRIANDO O ARQUIVO
		function gravarLetras($texto,$link,$pastaativa2){
			//Variável arquivo armazena o nome e extensão do arquivo.
			$arquivo = "post/letras/$pastaativa2/$link.php";
			//Variável $fp armazena a conexão com o arquivo e o tipo de ação.
			$fp = fopen($arquivo, "w+");
			//Escreve no arquivo aberto.
			$escrito = fwrite($fp, $texto);
			if($escrito){
			echo '<script type="text/javascript">alert("Criado com sucesso!!!"); </script>';
			}else{
			echo '<script type="text/javascript">alert("Erro ao Criar arquivo"); </script>';
			}
			
			//Fecha o arquivo.
			fclose($fp);
		}
		gravarLetras($ConteudoFin,$link,$pastaativa2);
		
		
	}else if($novapasta != ""){
		$pastaDir = 'post/letras/';
		
		if($date != ""){
		 $date = str_replace("/", "-", $date);
		 $date = str_replace(" ", "_", $date);
		 $date = date('d-m-Y', strtotime($date));
		 $date = '&&'.$date;
		}else{
			$date = "";
		}
		 
		 $novapasta = str_replace(" ", "_", $novapasta);
		 $novapasta = strtolower($pastaDir.$novapasta);

		$resultado = mkdir( $novapasta.$date , 0755, true);
		
		if($resultado){
		echo '<script type="text/javascript">alert("Criado com sucesso!!!"); </script>';
		}else{
		echo '<script type="text/javascript">alert("Erro ao Criar pasta"); </script>';
		}

	}
/** CRIANDO O ARQUIVO PELO LINK **/


date_default_timezone_set('America/Sao_Paulo');

function pastasMissa(){
$path = "post/letras/";
	$diretorio = dir($path);

	while($arquivo = $diretorio -> read()){
	if ($arquivo != '.' && $arquivo != '..'){
	$arquivof = str_replace("_", " ", $arquivo);
	$arquivof = str_replace("&&", " dia ", $arquivo);
	$arquivof = str_replace("-", "/", $arquivof);
	$arquivof = str_replace("_", " ", $arquivof);
	
	$arquivof = ucfirst($arquivof);

	$pastasM .= "<option>$arquivof</option>";
	}
	}
	$diretorio -> close();
	
	return $pastasM;
}
?>
<br />
<div class='container'>
	<h2> Adicionar uma nova letra </h2>
</div>
<br />
	<div class="accordion accordion-flush" id="accordionFlushExample">
	  <div class="accordion-item">
		<h2 class="accordion-header" id="flush-headingOne">
		  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
			Colocar letra pelo link
		  </button>
		</h2>
		<div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
		  <div class="accordion-body">
				<form method="post" action="#">
				<div class="form-group">
						<label for="inputState" class="form-label">Qual a missa?</label>
						<select name="pastaativa1" id="inputState" class="form-select">
						  <?=pastasMissa()?>
						  </select>
					<label for="exampleInputEmail1">Link do site</label>
					<input name="link" type="text" class="form-control" placeholder="link">
					<small id="emailHelp" class="form-text text-muted">Link do site www.letras.mus.br</small>
			  </div>
			  <br />
			  <button style="width:100%;" type="submit" name="button1" class="btn btn-dark">Enviar</button>
			</form>
		  </div>
		</div>
	  </div>
	  <div class="accordion-item">
		<h2 class="accordion-header" id="flush-headingTwo">
		  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
			Colocar o Texto da Musica
		  </button>
		</h2>
		<div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
		  <div class="accordion-body">
			<form  method="post" action="#">
				 <div class="form-group">
				    <button type="submit"  style="width:100%;" name="button2" class="btn btn-dark">Enviar</button>
					<br /><br />
					<label for="inputState" class="form-label">Qual a missa?</label>
					<select name="pastaativa2" id="inputState" class="form-select">
						  <?=pastasMissa()?>
						  </select>
						<br />
					<input name="video"  type="text" class="form-control" placeholder="Link do video do youtube">
					
					<br />
					<input name="title"  type="text" class="form-control" placeholder="TITULO">
					<br />
					<textarea name="editor1" id="editor1" width="100%"></textarea>
				</div>
			</form>
	</div>
		</div>
	  </div>
	  
	  <div class="accordion-item">
		<h2 class="accordion-header" id="flush-headingTree">
		  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTree" aria-expanded="false" aria-controls="flush-collapseTree">
			Criar pasta de Missa
		  </button>
		</h2>
		<div id="flush-collapseTree" class="accordion-collapse collapse" aria-labelledby="flush-headingTree" data-bs-parent="#accordionFlushExample">
		  <div class="accordion-body">
			 <form  method="post" action="#">
				 <div class="form-group">
					<input name="novapasta"  type="text" class="form-control" placeholder="Nome da Missa">
					<br />
					<input  name="date" type="date" value="">
					<small id="emailHelp" class="form-text text-muted">Escolha a data da missa</small>
					<br /><br />
					<button  style="width:100%;"  type="submit" name="button2" class="btn btn-dark">Enviar</button>
					
				 </div>
			</form>
		  </div>
		</div>
	  </div>
	  
	  <!--<div class="accordion-item">
		<h2 class="accordion-header" id="flush-headingweb">
		  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseweb" aria-expanded="false" aria-controls="flush-collapseweb">
			Pesquisar
		  </button>
		</h2>
		<div id="flush-collapseweb" class="accordion-collapse collapse" aria-labelledby="flush-headingweb" data-bs-parent="#accordionFlushExample">
		  <div class="accordion-body">
			 
					<a href="/web.php"><button  style="width:100%;"  type="submit" name="button2" class="btn btn-dark">Pesquisar  &nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
  <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
</svg></button> </a>
					
				 
		  </div>
		</div>
	  </div>-->
	  
	  
	</div>




<script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>



	<?php
include "part/rodape.php";
?>
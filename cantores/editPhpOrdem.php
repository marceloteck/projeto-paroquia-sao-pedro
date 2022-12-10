<?php
 //GETs

if(isset($_GET['editor1'])){
$editor1 = $_GET['editor1'];
}else{
$editor1 = "";
}

if(isset($_POST['title'])){
$title = $_POST['title'];
}else{
$title = "";
}
if(isset($_GET['link'])){
$linkget = $_GET['link'];
}else{
$linkget = "";
}
if(isset($_POST['pastaativa'])){
$pastaativa = $_POST['pastaativa'];
}else{
$pastaativa = "";
}



//INSERINDO PHP NO ARQUIVO
		$top = '<?php
		include "../../../part/top.php";
		include "../../../part/ferra.php";
		?> ';
		$rodape = '<?php
		include "../../../part/rodape.php";
		?>';

	function TextoEdt($HOME, $Url){ // buscar
		$Url = str_replace("__","&&", $Url); //.'.php'
		$content = my_file_get_contents($HOME.'/'.$Url);
		$content = explode('<!--EDIT_1-->', $content);
		$content = $content[1];
		$content = explode('<!--EDIT_0-->', $content);
		$content = $content[0];
		$content = '<!--EDIT_1-->'.$content.'<!--EDIT_0-->';
		return $content;
	}
	function LinkTitulo($HOME, $Url){ // buscar
		$Url = str_replace("__","&&", $Url);
		$content = my_file_get_contents($HOME.'/'.$Url);
		$content = explode('<!--EDIT_1-->', $content);
		$content = $content[1];
		$content = explode('id="crs" href="', $content);
		$content = $content[1];
		$content = explode('">', $content);
		$content = $content[0];
		return $content;
	}
	function linka($Url){ // buscar
		//$Url = str_replace("__","&&", $Url);
		
		$Url = $Url;
		//echo $Url;
		
		return $Url;
	}
	$linka = linka($urlL);
	
	
 $editor1 = $top.$editor1.$rodape;
	function CriarArquivo($editor1,$HOME,$linka){
			unlink($linka);
			$linka = str_replace('__', '&&', $linka);
			$arquivo = $linka;
			$fp = fopen($arquivo, "w+");
			$escrito = fwrite($fp, $editor1);
			if($escrito){
				echo '<script type="text/javascript">alert("Criado com sucesso!!!");        
						//window.location="'.$HOME.'/edit.php?url='.$NovaUrl.'";                
				</script>';
				if($AntigaUrl != $NovaUrl){
					//unlink($AntigaUrl.'.php');
				}
			}else{
				echo '<script type="text/javascript">alert("Erro ao Criar arquivo"); </script>';
			}
			fclose($fp);
	}
		
	
	/**/ 
	if($editor1 != "" and $title != ""){
		CriarArquivo($editor1,$HOME,$linka);
	}
	

///DEFINE
 //define('PASTA_ATUAL',PastaAtual($Url));
 //define('PASTA_FINAL_VISTA',PastaAtualConvertida(PastaAtual($Url)));
 //define('TITULO_FINAL_VISTO',TituloF($Url));
 define('TEXTO_FINAL_EDITAR',TextoEdt($HOME, $urlL));
 define('LINK_PARA_TITULO',LinkTitulo($HOME, $urlL));
 //define('PASTA_DIRETORIO',pastasMissa());
 
//echo TEXTO_FINAL_EDITAR;
 
 
 
?>
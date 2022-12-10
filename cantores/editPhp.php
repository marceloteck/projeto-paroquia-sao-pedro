<?php
 //GETs
$editor1 = $_POST['editor1'];
$title = $_POST['title'];
$linkget = $_POST['link'];
$pastaativa = $_POST['pastaativa'];
$Url = $_GET['url'];


//INSERINDO PHP NO ARQUIVO
		$top = '<?php
		include "../../../part/top.php";
		include "../../../part/ferra.php";
		?> ';
		$rodape = '<?php
		include "../../../part/rodape.php";
		?>';

 /// FUNÇOES DE ENTRADA DE INFORMAÇÕES
	function PastaAtual($Url){ // buscar
		$Url0 = explode('/', $Url);
		$Url1 = count($Url0)-1;
		$Url2 = count($Url0)-2;
		$urlArquivo = $Url0[$Url1];
		$urlpasta1 = $Url0[$Url2];
		return $urlpasta1;
	}
	function PastaAtualConvertida($urlpasta1){ // buscar
		$PastaP = str_replace("__", " dia ", $urlpasta1);
		$PastaP = str_replace("&&", " dia ", $PastaP);
		$PastaP = str_replace("_", " ", $PastaP);
		$PastaP = str_replace("deus", "Deus", $PastaP);
		$PastaP = str_replace("senhor", "Senhor", $PastaP);
		$PastaP = ucfirst($PastaP);
		return $PastaP;
	}
	function TituloF($Url){ // buscar
		$Url0 = explode('/', $Url);
		$Url1 = count($Url0)-1;
		$urlArquivo = $Url0[$Url1];
		$tituloUrl = str_replace(".php", "", $urlArquivo);
		$tituloUrl = str_replace("-", " ", $tituloUrl);
		$tituloUrl = str_replace("  ", " ", $tituloUrl);
		$tituloUrl = str_replace("deus", "Deus", $tituloUrl);
		$tituloUrl = str_replace("senhor", "Senhor", $tituloUrl);
		$tituloUrl = ucfirst($tituloUrl);
		return $tituloUrl;
	}
	function TextoEdt($HOME, $Url){ // buscar
		$Url = str_replace("__","&&", $Url); //.'.php'
		$content = my_file_get_contents($HOME.'/'.$Url);
		$content = explode('<!--EDIT_2-->', $content);
		$content = $content[1];
		$content = explode('<!--EDIT_0-->', $content);
		$content = $content[0];
		
		if(explode('<p class="autor">', $content)){ 
		$content = explode('<p class="autor">', $content); 
		$content = $content[0].'<div '; 
		}
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
	function pastasMissa(){
		$path = "post/letras/";
		$diretorio = dir($path);
		while($arquivo = $diretorio -> read()){
		if ($arquivo != '.' && $arquivo != '..'){
		$arquivof = str_replace("_", " ", $arquivo);
		$arquivof = str_replace("&&", " dia ", $arquivof);
		$arquivof = str_replace("-", "/", $arquivof);
		$arquivof = str_replace("_", " ", $arquivof);		
		$arquivof = ucfirst($arquivof);
		$arquivo = str_replace("&&", "__", $arquivo);
		$pastasM .= "<option value='$arquivo'>$arquivof</option>";
		}
		}
		$diretorio -> close();	
		return $pastasM;	
}
	 /// FUNÇOES PARA SAIDA DAS INFORMAÇÕES
	function CorrigirLink($pastaativa, $linkget, $title){
		$Url0 = explode('/', $linkget);
		$pasta = count($Url0)-2;
		$arquivo = count($Url0)-1;
		$urlArquivo = $Url0[$arquivo];
		$urlpasta = $Url0[$pasta];
		$link = preg_replace("/[^\w\s]/", "", iconv("UTF-8", "ASCII//TRANSLIT", $title));
		$link = str_replace(" ", "-", $link);
		$link = strtolower($link);
		$arquivof = str_replace($urlArquivo, $link, $linkget);
		$pastaf = str_replace($urlpasta, $pastaativa, $arquivof);
		return  $pastaf;
			
	}
	/**/ $CorrigirLink = CorrigirLink($pastaativa, $linkget, $title);
	function NovaUrl($CorrigirLink){
	$link = explode('url=', $CorrigirLink);
	$link = $link[1];
	return $link;
	}
	function AntigaUrl($linkget){
	$link = explode('url=', $linkget);
	$link = $link[1];
	return $link;
	}
	/**/ $NovaUrl = NovaUrl($CorrigirLink);
	/**/ $AntigaUrl = AntigaUrl($linkget);
	/**/ $divs1 = '<!--EDIT_1--> <div class="container"><h1><a id="crs" href="'./**/ $CorrigirLink.'">';
	/**/ $divs2 = '</h1></a> <!--EDIT_2-->';
	/**/ $divs3 = '</div> <!--EDIT_0--> ';
		 if(str_replace('folha-cnt', '', TEXTO_FINAL_EDITAR)){
			 /**/ $divs4 = '';
			 /**/ $divs5 = '';
		 }else{
			 /**/ $divs4 = '<div class="folha-cnt">';
			 /**/ $divs5 = '</div>';
		 }
	/**/ $editor1 = $top.$divs1.$title.$divs2.$divs4.$editor1.$divs5.$divs3.$rodape;
	function CriarArquivo($editor1,$NovaUrl,$AntigaUrl,$HOME){
			$NovaUrl1 = str_replace('__', '&&', $NovaUrl);
			$arquivo = $NovaUrl1.'.php';
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
		CriarArquivo($editor1,$NovaUrl,$AntigaUrl,$HOME);
	}
	

///DEFINE
 define('PASTA_ATUAL',PastaAtual($Url));
 define('PASTA_FINAL_VISTA',PastaAtualConvertida(PastaAtual($Url)));
 define('TITULO_FINAL_VISTO',TituloF($Url));
 define('TEXTO_FINAL_EDITAR',TextoEdt($HOME, $Url));
 define('LINK_PARA_TITULO',LinkTitulo($HOME, $Url));
 define('PASTA_DIRETORIO',pastasMissa());
 
//echo TEXTO_FINAL_EDITAR;
 
 
 
?>
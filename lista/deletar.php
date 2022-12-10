<?php
include "part/top.php";
?>
<div class="container top_tab">
<?php
error_reporting(0);
$ArquivoLetra = $_GET['arquivo'];
$pastaDir 	  = $_GET['dir'];
$DirDel 	  = $_GET['dirdel'];

if(isset($ArquivoLetra)){
	
	$pastaDir = str_replace('__', '&&', $pastaDir);
	
	$resultado = unlink($pastaDir.$ArquivoLetra);
	if($resultado){
	echo "apagou";
	}else{
	echo "não apagou";
	}
}else if(isset($DirDel)){

 function delTree($dir) { 
      $files = array_diff(scandir($dir), array('.','..')); 
      foreach ($files as $file) { 
        (is_dir("$dir/$file")) ? delTree("$dir/$file") : unlink("$dir/$file"); 
      } 
      return rmdir($dir); 
    }
	
	$DirDel = str_replace('__', '&&', $DirDel);
    delTree($DirDel);

}

	function pastasMissa(){
	$path = "post/letras/";
	$diretorio = dir($path);

	while($arquivo = $diretorio -> read()){
	if ($arquivo != '.' && $arquivo != '..'){
	$arquivov = str_replace("_", " ", $arquivo);
	$arquivov = str_replace("&&", " dia ", $arquivov);
	$arquivov = str_replace("-", "/", $arquivov);

	$arquivO0 = str_replace('&&', '__', $arquivo);
	
	//$pastasM .= $arquivo;
		echo '<table class="table table-dark table-striped">
		<thead>
				<tr>
				  <th scope="col"><a href="?dirdel='.$path.$arquivO0.'"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
</svg></span>&nbsp;&nbsp;'.$arquivov.'</th>
				</tr>
			  </thead><tbody> 
			  ';
		
		$path1 = "post/letras/".$arquivo;
		$dirr = dir($path1);
		while($ar = $dirr -> read()){
		if ($ar != '.' && $ar != '..'){
		$arf = str_replace(".php", "", $ar);
		$arf = str_replace("-", " ", $arf);
		$arf = ucwords($arf);
		
		echo '<tr>
				  <td><a href="?arquivo='.$ar.'&dir='.$path.$arquivO0.'/"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
</svg></span>&nbsp;&nbsp;'.$arf.'  </a></td>
				</tr>';
		
		}
		}
		$dirr -> close();
		echo '</tbody></table>';
	}
	}
	$diretorio -> close();
	
	
}
	echo pastasMissa();
?>
</div>
	<?php
include "part/rodape.php";
?>
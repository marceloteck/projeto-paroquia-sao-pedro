<?php
include "part/top.php";
?>
<div class="container top_tab">
<?php
	function pastasMissa0(){
$path0 = "oracoes/missa/";
	$diretorio0 = dir($path0);

	while($arquivo0 = $diretorio0 -> read()){
	if ($arquivo0 != '.' && $arquivo0 != '..'){
		$arquivof0 = str_replace(".php", "", $arquivo0);
		$arquivof0 = str_replace("-", "/", $arquivof0);
		$arquivof0 = str_replace("_", " dia ", $arquivof0);
		$arquivof0 = ucwords($arquivof0);

	
		echo '<table class="table table-dark table-striped">
		<thead>
				<tr>
				  <th scope="col">'.$arquivof0.'</th>
				</tr>
			  </thead><tbody>
			  ';
		
		
		$path10 = "oracoes/missa/".$arquivo0;
		
		$empty0 = ((count(glob("$path10/*")) === 0) ? true : false);
		if(!$empty0){
			$dirr0 = dir($path10);
			while($ar0 = $dirr0 -> read()){
				if ($ar0 != '.' && $ar0 != '..'){
				$arf0 = str_replace(".php", "", $ar0);
				$arf0 = str_replace("-", " ", $arf0);
				$arf0 = strtoupper($arf0);
						echo '<tr>
								  <td><a href="'.$path10.'/'.$ar0.'"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
								  <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
								  <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
								  </svg></span>&nbsp;&nbsp;'.$arf0.'  </a></td>
								</tr>';		
				}
			}			
		$dirr0 -> close();
		
		}else{
			echo '<tr><td>Nenhuma m&uacute;sica ainda.</td></tr>';					
		}
		echo '</tbody></table>';
	}
	}
	$diretorio0 -> close();	
}
	echo pastasMissa0();

	echo '	<br />
	
	<br /><br />
</div>';
	
include "part/rodape.php";
?>
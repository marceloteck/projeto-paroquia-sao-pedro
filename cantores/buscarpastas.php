<?php
	function pastasMissa(){
$path = "post/letras/";
	$diretorio = dir($path);

	while($arquivo = $diretorio -> read()){
	if ($arquivo != '.' && $arquivo != '..'){
		$arquivof = str_replace("_", " ", $arquivo);
		$arquivof = str_replace("-", "/", $arquivof);
		$arquivof = str_replace("&&", " dia ", $arquivof);
		$arquivof = ucfirst($arquivof);

	
		echo '<table class="table table-dark table-striped">
		<thead>
				<tr>
				  <th scope="col">'.$arquivof.'</th>
				</tr>
			  </thead><tbody>
			  ';
		
		$arquivot = str_replace("&&", "__", $arquivo);
		$path1 = "post/letras/".$arquivo;
		$path2 = "post/letras/".$arquivot;
		
		$empty = ((count(glob("$path1/*")) === 0) ? true : false);
		if(!$empty){
			$dirr = dir($path1);
			while($ar = $dirr -> read()){
				if ($ar != '.' && $ar != '..'){
				$arf = str_replace(".php", "", $ar);
				$arf = str_replace("-", " ", $arf);
				$arf = ucwords($arf);
						echo '<tr>
								  <td><a href="'.$path1.'/'.$ar.'"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
								  <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
								  <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
								  </svg></span>&nbsp;&nbsp;'.$arf.'  </a> <a href="edit.php?url='.$path2.'/'.$ar.'"><span class="edit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></span></a></td>
								</tr>';		
				}
			}			
		$dirr -> close();
		
		}else{
			echo '<tr><td>Nenhuma m&uacute;sica ainda.</td></tr>';					
		}
		echo '</tbody></table>';
	}
	}
	$diretorio -> close();	
}
	echo pastasMissa();

?>
<?php
include "part/top.php";


if(isset($_GET['url'])){
	$urlL = $_GET['url'];

include "editPhpOrdem.php";



}else{
$urlL = "";
}


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
								  </svg></span>&nbsp;&nbsp;'.$arf.'  </a> 
								  
	<a href="?url='.$path2.'/'.$ar.'"><span class="edit">
	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sort-numeric-down" viewBox="0 0 16 16">
  <path d="M12.438 1.668V7H11.39V2.684h-.051l-1.211.859v-.969l1.262-.906h1.046z"/>
  <path fill-rule="evenodd" d="M11.36 14.098c-1.137 0-1.708-.657-1.762-1.278h1.004c.058.223.343.45.773.45.824 0 1.164-.829 1.133-1.856h-.059c-.148.39-.57.742-1.261.742-.91 0-1.72-.613-1.72-1.758 0-1.148.848-1.835 1.973-1.835 1.09 0 2.063.636 2.063 2.687 0 1.867-.723 2.848-2.145 2.848zm.062-2.735c.504 0 .933-.336.933-.972 0-.633-.398-1.008-.94-1.008-.52 0-.927.375-.927 1 0 .64.418.98.934.98z"/>
  <path d="M4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z"/>
</svg></span>
</a></td>
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





?>
<div class="container top_tab">
<?=pastasMissa()?>


<form  method="get" action="#">
				 <div class="form-group">
				    <button type="submit"  style="width:100%;" name="button2" class="btn btn-dark">Enviar</button>
					
					
			
					<input name="link"  type="text" value="<?=LINK_PARA_TITULO?>" class="form-control" placeholder="LINK DO TITULO">
				
					<textarea   style='width:100%;' rows="10" name="editor1" id="editor1" width="100%"><?php echo TEXTO_FINAL_EDITAR; ?></textarea>
				</div>
			</form>
</div>


<br/><br/><br/>
<script type="text/javascript">
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
<?php
include "part/rodape.php";
?>
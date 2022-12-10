<?php
include "part/top.php";	
include "editPhp.php";

//utf8_encode('Olá pessoal.');
 
?>
<br />
<div class='container'>
	<h2> Editar a letra </h2>

<br />
	
			<form  method="post" action="#">
				 <div class="form-group">
				    <button type="submit"  style="width:100%;" name="button2" class="btn btn-dark">Enviar</button>
					<br /><br />
					<label for="inputState" class="form-label">Qual a missa?</label>
					<select name="pastaativa" id="inputState" class="form-select">
						  <option select value="<?=PASTA_ATUAL?>"> <?=PASTA_FINAL_VISTA?> (ATUAL) </option>
						   <?=PASTA_DIRETORIO?>
						  </select>
						<br />
					<!--<input name="video"  type="text" class="form-control" placeholder="Link do video do youtube">-->
					
					
					<input name="title"  type="text" value="<?=TITULO_FINAL_VISTO?>" class="form-control" placeholder="TITULO">
					
					<input name="link"  type="hidden" value="<?=LINK_PARA_TITULO?>" class="form-control" placeholder="LINK DO TITULO">
					<br />
					<textarea name="editor1" id="editor1" width="100%"><?php echo TEXTO_FINAL_EDITAR; ?></textarea>
				</div>
			</form>

		
	


</div>

<script type="text/javascript">
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>



	<?php
	 include "part/rodape.php";
?>
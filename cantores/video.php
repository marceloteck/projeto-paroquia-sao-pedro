<?php
error_reporting(0);
include "part/top.php";
?>

	<div class="container top_tab">
			
			<?php
			$Gtv = $_GET['v'];
			$url0 = $_SERVER["REQUEST_URI"];
			$url = str_replace('/cantores/video.php/', '', $url0);
			$url = explode('?url=', $url);
			$url = $url[0];
			
			if($Gtv == ""){
				//$content = my_file_get_contents($linksLetra);
				$content = my_file_get_contents('https://www.letras.mus.br/'.$url);
				$contentArray = explode('"YoutubeID":"', $content);
				$contentArray = explode('","', $contentArray[1]);
				$contentArray = $contentArray[0];
				echo '<iframe width="100%" height="400" src="https://www.youtube.com/embed/'.$contentArray.'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br />';

				$urls = $_GET['url'];
				$urls = str_replace('__', '&&', $urls);
				include $urls.'.php';
			}else if($Gtv != ""){
			
				
				echo '<iframe width="100%" height="400" src="https://www.youtube.com/embed/'.$Gtv.'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br />';
				
				$urls = $_GET['url'];
				$urls = str_replace('__', '&&', $urls);
				include $urls.'.php';
			}
			
			
			
			?>
		</div>
		
		

	<?php
include "part/rodape.php";
?>
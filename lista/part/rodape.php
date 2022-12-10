

	<script type="text/javascript">
            window.onload = function() {
                var elementBody = document.querySelector('.folha-cnt');
                var elementBtnIncreaseFont = document.getElementById('increase-font');
                var elementBtnDecreaseFont = document.getElementById('decrease-font');
                // Padrão de tamanho, equivale a 100% do valor definido no Body
                var fontSize = 150;
                // Valor de incremento ou decremento, equivale a 10% do valor do Body
                var increaseDecrease = 10;

                // Evento de click para aumentar a fonte
                elementBtnIncreaseFont.addEventListener('click', function(event) {
                    fontSize = fontSize + increaseDecrease;
                    elementBody.style.fontSize = fontSize + '%';
                });

                // Evento de click para diminuir a fonte
                elementBtnDecreaseFont.addEventListener('click', function(event) {
                    fontSize = fontSize - increaseDecrease;
                    elementBody.style.fontSize = fontSize + '%';
                });
            }
        
		
		function escuro(){ //folha-cnt
			var elementfolha = document.querySelector('body');
			elementfolha.style ='background: black; color:white;';
			
			var elementh1 = document.querySelector('#crs');
			elementh1.style ='color: white;';
			
			var el_a = document.querySelector('a');
			el_a.style ='color: white;';
			
			var ferr = document.querySelector('.ferr');
			ferr.style ='background:black; color:white;';
			
			var butn = document.querySelector('#increase-font');
			butn.classList.remove('btn-outline-primary');
			butn.classList.add('btn-outline-light');
			
			var but1 = document.querySelector('#decrease-font');
			but1.classList.remove('btn-outline-primary');
			but1.classList.add('btn-outline-light');
			
			var bnk = document.querySelector('#bnk');
			bnk.classList.remove('btn-outline-secondary');
			bnk.classList.add('btn-outline-light');	
		}
		function claro(){
			var elementfolha = document.querySelector('body');
			elementfolha.style ='background: white; color:black;';
			
			var elementh1 = document.querySelector('#crs');
			elementh1.style ='color: black;';
			var ferr = document.querySelector('.ferr');
			ferr.style ='background:white; color:black;';
			
			var butn = document.querySelector('#increase-font');
			butn.classList.remove('btn-outline-light');
			butn.classList.add('btn-outline-primary');
			
			var but1 = document.querySelector('#decrease-font');
			but1.classList.remove('btn-outline-light');
			but1.classList.add('btn-outline-primary');
			
			var bnk = document.querySelector('#bnk');
			bnk.classList.remove('btn-outline-light');
			bnk.classList.add('btn-outline-secondary');	
			
			
		}
		      
        </script> 
		
		
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>

<!DOCTYPE html>
<html>
  <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	
  </head>
  <body>
  <div id="CSS_day"> </div>
    <div class="content">
      <section class="info">
        <header>
        	<div class="image"><img src="img/logo.png" class="" /></div>
			<span>AGENDA SEMANAL: <BR /> <STRONG style="color:#ffd100"> 06/11</STRONG> ATÉ <STRONG style="color:#ffd100">12/11</STRONG></span>
        </header>
        <main>
        	<div class="agends">
        		
        		<div>
        			<a>
        				<span>SEGUNDA</span>
        				<p>Ensaio <STRONG style="color:#ffd100">19:00h</STRONG></p>
        			</a>
							<a>
								<span>TERÇA</span>
								<p>Encontro de coroinhas <STRONG style="color:#ffd100">19:00h</STRONG></p>
							</a>
							<a>
								<span>QUARTA</span>
								<p>Terço dos Homens <STRONG style="color:#ffd100">19:00h</STRONG></p>
							</a>
							<a>
								<span>QUINTA</span>
								<p>Missa e Adoração <STRONG style="color:#ffd100">19:00h</STRONG></p>
							</a>
					
						</div>
            	<!--<button>Adicionar Agendamento</button>-->
          	</div>
        </main>
		
		<div class="girar_dow">
            <img src="img/icons8-para-baixo-2-100.png" />
          </div>

      </section>
      <section class="calendar">
	  
	  
	  <!--<div id="CSS_day"> </div>-->
	  
	  
        <header>
          <span id="prev-month">
            <svg width="19" height="30" viewBox="0 0 19 30" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.3333 5L4.33334 15L14.3333 25" stroke="white" stroke-width="6" stroke-linecap="square"/>
            </svg>
          </span>
          <p><div id="monthDisplay"></div> <span id="month"></span> <span id="year"></span></p>
          <span id="next-month">
            <svg width="19" height="30" viewBox="0 0 19 30" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4.66669 25L14.6667 15L4.66669 5" stroke="white" stroke-width="6" stroke-linecap="square"/>
            </svg>              
          </span>
        </header>
        <main>
          <table id="tableDays">
		
            <tr>
              <th>DOM</th>
              <th>SEG</th>
              <th>TER</th>
              <th>QUA</th>
              <th>QUI</th>
              <th>SEX</th>
              <th>SAB</th>
            </tr>
            <tr>
			
			
              <td class="outherMount">25</td>
              <td class="outherMount">26</td>
              <td class="outherMount">27</td>
              <td class="outherMount">28</td>
              <td class="outherMount">29</td>
              <td class="outherMount">30</td>
              <td>01</td>
            </tr>
            <tr><!--class="teste"-->
              <td>02</td>
              <td>03</td>
              <td>04</td>
              <td>05</td>
              <td>06</td>
              <td>07</td>
              <td>08</td>
            </tr>
            <tr>
              <td>09</td>
              <td>10</td>
              <td>11</td>
              <td>12</td>
              <td>13</td>
              <td>14</td>
              <td>15</td>
            </tr>
            <tr>
              <td>16</td>
              <td>17</td>
              <td>18</td>
              <td>19</td>
              <td>20</td>
              <td>21</td>
              <td>22</td>
            </tr>
            <tr>
              <td>23</td>
              <td>24</td>
              <td>25</td>
              <td>26</td>
              <td>27</td>
              <td>28</td>
              <td>29</td>
            </tr>
            <tr>
              <td>30</td>
              <td>31</td>
              <td class="outherMount">01</td>
              <td class="outherMount">02</td>
              <td class="outherMount">03</td>
              <td class="outherMount">04</td>
              <td class="outherMount">05</td>
            </tr>
          </table>
        
		</main>
        <footer>
          <span>Paróquia São Pedro Apóstolo</span>
        </footer>
      </section>
    </div>
	
	  <?php
	  //<script src="js/main.js"></script>
	  include "js/main.php";
	  ?>
  </body>
</html>
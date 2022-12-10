<script type="text/javascript">
		const monthsBR = ['JAN','FEV','MAR','ABR','MAI','JUN','JUL','AGO','SET','OUT','NOV','DEZ'];
    	const monthElement = document.getElementById('month');
    	const yearElement = document.getElementById('year');
    	const nextElement = document.getElementById('next-month');
			const previElement = document.getElementById('prev-month');
			const tableDays = document.getElementById('tableDays');
			
    	let date = new Date();
    	let month = date.getMonth();
    	let year = date.getFullYear()
    	const hoje = date.getDate();
		
		loadDate();
		function loadDate(){
		
    		month;
    		if(month > 11){
    			month = 0;
    			year;
    		}
				monthElement.innerText = monthsBR[month] + " " + year;
				handlerUpdateCalendar(month, year);
				
				//alert(monthElement.innerText);
				
				
					
				
				
			};
		
    	nextElement.onclick = function(){
    		month++;
    		if(month > 11){
    			month = 0;
    			year++;
    		}
				monthElement.innerText = monthsBR[month] + " " + year;
				handlerUpdateCalendar(month, year);
				
			};
			
			previElement.onclick = function(){
				month--;
				if(month < 0){
					month = 11;
					year--;
				}
				monthElement.innerText = monthsBR[month] + " " + year;
				handlerUpdateCalendar(month, year);
			};

			function handlerUpdateCalendar(month, year){
				let firtsDayOfWeek = new Date(year,month,0).getDay();
				let getLastDayThisMonth = new Date(year,month+1,0).getDate();


				for(var i = -firtsDayOfWeek,index = 0; i < (42-firtsDayOfWeek); i++,index++){
					const dayTable = tableDays.getElementsByTagName('td')[index];
					dayTable.classList.remove('outherMount');
					dayTable.innerText = ("0" + new Date(year,month,i).getDate()).slice(-2);
					//dayTable.innerHtml = "<a href='#'>" +dayTable+"</a>";
					
					

					(i < 1) && dayTable.classList.add("outherMount");
				
					(i > getLastDayThisMonth) && dayTable.classList.add("outherMount");
					
					
					const today = date.getDate();
					const mesho = date.getMonth();
					const anoat = date.getFullYear();
					const abc = today+""+mesho+anoat;
					const cdt = i+""+month+year;
					var idcss = "teste_id"+today+mesho+anoat;
					(abc == cdt) && dayTable.classList.add(idcss);
					(cdt != abc) && dayTable.classList.remove(idcss);					
					const htmlID = document.getElementById('CSS_day'); 
					htmlID.innerHTML = " <style> td."+idcss+"::after { content: ''; background: #8D86C9;width: 24px; height: 12px; position: absolute; margin-top: 25px; margin-left: -23px; border-radius: 5px;} </style>";
					
					const today1 = 9;
					const mesho1 = date.getMonth();
					const anoat1 = date.getFullYear();
					const abc1 = today1+""+mesho1+anoat1;
					const cdt1 = i+""+month+year;
					var idcss1 = "teste_id"+today+mesho+anoat;
					(abc1 == cdt1) && dayTable.classList.add(idcss1);
										
					const htmlID1 = document.getElementById('CSS_day'); 
					htmlID1.innerHTML = " <style> td."+idcss1+"::after { content: ''; background: #8a56d1;width: 24px; height: 12px; position: absolute; margin-top: 25px; margin-left: -23px; border-radius: 5px;} </style>";
					
					
					
					
					
					//dayTable.classList.add("IDay"+hoje+month+year);
					//(i == today && month == mesho && year == anoat) && dayTable.classList.add(idcss);
					//(i != today && month != mesho && year != anoat) && dayTable.classList.remove(idcss);
					
					
				}
				
				

				return [firtsDayOfWeek, getLastDayThisMonth];
			}
			</script>
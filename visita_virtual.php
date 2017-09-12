	<?php
	session_start();
	 if((!isset($_SESSION['email'])== true) && (!isset($_SESSION['senha'])==true))
    {	
    	unset($_SESSION['email']);
    	unset($_SESSION['senha']); 
    	include ("cabecalho.php");
    }else{
    	$login = $_SESSION['email'];
        include ("cabecalhoPrivado.php");
	}
	?>
			<!---End-header-->
			
			<div class="clear"> </div>
                 <div class="principal">
				<div class="backImg">
						
					                    
                           <div class="vsTitulo">
							Visita Virtual
						 </div>	             
                         <div class="vsTituloBox">
                         
					    </div>  
											
                        <div class="dados">
						
							
                        
								<li>
									<a href="#exterior" ><div class="submenu">Exterior</div></a>
								</li>
								
								
                                <li>
                                    <a href="#quartos" ><div class="submenu">Quartos</div></a> 
                                </li>
							    
								
                                <li>
                                     <a href="#serv" ><div class="submenu">Serviços</div>	</a>
                                </li>
								 				
								
                                <li>
                                    <a href="#act"><div class="submenu">Actividades</div></a>  
                                </li>
                                
                              <br>
                              <br>
							  <br>
                              <br>
							  <br>
                              <br>
							  <div class = "visitaVirtual">
							  <div class = "exterior">
									<h2 id="exterior">Exterior</h2>
							  </div>
										<img src="images/exterior.jpg" alt="exterior" style="width:323px;height:241px;"> 
										<img src="images/exterior2.jpg" alt="exterior2" style="width:322px;height:241px;"> 
										<img src="images/exterior3.jpg" alt="exterior3" style="width:323px;height:241px;">
										<img src="images/exterior4.jpg" alt="exterior4" style="width:323px;height:241px;">
										<img src="images/exterior5.jpg" alt="exterior5" style="width:323px;height:241px;">
										<img src="images/exterior6.jpg" alt="exterior6" style="width:322px;height:241px;">
								
							 </div>
							  <div class = "visitaVirtual">
							  <div class = "quartos">
									<h2 id="quartos">Quartos</h2>
							  </div>
										<img src="images/quarto2.jpg" alt="quarto2" style="width:323px;height:241px;"> 
										<img src="images/quarto3.jpg" alt="quarto3" style="width:322px;height:241px;"> 
										<img src="images/suite.jpg" alt="suite" alt="suite" style="width:323px;height:241px;">
										<img src="images/quarto.jpg" alt="quarto" style="width:323px;height:241px;">
										<img src="images/quarto4.jpg" alt="quarto4" style="width:323px;height:241px;">
										<img src="images/quarto5.jpg" alt="quarto5" style="width:322px;height:241px;">
										
								
							 </div>
                              <br>
                              <br>
							  <div class = "visitaVirtual">
							  <div class = "servicos">
								<h2 id="serv">Serviços</h2>
							  </div>
								     <img src="images/sunset.jpg" alt="vista" style="width:323px;height:241px;"> </li>
									 <img src="images/bar.jpg" alt="bar" style="width:323px;height:241px;"> </li>
									 <img src="images/loja.jpg" alt="loja" style="width:322px;height:241px;"> </li>
									 <img src="images/restaurante.jpg" alt="restaurante" style="width:323px;height:241px;"> </li>
									 <img src="images/bar2.jpg" alt="bar2" style="width:323px;height:241px;"> </li>
									 <img src="images/atendimento.jpg" alt="atendimento" style="width:322px;height:241px;"> </li>
							  </div>
                              <br>
                              <br>  
							  <div class = "visitaVirtual">
							  <div class = "atividades">
								<h2 id="act">Actividades</h2>
							  </div>
									 <img src="images/bicicleta.jpg" alt="bicicleta" style="width:323px;height:241px;"> </li>
									 <img src="images/radical.jpg" alt="radical" style="width:323px;height:241px;"> </li>
									 <img src="images/tennis.jpg" alt="tennis" style="width:322px;height:241px;"> </li>
									 <img src="images/4x4.jpg" alt="4x4" style="width:323px;height:241px;"> </li>
									 <img src="images/cavalo.jpg" alt="cavalo" style="width:323px;height:241px;"> </li>
									 <img src="images/madeira-whales-and-dolphins.jpg" alt="madeira-whales-and-dolphins" style="width:322px;height:241px;"> </li>
									 
							  </div> 
							 </div>
			<!---start-content----->
                        <div class="reserve">
                            <h3> Reserve Já! </h3>
                            <form>  
                            <div class="primeiro">
                                <label>Check in: <input type="text" id="departing" nome="checkin"></label> 
                            </div>
                            <div class="segundo">
                                <label>Check out: <input type="text" id="returning" nome="checkout"></label>
                            </div>
                            <div>
                                <label>Adultos: <input type="number" id="nadultos" nome="numAdul" maxlength="2" size="2"></label>
                                <label>Crianças: <input type="number" id="ncriancas" nome="numCrian" maxlength="2" size="2"></label>
                            </div><br>
                            <input id="button" type="button" name="button" value="Verificar Disponibilidade">
                            </form>
                        </div>   
</div>						
                 </div>
						
                        
                      
                        
                
		<!---start-copy-Right----->
		
		<!---End-copy-Right----->
	</body>
</html>
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
			<!--End-header-->
			<div class="clear"> </div>
                        <div class="principal">
			<!--start-image-slider-->
					<!--<div class="backImg1">
						<!-- Slideshow 1
						    <ul class="rslides" id="slider1">
						      <li><img src="images/slide41.jpg" alt=""></li>
                                                    </ul>
						 <!-- Slideshow 2
					</div> 
                                      	<!--End-image-slider-->
                        
                                        
						<section id = "localizacao">
							<div class = "Localizacao">
								<h1> Localização </h1>
								<iframe src = "https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d4729.154057631666!2d-16.8691704!3d32.6600112!3m2!1i1024!2i768!4f13.1!5e1!3m2!1spt-PT!2spt!4v1451302266735" width="500" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
							<div class = "Contactos">
								<h1> Contactos </h1>
								<p> Rua do Campo de Golfe, nº 57 </p>
								<p> 9103-786, Madeira - Portugal </p>
								<p> Telefone: 291234567 </p>
								<p> Email: quintaestrelicia@hotmail.com </p>
							</div>
						</section>
						
			<!--start-content-->
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
                
		<!---start-copy-Right----->
		
		<!---End-copy-Right----->
	</body>
</html>
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
			<!--start-image-slider---->
					<div id="backgroundImg">
						<!-- Slideshow 1 -->
						    <ul class="rslides" id="slider1">
						      <li><img src="images/slide1.jpg" alt=""></li>
						      <li><img src="images/slide2.jpg" alt=""></li>
						      <li><img src="images/slide3.jpg" alt=""></li>
                                                      <li><img src="images/slide41.jpg" alt=""></li>
                                                    </ul>
						<!-- Slideshow 2 -->
					</div>
                                      	<!--End-image-slider-->
 
			<!---start-content-->
                        <div class="reserve">
                            <h3> Reserve Já! </h3>
                            <form>
                            <div class="primeiro">
                                <label>Check in: <input type="date" id="departing" nome="checkin"></label> 
                            </div>
                            <div class="segundo">
                                <label>Check out: <input type="date" id="returning" nome="checkout"></label>
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
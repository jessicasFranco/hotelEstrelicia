    <?php
    //Aceder ao site apenas se ter realizado o login
    session_start();
    if((!isset($_SESSION['email'])== true)and (!isset($_SESSION['senha'])==true))
    {	
    	unset ($_SESSION['email']);
        unset ($_SESSION['pp']);
        header('location:index.php');
    }
     $login=$_SESSION['email'];
    include ("cabecalhoPrivado.php");
	?>	  
    <br>
    <?php
    echo "Bem vindo funcionário $login";
    ?>


    <table border="10px" align="center">
    	<tr>
	    	<th>Check-In</th>
	    	<th>Check-Out</th>
	    	<th>Pensão</th>
	    	<th>Estado</th>
	    	<th>Contribuinte do Cliente</th>
	    	<th>Nº do Quarto</th>
    	</tr>

    <?php
    	include "config.php";
    	$tbl_name="reserva"; //nome da tabela
    	echo '<tbody>';

		$sql=mysql_query("SELECT * FROM $tbl_name") or die (mysql_error());
		while ($row = mysql_fetch_assoc($sql)) {
		    echo '<tr>';
		    echo '<td>' . $row['data_check_in'] . '</td>';
		    echo '<td>' . $row['data_check_out'] . '</td>';
		    echo '<td>' . $row['tipo_pensao'] . '</td>';
		    echo '<td>' . $row['estado'] . '</td>';
		    echo '<td>' . $row['cliente_contribuinte'] . '</td>';
		    echo '<td>' . $row['quarto_id'] . '</td>';
		    echo '</tr>';
		}

echo '</tbody></table>';
    ?>
      </table>
	</body>
</html>
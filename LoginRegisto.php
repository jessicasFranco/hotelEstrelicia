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

    //Validação dos campos do login
    $emailErr = $ppErr = $loginErr = "";
    $NomeErr = $dataNascErr = $contriErr = $moradaErr = $telErr = $remailErr = $rppErr = "";

    if (isset($_POST["submitLogin"])) {
        if (empty($_POST["email"])) {
            $emailErr = "O email é de preenchimento obrigatório";
        } else {
            $email = test_input($_POST["email"]);
            // check if name only contains letters and whitespace
            if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $emailErr = "O email não é válido"; 
               }
           }
        if(empty($_POST["pp"])){
            $ppErr = "A palavra passe é de preenchimento obrigatório";
        }
    }

    //Validação dos campos do registo
    $erro=0;

     if (isset($_POST["submitReg"])) {
        if (empty($_POST["Nome"])) {
            $NomeErr = "O Nome é de preenchimento obrigatório";
            $erro=1;
        } else {
             $Nome = test_input($_POST["Nome"]);
            // check if name only contains letters and whitespace
            if(!preg_match("/^[a-zA-Z ]*$/",$Nome))
            {
                 $NomeErr = "Apenas letras e espaço em branco é permitido";
                 $erro=1;
            }
        }

            if(empty($_POST["contri"])){
            $contriErr = "O contribuinte é de preenchimento obrigatório";
            $erro=1;
        }else{
            $contri = test_input($_POST["contri"]);
            if(!preg_match("/^[0-9]*$/",$contri))
            {
                $contriErr = "Apenas pode conter números";
                $erro=1;
            }
        }
        if(empty($_POST["tel"])){
            $telErr = "O nº de telefone é de preenchimento obrigatório";
            $erro=1;
        }else{
            $tel = test_input($_POST["tel"]);
            if(!is_numeric($tel))
            {
                $telErr = "Apenas pode conter números e no máximo 9 digitos";
                $erro=1;
            }
        }

         if (empty($_POST["remail"])) {
           $remailErr = "O email é de preenchimento obrigatório";
           $erro=1;
        } else {
            $remail = test_input($_POST["remail"]);
            // check if name only contains letters and whitespace
            if (!filter_var($remail,FILTER_VALIDATE_EMAIL)){
            $remailErr = "O email não é válido"; 
            $erro=1;
               }
           }
        if(empty($_POST["rpp"])){
            $rppErr = "A palavra passe é de preenchimento obrigatório";
            $erro=1;
        }
    }

           function test_input($data) {
           $data = trim($data);
           $data = stripslashes($data);
           $data = htmlspecialchars($data);
           return $data;
        }
 
       
    ?>
        <form name="myForm" method="post" class="myForm">
            <fieldset>
                <legend> Login </legend>
                <label> Email:</label><br>
                <input type="text" name="email">
                <span class="error">* <?= $emailErr;?> </span>
                <br>   
                
                <label> Palavra-Passe:</label><br>
                <input type="text" name="pp"> 
                <span class="error">* <?= $ppErr;?> </span>
                <br>              
                <input type="submit" name="submitLogin" value="Iniciar Sessão">
            </fieldset>
        </form>
        <?php
        if(isset($_POST["submitLogin"])){
        include "config.php";
        $tbl_name="utilizador"; //nome da tabela
        if($emailErr =="" && $ppErr =="")
        {
         //valores do formulario LOGIN
         $email=$_POST['email'];
         $passw=$_POST['pp'];

         $sql=mysql_query("SELECT * FROM $tbl_name 
                           WHERE email ='$email' 
                           AND palavraPasse = '$passw'") or die (mysql_error());

         $count=mysql_num_rows($sql);//contar o nº de linhas para saber se existe
           
         if($count==1)
         {
             $linha=mysql_fetch_array($sql);
             $tipo=$linha["tipo"]; 

            if($tipo=="cliente")
            {
               session_start();
               $_SESSION['email']=$email;
               $_SESSION['pp']=$passw; 
               $_SESSION['tipo']=$linha["tipo"];
               header('Location:index.php');//exemplo so para testar
            }else{
                session_start();
                $_SESSION['email']=$email;
                $_SESSION['pp']=$passw; 
                $_SESSION['tipo']=$tipo;
                header('Location:funcionario.php');//exemplo so para testar
            }
        }else{
                unset ($_SESSION['email']);
                unset ($_SESSION['pp']);
                header('location:index.php');
        ?>     
             <span class="error">Email ou Palavra-Passe incorrectas.</span><br>
        <?php         
            }
        }
        }
        ?>
        <form name="myForm" method="post" action="LoginRegisto.php" class="myForm">
            <fieldset>
                <legend> Registo </legend>
                    <label for="nome"> Nome: (Primeiro e Sobrenome)</label><br>
                    <input type="text" name="Nome" >
                    <span class="error">* <?=  $NomeErr; ?> </span><br>
                    
                    <label for="dataNasc"> Data de Nascimento:</label><br>
                    <input type="date" name="dataNasc"
                     pattern="[0-9]{4}\/[0-9]{2}\/[0-9]{2}$" min="1900-01-01" max="1997-12-31"><br>
                   
                    <label for="contr"> Contribuinte:</label><br>
                    <input type="text" name="contri">
                    <span class="error">* <?= $contriErr;?> </span><br>

                    <label for="Morada"> Morada:</label><br>
                    <textarea rows="4" cols="50" name="morada"></textarea><br>
                    
                    <label for="Telefone"> Telemóvel:</label><br>
                    <input type="number" name="tel" maxlength="9">
                    <span class="error">* <?=  $telErr;?> </span><br>

                    <label for="email"> Email:</label><br>
                    <input type="email" name="remail">
                    <span class="error">* <?= $remailErr;?> </span><br>

                    <label for="PalavraPasse"> Palavra Passe:</label><br>
                    <input type="password" name="rpp">
                    <span class="error">* <?= $rppErr;?> </span><br>

                    <input type="submit" name="submitReg" value="Registar">
            </fieldset>
        </form>
        
    </body>
</html>
<?php
 // Registo
    if(isset($_POST["submitReg"]))
    {   
        if($erro==0)
        {
        //Get os valores do formulario
        $name    =$_POST['Nome'];
        $datanas =$_POST['dataNasc'];
        $contri  =$_POST['contri'];
        $morada  =$_POST['morada'];
        $telefone=$_POST['tel'];
        $email   =$_POST['remail'];
        $pass    =$_POST['rpp'];

        $morada = htmlspecialchars($morada);
        //Inserir novo cliente
        $sql="INSERT INTO $tbl_name (nome, data_nascimento, contribuinte, morada, telefone, email, palavraPasse)
            VALUES ('$name','$datanas','$contri','$morada','$telefone','$email','$pass')" or die (mysql_error()); 
        $result = mysql_query($sql);
        if(!$result){
            /*$to=$_POST['remail'];
            $titulo="Bem vindo à Quinta Estrelícia";
            $message = "Obrigado pelo seu registo \n Aguardamos a sua visita em breve. \n Na quinta Estrelicia 
                        nos tomamos conta de si. \n Os melhores cumprimentos \n Hotel Estrelícia";
            $message = wordwrap($message,70);
            $headers = "From: quintaEstrilicia@mail.com";
            mail($to,$titulo,$message,$headers);
            */?>
                <span class="error">"A conta não foi criada com sucesso."</span><br>
            <?php
            }else{
            ?>
                <span class="error">Registo Efectuado com sucesso</span><br> 
        <?php           
        }
    }
    else
    {
        
    }
}


?>



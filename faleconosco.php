<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "fseletro";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("Aconexão ao BD falhou: " . mysqli_connect_error());
}

if(isset($_POST['nome']) && isset($_POST['msg'])){

    $nome = $_POST['nome'];
    $msg = $_POST['msg'];

   $sql = "insert into comentarios (nome, msg) values ('$nome','$msg')";
   $result = $conn->query($sql);
}

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Contato - Full Stack Eletro</title>
        <link rel="stylesheet" href="./css/estilo.css">
    </head>
  
    <body>
           <!--Menu-->
      
<?php
  include_once('menu.html');
?>
         <!-- Fim Menu-->

         <header>
            <h2>Fale Conosco</h2>
        </header>

       <hr>


      <section id="contato">
            <img src="./img/logo-email.png" width="40px">
              contato@fullstackeletro.com
                
            <img src="./img/whatsapp-icone-4.png" width="45px">
                (11) 9999-9999
       </section>     
        
     
        <section id="formulario">
            <form method="post">
                <h4>Nome: </h4>
                <input class="msg" name="nome" type="text" style="width: 400px;">
                <h4>Mensagem: </h4>
                <textarea class="msg" name="msg"></textarea>

                <input class="botao" type="submit" value="Enviar">
            </form>
        </section>


        
 <?php
 $sql = "select * from comentarios";
 $result = $conn->query($sql);
 
 if ($result->num_rows>0){
     while($rows = $result->fetch_assoc()){
     echo "Data: ", $rows['data'],"<br>";
     echo "Nome: ", $rows['nome'],"<br>";
     echo "Mensagem: ", $rows['msg'],"<br>";
     echo "<hr>";
     }
}
else{
  echo "Nenhum comentário ainda!";
}
 ?>

  
       <footer id="rodape">
        <p id="formas-pagamento"><b>Formas de pagamento:</b></p>
        <img src="./img/forma-pagamento.png" alt="Formas de pagamento" width="350px" height="45px"><!--arrumar isso-->
        <p>&copy; Recode Pro</p>
    </footer>
    </body>

</html>
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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
  
    <body>
    <div class="container">  
           <!--Menu-->
      
<?php
  include_once('menu.html');
?>
         <!-- Fim Menu-->

         <header>
            <h2 class="display-4">Fale Conosco</h2>
        </header>

       <hr>
</div>

<div class="container">
      <section class="contato row">
           <div class="logo col-ms-4 text-center">
            <img src="./img/logo-email.png" width="40px">
              contato@fullstackeletro.com
           </div>   

           <div class="logo col-ms-4 text-center">
            <img src="./img/whatsapp-icone-4.png" width="45px">
                (11) 9999-9999
        </div>
    </section>     
 </div>  

  <form class="container" method="post">
      <div class="form-group mx-5 text-center">  
         <h4>Nome: </h4>
         <input class="msg form-control border border-danger mb-4 " name="nome" type="text" >
     
 
        <h4>Mensagem: </h4>
        <textarea class="msg form-control border border-danger" name="msg"></textarea>

        <input class="btn btn-danger mb-4 mr-sm-2 btn-block mt-4" type="submit" value="Enviar">

    </div>
  </form>

<div class="container text-center text-dark">       
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
</div>
  
<div class="container">
  <footer id="rodape">
  <h5 class="text-danger"><b>Formas de pagamento:</b></h5>
    <img src="./img/forma-pagamento.png" alt="Formas de pagamento" width="350px" height="45px"><!--arrumar isso-->
    <p>&copy; Recode Pro</p>
</footer>
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>

</html>
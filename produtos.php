<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "fseletro";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("Aconexão ao BD falhou: " . mysqli_connect_error());
}

?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Produtos - Full Stack Eletro</title>
        <link rel="stylesheet" href="./css/estilos.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="./js/funcoes.js"></script>
    </head>
  
    <body>
        
  <!--Menu-->
 <div class="container">
<?php
  include('menu.html');
?>
</div>
 <!-- Fim Menu-->
 <div class="container">
   <header>
       <h2 class="display-4">Produtos</h2>
   </header>
       <hr>

       <section class="categorias">
                <h3>Categorias</h3>
                   <ol>
                       <li onclick="exibir_todos()">Todos (12)</li>
                       <li onclick="exibir_categoria('Geladeira')">Geladeira(3)</li>
                       <li onclick="exibir_categoria('Fogão')">Fogões (2)</li>
                       <li onclick="exibir_categoria('Microodas')">Microondas (3)</li>
                       <li onclick="exibir_categoria('Lavadora')">Lavadora de Roupas (2)</li>
                       <li onclick="exibir_categoria('Lava-louças')">Lava-louças (2)</li>
                   </ol>
        </section>
  
        <section class="produtos">

 <?php
 $sql = "select * from produtos";
 $result = $conn->query($sql);
 
 if ($result->num_rows>0){
     while($rows = $result->fetch_assoc()){
 
 ?>       
 
   <div class="box_produto" id="<?php echo $rows["categoria"]; ?>">
   <img class="itens img-fluid" src="<?php echo $rows["imagem"]; ?>" width="120px" onclick="destaque(this)">
   <br>
   <p class="descricao"><?php echo $rows["descricao"]; ?></p>
   <hr>
   <p class="descricao-preco">R$<?php echo $rows["preco"]; ?> </p>
   <p class="text-danger preco">R$<?php echo $rows["precofinal"]; ?> </p>
  </div>


 <?php
     }
}
else{
  echo "Produto não cadastrado!";
}


 ?>
             
       </section>
       </div>
  <div class="clear"></div>              
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
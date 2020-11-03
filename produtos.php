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
        <link rel="stylesheet" href="./css/estilo.css">
        <script src="./js/funcoes.js"></script>
    </head>
  
    <body>
        
  <!--Menu-->
 
<?php
  include('menu.html');
?>
 <!-- Fim Menu-->

   <header>
       <h2>Produtos</h2>
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
   <img src="<?php echo $rows["imagem"]; ?>" width="120px" onclick="destaque(this)">
   <br>
   <p class="descricao"><?php echo $rows["descricao"]; ?></p>
   <hr>
   <p class="descricao-preco">R$<?php echo $rows["preco"]; ?> </p>
   <p class="preco">R$<?php echo $rows["precofinal"]; ?> </p>
  </div>


 <?php
     }
}
else{
  echo "Produto não cadastrado!";
}


 ?>
             
       </section>
   
                <div class="clear"></div>
  

  <footer id="rodape">
    <p id="formas-pagamento"><b>Formas de pagamento:</b></p>
    <img src="./img/forma-pagamento.png" alt="Formas de pagamento" width="350px" height="45px"><!--arrumar isso-->
    <p>&copy; Recode Pro</p>
</footer>

 </body>

</html>
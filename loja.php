<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Nossas lojas - Full Stack Eletro</title>
        <link rel="stylesheet" href="./css/estilos.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
  
    <body>
           <!--Menu-->
 <div class="container">       
<?php
  include('menu.html');
?>
         <!-- Fim Menu-->
               
         <header>
            <h2 class="display-4">Nossas Lojas</h2>
        </header>
       <hr>
 </div>
 <div class="container">
    
     <section id="lojas">

             <div class="loja">
                   <h3>Rio de Janeiro</h3>
                   <p>Avenida Presidente Vargas, 5000</p>
                   <p>10 &ordm; andar</p>
                   <p>Centro</p>
                   <p>(21) 3333-3333</p>
             </div>


           <div class="loja">
                <h3>São Paulo</h3>
                <p>Avenida Paulista, 985</p>
                <p>3 &ordm; andar</p>
                <p>Jardins</p>
                <p>(11) 4444-4444</p>
            </div>


            <div class="loja">
                <h3>Santa Catarina</h3>
                <p>Rua major &Aacute;vila, 370</p>
                <p>10 &ordm; andar</p>
                <p>Vila Mariana</p>
                <p>(47) 5555-5555</p>
            </div>

    </section>

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
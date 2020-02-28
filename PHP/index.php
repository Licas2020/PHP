<!DOCTYPE html>
<html lang="en">

<head>
    <meta( charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
</head>

<body>

    <?php
     $titulo= "Primeira Aula de PHP";
     ?>
    <h1><?php
        echo $titulo 
        ?>
    </h1>
    <!-- Condicionais -->
    <!-- if -->
    <p>
        <h1> Condicional - IF and Ifelse</h1>
    </p>

    <?php $idade=19; if ($idade>=18){
        echo "Pode levar";}
        else{echo "Não vai levar"; }
        ?>
    <hr>
    <!-- Exercicio de if - else -->
    <p> Exercício de Condicionais - Ifelse</p>
    <p> 1- Verificar se uma pessoa deve votar ou não, ou, se está pessoa possui voto facultativo</p>
    <?php 
      $idade =50;
      if ($idade<16){
          echo "Não Vota!!<br>";
      }
      elseif($idade>=18 && $idade<=70){
                    echo "Tem que votar!!<br>";
                   }else{
                   echo "Vote se quiser!!<br>";}
                   ?>
    <hr>
    <!--Switch-->
    <p>
        <h1>Switch</h1>
    </p>
    <?php
    $genero = "Masculino";
    
        switch ( $genero) {
            case "Masculino":
                echo "É do gênero masculino";
                break;
            case "Feminino":
                echo "É do gênero feminino";
                break;
            default:
                echo "Prefere não dizer";
                break;
        }
    ?>

    <!-- Exercicio de switch-->
    <p> Exercício de Condicionais - Switch</p>
    <p> 2- Verificar se uma variavel é 0 e retornar, você informou o valor 0.
        Ou,se a variavel é 1 e retornar, você informou valor 1.
        Ou,se a variavel é qualquer outro númeroe retornaro valor informado.
        (
        <?php
    $Numero = 1;
    
        switch ( $Numero) {
            case 0:
            /**Concatenar fora da frase variável */
                echo "Você informou o valor".$Numero;
                break;
                 /**Concatenar dentro da frase variável */
            case 1:
                echo "Você informou o valor $Numero";
                break;
            default:
                echo "Você informou o valor".$Numero;
                break;
        }
    ?>
    </p>
    <hr>
    <!-- Array-->
    <p>
        <h1> Array </h1>
    </p>
    <?php 
    $arrayAnimais = [
        "Cachorro",
        "Gato",
        "Girrafa",
        "Elefante"
    ];
   

    $estojo = array(
        "Caneta azul",
        "Caneta verde",
        "Caneta vermelha",
        "Controle do projetor"
    );
    var_dump ($estojo)
    ?>
</body>

</html>
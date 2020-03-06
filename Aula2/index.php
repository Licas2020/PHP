<!DOCTYPE html>
<html lang="en">

<head>
    <meta( charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
</head>

<body>
    <h1>Loops e Funções</h1>
    <p> Loops - FOR </P>
    <hr>
    <p> For com incremento</p> <?php 
    for ($i=1;$i<=10;$i++){
      echo $i."<br>";
    }
    ?>

    <p> For com decremento</p>
    <?php 
    for ($i=10;$i>=1;$i--){
      echo $i."<br>";
    }
    ?>
    <hr>

    <p>While com incremento</p>
    <?php
     $i=1;
     while ($i <= 10) {
         echo $i."<br>";
         $i++;
        
     }
     ?>
    <p>While com decremento</p>
    <?php
     $i=10;
     while ($i >=1) {
         echo $i."<br>";
         $i--;
        
     }
     ?>
    <hr>
    <p>DoWhile com incremento</p>
    <?php 
    $i=1;
    do{
        echo $i."<br>";
        $i++;
    }
    while ($i<=10);
    
    ?>
    <p>DoWhile com decremento</p>
    <?php 
    $i=10;
    do{
        echo $i."<br>";
        $i--;
    }
    while ($i>=1);
    
    ?>
    <hr>
    <h1>
        <p>Exemplos percorrendo Arrays com Loops</p>
    </h1>
    <p> For percorrendo array</p>
    <?php 
      // array de animais que será utilizado para os exemplos
    // onde iremos percorrer array
   
    $animais=["Cachorro","Gato","Leao","Pinguim","Zebra"];
      
   // $resultado = count ($animais);
    //echo $resultado;
      
       for ($i=0;$i< count($animais);$i++){
      echo $animais[$i] . "<br>";
    }
    ?>
    <p> While percorrendo array</p>
    <?php 
       
    //$animais=["Cachorro","Gato","Leao","Pinguim","Zebra"];
     $i=0;
    while ($i < count($animais)) {
        echo $animais[$i]."<br>";
        $i++;
    }
    ?>
    <p> DoWhile percorrendo array</p>
    <?php 
     
     //$animais=["Cachorro","Gato","Leao","Pinguim","Zebra"];
     $i=0;
    do{
        echo $animais[$i]."<br>";
        $i++;
    }
    while ($i< count($animais));
    ?>
    <hr>
    <p>Foreach percorrendo array</p>

    <?php
      foreach($animais as $animais){
          echo $animais . "<br>";
      }
      ?>
    <p>Foreach percorrendo array associativo</p>

    <?php
     $user = [
         "nome" => "Marcelão",
         "email"=> "mdiament@digitalhouse.com",
         "telefone"=>"(11) 99999-9999",
     ];
     foreach ($user as $key => $value){
         echo "$key => $value" . "<br>";
     }
    ?>
    <p> Funções</p>
    <p>Função que retorna tabuada de um número </p>

    <?php 
     function tabuada($numero){
         $resultado = 0;
         $arrayResultados = [];
         for ($i=0;$i <= 10;$i++){
             $resultado = $numero * $i;
             echo $resultado;
             array_push($arrayResultados, $resultado);
         }
         
        } 
             ?>

</body>

</html>
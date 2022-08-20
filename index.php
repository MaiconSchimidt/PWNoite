   <?php

    //echo "Meu nome é Maicon";

    $idade = 20;
    $nome = "Schimidt";
    $altura = 1.90;
    $solteiro = True; // se colocar 1 em solteiro, ele consideraria o true. se colocar o 0 falso.
    //$solteiro = 1;
    //echo $solteiro;

     //CONST IDADE = 10; const tudo maiusculo

     //echo IDADE;

     /*
        if(10 > 12)
     {
        echo "Mentira";
     }else {
        echo "10 não é maior que 12";
     }

     $nota1 = 6;

     if($nota1 >= 6)
     {
         echo "aprovado";
     }else if ($nota1 < 6 && $nota1 >= 2)
     {
         echo "ainda tem chance";
     }*/

     // faça um if que calcule a media e escreva na tela se foi aprovado ou nao

    $nota1 = 7;
    $nota2 = 7;

    $media = $nota1 + $nota2;
   // $media = $media / 2;
   $media /= 2;

   //$mult *= 3;
   //$mult = $mult * 3;

    if ($media >= 6 ){
        echo "Aprovado!";
    }else {
        echo "Não aprovado!";
    }
    //cocatenação 
    $nome = "teste";
    echo "<br> <br> Schi" . $nome . "midt"."<br>";

    //loop em php tres..... itens no looping: contador, incremento e condição
    $contadora = 0;
    do{
        // codigo a ser repetido 
        $contadora++; // do while executa uma vez 
    }while($contadora < 10);

    $cont = 0;
    while($contadora < 10){
        //executa os codigos
        $cont++;
    }

    for ($i = 0; $i < 10; $i ++){
        if ( $i % 2 == 0 ){
            echo "<p> ". $i ." é par <p>";
        }else {
            echo "<p> ". $i ."é impar <p>";
        }
    }
    ?>

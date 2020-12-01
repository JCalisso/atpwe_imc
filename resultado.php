<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <header class="bg-dark text-white py-5">
        <div class="conatiner">
            <div class="row justify-content-center">
                <div class="col-6-md-6">
                    <h1>Medidor de IMC!</h1>
                </div>
            </div>        
        </div>
    </header>




    <section class="py-6 bg-light text-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                <?php

                    $valorAltura = $_POST['valorAltura'];
                    $valorPeso   = $_POST['valorPeso'];

                    $valorImc = $valorPeso / ($valorAltura * $valorAltura);                    

                        echo "<h4>IMC: $valorImc </h4>";
                        echo "<h4>altura: $valorAltura </h4>";
                        echo "<h4>peso: $valorPeso </h4>";
                        
                    if ($valorImc < 18.5){
                        echo "<h4>Seu IMC é $valorImc e você está abaixo do peso</h4>";
                    } elseif($valorImc >18.5 && $valorImc < 24.9) {
                        echo "<h4>Seu IMC é $valorImc e você está com peso normal</h4>";
                    } elseif($valorImc > 25 && $valorImc < 29.9) {
                        echo "<h4>Seu IMC é $valorImc e você está com sobrepeso</h4>";
                    } elseif($valorImc > 30 && $valorImc < 34.9) {
                        echo "<h4>Seu IMC é $valorImc e você está com obesidade grau I</h4>";
                    } elseif($valorImc > 35 && $valorImc < 39.9) {
                        echo "<h4>Seu IMC é $valorImc e você está com obesidade grau II</h4>";
                    } else {
                        echo "<h4>Seu IMC é $valorImc e você está com obesidade grau III ou mórbida</h4>";
                    }
            

                ?>
                </div>
            </div>
        </div>
    </section>


    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>

<!-- 
    concatenar no php é feito com ponto exemplo: echo 'Meu nome é '.$nome.'.'
 -->

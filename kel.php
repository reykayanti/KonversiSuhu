<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container1">
        <h1 class="html1">Convert Kelvin To:</h1>
        <form action="" method="POST" class="form">
            <div class="inp">Masukkan Kelvin</div>
            <input type="text" name="kel" class="inputan"/> 
            <div class="conradio">
                <input type="radio" class ="rad" name="termo" value="cel">Celcius</input>
                <input type="radio" class ="rad" name="termo" value="far">Farenheit</input>
                <input type="radio" class ="rad" name="termo" value="rea">Reamur</input>
            </div>
            <button type="submit" class="sub" name="submit">Submit</button><br><br>
        </form>
        <a href="index.php"><button class="sub">Kembali</button></a> <br> <br> <br>
        <?php 

            if(isset($_POST['kel'])){
                $kel = (float)$_POST['kel'];
                echo "Kamu memasukkan angka " .  $kel . " <br>" ;
                if(isset($_POST['termo'])){
                    $termo = $_POST['termo'];

                    switch($termo){
                        case($termo == 'cel'):
                            $cel = $kel - 273;
                            echo "Suhu Celciusnya adalah " . $cel;
                        break;
                        case($termo == 'far'):
                            $rea = ( 4 / 5) * ($kel - 273 );
                            echo "Suhu Farenheitnya adalah " . $rea;
                        break;
                        default:
                            $far =  ( ( 9 / 5 )  * ( $kel - 273 ) ) + 32;
                            echo "Suhu Farenheitnya adalah " . $far;
                    }

                }else{
                    echo "Pilih dahulu dulu apa yang mau kamu hitung";
                }

            }

        ?>
    </div>

</body>
</html>
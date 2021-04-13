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
        <h1 class="html1">Convert Farenheit To:</h1>
        <form action="" method="POST" class="form">
            <div class="inp">Masukkan Farenheit</div>
            <input type="text" name="far" class="inputan"/> 
            <div class="conradio">
                <input type="radio" class ="rad" name="termo" value="cel">Celcius</input>
                <input type="radio" class ="rad" name="termo" value="rea">Reamur</input>
                <input type="radio" class ="rad" name="termo" value="kel">Kelvin</input>
            </div>
            <button type="submit" class="sub" name="submit">Submit</button><br><br>
        </form>
        <a href="index.php"><button class="sub">Kembali</button></a> <br> <br> <br>
        <?php 

            if(isset($_POST['far'])){
                $far = (float)$_POST['far'];
                echo "Kamu memasukkan angka " .  $far . " <br>" ;
                if(isset($_POST['termo'])){
                    $termo = $_POST['termo'];

                    switch($termo){
                        case($termo == 'cel'):
                            $cel = ( 5 / 9) * ($far - 32);
                            echo "Suhu Celciusnya adalah " . $cel;
                        break;
                        case($termo == 'rea'):
                            $rea = ( 4 / 9 ) * ($far - 32);
                            echo "Suhu Reamurnya adalah " . $rea;
                        break;
                        default:
                            $kel =  (( 5 / 9 ) * ($far - 32 ))  + 273;
                            echo "Suhu Kelvinnya adalah " . $kel;
                    }

                }else{
                    echo "Pilih dahulu dulu apa yang mau kamu hitung";
                }

            }

        ?>
    </div>

</body>
</html>
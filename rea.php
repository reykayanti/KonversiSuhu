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
        <h1 class="html1">Convert Reamur To:</h1>
        <form action="" method="POST" class="form">
            <div class="inp">Masukkan Reamur</div>
            <input type="text" name="rea" class="inputan"/> 
            <div class="conradio">
                <input type="radio" class ="rad" name="termo" value="cel">Celcius</input>
                <input type="radio" class ="rad" name="termo" value="far">Farenheit</input>
                <input type="radio" class ="rad" name="termo" value="kel">Kelvin</input>
            </div>
            <button type="submit" class="sub" name="submit">Submit</button><br><br>
        </form>
        <a href="index.php"><button class="sub">Kembali</button></a> <br> <br> <br>
        <?php 

            if(isset($_POST['rea'])){
                $rea = (float)$_POST['rea'];
                echo "Kamu memasukkan angka " .  $rea . " <br>" ;
                
                if(isset($_POST['termo'])){
                    $termo = $_POST['termo'];

                    switch($termo){
                        case($termo == 'cel'):
                            $cel = ( 5 / 4 ) * $rea;
                            echo "Suhu Celciusnya adalah " . $cel;
                        break;
                        case($termo == 'far'):
                            $far = (( 9 / 4 ) * $rea ) + 32;
                            echo "Suhu Farenheitnya adalah " . $far;
                        break;
                        default:
                            $kel =  (( 5 / 4 ) * $rea) + 273 ;
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
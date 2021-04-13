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
        <h1 class="html1">Convert Celcius To:</h1>
        <form action="" method="POST" class="form">
            <div class="inp">Masukkan celcius</div>
            <input type="text" name="cel" class="inputan"/> 
            <div class="conradio">
                <input type="radio" class ="rad" name="termo" value="far">Farenheit</input>
                <input type="radio" class ="rad" name="termo" value="rea">Reamur</input>
                <input type="radio" class ="rad" name="termo" value="kel">Kelvin</input>
            </div>
            <button type="submit" class="sub" name="submit">Submit</button><br><br>
        </form>
        <a href="index.php"><button class="sub">Kembali</button></a> <br> <br> <br>
        <?php 

if(isset($_POST['cel'])){
    $cel = (float)$_POST['cel'];
    echo "Kamu memasukkan angka " .  $cel . " <br>" ;
    if(isset($_POST['termo'])){
        $termo = $_POST['termo'];

        switch($termo){
            case($termo == 'far'):
                $far = ( (9/5) * $cel) + 32;
                echo "Suhu Farenheitnya adalah " . $far;
            break;
            case($termo == 'rea'):
                $rea = (4/5) * $cel;
                echo "Suhu Reamurnya adalah " . $rea;
            break;
            default:
                $kel = $cel + 273;
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
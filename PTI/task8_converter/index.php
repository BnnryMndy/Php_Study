<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/main.js"></script>
    <title>Converter 3000</title>
</head>
<body>
    <div class="container">
        <form action="index.php" method="get">
            <datalist id="list_currience">
                <option label="🇷🇺 Российский рубль" value="RUB" >
                <option label="🏳‍🌈 Евро" value="EUR">
                <option label="🇺🇲 Доллар США" value="USD">
                <option label="🇬🇧 Фунт стерлингов" value="GBP">
                <option label="🇯🇵 Японская иена" value="JPY">
            </datalist>
            <h1>Конвертер 3001</h1>
            <h2>Введите Валюту</h2>
            
            <span>Вашу: </span>
            <input required id="from_currience" name="from_currience" list="list_currience" value="<?php echo $_GET['from_currience']?>">
            <br><br><span>Назначения: </span>
            <input required id="to_currience" name="to_currience" list="list_currience" value="<?php echo $_GET['to_currience']?>">
            <br><br>
            <span>Введите сумму: </span>
            <input required id="value_to_convert" type="number" name="value_to_convert" id="" value="<?php echo $_GET['value_to_convert']?>">
            <br><br>
            <input type="submit" value="Рассчитать">
        </form>

        <h2 class="result">
            <?php
                $curriences_values = [  
                                    'RUB' => 1.,
                                    'USD' => 0.0131,
                                    'EUR' => 0.0111,
                                    'GBP'=> 0.0095,
                                    "JPY" => 1.4448
                ];

                $from_currience = $_GET['from_currience'];
                $to_currience = $_GET['to_currience'];
                $value_to_convert = $_GET['value_to_convert']; 
                
                $converted_value = round (($value_to_convert / $curriences_values[$from_currience]) * $curriences_values[$to_currience] , 4);

                echo "Результат:<br>$converted_value $to_currience";
            ?>
        </h2>
    </div>
</body>
</html>
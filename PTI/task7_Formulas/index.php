<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/main.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>P H P раз</title>
</head>
<body>
<h1>Ультра дуперпупертаблицы</h1>
    <div class="container">
        
        <form action="index.php" method="get" >
            <span>a = </span><input type="number" name="a" id="" value="<?php echo $_GET["a"]?>">
            <br><span>b = </span><input type="number" name="b" id="" value="<?php echo $_GET["b"]?>">
            <br><span>c = </span><input type="number" name="c" id="" value="<?php echo $_GET["c"]?>">
            
            <br><input name="formulas" list="formulas" value="<?php echo $_GET['formulas']?>">
            <datalist id="formulas">
                <option label="parabola" value="y=ax^2+bx+c">
                <option label="sinusuicidal" value="y=a*sin(bx)+c">
                <option label="linelical" value="y=a*x+b">
            </datalist>
            
            <br>
            <input type="submit" value="let's go!">
        </form>

        <table>
            <tr>
                <th>X</th>
                <th>Y</th>
            </tr>

            
            <?php
                function quadro($a, $b, $c, $x){
                    $result = $a*$a*$x + $b*$x + $c;
                    return $result;
                }

                function sinx($a, $b, $c, $x){
                    $result = $a*sin($b*$x) + $c;
                    return $result;
                }

                function linx($a, $b, $c, $x){
                    $result = $a*$x + $b;
                    return $result;
                }
                
                

                $a = $_GET['a'];
                $b = $_GET['b'];
                $c = $_GET['c'];

                for ($i = -3; $i <= 3; $i+= 0.5) {
                    if( $_GET['formulas'] == 'y=ax^2+bx+c'){
                        $res = quadro($a, $b, $c, $i);
                    }
                        
                    if( $_GET['formulas'] == 'y=a*sin(bx)+c'){
                        $res =sinx($a, $b, $c, $i);
                    }
                    if( $_GET['formulas'] == 'y=a*x+b'){
                        $res =linx($a, $b, $c, $i);
                    }
                    echo "<tr>
                    <th>$i</th>
                    <th>$res</th>
                </tr>";
                }
            ?>
        </table>
    </div>
</body>
</html>
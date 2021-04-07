<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/main.js"></script>
    <link rel="stylesheet" href="style.css">

    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <title>P H P раз</title>
</head>
<body>
<h1>Ультра дуперпупертаблицы</h1>
    <div class="container">
        
        <form action="index.php" method="get" >
            <span>a = </span><input type="number" name="a" id="a" value="<?php echo $_GET["a"]?>">
            <br><span>b = </span><input type="number" name="b" id="b" value="<?php echo $_GET["b"]?>">
            <br><span>c = </span><input type="number" name="c" id="c" value="<?php echo $_GET["c"]?>">
            
            <br><input id="formula" name="formulas" list="formulas" value="<?php echo $_GET['formulas']?>">
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
                    $result = $a*$x*$x + $b*$x + $c;
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
                    $id_increment = ($i + 3) * 2;
                    echo "<tr>
                    <th>$i</th>
                    <th id = '$id_increment'>$res</th>
                </tr>";
                }
            ?>
        </table>
        <div id="graph"></div>
    </div>
    <footer> Лазарев Антон, гр.3012</footer>
</body>

<script>
    TESTER = document.getElementById('graph');

    var y_table = [];

    for (var incriment = 0; incriment < 13; incriment++){
        var y_from_page = document.getElementById(incriment).textContent;
        y_table.push(Number(y_from_page));
        // console.log(y_from_page);
    }

    var trace1 = {
        x: [-3, -2.5, -2, -1.5, -1, -0.5, 0, 0.5, 1, 1.5, 2, 2.5, 3],
        y: y_table,
        fill: 'tozeroy',
        mode: 'lines'
    };

    var data = [trace1];

    var layout = {
        title: 'Супер Дупер График',
        xaxis: {
            showgrid: false,
            showline: false,
            showticklabels: false,
            zeroline: false
        },
        yaxis: {
            showgrid: false,
            showline: false,
            showticklabels: false,
            zeroline: false
        },
        showlegend: false
    };
    Plotly.plot(TESTER, data, layout, {staticPlot: true});
</script>
</html>
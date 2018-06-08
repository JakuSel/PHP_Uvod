<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        td {
            display: table-cell;
            vertical-align: inherit;
            width: 20px;
        }
        tr:first-child, td:first-child { font-weight: bold }
    </style>
</head>
<body>
    <h1>HELLO</h1>
    <?php 
        //phpinfo();
        /* $a=14;
        $b=5;
        $c=$a+$b;
        echo "výsledok je :"+$c;
        echo "<h2>Ahoj</h2>";
        */
        echo "<table border=\"1\">"; 
        
        $cols = 10;
        $rows = 10;

        for ($r =1; $r <= $rows; $r++){
            echo'<tr>';
            for ($c = 1; $c <= $cols; $c++){
                echo '<td>' .$c*$r.'</td>';
            }                
           echo '</tr>';
        }
        echo"</table>";
    ?>
</body>
</html>
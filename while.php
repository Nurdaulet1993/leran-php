<?php
    // $a = 10;
    // while($a >= 0){
    //     echo $a .' => ';
    //     $a--;
    // }

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
    <?php
        $i = 1;

        while($i < 10){
            echo "<tr>";
                $n = 0;
                while($n <= 3){
                    echo "<td>Row $i col-$n</td>";
                    $n++;
                }
            echo "</tr>";
            $i++;
        }
    ?>
    </table>

    <?php 
        $year = 1990;
        echo "<select>";
            while($year <= 2000){
                echo "<option value='$year'>";
                echo $year;
                echo '</option>';
                $year++;
            }
        echo "</select>";
    ?>
    <table>
        <?php
            $i = 1;
            while($i < 10){
                echo "<tr>";
                    $num = 1;
                    while($num < 10){
                        echo "<td>$i * $num = " . $i * $num .";</td>";
                        $num++;
                    }
                echo "</tr>";
                $i++;
            }
        ?>
    </table>
</body>
</html>
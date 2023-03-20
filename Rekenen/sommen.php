<?php
    $randomnum = rand();
    $randomnum2 = rand();
    $calculation =  $randomnum + $randomnum2;

    echo "<h2>Lab 3a</h2>";
    echo "Num1: $randomnum + Num2: $randomnum2 = $calculation" ;
?>


<?php
    function Table($number){
        for ($i = 1; $i <= 10; $i++) {
            echo "$number x $i = " . $i * $number . "<br>";
        }
    }

    echo "<h2>Lab 3b</h2>";

    Table(6);
    echo "<br>";
    Table(3);
    echo "<br>";
    Table(5);
    echo "<br>";
    Table(8);
    echo "<br>";
    Table(12);
?>
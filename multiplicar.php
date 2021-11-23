<?php
// Generate Multiplication Table
function multiplication_tables($myArray) {
    echo "<table style='border: 1px solid #ddd; width: 50%; text-align: center; margin: 0 auto;'>
          <tr style='background-color: aquamarine;'>";
    foreach ($myArray as $x => $value) {
        echo "<th style='height: 25px'>" . ucfirst($x) . " tabla</th>";
    }
          echo "</tr>";
    for($i = 1; $i < 11; $i++) {
        echo "<tr>";
        foreach ($myArray as $x => $value) {
            echo "<td style='height: 25px'>$value x $i =" . $value*$i . "</td>";
        }
        echo "</tr>";
    }
}

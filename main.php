<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tablas de Multiplicar</title>
</head>
<body>
<h2 style="text-align: center">Mi tabla de multiplicar</h2>
    <?php
    include "multiplicar.php";

    // Generate Multiplication Table
    multiplication_tables(array("primera"=>5, "segunda"=>13, "tercera"=>11));
    ?>
</body>
</html>
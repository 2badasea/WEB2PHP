<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Comparison Operators &amp; Boolean data type</h1>

    <h2>1==1</h2>

    <?php
    echo var_dump(1 == 1), "<br><br>"; // bool(true) 
    echo var_dump(11), "<br>";   //  int(11)
    echo var_dump('11'), "<br>";   // string(2) "11"
    echo var_dump(1 + 1), "<br>"; //  int(2)
    echo var_dump(1==2), "<br>";  // bool(false)
    echo var_dump(1>2), "<br>"; // bool(false)
    echo var_dump(1>=1), "<br>"; // bool(true);
    ?>
</body>
</html>
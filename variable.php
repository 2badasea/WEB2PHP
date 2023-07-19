<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Variable</h1>

    <?php

    // php에서는 변수 이름 앞에 반드시 달러($)를 붙인다. 
    $a = 10;
    echo $a + 1, "<br>";  // 11 
    ?>

    <!-- Lorem이라는 샘플 text문서에 중간중간 'leebada'을 삽입 -->
    <?php
    // 아래 변수에 담긴 값만 변경하면 아래 echo의 모든 $name 부분을 변경할 수 있다. 
    $name = "leebada";

    echo "Lorem ipsum dolor sit ".$name." amet consectetur, adipisicing  ".$name." elit. Deserunt fugit voluptatum veritatis quis atque. Explicabo minus ".$name." excepturi odio praesentium laborum  ".$name." modi voluptate ".$name." eius illo, reiciendis doloremque labore cumque ".$name." esse quaerat?";

    ?>
</body>

</html>
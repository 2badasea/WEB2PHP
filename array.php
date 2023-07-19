<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1>Array</h1>

    <?php
    $coworkers = array('egoing', 'leezche', 'duru', 'taeho'); // 4개의 문자열을 담고 있는 배열의 표현식(배열 리터럴)
    // echo $coworkers  // Array 라고만 단순히 출력된다.

    echo $coworkers[1].'<br>';  // 'leezche' 출력 
    echo $coworkers[3].'<br>';  // 'taeho' 출력 

    // 배열의 길이
    var_dump(count($coworkers));  // int(4)  

    // 배열에 데이터를 추가하는 방법
    array_push($coworkers, 'graphittie'); // 배열에 요소 하나를 추가
    var_dump($coworkers);  // int(4) array(5) { [0]=> string(6) "egoing" [1]=> string(7) "leezche" [2]=> string(4) "duru" [3]=> string(5) "taeho" [4]=> string(10) "graphittie" }

    ?>
</body>
</html>
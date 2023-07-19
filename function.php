<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>
<body>
    <h1>Function</h1> 
    <?php
    
    $str = "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Repellendus maxime sequi alias! 
    Quasi voluptatum laboriosam, corporis nostrum suscipit placeat quisquam corrupti accusamus architecto consequatur quis fugit, ad voluptates mollitia necessitatibus.";
    echo $str, "<br>";
    ?>

    <h2>strlen()</h2>
    <?php
    echo strlen($str); // 함수는 괄호 안에 데이터가 들어오면 계산한 결과를 반환해주는 작은 프로그램
    ?>

    <h2>nl2br</h2>
    <?php
    // nl2br() : 문자열의 모든 줄바꿈 앞에 HTML 줄바꿈 태그를 삽입
    // 모든 줄바꿈 앞에 '<br />'이나 '<br>'를 삽입한 string을 반환
    echo nl2br($str);
    ?>
</body>
</html>
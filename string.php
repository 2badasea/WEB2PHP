<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>String & String Operator</h1>

<?php
echo 'Hello World',"<br>"; // single quote로 표현 가능
echo "Hello World","<br>"; // double quote로도 표현 가능. 단, 하나의 형식으로 시작과 끝을 통일할 것.
echo "Hello \"World\"", "<br>";    // escape기호를 통한 따옴표 표기 
echo "Hello 'World'", "<br>";      // 인용표시는 바깥쪽 quote와 구분하여 입력
echo 'Hello "World"', "<br>";       // 인용표시는 바깥쪽 quote와 구분하여 입력
?>

<h2>Concatenation operator</h2>
<?php
echo "Hello"."World";   // '.'  결합 연산자. concatenation operator 좌항과 우항을 결합해서 하나의 문자열 가능
?>

<h2>String length function</h2>
<?php
echo strlen("Hello world"), "<br>";  // 11   

$str = "Developer Leebada";
$strLength = strlen($str); // '$str' 변수에 담긴 문자열의 길이를 '$strLength'에 대입
echo $strLength, "<br>";  // 17
?>
</body>
</html>
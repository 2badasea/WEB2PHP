<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>functions</title>
</head>

<body>
    <h1>Function</h1>
    <h2>Basic</h2>
    <?php
    // 함수를 정의할 때는 function이란 약속된 키워드와 함수이름, 그리고 괄호와 중괄호로 이루어져 있다. 
    function basic() {
        print("Lorem ipsum dolor1<br>");
        print("Lorem ipsum dolor2<br>");
    }

    // 함수이름과 괄호, 그리고 세미콜론으로 구성되어 있다면 해당 이름을 가진 함수를 호출하는 것.
    basic();
    ?>

    <h2>parameter &amp; argument</h2>
    <?php
    // 중괄호 안에 들어가는 값을 parameter(매개변수)
    function sum($left, $right){
        print($left + $right);
        print("<br>");
    }

    // 함수를 호출할 때 괄호 안에 명시한 것을 argument(인수)라고 한다. 
    sum(2,4);
    sum(4,6);
    ?>

    <h2>return</h2>
    <?php
    function sum2($left, $right){
        return $left + $right;
        // 'return' 뒤에 입력한 코드는 무시된다. 모든 함수는 return문을 만나면 종료된다. 
    }
    print(sum2(2,4)); // 화면에 6이 출력된다. 
    file_put_contents('result.txt', sum2(2,4));  // 현재 디렉토리에 'result.txt' 파일에 sum2(2,4)결과값 6이 내용이 포함된 문서 파일이 생성. 
    ?>
</body>

</html>
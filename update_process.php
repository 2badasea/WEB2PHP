<?php
// post방식으로 넘어온 데이터를 받아서 처리 
rename( 'data/'.$_POST['old_title'] , 'data/'.$_POST['title']);

$contents = $_POST['description'];
print('입력값 확인: '.$contents);

file_put_contents('data/'.$_POST['title'], $contents);

header("Location: /index.php?id=".$_POST['title']); 
?>
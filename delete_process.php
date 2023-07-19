<?php
// print($_GET['id']);  
// id값이 파일명만 들어온 것만 처리할 수 있도록 basename()을 사용한다. 
unlink('./data/'.basename($_POST['id']));
// 파일을 삭제하고 홈으로 이동
header("Location: /index.php");
?>
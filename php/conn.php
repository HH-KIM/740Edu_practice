<?php

$db_host = "hohyun.kim";
$db_user = "h2k9161";
$db_password = "ghgus26!";
$db_name = "h2k9161";

$conn = mysqli_connect($db_host, $db_user, $db_password,$db_name);
if( mysqli_connect_errno($conn)){
  echo "데이터베이스 연결 실패:" . mysqli_connect_error();

}else{
  echo "성공";
}

 ?>

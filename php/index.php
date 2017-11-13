<?php
 $link = require_once('php/conn.php');


 $sql    = 'SELECT foo FROM hohyun WHERE uid = 123';
 $result = mysql_query($sql, $link);

 while ($row = mysql_fetch_assoc($result)) {
     echo $row['uemail'];
 }

 ?>

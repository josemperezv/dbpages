<?php
$con = new mysqli("127.0.0.1", "root", "dunkelheit", "dbtest");
$result = $con->query("SELECT dbmsg FROM dbtable")->fetch_object()->dbmsg;
$con->close();
echo "$result <br/>";
echo "Hello From dbweb Folder!";
phpinfo();
?>
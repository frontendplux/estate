<?php
include __DIR__."/config.php";
 $conn=new mysqli(db_hostname,db_username,db_password);
 $conn->select_db(db_name);

?>
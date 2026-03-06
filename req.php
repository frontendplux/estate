<?php 
include __DIR__."/conn.php"; 
$getdata=json_decode(file_get_contents('php://input'), true);
$getdata2=$_POST;
$action=$getdata['action'] ??  $_POST['action']; 
switch ($action) {
    case '':
       
        break;
    
    default:
        # code...
        break;
}

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../dbconnection/connection.php';

$pcode=$_REQUEST['id'];
$img=$_GET['img'];
unlink('../photos/'.$img);
$query="delete from student_register where id='$pcode'";
$rst= mysqli_query($link, $query) or die(mysqli_error());
if($rst){
    header('Location:../view_admissions.php');
}
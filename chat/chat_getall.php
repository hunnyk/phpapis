<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$con = mysqli_connect("localhost", "root", "root", "socketmsgdb");
$sql = "select * from chattb";
$r = mysqli_query($con, $sql);
while($row=mysqli_fetch_array($r,MYSQLI_ASSOC)) {
    $res[]=$row;
}
echo json_encode($res,true);

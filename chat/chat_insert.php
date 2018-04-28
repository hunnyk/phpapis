<?php
$con=mysqli_connect('localhost','root','root','socketmsgdb');

$postdata = file_get_contents("php://input");
$request = json_decode($postdata);

 header('Content-type: application/json');
 header("Access-Control-Allow-Origin: *");
 header('Access-Control-Allow-Headers: *');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$sql="insert into chattb(room,nickname,message) VALUES ('".$request->room."','".$request->nickname."','".$request->message."')";
	$r=mysqli_query($con,$sql);
	echo json_encode($request);
}


<?php
$con=mysqli_connect('localhost','root','root','socketmsgdb');

 header('Content-type: application/json');
 header("Access-Control-Allow-Origin: *");
 header('Access-Control-Allow-Headers: *');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
	$sql="SELECT * FROM chattb WHERE room=".$_SERVER['QUERY_STRING'];
	$r=mysqli_query($con,$sql);
	$res;
	while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
	   $res->chat_id=$row['chat_id'];
       $res->room=$row['room'];
       $res->nickname=$row['nickname'];
       $res->message=$row['message'];
    }

	echo json_encode($res);
}

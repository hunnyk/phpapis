<?php
$con=mysqli_connect('localhost','root','root','userdb');


header('Content-type: application/json');
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: *');

if($_REQUEST['action'] == 'delete') {
	$sql="DELETE FROM articletb WHERE article_id=".$_REQUEST['id'];
	$r=mysqli_query($con,$sql);
	echo json_encode($request->article_id);
}

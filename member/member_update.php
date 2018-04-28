<?php
$con=mysqli_connect('localhost','root','root','userdb');

$postdata = file_get_contents("php://input");
$request = json_decode($postdata);

 header('Content-type: application/json');
 header("Access-Control-Allow-Origin: *");
 header('Access-Control-Allow-Headers: *');
 

 if($_REQUEST['action']=='edit'){
	$sql="UPDATE member SET firstname='".$request->firstname."', lastname='".$request->lastname."' WHERE mem_id=".$_REQUEST['id'];
	$r=mysqli_query($con,$sql);
	echo json_encode($request);
}
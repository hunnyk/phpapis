<?php
$con=mysqli_connect('localhost','root','root','userdb');

 header('Content-type: application/json');
 header("Access-Control-Allow-Origin: *");
 header('Access-Control-Allow-Headers: *');

$data = json_decode(file_get_contents("php://input"));

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$sql="SELECT * FROM registerangtb WHERE email='".$data->email."' AND password='".$data->password."'";
	$r=mysqli_query($con,$sql);

	if(mysqli_num_rows($r)==0){
		$re->msg='notfound';
	}
	else{
		$re=mysqli_fetch_array($r);	
	}

	echo json_encode($re);

}

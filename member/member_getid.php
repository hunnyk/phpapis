<?php
$con=mysqli_connect('localhost','root','root','userdb');

 header('Content-type: application/json');
 header("Access-Control-Allow-Origin: *");
 header('Access-Control-Allow-Headers: *');

if ($_REQUEST['action']=='getid') {
	$sql="SELECT * FROM member WHERE mem_id=".$_REQUEST['id'];
    $r = mysqli_query($con, $sql);
	while($row=mysqli_fetch_array($r,MYSQLI_ASSOC)) {
        $res=$row;
    }
    echo json_encode($res,true);
}
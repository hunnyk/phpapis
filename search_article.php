<?php
$con=mysqli_connect('localhost','root','root','userdb');

 header('Content-type: application/json');
 header("Access-Control-Allow-Origin: *");
 header('Access-Control-Allow-Headers: *');

if ($_REQUEST['action'] == 'search') 
{
	$sql="SELECT * FROM articletb WHERE title like '%".$_REQUEST['title']."%' AND category like '%".$_REQUEST['category']."%' ";
    $r=mysqli_query($con,$sql);
	//$res=[];

    while($row=mysqli_fetch_array($r,MYSQLI_ASSOC)) {
      $res[]=$row;
    }
    echo json_encode($res,true);

}

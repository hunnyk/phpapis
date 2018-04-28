<?php
$con=mysqli_connect('localhost','root','root','userdb');

 header('Content-type: application/json');
 header("Access-Control-Allow-Origin: *");
 header('Access-Control-Allow-Headers: *');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
	$sql="SELECT * FROM articletb WHERE article_id=".$_SERVER['QUERY_STRING'];
	$r=mysqli_query($con,$sql);
	$res;
	while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
	   $res->article_id=$row['article_id'];
       $res->title=$row['title'];
       $res->category=$row['category'];
    }

	echo json_encode($res);
}

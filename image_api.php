<?php
$con=mysqli_connect('localhost','root','root','userdb');
header("Access-Control-Allow-Origin: *");
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(array('status' => false));
    exit;
}
$path='uploads/';

if(isset($_FILES['avtar'])) {
    $originalName = $_FILES['avtar']['name'];
    $target_file=$path.$originalName;
    move_uploaded_file($_FILES["avtar"]["tmp_name"], $target_file);
    $sql = "INSERT INTO imgtb(fname,avtar) VALUES ('" . $_POST['fname'] . "','" . $originalName . "')";
    $r = mysqli_query($con, $sql);
    echo json_encode(
        array('status' => true, 'msg' => 'file uploaded.')
    );
}
else {
    echo json_encode(
        array('status' => false, 'msg' => 'No file uploaded.')
    );
    exit;
}
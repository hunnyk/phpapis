<?php
class Registers{
  function getAllReg(){
    global $conn;
    $sql = "select * from registerangtb";
      $r = mysqli_query($conn, $sql);

      while($row=mysqli_fetch_array($r,MYSQLI_ASSOC)) {
          $res[]=$row;
      }
      echo json_encode($res,true);
  }
  
  function saveReg($data){
    global $conn;
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $query="INSERT INTO registerangtb(reg_name,reg_address,username,email,password,gender,contact) VALUES ('".$data->reg_name."','".$data->reg_address."','".$data->username."','".$data->email."','".$data->password."','".$data->gender."','".$data->contact."')";
   // echo $query;
    $result=mysqli_query($conn, $query);

    }
  }
 
  function deleteReg($data){
    global $conn;
    $query = "DELETE FROM registerangtb WHERE reg_id=".$_REQUEST['id'];
    echo $result=mysqli_query($conn, $query);
      
  }

  function getRegById($data){
    global $conn;
    $sql = "SELECT * FROM registerangtb WHERE reg_id=".$_REQUEST['id'];
    $r = mysqli_query($conn, $sql);

    while($row=mysqli_fetch_array($r,MYSQLI_ASSOC)) {
      $res=$row;
    }
    echo json_encode($res,true);
    
  }

  function updateReg($data){
    global $conn;
    $query = "UPDATE registerangtb SET reg_name='".$data->reg_name."',reg_address='".$data->reg_address."',username='".$data->username."',email='".$data->email."',password='".$data->password."',gender='".$data->gender."',contact='".$data->contact."' WHERE reg_id=".$_REQUEST['id'];
    echo $result=mysqli_query($conn, $query);
   
  }

}
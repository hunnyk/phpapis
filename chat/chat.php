<?php
class Chat{
  function getAllChat(){
    global $conn;
    $sql = "select * from chattb";
      $r = mysqli_query($conn, $sql);

      while($row=mysqli_fetch_array($r,MYSQLI_ASSOC)) {
          $res[]=$row;
      }
      echo json_encode($res,true);
  }
  
  function saveChat($data){
    global $conn;
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $query="insert into chattb(room,nickname,message) VALUES ('".$request->room."','".$request->nickname."','".$request->message."')";
   // echo $query;
    $result=mysqli_query($conn, $query);

    }
  }
 
  function deleteChat($data){
    global $conn;
    $query = "DELETE FROM chattb WHERE chat_id=".$_REQUEST['id'];
    echo $result=mysqli_query($conn, $query);
      
  }

  function getChatById($data){
    global $conn;
    $sql = "SELECT * FROM chattb WHERE chat_id=".$_REQUEST['id'];
    $r = mysqli_query($conn, $sql);

    while($row=mysqli_fetch_array($r,MYSQLI_ASSOC)) {
      $res=$row;
    }
    echo json_encode($res,true);
    
  }

  function getChatByRoom($data){
    global $conn;
    $sql = "SELECT * FROM chattb WHERE room=".$_REQUEST['room'];
    $r = mysqli_query($conn, $sql);

    while($row=mysqli_fetch_array($r,MYSQLI_ASSOC)) {
      $res=$row;
    }
    echo json_encode($res,true);
    
  }

  function updateChat($data){
    global $conn;
    $query = "UPDATE chattb SET room='".$data->room."', nickname='".$data->nickname."',message='".$data->message."' WHERE chat_id=".$_REQUEST['id'];
    echo $result=mysqli_query($conn, $query);
   
  }

}
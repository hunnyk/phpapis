<?php
class Articles{
  function getArticles(){
    global $conn;
    $sql = "select * from articletb";
      $r = mysqli_query($conn, $sql);

      while($row=mysqli_fetch_array($r,MYSQLI_ASSOC)) {
          $res[]=$row;
      }
      echo json_encode($res,true);
  }
  
  function saveArticle($data){
    global $conn;
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $query="INSERT INTO articletb(title, category) VALUES ('".$data->title."','".$data->category."')";
    $result=mysqli_query($conn, $query);

    }
  }
 
  function deleteArticle($data){
    global $conn;
    $query = "DELETE FROM articletb WHERE article_id=".$_REQUEST['id'];
    echo $result=mysqli_query($conn, $query);
      
  }

  function getArticleById($data){
    global $conn;
    //$sql = "SELECT * FROM articletb WHERE article_id=".$_SERVER['QUERY_STRING'];
    $sql = "SELECT * FROM articletb WHERE article_id=".$_REQUEST['id'];
    $r = mysqli_query($conn, $sql);

      while($row=mysqli_fetch_array($r,MYSQLI_ASSOC)) {
          $res=$row;
    }
    echo json_encode($res,true);
    
  }

  function updateArticle($data){
    global $conn;
    $query = "UPDATE articletb SET title='".$data->title."', category='".$data->category."' WHERE article_id=".$_REQUEST['id'];
    echo $result=mysqli_query($conn, $query);
   
  }

}
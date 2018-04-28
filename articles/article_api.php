<?php

$conn = mysqli_connect('localhost','root','root','userdb');
include_once('articles.php');

header('Content-type: application/json');
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: *');

$data = json_decode(file_get_contents("php://input"));

$article = new Articles;

switch($_REQUEST['action'])
{
    case 'getall':
    	$article->getArticles();
    break;
    case 'getid':
    	$article->getArticleById($data);
    break;
	case 'save':
	    $article->saveArticle($data);
	break;
	case 'delete':
	    $article->deleteArticle($data);
	break;
	case 'edit':
	    $article->updateArticle($data);
	break;
	default:
	    header("HTTP/1.0 405 Method Not Allowed");
	break;
}
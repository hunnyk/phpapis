<?php

$conn = mysqli_connect('localhost','root','root','socketmsgdb');
include_once('smart.php');

header('Content-type: application/json');
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: *');

$data = json_decode(file_get_contents("php://input"));

$ch = new Chat;

switch($_REQUEST['action'])
{
    case 'getall':
    	$ch->getAllChat();
    break;
    case 'getid':
    	$ch->getChatById($data);
    break;
	case 'save':
	    $ch->saveChat($data);
	break;
	case 'delete':
	    $ch->deleteChat($data);
	break;
	case 'edit':
	    $ch->updateChat($data);
	break;
	case 'getroom':
	    $ch->getChatByRoom($data);
	break;
	default:
	    header("HTTP/1.0 405 Method Not Allowed");
	break;
}
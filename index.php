<?php
// include the necessary files
require_once('../app/lib/Database.php');
require_once('../app/models/TicTacToeModel.php');
require_once('../app/controllers/TicTacToeController.php');

// instantiate the database object and the TicTacToeModel object
$database = new Database();
$db = $database->connect();
$model = new TicTacToeModel($db);

// // instantiate the TicTacToeController object
// $controller = new TicTacToeController($model);

// // parse the request and call the appropriate method on the controller
// if ($_SERVER['REQUEST_METHOD'] === 'GET') {
//     $controller->index();
// } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $body = file_get_contents('php://input');
//     $params = json_decode($body, true);
//     $controller->play($params['row'], $params['col']);
// } else if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
//     $controller->reset();
// }
?>

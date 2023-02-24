<?php
// include the necessary files
require_once('lib/Database.php');
require_once('models/TicTacToeModel.php');
require_once('controllers/TicTacToeController.php');

// instantiate the database object and the TicTacToeModel object
$database = new Database();
$db = $database->connect();
$model = new TicTacToeModel($db);
// $results=$model->getGameState(1);


// instantiate the TicTacToeController object
$controller = new TicTacToeController($model);

// parse the request and call the appropriate method on the controller
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['id'])) {
        // Sanitize the input by removing any non-numeric characters
        $game_id = preg_replace('/[^0-9]/', '', $_GET['id']);
    
        // Use the $game_id variable in your code to retrieve the game state
        // ...
    } else {
        // The 'id' parameter is missing, handle the error gracefully
        http_response_code(400); // Bad Request
        echo 'Error: missing game ID parameter';
    }

    $controller->index($game_id);
} else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $body = file_get_contents('php://input');
    $params = json_decode($body, true);
    $controller->play($params['row'], $params['col']);
} else if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $controller->reset();
}

?>

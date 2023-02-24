<?php
class TicTacToeController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function index($id) {
        $game = $this->model->getGameState($id);
        require_once('views/json/game.php');
        
    }

    // public function play($row, $col) {
    //     // get the current game state
    //     $game = $this->model->getGameState();

    //     // update the game state
    //     $game[$row][$col] = 'X'; // assume the user is always X for simplicity
    //     $this->model->updateGameState($game);

    //     // check if the user has won or the game is a draw
    //     // ...

    //     // get the updated game state and return it
    //     $game = $this->model->getGameState();
    //     require_once('views/json/game.php');
    // }

    // public function reset() {
    //     $this->model->resetGameState();
    //     $game = $this->model->getGameState();
    //     require_once('views/json/game.php');
    // }
}
?>

<?php
class TicTacToeModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getGameState($game_id) {
    $query = 'SELECT game FROM  tictactoe_games WHERE id = :id';
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':id', $game_id);

    // Execute the query and fetch the game state
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $game_state = json_decode($result['game'], true);

    // Close the database connection
    $this->conn = null;
      // Return the game state
      return $game_state;

    }

    public function updateGameState($state) {
        // update the current game state in the database
    }

    public function resetGameState() {
        // reset the current game state in the database
    }
}
?>

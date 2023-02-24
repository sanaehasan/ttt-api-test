CREATE TABLE tictactoe_games (
    id INT(11) NOT NULL AUTO_INCREMENT,
    game JSON NOT NULL,
    player1 VARCHAR(255) NOT NULL,
    player2 VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO tictactoe_games (game, player1, player2)
VALUES ('{"board":[["","",""],["","",""],["","",""]],"player":"X"}', 'Player 1', 'Player 2');
# ttt-api-test

This is a proof of concept for simple API Tic-Tac-Toe game

### Development requirements
- OO PHP
- create a Tic-Tac-Toe (https://en.wikipedia.org/wiki/Tic-tac-toe) game that is served over the API
- use any type of database which stores all api queries and results
- create API endpoints:
  - set user_name
  - list empty positions (where user can make next move)
  - post location for new O or X
  - list all active/completed games
  - retrieve any game by ID (if not completed can continue playing)
  - retrieve all games by user_name
- simple frontend to post/read from all endpoints
- use `jQuery` for clicks / X-O drops 
- must use `Trait` and `Helper` in your code
- create .http file (https://www.jetbrains.com/help/idea/http-client-in-product-code-editor.html) with used API calls
- include blank DB structure to import if NOT using `NoSQL database`

### Process
- fork this repository
- spin-up docker with `docker-compose up -d`
- run `npm i`
- have fun with writing the code (see what you can do in max 2 hours)
- commit the code to your repo
- share with us :)

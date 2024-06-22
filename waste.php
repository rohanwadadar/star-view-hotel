<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .game-container {
            margin-top: 50px;
            text-align: center;
            place-content: center;
        }

        .game-board {
            display: grid;
            grid-template-columns: repeat(3, 100px);
            grid-gap: 5px;
            margin: auto;
        }

        .game-cell {
            width: 100px;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: black;
            color: white;
            font-size: 24px;
            cursor: pointer;
        }

        .game-cell:hover {
            background-color: rebeccapurple;
        }

        .game-cell.x, .game-cell.circle {
            color: #ff0000; /* Red color for X and O */
        }

        .game-status {
            text-align: center;
            margin-top: 10px;
            color: #000;
        }

        .btn-secondary {
            background-color: rebeccapurple;
            border-color: #000;
        }

        .btn-secondary:hover {
            background-color:wheat;
            border-color: #333;
        }

        .game-name {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-xl-9">
                <div class="card">
                    <div class="row m-0">
                        <div class="col-sm-4 bg-primary text-white text-center">
                            <div class="card-block py-4">
                                <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-fluid rounded-circle mb-3" alt="User-Profile-Image">
                                <p>Welcome</p>
                                <h6 class='font-weight-bold' id="display-name">USER</h6>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block p-4">
                                <h6 class="mb-4 pb-3 border-bottom font-weight-bold">Information</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="mb-1 font-weight-bold">Email</p>
                                        <h6 class="text-muted" id="display-email">user@example.com</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="mb-1 font-weight-bold">Phone</p>
                                        <h6 class="text-muted" id="display-phone">N/A</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="mb-1 font-weight-bold">Date of Birth</p>
                                        <h6 class="text-muted" id="display-dob">N/A</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="mb-1 font-weight-bold">Facebook</p>
                                        <h6 class="text-muted" id="display-facebook">N/A</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="mb-1 font-weight-bold">Twitter</p>
                                        <h6 class="text-muted" id="display-twitter">N/A</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="mb-1 font-weight-bold">Instagram</p>
                                        <h6 class="text-muted" id="display-instagram">N/A</h6>
                                    </div>
                                </div>
                                <form id="user-form"><br>
                                    <h6 class="mb-4 pb-3 border-bottom font-weight-bold">Information edit</h6>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Name:</label>
                                            <input type="text" class="form-control" id="name" name="name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="email">Email:</label>
                                            <input type="email" class="form-control" id="email" name="email">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="phone">Phone:</label>
                                            <input type="text" class="form-control" id="phone" name="phone">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="dob">Date of Birth:</label>
                                            <input type="date" class="form-control" id="dob" name="dob">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="facebook">Facebook:</label>
                                            <input type="text" class="form-control" id="facebook" name="facebook">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="twitter">Twitter:</label>
                                            <input type="text" class="form-control" id="twitter" name="twitter">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="instagram">Instagram:</label>
                                            <input type="text" class="form-control" id="instagram" name="instagram">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                                <h6 class="mt-4 mb-4 pb-3 border-bottom font-weight-bold">Your Cart</h6>
                                <h6 class="mt-4 mb-4 pb-3 ">No room in cart</h6>
                                <div class="container">
                        <button onclick="window.location.href='index2.php'" class="btn btn-primary">BACK TO HOME PAGE</button>
                        <button onclick="window.location.href='cancel.php'" class="btn btn-secondary">STATUS OF BOOKING</button>
                        <?php
                        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['status'])) {
                            echo "<p class='message'>Status button clicked!</p>";
                        }
                        ?>
                    </div>
                            </div>
                        </div>
                        <div class="game-container">
                            <div
                            class="game-name">Tic Tac Toe</div>
                            <div id="game-board" class="game-board">
                                <div data-cell class="game-cell"></div>
                                <div data-cell class="game-cell"></div>
                                <div data-cell class="game-cell"></div>
                                <div data-cell class="game-cell"></div>
                                <div data-cell class="game-cell"></div>
                                <div data-cell class="game-cell"></div>
                                <div data-cell class="game-cell"></div>
                                <div data-cell class="game-cell"></div>
                                <div data-cell class="game-cell"></div>
                            </div>
                            <div id="game-status" class="game-status mt-3"></div>
                            <button id="restart-button" class="btn btn-secondary mt-3">Restart</button>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // JavaScript code for the game
        const X_CLASS = 'x';
        const CIRCLE_CLASS = 'circle';
        const WINNING_COMBINATIONS = [
            [0, 1, 2],
            [3, 4, 5],
            [6, 7, 8],
            [0, 3, 6],
            [1, 4, 7],
            [2, 5, 8],
            [0, 4, 8],
            [2, 4, 6]
        ];

        const cellElements = document.querySelectorAll('[data-cell]');
        const board = document.getElementById('game-board');
        const statusText = document.getElementById('game-status');
        const restartButton = document.getElementById('restart-button');
        let circleTurn;

        startGame();

        restartButton.addEventListener('click', startGame);

        function startGame() {
            circleTurn = false;
            cellElements.forEach(cell => {
                cell.classList.remove(X_CLASS);
                cell.classList.remove(CIRCLE_CLASS);
                cell.innerText = ''; // Clear the text inside the cells
                cell.removeEventListener('click', handleClick);
                cell.addEventListener('click', handleClick, { once: true });
            });
            setBoardHoverClass();
            statusText.innerText = `Player X's turn`;
        }

        function handleClick(e) {
            const cell = e.target;
            const currentClass = circleTurn ? CIRCLE_CLASS : X_CLASS;
            placeMark(cell, currentClass);
            if (checkWin(currentClass)) {
                endGame(false);
            } else if (isDraw()) {
                endGame(true);
            } else {
                swapTurns();
                setBoardHoverClass();
            }
        }

        function endGame(draw) {
            if (draw) {
                statusText.innerText = "Draw!";
            } else {
                statusText.innerText = `Player ${circleTurn ? "O" : "X"} wins!`;
            }
        }

        function isDraw() {
            return [...cellElements].every(cell => {
                return cell.classList.contains(X_CLASS) || cell.classList.contains(CIRCLE_CLASS);
            });
        }

        function placeMark(cell, currentClass) {
            cell.classList.add(currentClass);
            cell.innerText = currentClass === X_CLASS ? 'X' : 'O'; // Display X or O
        }

        function swapTurns() {
            circleTurn = !circleTurn;
            statusText.innerText = `Player ${circleTurn ? "O" : "X"}'s turn`;
        }

        function setBoardHoverClass() {
            board.classList.remove(X_CLASS);
            board.classList.remove(CIRCLE_CLASS);
            if (circleTurn) {
                board.classList.add(CIRCLE_CLASS);
            } else {
                board.classList.add(X_CLASS);
            }
        }

        function checkWin(currentClass) {
            return WINNING_COMBINATIONS.some(combination => {
                return combination.every(index => {
                    return cellElements[index].classList.contains(currentClass);
                });
            });
        }
    </script>
</body>
</html>

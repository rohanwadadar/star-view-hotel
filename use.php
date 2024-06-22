<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['status'])) {
echo "<p class='message'>Status button clicked!</p>";
}
?>
</div>
                                
                                </div>
                                <ul class="social-link list-unstyled mt-4 mb-0">
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                  
                    <div class="game-container">
                    <div class="game-name">Tic Tac Toe</div>
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
    </div>  </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
       // JavaScript code for the game with automatic computer response
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
let playerTurn;
startGame();
restartButton.addEventListener('click', startGame);
function startGame() {
    playerTurn = true;
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
    if (!cell.classList.contains(X_CLASS) && !cell.classList.contains(CIRCLE_CLASS)) {
        const currentClass = X_CLASS;
        placeMark(cell, currentClass);
        if (checkWin(currentClass)) {
            endGame(false);
        } else if (isDraw()) {
            endGame(true);
        } else {
            playerTurn = false;
            statusText.innerText = "Computer's turn";
            // Computer's turn after 1 second
            setTimeout(computerTurn, 1000);
        }
    }
}
function computerTurn() {
    const currentClass = CIRCLE_CLASS;
    const bestMove = findBestMove(currentClass);
    placeMark(cellElements[bestMove], currentClass);
    if (checkWin(currentClass)) {
        endGame(false);
    } else if (isDraw()) {
        endGame(true);
    } else {
        playerTurn = true;
        setBoardHoverClass();
        statusText.innerText = `Player X's turn`;
    }
}
function findBestMove(currentClass) {
    let bestScore = -Infinity;
    let bestMove;
    for (let i = 0; i < cellElements.length; i++) {
        if (!cellElements[i].classList.contains(X_CLASS) && !cellElements[i].classList.contains(CIRCLE_CLASS)) {
            cellElements[i].classList.add(currentClass);
            let score = minimax(cellElements, 0, false);
            cellElements[i].classList.remove(currentClass);
            if (score > bestScore) {
                bestScore = score;
                bestMove = i;
            }
        }
    }
    return bestMove;
}
function minimax(cells, depth, isMaximizing) {
    if (checkWin(CIRCLE_CLASS)) {
        return 10 - depth;
    } else if (checkWin(X_CLASS)) {
        return depth - 10;
    } else if (isDraw()) {
        return 0;
    }
    if (isMaximizing) {
        let bestScore = -Infinity;
        for (let i = 0; i < cells.length; i++) {
            if (!cells[i].classList.contains(X_CLASS) && !cells[i].classList.contains(CIRCLE_CLASS)) {
                cells[i].classList.add(CIRCLE_CLASS);
                let score = minimax(cells, depth + 1, false);
                cells[i].classList.remove(CIRCLE_CLASS);
                bestScore = Math.max(score, bestScore);
            }
        }
        return bestScore;
    } else {
        let bestScore = Infinity;
        for (let i = 0; i < cells.length; i++) {
            if (!cells[i].classList.contains(X_CLASS) && !cells[i].classList.contains(CIRCLE_CLASS)) {
                cells[i].classList.add(X_CLASS);
                let score = minimax(cells, depth + 1, true);
                cells[i].classList.remove(X_CLASS);
                bestScore = Math.min(score, bestScore);
            }
        }
        return bestScore;
    }
}
function endGame(draw) {
    if (draw) {
        statusText.innerText = "Draw!";
    } else {
        statusText.innerText = `${playerTurn ? "Player X" : "Computer"} wins!`;
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
function setBoardHoverClass() {
    board.classList.remove(X_CLASS);
    board.classList.remove(CIRCLE_CLASS);
    if (playerTurn) {
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
    </script>
</body>
</html>
<style>
      .game-container {
        margin-top: 50px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
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
                
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Function to save data to local storage
        function saveUserData(event) {
            event.preventDefault();
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const dob = document.getElementById('dob').value;
            const facebook = document.getElementById('facebook').value;
            const twitter = document.getElementById('twitter').value;
            const instagram = document.getElementById('instagram').value;

            localStorage.setItem('name', name);
            localStorage.setItem('email', email);
            localStorage.setItem('phone', phone);
            localStorage.setItem('dob', dob);
            localStorage.setItem('facebook', facebook);
            localStorage.setItem('twitter', twitter);
            localStorage.setItem('instagram', instagram);

            displayUserData();
        }

        // Function to display data from local storage
        function displayUserData() {
            const name = localStorage.getItem('name') || 'John Doe';
            const email = localStorage.getItem('email') || 'johndoe@example.com';
            const phone = localStorage.getItem('phone') || 'N/A';
            const dob = localStorage.getItem('dob') || 'N/A';
            const facebook = localStorage.getItem('facebook') || 'N/A';
            const twitter = localStorage.getItem('twitter') || 'N/A';
            const instagram = localStorage.getItem('instagram') || 'N/A';

            document.getElementById('display-name').textContent = name;
            document.getElementById('display-email').textContent = email;
            document.getElementById('display-phone').textContent = phone;
            document.getElementById('display-dob').textContent = dob;
            document.getElementById('display-facebook').textContent = facebook;
            document.getElementById('display-twitter').textContent = twitter;
            document.getElementById('display-instagram').textContent = instagram;
        }

        // Event listener for form submission
        document.getElementById('user-form').addEventListener('submit', saveUserData);

        // Display user data on page load
        window.onload = displayUserData;
    </script>
</body>
</html>

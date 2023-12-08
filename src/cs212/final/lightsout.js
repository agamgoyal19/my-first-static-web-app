// Variables
const GRID_SIZE = 6;
const grid = document.getElementById('grid');
const startBtn = document.getElementById('startBtn');
const movesCounter = document.getElementById('movesValue');
let board = [];
let movesCount = 0;

// Initialize board
function initializeBoard() {
  movesCount = 0;
  movesCounter.textContent = movesCount;

  // Clear the board by removing all children
  while (grid.firstChild) {
    grid.removeChild(grid.firstChild);
  }

  for (let i = 0; i < GRID_SIZE; i++) {
    const row = [];
    for (let j = 0; j < GRID_SIZE; j++) {
      const square = document.createElement('div');
      square.classList.add('square');
      square.addEventListener('click', () => toggleSquare(i, j));
      grid.appendChild(square);
      row.push(false); // false represents white, true represents black
    }
    board.push(row);
  }
}

// Randomize board
function randomizeBoard() {
  for (let i = 0; i < GRID_SIZE * GRID_SIZE; i++) {
    const x = Math.floor(i / GRID_SIZE);
    const y = i % GRID_SIZE;
    const rand = Math.random() > 0.5;
    if (rand) {
      toggleCell(x, y);
    }
  }
}

let gameStarted = false;
// Toggle square and its neighbors
function toggleSquare(x, y) {
  if (gameStarted) {
    movesCounter.textContent = movesCount; // Update moves display

    toggleCell(x, y);
    toggleCell(x - 1, y);
    toggleCell(x + 1, y);
    toggleCell(x, y - 1);
    toggleCell(x, y + 1);

    movesCount++;
    movesCounter.textContent = movesCount;

    checkWin();
  }
}

// Toggle individual cell
function toggleCell(x, y) {
  if (x >= 0 && x < GRID_SIZE && y >= 0 && y < GRID_SIZE) {
    const square = grid.children[x * GRID_SIZE + y];
    square.classList.toggle('is-off');
    board[x][y] = !board[x][y];
  }
}

// Check for win condition
function checkWin() {
  const isSolved = board.every(row => row.every(cell => !cell));
  if (isSolved) {
    window.alert(`You won in ${movesCount} moves!`);
  }
}

// Start button event
startBtn.addEventListener('click', () => {
  board = [];
  while (grid.firstChild) {
    grid.removeChild(grid.firstChild);
  }
  initializeBoard();
  randomizeBoard();
  gameStarted = true; // Set gameStarted to true when the game starts
  movesCount = 0; // Reset moves count to 0 when starting a new game
  movesCounter.textContent = movesCount; // Update moves display
});

// Initialize the game
initializeBoard();

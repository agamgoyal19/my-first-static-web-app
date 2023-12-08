const GRID_SIZE = 5;
const grid = document.getElementById('grid');
let board = [];

// Initialize board
function initializeBoard() {
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

  randomizeBoard();
}

// Randomize board
function randomizeBoard() {
  for (let i = 0; i < 15; i++) {
    const x = Math.floor(Math.random() * GRID_SIZE);
    const y = Math.floor(Math.random() * GRID_SIZE);
    toggleCell(x, y);
  }
}

// Toggle square and its neighbors
function toggleSquare(x, y) {
  toggleCell(x, y);
  toggleCell(x - 1, y);
  toggleCell(x + 1, y);
  toggleCell(x, y - 1);
  toggleCell(x, y + 1);

  checkWin();
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
    window.alert('You win!');
  }
}

// Initialize the game
initializeBoard();

const GRID_SIZE = 6;
const grid = document.getElementById('grid');
const startBtn = document.getElementById('startBtn');
const movesCounter = document.getElementById('movesValue');
let board = [];
let movesCount = 0;
let gameStarted = false;

function initializeBoard() {
  movesCount = 0;
  movesCounter.textContent = movesCount;
  grid.innerHTML = '';

  for (let i = 0; i < GRID_SIZE; i++) {
    const row = [];
    for (let j = 0; j < GRID_SIZE; j++) {
      const square = document.createElement('div');
      square.classList.add('square');
      square.addEventListener('click', () => toggleSquare(i, j));
      grid.appendChild(square);
      row.push(false);
    }
    board.push(row);
  }
}

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

function toggleSquare(x, y) {
  if (gameStarted) {
    movesCounter.textContent = ++movesCount;

    toggleCell(x, y);
    toggleCell(x - 1, y);
    toggleCell(x + 1, y);
    toggleCell(x, y - 1);
    toggleCell(x, y + 1);

    checkWin();
  }
}

function toggleCell(x, y) {
  if (x >= 0 && x < GRID_SIZE && y >= 0 && y < GRID_SIZE) {
    const square = grid.children[x * GRID_SIZE + y];
    square.classList.toggle('is-off');
    board[x][y] = !board[x][y];
  }
}

function checkWin() {
  const isSolved = board.every(row => row.every(cell => !cell));
  if (isSolved) {
    window.alert(`You won in ${movesCount} moves!`);
  }
}

startBtn.addEventListener('click', () => {
  board = [];
  initializeBoard();
  randomizeBoard();
  gameStarted = true;
  movesCount = 0;
  movesCounter.textContent = movesCount;
});

initializeBoard();

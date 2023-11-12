const cardImages = [
    'image1.jpg',
    'image2.jpg',
    'image3.jpg',
    'image4.jpg',
    'image1.jpg',
    'image2.jpg',
    'image3.jpg',
    'image4.jpg',
    // Add more images as needed
];

let shuffledCards = [];
let selectedCards = [];
let moves = 0;

// Function to start/restart the game
function startGame() {
    moves = 0;
    selectedCards = [];
    shuffledCards = shuffleArray(cardImages.concat(cardImages));

    createGameBoard();
}

// Function to shuffle an array
function shuffleArray(array) {
    return array.sort(() => Math.random() - 0.5);
}

// Function to create the game board
function createGameBoard() {
    const gameBoardElement = document.getElementById('game-board');
    gameBoardElement.innerHTML = '';

    shuffledCards.forEach((image, index) => {
        const cardElement = document.createElement('div');
        cardElement.classList.add('card');
        cardElement.dataset.index = index;
        cardElement.style.backgroundImage = `url('images/${image}')`;
        cardElement.addEventListener('click', () => flipCard(cardElement));

        gameBoardElement.appendChild(cardElement);
    });
}

// Function to handle card flips
function flipCard(cardElement) {
    if (selectedCards.length < 2 && !selectedCards.includes(cardElement)) {
        cardElement.classList.add('flipped');
        selectedCards.push(cardElement);

        if (selectedCards.length === 2) {
            setTimeout(checkMatch, 1000);
        }
    }
}

// Function to check if the selected cards match
function checkMatch() {
    const [firstCard, secondCard] = selectedCards;

    if (firstCard.style.backgroundImage === secondCard.style.backgroundImage) {
        selectedCards = [];
    } else {
        selectedCards.forEach(card => card.classList.remove('flipped'));
        selectedCards = [];
    }

    moves++;

    if (isGameComplete()) {
        endGame();
    }
}

// Function to check if the game is complete
function isGameComplete() {
    return document.querySelectorAll('.flipped').length === shuffledCards.length;
}

// Function to end the game
function endGame() {
    alert(`Congratulations! You completed the game in ${moves} moves.`);
}

// Initialize the game
startGame();

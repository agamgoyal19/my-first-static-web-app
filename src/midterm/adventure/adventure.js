document.addEventListener('DOMContentLoaded', () => {
    let gameState = {};

    function startGame() {
        gameState = {
            stage: 1,
            story: 'Here you find yourself at the entrance of a dark cave.Now what you choose to do?',
            choices: [
                { text: 'Enter the cave', consequence: 2, image: 'cave.jpg' },
                { text: 'Turn back', consequence: 3, image: 'forest.jpg' }
            ]
        };
        updatePage();
    }

    function updatePage() {
        const storyText = document.getElementById('story-text');
        const choicesContainer = document.getElementById('choices');
        const endingImage = document.getElementById('ending-image');
        const restartButton = document.getElementById('restart-button');

        storyText.textContent = gameState.story;

        // Remove existing choice buttons
        choicesContainer.innerHTML = '';

        // Display choices
        gameState.choices.forEach(choice => {
            const button = document.createElement('button');
            button.textContent = choice.text;
            button.addEventListener('click', () => makeChoice(choice));
            choicesContainer.appendChild(button);
        });

        // Display ending image if game is over
        if (gameState.stage === 'end') {
            endingImage.src = gameState.image;
            endingImage.style.display = 'block';
            restartButton.style.display = 'block';
        } else {
            endingImage.style.display = 'none';
            restartButton.style.display = 'none';
        }
    }

    function makeChoice(choice) {
        gameState = gameData[choice.consequence];
        updatePage();

        // Check if it's an ending
        if (gameState.stage === 'end') {
            // Display relevant image for the ending
            document.getElementById('ending-image').src = gameState.image;
        }
    }

    function restartGame() {
        startGame();
        document.getElementById('ending-image').src = ''; // Clear the ending image
    }

    // Start the game
    startGame();
});

const gameData = {
    2: {
        stage: 2,
        story: 'Now as you enter the cave, you encounter two paths. Which way you choose go?',
        choices: [
            { text: 'Left turn', consequence: 4, image: 'left.jpg' },
            { text: 'Right turn', consequence: 5, image: 'right.jpg' }
        ]
    },
    3: {
        stage: 'end',
        story: 'As you chose to turn back and explore the forest. You discover a hidden treasure!',
        image: 'https://user-images.githubusercontent.com/86164231/282337528-14cd6edd-fc69-4dd0-aed7-5fd1fdfb8dde.jpg'
    },
    4: {
        stage: 4,
        story: 'You take a left turn and now here is a mysterious door. What you will choose to do?',
        choices: [
            { text: 'Go towards door and open it', consequence: 6, image: 'door.jpg' },
            { text: 'Go straight', consequence: 7, image: 'straight.jpg' }
        ]
    },
    5: {
        stage: 5,
        story: 'You take a right turn and here you encounter a deep chasm. What\'s your next move?',
        choices: [
            { text: 'Jump across', consequence: 8, image: 'jump.jpg' },
            { text: 'Find another path', consequence: 9, image: 'another.jpg' }
        ]
    },
    6: {
        stage: 'end',
        story: 'You opened the door and now here is a hidden treasure chest!',
        image: 'https://user-images.githubusercontent.com/86164231/282337526-905f9420-f203-4074-aa86-9a4da951338b.jpg'
    },
    7: {
        stage: 'end',
        story: 'You continued straight and now here is an ancient artifact!',
        image: 'https://user-images.githubusercontent.com/86164231/282337529-5df861b5-8f96-474e-8a56-aedaef9cc76b.jpg'
    },
    8: {
        stage: 'end',
        story: 'You successfully jumped across the chasm and here is a magical portal!',
        image: 'https://user-images.githubusercontent.com/86164231/282337531-3f1181ac-fb66-4cb6-a715-62634f0f2bcf.jpg'
    },
    9: {
        stage: 'end',
        story: 'You wisely found another path and stumbled upon a secret garden!',
        image: 'https://user-images.githubusercontent.com/86164231/282337532-2bce1524-1d4e-4323-a7d4-455613b4e753.jpg'
    },
    10: {
        stage: 'end',
        story: 'You encountered a mysterious portal and it transported you to a different dimension!',
        image: 'https://user-images.githubusercontent.com/86164231/282337533-7397c7b5-2e8c-4d6a-b090-f79f3eb94e1a.jpg'
    },
    11: {
        stage: 'end',
        story: 'You found a hidden cave within the cave leading to an underground city!',
        image: 'https://user-images.githubusercontent.com/86164231/282337535-bdd5c9b5-9bfe-46d9-8e23-33ff4ed24c59.jpg'
    },
    12: {
        stage: 'end',
        story: 'You discovered a time machine hidden in the cave!',
        image: 'https://user-images.githubusercontent.com/86164231/282337536-ee468260-1a1a-4d23-9c46-69ab60f6da47.jpg'
    },
};

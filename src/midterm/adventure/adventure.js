document.addEventListener('DOMContentLoaded', () => {
    let gameState = {};

    function startGame() {
        gameState = {
            stage: 1,
            story: 'You find yourself at the entrance of a dark cave. What do you do?',
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
        story: 'As you enter the cave, you encounter a fork in the path. Which way do you go?',
        choices: [
            { text: 'Go left', consequence: 4, image: 'left.jpg' },
            { text: 'Go right', consequence: 5, image: 'right.jpg' }
        ]
    },
    3: {
        stage: 'end',
        story: 'You decide to turn back and explore the forest. You discover a hidden treasure!',
        image: 'https://github.com/agamgoyal19/my-first-static-web-app/assets/86164231/abd820cc-78d8-43bb-b575-09793991fbb5'
    },
    4: {
        stage: 4,
        story: 'You go left and find a mysterious door. What do you do?',
        choices: [
            { text: 'Open the door', consequence: 6, image: 'door.jpg' },
            { text: 'Continue straight', consequence: 7, image: 'straight.jpg' }
        ]
    },
    5: {
        stage: 5,
        story: 'You go right and encounter a deep chasm. What\'s your next move?',
        choices: [
            { text: 'Jump across', consequence: 8, image: 'jump.jpg' },
            { text: 'Find another path', consequence: 9, image: 'another.jpg' }
        ]
    },
    6: {
        stage: 'end',
        story: 'You open the door and discover a hidden treasure chest!',
        image: 'https://github.com/agamgoyal19/my-first-static-web-app/assets/86164231/567ca250-402c-4873-aa80-e5cfb19cd596'
    },
    7: {
        stage: 'end',
        story: 'You continue straight and find an ancient artifact!',
        image: 'https://github.com/agamgoyal19/my-first-static-web-app/assets/86164231/2b8ed078-3b10-4c08-ab83-69b2fdd4bd03'
    },
    8: {
        stage: 'end',
        story: 'You successfully jump across the chasm and find a magical portal!',
        image: 'https://github.com/agamgoyal19/my-first-static-web-app/assets/86164231/fb9771c0-2ca7-4d5d-b162-6acc4579a987'
    },
    9: {
        stage: 'end',
        story: 'You wisely find another path and stumble upon a secret garden!',
        image: 'https://github.com/agamgoyal19/my-first-static-web-app/assets/86164231/7cb73620-181f-4b25-9c61-90fd36c7ad08'
    }
};

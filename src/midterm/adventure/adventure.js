document.addEventListener('DOMContentLoaded', () => {
    let gameState = {};

    function startGame() {
        gameState = {
            stage: 1,
            story: 'You wake up in a mysterious land. There are multiple paths ahead. Choose your direction.',
            choices: [
                { text: 'Follow the river', consequence: 2, image: 'river.jpg' },
                { text: 'Enter the dark forest', consequence: 3, image: 'forest.jpg' }
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

        // Display ending image if the game is over
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
            // Display the relevant image for the ending
            document.getElementById('ending-image').src = gameState.image;
        }
    }

    // Start the game initially
    startGame();
});

const gameData = {
    2: {
        stage: 2,
        story: 'You follow the river and discover a hidden cave. Do you enter the cave?',
        choices: [
            { text: 'Enter the cave', consequence: 4, image: 'cave.jpg' },
            { text: 'Continue along the river', consequence: 5, image: 'river_path.jpg' }
        ]
    },
    3: {
        stage: 3,
        story: 'You enter the dark forest and encounter a mystical creature. It offers you a magical key. Do you take it?',
        choices: [
            { text: 'Take the key', consequence: 6, image: 'mystical_key.jpg' },
            { text: 'Decline and keep walking', consequence: 7, image: 'dark_forest.jpg' }
        ]
    },
    4: {
        stage: 'end',
        story: 'You enter the cave and find a treasure chest filled with gold and gems!',
        image: 'treasure.jpg'
    },
    5: {
        stage: 'end',
        story: 'You continue along the river and discover a peaceful village.',
        image: 'village.jpg'
    },
    6: {
        stage: 'end',
        story: 'You take the mystical key and unlock a portal to another realm!',
        image: 'portal.jpg'
    },
    7: {
        stage: 'end',
        story: 'You decline the creature\'s offer and find yourself back at the beginning.',
        image: 'beginning.jpg'
    },
    8: {
        stage: 8,
        story: 'As you wander through the land, you come across a mysterious old book. Do you read it?',
        choices: [
            { text: 'Read the book', consequence: 9, image: 'old_book.jpg' },
            { text: 'Ignore the book and continue exploring', consequence: 10, image: 'explore.jpg' }
        ]
    },
    9: {
        stage: 'end',
        story: 'You read the ancient book and gain knowledge that transforms you into a wise sage!',
        image: 'wise_sage.jpg'
    },
    10: {
        stage: 'end',
        story: 'You ignore the book and stumble upon a hidden portal leading to a futuristic city!',
        image: 'futuristic_city.jpg'
    },
    
};

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
            { text: 'Take the key', consequence: 12, image: 'mystical_key.jpg' },
            { text: 'Decline and keep walking', consequence: 13, image: 'dark_forest.jpg' }
        ]
    },
    4: {
        stage: 4,
        story: 'You entered the cave and here are two doors',
        choices: [
            { text: 'Enter the left door', consequence: 8, image: 'left_door.jpg' },
            { text: 'Enter the right door', consequence: 9, image: 'right_door.jpg' }
        ]
    },
    5: {
        stage: 5,
        story: 'You followed the river and found yourself at intersection of two paths',
        choices: [
            { text: 'Enter the left path', consequence: 10, image: 'left_path.jpg' },
            { text: 'Enter the right path', consequence: 11, image: 'right_path.jpg' }
        ]
    },
     8: {
        stage: 'end',
        story: 'You continue along the left door and discover a peaceful village.',
        image: 'village.jpg'
    9: {
        stage: 'end',
        story: 'You took the right door and unlock a portal to another realm!',
        image: 'portal.jpg'
    },
    10: {
        stage: 'end',
        story: 'You continue along the left path and discover a lovely island.',
        image: 'island.jpg'
    },
    11: {
        stage: 'end',
        story: 'You took the right path and unlock a portal to another world!',
        image: 'world.jpg'
    },
    12: {
        stage: 12,
        story: 'You took the magical key from the mystical creature and you found two chests',
        choices: [
            { text: 'Open chest 1', consequence: 14, image: 'left_path.jpg' },
            { text: 'Open chest 2', consequence: 15, image: 'right_path.jpg' }
        ]
    },
    13: {
        stage: 13,
        story: 'As you wander through the land, you come across a mysterious old book. Do you read it?',
        choices: [
            { text: 'Read the book', consequence: 16, image: 'old_book.jpg' },
            { text: 'Ignore the book and continue exploring', consequence: 17, image: 'explore.jpg' }
        ]
    },
    14: {
        stage: 'end',
        story: 'You opened chest 1 and found a glorious painting',
        image: 'painting.jpg'
    },
    15: {
        stage: 'end',
        story: 'You opened chest 2 and found a glorious sculpture',
        image: 'sculpture.jpg'
    },
    16: {
        stage: 'end',
        story: 'You read the ancient book and gain knowledge that transforms you into a wise sage!',
        image: 'wise_sage.jpg'
    },
    17: {
        stage: 'end',
        story: 'You ignore the book and stumble upon a hidden portal leading to a futuristic city!',
        image: 'futuristic_city.jpg'
    },
    
};

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

document.addEventListener('DOMContentLoaded', () => {
    let gameState = {
        stage: 1,
        story: 'Once upon a time...',
        choices: [
            { text: 'Go left', consequence: 2, image: 'left.jpg' },
            { text: 'Go right', consequence: 3, image: 'right.jpg' }
        ]
    };

    function startGame() {
        gameState = {
            stage: 1,
            story: 'Once upon a time...',
            choices: [
                { text: 'Go left', consequence: 2, image: 'left.jpg' },
                { text: 'Go right', consequence: 3, image: 'right.jpg' }
            ]
        };
        updatePage();
    }

    function updatePage() {
        const storyText = document.getElementById('story-text');
        const choicesContainer = document.getElementById('choices');
        const endingImage = document.getElementById('ending-image');

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
        } else {
            endingImage.style.display = 'none';
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

    // Start the game
    startGame();
});

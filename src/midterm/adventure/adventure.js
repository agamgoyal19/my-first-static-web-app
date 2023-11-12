// Quiz data
const questions = [
    {
        question: "What is the capital of France?",
        options: ["Berlin", "Madrid", "Paris", "Rome"],
        correctAnswer: "Paris"
    },
    {
        question: "Which planet is known as the Red Planet?",
        options: ["Mars", "Venus", "Jupiter", "Saturn"],
        correctAnswer: "Mars"
    },
    {
        question: "Who wrote 'Romeo and Juliet'?",
        options: ["Charles Dickens", "Jane Austen", "William Shakespeare", "Mark Twain"],
        correctAnswer: "William Shakespeare"
    }
];

// Game variables
let currentQuestion = 0;
let score = 0;

// Function to start/restart the quiz
function startQuiz() {
    currentQuestion = 0;
    score = 0;
    displayQuestion();
}

// Function to display the current question and options
function displayQuestion() {
    const questionElement = document.getElementById("question");
    const optionsElement = document.getElementById("options");
    const scoreElement = document.getElementById("score");

    // Display question
    questionElement.textContent = questions[currentQuestion].question;

    // Display options
    optionsElement.innerHTML = "";
    questions[currentQuestion].options.forEach(option => {
        const button = document.createElement("button");
        button.textContent = option;
        button.addEventListener("click", () => selectAnswer(option));
        optionsElement.appendChild(button);
    });

    // Display score
    scoreElement.textContent = `Score: ${score}`;
}

// Function to check the selected answer
function selectAnswer(selectedOption) {
    const correctAnswer = questions[currentQuestion].correctAnswer;

    if (selectedOption === correctAnswer) {
        score++;
    }

    // Move to the next question or end the quiz
    currentQuestion++;
    if (currentQuestion < questions.length) {
        displayQuestion();
    } else {
        endQuiz();
    }
}

// Function to end the quiz
function endQuiz() {
    const quizElement = document.getElementById("quiz");
    quizElement.innerHTML = `<p>Quiz completed! Your final score is ${score} out of ${questions.length}.</p>`;
}

// Initialize the quiz
startQuiz();

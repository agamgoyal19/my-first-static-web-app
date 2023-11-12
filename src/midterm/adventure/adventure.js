document.addEventListener('DOMContentLoaded', () => {
    const canvas = document.getElementById('gameCanvas');
    const ctx = canvas.getContext('2d');

    const paddleWidth = 10;
    const paddleHeight = 60;
    const ballSize = 10;

    let paddle1Y = (canvas.height - paddleHeight) / 2;
    let paddle2Y = (canvas.height - paddleHeight) / 2;
    let paddle1Speed = 0;
    let paddle2Speed = 0;

    let ballX = canvas.width / 2;
    let ballY = canvas.height / 2;
    let ballSpeedX = 5;
    let ballSpeedY = 5;

    let score1 = 0;
    let score2 = 0;

    let gameActive = false;

    function draw() {
        // Clear the canvas
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        // Draw paddles
        ctx.fillStyle = '#fff';
        ctx.fillRect(0, paddle1Y, paddleWidth, paddleHeight);
        ctx.fillRect(canvas.width - paddleWidth, paddle2Y, paddleWidth, paddleHeight);

        // Draw ball
        ctx.beginPath();
        ctx.arc(ballX, ballY, ballSize, 0, Math.PI * 2);
        ctx.fillStyle = '#fff';
        ctx.fill();
        ctx.closePath();

        // Move paddles
        paddle1Y += paddle1Speed;
        paddle2Y += paddle2Speed;

        // Ensure paddles stay within the canvas
        paddle1Y = Math.max(0, Math.min(canvas.height - paddleHeight, paddle1Y));
        paddle2Y = Math.max(0, Math.min(canvas.height - paddleHeight, paddle2Y));

        // Move the ball
        ballX += ballSpeedX;
        ballY += ballSpeedY;

        // Bounce off the top and bottom of the canvas
        if (ballY - ballSize < 0 || ballY + ballSize > canvas.height) {
            ballSpeedY = -ballSpeedY;
        }

        // Bounce off paddles
        if (
            (ballX - ballSize < paddleWidth && ballY > paddle1Y && ballY < paddle1Y + paddleHeight) ||
            (ballX + ballSize > canvas.width - paddleWidth && ballY > paddle2Y && ballY < paddle2Y + paddleHeight)
        ) {
            ballSpeedX = -ballSpeedX;
        }

        // Check for scoring
        if (ballX - ballSize < 0) {
            score2++;
            resetGame();
        } else if (ballX + ballSize > canvas.width) {
            score1++;
            resetGame();
        }

        // Draw the score
        document.getElementById('score').innerText = `Score: ${score1} - ${score2}`;

        // Repeat the draw function
        if (gameActive) {
            requestAnimationFrame(draw);
        }
    }

    function resetGame() {
        ballX = canvas.width / 2;
        ballY = canvas.height / 2;
        ballSpeedX = -ballSpeedX;
        ballSpeedY = 5;
    }

    function keyDownHandler(e) {
        if (e.key === 'ArrowUp') {
            paddle2Speed = -5;
        } else if (e.key === 'ArrowDown') {
            paddle2Speed = 5;
        } else if (e.key === 'w') {
            paddle1Speed = -5;
        } else if (e.key === 's') {
            paddle1Speed = 5;
        }
    }

    function keyUpHandler(e) {
        if (e.key === 'ArrowUp' || e.key === 'ArrowDown') {
            paddle2Speed = 0;
        } else if (e.key === 'w' || e.key === 's') {
            paddle1Speed = 0;
        }
    }

    function startGame() {
        gameActive = true;
        draw();
    }

    document.addEventListener('keydown', keyDownHandler);
    document.addEventListener('keyup', keyUpHandler);

    // Start the game loop
    startGame();
});

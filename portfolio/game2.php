<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brick Breaker Game</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        canvas {
            border: 1px solid #000;
        }
    </style>
</head>

<body>

    <canvas id="gameCanvas" width="400" height="300"></canvas>

    <script>
        const canvas = document.getElementById('gameCanvas');
        const ctx = canvas.getContext('2d');

        const paddleWidth = 80;
        const paddleHeight = 10;
        let paddleX = (canvas.width - paddleWidth) / 2;

        const ballRadius = 10;
        let x = canvas.width / 2;
        let y = canvas.height - 30;
        let dx = 2;
        let dy = -2;

        function drawPaddle() {
            ctx.beginPath();
            ctx.rect(paddleX, canvas.height - paddleHeight, paddleWidth, paddleHeight);
            ctx.fillStyle = '#0095DD';
            ctx.fill();
            ctx.closePath();
        }

        function drawBall() {
            ctx.beginPath();
            ctx.arc(x, y, ballRadius, 0, Math.PI * 2);
            ctx.fillStyle = '#0095DD';
            ctx.fill();
            ctx.closePath();
        }

        function draw() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            drawBall();
            drawPaddle();

            // Ball movement
            x += dx;
            y += dy;

            // Bounce off walls
            if (x + dx > canvas.width - ballRadius || x + dx < ballRadius) {
                dx = -dx;
            }

            if (y + dy < ballRadius) {
                dy = -dy;
            } else if (y + dy > canvas.height - ballRadius) {
                // Check if the ball hits the paddle
                if (x > paddleX && x < paddleX + paddleWidth) {
                    dy = -dy;
                } else {
                    // Game over
                    alert('Game Over');
                    document.location.reload();
                }
            }

            // Move paddle with touch events
            canvas.addEventListener('touchmove', (e) => {
                const touchX = e.touches[0].clientX - canvas.offsetLeft;
                if (touchX > 0 && touchX < canvas.width) {
                    paddleX = touchX - paddleWidth / 2;
                }
            });

            requestAnimationFrame(draw);
        }

        draw();
    </script>

</body>

</html>
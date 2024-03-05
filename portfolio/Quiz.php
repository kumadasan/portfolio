<?php
// session_cache_limiter('none');
// session_start();

// if (!empty($_POST) && empty($_SESSION['input_data'])) {
// if (empty($_POST['q1'])) {
// $error_message['q1'] = '未選択の問題があります。';
// } elseif (!preg_match("/[a-g]/", $_POST['q1'])) {
// $error_message['q1'] = '警告：不正な値が入力されました';
// }
// if (empty($error_message)) {
// $_SESSION['input_data'] = $_POST;
// header('Location:answer.php');
// exit();
// }
// }
// session_destroy();

function menu()
{
    session_cache_limiter('none');
    session_start();
    // $_SESSION["result"] = $_POST["q1"];
?>
    <!DOCTYPE html>
    <html lang="ja">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no">
        <title>黒本道場</title>
        <script src="dojou.js"></script>
        <link rel="stylesheet" href="dojou.css">
        <style>
            body {
                font-family: Arial, sans-serif;
                font-size: 18px;
                color: #333;
                margin: 2px;
            }

            @media only screen and (max-width: 600px) {
                body {
                    font-size: 13px;
                }
            }

            img {
                max-width: 100%;
                /* 親要素に合わせて画像を縮小 */
                height: auto;
                /* アスペクト比を維持 */
                display: block;
                /* 余白を取るために必要 */
                margin: 10px 0;
                /* 画像の周りに余白を設定 */
            }
        </style>
    </head>

    <body>
        <header>
            <h1><a class="myFont" href="dojou_info.php">黒本道場</a></h1>
        </header>
    </body>
<?php } ?>



<?php function Quiz()
{ ?>
    <?php
    $jsFile = 'Quiz.json';
    $jsContent = file_get_contents($jsFile);
    $dateArray = json_decode($jsContent, true);
    ?>


    <body>
        <header>
            <nav>
                <ul>
                    <li><?php echo $dateArray['chapter' . 1]['title']; ?></li>
                </ul>
            </nav>
        </header>

        <main>
            <h2>PHP７問題集　第<?php echo "1" ?>章</h2>
            <form action="answer.php" method="post">
                <?php for ($i = 1; $i <= $dateArray['chapter' . "1"]['quizCount']; $i++) { ?>
                    <div name="Quiz">
                        <h4><?php echo "$i" . '.' . $dateArray['chapter' . "1"]['question' . "$i"]; ?></h4>
                        <?php foreach ($dateArray['chapter' . "1"]['option' . "$i"] as $optionKey => $optionValue) {
                            echo '<label><input type="checkbox" name="q' . $i . '" value=' . $optionKey . '>' . $optionKey . ':' . $optionValue . '</label><br>';
                        } ?>
                    </div>
                <?php } ?>
                <input type="hidden" name="Quiz" value="1">
                <button type="submit">解答する</button>
            </form>
        </main>

    </body>

    </html>
<?php
} ?>

<?php function Quiz2()
{ ?>
    <?php
    $jsFile = 'Quiz.json';
    $jsContent = file_get_contents($jsFile);
    $dateArray = json_decode($jsContent, true);
    ?>

    <body>
        <header>
            <nav>
                <ul>
                    <li><?php echo $dateArray['chapter' . 2]['title']; ?></li>
                </ul>
            </nav>
        </header>

        <main>
            <h1>PHP７問題集　第<?php echo "2" ?>章</h1>
            <form action="answer.php" method="post" name="form">
                <?php for ($i = 1; $i <= $dateArray['chapter' . "2"]['quizCount']; $i++) { ?>
                    <div name="Quiz">
                        <h3><?php echo "$i" . '.' . $dateArray['chapter' . "2"]['question' . "$i"]; ?></h3>
                        <?php if ($i == 3) { ?>
                            <img src="image/q2-3.png" alt="q2-3"><br>
                        <?php } elseif ($i == 6) { ?>
                            <img src="image/q2-6.png" alt="q2-6"><br>
                        <?php } elseif ($i == 7) { ?>
                            <img src="image/q2-7.png" alt="q2-7"><br>
                        <?php } elseif ($i == 11) { ?>
                            <img src="image/q2-11.png" alt="q2-11"><br>
                        <?php } ?>
                        <?php foreach ($dateArray['chapter' . "2"]['option' . "$i"] as $optionKey => $optionValue) {
                            echo '<label><input type="checkbox" name="q' . $i . '" value=' . $optionKey . '>' . $optionKey . ':' . $optionValue . '</label><br>';
                        } ?>
                    </div>
                <?php } ?>
                <input type="hidden" name="Quiz" value="2">
                <button type="submit">解答する</button>
            </form>
        </main>

    </body>

    </html>
<?php
} ?>

<?php function Quiz3()
{ ?>
    <?php
    $jsFile = 'Quiz.json';
    $jsContent = file_get_contents($jsFile);
    $dateArray = json_decode($jsContent, true);
    ?>

    <body>
        <header>
            <nav>
                <ul>
                    <li><?php echo $dateArray['chapter' . 3]['title']; ?></li>
                </ul>
            </nav>
        </header>

        <main>
            <h1>PHP７問題集　第<?php echo "3" ?>章</h1>
            <form action="answer.php" method="post" name="form">
                <?php for ($i = 1; $i <= $dateArray['chapter' . "3"]['quizCount']; $i++) { ?>
                    <div name="Quiz">
                        <h3><?php echo "$i" . '.' . $dateArray['chapter' . "3"]['question' . "$i"]; ?></h3>
                        <?php if ($i == 2) { ?>
                            <img src="image/q3-2.png" alt="q3-2"><br>
                        <?php } elseif ($i == 3) { ?>
                            <img src="image/q3-3.png" alt="q3-3"><br>
                        <?php } elseif ($i == 4) { ?>
                            <img src="image/q3-4.png" alt="q3-4"><br>
                        <?php } elseif ($i == 5) { ?>
                            <img src="image/q3-5.png" alt="q3-5"><br>
                        <?php } elseif ($i == 6) { ?>
                            <img src="image/q3-6.png" alt="q3-6"><br>
                        <?php } elseif ($i == 7) { ?>
                            <img src="image/q3-7.png" alt="q3-7"><br>
                        <?php } elseif ($i == 8) { ?>
                            <img src="image/q3-8.png" alt="q3-8"><br>
                        <?php } elseif ($i == 9) { ?>
                            <img src="image/q3-9.png" alt="q3-9"><br>
                        <?php } elseif ($i == 10) { ?>
                            <img src="image/q3-10.png" alt="q3-10"><br>
                        <?php } ?>
                        <?php foreach ($dateArray['chapter' . "3"]['option' . "$i"] as $optionKey => $optionValue) {
                            echo '<label><input type="checkbox" name="q' . $i . '" value=' . $optionKey . '>' . $optionKey . ':' . $optionValue . '</label><br>';
                        } ?>
                    </div>
                <?php } ?>
                <input type="hidden" name="Quiz" value="3">
                <button type="submit">解答する</button>
            </form>
        </main>

    </body>

    </html>
<?php
} ?>


<?php function Quiz4()
{ ?>
    <?php
    $jsFile = 'Quiz.json';
    $jsContent = file_get_contents($jsFile);
    $dateArray = json_decode($jsContent, true);
    ?>

    <body>
        <header>
            <nav>
                <ul>
                    <li><?php echo $dateArray['chapter' . 4]['title']; ?></li>
                </ul>
            </nav>
        </header>

        <main>
            <h1>PHP７問題集　第<?php echo "4" ?>章</h1>
            <form action="answer.php" method="post" name="form">
                <?php for ($i = 1; $i <= $dateArray['chapter' . "4"]['quizCount']; $i++) { ?>
                    <div name="Quiz">
                        <h3><?php echo "$i" . '.' . $dateArray['chapter' . "4"]['question' . "$i"]; ?></h3>
                        <?php if ($i == 2) { ?>
                            <img src="image/q4-2.png" alt="q4-2"><br>
                        <?php } elseif ($i == 3) { ?>
                            <img src="image/q4-3.png" alt="q4-3"><br>
                        <?php } elseif ($i == 5) { ?>
                            <img src="image/q4-5.png" alt="q4-5"><br>
                        <?php } elseif ($i == 6) { ?>
                            <img src="image/q4-6.png" alt="q4-6"><br>
                        <?php } elseif ($i == 7) { ?>
                            <img src="image/q4-7.png" alt="q4-7"><br>
                        <?php } elseif ($i == 9) { ?>
                            <img src="image/q4-9.png" alt="q4-9"><br>
                        <?php } elseif ($i == 10) { ?>
                            <img src="image/q4-10.png" alt="q4-10"><br>
                        <?php } ?>
                        <?php foreach ($dateArray['chapter' . "4"]['option' . "$i"] as $optionKey => $optionValue) {
                            echo '<label><input type="checkbox" name="q' . $i . '" value=' . $optionKey . '>' . $optionKey . ':' . $optionValue . '</label><br>';
                        } ?>
                    </div>
                <?php } ?>
                <input type="hidden" name="Quiz" value="4">
                <button type="submit">解答する</button>
            </form>
        </main>

    </body>

    </html>
<?php
} ?>


<?php function Quiz5()
{ ?>
    <?php
    $jsFile = 'Quiz.json';
    $jsContent = file_get_contents($jsFile);
    $dateArray = json_decode($jsContent, true);
    ?>

    <body>
        <header>
            <nav>
                <ul>
                    <li><?php echo $dateArray['chapter' . 5]['title']; ?></li>
                </ul>
            </nav>
        </header>

        <main>
            <h1>PHP７問題集　第<?php echo "5" ?>章</h1>
            <form action="answer.php" method="post" name="form">
                <?php for ($i = 1; $i <= $dateArray['chapter' . "5"]['quizCount']; $i++) { ?>
                    <div name="Quiz">
                        <h3><?php echo "$i" . '.' . $dateArray['chapter' . "5"]['question' . "$i"]; ?></h3>
                        <?php if ($i == 2) { ?>
                            <img src="image/q5-2.png" alt="q5-2"><br>
                        <?php } elseif ($i == 4) { ?>
                            <img src="image/q5-4.png" alt="q5-4"><br>
                        <?php } elseif ($i == 6) { ?>
                            <img src="image/q5-6.png" alt="q5-6"><br>
                        <?php } elseif ($i == 7) { ?>
                            <img src="image/q5-7.png" alt="q5-7"><br>
                        <?php } elseif ($i == 9) { ?>
                            <img src="image/q5-9.png" alt="q5-9"><br>
                        <?php } elseif ($i == 10) { ?>
                            <img src="image/q5-10.png" alt="q5-10"><br>
                        <?php } ?>
                        <?php foreach ($dateArray['chapter' . "5"]['option' . "$i"] as $optionKey => $optionValue) {
                            echo '<label><input type="checkbox" name="q' . $i . '" value=' . $optionKey . '>' . $optionKey . ':' . $optionValue . '</label><br>';
                        } ?>
                    </div>
                <?php } ?>
                <input type="hidden" name="Quiz" value="5">
                <button type="submit">解答する</button>
            </form>
        </main>

    </body>

    </html>
<?php
} ?>


<?php function Quiz6()
{ ?>
    <?php
    $jsFile = 'Quiz.json';
    $jsContent = file_get_contents($jsFile);
    $dateArray = json_decode($jsContent, true);
    ?>

    <body>
        <header>
            <nav>
                <ul>
                    <li><?php echo $dateArray['chapter' . 6]['title']; ?></li>
                </ul>
            </nav>
        </header>

        <main>
            <h1>PHP７問題集　第<?php echo "6" ?>章</h1>
            <form action="answer.php" method="post" name="form">
                <?php for ($i = 1; $i <= $dateArray['chapter' . "6"]['quizCount']; $i++) { ?>
                    <div name="Quiz">
                        <h3><?php echo "$i" . '.' . $dateArray['chapter' . "6"]['question' . "$i"]; ?></h3>
                        <?php if ($i == 5) { ?>
                            <img src="image/q6-5.png" alt="q6-5"><br>
                        <?php } elseif ($i == 7) { ?>
                            <img src="image/q6-7.png" alt="q6-7"><br>
                        <?php } ?>
                        <?php foreach ($dateArray['chapter' . "6"]['option' . "$i"] as $optionKey => $optionValue) {
                            echo '<label><input type="checkbox" name="q' . $i . '" value=' . $optionKey . '>' . $optionKey . ':' . $optionValue . '</label><br>';
                        } ?>
                    </div>
                <?php } ?>
                <input type="hidden" name="Quiz" value="6">
                <button type="submit">解答する</button>
            </form>
        </main>

    </body>

    </html>
<?php
} ?>


<?php function Quiz7()
{ ?>
    <?php
    $jsFile = 'Quiz.json';
    $jsContent = file_get_contents($jsFile);
    $dateArray = json_decode($jsContent, true);
    ?>

    <body>
        <header>
            <nav>
                <ul>
                    <li><?php echo $dateArray['chapter' . 7]['title']; ?></li>
                </ul>
            </nav>
        </header>

        <main>
            <h1>PHP７問題集　第<?php echo "7" ?>章</h1>
            <form action="answer.php" method="post" name="form">
                <?php for ($i = 1; $i <= $dateArray['chapter' . "7"]['quizCount']; $i++) { ?>
                    <div name="Quiz">
                        <h3><?php echo "$i" . '.' . $dateArray['chapter' . "7"]['question' . "$i"]; ?></h3>
                        <?php if ($i == 4) { ?>
                            <img src="image/q7-4.png" alt="q7-4"><br>
                        <?php } elseif ($i == 5) { ?>
                            <img src="image/q7-5.png" alt="q7-5"><br>
                        <?php } elseif ($i == 6) { ?>
                            <img src="image/q7-6.png" alt="q7-6"><br>
                        <?php } elseif ($i == 7) { ?>
                            <img src="image/q7-7.png" alt="q7-7"><br>
                            <img src="image/q7-7.2.png" alt="q7-7.2"><br>
                        <?php } elseif ($i == 8) { ?>
                            <img src="image/q7-8.png" alt="q7-8"><br>
                        <?php } ?>
                        <?php foreach ($dateArray['chapter' . "7"]['option' . "$i"] as $optionKey => $optionValue) {
                            echo '<label><input type="checkbox" name="q' . $i . '" value=' . $optionKey . '>' . $optionKey . ':' . $optionValue . '</label><br>';
                        } ?>
                    </div>
                <?php } ?>
                <input type="hidden" name="Quiz" value="7">
                <button type="submit">解答する</button>
            </form>
        </main>

    </body>

    </html>
<?php
} ?>


<?php function Quiz8()
{ ?>
    <?php
    $jsFile = 'Quiz.json';
    $jsContent = file_get_contents($jsFile);
    $dateArray = json_decode($jsContent, true);
    ?>

    <body>
        <header>
            <nav>
                <ul>
                    <li><?php echo $dateArray['chapter' . 8]['title']; ?></li>
                </ul>
            </nav>
        </header>

        <main>
            <h1>PHP７問題集　第<?php echo "8" ?>章</h1>
            <form action="answer.php" method="post" name="form">
                <?php for ($i = 1; $i <= $dateArray['chapter' . "8"]['quizCount']; $i++) { ?>
                    <div name="Quiz">
                        <h3><?php echo "$i" . '.' . $dateArray['chapter' . "8"]['question' . "$i"]; ?></h3>
                        <?php if ($i == 5) { ?>
                            <img src="image/q8-5.png" alt="q8-5"><br>
                        <?php } elseif ($i == 6) { ?>
                            <img src="image/q8-6.png" alt="q8-6"><br>
                            <img src="image/q8-6.2.png" alt="q8-6.2"><br>
                        <?php } elseif ($i == 7) { ?>
                            <img src="image/q8-6.png" alt="q8-6"><br>
                            <img src="image/q8-7.png" alt="q8-7"><br>
                            A.<img src="image/q8-7A.png" alt="q8-7A"><br>
                            B.<img src="image/q8-7B.png" alt="q8-7B"><br>
                            C.<img src="image/q8-7C.png" alt="q8-7C"><br>
                            D.<img src="image/q8-7D.png" alt="q8-7D"><br>
                        <?php } elseif ($i == 8) { ?>
                            <img src="image/q8-8.png" alt="q8-8"><br>
                            <img src="image/q8-8.2.png" alt="q8-8.2"><br>
                            A.<img src="image/q8-8A.png" alt="q8-8A"><br>
                            B.<img src="image/q8-8B.png" alt="q8-8B"><br>
                            C.<img src="image/q8-8C.png" alt="q8-8C"><br>
                            D.<img src="image/q8-8D.png" alt="q8-8D"><br>
                        <?php } elseif ($i == 9) { ?>
                            <img src="image/q8-9.png" alt="q8-9"><br>
                            <img src="image/q8-8.png" alt="q8-8"><br>
                        <?php } elseif ($i == 10) { ?>
                            <img src="image/q8-10.png" alt="q8-10"><br>
                            <img src="image/q8-5.png" alt="q8-5"><br>
                        <?php } elseif ($i == 11) { ?>
                            <img src="image/q8-11.png" alt="q8-11"><br>
                        <?php } ?>
                        <?php foreach ($dateArray['chapter' . "8"]['option' . "$i"] as $optionKey => $optionValue) {
                            echo '<label><input type="checkbox" name="q' . $i . '" value=' . $optionKey . '>' . $optionKey . ':' . $optionValue . '</label><br>';
                        } ?>
                    </div>
                <?php } ?>
                <input type="hidden" name="Quiz" value="8">
                <button type="submit">解答する</button>
            </form>
        </main>

    </body>

    </html>
<?php
} ?>


<?php function Quiz9()
{ ?>
    <?php
    $jsFile = 'Quiz.json';
    $jsContent = file_get_contents($jsFile);
    $dateArray = json_decode($jsContent, true);
    ?>

    <body>
        <header>
            <nav>
                <ul>
                    <li><?php echo $dateArray['chapter' . 9]['title']; ?></li>
                </ul>
            </nav>
        </header>

        <main>
            <h1>PHP７問題集　第<?php echo "9" ?>章</h1>
            <form action="answer.php" method="post" name="form">
                <?php for ($i = 1; $i <= $dateArray['chapter' . "9"]['quizCount']; $i++) { ?>
                    <div name="Quiz">
                        <h3><?php echo "$i" . '.' . $dateArray['chapter' . "9"]['question' . "$i"]; ?></h3>
                        <?php if ($i == 4) { ?>
                            <img src="image/q9-4.png" alt="q9-4"><br>
                        <?php } elseif ($i == 8) { ?>
                            <img src="image/q9-8.png" alt="q9-8"><br>
                        <?php } ?>
                        <?php foreach ($dateArray['chapter' . "9"]['option' . "$i"] as $optionKey => $optionValue) {
                            echo '<label><input type="checkbox" name="q' . $i . '" value=' . $optionKey . '>' . $optionKey . ':' . $optionValue . '</label><br>';
                        } ?>
                    </div>
                <?php } ?>
                <input type="hidden" name="Quiz" value="9">
                <button type="submit">解答する</button>
            </form>
        </main>

    </body>

    </html>
<?php
} ?>


<?php function Quiz10()
{ ?>
    <?php
    $jsFile = 'Quiz.json';
    $jsContent = file_get_contents($jsFile);
    $dateArray = json_decode($jsContent, true);
    ?>

    <body>
        <header>
            <nav>
                <ul>
                    <li><?php echo $dateArray['chapter' . 10]['title']; ?></li>
                </ul>
            </nav>
        </header>

        <main>
            <h1>PHP７問題集　第<?php echo "10" ?>章</h1>
            <form action="answer.php" method="post" name="form">
                <?php for ($i = 1; $i <= $dateArray['chapter' . "10"]['quizCount']; $i++) { ?>
                    <div name="Quiz">
                        <h3><?php echo "$i" . '.' . $dateArray['chapter' . "10"]['question' . "$i"]; ?></h3>
                        <?php if ($i == 2) { ?>
                            <img src="image/q10-2.png" alt="q10-2"><br>
                        <?php } ?>
                        <?php foreach ($dateArray['chapter' . "10"]['option' . "$i"] as $optionKey => $optionValue) {
                            echo '<label><input type="checkbox" name="q' . $i . '" value=' . $optionKey . '>' . $optionKey . ':' . $optionValue . '</label><br>';
                        } ?>
                    </div>
                <?php } ?>
                <input type="hidden" name="Quiz" value="10">
                <button type="submit">解答する</button>
            </form>
        </main>

    </body>

    </html>
<?php
} ?>


<?php function Quiz11()
{ ?>
    <?php
    $jsFile = 'Quiz.json';
    $jsContent = file_get_contents($jsFile);
    $dateArray = json_decode($jsContent, true);
    ?>

    <body>
        <header>
            <nav>
                <ul>
                    <li><?php echo $dateArray['chapter' . 11]['title']; ?></li>
                </ul>
            </nav>
        </header>

        <main>
            <h1>PHP７問題集　第<?php echo "11" ?>章</h1>
            <form action="answer.php" method="post" name="form">
                <?php for ($i = 1; $i <= $dateArray['chapter' . "11"]['quizCount']; $i++) { ?>
                    <div name="Quiz">
                        <h3><?php echo "$i" . '.' . $dateArray['chapter' . "11"]['question' . "$i"]; ?></h3>
                        <?php foreach ($dateArray['chapter' . "11"]['option' . "$i"] as $optionKey => $optionValue) {
                            echo '<label><input type="checkbox" name="q' . $i . '" value=' . $optionKey . '>' . $optionKey . ':' . $optionValue . '</label><br>';
                        } ?>
                    </div>
                <?php } ?>
                <input type="hidden" name="Quiz" value="11">
                <button type="submit">解答する</button>
            </form>
        </main>

    </body>

    </html>
<?php
} ?>


<?php function Quiz12()
{ ?>
    <?php
    $jsFile = 'Quiz.json';
    $jsContent = file_get_contents($jsFile);
    $dateArray = json_decode($jsContent, true);
    ?>

    <body>
        <header>
            <nav>
                <ul>
                    <li><?php echo $dateArray['chapter' . 12]['title']; ?></li>
                </ul>
            </nav>
        </header>

        <main>
            <h1>PHP７問題集　第<?php echo "12" ?>章</h1>
            <form action="answer.php" method="post" name="form">
                <?php for ($i = 1; $i <= $dateArray['chapter' . "12"]['quizCount']; $i++) { ?>
                    <div name="Quiz">
                        <h3><?php echo "$i" . '.' . $dateArray['chapter' . "12"]['question' . "$i"]; ?></h3>
                        <?php if ($i == 8) { ?>
                            <img src="image/q12-8.png" alt="q12-8"><br>
                        <?php } ?>
                        <?php foreach ($dateArray['chapter' . "12"]['option' . "$i"] as $optionKey => $optionValue) {
                            echo '<label><input type="checkbox" name="q' . $i . '" value=' . $optionKey . '>' . $optionKey . ':' . $optionValue . '</label><br>';
                        } ?>
                    </div>
                <?php } ?>
                <input type="hidden" name="Quiz" value="12">
                <button type="submit">解答する</button>
            </form>
        </main>

    </body>

    </html>
<?php
} ?>


<?php function Quiz13()
{ ?>
    <?php
    $jsFile = 'Quiz.json';
    $jsContent = file_get_contents($jsFile);
    $dateArray = json_decode($jsContent, true);
    ?>

    <body>
        <header>
            <nav>
                <ul>
                    <li><?php echo $dateArray['chapter' . 13]['title']; ?></li>
                </ul>
            </nav>
        </header>

        <main>
            <h1>PHP７問題集　第<?php echo "13" ?>章</h1>
            <form action="answer.php" method="post" name="form">
                <?php for ($i = 1; $i <= $dateArray['chapter' . "13"]['quizCount']; $i++) { ?>
                    <div name="Quiz">
                        <h3><?php echo "$i" . '.' . $dateArray['chapter' . "13"]['question' . "$i"]; ?></h3>
                        <?php if ($i == 8) { ?>
                            <img src="image/q13-8.png" alt="q13-8"><br>
                        <?php } elseif ($i == 18) { ?>
                            <img src="image/q13-18.png" alt="q13-18"><br>
                        <?php } elseif ($i == 19) { ?>
                            <img src="image/q13-19.png" alt="q13-19"><br>
                        <?php } ?>
                        <?php foreach ($dateArray['chapter' . "13"]['option' . "$i"] as $optionKey => $optionValue) {
                            echo '<label><input type="checkbox" name="q' . $i . '" value=' . $optionKey . '>' . $optionKey . ':' . $optionValue . '</label><br>';
                        } ?>
                    </div>
                <?php } ?>
                <input type="hidden" name="Quiz" value="13">
                <button type="submit">解答する</button>
            </form>
        </main>

    </body>

    </html>
<?php
} ?>
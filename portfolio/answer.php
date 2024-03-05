<?php
session_cache_limiter('none');
session_start();

$quizNo = isset($_POST["Quiz"]) ? $_POST["Quiz"] : null; ?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>黒本道場
    </title>
    <script src="dojou.js"></script>
    <link rel="stylesheet" href="dojou.css">
</head>

<body>
    <header>
        <h1><a class="myFont" href="dojou_info.php">黒本道場</a></h1>
        <nav>
            <ul>
                <li>ほんとに？</li>
            </ul>
        </nav>
    </header>
    <main>

        <form action="judge.php" method="post">
            <input type="hidden" name="Quiz" value="<?php echo $quizNo ?>">
            <?php for ($i = 1; $i <= 20; $i++) { ?>
                <input type="hidden" name="<?php echo "q$i" ?>" value="<?php echo $_POST["q$i"] ?>">
            <?php } ?>
            <h3>解答しますか？</h3>
            <input type="button" value="内容を修正する" onclick="goBack()">
            <button type="submit">解答する</button>
        </form>

        </form>
    </main>
</body>
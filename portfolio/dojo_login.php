<?php
session_start();

// ログイン情報の確認
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // ユーザー情報をJSONファイルから読み込む
    $jsonString = file_get_contents('dojo_login.json');
    $usersData = json_decode($jsonString, true);

    // ユーザー名とパスワードの照合
    foreach ($usersData['users'] as $user) {
        if ($user['username'] === $username && $user['password'] === $password) {
            // ログイン成功
            $_SESSION['username'] = $username;
            header('Location: dojou_info.php'); // ログイン成功時のリダイレクト先
            exit();
        }
    }
    var_dump($usersData);
    // ログイン失敗
    $loginError = "Invalid username or password.";
}

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>黒本道場</title>
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
    </style>

</head>

<body>
    <header>
        <h1><a class="myFont">黒本道場</a></h1>
        <nav>
            <ul>
                <li>Hello World</li>
            </ul>
        </nav>
    </header>

    <main>

        <h2>ログイン</h2>
        <?php if (isset($loginError)) : ?>
            <p style="color: red;"><?php echo $loginError; ?></p>
        <?php endif; ?>
        <form action="dojou_info.php" method="post" name="form">
            <div>
                <div><label>Username<br><input type="text" method="post" name="name"></label></div>
                <div><label>pass<br><input type="password" method="post" name="pass"></div>
                <button type="submit">ログイン</button>
            </div>
        </form>
    </main>
</body>

</html>
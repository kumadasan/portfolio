<?php function matome()
{ ?>
    <!DOCTYPE html>
    <html lang="ja">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>無限ボタン城</title>
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
        </style>

    </head>

    <body>
        <header>
            <h1><a class="myFont">無限ボタン城</a></h1>
            <nav>
                <ul class="myFont">
                    ※黒本道場メンテナンス中
                </ul>
            </nav>
        </header>
        <button type="submit" onclick="showAlert()">submit</button>
        <!-- <button type="buuton"><img src="C:\Users\kuma\Desktop\portfolio\button.png" heigh="90" width="480" /></button> -->
        <?php
        echo '<div style="display: flex; flex-wrap:wrap;">';
        for ($i = 0; $i < 10; $i++) {
            $left = rand(0, 90);
            $top = rand(0, 90);
            echo '<button type="button" onclick="showAlert()" style="position:absolute;left:' . $left . '%;top:' . $top . '%;">ボタン</button>';
        }
        ?>
        <script>
            function showAlert() {
                alert("黒本道場はただいま");
                alert("メンテナンス中です");
                alert("またのお越しをお待ちしております");
            }
        </script>
        <!-- <a href="dojou_info.php"><button type="submit" style=<?php "position:absolute;left:' . $left . '%;top:' . $top . '%;" ?>>submit</button></a> -->
        <?php for ($i = 0; $i < 10; $i++) {
            $left = rand(0, 90);
            $top = rand(0, 90);
            $url = "dojou_info.php";
            echo '<a href="' . $url . '"style="position:absolute;left:' . $left . '%;top:' . $top . '%;">本物</button>';
        }
        echo '</div>';
        ?>
    <?php } ?>
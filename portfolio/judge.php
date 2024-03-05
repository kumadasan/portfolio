<?php
require('Quiz.php');
menu();
$questionNo = $_POST["Quiz"];
?>

<body>
    <header>
        <nav>
            <ul>
                <li>おつかれさまでした</li>
            </ul>
        </nav>
    </header>

    <main>
        <form action="dojou_info.php" method="post">
            <?php
            $jsFile = 'Quiz.json';
            $jsContent = file_get_contents($jsFile);
            $dateArray = json_decode($jsContent, true);
            ?>
            <?php
            if ($questionNo == 1) {
                $answerKey = "CADCBCBDD"; // 正解のキー
                $totalQuestions = 9;      // 質問の総数
                $userAnswers = array();   // ユーザーの回答を格納する配列
                $correctAnswers = 0;      // 正解数
            } elseif ($questionNo == 2) {
                $answerKey = "CCBABDDBCBD";
                $totalQuestions = 11;
                $userAnswers = array();
                $correctAnswers = 0;
            } elseif ($questionNo == 3) {
                $answerKey = "ABACABBCCB";
                $totalQuestions = 10;
                $userAnswers = array();
                $correctAnswers = 0;
            } elseif ($questionNo == 4) {
                $answerKey = "DEDABDBBDD";
                $totalQuestions = 10;
                $userAnswers = array();
                $correctAnswers = 0;
            } elseif ($questionNo == 5) {
                $answerKey = "DACACAAADE";
                $totalQuestions = 10;
                $userAnswers = array();
                $correctAnswers = 0;
            } elseif ($questionNo == 6) {
                $answerKey = "CBCCADCB";
                $totalQuestions = 8;
                $userAnswers = array();
                $correctAnswers = 0;
            } elseif ($questionNo == 7) {
                $answerKey = "ADBCDBAA";
                $totalQuestions = 8;
                $userAnswers = array();
                $correctAnswers = 0;
            } elseif ($questionNo == 8) {
                $answerKey = "CDBBACDCCCF";
                $totalQuestions = 11;
                $userAnswers = array();
                $correctAnswers = 0;
            } elseif ($questionNo == 9) {
                $answerKey = "CDCABBCDC";
                $totalQuestions = 9;
                $userAnswers = array();
                $correctAnswers = 0;
            } elseif ($questionNo == 10) {
                $answerKey = "ACDADBCC";
                $totalQuestions = 8;
                $userAnswers = array();
                $correctAnswers = 0;
            } elseif ($questionNo == 11) {
                $answerKey = "BCDCA";
                $totalQuestions = 5;
                $userAnswers = array();
                $correctAnswers = 0;
            } elseif ($questionNo == 12) {
                $answerKey = "CCBAADAECACDCB";
                $totalQuestions = 14;
                $userAnswers = array();
                $correctAnswers = 0;
            } elseif ($questionNo == 13) {
                $answerKey = "CDBADCCADCDDCDBACDAD";
                $totalQuestions = 20;
                $userAnswers = array();
                $correctAnswers = 0;
            }

            // ユーザーが回答した値を取得
            for ($i = 1; $i <= $totalQuestions; $i++) {
                if (isset($_POST["q" . $i])) {
                    $userAnswers[] = $_POST["q" . $i];
                }
            }

            // 正解数を計算
            for ($i = 0; $i <= $totalQuestions; $i++) {
                if (isset($userAnswers[$i]) && $userAnswers[$i] === $answerKey[$i]) {
                    $correctAnswers++;
                }
            }

            echo "正解数: " . $correctAnswers . "/$totalQuestions";
            $A = ($correctAnswers / $totalQuestions) * 100;
            $A = (int)$A;
            echo "正解率: " . $A . "%"; ?><br><br>

            <?php
            //if ($correctanswers == 0) {
            //     echo "逆に満点です";
            // } elseif ($correctanswers <= 3) {
            //     echo "あなたは「ザコ」です";
            // } elseif ($correctanswers <= 6) {
            //     echo "復習しましょう";
            // } elseif ($correctanswers <= 9) {
            //     echo "さすがです 本番ではお気をつけて";
            // } elseif ($correctanswersr == 10) {
            //     echo "満点！ おめでとうございます";
            //}
            ?>

            <?php
            for ($i = 1; $i <= $totalQuestions; $i++) {
                echo "<h4>$i. {$dateArray["chapter$questionNo"]['question' .$i]}</h4>";
                echo "<div>結果：";

                // issetを使用してPOSTされた値が存在するか確認
                if (isset($_POST["q$i"]) && $_POST["q$i"] == $answerKey[$i - 1]) {
                    echo "正解！";
                } else {
                    echo "不正解";
                }

                echo "<br><br>解説：準備中<br><br></div>";
            }
            ?>
            <a href="dojou_info.php">
                <button type="submit" method='post'>戻る</button>
            </a>
    </main>
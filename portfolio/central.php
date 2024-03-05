<?php
require('Quiz.php');

menu();


$quizType = $_GET['Page'];
switch ($quizType) {
    case 'q1':
        Quiz();
        break;
    case 'q2':
        Quiz2();
        break;
    case 'q3':
        Quiz3();
        break;
    case 'q4':
        Quiz4();
        break;
    case 'q5':
        Quiz5();
        break;
    case 'q6':
        Quiz6();
        break;
    case 'q7':
        Quiz7();
        break;
    case 'q8':
        Quiz8();
        break;
    case 'q9':
        Quiz9();
        break;
    case 'q10':
        Quiz10();
        break;
    case 'q11':
        Quiz11();
        break;
    case 'q12':
        Quiz12();
        break;
    case 'q13':
        Quiz13();
        break;
    default:
        echo '無効なクイズタイプ';
}

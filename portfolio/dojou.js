// function goBack() {
//     window.history.back();
// }
// document.getElementById('pageTitle').addEventListener('click', function () {
//     window.location.href = 'dojou_info.php';
// });

function confirmAnswer() {
    if (confirm("本当に解答しますか？")) {
        document.forms[0].submit();
    } else {
    }
}

function goBack() {
    window.history.back();
}

// // クイズデータ
// const quizData = {
//     "question1": {
//         "question": "PHPの略は？",
//         "options": { "A": "Personal Home Page", "B": "Hypertext Preprocessor", "C": "Private Hypertext Processor" },
//         "correctAnswer": "B"
//     },
//     "question2": {
//         "question": "HTMLの略は？",
//         "options": { "A": "Hypertext Markup Language", "B": "Hyperlink and Text Markup Language", "C": "High Tech Markup Language" },
//         "correctAnswer": "A"
//     }
// };

// フォームを表示する関数
// function displayQuizForm(quizData) {
//     const form = document.createElement('form');
//     form.method = 'post';
//     form.action = 'check_answers.php';

//     for (const [questionNumber, question] of Object.entries(quizData)) {
//         const questionElement = document.createElement('p');
//         questionElement.textContent = `Question ${questionNumber}: ${question['question']}`;

//         form.appendChild(questionElement);

//         for (const [optionKey, optionValue] of Object.entries(question['options'])) {
//             const label = document.createElement('label');
//             const checkbox = document.createElement('input');
//             checkbox.type = 'checkbox';
//             checkbox.name = `answers[${questionNumber}][]`;
//             checkbox.value = optionKey;

//             label.appendChild(checkbox);
//             label.appendChild(document.createTextNode(` ${optionValue}`));

//             form.appendChild(label);
//             form.appendChild(document.createElement('br'));
//         }

//         form.appendChild(document.createElement('br'));
//     }

//     const submitButton = document.createElement('input');
//     submitButton.type = 'submit';
//     submitButton.value = 'Check Answers';

//     form.appendChild(submitButton);

//     document.body.appendChild(form);
// }

// // フォームを表示
// displayQuizForm(quizData);
// quiz.js

var myArray = {
    "question1": {
        "question": "PHPの略は？",
        "options": { "A": "Personal Home Page", "B": "Hypertext Preprocessor", "C": "Private Hypertext Processor" },
        "correctAnswer": "B"
    },
    "question2": {
        "question": "HTMLの略は？",
        "options": { "A": "Hypertext Markup Language", "B": "Hyperlink and Text Markup Language", "C": "High Tech Markup Language" },
        "correctAnswer": "A"
    }
    // 追加のクイズをここに続けて追加できます
};





function displayQuizForm(quizData) {
    // HTML要素に書き出すための要素
    const outputElement = document.getElementById('output');

    // forEachを使用してquizDataの各要素にアクセス
    Object.entries(quizData).forEach(([questionNumber, question]) => {
        const questionElement = document.createElement('p');
        questionElement.textContent = `Question ${questionNumber}: ${question['question']}`;
        outputElement.appendChild(questionElement);

        // optionsの各要素にアクセス
        Object.entries(question['options']).forEach(([optionKey, optionValue]) => {
            const optionElement = document.createElement('p');
            optionElement.textContent = `Option ${optionKey}: ${optionValue}`;
            outputElement.appendChild(optionElement);
        });

        // 改行
        outputElement.appendChild(document.createElement('br'));
    });
}

<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login']) == 0) 
{
    header('location:index.php');
} else 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow&display=swap" rel="stylesheet">

</head>
<style>
body
{
    background: #d6d6d6;
}
.app{
    background: #fff;
    width: 90%;
    max-width: 600px;
    margin: 50px auto 0;
    border-radius: 10px;
    padding: 30px;
}
.quiz h2{
    font-size: 18px;
     color: #222;
     font-weight: 600;
}
.btn{
    background: #fff;
    color: #222;
    font-weight: 500;
    width: 100%;
    border: 1px solid #222;
    padding: 10px;
    margin: 10px 0;   
    text-align: left;
    border-radius: 4px;
    cursor: pointer;
}
#next-btn{
    background: #3ea3b3;
    color: #fff;
    font-weight: 500;
    width: 150px;
    border: 0;
    padding: 10px;
    margin: 20px auto 0;
    border-radius: 4px;
    cursor: pointer;
    display: none;
}
.correct{
    background: #9aeabc;
}
.incorrect{
    background: #ff9393;
} 
.custom-btn {
    background:#3ea3b3;
    color: #fff;
    font-weight: 500;
    width: 150px;
    border: 0;
    padding: 10px;
    margin: 20px auto 0;
    border-radius: 4px;
    cursor: pointer;
}

</style>
<body>
<?php
if ($_SESSION['login'] != "") {
    include('includes/menubar.php');
}
?>
<div class="app">
    <center>
        <h1>QUIZ</h1>
    </center>
    <div class="quiz3">
        <h2 id="question">Question goes here</h2>
        <div id="answer-buttons">
            <button class="btn">Answer 1</button>
            <button class="btn">Answer 2</button>
            <button class="btn">Answer 3</button>
            <button class="btn">Answer 4</button>
        </div>
        <button id="next-btn">Next</button>
        <input type="hidden" id="stuname" value="<?php echo $_SESSION['name']; ?>">
        <input type="hidden" id="stucourse" value="<?php echo $_GET['course']; ?>">

        <button id="submit-btn" class="custom-btn">Submit</button>
        <button id="certificate" class="custom-btn"> Download Certificate</button>

        <!-- <button id="playagain-btn" class="custom-btn"> Download Certificate</button> -->

    </div>
</div>
<Script>
    const questions = [{
            question: "What does PHP stand for?",
            answer: [
                { text: "Personal Home Page", correct: false },
                { text: "PHP: Hypertext Preprocessor", correct: true },
                { text: "Private Hypertext Processor", correct: false },
                { text: "Pretext Hyperprocessor", correct: false },
            ]
        },
        {
            question: "Which of the following is not a valid PHP code?",
            answer: [
                { text: "echo 'Hello World';", correct: false },
                { text: "$var = 'Hello';", correct: false },
                { text: "var x = 5;", correct: true },
                { text: "$x = 5;", correct: false },
            ]
        },
        {
            question: "How do you start a session in PHP?",
            answer: [
                { text: "session.create();", correct: false },
                { text: "session_start();", correct: true },
                { text: "start_session();", correct: false },
                { text: "sessionBegin();", correct: false },
            ]
        },
        {
            question: "What is the correct way to end a PHP statement?",
            answer: [
                { text: "End;", correct: false },
                { text: "end;", correct: false },
                { text: ";", correct: true },
                { text: ".", correct: false },
            ]
        },
        {
            question: "Which function is used to redirect the user to a different page in PHP?",
            answer: [
                { text: "redirect()", correct: false },
                { text: "location()", correct: false },
                { text: "header()", correct: true },
                { text: "forward()", correct: false },
            ]
        },
        {
            question: "What is the output of the following code? echo '5' + '5';",
            answer: [
                { text: "55", correct: false },
                { text: "10", correct: true },
                { text: "Error", correct: false },
                { text: "NaN", correct: false },
            ]
        },
        {
            question: "What is the output of the following code? $x = 10; echo ++$x;",
            answer: [
                { text: "9", correct: false },
                { text: "10", correct: true },
                { text: "11", correct: false },
                { text: "Error", correct: false },
            ]
        },
        {
            question: "Which of the following is used to create a multi-dimensional array in PHP?",
            answer: [
                { text: "[]", correct: false },
                { text: "{}", correct: false },
                { text: "()", correct: false },
                { text: "array()", correct: true },
            ]
        },
        {
            question: "What is the output of the following code? echo strlen('Hello World');",
            answer: [
                { text: "11", correct: false },
                { text: "12", correct: true },
                { text: "10", correct: false },
                { text: "Error", correct: false },
            ]
        },
        {
            question: "Which of the following is used to declare a constant in PHP?",
            answer: [
                { text: "define()", correct: true },
                { text: "const()", correct: false },
                { text: "let()", correct: false },
                { text: "constant()", correct: false },
            ]
        }
    ];

    const questionElement = document.getElementById("question");
    const answerButtons = document.getElementById("answer-buttons");
    const nextButton = document.getElementById("next-btn");
    const submitButton = document.getElementById("submit-btn");
    const playAgainButton = document.getElementById("certificate");

    let currentQuestionIndex = 0;
    let score = 0;

    function startQuiz() {
        currentQuestionIndex = 0;
        score = 0;
        nextButton.innerHTML = "Next";
        submitButton.style.display = "none"; // Hide the Submit button
        playAgainButton.style.display = "none"; // Hide the Play Again button
        showQuestion();
    }

    function showQuestion() {
        resetState();
        let currentQuestion = questions[currentQuestionIndex];
        let questionNo = currentQuestionIndex + 1;
        questionElement.innerHTML = questionNo + ". " + currentQuestion.question;

        currentQuestion.answer.forEach(answer => {
            const button = document.createElement("button");
            button.innerHTML = answer.text;
            button.classList.add("btn");
            answerButtons.appendChild(button);
            if (answer.correct) {
                button.dataset.correct = answer.correct;
            }
            button.addEventListener("click", selectAnswer);
        });
    }

    function resetState() {
        nextButton.style.display = "none";
        while (answerButtons.firstChild) {
            answerButtons.removeChild(answerButtons.firstChild);
        }
    }

    function selectAnswer(e) {
        const selectedBtn = e.target;
        const iscorrect = selectedBtn.dataset.correct === "true";
        if (iscorrect) {
            selectedBtn.classList.add("correct");
            score++;
        } else {
            selectedBtn.classList.add("incorrect");
        }
        Array.from(answerButtons.children).forEach(button => {
            if (button.dataset.correct === "true") {
                button.classList.add("correct");
            }
            button.disabled = true;
        });
        nextButton.style.display = "block";
    }

    function showScore() {
        resetState();
        questionElement.innerHTML = `You scored ${score} out of ${questions.length}!`;
        nextButton.style.display = "none";
        submitButton.style.display = "block";
        playAgainButton.style.display = "block";
    }


    function handelNextButton() {
        currentQuestionIndex++;
        if (currentQuestionIndex < questions.length) {
            showQuestion();
        } else {
            showScore();
        }
    }


    nextButton.addEventListener("click", () => {
        if (currentQuestionIndex < questions.length) {
            handelNextButton();
        } else {
            startQuiz()
        }
    });
    submitButton.addEventListener("click", () => {
    // Handle the submission of the score here
    // You can use AJAX or fetch to send the score to your server
    // For now, let's just display a message
    alert(`Total Score: ${score}`);
});

submitButton.addEventListener("click", () => {
    // Send the score to the PHP script
    fetch('submit-score.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `points=${score}`,
    })
    .then(response => {
        if (response.ok) {
            // Score submitted successfully
            alert("Successfully Submitted");
        } else {
            // Handle error
            console.error('Error submitting score');
        }
    })
    .catch(error => {
        console.error('Network error:', error);
    });
    });

    startQuiz();
</Script>
<!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
<!-- CORE JQUERY SCRIPTS -->
<script src="assets/js/jquery-1.11.1.js"></script>
<!-- BOOTSTRAP SCRIPTS  -->
<script src="assets/js/bootstrap.js"></script>
<script src="https://unpkg.com/pdf-lib/dist/pdf-lib.min.js"></script>
<script src="https://unpkg.com/@pdf-lib/fontkit@0.0.4"></script>
<script src="assets/js/certificate.js"></script>
<script src="assets/js/filesaver.js"></script>

</body>

</html>
"question": "Which tag is used to define a hyperlink in HTML?",
        "answer": [
            { "text": "<a>", "correct": true},
            { "text": "<link>", "correct": false},
            { "text": "<href>", "correct": false},
            { "text": "<hyperlink>", "correct": false}
        ]
    },
    {
        "question": "What is the correct way to include an external CSS file in HTML?",
        "answer": [
            { "text": "<style src='styles.css'>", "correct": false},
            { "text": "<css src='styles.css'>", "correct": false},
            { "text": "<link rel='stylesheet' href='styles.css'>", "correct": true},
            { "text": "<script src='styles.css'></script>", "correct": false}
        ]
    },
    {
        "question": "Which tag is used to create a list item in HTML?",
        "answer": [
            { "text": "<li>", "correct": true},
            { "text": "<ul>", "correct": false},
            { "text": "<list>", "correct": false},
            { "text": "<ol>", "correct": false}
        ]
    },
    {
        "question": "What does HTML stand for?",
        "answer": [
            { "text": "Hyper Text Markup Language", "correct": true},
            { "text": "Highly Typed Markup Language", "correct": false},
            { "text": "Hyperlinks and Text Markup Language", "correct": false},
            { "text": "Home Tool Markup Language", "correct": false}
        ]
    },
    {
        "question": "Which tag is used to define the structure of an HTML document?",
        "answer": [
            { "text": "<html>", "correct": true},
            { "text": "<head>", "correct": false},
            { "text": "<body>", "correct": false},
            { "text": "<title>", "correct": false}
        ]
    },
    {
        "question": "What is the correct HTML tag for inserting a line break?",
        "answer": [
            { "text": "<br>", "correct": true},
            { "text": "<break>", "correct": false},
            { "text": "<lb>", "correct": false},
            { "text": "<linebreak>", "correct": false}
        ]
    },
    {
        "question": "Which tag is used to display an image in HTML?",
        "answer": [
            { "text": "<img>", "correct": true},
            { "text": "<image>", "correct": false},
            { "text": "<src>", "correct": false},
            { "text": "<picture>", "correct": false}
        ]
    },
    {
        "question": "What is the correct HTML for creating a checkbox?",
        "answer": [
            { "text": "<input type='check'>", "correct": false},
            { "text": "<checkbox>", "correct": false},
            { "text": "<input type='checkbox'>", "correct": true},
            { "text": "<check>", "correct": false}
        ]
    },
    {
        "question": "Which HTML tag is used to define an unordered list?",
        "answer": [
            { "text": "<ol>", "correct": false},
            { "text": "<list>", "correct": false},
            { "text": "<ul>", "correct": true},
            { "text": "<dl>", "correct": false}
        ]
    },
    {
        "question": "What is the correct HTML for creating a hyperlink?",
        "answer": [
            { "text": "<a href='http://www.example.com'>Example</a>", "correct": true},
            { "text": "<href='http://www.example.com'>Example</href>", "correct": false},
            { "text": "<link='http://www.example.com'>Example</link>", "correct": false},
            { "text": "<hyperlink href='http://www.example.com'>Example</hyperlink>", "correct": false}
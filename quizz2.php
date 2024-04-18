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
.navbar-inverse {
    background-color: #f5f5f5;
    border-color: #0808083d;
}
</style>
<body>
<?php if($_SESSION['login']!="")
{
 include('includes/header.php');
}
?>
  <div class="app">
    <center><h1>QUIZ</h1></center>
    <div class="quiz">
      <h2 id="question">Question goes here</h2>
      <div id="answer-buttons">
        <button class="btn">Answer 1</button>
        <button class="btn">Answer 2</button>
        <button class="btn">Answer 3</button>
        <button class="btn">Answer 4</button>
      </div>
      <button id="next-btn">Next</button>
      <input type="hidden" id="stuname" value="<?php echo $_SESSION['name']; ?>" >
      <input type="hidden" id="stucourse" value="<?php echo $_GET['course']; ?>" >

      <button id="submit-btn" class="custom-btn">Submit</button>
      <button id="certificate" class="custom-btn" > Download Certificate</button>

      <!-- <button id="playagain-btn" class="custom-btn"> Download Certificate</button> -->
      
    </div>
  </div>
  <Script>
const questions = [
    {
        "question": "Which component is used to execute PHP scripts?",
        "answer": [
            { "text": "PHP Runtime", "correct": false},
            { "text": "PHP Interpreter", "correct": true},
            { "text": "PHP Compiler", "correct": false},
            { "text": "PHP Debugger", "correct": false}
        ]
    },
    {
        "question": "What is the correct way to start a PHP script?",
        "answer": [
            { "text": "tag with php", "correct": true},
            { "text": "without tag php", "correct": false},
            { "text": "script", "correct": false},
            { "text": "php", "correct": false}
        ]
    },
    {
        "question": "Which PHP function is used to output data to the screen?",
        "answer": [
            { "text": "print()", "correct": false},
            { "text": "echo()", "correct": true},
            { "text": "display()", "correct": false},
            { "text": "out()", "correct": false}
        ]
    },
    {
        "question": "What is the correct way to comment in PHP?",
        "answer": [
            { "text": "// This is a comment", "correct": false},
            { "text": "/* This is a comment */", "correct": true},
            { "text": "# This is a comment", "correct": false},
            { "text": "' This is a comment", "correct": false}
        ]
    },
    {
        "question": "What does the '$_POST' superglobal contain in PHP?",
        "answer": [
            { "text": "Cookies", "correct": false},
            { "text": "Session data", "correct": false},
            { "text": "Form data submitted with POST method", "correct": true},
            { "text": "URL parameters", "correct": false}
        ]
    },
    {
        "question": "Which PHP function is used to open a file for reading?",
        "answer": [
            { "text": "open_file()", "correct": false},
            { "text": "file_open()", "correct": false},
            { "text": "fopen()", "correct": true},
            { "text": "read_file()", "correct": false}
        ]
    },
    {
        "question": "What is the correct way to declare a variable in PHP?",
        "answer": [
            { "text": "int $x = 5;", "correct": false},
            { "text": "$x = 5;", "correct": true},
            { "text": "variable x = 5;", "correct": false},
            { "text": "declare x = 5;", "correct": false}
        ]
    },
    {
        "question": "Which PHP function is used to redirect to another URL?",
        "answer": [
            { "text": "redirect()", "correct": false},
            { "text": "header()", "correct": true},
            { "text": "location()", "correct": false},
            { "text": "forward()", "correct": false}
        ]
    },
    {
        "question": "What is the output of the following code? \n\n```php\n$x = 5;\n$y = 10;\necho $x + $y;\n```",
        "answer": [
            { "text": "15", "correct": true},
            { "text": "5", "correct": false},
            { "text": "10", "correct": false},
            { "text": "Compiler Error", "correct": false}
        ]
    },
    {
        "question": "What is the purpose of the 'return' statement in a PHP function?",
        "answer": [
            { "text": "To output a value", "correct": false},
            { "text": "To exit the function and return a value", "correct": true},
            { "text": "To restart the function", "correct": false},
            { "text": "To display an error", "correct": false},
       ] 
    },
];

const questionElement = document.getElementById("question");
const answerButtons = document.getElementById("answer-buttons");
const nextButton = document.getElementById("next-btn");
const submitButton = document.getElementById("submit-btn");
const playAgainButton = document.getElementById("certificate");

let currentQuestionIndex = 0;
let score = 0;

function startQuiz(){
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
    questionElement.innerHTML = questionNo + ". " + currentQuestion.question; // Remove the extra period after currentQuestion.question

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



function resetState(){
    nextButton.style.display = "none";
    while(answerButtons.firstChild){
        answerButtons.removeChild(answerButtons.firstChild);
    }
}

function selectAnswer(e){
    const selectedBtn = e.target;
    const iscorrect = selectedBtn.dataset.correct === "true";
    if(iscorrect){
        selectedBtn.classList.add("correct");
        score++;
    }else{
        selectedBtn.classList.add("incorrect");
    }
    Array.from(answerButtons.children).forEach(button => {
        if(button.dataset.correct === "true"){
            button.classList.add("correct");
        }
        button.disabled = true;
    });
    nextButton.style.display = "block";
}

function showScore() {
    resetState();
    questionElement.innerHTML = `You scored ${score} out of ${questions.length}!`; // Corrected template literal
    nextButton.style.display = "none"; // Hide the Next button
    submitButton.style.display = "block"; // Show the Submit button
    if (score > 7) {
        document.getElementById("certificate").style.visibility = "visible"; // Show the button
        document.getElementById("certificate").disabled = false; // Enable the button
    } else {
        document.getElementById("certificate").style.visibility = "hidden";
        document.getElementById("certificate").disabled = true; // Hide the button
    }
    playAgainButton.style.display = "block"; // Show the Play Again button
}


function   handelNextButton(){
    currentQuestionIndex++;
    if(currentQuestionIndex < questions.length){
        showQuestion();
    }else{
        showScore();
    }
}


nextButton.addEventListener("click", ()=>{
    if(currentQuestionIndex < questions.length){
        handelNextButton();
    }else{
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
        body: `score=${score}`,
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

// playAgainButton.addEventListener("click", () => {
//     startQuiz();
// });

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

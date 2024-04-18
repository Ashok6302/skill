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
    <center><h1>HTML Quiz</h1></center>
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
       
        "question": "Which tag is used to define a hyperlink in HTML?",
        "answer": [
            { "text": "a", "correct": true},
            { "text": "link", "correct": false},
            { "text": "href", "correct": false},
            { "text": "hyperlink", "correct": false}
        ]
    },
    {
        "question": "Select the Valid Statement",
       "answer": [
           { "text": "This is a header", "correct": true},
           { "text": "This is not a header", "correct": false},
           { "text": "This is a header1", "correct": false},
           { "text": "This is a header2", "correct": false}
       ] 
    },
    {
        "question": "What does HTML stand for?",
       "answer": [
           { "text": "Hyper Text Markup Language", "correct": true},
           { "text": "Hyperlinks and Text Markup Language", "correct": false},
           { "text": "Highly Typed Markup Language", "correct": false},
           { "text": "Home Tool Markup Language", "correct": false}
       ] 
    },
    {
        "question": "Which tag is used to define the structure of an HTML document?",
       "answer": [
           { "text": "html", "correct": true},
           { "text": "head", "correct": false},
           { "text": "body", "correct": false},
           { "text": "title", "correct": false}
       ] 
    },
    {
        "question": "Which tag is used to display an image in HTML?",
       "answer": [
           { "text": "img", "correct": true},
           { "text": "image", "correct": false},
           { "text": "src", "correct": false},
           { "text": "picture", "correct": false}
       ] 
    },
    {
        "question": "What is the correct HTML for creating a checkbox?",
       "answer": [
           { "text": "input type=check", "correct": false},
           { "text": "checkbox", "correct": false},
           { "text": "input type=checkbox", "correct": true},
           { "text": "check", "correct": false}
       ] 
    },
    {
        "question": "Which HTML tag is used to define an unordered list?",
       "answer": [
           { "text": "ol", "correct": false},
           { "text": "list", "correct": false},
           { "text": "ul", "correct": true},
           { "text": "dl", "correct": false}
       ] 
    },
    {
        "question": "What is the correct HTML for creating a hyperlink?",
       "answer": [
           { "text": "a href=http://www.example.com>Example", "correct": true},
           { "text": "href=http://www.example.com>Example", "correct": false},
           { "text": "link=http://www.example.com>Example", "correct": false},
           { "text": "hyperlink href=http://www.example.com>Example", "correct": false}
       ] 
    },
    {
        "question": "Which HTML tag is used to define a table?",
       "answer": [
           { "text": "table", "correct": true},
           { "text": "tab", "correct": false},
           { "text": "t", "correct": false},
           { "text": "tbl", "correct": false}
       ] 
    },
    {
        "question": "What does the DOCTYPE declaration in HTML do?",
       "answer": [
           { "text": "Defines the document type and version of HTML", "correct": true},
           { "text": "Specifies the color of the document", "correct": false},
           { "text": "Declares the document as dynamic", "correct": false},
           { "text": "Specifies the title of the document", "correct": false}
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

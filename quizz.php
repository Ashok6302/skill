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
    background: #ffffff;
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
    background-color: #fff;
    border-color: #e6dbdb;
}
</style>
<body>
<?php if($_SESSION['login']!="")

{
 
}
?>
<?php include('includes/header.php'); ?>
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
      <input type="hidden" id="stucourse" value="<?php echo $_GET['course_id']; ?>" >

      <button id="submit-btn" class="custom-btn">Submit</button>
      <button id="certificate" class="custom-btn" > Download Certificate</button>

  
      
    </div>
  </div>
 
  <script>

const questions = [];

// Check if the course ID is 1 (C program)
if (<?php echo $_GET['course_id']; ?> == 1) {
    // Add C program questions
    questions.push(
        {
        question:" Who is the father of C language?",
        
        answer: [
            { text:"James Gosling", correct: false},
            { text:"Steve Jobs", correct: false},
            { text:"Lerdorf", correct: false},
            { text:"Dennis Ritchie", correct: true},
        ]
    },
    {
        question: " Which of the following is not a valid C variable name?",
       answer: [
           { text:" int number;", correct: false},
           { text:"int $main;", correct: true},
           { text:"float rate;", correct: false},
           { text:"int variable_count;", correct: false},
       ] 
    },
    {
        question: " All keywords in C are in ____________",
       answer: [
           { text:" LowerCase letters", correct: true},
           { text:" UpperCase letters", correct: false},
           { text:"CamelCase letters", correct: false},
           { text:" None of the mentioned", correct: false},
       ] 
    },
    {
        question: " Which is valid C expression?",
       answer: [
           { text:"int my_num = 100,000;", correct: false},
           { text:"int my_num = 100000;", correct: true},
           { text:"int my num = 1000;", correct: false},
           { text:"int $my_num = 10000;", correct: false},
       ] 
    },
    {
        question: "Which of the following cannot be a variable name in C?",
       answer: [
           { text:"Volatile", correct: true},
           { text:"true", correct: false},
           { text:"friend", correct: false},
           { text:"export", correct: false},
       ] 
    },
    {
        question: "Which of the following declaration is not supported by C language?",
       answer: [
           { text:"char *str;", correct: false},
           { text:" String str;", correct: true},
           { text:"float str = 3e2;", correct: false},
           { text:"Both “String str;” and “float str = 3e2;”", correct: false},
       ] 
    },
    {
        question: " Which environment variable is used to set the C path?",
       answer: [
           { text:"MAVEN_Path", correct: false},
           { text:"CPATH", correct: false},
           { text:"C", correct: false},
           { text:"C_home", correct: true},
       ] 
    },
    {
        question: "Which of the following return-type cannot be used for a function in C",
       answer: [
           { text:"Object-oriented", correct: false},
           { text:"Use of pointers", correct: true},
           { text:"Portable", correct: false},
           { text:"Dynamic and Extensible", correct: false},
       ] 
    },
    {
        question: "The standard header _______ is used for variable list arguments (…) in C.",
       answer: [
           { text:"stdio.h", correct: false},
           { text:"math.h", correct: false},
           { text:"stdarg.h", correct: true},
           { text:"none of the mentioned", correct: false},
       ] 
    },
    {
        question: " What is the extension of C code files?",
       answer: [
           { text:".js", correct: false},
           { text:".txt", correct: false},
           { text:".class", correct: false},
           { text:".c", correct: true},
       ] 
    },
    );

} else if (<?php echo $_GET['course_id']; ?> == 4) {
    // Add Java questions
    questions.push(
        {
        question:"Which component is used to compile, debug and execute the java programs?",
        
        answer: [
            { text:"JRE", correct: false},
            { text:"JVM", correct: false},
            { text:"I", correct: false},
            { text:"JDK", correct: true},
        ]
    },
    {
        question: "Select the Valid Statement",
       answer: [
           { text:"char[] ch = new char(5)", correct: false},
           { text:"char[] ch = new char[5]", correct: true},
           { text:"char[] ch = new char()", correct: false},
           { text:"char[] ch = new char[]", correct: false},
       ] 
    },
    {
        question: "when an array is passed to a method, what does the method receive?",
       answer: [
           { text:"the reference of the array", correct: true},
           { text:"a copy of the array", correct: false},
           { text:"length of an array", correct: false},
           { text:"copy of the first elements", correct: false},
       ] 
    },
    {
        question: "Which of the following is not a Java features?",
       answer: [
           { text:"Dynamic", correct: false},
           { text:"Architecture Neutral", correct: false},
           { text:"Use of pointers", correct: true},
           { text:"Object-oriented", correct: false},
       ] 
    },
    {
        question: "_____ is used to find and fix bugs in the Java programs.",
       answer: [
           { text:"Dynamic", correct: false},
           { text:"JRE", correct: false},
           { text:"JDK", correct: false},
           { text:"JDB", correct: true},
       ] 
    },
    {
        question: " Who invented Java Programming?",
       answer: [
           { text:"Guido van Rossum", correct: false},
           { text:"James Gosling", correct: true},
           { text:"Dennis Ritchie", correct: false},
           { text:"Bjarne Stroustrup", correct: false},
       ] 
    },
    {
        question: " Which environment variable is used to set the java path?",
       answer: [
           { text:"MAVEN_Path", correct: false},
           { text:"javaPATH", correct: false},
           { text:"JAVA", correct: false},
           { text:"java_home", correct: true},
       ] 
    },
    {
        question: " Which one of the following is not a Java feature?",
       answer: [
           { text:"Object-oriented", correct: false},
           { text:"Use of pointers", correct: true},
           { text:"Portable", correct: false},
           { text:"Dynamic and Extensible", correct: false},
       ] 
    },
    {
        question: " Which of these cannot be used for a variable name in Java?",
       answer: [
           { text:"identifier & keyword", correct: false},
           { text:"identifier", correct: false},
           { text:"keyword", correct: true},
           { text:"none of the mentioned", correct: false},
       ] 
    },
    {
        question: " What is the extension of java code files?",
       answer: [
           { text:".js", correct: false},
           { text:".txt", correct: false},
           { text:".class", correct: false},
           { text:".java", correct: true},
       ] 
    },
        // Add more Java questions as needed
    );
}else if (<?php echo $_GET['course_id']; ?> == 3) {
    // Add Java questions
    questions.push(
        {
        question:"Which component is used to compile, debug and execute the java programs?",
        
        answer: [
            { text:"JRE", correct: false},
            { text:"JVM", correct: false},
            { text:"I", correct: false},
            { text:"JDK", correct: true},
        ]
    },
    {
        question: "Select the Valid Statement",
       answer: [
           { text:"char[] ch = new char(5)", correct: false},
           { text:"char[] ch = new char[5]", correct: true},
           { text:"char[] ch = new char()", correct: false},
           { text:"char[] ch = new char[]", correct: false},
       ] 
    },
    {
        question: "when an array is passed to a method, what does the method receive?",
       answer: [
           { text:"the reference of the array", correct: true},
           { text:"a copy of the array", correct: false},
           { text:"length of an array", correct: false},
           { text:"copy of the first elements", correct: false},
       ] 
    },
    {
        question: "Which of the following is not a Java features?",
       answer: [
           { text:"Dynamic", correct: false},
           { text:"Architecture Neutral", correct: false},
           { text:"Use of pointers", correct: true},
           { text:"Object-oriented", correct: false},
       ] 
    },
    {
        question: "_____ is used to find and fix bugs in the Java programs.",
       answer: [
           { text:"Dynamic", correct: false},
           { text:"JRE", correct: false},
           { text:"JDK", correct: false},
           { text:"JDB", correct: true},
       ] 
    },
    {
        question: " Who invented Java Programming?",
       answer: [
           { text:"Guido van Rossum", correct: false},
           { text:"James Gosling", correct: true},
           { text:"Dennis Ritchie", correct: false},
           { text:"Bjarne Stroustrup", correct: false},
       ] 
    },
    {
        question: " Which environment variable is used to set the java path?",
       answer: [
           { text:"MAVEN_Path", correct: false},
           { text:"javaPATH", correct: false},
           { text:"JAVA", correct: false},
           { text:"java_home", correct: true},
       ] 
    },
    {
        question: " Which one of the following is not a Java feature?",
       answer: [
           { text:"Object-oriented", correct: false},
           { text:"Use of pointers", correct: true},
           { text:"Portable", correct: false},
           { text:"Dynamic and Extensible", correct: false},
       ] 
    },
    {
        question: " Which of these cannot be used for a variable name in Java?",
       answer: [
           { text:"identifier & keyword", correct: false},
           { text:"identifier", correct: false},
           { text:"keyword", correct: true},
           { text:"none of the mentioned", correct: false},
       ] 
    },
    {
        question: " What is the extension of java code files?",
       answer: [
           { text:".js", correct: false},
           { text:".txt", correct: false},
           { text:".class", correct: false},
           { text:".java", correct: true},
       ] 
    },
        // Add more Java questions as needed
    );
}else if (<?php echo $_GET['course_id']; ?> == 2) {
    // Add Java questions
    questions.push(
        {
        question:"Which component is used to compile, debug and execute the java programs?",
        
        answer: [
            { text:"JRE", correct: false},
            { text:"JVM", correct: false},
            { text:"I", correct: false},
            { text:"JDK", correct: true},
        ]
    },
    {
        question: "Select the Valid Statement",
       answer: [
           { text:"char[] ch = new char(5)", correct: false},
           { text:"char[] ch = new char[5]", correct: true},
           { text:"char[] ch = new char()", correct: false},
           { text:"char[] ch = new char[]", correct: false},
       ] 
    },
    {
        question: "when an array is passed to a method, what does the method receive?",
       answer: [
           { text:"the reference of the array", correct: true},
           { text:"a copy of the array", correct: false},
           { text:"length of an array", correct: false},
           { text:"copy of the first elements", correct: false},
       ] 
    },
    {
        question: "Which of the following is not a Java features?",
       answer: [
           { text:"Dynamic", correct: false},
           { text:"Architecture Neutral", correct: false},
           { text:"Use of pointers", correct: true},
           { text:"Object-oriented", correct: false},
       ] 
    },
    {
        question: "_____ is used to find and fix bugs in the Java programs.",
       answer: [
           { text:"Dynamic", correct: false},
           { text:"JRE", correct: false},
           { text:"JDK", correct: false},
           { text:"JDB", correct: true},
       ] 
    },
    {
        question: " Who invented Java Programming?",
       answer: [
           { text:"Guido van Rossum", correct: false},
           { text:"James Gosling", correct: true},
           { text:"Dennis Ritchie", correct: false},
           { text:"Bjarne Stroustrup", correct: false},
       ] 
    },
    {
        question: " Which environment variable is used to set the java path?",
       answer: [
           { text:"MAVEN_Path", correct: false},
           { text:"javaPATH", correct: false},
           { text:"JAVA", correct: false},
           { text:"java_home", correct: true},
       ] 
    },
    {
        question: " Which one of the following is not a Java feature?",
       answer: [
           { text:"Object-oriented", correct: false},
           { text:"Use of pointers", correct: true},
           { text:"Portable", correct: false},
           { text:"Dynamic and Extensible", correct: false},
       ] 
    },
    {
        question: " Which of these cannot be used for a variable name in Java?",
       answer: [
           { text:"identifier & keyword", correct: false},
           { text:"identifier", correct: false},
           { text:"keyword", correct: true},
           { text:"none of the mentioned", correct: false},
       ] 
    },
    {
        question: " What is the extension of java code files?",
       answer: [
           { text:".js", correct: false},
           { text:".txt", correct: false},
           { text:".class", correct: false},
           { text:".java", correct: true},
       ] 
    },
        // Add more Java questions as needed
    );
}else if (<?php echo $_GET['course_id']; ?> == 2) {
    // Add Java questions
    questions.push(
        {
        question:"Which component is used to compile, debug and execute the java programs?",
        
        answer: [
            { text:"JRE", correct: false},
            { text:"JVM", correct: false},
            { text:"I", correct: false},
            { text:"JDK", correct: true},
        ]
    },
    {
        question: "Select the Valid Statement",
       answer: [
           { text:"char[] ch = new char(5)", correct: false},
           { text:"char[] ch = new char[5]", correct: true},
           { text:"char[] ch = new char()", correct: false},
           { text:"char[] ch = new char[]", correct: false},
       ] 
    },
    {
        question: "when an array is passed to a method, what does the method receive?",
       answer: [
           { text:"the reference of the array", correct: true},
           { text:"a copy of the array", correct: false},
           { text:"length of an array", correct: false},
           { text:"copy of the first elements", correct: false},
       ] 
    },
    {
        question: "Which of the following is not a Java features?",
       answer: [
           { text:"Dynamic", correct: false},
           { text:"Architecture Neutral", correct: false},
           { text:"Use of pointers", correct: true},
           { text:"Object-oriented", correct: false},
       ] 
    },
    {
        question: "_____ is used to find and fix bugs in the Java programs.",
       answer: [
           { text:"Dynamic", correct: false},
           { text:"JRE", correct: false},
           { text:"JDK", correct: false},
           { text:"JDB", correct: true},
       ] 
    },
    {
        question: " Who invented Java Programming?",
       answer: [
           { text:"Guido van Rossum", correct: false},
           { text:"James Gosling", correct: true},
           { text:"Dennis Ritchie", correct: false},
           { text:"Bjarne Stroustrup", correct: false},
       ] 
    },
    {
        question: " Which environment variable is used to set the java path?",
       answer: [
           { text:"MAVEN_Path", correct: false},
           { text:"javaPATH", correct: false},
           { text:"JAVA", correct: false},
           { text:"java_home", correct: true},
       ] 
    },
    {
        question: " Which one of the following is not a Java feature?",
       answer: [
           { text:"Object-oriented", correct: false},
           { text:"Use of pointers", correct: true},
           { text:"Portable", correct: false},
           { text:"Dynamic and Extensible", correct: false},
       ] 
    },
    {
        question: " Which of these cannot be used for a variable name in Java?",
       answer: [
           { text:"identifier & keyword", correct: false},
           { text:"identifier", correct: false},
           { text:"keyword", correct: true},
           { text:"none of the mentioned", correct: false},
       ] 
    },
    {
        question: " What is the extension of java code files?",
       answer: [
           { text:".js", correct: false},
           { text:".txt", correct: false},
           { text:".class", correct: false},
           { text:".java", correct: true},
       ] 
    },
        // Add more Java questions as needed
    );


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

// playAgainButton.addEventListener("click", () => {
//     startQuiz();
// });

startQuiz();
</script>
  
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

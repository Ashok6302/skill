<!DOCTYPE html>
<html>
<head>
    <title>Chatbox</title>
    <style>
        /* Add some basic styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: blue;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .chat-container {
            width: 300px;
            margin: 20px auto;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            padding: 20px;
        }

        .chat-header {
            background-color: #333;
            color: white;
            padding: 10px;
            font-weight: bold;
            text-align: center;
        }

        .chat-messages {
            max-height: 300px;
            overflow-y: auto;
            padding: 10px;
        }

        .chat-input {
            width: 100%;
            padding: 10px;
            border: none;
            outline: none;
        }
    </style>
</head>
<body>
<center>
<div class="square-button">
        <img src="image/Studylogin.png" width="50" height="50" alt="Image 2">
</center>
</div>

<div class="navbar">
    <a href="MockTest.php">Home</a>
    <a href="About.php">About</a>
    <a href="#">Services</a>
    <a href="contact.php">Contact</a>
</div>

<div class="chat-container">
    <div class="chat-header">
        Chatbot
    </div>
    <div class="chat-messages" id="chat-messages">
        <!-- Chat messages will appear here -->
    </div>
    <input type="text" class="chat-input" id="user-input" placeholder="Type a message...">
</div>

<script>
    // JavaScript for handling user input and chatbot responses
    const userInput = document.getElementById("user-input");
    const chatMessages = document.getElementById("chat-messages");

    userInput.addEventListener("keyup", function(event) 
    {
        if (event.key === "Enter") 
        {
            sendMessage();
        }
    });

    function sendMessage() 
    {
        const userMessage = userInput.value;
        if (userMessage.trim() === "") 
        {
            return;
        }
        chatMessages.innerHTML += '<div class="user-message">You: ' + userMessage + '</div>';
        userInput.value = "";

        // Replace the following with code to make an API request to your chatbot service
        fetch("YOUR_CHATBOT_API_ENDPOINT", 
        {
            method: "POST",
            headers: 
            {
                "Content-Type": "application/json",
                "Authorization": "Bearer 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" // Place your API key here
            },
            body: JSON.stringify({ userMessage: userMessage })
        })
        .then(response => response.json())
        .then(data => {
            const botResponse = data.response; // Adjust this to match the API response structure
            chatMessages.innerHTML += '<div class="bot-message">Bot: ' + botResponse + '</div>';
        })
        .catch(error => {
            console.error("Error sending message:", error);
        });
    }
</script>

</body>
</html>

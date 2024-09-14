<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot with OpenAI</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        .chat-container {
            width: 400px;
            height: 500px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #fff;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }
        .chat-box {
            flex: 1;
            padding: 10px;
            overflow-y: auto;
            border-bottom: 1px solid #ccc;
        }
        .input-box {
            display: flex;
            border-top: 1px solid #ccc;
        }
        .input-box input {
            flex: 1;
            padding: 10px;
            border: none;
            border-radius: 0;
        }
        .input-box button {
            padding: 10px;
            border: none;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }
        .input-box button:hover {
            background-color: #0056b3;
        }
        .message {
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
        }
        .message.user {
            background-color: #e1ffc7;
            text-align: right;
        }
        .message.bot {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <div class="chat-container">
        <div class="chat-box" id="chat-box"></div>
        <div class="input-box">
            <input type="text" id="user-input" placeholder="Type a message..." />
            <button onclick="sendMessage()">Send</button>
        </div>
    </div>
    <script>
        async function sendMessage() {
            const userInput = document.getElementById('user-input').value;
            if (userInput.trim() === '') return;

            // Display user message
            const chatBox = document.getElementById('chat-box');
            const userMessage = document.createElement('div');
            userMessage.classList.add('message', 'user');
            userMessage.textContent = userInput;
            chatBox.appendChild(userMessage);

            // Clear input field
            document.getElementById('user-input').value = '';

            // Fetch response from OpenAI API
            const botResponse = await getBotResponse(userInput);
            const botMessage = document.createElement('div');
            botMessage.classList.add('message', 'bot');
            botMessage.textContent = botResponse;
            chatBox.appendChild(botMessage);

            // Scroll to the bottom
            chatBox.scrollTop = chatBox.scrollHeight;
        }

        async function getBotResponse(input) {
            const apiKey = 'sk-svcacct-CHQzp_l_ygFAmFCcwpV__qOxTqTgbTuZiJIA_ysEwWUr3yTXCnHS3lGi8c5WT3BlbkFJzQCk4DLMaFG8fSmNQne133BVXVFQwxlE0xTI5RuZsXw38dTYkzA83R7lKr8A'; // Replace with your OpenAI API key

            try {
                const response = await fetch('https://api.openai.com/v1/chat/completions', {
                    method: 'POST',
                    headers: {
                        'Authorization': `Bearer ${apiKey}`,
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        model: 'gpt-3.5-turbo', // Updated to use the latest model
                        messages: [{ role: 'user', content: input }],
                        max_tokens: 50
                    })
                });

                if (!response.ok) {
                    const errorText = await response.text();
                    throw new Error(`HTTP error! Status: ${response.status}, Response: ${errorText}`);
                }

                const data = await response.json();
                if (data.choices && data.choices.length > 0) {
                    return data.choices[0].message.content.trim();
                } else {
                    throw new Error('No choices returned in response.');
                }
            } catch (error) {
                console.error('Error fetching response:', error);
                return `Error: ${error.message}`;
            }
        }
    </script>
</body>
</html>

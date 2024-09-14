<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Multiple Choice Quiz</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: black;
        }

        .container {
            width: 80%;
            max-width: 800px;
            margin: 50px auto;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 15%;
        }

        .title {
            text-align: center;
            font-size: 34px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        .question {
            font-size: 26px;
            color: #333;
            margin: 30px;
        }

        .options {
            list-style: none;
        }

        .option {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            font-size: 20px;
        }

        .option input {
            margin-right: 10px;
            margin-left: 40px;
        }

        .button {
            display: inline-block;
            width: 75%;
            height: 40px;
            border: none;
            background-color: #333;
            color: white;
            font-size: 16px;
            cursor: pointer;
            margin: 20px;
            margin-left: 6rem;
        }

        .button:hover {
            background-color: #444;
        }

        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 10;
        }

        .modal-content {
            width: 80%;
            max-width: 500px;
            margin: 50px auto;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .modal-title {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        .modal-score {
            text-align: center;
            font-size: 18px;
            color: #333;
            margin-bottom: 20px;
        }

        .modal-close {
            display: block;
            width: 100%;
            height: 40px;
            border: none;
            background-color: #333;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .modal-close:hover {
            background-color: #444;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">Simple Multiple Choice Quiz</h1>
        <h2 class="question"></h2>
        <ul class="options"></ul>
        <button class="button">Submit</button>
    </div>
    <div class="modal">
        <div class="modal-content">
            <h1 class="modal-title">Quiz Completed</h1>
            <h2 class="modal-score"></h2>
            <button class="modal-close">Close</button>
        </div>
    </div>
    <script>
        // Get the HTML elements
        const questionElement = document.querySelector(".question");
        const optionsElement = document.querySelector(".options");
        const buttonElement = document.querySelector(".button");
        const modalElement = document.querySelector(".modal");
        const modalScoreElement = document.querySelector(".modal-score");
        const modalCloseElement = document.querySelector(".modal-close");

        // Define the quiz data
        const quizData = [
            {
                question: "Who developed the C language?",
                options: ["Guido van Rossum", "Brendan Eich", "Dennis Ritchie", "Rasmus Lerdorf"],
                answer: "Dennis Ritchie"
            },
            {
                question: "In which year C language was developed?",
                options: ["1972", "1954", "1866", "1845"],
                answer: "1972"
            },
            {
                question: "What is the full Form of BCPL?",
                options: ["Basic Computer Professional Language", "Basic Combined Programming Language", "Basic Core Programming Language", "Basic Computing Processing Logic"],
                answer: "Basic Combined Programming Language "
            },
            {
                question: "Which Type of Language is C?",
                options: ["Low Level Language", "High Lavel Language", "Middle Level Language", "None of the above"],
                answer: "Middle Level Language"
            },
            {
                question: "C is based on which language?",
                options: ["Compiler", "Interpreter", "Both of the above", "None of the above"],
                answer: "Compiler"
            },
            {
                question: "Which symbol is used to terminate the C statement?",
                options: [":", ";", "/", "//"],
                answer: ";"
            },
            {
                question: "Where was C language invented?",
                options: ["Linux Laboratory", "Bell Laboratory", "Networking Laboratory", "Database Laboratory"],
                answer: "Bell Laboratory"
            },
            {
                question: "For what purpose C language was invented?",
                options: ["To create websites", "To perform arithmetic operations", "To have a feature rich general programming language", "To create Apps"],
                answer: "To have a feature rich general programming language"
            },
            {
                question: "Which is/are an advantage of a C language?",
                options: ["It supports a powerful set of operators", "Assembly language can be inserted in it", "It is highly portable on any OS platform", "All of the above "],
                answer: "All of the above"
            },
            {
                question: "Which is/are a disadvantage of a C language?",
                options: ["Lack of Object Oriented Programming", "Inefficient memory management", "No concept of namespace", "All of the above"],
                answer: "All of the above"
            },
        ];

        // Define the quiz variables
        let currentQuestionIndex = 0;
        let score = 0;

        // Generate a new question
        function generateQuestion() {
            // Clear the previous question and options
            questionElement.innerHTML = "";
            optionsElement.innerHTML = "";

            // Get the current question and its options
            const currentQuestion = quizData[currentQuestionIndex];
            const question = currentQuestion.question;
            const options = currentQuestion.options;

            // Display the question and options
            questionElement.textContent = question;
            options.forEach(option => {
                const optionElement = document.createElement("li");
                optionElement.classList.add("option");
                optionElement.innerHTML = `<input type="radio" name="option" value="${option}"><label>${option}</label>`;
                optionsElement.appendChild(optionElement);
            });
        }

        // Check the answer
        function checkAnswer() {
            // Get the user's selected option
            const selectedOption = document.querySelector('input[name="option"]:checked');

            // If the user has not selected any option, show a message and return
            if (!selectedOption) {
                alert("Please select an option");
                return;
            }

            // Get the value of the selected option
            const selectedValue = selectedOption.value;

            // Get the correct answer of the current question
            const correctAnswer = quizData[currentQuestionIndex].answer;

            // Compare the selected value and the correct answer
            // If they are equal, increment the score
            if (selectedValue === correctAnswer) {
                score++;
            }

            // Deselect the option
            selectedOption.checked = false;

            // Increment the current question index
            currentQuestionIndex++;

            // If there are more questions, generate the next question
            // Otherwise, show the score modal
            if (currentQuestionIndex < quizData.length) {
                generateQuestion();
            } else {
                showScore();
            }
        }

        // Show the score
        function showScore() {
            // Display the score in the modal
            modalScoreElement.textContent = `You scored ${score} out of ${quizData.length}`;

            // Show the modal
            modalElement.style.display = "block";
        }

        // Close the score
        function closeScore() {
            // Hide the modal
            modalElement.style.display = "none";

            // Reset the score and the current question index
            score = 0;
            currentQuestionIndex = 0;

            // Generate a new question
            generateQuestion();
        }

        // Add event listeners to the button and the modal close button
        buttonElement.addEventListener("click", checkAnswer);
        modalCloseElement.addEventListener("click", closeScore);

        // Generate the first question
        generateQuestion();
    </script>
</body>
</html>

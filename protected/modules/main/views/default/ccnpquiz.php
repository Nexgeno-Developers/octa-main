<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MCQ Quiz</title>
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <!-- Stylesheet -->
<style>
.header-space {
    padding-bottom: 0px;
}
.css-1yzzujv.eqd5v0k1 {
    display: none;
}
div#freez_bar {
    display: none;
}
section#footer-top {
    display: none;
}
footer#footer {
    display: none;
}
body {
	background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
	background-size: 400% 400%;
	animation: gradient 15s ease infinite;
	height: 100vh;
}

@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}
  .start-screen,
  .score-container {
    position: relative;
    
    width: 100%;
    height: 100vh;
    max-height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }
  button {
    border: none;
    outline: none;
    cursor: pointer;
  }
  #start-button,
  #restart {
    font-size: 1.3em;
    padding: 0.5em 1.8em;
    border-radius: 0.2em;
  }
  #restart {
    margin-top: 0.9em;
  }
  #display-container {
    background-color: #ffffff;
    padding: 1.1em 1.8em 5em;
    width: 100%;
    max-width: 37.5em;
    /*margin: 60px auto;*/
    position: absolute;
    transform: translate(-50%, -50%);
    top: 50%;
    left: 50%;
    border-radius: 0.6em;
  }
  .header {
    margin-bottom: 1.8em;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-bottom: 0.6em;
    border-bottom: 0.1em solid #c0bfd2;
  }
  .timer-div {
    background-color: #e1f5fe;
    width: 7.5em;
    border-radius: 1.8em;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0.7em 1.8em;
  }
  .question {
    margin-bottom: 1.25em;
    font-weight: 600;
  }
  .option-div {
    font-size: 0.9em;
    width: 100%;
    padding: 1em;
    margin: 0.3em 0;
    text-align: left;
    outline: none;
    background: transparent;
    border: 1px solid #c0bfd2;
    border-radius: 0.3em;
  }
  .option-div:disabled {
    color: #000000;
    cursor: not-allowed;
  }
  #next-button {
    font-size: 1em;
    margin-top: 1.5em;
    background-color: #0a69ed;
    color: #ffffff;
    padding: 0.7em 1.8em;
    border-radius: 0.3em;
    float: right;
  }
  .hide {
    display: none;
  }
  .incorrect {
    background-color: #ffdde0;
    color: #d32f2f;
    border-color: #d32f2f;
  }
  .correct {
    background-color: #e7f6d5;
    color: #689f38;
    border-color: #689f38;
  }
  #user-score {
    font-size: 1.5em;
    color: #000;
  }
  /*@media (min-width:1100px) and (max-width:1800px) {*/
  /*    #display-container {margin: 50px auto 44px; }*/
  /*      }*/
  /*@media (min-width:992px) and (max-width:1100px) {*/
  /*    #display-container {margin: 160px auto 42px; }*/
  /*      }*/
  
  /*@media (min-width:768px) and (max-width:991px) {*/
  /*    #display-container {margin: 110px auto 50px; }*/
  
  /*@media (max-width:767px){*/
  /*    #display-container {padding: 1.1em 1.8em 5em !important; margin: 90px auto 45px;}*/
  /*}*/
  
</style>
</head>

<body>
  <div class="container">  
  <div id="display-container" class="hide">
    <div class="header">
      <div class="number-of-count">
        <span class="number-of-question">1 of 10 questions</span>
      </div>
      <div class="timer-div">
          <img src="/img/stopwatch.png" />
        <!--<img src="timer-icon.svg" />-->
        <span class="time-left">30s</span>
      </div>
    </div>
    <div id="container">
      <!-- questions and options will be displayed here -->
    </div>
    <button id="next-button">Next</button>
  </div>
   <div class="start-screen">
    <button id="start-button">Start</button>
  </div>
  <div class="score-container hide">
    <div id="user-score">Demo Score</div>
    <button id="restart">Restart</button>
  </div>
  </div>
  <!-- Script -->
  <!--<script src="script.js"></script>-->
  <script>
      //References
let timeLeft = document.querySelector(".time-left");
let quizContainer = document.getElementById("container");
let nextBtn = document.getElementById("next-button");
let countOfQuestion = document.querySelector(".number-of-question");
let displayContainer = document.getElementById("display-container");
let scoreContainer = document.querySelector(".score-container");
let restart = document.getElementById("restart");
let userScore = document.getElementById("user-score");
let startScreen = document.querySelector(".start-screen");
let startButton = document.getElementById("start-button");
let questionCount;
let scoreCount = 0;
let count = 30;
let countdown;

//Questions and Options array

const quizArray = [
  {
    id: "0",
    question: "Q) Full form of CCNA –",
    options: ["Cisco Certified Network Associate", "CCNA Certified Network Association", "Certified of Cisco Network Administration", "Cisco Certified Network Association"],
    correct: "Cisco Certified Network Associate",
  },
  {
    id: "1",
    question: "Q) Which of the following company is associated with CCNA –",
    options: ["Microsoft", "Google", "Apple", "Cisco"],
    correct: "Cisco",
  },

  {
    id: "2",
    question: "Q) Which of the following command is used to find the joined multicast groups for an IPv6 interface –",
    options: ["Router# Show ipv6 multicast", "Router# Show ipv6 groups", "Router# Show ipv6 interface gi 0/1", "Router# Show ipv6 multicast groups"],
    correct: "Router# Show ipv6 interface gi 0/1",
  },
  {
    id: "3",
    question: "Q) Link State Routing protocols are used algorithm –",
    options: ["DUAL", "Bellman-Ford", "Dijkstra", "None of the above"],
    correct: "Dijkstra",
  },
  {
    id: "4",
    question: "Q) Which of the following command is used to configure the Switch –",
    options: ["User EXEC mode", "Bellman-Ford", "Dijkstra", "None of the above"],
    correct: "Dijkstra",
  },
  {
    id: "5",
    question: "Q) Which of the following has stored the startup configuration of a Router –",
    options: ["ROM", "Flash", "RAM", "NVRAM"],
    correct: "NVRAM",
  },
  {
    id: "6",
    question: "Q) When are link-state packets sent to the neighbors –",
    options: ["Every 30 seconds", "Every 60 seconds", "Every 180 seconds", "When a link goes up or down"],
    correct: "When a link goes up or down",
  },
  {
    id: "7",
    question: "Q) How many bytes is an Ethernet address –",
    options: ["4", "6", "16", "48"],
    correct: "6",
  },
  {
    id: "8",
    question: "Q) Which of the following command is used to show the RIP routing updates –",
    options: ["Show ip route", "Show ip protocol", "Show ip rip", "Debug ip rip"],
    correct: "Debug ip rip",
  },
  {
    id: "9",
    question: "Q) Where the EIGRP successor routes are stored –",
    options: ["In the Neighbor only", "In the Routing table only", "In the Topology and Neighbor table only", "In the Routing and the Topology table"],
    correct: "In the Routing and the Topology table",
  },
];

//Restart Quiz
restart.addEventListener("click", () => {
  initial();
  displayContainer.classList.remove("hide");
  scoreContainer.classList.add("hide");
});

//Next Button
nextBtn.addEventListener(
  "click",
  (displayNext = () => {
    //increment questionCount
    questionCount += 1;
    //if last question
    if (questionCount == quizArray.length) {
      //hide question container and display score
      displayContainer.classList.add("hide");
      scoreContainer.classList.remove("hide");
      //user score
      userScore.innerHTML =
        "Your score is " + scoreCount + " out of " + questionCount;
    } else {
      //display questionCount
      countOfQuestion.innerHTML =
        questionCount + 1 + " of " + quizArray.length + " Question";
      //display quiz
      quizDisplay(questionCount);
      count = 30;
      clearInterval(countdown);
      timerDisplay();
    }
  })
);

//Timer
const timerDisplay = () => {
  countdown = setInterval(() => {
    count--;
    timeLeft.innerHTML = `${count}s`;
    if (count == 0) {
      clearInterval(countdown);
      displayNext();
    }
  }, 1000);
};

//Display quiz
const quizDisplay = (questionCount) => {
  let quizCards = document.querySelectorAll(".container-mid");
  //Hide other cards
  quizCards.forEach((card) => {
    card.classList.add("hide");
  });
  //display current question card
  quizCards[questionCount].classList.remove("hide");
};

//Quiz Creation
function quizCreator() {
  //randomly sort questions
  quizArray.sort(() => Math.random() - 0.5);
  //generate quiz
  for (let i of quizArray) {
    //randomly sort options
    i.options.sort(() => Math.random() - 0.5);
    //quiz card creation
    let div = document.createElement("div");
    div.classList.add("container-mid", "hide");
    //question number
    countOfQuestion.innerHTML = 1 + " of " + quizArray.length + " Question";
    //question
    let question_DIV = document.createElement("p");
    question_DIV.classList.add("question");
    question_DIV.innerHTML = i.question;
    div.appendChild(question_DIV);
    //options
    div.innerHTML += `
    <button class="option-div" onclick="checker(this)">${i.options[0]}</button>
     <button class="option-div" onclick="checker(this)">${i.options[1]}</button>
      <button class="option-div" onclick="checker(this)">${i.options[2]}</button>
       <button class="option-div" onclick="checker(this)">${i.options[3]}</button>
    `;
    quizContainer.appendChild(div);
  }
}

//Checker Function to check if option is correct or not
function checker(userOption) {
  let userSolution = userOption.innerText;
  let question =
    document.getElementsByClassName("container-mid")[questionCount];
  let options = question.querySelectorAll(".option-div");

  //if user clicked answer == correct option stored in object
  if (userSolution === quizArray[questionCount].correct) {
    userOption.classList.add("correct");
    scoreCount++;
  } else {
    userOption.classList.add("incorrect");
    //For marking the correct option
    options.forEach((element) => {
      if (element.innerText == quizArray[questionCount].correct) {
        element.classList.add("correct");
      }
    });
  }

  //clear interval(stop timer)
  clearInterval(countdown);
  //disable all options
  options.forEach((element) => {
    element.disabled = true;
  });
}

//initial setup
function initial() {
  quizContainer.innerHTML = "";
  questionCount = 0;
  scoreCount = 0;
  count = 30;
  clearInterval(countdown);
  timerDisplay();
  quizCreator();
  quizDisplay(questionCount);
}

//when user click on start button
startButton.addEventListener("click", () => {
  startScreen.classList.add("hide");
  displayContainer.classList.remove("hide");
  initial();
});

//hide quiz and display start screen
window.onload = () => {
  startScreen.classList.remove("hide");
  displayContainer.classList.add("hide");
};
  </script>
</body>

</html>
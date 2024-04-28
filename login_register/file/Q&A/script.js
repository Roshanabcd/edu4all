const quizData = [
    {
      question: 'C is a_______ language?',
      options: ['high level', 'low level', 'middle level', 'assembly level'],
      answer: 'middle level',
    },
    {
      question: 'Logic of a program is called:',
      options: ['syntax', 'semantics', 'flowchart', 'debugging'],
      answer: 'semantics',
    },
    {
      question: 'C	programs	are converted into machine language with the help of -',
      options: ['An Editor', 'An operating system', 'None of the above.', 'A compiler'],
      answer: 'A compiler',
    },
    {
      question: 'C can be used on-',
      options: ['Only MS-DOS operating system', 'Only Linux operating system', 'Only Windows operating system', 'All the above'],
      answer: 'd.	All the above',
    },
    {
      question: 'A whole number with a decimal point is known as: ',
      options: [
        'floating point number',
        'character',
        'integer',
        'None of these above',
      ],
      answer: 'floating point number',
    },
    {
      question: 'If a is an integer variable, a =5/2 will return a value. ',
      options: ['2.5', '3', '2', '0'],
      answer: '2',
    },
    {
      question: 'Arithmetic instructions can not Contain-',
      options: [
        'variables',
        'constant',
        'variable names on right of equal.',
        'variable names on left of equal.',
      ],
      answer: 'variables',
    },
    {
      question: 'The break statement is used to exit from:',
      
      options: ['An if statement', 'A for loop', 'A program', 'The main() function'],
      answer: 'A for loop',
    },
    {
      question: 'A do-while loop is useful when we want that the statements within the loop must be executed:',
      options: [
        'Only once',
        'Atleast once',
        'More than once',
        'None of the above',
      ],
      answer: 'Atleast once',
    },
    {
      question: 'In what sequence the initialization, condition, execution is done in the do- while loop-',
      options: ['a.	Initialization, testing, execution.', 'Initialization, execution, testing', 'Testing, execution, Initialization', 'None'],
      answer: 'Initialization, execution, testing',
    },
  ];
  
  const quizContainer = document.getElementById('quiz');
  const resultContainer = document.getElementById('result');
  const submitButton = document.getElementById('submit');
  const retryButton = document.getElementById('retry');
  const showAnswerButton = document.getElementById('showAnswer');
  
  let currentQuestion = 0;
  let score = 0;
  let incorrectAnswers = [];
  
  function shuffleArray(array) {
    for (let i = array.length - 1; i > 0; i--) {
      const j = Math.floor(Math.random() * (i + 1));
      [array[i], array[j]] = [array[j], array[i]];
    }
  }
  
  function displayQuestion() {
    const questionData = quizData[currentQuestion];
  
    const questionElement = document.createElement('div');
    questionElement.className = 'question';
    questionElement.innerHTML = questionData.question;
  
    const optionsElement = document.createElement('div');
    optionsElement.className = 'options';
  
    const shuffledOptions = [...questionData.options];
    shuffleArray(shuffledOptions);
  
    for (let i = 0; i < shuffledOptions.length; i++) {
      const option = document.createElement('label');
      option.className = 'option';
  
      const radio = document.createElement('input');
      radio.type = 'radio';
      radio.name = 'quiz';
      radio.value = shuffledOptions[i];
  
      const optionText = document.createTextNode(shuffledOptions[i]);
  
      option.appendChild(radio);
      option.appendChild(optionText);
      optionsElement.appendChild(option);
    }
  
    quizContainer.innerHTML = '';
    quizContainer.appendChild(questionElement);
    quizContainer.appendChild(optionsElement);
  }
  
  function checkAnswer() {
    const selectedOption = document.querySelector('input[name="quiz"]:checked');
    if (selectedOption) {
      const answer = selectedOption.value;
      if (answer === quizData[currentQuestion].answer) {
        score++;
      } else {
        incorrectAnswers.push({
          question: quizData[currentQuestion].question,
          incorrectAnswer: answer,
          correctAnswer: quizData[currentQuestion].answer,
        });
      }
      currentQuestion++;
      selectedOption.checked = false;
      if (currentQuestion < quizData.length) {
        displayQuestion();
      } else {
        displayResult();
      }
    }
  }
  
  function displayResult() {
    quizContainer.style.display = 'none';
    submitButton.style.display = 'none';
    retryButton.style.display = 'inline-block';
    showAnswerButton.style.display = 'inline-block';
    resultContainer.innerHTML = `You scored ${score} out of ${quizData.length}!`;
  }
  
  function retryQuiz() {
    currentQuestion = 0;
    score = 0;
    incorrectAnswers = [];
    quizContainer.style.display = 'block';
    submitButton.style.display = 'inline-block';
    retryButton.style.display = 'none';
    showAnswerButton.style.display = 'none';
    resultContainer.innerHTML = '';
    displayQuestion();
  }
  
  function showAnswer() {
    quizContainer.style.display = 'none';
    submitButton.style.display = 'none';
    retryButton.style.display = 'inline-block';
    showAnswerButton.style.display = 'none';
  
    let incorrectAnswersHtml = '';
    for (let i = 0; i < incorrectAnswers.length; i++) {
      incorrectAnswersHtml += `
        <p>
          <strong>Question:</strong> ${incorrectAnswers[i].question}<br>
          <strong>Your Answer:</strong> ${incorrectAnswers[i].incorrectAnswer}<br>
          <strong>Correct Answer:</strong> ${incorrectAnswers[i].correctAnswer}
        </p>
      `;
    }
  
    resultContainer.innerHTML = `
      <p>You scored ${score} out of ${quizData.length}!</p>
      <p>Incorrect Answers:</p>
      ${incorrectAnswersHtml}
    `;
  }
  
  submitButton.addEventListener('click', checkAnswer);
  retryButton.addEventListener('click', retryQuiz);
  showAnswerButton.addEventListener('click', showAnswer);
  
  displayQuestion();
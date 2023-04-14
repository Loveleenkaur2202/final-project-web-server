// Generate an array of 6 random letters from A to Z
function generateRandomLetters() {
    let letters = [];
    for (let i = 0; i < 6; i++) {
      let randomCharCode = Math.floor(Math.random() * 26) + 65; // Generate random char code between 65 (A) and 90 (Z)
      let randomLetter = String.fromCharCode(randomCharCode);
      letters.push(randomLetter);
    }
    return letters;
  }
  
  let lettersToGuess = generateRandomLetters(); // Generate random letters
  
  let lives = 6; // Number of lives
  
  // Display the randomly generated letters to the user
  console.log("Randomly generated letters: " + lettersToGuess.join(" "));
  
  // Get user input using a form
  document.getElementById("guessForm").addEventListener("submit", function (event) {
    event.preventDefault();
  
    // Get user input from form
    let userGuesses = [];
    for (let i = 1; i <= 6; i++) {
      let userInput = document.getElementById("guess" + i).value.toUpperCase();
      userGuesses.push(userInput);
    }
  
    // Check if user guesses are in descending order
    let isDescending = true;
    for (let i = 0; i < userGuesses.length - 1; i++) {
      if (userGuesses[i] < userGuesses[i + 1]) {
        isDescending = false;
        break;
      }
    }
  
    // Check if user guesses are correct and update lives accordingly
    if (isDescending && JSON.stringify(userGuesses) === JSON.stringify(lettersToGuess)) {
      console.log("Congratulations! You guessed correctly!");
      window.location.href = 'level3.php';
    } else {
      lives--;
      console.log("Incorrect guesses. Lives remaining: " + lives);
      if (lives === 0) {
        console.log("Game over. You ran out of lives.");
      }
    }
  });
  
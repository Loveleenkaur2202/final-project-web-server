// Array to store randomly generated letters
let letters = [];

// Generate 6 random letters from 'a' to 'z'
for (let i = 0; i < 6; i++) {
  let letter = String.fromCharCode(97 + Math.floor(Math.random() * 26)); // Generate a random letter using ASCII code
  letters.push(letter);
}

// Sort the generated letters in ascending order
letters.sort();

// Variable to keep track of the number of lives
let lives = 6;

// Function to check if the user's input is in ascending order
function checkOrder() {
  let input = document.getElementById('input').value;
  let inputArray = input.split('');
  if (inputArray.length !== 6) {
    alert('Please enter exactly 6 letters!');
    return;
  }
   for (let i = 0; i < 6; i++) {
    if (inputArray[i] !== letters[i]) {
      lives--;
      if (lives == 0) {
        alert('Game Over! You ran out of lives.');
        location.href = "logout.php"; // Reload the page to start a new game
      }
       else {
        
        alert('Wrong order!');
        
        return;
      }
    }
  }
  alert('Congratulations! You guessed the letters in ascending order!');
  //session_start(); 
  //$_SESSION['level_won'] = true; 
  $("#form").append("<p><a href='level1.php'>Play Again</a></p>");
			$("#form").append("<p><a href='level2.php'>Go to Next level</a></p>");
  
  
}

// Display the generated letters on the webpage
document.getElementById('letters').textContent = letters.join(' ');

// Add event listener for form submission
document.getElementById('form').addEventListener('submit', function(event) {
  event.preventDefault();
  checkOrder();
});

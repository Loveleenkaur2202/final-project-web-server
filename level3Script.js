document.getElementById("form").addEventListener("submit", function(event) {
    event.preventDefault();
    var input = document.getElementById("input").value;
    var numbers = document.getElementById("numbers").innerText.trim().replace(/, /g, ',');
    var sortedNumbers = numbers.split(",").map(Number).sort((a, b) => a - b).join(",");
    let lives = 6;
    if (input === sortedNumbers) {
         alert("Congratulations! You have arranged the numbers correctly.");
         //session_start(); 
			//$_SESSION['level_won'] = true;
    } else {
        alert("Oops! The numbers are not arranged correctly. Please try again.");
       
        /* if (lives === 0) {
            console.log("Game over. You ran out of lives.");
            location.href="logout.php";
          } */
    }
});

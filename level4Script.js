document.getElementById("form").addEventListener("submit", function(event) {
    event.preventDefault();
    var input = document.getElementById("input").value;
    var numbers = document.getElementById("numbers").innerText.trim().replace(/, /g, ',');
    var sortedNumbers = numbers.split(",").map(Number).sort((a, b) => b - a).join(",");
    let lives = 6;
    if (input === sortedNumbers) {
         alert("Congratulations! You have arranged the numbers correctly.");
         //session_start(); 
		 //$_SESSION['level_won'] = true;
         $("#form").append("<p><a href='level4.php'>Play Again</a></p>");
         $("#form").append("<p><a href='level5.php'>Go to Next level</a></p>");
    } else {
        alert("Oops! The numbers are not arranged correctly. Please try again.");
       /*  lives--;
        alert(`Wrong order! You have ${lives} lives remaining.`);
        if (lives === 0) {
            console.log("Game over. You ran out of lives.");
            location.href="logout.php"; */
    }
}

);

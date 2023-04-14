document.getElementById("form").addEventListener("submit", function(event) {
    event.preventDefault();
    var input = document.getElementById("input").value;
    var numbers = document.getElementById("numbers").innerText.trim().replace(/, /g, ',');
    var sortedNumbers = numbers.split(",").map(Number).sort((a, b) => b - a).join(",");
    
    if (input === sortedNumbers) {
         alert("Congratulations! You have arranged the numbers correctly.");
         session_start(); 
		 $_SESSION['level_won'] = true;
    } else {
        alert("Oops! The numbers are not arranged correctly. Please try again.");
    }
});

<!DOCTYPE html>
<html>
  <head>
    <title>Contact Developers</title>
    <link href="css/contactStyle.css" rel="stylesheet" type="text/css">
    <?php
        include_once 'header.php';
    ?>
  </head>
  <body>
    <h2>Contact Developers</h2>
    <form>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <label for="subject">Subject:</label>
      <input type="text" id="subject" name="subject" required>
      <label for="message">Message:</label>
      <textarea id="message" name="message" rows="5" cols="30" required></textarea>
      <br>
      <input type="submit" value="Submit" onclick="return sendEmail();">
    </form>
    <div id="message"></div>
    <script>
      function sendEmail() {
        // You can add your own code here to send the email to the developers.
        // For this example, we'll just display a message to the user.
        /*const messageDiv = document.getElementById("message");
        messageDiv.innerText = "Thank you for contacting us. Your message has been sent!"*/ 
        alert("Thank you for contacting us. Your message has been sent!");
        return false; // Prevent the form from actually submitting.
      }
    </script>
    <?php
        include_once 'footer.php';
    ?>
  </body>
</html>

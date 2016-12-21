<?php 

if($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING));
  $email = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
  $details = trim(filter_input(INPUT_POST, "details", FILTER_SANITIZE_SPECIAL_CHARS));
  
  if($name == "" || $email == "" || $details == "") {
    echo("Please fill in all fields");
    exit;
  }
  
  if($_POST["address"] != "") {
    echo("Bad form input");
    exit;
  }
  
  require("includes/phpmailer/class.phpmailer.php");
  
  //Send Email
  $message = "Thank you $name for your interest.<br>";
  $message .= "I have your email address as $email<br>";
  $message .= "I have also received your message:  $details<br>";
  $message .= "I will get back to you as soon as i can";
  $message .= "<p>Best Regards,<br>Chris</p>";
  echo($message);

  //Redirect to thanks.php
  header("location:suggest.php?status=thanks");
}

$pageTitle = "Suggest a Media Item";
$section = "suggest";
include("includes/header.php");

?>

<div class="section page">
  <div class="wrapper">
    
    <h1>Suggest a Media Item</h1>
    <?php
    if(isset($_GET["status"]) && $_GET["status"] == "thanks") {
      echo("<p>Thanks for the email! I will check out your suggestion</p>");
    }else { ?>
      
    <p>If you think there is something I&rsquo;m missing, let me know ya dingus! Complete the form to send it to me over the interwebs</p>
      
    
    <form method="post" action="suggest.php">
      <table>
        <tr>
          <th><label for="name">Name: </label></th>
          <td><input type="text" name="name" id="name"></td>
        </tr>
        <tr>
          <th><label for="email">Email: </label></th>
          <td><input type="text" name="email" id="email"></td>
        </tr>
        <tr style="display: none;"><!--HoneyPot Field-->
          <th><label for="address">Address: </label></th>
          <td><input type="text" name="address" id="address"></td>
        </tr>
        <tr>
          <th><label for="details">Suggest Details: </label></th>
          <td><textarea name="details" id="details"></textarea></td>
        </tr>
      </table>
      <input type="submit" value="Send it over ya dingus!">
    </form>
    <?php } ?>
  </div>
</div>

<?php include("includes/footer.php"); ?>
      
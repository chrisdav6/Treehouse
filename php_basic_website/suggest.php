<?php 
$pageTitle = "Suggest a Media Item";
$section = "suggest";
include("includes/header.php"); 
?>

<div class="section page">
  <div class="wrapper">
    
    <h1>Suggest a Media Item</h1>
    
    <p>If you think there is something I&rsquo;m missing, let me know ya dingus! Complete the form to send it to me over the interwebs</p>
    
    <form method="post" action="process.php">
      <table>
        <tr>
          <th><label for="name">Name: </label></th>
          <td><input type="text" name="name" id="name"></td>
        </tr>
        <tr>
          <th><label for="email">Email: </label></th>
          <td><input type="text" name="email" id="email"></td>
        </tr>
        <tr>
          <th><label for="details">Suggest Details: </label></th>
          <td><textarea name="details" id="details"></textarea></td>
        </tr>
      </table>
      <input type="submit" value="Send it over ya dingus!">
    </form>
    
  </div>
</div>

<?php include("includes/footer.php"); ?>
			
<?php 
include("includes/data.php");
include("includes/functions.php");
$pageTitle = "Full Catalog";
$section = null;

if(isset($_GET["cat"])) {
  if($_GET["cat"] == "books") {
      $pageTitle = "Books";
      $section = "books";
  }elseif($_GET["cat"] == "movies"){
      $pageTitle = "Movies";
      $section = "movies";
  }elseif($_GET["cat"] == "music"){
      $pageTitle = "Music";
      $section = "music";
  }
}

include("includes/header.php"); 
?>

<div class="section catalog page">
  <div class="wrapper">
    <h1><?php echo($pageTitle); ?></h1>
    <ul class="items">
      <?php
      $catagories = arrayCatagory($catalog, $section);
      foreach($catagories as $id) {
        echo(get_item_html($catagories, $catalog[$id]));
      }
      ?>
    </ul>
  </div>
</div>

<?php include("includes/footer.php"); ?>
      
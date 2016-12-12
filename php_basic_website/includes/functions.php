<?php

function get_item_html($id, $item) {
  $output = "<li><a href='#'><img src='" . $item["img"] . "' alt='" . $item["title"] . "'><p>View Details</p></a></li>";
  return $output;
}

function arrayCatagory($catalog, $catagory) {
  if($catagory == null) {
    return array_keys($catalog);
  }
  $output = [];
  
  foreach($catalog as $id => $item) {
    if(strtolower($catagory) == strtolower($item["category"])) {
      $output[] = $id;
    }
  }
  return $output;
}

?>
<?php

function get_item_html($id, $item) {
  $output = "<li><a href='#'><img src='" . $item["img"] . "' alt='" . $item["title"] . "'><p>View Details</p></a></li>";
  return $output;
}

function arrayCatagory($catalog, $catagory) {
  
  $output = [];
  
  foreach($catalog as $id => $item) {
    if($catagory == null OR strtolower($catagory) == strtolower($item["category"])) {
      $sort = $item["title"];
      $sort = ltrim($sort, "The ");
      $sort = ltrim($sort, "A ");
      $sort = ltrim($sort, "An ");
      $output[$id] = $sort;
    }
  }
  asort($output);
  return array_keys($output);
}

?>
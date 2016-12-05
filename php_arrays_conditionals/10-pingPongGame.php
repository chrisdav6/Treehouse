<?php

//php ping pong game using arrays and loops

$player1 = 0;
$player2 = 0;
$rounds = 0;

//player must reach 11 and be a minimum 2 points higher than opponent to WIN
//While the difference between player1 and player 2 is less than 2 or player1 and player2 is lass than 11 continue loop
while(abs($player1 - $player2) < 2 || ($player1 < 11 && $player2 < 11)) {
  //increment the round
  $rounds++;
  echo("<h2>Round - $rounds</h2>");
  if(rand(0,1)) {
    $player1++;
  } else {
    $player2++;
  }
  echo("<p>Player 1 Score = $player1</p>");
  echo("<p>Player 2 Score = $player2</p>");
}

if($player1 > $player2) {
  echo("<h1>Player 1 Wins! With a score of $player1 - After $rounds rounds!</h1>");
} else {
  echo("<h1>Player 2 Wins! With a score of $player2 - After $rounds rounds!</h1>");
}

?>
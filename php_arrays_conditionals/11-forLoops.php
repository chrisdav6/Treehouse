<?php

//Working with for loops. Same syntax as javascript for loops

$year = 2016;

for($counter = 1896; $counter <= $year; $counter++) {
  $events = [
    1906 => "<p style='color: tomato; font-size: 30px;'>The year is $counter. 1st animated cartoon copyrighted</p>",
    1916 => "<p style='color: teal; font-size: 30px;'>The year is $counter. The toggle light switch is invented by William J. Newton and Morris Goldberg</p>",
    1926 => "<p style='color: orange; font-size: 30px;'>The year is $counter. John Logie Baird conducts the first public demonstration of a television</p>",
    1936 => "<p style='color: blue; font-size: 30px;'>The year is $counter. Jesse Owens wins 4 Gold medals in Berlin</p>",
    1946 => "<p style='color: green; font-size: 30px;'>The year is $counter. The ENIAC (Electronic Numerical Integrator and Computer) is revealed at the University of Pennsylvania</p>",
    1956 => "<p style='color: red; font-size: 30px;'>The year is $counter. Elvis Presley releases his first hit \"Hearbreak Hotel\"</p>",
    1966 => "<p style='color: purple; font-size: 30px;'>The year is $counter. The \"Batman\" television series starring Adam West debuts on ABC</p>",
    1976 => "<p style='color: steelblue; font-size: 30px;'>The year is $counter. My birth year!</p>",
    1986 => "<p style='color: salmon; font-size: 30px;'>The year is $counter. The Space Shuttle Challenger disintegrates 73 seconds after launching, killing all seven astronauts on board.</p>",
    1996 => "<p style='color: lime; font-size: 30px;'>The year is $counter. In 12 months number of Internet host computers goes from 1 million to 10 million</p>",
    2006 => "<p style='color: darkblue; font-size: 30px;'>The year is $counter. NASA launches the New Horizons probe</p>"
  ];
  
  switch($counter) {
    case 1906:
      echo($events["1906"]);
      break;
    case 1916:
      echo($events["1916"]);
      break;
    case 1926:
      echo($events["1926"]);
      break;
    case 1936:
      echo($events["1936"]);
      break;
    case 1946:
      echo($events["1946"]);
      break;
    case 1956:
      echo($events["1956"]);
      break;
    case 1966:
      echo($events["1966"]);
      break;
    case 1976:
      echo($events["1976"]);
      break;
    case 1986:
      echo($events["1986"]);
      break;
    case 1996:
      echo($events["1996"]);
      break;
    case 2006:
      echo($events["2006"]);
      break;
    default:
      echo("<p>The year is $counter</p>");
      break;
  };
};

?>
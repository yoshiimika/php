<?php
for($num = 1 ; $num <= 50 ; $num++){
  if($num % 3 === 0){
  echo "Fizz";
  }
  elseif($num % 5 === 0){
  echo "Buzz";
  }
  elseif($num % 15 === 0){
  echo "FizzBuzz";
  }
  else{
  echo $num;
  }
}

echo "<br>";

for($I=1 ; $I<=5 ; $I++){
for($i=1 ; $i<=5 ; $i++){
  echo "●";
}
echo "<br>";
}
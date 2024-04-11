<?php

function score($score1,$score2,$score3){
  $total=$score1+$score2+$score3;
  if($total > 210)
  echo "合計点は".$total."点なので合格です";
  else{
  echo "合計点は".$total."点なので不合格です";
  }
}

echo (score(95,50,80));
<?php
function goukaku($score1, $score2, $score3)
{
  // $score1 = 100;
  // $score2 = 200;
  // $score3 = 20;
  return $score1 + $score2 + $score3;
}

$total = goukaku(100,200,20);
if($total >210){
    echo "合計点は".$total."なので合格です";
}
else{
    echo "合計点は".$total."なので不合格です";
}
echo "<br />";

function getSquareArea($base, $height)
{
  return $base * $height;
}
function getTriangleArea($base, $height)
{
  return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
  return ($upperBase + $lowerBase) * $height / 2;
}

echo getSquareArea(5, 5) . "\n";
echo getTriangleArea(7, 8) . "\n";
echo getTrapezoidArea(4, 5, 4);
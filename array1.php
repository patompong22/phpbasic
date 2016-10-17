<?php

$cat=array("toyota","honda","isuzu");
print_r($cat);
echo '<hr>';

$count_cat= count($cat);

//echo $count_cat;
//echo '<hr>';
//
//$count_cat= conut($cat);
//echo $cat[1];

for ($x = 0; $x < $count_cat; $x++) {
   echo $cat[$x];
   echo '<br>';
}
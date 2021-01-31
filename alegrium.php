<?php 

function findNumber(int $index)
{
    $numbers ='';
    for($i = 1; $i <= $index; $i ++) :
        $numbers .= $i;
    endfor;

   $num_array = str_split($numbers);

   return $num_array[$index - 1];

}

echo findNumber(5);
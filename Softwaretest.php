<?php
function sortedIntArray($intval, $intNumSize, $tagNum){
    $l=0;
    $h=$intNumSize-1; // 21 - 1
    $mid=($l+$h)/2; // (0 + 20) / 2
    while($l<$h) // 0 < 20
    {
        if($tagNum==$intval[$mid]) // if (22 == 12[10])
        {
            return $intval[$l]; //
        }
        elseif($tagNum<$intval[$mid]) {
            $h=$mid-1;
            return $mid=($l+$h)/2;
        }
        elseif($tagNum<$intval[$mid]) {
            $h=$mid-1;
            return $mid=($l+$h)/2;
        }
        else {
            $l=$mid+1;
            return $mid=($l+$h)/2;
        }
    }
}

print_r (sortedIntArray(12, 21, 22));
?>
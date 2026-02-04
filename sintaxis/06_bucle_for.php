<?php

for($i = 0; $i < 10; $i++){
    echo $i;
}

echo "<br>";

for($j = 1; $j < 10; $j++){
    if($j % 2 == 0){
        continue;
    }
    echo $j;
}
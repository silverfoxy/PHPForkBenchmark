<?php

// $a = [];
// for ($i = 0; $i < 100000; $i++) {
//     $a[] = [1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1];
// }
// for ($i = 0; $i < 100000; $i++) {
//     $a[] = $i;
//     if ($i % 50000 === 0) {
//         echo 'Waiting for 5 sec'.PHP_EOL;
//         sleep(5);
//     }
// }
// $pidcount = 1;
for ($i = 0; $i < 0; $i++) {
    // $pidcount++;
    $childpid = pcntl_fork();
    // if ($childpid === 0) {
    //     echo 'Forking ('.$pidcount.')'.PHP_EOL;
    //     $a[$i] = $i;
    // }
    // else {
    //     echo 'In parent'.PHP_EOL;
    //     // $b = 2;
    // }
}

echo 'Array length is now: '.PHP_EOL;

sleep(600);
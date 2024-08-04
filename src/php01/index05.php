<?php
// $count = 0;

// while ($count < 20) {
//     $count += 1;
//     echo $count . '<br>';
// }

// $count = 0;
// while ($count <= 100) {
//     if ($count === 20) {
//         break;
//     }
//     if ($count % 3 === 0) {
//     $count++;
//     continue;
//     }
//     echo $count . '<br>';
//     $count++;
// }

// $num = 0;
// do {
//     echo 'nom =' . $num . '<br>';
//     $num += 1;
// } while ($num < 3);

for ($i = 1; $i < 6; $i++) {
    for ($j = 1; $j < 6; $j++) {
        echo "⚫︎";
    }
    echo "<br>";
}
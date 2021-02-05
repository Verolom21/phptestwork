<?php
// 1.
$A= [];
for ($i=0; $i<10; $i++) {
    for ($j=0;$j<10;$j++) {
        $A[$i][$j] = rand(1,20);
    }
}



// 2.
$B = [];
for ($i=0; $i<10; $i++) {
    $B[] = rand(1,20);
}



// 3.
$table = '<table>';
for ($i=0; $i<count($A); $i++) {
    $table .= '<tr>';
    for ($j=0; $j<count($A[$j]); $j++) {
        $table .= '<td>'.$A[$i][$j].'</td>';
    }
    $table .= '</tr>';
}
$table .= '</table>';
echo $table;
echo '<br><br>';



// 4.
foreach ($A as $i=>$elemA) {
    $A[$i] = array_intersect($elemA, $B);
}
echo '<pre>';



// 5.
$table2 = '<table><tr>';
foreach ($B as $elem) {
    $table2 .= "<td><b>$elem</b></td>";
}

$table2 .= '</tr>';

for ($i=0; $i<10; $i++) {
    $table2 .= '<tr>';
    for ($j=0; $j<10; $j++) {
        if (isset($A[$i][$j])) {
            $table2 .= '<td>'.$A[$i][$j].'</td>';
        } else {
            $table2 .= '<td>Нет</td>';
        }

    }
    $table2 .= '</tr>';
}

$table2 .= '</table>';
echo $table2;

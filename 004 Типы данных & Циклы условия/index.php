<?php
$text = 'Academy';
echo gettype($text);

echo '<br>';

$number = 555;
echo gettype($number);

echo '<br>';

//double
$num = 555.5;
echo gettype($num);

echo '<br>';

$bool = true;
echo gettype($bool);

echo '<br>';
var_dump((bool) $text);

class ForTest {};
$objectTest = new ForTest();
echo '<br>';
echo gettype($objectTest);

$fruits = array('1','2','3');
$fruits2 = ['1','2','3'];
echo '<br>';
echo gettype($fruits);
echo '<br>';
echo gettype($fruits2);
echo '<br>';

echo $fruits[0];
echo '<br>';

$fruits[3] = '33';
echo '<br>';

var_dump($fruits);
echo '<br>';

print_r($fruits);
echo '<br>';

$arr = ['dog' => 'Rex', 'cat'=>'Barsik'];
echo '<br>';
echo $arr['dog'];

echo '<br>';
$arrMany = [
    [1,2,3],
    ['test','test2'],
];
echo '<br>';
echo $arrMany[1][1];
echo '<br><br>';

$name = 'Artem';
if ($name === 'Oleg') {
    echo 'good day';
} else if ($name === 'Artem') {
    echo 'Good night';
} else {
    echo 'Good morning';
}
echo '<br><br>';

$text = $name===true ? 1 : 2;
echo $text;

echo '<br><br>';

$num = 33;

switch ($num) {
    case 1:
        echo '$num = 1';
        break;
    case 2:
        echo '$num = 2';
        break;
    case 3:
        echo '$num = 3';
        break;
    default:
        echo '$num = default';
        break;
}

echo '<br><br>';

$numbers = 10;
while ($numbers < 15) {
    echo $numbers . '<br>';
    $numbers++;
}

echo '<br><br>';

do {
    echo $numbers;
} while ($numbers >20);

echo '<br><br>';

for ($i = 0; $i < 10; $i++) {
    if ($i===3){
        continue;
    }
    echo $i . '<br>';
}
echo '<br><br>';

$arrr = [1,2,3];
foreach ($arrr as $key => $value) {
    echo $key . ' ' . $value . '<br>';
}

echo '<br><br>';

$arrr2 = ['dog' => 'Rex', 'cat'=>'Barsik'];
foreach ($arrr2 as $key => $value) {
    echo $key . ' ' . $value . '<br>';
}




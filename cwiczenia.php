<?php declare(strict_types=1);
require dirname(__FILE__).'/inc/debug.inc.php';

$data = range(1, 10);

/**
 * Math power for int
 * 
 * @param int $value Value
 *                   
 * @return int Result
 */
function power(int $value) : int
{
    return (int)($value * $value);
}

var_dump($data);

$data = array_map('power', $data);

var_dump($data);

$tab = ['plum', 'orange', 'banana', 'apple'];
function biger(string $value) : string{
    return strtoupper($value);
}
$tab = array_map('biger',$tab);
var_dump($tab);

//implode i explode do rozdzielania i złączania stirngow

$array = ['lastname', 'email', 'phone'];
var_dump($array);
var_dump(implode(",", $array)); // string(20) "lastname,email,phone"
$text = 'lastname email phone';
$new_text = explode(" ", $text);
var_dump($new_text);

//

$yes =  'this is a string';

echo is_array($yes) ? 'Array' : 'not an Array';
echo "\n";

//in_array
$os = array("Mac", "NTa", "Irix", "Linux");
echo in_array("NT",$os) ? "Yes, in array" : "Nope";

$persons = [
    [
        'first_name' => 'Mark',
        'surname' => 'Brown',
        'age' => '21',
    ],
    [
        'first_name' => 'John',
        'surname' => 'Doe',
        'age' => '22',
    ],
    [
        'first_name' => 'Ann',
        'surname' => 'SMITH',
        'age' => '18',
    ],
];
echo '<table>';
echo '<tr><th>Imię</th><th>Nazwisko</th><th>Wiek</th></tr>'; // Nagłówek dla porządku
sort($persons);
foreach ($persons as $key => $value) {
    echo '<tr>';
    echo "<td>" . strtoupper($value['first_name']) . "</td>";
    echo '<td>' . strtolower($value['surname']) . '</td>';
    echo "<td>{$value['age']}</td>";
    echo '</tr>';
}

echo '</table>';
